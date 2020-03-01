<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\SuumaResponse;
use App\Models\Certificate;
use App\Models\User;
use Illuminate\Support\Facades\Log;
//use Illuminate\Support\Facades\File;
//use Intervention\Image\Facades\Image;
//use App\Http\Requests\ProfileStoreRequest;
use JWTAuth;

class CertificateController extends Controller
{
    /////////// protected es necesario para index. Tal vez sea necesario mover las funciones de Admin.
    protected $user;

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

    public function myCertificates(){
        $certificates = $this->user->certificates;
        $res = new SuumaResponse(
            200,'OK', '', 200, 'Certificados personales', $certificates
        );
        return response()->json($res->getResponse()[0]);
    }

    public function index(){
        $certificates = Certificate::all();
//            $this->user->certificates;
        $res = new SuumaResponse(
            200,'OK', '', 200, 'Todos los Certificados', $certificates
        );
        return response()->json($res->getResponse()[0]);
    }

    public function showPendingCertificates(Request $request){
       $users = User::where('isActive', 1)->get();
        $pendingCertificates = Certificate::where('estado_solicitud', 0)->get();
        foreach ($users as $user){
            $user->pendingCertificates;
        }
        $res = new SuumaResponse(
            200,'OK', '', 200, "Certificados Pendientes", $pendingCertificates
        );
        return response()->json($res->getResponse()[0]);
    }

    public function showActiveCertificates(Request $request){
        $users = User::where('isActive', 1)->get();
        $activeCertificates = Certificate::where('estado_solicitud', 1)->get();
        foreach ($users as $user){
            $user->activeCertificates;
        }
        $res = new SuumaResponse(
            200,'OK', '', 200, "Certificados Activos", $activeCertificates
        );
        return response()->json($res->getResponse()[0]);
    }

    public function showInactiveCertificates(Request $request){
        $users = User::where('isActive', 1)->get();
        $inactiveCertificates = Certificate::where('estado_solicitud', 2)->get();
        foreach ($users as $user){
            $user->inactiveCertificates;
        }
        $res = new SuumaResponse(
            200,'OK', '', 200, "Certificados Inactivos", $inactiveCertificates
        );
        return response()->json($res->getResponse()[0]);
    }

    public function showExpiredCertificates(Request $request){
        $users = User::where('isActive', 1)->get();
        $expiredCertificates = Certificate::where('estado_solicitud', 3)->get();
        foreach ($users as $user){
            $user->expiredCertificates;
        }
        $res = new SuumaResponse(
            200,'OK', '', 200, "Certificados Expirados", $expiredCertificates
        );
        return response()->json($res->getResponse()[0]);
    }

//    public function update(Request $request, $id)
//    {
//        $certificate = Certificate::find($id);
//        certificate->estado_solicitud = ($request->estado_solicitud === true) ? 1 : 0 ; //cambiar condicion; campo no es binario
//        $certificate->save();
//
//        $res = new SuumaResponse(
//            200,
//            'OK',
//            '',
//            200,
//            "Actualizado con éxito",
//            $cerftificate
//        );
//
//        return response()->json($res->getResponse()[0]);
//    }

/*
    public function expireCertificates(){
        $d = new Date();
        $df = $d->format('Y/m/d');
        $recentlyExpiredCertificates = Certificate::whereDate('fecha_cad','<', $df);
        foreach($recentlyExpiredCertificates as $certificate){
            $certificate->estado_solicitud = 3;
            $certificate->save();
        }
    }
*/

//////////////////////////////////Error syntax '='
/*
    public function deleteCertificate($id){
        certificate = Certificate::find($id)->delete();
        $res = new SuumaResponse(
            200,
            'OK',
            '',
            200,
            "Certificado borrado exitosamente",
            $certificado
        );
        return response()->json($res->getResponse()[0]);
    }
*/
}
