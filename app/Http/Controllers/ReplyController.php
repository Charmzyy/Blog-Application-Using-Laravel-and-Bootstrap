<?php

namespace App\Http\Controllers;

use App\Models\Reply;
use App\Models\Comment;
use App\Models\User;
use Illuminate\Http\Request;

class ReplyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

public function __construct()
{
$this->middleware('auth');
}

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
       

try {
    $comment_id = $request->input('comment_id');
    $comment = Comment::find($comment_id);

    // If the comment is not found, return an error message
    if(!$comment) {
        return back()->withErrors(['Comment not found']);
    }

    //code...

    $reply = Reply::create([
        'comment_id'=> $request->input('comment_id'),
        'user_id'=>auth()->user()->id,
        'reply'=>$request->input('reply')

       ]);
       return back();
} catch (\Throwable $th) {
    return 'Reply not added retry';
}

       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
