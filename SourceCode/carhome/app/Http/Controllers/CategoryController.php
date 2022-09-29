<?php

namespace App\Http\Controllers;

use App\Repository\CarRepos;
use App\Repository\CategoryRepos;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //
    public function index()
    {
        $model=CategoryRepos::getAllCategory();
        return view('Category.indexCategory',
            [
                'model'=>$model,
            ]);
    }

    public function create(){
        return view(
            'Category.newCategory',
            ["model"=>(object)[
                'modelid'=>'',
                'modelname'=>'',
                'image'=>'',
                'description'=>''
            ]]);
    }

    public function store(Request $request)
    {
        $this->formValidate($request)->validate();
        if($request->hasFile('image')){
            $destination_path = 'public/images/Category';
            $image = $request->file('image');
            $image_name = $image->getClientOriginalName();
            $path = $request->file('image')->storeAs($destination_path,$image_name);
            $model = (object)[
                'modelname' => $request->input('modelname'),
                'image' => $image_name,
                'description' => $request->input('description')

            ];

        }


        $newid = CategoryRepos::insert($model);

        return redirect()
            ->action('CategoryController@index')
            ->with('msg', 'New class with id: '.$newid.' has been inserted');
//        dd($request->all());
    }

    function formValidate(Request $request){
        return \Illuminate\Support\Facades\Validator::make(
            $request ->all(),
            [
                'modelname' => ['required'
                ],
                'description' => ['required']

            ],
            [
                'modelname.required' => 'modelname can not be empty',
                'description.required' => 'description can not be empty'
            ]
        );
    }

    public function edit($modelid)
    {
        $model = CategoryRepos::getModelById($modelid);

        return view(
            'Category.updateCategory', ["model" => $model[0]]);
    }

    public function update(Request $request, $modelid)
    {
        if ($modelid != $request->input('modelid')) {
            return redirect()->action('CategoryController@index');
        }

        $this->formValidate($request)->validate();

        if($request->hasFile('image')) {
            $destination_path = 'public/images/Category';
            $image = $request->file('image');
            $image_name = $image->getClientOriginalName();
            $path = $request->file('image')->storeAs($destination_path, $image_name);
            $model = (object)[
                'modelid' => $request->input('modelid'),
                'modelname' => $request->input('modelname'),
                'image' => $image_name,
                'description' => $request->input('description')
            ];
            CategoryRepos::update($model);
        } else{
            $model = (object)[
                'modelid' => $request->input('modelid'),
                'modelname' => $request->input('modelname'),
                'description' => $request->input('description')
            ];
            CategoryRepos::update_category($model);
        }

            return redirect()->action('CategoryController@index')
                ->with('msg', 'Update Successfully');
    }


    public function confirm($modelid){
        $model = CategoryRepos::getModelById($modelid);

        return view('Category.deleteCategory',
            [
                'model' => $model[0]
            ]
        );
    }

    public function destroy(Request $request, $modelid)
    {
        if ($request->input('modelid') != $modelid) {
            return redirect()->action('CategoryController@index');
        }
        $car = CarRepos::getAllCar();
        foreach ($car as $c){
            if($c->model == $modelid){
                return redirect()->action('CategoryController@index')
                    ->with('msgf', 'Delete failed because this model have some car.');
            }
        }
        CategoryRepos::delete($modelid);
        return redirect()->action('CategoryController@index')
            ->with('msg', 'Delete Successfully');
    }

}
