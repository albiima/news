@extends('layouts.app')
@section('content')

<div class="container">
	<h2>Inserisci qui la tua notizia</h2>	
	<div class="row">
		<div class="col">
			<form action="{{route('aggiungi')}}" method="POST">
			@csrf
			  <div class="form-group">
			    <label for="exampleInputEmail1">Titolo</label>
			    <input name="title" type="text" class="form-control">
			  </div>

			  <div class="form-group">
			    <label for="exampleInputPassword1">Descrizione</label>
			    <input name="description" type="text" class="form-control">
			  </div>

			  <button type="submit" class="btn btn-primary">Aggiungi</button>
			</form>
		</div>
	</div>
</div>		





@endsection