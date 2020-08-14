<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Car;

class CarController extends Controller
{
    public function index ($request) {
        $limit = $request->limit;
        return $data=Car::orderBy('name','asc')->paginate($limit);
        
        return ['success' => true, 'data' => $data] ;
    }

    public function store(Request $request){
        
        $data = new Car;
        $data->name = $request->name; 
        $data->brands = $request->brands;
        $data->color = $request->color;
        $data->save();
        
        return ['success' => true, 'data' => $data];
    }

    public function destroy($id) {
        $data = Car::find($id);
        $data->delete();

        return ['success' => true, 'data' => $data];
    }

    public function update(Request $request, $id) {
        $data = Car::findorfail($id);
        $requestdata = $request->all();
        $data->update($requestdata);
        // $data->save();

        // return ['success' => true, 'data' => $data];
    }
 
}
