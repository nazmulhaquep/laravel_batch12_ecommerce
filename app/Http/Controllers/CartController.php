<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cart;
use DB;
use Illuminate\Support\Facades\Redirect;
class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function addToCart($product_id)
    {
        $productInfo = DB::table('product')
                     ->select('*')
                     ->where('product_id',$product_id)
                     ->first();
        
        $data=array();
        $data['id']=$productInfo->product_id;
        $data['name']=$productInfo->productName;
        $data['qty']=1;
        $data['price']=$productInfo->productPrice;
        $data['options']['image']=$productInfo->productImage;
        Cart::add($data);
        return Redirect::to('/');
    }
    public function showCart(){
   	return view('pages.cart_view');
   }
   
   public function removeToCart($rowId)
   {
      Cart::remove($rowId);
      return Redirect::to('/show-cart');
   }
   public function updateCartQty(Request $request)
   {
       $qty=$request->qty;
       $rowId=$request->rowId;
       Cart::update($rowId, $qty);
       return Redirect::to('/show-cart');
   }
   public function emptyCart()
   {
       Cart::destroy();
       return Redirect::to('/');
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
