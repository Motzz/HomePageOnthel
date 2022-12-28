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
    public function blog()
    {
        // $db = \Config\Database::connect();
        // $builder = $db->table('settings');
        // $builder->select('*');
        // $data = $builder->get()->getFirstRow();

        // return view('layout/blog', [
        //     'data' => $data,
        // ]);

        return view('layout/blog', []);
    }
    public function tos()
    {
        $db = \Config\Database::connect();
        $builder = $db->table('settings');
        $builder->select('*');
        $data = $builder->get()->getFirstRow();

        return view('layout/tos', [
            'data' => $data,
        ]);

        // return view('layout/tos', []);
    }
    public function privasi()
    {
        $db = \Config\Database::connect();
        $builder = $db->table('settings');
        $builder->select('*');
        $data = $builder->get()->getFirstRow();

        return view('layout/privasi', [
            'data' => $data,
        ]);

        // return view('layout/privasi', []);
    }
}
