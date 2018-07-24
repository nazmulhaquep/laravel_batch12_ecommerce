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
  
    <input type='checkbox' id='form-switch'>
   {!! Form::open(['url' => '/customer-login-check','method'=>'post','id'=>'login-form']) !!}
      <h3 align="center">Customer Login</h3>
    <hr/>
  <input type="text" name="email" placeholder="Email Address" required>
  <input type="password" name="password" placeholder="Password" required>
  <button type='submit'>Login</button>
  <label for='form-switch'><span>Register</span></label>
  {!! Form::close() !!}
    
   {!! Form::open(['url' => '/register-customer','method'=>'post','id'=>'register-form']) !!}
    <h3 align="center">Customer Registration</h3>
    <hr/>
  <input type="text" name="customer_name" placeholder="Full Name" required>
  <input type="email" name="email_address" placeholder="Email" required>
  <input type="password" placeholder="Password" name="password" required>
  <input type="password" placeholder="Re Password" equals="password">
  <button type='submit'>Register</button>
  <label for='form-switch'>Already Member ? Sign In Now..</label>
  {!! Form::close() !!}
</div>
@endsection