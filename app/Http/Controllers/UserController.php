<?php

namespace App\Http\Controllers;


class UserController extends Controller
{
    
    public function index()
    {
        echo "User Controller index";
    }
    public function create()
    {
        echo "User Controller create";
    }
    public function store()
    {
        echo "User Controller store";
    }
    public function edit($id)
    {
        echo "User Controller edit";
    }
    public function update($id)
    {
        echo "User Controller update";
    }
    public function delete($id)
    {
        echo "User Controller delete";
    }

}