<?php

/*
 * GeneralController yields access to public information like units, news, updates...
 * */

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Unit;
use App\Helpers\SuumaResponse;

class GeneralController extends Controller
{
    public function showUnits(){

        $units = Unit::where('isActive', 1)->get();
        $res = new SuumaResponse(
            200,
            "OK",
            "",
            200,
            "Usuarios No activos",
            $units
        );
        return response()->json($res->getResponse()[0]);
    }

}
