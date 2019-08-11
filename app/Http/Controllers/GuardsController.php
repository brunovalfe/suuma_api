<?php

namespace App\Http\Controllers;

use App\Helpers\SuumaResponse;
use App\Models\Guard;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class GuardsController extends Controller
{
    public function retrieveGuards(Request $request){

        $inicio = $request->initDate;
        $fin = $request->lastDate;

        $guards = Guard::whereBetween('date', array($inicio, $fin))->with('guard_user')->get();

        $res = new SuumaResponse(
            200,
            'OK',
            '',
            200,
            "Guardias actuales",
            $guards
        );

        return response()->json($res->getResponse()[0]);
    }


}
