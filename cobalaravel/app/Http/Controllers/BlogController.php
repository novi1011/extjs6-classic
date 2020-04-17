<?php 
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;
use App\blog;


// use Illuminate\Http\Controller\BlogController;

class BlogController extends BaseController {

	public function index(){

	$blogs=blog::all();
		$blogs = DB::table('blogs')->paginate(5);
		return view ('blog/home', ['blogs' => $blogs]);
	}

	public function show($id){
		$blog= blog::find($id);

		if(!$blog)
			abort(404);
	
		return view ('blog/single',['blog' => $blog]);
	}

	public function create(){
		return view ('blog/create');
	}

	public function store(Request $request){
		$request->validate( [
			'title' => 'required|min:5', 
			'description' => 'required|min:5|max:50'
		]);


		$blog= new blog;
		$blog->title = $request->title;
		$blog->description = $request->description;
		$blog->save();

		return redirect ('/code');
	}
	
	public function edit($id){
		$blog= blog::find($id);

		if(!$blog)
			abort(404);
	
		return view ('blog/edit',['blog' => $blog]);
	}

	public function update(Request $request, $id){
		$blog = blog::find($id); 
		$blog->title = $request->title;
		$blog->description = $request->description;
		$blog->save();
			return view ('blog/single',['blog' => $blog]);
	}

	public function destroy($id){
		$blog = blog::find($id);
		$blog->delete();
		return redirect('code');
	}

	}
	// public function utama(){
	// 	$blogs = blog::all();
	// 	dd($blogs);
	// return view('app/blog');
	// }

	// public function show($id){
	// 	$nilai = 'ini adalah blog saya'.$id;
	// 	$unescaped = '<script>alert("Hello")</script>';

	// return view('blog/single', ['blog' => $nilai, 'users' => $users,'unescaped' => $unescaped]);
	//insert biasa
	// $blog= new blog;
	// $blog->title = 'halo cimahi';
	// $blog->description = 'kota cimahi';
	// $blog->save();

    //insert mass assignment
    // blog::create([
    // 	'title' => 'Seni Budaya',
    // 	'description' => 'arca, lukisan, adat istiadat',
    // ]);

	//update
	// $blog = blog::where('title','halo cimahi')->first();
	// $blog->title = 'Sejarah';
	// $blog->save();

	//update mass assingment
	// blog::find(4)->update([
	// 	'title' => 'Seni Budaya',
	// 	'description' => 'keanekaragaman indonesia'
	// ]);

	//delete
		// $blog = blog::find(4);
		// $blog->delete();
	//delete kedua
		// blog::destroy([3]);

	//soft deletes
		// $blog = blog::find(5);
		// $blog->delete();
		//mencari nama yang ada huruf 'a'
		// $users= DB::table('users')->WHERE('username', 'like' ,'%a%')->get();
			
			//menambah data 
		// DB::table('users')->INSERT([
		// 	['username' => 'Bejo', 'password' => '78910']
		// ]);

		// $users = DB::table('users')->get();

			//mengupdate data sql nya
		// DB::table('users')->WHERE('username', 'Safi')
		// 				  ->UPDATE(['username' => 'fiyya']);
		// 	//memanggil yang diupdate
		// $users = DB::table('users')->get();

			// mengahapus record 
		// DB::table('users')->WHERE('id', '>', 5)->delete();
		// $users = DB::table('users')->get();
 


 ?>



