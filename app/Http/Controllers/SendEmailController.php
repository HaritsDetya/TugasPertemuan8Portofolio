<?php

namespace App\Http\Controllers;

use Mail;
use App\Jobs\SendMailJob;
use Illuminate\Http\Request;

class SendEmailController extends Controller
{
    public function index(){
        return view('porto.register');
    }
    public function store(Request $request)
    {
        $data = $request->all();

        dispatch(new SendMailJob($data));
        return redirect()->route('sendemail')->with('success', 'Email berhasil dikirim');
    }
}
