<?php

namespace App\Repository;
use Illuminate\Support\Facades\DB;
class CusRepos
{

    public static function getAllCus()
    {
        $sql = 'select c.* ';
        $sql .= 'from CUSTOMER as c ';
        $sql .= 'order by c.contact';

        return DB::select ($sql);
    }

    public static function getCusById($cusid){
        $sql = 'select c.* ';
        $sql .= 'from CUSTOMER as c ';
        $sql .= 'where c.cusid = ? ';

        return DB::select($sql, [$cusid]);
    }
    public static function getCusById1($contact){
        $sql = 'select c.cusname,c.contact, c.email,c.PASSWORD ';
        $sql .= 'from CUSTOMER as c ';
        $sql .= 'where c.contact = ? ';
        return DB::select($sql, [$contact]);
    }
    public static function getCusById2($contact){
        $sql = 'select c.* as tottal ';
        $sql .= 'from CUSTOMER as c ';
        $sql .= 'where c.contact = ? ';

        return DB::select($sql, [$contact]);
    }

    public static function update(object $cus){
        $sql = 'update customer ';
        $sql .= 'set cusname = ?, dob = ?, gender = ?, contact = ?, email = ?, address = ? ';
        $sql .= 'where cusid = ? ';

        DB::update($sql, [$cus->cusname, $cus->dob, $cus->gender, $cus->contact, $cus->email, $cus->address, $cus->cusid]);
    }
    public static function updatepass(object $cus){
        $sql = 'update customer ';
        $sql .= 'set PASSWORD = ? ';
        $sql .= 'where contact = ? ';

        DB::update($sql, [$cus->PASSWORD,$cus->contact]);
    }

    public static function insert(object $cus)
    {
        $sql = 'insert into customer ';
        $sql .= '(cusname, dob, gender, contact, email, address,PASSWORD) ';
        $sql .= 'values (?, ?, ?, ?, ?, ?, ?) ';

        $result =  DB::insert($sql, [$cus->cusname, $cus->dob, $cus->gender, $cus->contact, $cus->email,
            $cus->address, $cus->PASSWORD]);
        if($result){
            return DB::getPdo()->lastInsertId();
        } else {
            return -1;
        }
    }


}
