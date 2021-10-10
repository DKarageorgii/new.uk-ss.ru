<!DOCTYPE html>
<html lang="{{ $modx->getConfig('lang_code') }}">
	@section('head')
		<head>
			<meta http-equiv="Content-Type" content="text/html; charset={{ $modx->getConfig('modx_charset') }}" /> 
			
			<title>@evoParser($documentObject['titl'])</title>
			{{ $documentObject['noindex'] }}
			<meta name="keywords" content="@evoParser($documentObject['keyw'])" />
			<meta name="description" content="@evoParser($documentObject['desc'])" />

			<base href="{{ $modx->getConfig('site_url') }}"/>

			<meta name="viewport" content="width=device-width, initial-scale=1">
			<meta http-equiv="X-UA-Compatible" content="IE=edge">

			@if ( $modx->getConfig('site_start') == $modx->documentObject['id'] )
				<link href="{{ $modx->getConfig('site_url') }}" rel="canonical">
			@else
				<link href="{{ urlProcessor::makeUrl('2','','','full') }}" rel="canonical">
			@endif
			

			<link rel="stylesheet" href="tpl/css/bootstrap.min.css">
			<link href="tpl/css/owl.carousel.min.css" rel="stylesheet">
			<link href="tpl/css/owl.theme.default.min.css" rel="stylesheet">
			<link href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css" rel="stylesheet"/>
			<link href="tpl/css/style.css" rel="stylesheet">
			{{--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">--}}

			{{--@include('partials.inline-style')--}}
		</head>
	@show

	<body class="bg-fon" cz-shortcut-listen="true">
		@section('header')
			@include('partials.header')
		@show

		@section('content')
			@evoParser($documentObject['content'])
		@show


		@section('footer')
			@include('partials.footer')
		@show

	</body>
</html>