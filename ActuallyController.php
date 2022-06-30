<?php

namespace App\Http\Controllers\Administracion;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class ActuallyController extends Controller
{
//ACTUALIZACIONES DE GIZ
//CAMBIO DE PASSWORD
  public function cambioPassword(Request $request)
  {
     $data = $request->user();
     $input = $request->all();
     $input['password']=Hash::make($input['password']);
     $data->password = $input['password'];
     $data->save();
     return response()->json($data,200);
  }
//FIN DE ACTUALIZACIONES
}
