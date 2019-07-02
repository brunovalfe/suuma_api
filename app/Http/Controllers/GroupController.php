<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;
use App\Group;

class GroupController extends Controller
{

    protected $user;
    protected $isAdmin;

    public function __construct()
    {
        try{
            if(!($this->user = JWTAuth::parseToken()->authenticate())){
                return response()->json([
                    'status' => 'error',
                    'message' => 'User not found'
                ], 404);
            }
            // Check if Admin exists
            // Might exists only one type of user attached
            if(!$this->user->groups[0]->name == 'admin'){
                return response()->json([
                    'status' => 'error',
                    'message' => 'Not allowed'
                ], 401);
            }
            else {
                $this->isAdmin = true;
            }

        }
        catch (JWTException $ex) {
            return response()->json([
                'status' => 'error',
                'message' => 'Token Absent'
            ], 401);
        }
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        $user = $this->user;
//        $user->groups = $this->user->groups;

        $groups = Group::all();

        return response()->json([
           'status' => 'Ok',
           'message' => 'Groups',
           'data' => $groups->toArray()
        ]);


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
        //
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
