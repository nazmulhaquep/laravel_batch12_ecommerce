<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Redirect;
use Session;
class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createCategory(){
        return view('admin.pages.create_category');
    }

    public function storeCategory(Request $request){
        $data['categoryName'] = $request->categoryName;
        $data['categoryDescription'] = $request->categoryDescription;
        $data['publicationStatus'] = $request->publicationStatus;
        DB::table('categories')->insert($data);
        Session::put('storeCategory','Category Save Successfully');
        return Redirect::to('/add-category');
    }

    public function controlCategory(){
        $all_category = DB::table('categories')
                ->get();
        return view('admin.pages.manage_category')
            ->with('category_names',$all_category);
    }
    public function showCategory($cat_id){
        $single_category = DB::table('categories')
        ->where('category_id',$cat_id)
        ->first();
        return view ('admin.pages.single_category')
            ->with('single_category',$single_category);
    } 
    public function editTheCategory($cat_id){
        $category_info = DB::table('categories')
        ->where('category_id',$cat_id)
        ->first();
        return view ('admin.pages.edit_category')
            ->with('category_info',$category_info);
    }

    public function deleteTheCategory($cat_id){
        $category_info = DB::table('categories')
        ->where('category_id',$cat_id)
        ->delete();

        Session::put('deleteCategory','Category deleted Successfully');
        return Redirect::to('/manage-category');
    }

    public function updateTheCategory(Request $request){
        $category_id = $request->category_id;
        $data['categoryName'] = $request->categoryName;
        $data['categoryDescription'] = $request->categoryDescription;
        $data['publicationStatus'] = $request->publicationStatus;
        DB::table('categories')
                ->where('category_id',$category_id )
                ->update($data);
        Session::put('updateCategory','Category update Successfully');

    return Redirect::to('/manage-category/');
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
        //
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
