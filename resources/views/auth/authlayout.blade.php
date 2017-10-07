<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>{{ config('app.name') }} | Admin</title>
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

	@if (! config('app.debug', true))
			<link rel="stylesheet" href="{{ asset('css/admin-all.css') }}">
	@else
			<!-- Vendors -->
			<link rel="stylesheet" href="{{ asset('css/admin-vendor.css') }}">
			<link rel="stylesheet" href="{{ asset('css/admin-custom.css') }}">
	@endif

	@yield('css')

</head>
<body class="hold-transition login-page">
	<div class="login-box">
		<div class="login-logo">
			<a href="{{ url('/') }}"><b>Laravel</b> 5.5</a>
		</div>
		<!-- /.login-logo -->
		<div class="login-box-body">

			@yield('content')

		</div>
		<!-- /.login-box-body -->
	</div>
	<!-- /.login-box -->

	<script src="{{ asset('js/admin-vendor.js') }} "></script>

	<script>
		$(function () {
			$('input').iCheck({
				checkboxClass: 'icheckbox_square-blue',
				radioClass: 'iradio_square-blue',
				increaseArea: '20%' // optional
			});
		});
	</script>
</body>
</html>
