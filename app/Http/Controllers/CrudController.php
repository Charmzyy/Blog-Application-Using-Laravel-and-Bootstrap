<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use App\Http\Controllers\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Post;
use App\Models\Comment;

use Illuminate\Routing\Controllers\Middleware;
use PhpParser\Node\Stmt\TryCatch;

class CrudController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function __construct()
     {
    $this->middleware('auth')->only(['create','edit','update','destroy','invoke']);
     }

    
     
     public function __invoke() 
     {
        return view('blog.myblogs');
     }    
    public function index()
    {
     
     //define 
     return view('blog.index', [
        'posts' => Post::latest()->paginate('10')]);
     }   

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      
       return view('blog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { 

$file=$request->file('image_path');
$filename=time() .".{$file->guessClientExtension()}"; //
$file->move('images/blogs',$filename);

$post = Post::create([
'title'=>$request->input('title'),
'excerpt'=>$request->input('excerpt'),
'body'=>$request->input('body'),
'min_to_read'=>$request->input('min_to_read'),
'image_path'=>$filename,
'user_id'=>auth()->user()->id
]);

return redirect(route('blog.create'))->with('created','Blog Updated Successfully');
    // try {
    //     //code...
       
    // } catch (\Throwable) {
        
    //     return redirect(route('blog.create'))->with('notcreated','Please fill in details correctly');
    // }
       
       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    { 

        
        $post = Post::with('comments','comments.children.children')->findOrFail($id);
        
        return view('blog.show', compact('post'));
    }
    
        
      
    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('blog.edit', [
            'post' => Post::where('id', $id)->first()
        ]);
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
        $data = [
            'title' => $request->title,
            'excerpt' => $request->excerpt,
            'body' => $request->body,
            'min_to_read' => $request->min_to_read
        ];
        // Check if the user has uploaded a new image
        if ($request->hasFile('image_path')) {
            $file = $request->file('image_path');
            $filename = time() . ".{$file->guessClientExtension()}";
            $file->move('images/blogs', $filename);
            $data['image_path'] = $filename;
        }
        Post::where('id', $id)->update($data);
        return redirect(route('my'))->with('update_message', 'Post  has been Updated');

        // try {
           
        // } catch (\Throwable $th) {
        //     return 'Retry uploading image';
        // }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)

    {
        Post::destroy($id);
        return redirect(route('my'))->with('message','Post Deleted');
    }

   

    }
  
     

