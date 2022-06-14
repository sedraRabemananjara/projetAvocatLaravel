<?php

namespace App\Http\Controllers\avocat;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\models\Avocat;

class ControllerDeleteAvocat extends Controller
{
    public function delete($id){
        $avocat=Avocat::find($id);  
        $avocat->delete();  
        //return redirect('/')->with('deleted','Kamar Theresia deleted successfully');
    }
}
