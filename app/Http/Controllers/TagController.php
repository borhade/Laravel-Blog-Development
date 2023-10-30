<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tag;
//use App\Http\Requests\ValidationRequest;
use  Illuminate\Support\Facades\Validator;;
class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tagsDetails = Tag::orderby('id','desc')->get();
        return view('admin.tag.index',["tagsDetails"=>$tagsDetails]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.tag.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        var_dump($request->input("tag_slug"));
       
        //$validatedData  = $request->validated();
      /*  $validatedData= $request->validate([
            "tag_name"=>"required",
            "tag_slug"=>"required,",
            "tag_description"=>"required",
        ]); */

        $data =[
            'name'=>$request->input('tag_name'),
            'slug'=>$request->input('tag_slug'),
            'description'=>$request->input('tag_description'),
        ];
        //var_dump($validatedData);
        Tag::create($data); 
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
        $updateDetails = tag::find($id);
        //var_dump($updateDetails);
        return view('admin.tag.edit',compact("updateDetails"));
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
        echo"update";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = tag::find($id);
        $result= $data->delete();
        var_dump($result);
    }
}
