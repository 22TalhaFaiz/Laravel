@extends('layout')
@section('mylayout')

<form action='/insert' method="POST" >
        @csrf
        <div>
            <label for="cat_id">Category:</label>
            <select name="cat_id" class="form-control" required>
                @foreach($cat as $category)
                <option value="{{$category->id}}">{{$category->cat_name}}</option>
                @endforeach
</select>
        </div>
    
        <label for="name">Product Name:</label>
        <input type="text" name="pro_name" required>
        <br>
        <label for="name">Product Image:</label>
        <input type="file" name="pro_image" required>
        <br>
        <button type="submit">Insert Product</button>
    </form>

@endsection