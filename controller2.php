<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\post;
use DB;

class controller2 extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$hapritim = post::all();
        //$hapritim = DB:: select ("select * from posts");
       //$hapritim = post:: orderby("koteret", "desc")->get();
       $hapritim = post:: orderby("created_at", "desc")->paginate(1);
        
       
       return view ("posts.index")->with("hapritim", $hapritim);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    
     public function create()
        {
        return view("posts.create");
        }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
        */
        public function store (Request $request)
        {
          $this->validate($request,['koteret'=>'required','body'=>'required']);
         // return 123;

        $post=new post;
        //transfering from form into the table
        $post->koteret=$request->input('koteret');
        $post->body=$request->input('body');
        $post->save();
        return redirect('/posts')->with('success','Your Record was saved');



        }

     


    public function show($id)
        {
          $parit = post::find($id);
          return view("posts.show")->with("parit",$parit);
        }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post=post::find($id);
        return view('posts.edit')->with('post',$post);
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
        $this->validate($request,['koteret'=>'required','body'=>'required']);
         // return 123;

        $post=post::find($id);
        //transfering from form into the table
        $post->koteret=$request->input('koteret');
        $post->body=$request->input('body');
        $post->save();
        return redirect('/posts')->with('success','Your Record was updated');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post=post::find($id);

        $post->delete();

        return redirect('/posts')->with('success', 'Record deleted');

    }

}
