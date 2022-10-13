<?php

namespace App\Http\Controllers;

use App\Repository\AdminRepos;
use App\Repository\CusRepos;
use App\Repository\CategoryRepos;
use App\Repository\CarRepos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SignController extends Controller
{
    public function login()
    {
        return view('Sign.login');
    }

    public function formatPassword()
    {
        return view('Sign.formatPassword');
    }

    public function signin(Request $request)
    {
        $this->formValidate($request)->validate();
        Session::put('contact', $request->input('contact'));
        $admin = AdminRepos::getAdminById($request->input('contact'));
        $cus = CusRepos::getCusById1($request->input('contact'));
        if ($admin) {
            Session::put('username', $admin[0]->username);
            Session::put('email', $admin[0]->email);
            Session::put('contact', $admin[0]->contact);
            return redirect()->route('Car.index');
        } else if ($cus) {
            Session::put('username', $cus[0]->cusname);
            Session::put('email', $cus[0]->email);
            Session::put('contact', $cus[0]->contact);
            return redirect()->route('auth.home');
        }
    }

    function formValidate(Request $request)
    {
        return \Illuminate\Support\Facades\Validator::make(
            $request->all(),
            [
                'contact' => ['required'],
                'password'=> ['required',
                    function($attribute, $value , $fail){
                        global $request;
                        $key = 0;
                        $admin = AdminRepos::getAllAdmin();
                        $cus =CusRepos::getAllCus();
                        $pass = sha1($request->input('password'));
                        foreach ($admin as $a){
                            if($a->contact == $request->input('contact')){
                                    $admin = AdminRepos::getAdminById($request->input('contact'));
                                    if($admin[0]-> PASSWORD == $pass){
                                        $key =1;
                                    } else {
                                        $key = 0;
                                    }
                            }
                        }
                        foreach ($cus as $c){
                            if($c->contact == $request->input('contact')){
                                    $cus = CusRepos::getCusById1($request->input('contact'));
                                    if($cus[0]->PASSWORD == $pass){
                                        $key =1;
                                    } else {
                                        $key = 0;
                                    }
                            }
                        }
                        if($key != 1){
                            $fail('Wrong Pass Or contact.');
                        }
                    },
                ]
            ],
            [
                'contact.required' => 'contact can not be empty',
            ]
        );
    }
    public function signout()
    {
        if (Session::has('username')) {
            Session::forget('username');
        }
        if (Session::has('email')) {
            Session::forget('email');
        }
        if (Session::has('contact')) {
            Session::forget('contact');
        }
        return redirect()->action('SignController@login');
    }
    public function signoutcus()
    {
        if (Session::has('username')) {
            Session::forget('username');
        }
        if (Session::has('email')) {
            Session::forget('email');
        }
        if (Session::has('contact')) {
            Session::forget('contact');
        }
        return redirect()->action('SignController@login');
    }

    function formValidatecus(Request $request)
    {
        return \Illuminate\Support\Facades\Validator::make(
            $request->all(),
            [
                'contact' => ['required'],
                'cusname' => ['required'],
                'email' => ['email'],
                'PASSWORD' => ['required',function($fail){
                                        global $request;
                                        dd('haha2');
                                        $key = 0;
                                        $newpass = sha1($request->input('newpassword'));
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
                    
                ]
            ],
            [
                'contact.required' => 'contact can not be empty',
                'cusname.required' => 'username can not be empty',
                'email.required' => 'email can not be empty',
                // 'password.required' => 'password can not be empty',
            ]
        );
    }
    public function updatepass(Request $request){
                // $request->all();
                // dd('7haha');
                $this->formValidatecus($request)->validate();
                $cus=CusRepos::getCusById1($request->input('contact'));
                if($cus[0]->contact==$request->input('contact')){
                    $cus = (object)array(
                        'contact' => $request->input('contact'),
                        'password' => sha1($request->input('newpass'))
                    );
                    CusRepos::updatepass($cus);
                    return redirect()->action('SignController@formatPassword')
                        ->with('msg', 'Update Successfully');

                }else{
                    return redirect()->action('SignController@login')
                    ->with('msg', 'foget pass error');
                }
    }
}
