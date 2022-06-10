<?php

namespace App\Http\Controllers\charge;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\models\Charge;

class ControllerDeleteCharge extends Controller
{
    public function delete($id){
        $charge=Charge::find($id);  
        $charge->delete();  
        //return redirect('/')->with('deleted','Kamar Theresia deleted successfully');
    }
}
