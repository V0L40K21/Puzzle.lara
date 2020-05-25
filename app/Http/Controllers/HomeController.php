<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\HomeRequest;
use App\Models\Home;

class HomeController extends Controller
{
    //
    public function submit(HomeRequest $req) {
        $home = new Home();
        $home->name = $req->input('name');
        $home->email = $req->input('email');
        $home->subject = $req->input('subject');
        $home->message = $req->input('message');

        $home->save();

        return redirect('/all');
    }

    public function allData() {
        $home = new Home;
        return view('messages', ['data' => $home->all()]);
    }

    public function showOneMessage($id) {
        $home = new Home;
        return view('one-messages', ['data' => $home->find($id)]);
    }

    public function updateMessage($id) {
        $home = new Home;
        return view('update-messages', ['data' => $home->find($id)]);
    }

    public function updateMessageSubmit($id, HomeRequest $req) {
        $home = Home::find($id);
        $home->name = $req->input('name');
        $home->email = $req->input('email');
        $home->subject = $req->input('subject');
        $home->message = $req->input('message');

        $home->save();

        return redirect('/all');
    }

    public function deleteMessage($id) {
        $home = Home::find($id)->delete();
        return redirect('/all');
    }
}
