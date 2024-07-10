<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    //
    public function index($angka)
    {
        for($i=1; $angka >= $i ;$i++)
        {
            if($i % 4 == 0 && $i % 5 == 0)
            {
                echo "Hello World!! <br>";
            }
           else if($i % 4==0)
           {
                echo "Hello <br>";
           }
           else if($i % 5 == 0)
           {
            echo "World <br>";
           }
           else
           {
            echo $i . "<br>";
           }

        }
    }
}
