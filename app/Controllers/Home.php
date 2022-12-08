<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $db = \Config\Database::connect();
        $builder = $db->table('settings');
        $builder->select('*');
        $data = $builder->get()->getFirstRow();

        return view('layout/template', [
            'data' => $data,
        ]);
    }
}
