@extends('backoffice.homeBack.homeB')

@section('contentB')
<form action="{{route('abouts.update', $warmWelcome->id)}}" method="post">
    @csrf
    @method('PUT')
    <div class="container d-flex flex-column align-items-center justify-content-center">
        Title:<input type="text" name="titre"value="{{$warmWelcome->titre}}">
        Description_grand:<input type="text" name="description_grand"value="{{$warmWelcome->description_grand}}">
        <button type="submit" class="btn btn-primary">Validate</button>
    </div>
    </form>
@endsection