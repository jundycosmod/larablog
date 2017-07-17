<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\ContactUS;

class ContactUSController extends Controller {

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function contactUS() {
        return view('contactUS');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function contactUSPost(Request $request) {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'number' => 'required',
            'message' => 'required'
        ]);

        if (ContactUS::create($request->all())) {
            \Mail::send('emails.contact', array(
                'name' => $request->get('name'),
                'email' => $request->get('email'),
                'number' => $request->get('number'),
                'user_message' => $request->get('message')
                    ), function($message) {
                $message->from('jundycosmod@gmail.com');
                $message->to('jundycosmod@gmail.com', 'Admin')->subject('jundy.co getting in touch ');
            });
        }

        return redirect('/#contact')->with('success', 'Thanks for contacting us!');
    }

}
