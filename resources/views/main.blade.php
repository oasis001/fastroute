@extends('layout/master')


	@section('content')
		<div class="jumbotron text-center ">
		<h1><b>{{$tit}}</b></h1>
		<br>
		<h2><i>Let's get started!</i></h2>
		<p><a class="btn btn-primary btn-lg" href="https://www.facebook.com/login" role="button"><b>Login with Facebook</b></a> <a class="btn btn-warning btn-lg" href="https://accounts.google.com/ServiceLogin/identifier?hl=en&passive=true&continue=https%3A%2F%2Fwww.google.com%2F&flowName=GlifWebSignIn&flowEntry=ServiceLogin" role="button"><b>Login with Google</b></a></p>
	</div>
	
@endsection()