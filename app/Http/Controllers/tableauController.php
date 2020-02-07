<?php

namespace App\Http\Controllers;

use App\Tableau;
use Illuminate\Http\Request;

class tableauController extends Controller
{
    //listData
    public function listData()
    {
        
        $data = Tableau::all();

        return response()->json($data);
    }
}
