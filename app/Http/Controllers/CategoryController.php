<?php

namespace App\Http\Controllers;
use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category_details=Category::orderby('id','asc')->limit(1)->get(); //get first record by limit
        dump($category_details);
        //$category_details = Category::orderby("created_at","DESC")->paginate(10);
        //return view("admin.category.index",compact("category_details"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.category.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {
        $data =[
            "name"=>$req->input("category_name"),
            "slug"=>$req->input("slug"),
            "description"=>$req->input("description")
        ];
        Category::create($data);
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //$data = Category

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $updatedata = Category::find($id);
       return view('admin.category.edit',compact("updatedata"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req, $id)
    {
        $category=  new category();
       $category->name = $req->input("category_name");
       $category->slug= $req->input("slug");
       $category->description = $req->input("description");
        $category->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Category::find($id);
        $res = $data->delete();
        if($res){
            return redirect()->back();
        }
    }
}
