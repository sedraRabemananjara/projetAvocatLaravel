<?php

namespace App\Http\Controllers\enregistrement;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\models\Enregistrement;

class ControllerUpdateEnregistrement extends Controller
{
    
    public function findById($id){
        $enregistrement= Enregistrement::find($id);  
        return view('modifierEnregistrement', compact('enregistrement'));  
    }
   
    public function update(Request $request, $id)  
    {  
        //    
        $enregistrement = enregistrement::find();  
         
        $enregistrement->pour=$request->get('pour');
        $enregistrement->contre=$request->get('contre');
        $enregistrement->juridiction=$request->get('juridiction');
        $enregistrement->numerodossier=$request->get('numerodossier');
        $enregistrement->addresse=$request->get('addresse');
        $enregistrement->contact=$request->get('contact');
        $enregistrement->email=$request->get('email');
        
        $enregistrement->save();  
        return view('pageLister',['listeEnregistrements'=> Enregistrement::all()]);
    }  
}
