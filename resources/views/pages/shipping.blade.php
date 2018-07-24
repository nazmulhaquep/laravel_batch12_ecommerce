@extends('master')

@section('main_content')
<style type="text/css">
    form {
  margin:0 auto;
  width:300px
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
  
    
   {!! Form::open(['url' => '/save-shipping','method'=>'post']) !!}
    <h3 align="center">Shipping Info</h3>
    <hr/>
  <input type="text" name="shipping_name" value="" placeholder="Full Name" required>
  <input type="email" name="email_address" value="" placeholder="Email" required>
  
  <input type="text" name="mobile_number" placeholder="Mobile" required>
  <input type="text" name="address" placeholder="Address" required>
  <input type="text" name="city" placeholder="city" required>
  <input type="text" name="country" placeholder="country" required>
  <input type="text" name="zip_code" placeholder="Zip Code" required>
  <button type='submit'>Save Shipping</button>
  
  {!! Form::close() !!}
</div>
@endsection