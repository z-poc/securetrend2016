<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;

class MessageController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function index()
    {
        //
    }

    public function store()
    {
        $this->validate(\request(),[
            'mc-name' => 'required',
            'mc-email' => 'required',
            'mc-message' => 'required',
        ]);

        $msg = new Message;
        $item = request('mc-name');
        $msg->name = $item;
        $item = request('mc-email');
        $msg->email = $item;
        $item = request('mc-message');
        $msg->message = $item;
        $msg->save();

        return redirect()->to('/#contactus')->send();
    }
}
