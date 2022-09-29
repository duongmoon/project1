<?php

namespace App\Repository;
use Illuminate\Support\Facades\DB;

class CategoryRepos
{
    public static function getAllCategory()
    {
        $sql='select e.* ';
        $sql.='from model as e ';
        $sql.='order by e.modelname';
        return DB::select ($sql);
    }

    public static function insert(object $model)
    {
        $sql = 'insert into model ';
        $sql .= '(modelname, image, description) ';
        $sql .= 'values (?, ?, ?) ';

        $result =  DB::insert($sql, [$model->modelname, $model->image, $model->description]);
        if($result){
            return DB::getPdo()->lastInsertId();
        } else {
            return -1;
        }
    }

    public static function getModelById($modelid)
    {
        $sql='select c.* ';
        $sql.='from model as c ';
        $sql.='where c.modelid = ? ';
        return DB :: select ($sql,[$modelid]);
    }

    public static function delete($modelid)
    {
        $sql = 'delete from model ';
        $sql .= 'where modelid = ? ';

        DB::delete($sql, [$modelid]);
    }

    public static function getModelByCarId($carid)
    {
        $sql= 'select e.* ';
        $sql .= 'from model as e ';
        $sql .= 'join car as c on e.modelid= c.model ';
        $sql .= 'where c.carid = ?';
        return DB::select($sql, [$carid]);
    }
    public static function update_category(object $model)
    {
        $sql = 'update model ';
        $sql .= 'set modelname = ?, description = ? ';
        $sql .= 'where modelid = ? ';

        DB::update($sql, [$model->modelname, $model->description, $model->modelid]);
    }
    public static function update(object $model)
    {
        $sql = 'update model ';
        $sql .= 'set modelname = ?, image = ?, description = ? ';
        $sql .= 'where modelid = ? ';

        DB::update($sql, [$model->modelname, $model->image, $model->description, $model->modelid]);
    }
}
