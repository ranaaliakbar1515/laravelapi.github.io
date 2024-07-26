<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Casts\Json;
use Illuminate\Http\Request;

class dummyAPI extends Controller
{
    function getData()
    {
        return ["Name"=>"Ali","Email"=>"aliakbar1515@gmail.com","city"=>"Multan"];

    }
}
