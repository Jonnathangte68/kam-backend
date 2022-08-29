<?php

namespace App\Http\Controllers;

use App\Models\ChatThread;
use App\Models\ChatMessage;
use Illuminate\Http\Request;

class ChatThreadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return ChatThread::withCount('messages')->get();
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
        $thread = ChatThread::find($request->input("thread"));
        if ($thread) {
            $msg = new ChatMessage;
            $msg->message = $request->input("reply");
            $msg->seen = false;
            $msg->is_system = true;
            return $thread->messages()->save($msg);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ChatThread  $chatThread
     * @return \Illuminate\Http\Response
     */
    public function show(ChatThread $chatThread)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ChatThread  $chatThread
     * @return \Illuminate\Http\Response
     */
    public function edit(ChatThread $chatThread)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ChatThread  $chatThread
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ChatThread $chatThread)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ChatThread  $chatThread
     * @return \Illuminate\Http\Response
     */
    public function destroy(ChatThread $chatThread)
    {
        //
    }
}
