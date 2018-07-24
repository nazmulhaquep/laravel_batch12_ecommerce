@extends('master')

@section('main_content')
<style type="text/css">
    form {
  margin:0 auto;
  width:500px
}
input {
  margin-bottom:3px;
  padding:10px;
  width: 100%;
  border:1px solid #CCC
}
button {
  padding:10px
}
label {
  cursor:pointer
}
#form-switch {
  display:none
}
#register-form {
  display:none
}
#form-switch:checked~#register-form {
  display:block
}
#form-switch:checked~#login-form {
  display:none
}
</style>
<div>
  
    
   {!! Form::open(['url' => '/save-order','method'=>'post']) !!}
    <h3 align="center">Order Payment </h3>
    <hr/>
    <br/>
    <label> Cash On Delivery<input type="radio" name="payment_type" value="cash_on_delivery"></label>
   <input type="radio" name="payment_type" value="paypal" > Paypal
   <input type="radio" name="payment_type" value="ssl" > SSL
   <br/>
  
  <button type='submit'>Save Order</button>
  
  {!! Form::close() !!}
</div>
@endsection