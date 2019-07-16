<?php

namespace App\Http\Controllers;

use App\Helpers\SuumaResponse;
use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;
use JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;
use App\Http\Requests\ProfileStoreRequest;
use Illuminate\Support\Facades\Log;


class ProfileController extends Controller
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
        $profile = $this->user->profile;
        $res = new SuumaResponse(
            200,
            'OK',
            '',
            200,
            'Información de Usuario',
            $profile
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
    public function store(ProfileStoreRequest $request)
    {

        // TODO: This is not working
        $info = $request->validated();
        Log::debug($request);

        return response()->json([
           'data' => $info
        ]);
    }

    public function savePhoto(Request $request){
        // Pseudocode
        // 1. Revisar si no hay foto previa SI HAY eliminar
        // 2. Obtener la imagen
        // 3. Obtener el perfil y guardar la ruta nueva
        // 4. Regresar la ruta

        Log::debug($request);

        $profile = $this->user->profile;
        if ($profile->photo != null || $profile->photo == ""){
            if(File::exists($profile->photo)) {
                File::delete($profile->photo);
            }
        }

        $randomName = Str::random(16);
        $extension = $request->file('photo')->getClientOriginalExtension();
        $filename = $randomName . '.' . $extension;

        $path = $request->file('photo')->move(public_path('images/'), $filename);
        $photoURL = 'images/' . $filename;


        $profile->photo = $photoURL;
        $profile->save();

        $response = new SuumaResponse(
            200,
            'OK',
            '',
            200,
            'Foto subida con éxito',
            [
                "url" => $photoURL
            ]
        );

        return response()->json($response->getResponse()[0]);

    }

    public function retrievePhoto(Request $request){
        $profile = $this->user->profile;
        $default = 'images/default.png';
        if ($profile->photo == null || $profile->photo == ""){
            $img = Image::make($default)->encode('data-url');
        }
        else{
             if(File::exists($profile->photo)) {
                 $img = Image::make($profile->photo)->encode('data-url');
        }    }                                   

        return $img->response('data-url');
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
        $profile = Profile::find($id);
        $profile->name = $request->name;
        $profile->appat = $request->appat;
        $profile->apmat = $request->apmat;
        $profile->date_birth = $request->date_birth;
        $profile->blood_type = $request->blood_type;
        $profile->CURP = $request->CURP;
        $profile->tel_contact = $request->tel_contact;
        $profile->tel_contact_2 = $request->tel_contact_2;

        $profile->save();

        $res = new SuumaResponse(
            200,
            'OK',
            '',
            200,
            'Perfil Actualizado correctamente',
            $profile
        );

        return response()->json($res->getResponse()[0]);
    }

    public function updateEC(Request $request, $id){
        $profile = Profile::find($id);
        $profile->ec_name = $request->name;
        $profile->ec_appat = $request->appat;
        $profile->ec_apmat = $request->apmat;
        $profile->ec_relationship = $request->relationship;
        $profile->ec_telephone = $request->telephone;

        $profile->save();

        $res = new SuumaResponse(
            200,
            'OK',
            '',
            200,
            'Contacto de emergencia actualizado correctamente',
            $profile
        );

        return response()->json($res->getResponse()[0]);
    }

    public function updateDirection(Request $request, $id){
        $profile = Profile::find($id);
        $profile->dir_street = $request->street;
        $profile->dir_state = $request->state;
        $profile->dir_pc = $request->postal_code;
        $profile->dir_col = $request->suburb;

        $profile->save();

        $res = new SuumaResponse(
            200,
            'OK',
            '',
            200,
            'Direccion actualizada correctamente',
            $profile
        );

        return response()->json($res->getResponse()[0]);
    }

    public function updateFiscal(Request $request, $id){
        $profile = Profile::find($id);
        $profile->fis_business_name = $request->business_name;
        $profile->fis_dir_fiscal = $request->direction;
        $profile->fis_RFC = $request->RFC;
        $profile->fis_email = $request->email;

        $profile->save();

        $res = new SuumaResponse(
            200,
            'OK',
            '',
            200,
            'Direccion actualizada correctamente',
            $profile
        );

        return response()->json($res->getResponse()[0]);
    }

    public function updateExtras(Request $request, $id){
        $profile = Profile::find($id);
        $profile->generation = $request->generation;
        $profile->BLS_exp = $request->exp_BLS;

        $profile->save();

        $res = new SuumaResponse(
            200,
            'OK',
            '',
            200,
            'Direccion actualizada correctamente',
            $profile
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
