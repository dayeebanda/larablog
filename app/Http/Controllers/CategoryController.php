<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use for Eloquent ORM
use App\Category;
// use for Query Builder
use DB;


class CategoryController extends Controller
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

     //creat category
    public function createCatagory()
    {
        //
        return view('admin.category.createCatagory');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeCategory(Request $request)
    {
        //
        //return view('admin.category.storeCatagory');
        // return $request->all();
        //
        //Here 1 type save
        // $category= new Category();
        // $category->category =$request->category;
        // $category->category_description =$request->category_description;
        // $category->publication_status =$request->publication_status;
        // $category->publication_size =$request->publication_size;
        // $category->save();
        // return "Save Successfully";

        //Here 2 type save
        // Category::create($request->all());
        //
        // return "Successfully";

        // Here input field validation with required
        $this->validate($request,[
            'category'=>'required',
            'category_description'=>'required',
        ]);


        $table = DB::table('categories')->insert([
          'category' => $request->category,
          'category_description' => $request->category_description,
          'publication_status' => $request->publication_status,
          'publication_size' => $request->publication_size,

        ]);

      //return 'Category save in database';
      return redirect()->back()->with('message','Category created');;
        //return redirect('/category/add')->with('message','Category created');

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

    public function manageCategory()
    {
        //
        $categories =Category::all();
        return view('admin.category.manageCategory',['categories'=>$categories]);
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

    public function editCategory($id){

      //return $id;
      $categoryById = Category::where('id', $id)->first();

        //return $categoryById->category;
      return view ('admin.category.editCategory',['categoryById'=>$categoryById]);
      //['categoryById'=>$categoryById]
      //return view ('admin.category.editCategory');
      //$categoryById = Category::where('id', $id)->value($id);
      //return $categoryById->category;

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
