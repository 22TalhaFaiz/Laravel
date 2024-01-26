@extends('layout')
@section('mylayout')
<form action='/editcat/update' method="POST" >
    @method('PUT')
        @csrf
        <input type="hidden" name="id" value="{{ $cat->id }}" required>
        <label for="name" >Category Name:</label>
        <input type="text" name="name" value="{{ $cat->cat_name }}" required>
        <br>
        <button type="submit">Update Category</button>
    </form>


    @endsection