<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="{{ asset('favicon.ico') }}">

    <title>{{ ($title) ? $title : 'Credit Mobile' }}</title>

    <!-- Bootstrap core CSS -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <!-- Optional theme -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css"> -->
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,400,300,600" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="{{ asset('assets/css/login.css') }}" rel="stylesheet">

    <!-- Icon -->
	<link rel="shortcut icon" href="{{ asset('assets/favicon.ico') }}">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6" style="float:none;margin:0 auto">
                <div id="loginBox">
					@if (count($errors) > 0)
						<div class="alert alert-danger">
							<strong>Whoops!</strong><br>
							<ul>
								@foreach ($errors->all() as $error)
                                    {{ $error }}<br />
								@endforeach
							</ul>
						</div>
					@endif
                    <h2>Reset Password</h2>
                    <form class="form-signin minimal" role="form" method="POST" action="{{ url('/password/reset') }}">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
						<input type="hidden" name="token" value="{{ $token }}">
						<label>E-Mail Address</label>
						<input type="email" id="email" class="form-control" name="email" required value="{{ old('email') }}">
						<label>Password</label>
						<input type="password" id="password" class="form-control" name="password">
						<label>Confirm Password</label>
						<input type="password" id="password_confirmation" class="form-control" name="password_confirmation">
                        <button class="btn btn-minimal" type="submit">Reset Password</button>
                    </form>
                </div>
				<span style="font-size:x-small">© MTF 2015. All rights reserved.</span>
            </div>
        </div>
    </div>
    <!-- /container -->
    @include('common.js')
</body>
</html>
