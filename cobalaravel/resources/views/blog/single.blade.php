@extends('layouts.master')

@section ('title', 'Blog SekolahHarum')

@section('content')
	<h3>Selamat Datang...</h3>


	<h2>Selamat datang di SekolahHarum</h2><br>
	<!-- memanggil yang ada di blogcontroller (menampilkan judul) -->
	<h2>{{$blog->title}}</h2>
	<hr>
	<p>
		{{$blog->description}}
	</p>

@endsection



