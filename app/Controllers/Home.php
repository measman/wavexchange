<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('admin/dashboard');
    }
    public function transaction()
    {
        return view('admin/transaction');
    }
}