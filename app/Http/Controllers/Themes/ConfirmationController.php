<?php

namespace App\Http\Controllers\Themes;

use App\Http\Controllers\Controller;
use App\Services\ConfirmationService;
use App\Services\InvitationService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log;

class ConfirmationController extends Controller{
    public function store(InvitationService $invitation,ConfirmationService $confirmation, Request $request, int $id){
        try {
            $invitation = $invitation->getDetailInvitation($id);

            if ($invitation->isEmpty()) {
                return response()->json(['success'=>false, 'message'=>'No se pudo registrar su confirmacion..']);
            }

            $path = resource_path($invitation[0]['folder']);

            if (!File::isDirectory($path)) {
                return response()->json(['success'=>false, 'message'=>'No se pudo registrar su confirmacion.']);
            }

            $configFile = $path . '/config.php';

            if (!File::exists($configFile)) {
                 return response()->json(['success'=>false, 'message'=>'No se pudo registrar su confirmacion.']);
            }

            $config = require $configFile;

            $data = [];
            $footerForm = $config['footer_form'] ?? [];
            if (is_array($footerForm) && !empty($footerForm)) {
                foreach($footerForm as $key=>$value){
                    if ($request->has($key)) {
                        $data['data'][$key]=$request->input($key);
                    }
                }
            }

            if (empty($data)) {
                return response()->json(['success' => false,'message' => 'No se recibieron datos para registrar.']);
            }
            
            
            $data['invitation_id']=$id;
            $data['data'] = json_encode($data['data']);

            $saveConfirmation = $confirmation->saveConfirmation($data);

            if(!$saveConfirmation){
                return response()->json(['success'=>false, 'message'=>'No se pudo registrar su confirmacion.']);
            }

            return response()->json(['success'=>true, 'message'=>'Se registro su confirmacion exitosamente.']);

        } catch (\Throwable $th) {
            Log::error($th);
            return response()->json(['success'=>false, 'message'=>'No se pudo registrar su confirmacion.']);
        }
        
    }
}