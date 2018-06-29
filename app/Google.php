<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Google extends Model
{
    public function login()
    {
        return redirect('https://accounts.google.com/o/oauth2/v2/auth?response_type=code&scope=https://www.googleapis.com/auth/youtubepartner&redirect_uri=http://localhost:8000/3rd-party/auth/google&client_id=744307183277-du6f030bialb2cnnqfg45549tikcnrhq.apps.googleusercontent.com&include_granted_scopes=true&access_type=offline&prompt=consent');
    }
}
