<?php

namespace App\Http\Controllers;

use App\Repository\AdminRepos;
use App\Repository\CarRepos;
use App\Repository\CusRepos;
use App\Repository\CategoryRepos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use function PHPUnit\Framework\countOf;

class NormalController extends Controller
{
    //
    public function home(){
        $model = CategoryRepos::getAllCategory();
        $car = CarRepos::getAllCar();
        return view('normal.HomeView',
        [
            'model'=>$model,
            'car'=>$car
        ]);
    }
    public function Categoryview(){
        $model=CategoryRepos::getAllCategory();

        return view('normal.Categoryview',
        [
            'model'=>$model
        ]);
    }
    public function CarWithModel($modelid){
        $car = CarRepos::getCarByModelid($modelid);
        $model = CategoryRepos::getModelById($modelid);
        return view('normal.CarWithModel',[
            'car1' => $car,
            'model' => $model
        ]);

    }

    public function search(request $request){

//        dd($request->all());
        $search = $request->search;
        $car1 = CarRepos::getCarBySearch($search);
//        dd(count($car));
        return view('normal.carSearch',[
                'car1'=> $car1,
                'search'=> $search
            ]
        );
    }
    public function signup(){
        return view('normal.signup',

            ["cus"=>(object)[
                'cusid'=>'',
                'cusname'=>'',
                'dob'=>'',
                'gender'=>'',
                'contact'=>'',
                'email'=>'',
                'address'=>''
            ]]);
    }
    public function Cardetail($carid){
        $car = CarRepos::getCarById($carid);
        $car1 = CarRepos::getCarByModelid($car[0]->model);
        return view('normal.cardetail',[
            'car'=> $car[0],
            'car1' => $car1
        ]);
    }
    function formValidate (Request $request){
        return \Illuminate\Support\Facades\Validator::make(
            $request ->all(),
            [
                'cusname' => ['required'],
                'dob' => ['required', 'after:1900/01/01', 'before:2022/01/01'],
                'gender'=>['required'],
                'contact'=>['required','digits:10'],
                'email'=>['required','email'],
                'address'=>['required']
            ],
            [
                'cusname.required' => 'cusname can not be empty',
                'dob.required' => 'dob can not be empty',
                'gender.required'=>'gender can not be empty',
                'contact.required'=>'contact can not be empty',
                'email.required'=>'email can not be empty',
                'address.required'=>' address can not be empty',
                'email.email'=>'Invalid email'
            ]
        );
    }
    public function store(Request $request)
    {
//        dd($request->all());
        $this->formValidate($request)->validate();
        $cus = (object)[
            'cusname' => $request->input('cusname'),
            'dob' => $request->input('dob'),
            'gender' => $request->input('gender'),
            'contact'=>$request->input('contact'),
            'email'=>$request->input('email'),
            'address'=>$request->input('address')
        ];


        $newid = CusRepos::insert($cus);

        return view('normal.complete');
    }

    public function order(){
        return view('normal.OrderCar');
    }

    public function about(){
        return view('normal.About');
    }
//    public function contact(){
//        return view('normal.contact');
//    }
    public function car(){
        $car1=CarRepos::getAllCar();
        return view('normal.Carview',[
            'car1'=>$car1
        ]);
    }
}
