<?php

namespace App\Http\Controllers;

use App\Messages;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function create(Request $request)
    {
        request()->validate([
            'title' => ['required', 'min:3'],
            'message' => ['required', 'min:3'],

        ]);

        $message = new Messages;

        $message->title = request('title');
        $message->message = request('message');
        $message->save();

        return redirect()->to('/');

    }
}
