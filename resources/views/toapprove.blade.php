@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Da approvare</div>

                <div class="card-body">
                    <ul>
                    @foreach($notizie as $notizia)

                        <li>
                            <h2>{{$notizia->title}}</h2>
                            <form action="{{route('approve', ['id'=>$notizia->id])}}" method="POST">
                            @csrf 
                            @method('PUT') 
                            <button type="submit" class="btn btn-success">Approva</button> 
                            </form>

                            <form action="{{route('delete', ['id'=>$notizia->id])}}" method="POST">
                            @csrf 
                            @method('DELETE') 
                            <button type="submit" class="btn btn-danger">Cancella</button> 

                            </form>
                        </li>


                    @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
