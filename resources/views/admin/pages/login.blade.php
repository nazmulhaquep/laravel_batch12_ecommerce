<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Carbon - Admin Template</title>
    <link rel="stylesheet" href="{{asset('public/assets/admin/')}}/./vendor/simple-line-icons/css/simple-line-icons.css">
    <link rel="stylesheet" href="{{asset('public/assets/admin/')}}/./vendor/font-awesome/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="{{asset('public/assets/admin/')}}/./css/styles.css">
</head>
<body>
<div class="page-wrapper flex-row align-items-center">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="card p-4">
                    <div class="card-header text-center text-uppercase h4 font-weight-light">
                        Login
                    </div>
                    <h3 style="color:green;"> <?php

                    $logout_message = Session::get('message');

                    if($logout_message){
                        echo $logout_message;
                        Session::put('message','');
                    }

                    ?></h3>

                    <h3 style="color:red;"> <?php

                    $exception = Session::get('exception');

                    if($exception){
                        echo $exception;
                        Session::put('exception','');
                    }

                    ?></h3>

                    {!! Form::open(['url' => '/admin-login-check','method'=>'post']) !!}
                    <div class="card-body py-5">
                        <div class="form-group">
                            <label class="form-control-label">Email</label>
                            <input type="email"  name="email_address" class="form-control">
                        </div>

                        <div class="form-group">
                            <label class="form-control-label">Password</label>
                            <input type="password" name="password" class="form-control">
                        </div>

                        <div class="custom-control custom-checkbox mt-4">
                            <input type="checkbox" class="custom-control-input" id="login">
                            <label class="custom-control-label" for="login">Check this custom checkbox</label>
                        </div>
                    </div>

                    <div class="card-footer">
                        <div class="row">
                            <div class="col-6">
                                <button type="submit" class="btn btn-primary px-5">Login</button>
                            </div>

                            <div class="col-6">
                                <a href="#" class="btn btn-link">Forgot password?</a>
                            </div>
                        </div>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
<script src="{{asset('public/assets/admin/')}}/./vendor/jquery/jquery.min.js"></script>
<script src="{{asset('public/assets/admin/')}}/./vendor/popper.js/popper.min.js"></script>
<script src="{{asset('public/assets/admin/')}}/./vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="{{asset('public/assets/admin/')}}/./vendor/chart.js/chart.min.js"></script>
<script src="{{asset('public/assets/admin/')}}/./js/carbon.js"></script>
<script src="{{asset('public/assets/admin/')}}/./js/demo.js"></script>
</body>
</html>
