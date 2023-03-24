<?php

namespace App\Http\Controllers;
use App\Models\message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function index(){
        $messages = message::where('slag','1')->paginate(10);

        return view('page.admin.messages')->with('messages', $messages);
    }

    public function read($id){
        $read = message::find($id);
        $read->slag = 0;
        $read->save();
        return redirect()->back();
    }
}
