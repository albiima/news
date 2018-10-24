@extends('layouts.app')

@section('content')

<div class="container">
	<div class="row">
		@foreach($notizie as $notizia)
		<div class="col-4">
			<h2>{{$notizia->title}}</h2>
			<p>{!! str_limit($notizia->description , 200, ' (...)') !!}</p>
			<a href="{{route('notizia', $notizia->id )}}" class="btn btn-primary">Clicca qui</a>
		</div>
		@endforeach
	</div>
	<br>
	<br>

	<!-- indispensabile per vedere le pagine delle news -->
	{{ $notizie->render() }} 
	

	<h3><a href="{{route('form')}}">Aggiungi notizia</a></h3>

</div>


@endsection