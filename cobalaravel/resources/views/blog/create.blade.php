@extends('layouts.master')

@section ('title', 'Blog SekolahHarum')

@section('content')
	<!-- @if(count($errors)>0) //menampilkan error pada validate 
		<ul>
			@foreach($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
		</ul>
	@endif -->
	


	<h4>Create Blog</h4>
		<form action="{{route('store_blog')}}" method="post">


	<div class="form-group">
    	<label for="exampleFormControlInput1">Judul</label>
    	<input type="text" name="title" class="form-control" id="exampleFormControlInput1" value="{{old('title')}}">
 	</div> 
	 @if ($errors->has('title'))				
		<li>{{$errors->first('title')}}</li>
	@endif
	<div class="form-group">
		<label for="exampleFormControlTextarea1">Deskripsi</label><br>
		<textarea name="description" rows="3" cols="70" value="{{old('description')}}"></textarea>
    </div>
	@if ($errors->has('description'))
		<li>{{$errors->first('description')}}</li>
	@endif
		
		<input type="submit" name="name" value="simpan">
		{{csrf_field()}}
		 
	</form>
@endsection


