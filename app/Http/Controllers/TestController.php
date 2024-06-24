<?php

namespace App\Http\Controllers;

use App\Mail\AnnouncementMail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class TestController extends Controller
{
    public function index()
    {
        $mailData = [
            'user' => User::find(1),
            'record' => 'test record',
            'type' => 'test type',
        ];

        Mail::to(User::find(1))->send(new AnnouncementMail($mailData));
    }
}
