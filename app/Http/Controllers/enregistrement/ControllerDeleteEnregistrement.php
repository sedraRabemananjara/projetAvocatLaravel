<?php

namespace App\Http\Controllers\enregistrement;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\models\Enregistrement;

class ControllerDeleteEnregistrement extends Controller
{
    public function delete($id){
        $enregistrement=Enregistrement::find($id);  
        $enregistrement->delete();  
        //return redirect()->route('enregistrements.index');
    }
}
