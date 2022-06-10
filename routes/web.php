<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ConnexionController;
use App\Http\Controllers\EnregistrementController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\enregistrement\ControllerInsertEnregistrement;
use App\Http\Controllers\enregistrement\ControllerDeleteEnregistrement;
use App\Http\Controllers\enregistrement\ControllerUpdateEnregistrement;
use App\Http\Controllers\enregistrement\ControllerListerEnregistrement;
use App\Http\Controllers\course\ControllerInsertCourse;
use App\Http\Controllers\course\ControllerDeleteCourse;
use App\Http\Controllers\course\ControllerUpdateCourse;
use App\Http\Controllers\course\ControllerListerCourse;
use App\Http\Controllers\agenda\ControllerInsertAgenda;
use App\Http\Controllers\agenda\ControllerDeleteAgenda;
use App\Http\Controllers\agenda\ControllerUpdateAgenda;
use App\Http\Controllers\agenda\ControllerListerAgenda;
use App\Http\Controllers\avocat\ControllerInsertAvocat;
use App\Http\Controllers\avocat\ControllerDeleteAvocat;
use App\Http\Controllers\avocat\ControllerUpdateAvocat;
use App\Http\Controllers\avocat\ControllerListerAvocat;
use App\Http\Controllers\charge\ControllerInsertCharge;
use App\Http\Controllers\charge\ControllerDeleteCharge;
use App\Http\Controllers\charge\ControllerUpdateCharge;
use App\Http\Controllers\charge\ControllerListerCharge;
use App\Http\Controllers\etat\ControllerInsertEtat;
use App\Http\Controllers\etat\ControllerDeleteEtat;
use App\Http\Controllers\etat\ControllerUpdateEtat;
use App\Http\Controllers\etat\ControllerListerEtat;
use App\Http\Controllers\frequencePaiement\ControllerInsertFrequencePaiement;
use App\Http\Controllers\frequencePaiement\ControllerDeleteFrequencePaiement;
use App\Http\Controllers\frequencePaiement\ControllerUpdateFrequencePaiement;
use App\Http\Controllers\frequencePaiement\ControllerListerFrequencePaiement;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/course', function () {
    return view('formulaireInsertionCourse');
});







//enregistrements
Route::get('/voirLesEnregistrement',[ControllerListerEnregistrement::class, 'getAllEnregistrements' ]);

Route::post('/insererEnregistrement',[ControllerInsertEnregistrement::class, 'insert' ])->name('insertionEnregistrements');

Route::post('/supprimerEnregistrement/{id}',[ControllerDeleteEnregistrement::class, 'delete' ])->name('supprimerEnregistrements');

Route::post('/modifierEnregistrement/{id}',[ControllerUpdateEnregistrement::class, 'update' ])->name('modifierEnregistrement');



// courses
Route::get('/voirLesCourses',[ControllerListerCourse::class, 'getAllCourses' ]);

Route::post('/insererCourse',[ControllerInsertCourse::class, 'insert' ])->name('insertionCourses');

Route::post('/supprimerCourse/{idCourse}',[ControllerDeleteCourse::class, 'delete' ])->name('supprimerCourses');

Route::post('/modifierCourse/{idCourse}',[ControllerUpdateCourse::class, 'update' ])->name('modifierCourses');

// agenda

Route::get('/voirLesAgenda',[ControllerListerAgenda::class, 'getAllAgenda' ]);

Route::post('/insererAgenda',[ControllerInsertAgenda::class, 'insert' ])->name('insertionAgendas');

Route::post('/supprimerAgenda/{idAgenda}',[ControllerDeleteAgenda::class, 'delete' ])->name('supprimerAgendas');

Route::post('/modifierAgenda/{idAgenda}',[ControllerUpdateAgenda::class, 'update' ])->name('modifierAgendas');


// avocat


Route::get('/voirLesAvocat',[ControllerListerAvocat::class, 'getAllAvocats' ]);

Route::post('/insererAvocat',[ControllerInsertAvocat::class, 'insert' ])->name('insertionAvocat');

Route::post('/supprimerAvocat/{idAvocat}',[ControllerDeleteAvocat::class, 'delete' ])->name('supprimerAvocat');

Route::post('/modifierAvocat/{idAvocat}',[ControllerUpdateAvocat::class, 'update' ])->name('modifierAvocat');


//charge
Route::get('/voirLesCharge',[ControllerListerCharge::class, 'getAllCharges' ]);

Route::post('/insererCharge',[ControllerInsertCharge::class, 'insert' ])->name('insertionCharge');

Route::post('/supprimerCharge/{idCharge}',[ControllerDeleteCharge::class, 'delete' ])->name('supprimerCharge');

Route::post('/modifierCharge/{idCharge}',[ControllerUpdateCharge::class, 'update' ])->name('modifierCharge');


//etat
Route::get('/voirLesEtat',[ControllerListerEtat::class, 'getAllEtats' ]);

Route::post('/insererEtat',[ControllerInsertEtat::class, 'insert' ])->name('insertionEtat');

Route::post('/supprimerEtat/{idEtat}',[ControllerDeleteEtat::class, 'delete' ])->name('supprimerEtat');

Route::post('/modifierEtat/{idEtat}',[ControllerUpdateEtat::class, 'update' ])->name('modifierEtat');


//frequencePaiement
Route::get('/voirLesFrequencePaiement',[ControllerListerFrequencePaiement::class, 'getAllFrequencePaiements' ]);

Route::post('/insererFrequencePaiement',[ControllerInsertFrequencePaiement::class, 'insert' ])->name('insertionFrequencePaiement');

Route::post('/supprimerFrequencePaiement/{idFrequence}',[ControllerDeleteFrequencePaiement::class, 'delete' ])->name('supprimerFrequencePaiement');

Route::post('/modifierFrequencePaiement/{idFrequence}',[ControllerUpdateFrequencePaiement::class, 'update' ])->name('modifierFrequencePaiement');
