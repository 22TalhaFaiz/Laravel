@extends('layout')
@section('mylayout')


@foreach($category as $cat)
    <p>Category Id: {{ $cat->id }}</p>
    <p>Category Name {{ $cat->cat_name }}</p>
    <a href="/editcat/{{ $cat->id }}/edit">Edit</a>
    <form action="{{route('delete',$cat->id)}}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>
    @endforeach

@endsection