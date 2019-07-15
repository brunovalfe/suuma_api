<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
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
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
