<?php

namespace App\Http\Controllers\Auth;

use App\Http\Requests\SignUpRequest;
use App\Jobs\CreateUserJob;
use App\Mail\EmailVerification;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Show Sign Up form
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showSignUpForm()
    {
        return view('pages.guest.sign-up');
    }

    public function handleSignUpFormRequest(SignUpRequest $signUpRequest)
    {
        $email = $signUpRequest->input('email');
        $verification_code = generateVerificationCode();
        $response = Mail::to($email)->send(new EmailVerification($email, $verification_code));
        if (is_null($response)) {
            $signUpRequest->session()->flash('email', $email);
            $signUpRequest->session()->flash('verification_code', $verification_code);
            return redirect()->route('email.verification.code');
        }

        Session::put('failed', "Something went wrong. We're unable to send verification code at the moment. Please try in a while!");
        redirect()->back();
    }

    /**
     * Show Email Verification Form
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showEmailVerificationForm()
    {
        if (Session::has('email')) {
            return view('pages.guest.email-verification');
        }
        return redirect()->to('sign.up');
    }

    public function handleEmailVerificationFormRequest(SignUpRequest $request)
    {
        return $request->session()->get('verification_code');
        try {
            $job = new CreateUserJob($request->email);
            $this->dispatch($job);
            Auth::onceUsingId(User::where('email', $request->email)->first()->id);
            return redirect()->route('email.verification.code');
        } catch (\Exception $exception) {
            Session::put('error', 'User creation failed. Please try again in a while!');
            return redirect()->back()->withInput();
        }
    }

    /**
     * Show User Details Form
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showUserDetailsForm()
    {
        return view('pages.guest.user-details');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }
}
