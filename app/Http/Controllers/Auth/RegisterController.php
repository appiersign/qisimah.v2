<?php

namespace App\Http\Controllers\Auth;

use App\Http\Requests\EmailVerificationRequest;
use App\Http\Requests\SignUpRequest;
use App\Jobs\CreateUserJob;
use App\Mail\EmailVerification;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
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
            $signUpRequest->session()->put('email', $email);
            $signUpRequest->session()->put('verification_code', $verification_code);
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
            Session::put('email', Session::get('email'));
            Session::put('verification_code', Session::get('verification_code'));
            return view('pages.guest.email-verification');
        }
        return redirect()->to('sign.up');
    }

    public function handleEmailVerificationFormRequest(EmailVerificationRequest $emailVerificationRequest)
    {
        $email = $emailVerificationRequest->session()->get('email');
        $expected_code =  str_replace('-', '', $emailVerificationRequest->session()->get('verification_code'));
        $actual_code = implode('', $emailVerificationRequest->verification_code);
        $validator = Validator::make([], []);

        if ($actual_code <> $expected_code) {
            $validator->errors()->add('verification_code', 'wrong verification code');
            return redirect()->back()->withInput()->withErrors($validator);
        }

        try {
            $job = new CreateUserJob($email);
            $this->dispatch($job);
            Auth::onceUsingId(User::where('email', $email)->first()->id);
            return redirect()->route('user.register');
        } catch (\Exception $exception) {
            Log::debug($exception->getMessage());
            $validator->errors()->add('error', 'User creation failed. Please try again in a while!');
            return redirect()->back()->withInput()->withErrors($validator);
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
