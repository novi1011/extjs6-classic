<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Car;

class CarController extends Controller
{
    public function index () {
        $data=Car::orderBy('name','asc')->get();
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
        $data = Car::find($id);
        $data->name = $request->name;
        $data->brands = $request->brands;
        $data->color = $request->color;
        foreach ($data as $car){
            $data['name'] = $car;
            $data['brands'] = $car;
            $data['color'] = $car;
        }
        Car::where($id)->update([$data]);
        Car::where('id')->update(['name'=>$data['name'], 'brands'=>['brands'], 'color'=>['color']]);
        
        
        $data->save();

        return ['success' => true, 'data' => $data];

    }
 
}
