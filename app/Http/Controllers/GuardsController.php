<?php

namespace App\Http\Controllers;

use App\Helpers\SuumaResponse;
use App\Models\Guard;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class GuardsController extends Controller
{
    public function retrieveGuards(Request $request){

        $inicio = $request->initDate;
        $fin = $request->lastDate;
        // Log::info([$inicio, $fin]);
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

    public function subscribeUser(Request $request, $guard_id, $user_id){

        $guard = Guard::find($guard_id);
        $user = User::find($user_id);
        $guard->guard_user()->attach($user->id, ['role' => $request->role, 'isActive' => $request->isActive]);

        $res = new SuumaResponse(
            200,
            'OK',
            '',
            200,
            "Guardia actualizada"
        );

        return response()->json($res->getResponse()[0]);

    }

    public function unsubscribeUser(Request $request, $guard_id, $user_id){

        $guard = Guard::find($guard_id);
        $user = User::find($user_id);
        $guard->guard_user()->detach($user->id);

        $res = new SuumaResponse(
            200,
            'OK',
            '',
            200,
            "Guardia actualizada"
        );

        return response()->json($res->getResponse()[0]);

    }

}
