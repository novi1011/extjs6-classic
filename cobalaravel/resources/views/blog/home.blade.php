@extends('layouts.master')

@section ('title', 'Blog SekolahHarum')

@section('content')
	<!-- menggunakan bootstrap -->
	<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  		<a class="navbar-brand" href="#">SekolahHarum</a>
  	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
	</button>
  		<div class="collapse navbar-collapse" id="navbarNav">
   		 <ul class="navbar-nav">
      		<li class="nav-item active">
        		<a class="nav-link" href="#">Home </a>
      		</li>
      		<li class="nav-item">
        		<a class="nav-link" href="#">Blog</a>
      		</li>
			<li class="nav-item">
        		<a class="nav-link" href="/cobalaravel/public/code/create">Create</a>
      		</li>
      
    	</ul>
  		</div>
	</nav>

	<hr>
	@foreach($blogs as $blog)
		<li> 
		<a href="./code/{{$blog->id}}"> {{$blog->title}}</a> 
		<form action="{{route('delete_blog', $blog->id)}}" method="post"><br>
		
		<input type="submit" name="submit" value="delete">
		
		{{csrf_field()}}
		<input type="hidden" name="_method" value="DELETE">
		<a href="/cobalaravel/public/code/{{ $blog->id }}/edit" button type="button" class="btn btn-primary">edit</button></a> 
		
		
		
	</form>
		</li>
	@endforeach
	{{ $blogs->links() }}
@endsection

<!-- "{{route('update_blog',$blog->id)}}" method="post"> -->

