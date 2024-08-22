<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MessageController extends Controller
{
    public function index()
    {
        $user = '';
        return view('admin.messages.index', compact('user'));
    }

    public function show(User $user)
    {
        // $messages = Message::where(['sender_id'=> Auth::id(), 'receiver_id'=> $user->id])
        //     ->orWhere(['receiver_id' => Auth::id(), 'sender_id'=> $user->id])
        //     ->with('sender', 'receiver')
        //     ->get();

        $messages = Message::where(function($query) use ($user) {
            $query->where('sender_id', Auth::id())
                  ->where('receiver_id', $user->id);
        })->orWhere(function($query) use ($user) {
            $query->where('sender_id', $user->id)
                  ->where('receiver_id', Auth::id());
        })->with('sender', 'receiver')->get();

        // return $messages;


        return view('admin.messages.index', compact('user', 'messages'));
    }
}
