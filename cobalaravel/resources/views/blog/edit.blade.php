@extends('layouts.master')

@section ('title', 'Blog SekolahHarum')

@section('content')
	<h2>Edit Blog</h2>

<form action="{{route('update_blog',$blog->id)}}" method="post">

<div class="form-group">
    	<label for="exampleFormControlInput1">Judul</label>
    	<input type="text" name="title" class="form-control" id="exampleFormControlInput1" value="{{$blog->title}}">
 	</div> 
	
	<div class="form-group">
		<label for="exampleFormControlTextarea1">Deskripsi</label><br>
		<textarea name="description" rows="3" cols="70">{{$blog->description}}</textarea>
    </div>

	<input type="submit" name="submit" value="edit">
		{{csrf_field()}}
	<input type="hidden" name="_method" value="PUT">	
		
		
	</form>
		
		<!-- <input type="text" name="title" value="{{$blog->title}}"><br>
		<textarea name="description" rows="8" cols="40">{{$blog->description}}</textarea>
		<br>
		<input type="submit" name="submit" value="edit">
		{{csrf_field()}}
		<input type="hidden" name="_method" value="PUT">
	</form> -->
	
@endsection




