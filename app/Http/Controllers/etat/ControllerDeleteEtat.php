<?php

namespace App\Http\Controllers\etat;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\models\Etat;

class ControllerDeleteEtat extends Controller
{
    public function delete($id){
        $Etat=Etat::find($id);  
        $Etat->delete();  
        //return redirect('/')->with('deleted','Kamar Theresia deleted successfully');
    }
}
