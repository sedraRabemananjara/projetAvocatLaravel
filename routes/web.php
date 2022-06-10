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



