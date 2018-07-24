@extends('master')

@section('main_content')

<!-- //banner-top -->
<!-- banner -->
<div class="page-head">
    <div class="container">
        <h3>Check Out</h3>
    </div>
</div>
<!-- //banner -->
<!-- check out -->
<div class="checkout">
    <div class="container">
        <h3>My Shopping Bag</h3>
        <?php
        $contents = Cart::content();
      
        ?>
        <div class="table-responsive checkout-right animated wow slideInUp" data-wow-delay=".5s">
            <table class="timetable_sub">
                <thead>
                    <tr>
                        <th>Remove</th>
                        <th>Product</th>
                        <th>Quantity</th>
                        <th>Product Name</th>
                        <th>Price</th>
                    </tr>
                </thead>
                @foreach($contents as $v_contents)
                <tr class="rem1">
                    <td class="invert-closeb">
                        <a href="{{URL::to('/remove-to-cart/'.$v_contents->rowId)}}" class="btn-danger"> Remove </a>
                    </td>
                    <td class="invert-image"><a href="single.html"><img src="{{$v_contents->options['image']}}" alt=" " class="img-responsive" width="100" /></a></td>
                    <td class="invert">
                        <div class="quantity"> 
                            <div class="quantity-select">                           
                                 {!! Form::open(['url' => '/update-cart-qty','method'=>'post']) !!}
                                 <input type="text" name="qty" value="{{$v_contents->qty}}">
                                 <input type="hidden" name="rowId" value="{{$v_contents->rowId}}">
                                 <input type="submit" name="btn" value="Update">
                                 {!! Form::close() !!}
                            </div>
                        </div>
                    </td>
                    <td class="invert">{{$v_contents->name}}</td>
                    <td class="invert">BDT {{$v_contents->price * $v_contents->qty}}</td>
                </tr>
                @endforeach
                <!--quantity-->
                <script>
                    $('.value-plus').on('click', function () {
                        var divUpd = $(this).parent().find('.value'), newVal = parseInt(divUpd.text(), 10) + 1;
                        divUpd.text(newVal);
                    });

                    $('.value-minus').on('click', function () {
                        var divUpd = $(this).parent().find('.value'), newVal = parseInt(divUpd.text(), 10) - 1;
                        if (newVal >= 1)
                            divUpd.text(newVal);
                    });
                </script>
                <!--quantity-->
            </table>
        </div>
        <div class="checkout-left">	

            <div class="checkout-right-basket animated wow slideInRight" data-wow-delay=".5s">
                <a href="{{URL::to('/')}}"><span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span>Back To Shopping</a>
                <?php 
                    $customer_id = Session::get('customer_id');
                    $shipping_id = Session::get('shipping_id');
                    if($customer_id !==NULL && $shipping_id !==NULL){ ?>
                    <a href="{{URL::to('/payment')}}"><span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span>Checkout</a>
                    
                <?php } else if($customer_id !==NULL && $shipping_id ==NULL) { ?>
                    <a href="{{URL::to('/billing')}}"><span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span>Checkout</a>
                <?php } else { ?>
                    <a href="{{URL::to('/checkout')}}"><span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span>Checkout</a>
                <?php } ?>
                
                
            </div>
            <div class="checkout-left-basket animated wow slideInLeft" data-wow-delay=".5s">
                <h4>Shopping basket</h4>
                <ul>
                    <li>Subtotal <i>-</i> <span>BDT {{Cart::subtotal()}}</span></li>
                    <li>Tax <i>-</i> <span>BDT{{Cart::tax()}}</span></li>
                    <?php
                        $shipping_cost='Free';
                        
                    ?>
                    <li>Shipping Charge <i>-</i> <span>{{$shipping_cost}}</span></li>
                    <li>Total <i>-</i> <span>BDT {{ Cart::total() }}</span></li>
                   
                </ul>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>	

@endsection