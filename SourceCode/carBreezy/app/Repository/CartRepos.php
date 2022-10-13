<?php

namespace App\Repository;
use Illuminate\Support\Facades\DB;

class CartRepos
{
    public static function getAllCart() {
        $sql = 'select cart.id_cart, cart.code_cart, cart.cusid, cart.time_cart ';
        $sql .= 'from cart';
        $sql .= 'order by cart.id_cart';

        return DB::select ($sql);
    }

    public static function getCartById($id_cart){
        $sql = 'select cart.* ';
        $sql .= 'from cart';
        $sql .= 'where Cart.id_cart = ? ';

        return DB::select($sql, [$id_cart]);
    }


    public static function update(object $admin){
        $sql = 'update admin ';
        $sql .= 'set contact = ?, email = ?, PASSWORD = ? ';
        $sql .= 'where username = ? ';

        DB::update($sql, [$admin->contact, $admin->email, $admin->password, $admin->username]);

    }
    public static function insert(object $cart)
    {
        $sql = 'insert into cart ';
        $sql .= '(cusid, time_cart) ';
        $sql .= 'values (?, ?) ';

        $result =  DB::insert($sql, [$cart->cusid, $cart->time_cart]);
        if($result){
            return DB::getPdo()->lastInsertId();
        } else {
            return -1;
        }
    }
}