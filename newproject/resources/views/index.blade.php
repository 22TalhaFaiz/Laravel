@extends('layout')
@section('mylayout')

<h1>Welcome </h1>
<a href="{{ route('create') }}">Insert Category</a>
<a href="{{ route('showcat') }}">Show Category</a>


@endsection