<?php

namespace App\Http\Controllers;

use App\Repository\CarRepos;
use App\Repository\CategoryRepos;
use Illuminate\Http\Request;

class CarController extends Controller
{
    //
    public function index()
    {
        $car=CarRepos::getAllCarWithmodel();
        return view('Car.indexCar',
            [
                'car'=>$car
            ]);
    }

    public function create(){
        $model =CategoryRepos::getAllCategory();
        return view(

            'Car.newCar',
            [
                "car"=>(object)[
                    'carid'=>'',
                    'model'=>'',
                    'carname'=>'',
                    'color'=>'',
                    'price'=>'',
                    'quantity'=>'',
                    'image'=>'',
                    'size'=>''
                ],
                "model"=>$model
            ]);
    }

    public function store(Request $request)
    {
        $this->formValidate($request)->validate();
        if($request->hasFile('image')){
            $destination_path = 'public/images/Category';
            $image = $request->file('image');
            $image_name = $image->getClientOriginalName();
            $path = $request->file('image')->storeAs($destination_path,$image_name);
            $car = (object)[
                'carname' => $request->input('carname'),
                'color' => $request->input('color'),
                'price' => $request->input('price'),
                'quantity'=>$request->input('quantity'),
                'image'=>$image_name,
                'size'=>$request->input('size'),
                'model'=>$request->input('model')
            ];

        }



        $newid = CarRepos::insert($car);

        return redirect()
            ->action('CarController@index')
            ->with('msg', 'New car with id: '.$newid.' has been inserted');
    }

    function formValidate (Request $request){
        return \Illuminate\Support\Facades\Validator::make(
            $request ->all(),
            [
                'carname' => ['required'],
                'color' => ['required'],
                'price'=>['required'],
                'quantity'=>['required'],
                'size'=>['required'],
                'model'=>['gt:0']
            ],
            [
                'carname.required' => 'carname can not be empty',
                'color.required' => 'color can not be empty',
                'price.required'=>'price can not be empty',
                'quantity.required'=>'quantity can not be empty',
                'size.required'=>'size can not be empty',
                'model.gt'=>'Please choose model car'
            ]
        );
    }

    public function edit($carid)
    {
        $car = CarRepos::getCarById($carid);
        $model =CategoryRepos::getAllCategory();

        return view(
            'Car.updateCar',
            [
                "car" => $car[0],
                "model"=>$model
            ]);
    }

    public function update(Request $request, $carid)
    {
        if ($carid != $request->input('carid')) {
            return redirect()->action('CarController@index');
        }

        $this->formValidate($request)->validate(); //shortcut

        if($request->hasFile('image')) {
            $destination_path = 'public/images/Car';
            $image = $request->file('image');
            $image_name = $image->getClientOriginalName();
            $path = $request->file('image')->storeAs($destination_path, $image_name);
            $car = (object)[
                'carid' => $request->input('carid'),
                'carname' => $request->input('carname'),
                'color' => $request->input('color'),
                'price' => $request->input('price'),
                'quantity' => $request->input('quantity'),
                'image' => $image_name,
                'size' => $request->input('size'),
                'model' => $request->input('model'),
            ];
            CarRepos::update($car);
        } else {
            $car = (object)[
                'carid' => $request->input('carid'),
                'carname' => $request->input('carname'),
                'color' => $request->input('color'),
                'price' => $request->input('price'),
                'quantity' => $request->input('quantity'),
                'image' => $request->input('image'),
                'size' => $request->input('size'),
                'model' => $request->input('model'),
            ];
            CarRepos::update_car($car);
        }




        return redirect()->action('CarController@index')
            ->with('msg', 'Update Successfully');
    }


    public function show($carid){
        $car = CarRepos::getCarById($carid);
        $model =CategoryRepos::getModelByCarId($carid);
        return view('Car.showCar',
            [
                'car'=>$car[0],
                'model'=>$model[0]
            ]);

    }

    public function confirm($carid){
        $car = CarRepos::getCarById($carid);
        $model= CategoryRepos::getModelByCarId($carid);
        if(isset($car[0])){
            return view('Car.deleteCar',
                [
                    'car' => $car[0],
                    'model'=>$model[0]
                ]
            );
        } else {
            return redirect()->action('CarController@index');
        }

    }

    public function destroy(Request $request, $carid)
    {
        if ($request->input('carid') != $carid) {
            return redirect()->action('CarController@index');
        }
        CarRepos::delete($carid);
        return redirect()->action('CarController@index')
            ->with('msg', 'Delete Successfully');
    }

}
