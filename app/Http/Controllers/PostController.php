<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use App\Tag;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts=Post::orderBy('id','desc')->paginate(10);
        return view('controlPanel.blog.index')->with('posts',$posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories=Category::all();
        $tags=Tag::all();
        return view('controlPanel.blog.create')->with('categories',$categories)->with('tags',$tags);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,array(
            'title'=>'required|max:255',
            'body'=>'required|min:10',
            'slug'=>'required|min:5|max:225',
            'category_id'=>'required|integer'
        ));

        $post=new Post();

        $post->title=$request->title;
        $post->body=$request->body;
        $post->slug=$request->slug;
        $post->category_id=$request->category_id;

        $request->user()->posts()->save($post);

        if(isset($request->tags)){
            $post->tags()->sync($request->tags,false);
        }else{
            $post->tags()->sync(array(),false);
        }

        $request->session()->flash('success','Post create Sucessfully');

        return redirect()->route('posts.show',$post->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post=Post::find($id);
        return view('controlPanel.blog.show')->with('post',$post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post=Post::find($id);
        $categories=Category::all();
        $tags=Tag::all();
        $cat=array();
        $tagsArr=array();
        foreach ($categories as $category){
            $cat[$category->id]=$category->name;
        }
        foreach ($tags as $tag){
            $tagsArr[$tag->id]=$tag->name;
        }

        return view('controlPanel.blog.edit')->with('post',$post)->with('categories',$cat)->with('tags',$tagsArr);
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
        $post=Post::find($id);

        $old_slug=$post->slug;

        if($old_slug == $request->slug){
            $this->validate($request,array(
                'title'=>'required|max:255',
                'body'=>'required|min:10',
                'category_id'=>'required|integer'
            ));
        }else{
            $this->validate($request,array(
                'title'=>'required|max:255',
                'body'=>'required|min:10',
                'slug'=>'required|min:5|max:225|unique:posts,slug',
                'category_id'=>'required|integer'
            ));
            $post->slug=$request->slug;
        }


        $post->title=$request->title;
        $post->body=$request->body;

        $post->category_id=$request->category_id;

        $request->user()->posts()->save($post);

        if(isset($request->tags)){
            $post->tags()->sync($request->tags,true);
        }else{
            $post->tags()->sync(array(),true);
        }

        $request->session()->flash('success','Post create Sucessfully');

        return redirect()->route('posts.show',$post->id);


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {
        $post=Post::find($id);
        $post->tags()->detach();
        $post->delete();
        $request->session()->flash('success','Post Deleted Sucessfully');
        return redirect()->route('posts.index');
    }

    public function getDelete($id){
        $post=Post::find($id);

        return view('controlPanel.blog.delete')->with('post',$post);
    }
}
