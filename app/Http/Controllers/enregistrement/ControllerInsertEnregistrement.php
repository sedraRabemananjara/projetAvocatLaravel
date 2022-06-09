<?php

namespace App\Http\Controllers\enregistrement;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\models\Enregistrement;

class ControllerInsertEnregistrement extends Controller
{
    public function insert(Request $request)
    {
        $enregistrement = new enregistrement();
        $enregistrement->pour=$request->input('pour');
        $enregistrement->contre=$request->input('contre');
        $enregistrement->juridiction=$request->input('juridiction');
        $enregistrement->numerodossier=$request->input('numerodossier');
        $enregistrement->addresse=$request->input('addresse');
        $enregistrement->contact=$request->input('contact');
        $enregistrement->email=$request->input('email');

        $enregistrement->save();
        
        
    }
}
