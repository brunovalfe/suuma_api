<?php

namespace App\Http\Controllers;

use App\Models\CertificateType;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Guard;
use App\Models\Unit;
use App\Helpers\SuumaResponse;
use Illuminate\Support\Facades\Log;

class AdminPowers extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $notActiveUsers = User::where('isActive', 0)->get();
        $notActiveUsers = User::all();
        $res = new SuumaResponse(
            200,
            "OK",
            "",
            200,
            "Usuarios No activos",
            $notActiveUsers
        );
        return response()->json($res->getResponse()[0]);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = User::find($id);
        // Modificable: isActive, instructor, operator, service_chief, range
        $user->isActive = ($request->isActive === true) ? 1 : 0 ;
        $user->instructor = ($request->instructor === true) ? 1 : 0;
        $user->operator = ($request->operator === true) ? 1 : 0;
        $user->service_chief = ($request->service_chief === true) ? 1 : 0;
        $user->range = $request->range;
        $user->save();

        $res = new SuumaResponse(
            200,
            'OK',
            '',
            200,
            "Actualizado con éxito",
            $user
        );

        return response()->json($res->getResponse()[0]);
    }


    public function deleteGuard($id){
        $guard = Guard::find($id)->delete();
        $res = new SuumaResponse(
            200,
            'OK',
            '',
            200,
            "Guardia borrada exitosamente",
            $guard
        );

        return response()->json($res->getResponse()[0]);
    }

    public function showUsersInDetail(Request $request){
        $users = User::where('isActive', 1)->get();
        foreach ($users as $user){
            $user->profile;
        }

        $res = new SuumaResponse(
            200,
            'OK',
            '',
            200,
            "Usuarios y perfiles",
            $users
        );

        return response()->json($res->getResponse()[0]);
    }

    public function storeGuard(Request $request) {

        $user = User::find($request->user_id);
        $ambulance = Unit::find($request->unit_id);

        // TODO: Check if the guard doesn't splice with another guard... if that happens, send an error msg

        $guard = new Guard();
        $guard->date = $request->date;
        $guard->hour = $request->time;
        $guard->duration = $request->duration;
        $guard->max_quota = $request->max_quota;
        $guard->type = $request->type;
        $guard->description = $request->description;
        $guard->isActive = $request->isActive;

        $guard->unit()->associate($ambulance);
        $guard->user()->associate($user);

        $guard->save();

        foreach ($request->crew as $personal) {
            Log::debug($personal);
            $guard->guard_user()->attach($personal['id'], ['role' => $personal['role'], 'isActive' => 1]);
        }

        foreach ($guard->guard_user as $user) {
            $user->pivot->value('role');
        }

        $res = new SuumaResponse(
            200,
            'OK',
            '',
            200,
            "Guardia creada",
            $guard
        );

        return response()->json($res->getResponse()[0]);
    }

    public function storeCertificateType(Request $request) {

        $certificateType = new CertificateType();
        $certificateType->nombre_certificado= $request->nombre_certificado;
        $certificateType->tipo_certificado = $request->tipo_certificado;
        $certificateType->duracion_certificado = $request->duracion_certificado;

        $certificateType->save();

        $res = new SuumaResponse(
            200,
            'OK',
            '',
            200,
            "Tipo de Certificado Creado",
            $certificateType
        );
        return response()->json($res->getResponse()[0]);
    }


}
