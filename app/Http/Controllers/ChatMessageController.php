<?php

namespace App\Http\Controllers;

use App\Models\ChatMessage;
use App\Models\ChatThread;
use Illuminate\Http\Request;

class ChatMessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->input("thread")) {
            
            // New message on thread

            $thread = ChatThread::find($request->input("thread"));

            $msg = new ChatMessage;
            $msg->message = $request->input("message");
            $msg->seen = false;

            return $thread->messages()->save($msg);
            
        } else {
            // Open new thread and save message

            $thread = new ChatThread;
            $thread->save();

            $msg = new ChatMessage;
            $msg->message = $request->input("message");
            $msg->seen = false;

            return $thread->messages()->save($msg);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ChatMessage  $chatMessage
     * @return \Illuminate\Http\Response
     */
    public function show(int $chatMessage)
    {
        return ChatThread::find($chatMessage)->messages()->get();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ChatMessage  $chatMessage
     * @return \Illuminate\Http\Response
     */
    public function edit(ChatMessage $chatMessage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ChatMessage  $chatMessage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ChatMessage $chatMessage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ChatMessage  $chatMessage
     * @return \Illuminate\Http\Response
     */
    public function destroy(ChatMessage $chatMessage)
    {
        //
    }
}
