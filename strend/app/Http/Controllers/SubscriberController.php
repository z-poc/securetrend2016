<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subscriber;


class SubscriberController extends Controller
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
            'mc-mail' => 'required',
        ]);

        $sub = new Subscriber;
        $item = request('mc-mail');
        $sub->email = $item;
        $sub->save();

        return redirect()->to('/#contactus')->send();

    }
}
