@extends('layout')
@section('mylayout')

<form action='/insert' method="POST" >
        @csrf
        <label for="name">Category Name:</label>
        <input type="text" name="name" required>
        <br>
        <button type="submit">Insert Category</button>
    </form>

@endsection