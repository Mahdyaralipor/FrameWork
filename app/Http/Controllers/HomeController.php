<?php

namespace App\Http\Controllers;

use App\Models\User;

class HomeController extends Controller
{

    public function index()
    {
       // echo "homeController index";

        $user = new User();

        $user->insert([
            'name'=>"reza",
            'email'=>"reza@gmail.com",
        ]);

//         $result =  $user->find(13);
//        var_dump($result->name);

//        $user->find(13)->update([
//            'name'=>"Ahmed",
//            'email'=>"Ahmed@gmail.com",
//        ]);

//        $users = $user->get();
//
//        foreach ($users as $user){
//            echo $user->name;
//            echo "<br/>";
//        }

//        $user->delete(13);

//        $users = $user->where('id','>', 14)->get();
//        foreach ($users as $user) {
//            echo $user->name;
//            echo "<br/>";
//        }


//        $users = $user->orderBy('id','DESC')->get();
//        foreach ($users as $user) {
//            echo $user->name;
//            echo "<br/>";
//        }


//        $users = $user->limit(0,2)->get();
//        foreach ($users as $user) {
//            echo $user->name;
//            echo "<br/>";
//        }

    }


}