<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use Redirect;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createProduct(){
        return view('admin.products.create_product');
    }

    public function storeProduct(Request $request){

        $data['productName'] = $request->product_name;
        $data['category_id'] = $request->category_id;
        $data['subcategory_id'] = $request->subcategory_id;
        $data['manufacturer_id'] = $request->manufacturer_id;
        $data['productShortdescription'] = $request->productShortdescription;
        $data['productQuantity'] = $request->product_quantity;
        $data['productPrice'] = $request->product_price;
        $data['productShortdescription'] = $request->product_shortdescription;
        $data['productLongdescription'] = $request->product_Longdescription;
        $data['publicationStatus'] = $request->publicationStatus;

        /*Image upload*/

        $productImage = $request->file('productImage');
        $imageName = $productImage->getClientOriginalName();
        $uploadPath = 'public/productImage/';
        $productImage->move($uploadPath,$imageName);
        $imageUrl = $uploadPath.$imageName;
        $data['productImage'] = $imageUrl;

        DB::table('product')
                ->insert($data);
        Session::put('storeCategory','Product Save Successfully');
        return Redirect::to('/add-product');
    }

    public function controlProduct(){
        $all_product  = DB::table('product')
                ->get();
        return view('admin.products.manage_products')
            ->with('all_product',$all_product );
    }
    public function showProduct($cat_id){
        $single_manufacturer = DB::table('manufacturers')
        ->where('manufacturers_id',$cat_id)
        ->first();
        return view ('admin.manufacturers.single_manufacturer')
            ->with('single_manufacturer',$single_manufacturer);
    } 
    public function editTheProduct($product_id){
        $products_info = DB::table('product')
        ->where('product_id',$product_id)
        ->first();
        return view ('admin.products.edit_product')
            ->with('products_info',$products_info);
    }

    public function deleteTheProduct($cat_id){
        $category_info = DB::table('product')
        ->where('product_id',$cat_id)
        ->delete();

        Session::put('deleteCategory','Product deleted Successfully');
        return Redirect::to('/manage-product');
    }

    public function updateTheProduct(Request $request){
        $product_id = $request->product_id;
        $data['productName'] = $request->product_name;
        $data['manufacturer_id'] = $request->manufacturer_id;
        $data['category_id'] = $request->category_id;
        $data['subcategory_id'] = $request->subcategory_id;
        $data['productQuantity'] = $request->product_quantity;
        $data['productPrice'] = $request->product_price;
        $data['productShortdescription'] = $request->product_Shortdescription;

        $data['productLongdescription'] = $request->productLongdescription;
        $data['publicationStatus'] = $request->publicationStatus;
        
        /*Product upload*/
        $productImage = $request->file('productImage');

        if($productImage){
        $imageName = $productImage->getClientOriginalName();
        $uploadPath = 'public/productImage/';
        $productImage->move($uploadPath,$imageName);
        $imageUrl = $uploadPath.$imageName;
        $data['productImage'] = $imageUrl;
        }
        DB::table('product')
                ->where('product_id',$product_id )
                ->update($data);

        Session::put('updateCategory','Product update Successfully');

    return Redirect::to('/manage-product');
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
