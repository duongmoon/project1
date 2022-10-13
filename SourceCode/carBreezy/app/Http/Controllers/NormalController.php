<?php

namespace App\Http\Controllers;

use App\Repository\CusRepos;
use App\Repository\CarRepos;
use App\Repository\CategoryRepos;
use App\Repository\CartRepos;
use Illuminate\Http\Request;

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

    public function store(Request $request)
    {
//        dd($request->all());
        $this->formValidate($request)->validate();
        dd('haha3333');
        $cus = (object)[
            'cusname' => $request->input('cusname'),
            'dob' => $request->input('dob'),
            'gender' => $request->input('gender'),
            'contact'=>$request->input('contact'),
            'email'=>$request->input('email'),
            'address'=>$request->input('address'),
            'PASSWORD'=>sha1($request->input('npassword'))
        ];
        $newid = CusRepos::insert($cus);
        return view('normal.complete');
    }


    function formValidate(Request $request){
        return \Illuminate\Support\Facades\Validator::make(
            $request ->all(),
            [
                'cusname' => ['required'],
                'dob' => ['required', 'after:1940/01/01', 'before:2015/01/01'],
                'gender'=>['required'],
                'contact'=>['required','digits:10'],
                'email'=>['required','email'],
                'PASSWORD'=>['required',
                    function($attribute, $value , $fail){
                        dd('haha1111');
                        global $request;
                        $key = 0;
                        $newpass = sha1($request->input('npassword'));
                        $passconfirm = sha1($request->input('confirmpassword'));
                        if($newpass == $passconfirm){
                            $key =1;
                        } else {
                            $key = 0;
                        }
                        if($key != 1){
                            $fail('Wrong Pass. Please Enter Correct Password!!');
                        }
                    }
                    
                ],
                'address'=>['required'],
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
