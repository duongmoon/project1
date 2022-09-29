<?php

namespace App\Repository;

use Illuminate\Support\Facades\DB;

class CarRepos
{
    public static function getAllCar()
    {
        $sql='select c.* ';
        $sql.='from car as c ';
        $sql.='order by c.carid';
        return DB::select ($sql);
    }

    public static function getAllCarWithmodel()
    {
        $sql = 'select c.*, e.modelname as model ';
        $sql.= 'from car as c ';
        $sql.='join model as e on c.model = e.modelid ';
        $sql.='order by c.carid';
        return DB::select($sql);
    }

    public static function getCarById($carid)
    {
        $sql='select c.* ';
        $sql.='from car as c ';
        $sql.='where c.carid = ? ';
        return DB :: select ($sql,[$carid]);
    }

    public static function insert(object $car)
    {
        $sql = 'insert into car ';
        $sql .= '(carname, color, price, quantity, image, size, model) ';
        $sql .= 'values (?, ?, ?, ?, ?, ?, ?) ';

        $result =  DB::insert($sql, [$car->carname, $car->color, $car->price, $car->quantity, $car->image,
            $car->size, $car->model]);
        if($result){
            return DB::getPdo()->lastInsertId();
        } else {
            return -1;
        }
    }


    public static function update(object $car)
    {
        $sql = 'update car ';
        $sql .= 'set carname = ?, color = ?, price = ?, quantity = ?, image = ?, size = ?, model = ? ';
        $sql .= 'where carid = ? ';

        DB::update($sql, [$car->carname, $car->color, $car->price, $car->quantity, $car->image, $car->size, $car->model, $car->carid]);
    }

    public static function delete($carid)
    {
        $sql = 'delete from car ';
        $sql .= 'where carid = ? ';

        DB::delete($sql, [$carid]);
    }
    public static function update_car(object $car)
    {
        $sql = 'update car ';
        $sql .= 'set carname = ?, color = ?, price = ?, quantity = ?, size = ?, model = ? ';
        $sql .= 'where carid = ? ';

        DB::update($sql, [$car->carname, $car->color, $car->price, $car->quantity, $car->size, $car->model, $car->carid]);
    }

    public static function getCarByModelid($modelid)
    {
        $sql= 'select c.*, e.modelname as model ';
        $sql .= 'from car as c ';
        $sql .= 'join model as e on c.model= e.modelid ';
        $sql .= 'where e.modelid = ? ';
        $sql.='order by c.carid';

        return DB::select($sql, [$modelid]);
    }

    public static function getCarBySearch($search){

        $sql= 'select c.* ';
        $sql .= 'from car as c ';
        $sql .= "where c.carname like ? ";
        return DB::select($sql, ['%'.$search.'%']);

    }
}
