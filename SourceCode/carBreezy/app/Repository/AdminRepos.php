<?php

namespace App\Repository;
use Illuminate\Support\Facades\DB;

class AdminRepos
{
    public static function getAllAdmin() {
        $sql = 'select a.username, a.contact, a.email ';
        $sql .= 'from admin as a ';
        $sql .= 'order by  a.contact DESC';

        return DB::select ($sql);
    }

    public static function getAdminById($contact){
        $sql = 'select a.* ';
        $sql .= 'from admin as a ';
        $sql .= 'where a.contact = ? ';

        return DB::select($sql, [$contact]);
    }


    public static function update(object $admin){
        $sql = 'update admin ';
        $sql .= 'set username = ?, email = ?, PASSWORD = ? ';
        $sql .= 'where contact = ? ';

        DB::update($sql, [$admin->username, $admin->email, $admin->password, $admin->contact]);

    }
}

