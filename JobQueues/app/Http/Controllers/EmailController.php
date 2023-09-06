<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jobs\SendEmailJob;


class EmailController extends Controller
{
    public function SendEmail()
    {
        $username = "dishantyashwante1996@gmail.com";
        dispatch(new SendEmailJob($username));
        echo "Mail Sent Successfully";
    }
}
