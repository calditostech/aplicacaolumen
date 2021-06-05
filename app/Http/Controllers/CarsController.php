<?php

namespace App\Http\Controllers;

use Illiminate\Http\Request;
use App\Models\Cars;

class CarsController extends Controller
{
    private $model;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Cars $cars)
    {
        $this->model = $cars;
    }

    public function getAll(){
        $cars = $this->model->all();

        return response()->json($cars);
    }

    public function get($id){
        $car = $this->model->find($id);
        return response()->json($car);
    }

    public function store(Request $request){
        $car = $this->model->create($request->all());

        return response()->json($car);
    }

    public function update($id, Request $request){
        $car = $this->model->find($id)
        ->update($request->all());

        return response()->json($car);

    }

    public function delete($id){
        $car = $this->model->find($id)
        ->delete();

        return response()->json(data:null);
    }


}
