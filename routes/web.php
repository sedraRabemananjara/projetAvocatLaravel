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
use App\Http\Controllers\calendrier\ControlleurSelectEnregistrementCourseEtAgendaParAvocat;

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

Route::get('/email', function () {
    return view('email');
});

Route::get('/course', function () {
    return view('formulaireInsertionCourse');
});







//enregistrements
Route::get('/voirLesEnregistrement',[ControllerListerEnregistrement::class, 'getAllEnregistrements' ]);

Route::post('/insererEnregistrement',[ControllerInsertEnregistrement::class, 'insert' ])->name('insertionEnregistrements');

Route::post('/supprimerEnregistrement/{id}',[ControllerDeleteEnregistrement::class, 'delete' ])->name('supprimerEnregistrements');

Route::get('/findById/{id}',[ControllerUpdateEnregistrement::class, 'findById' ])->name('findById');

Route::post('/modifierEnregistrement/{id}',[ControllerUpdateEnregistrement::class, 'update' ])->name('modifierEnregistrement');



// courses
Route::get('/voirLesCourses',[ControllerListerCourse::class, 'getAllCourses' ]);

Route::post('/insererCourse',[ControllerInsertCourse::class, 'insert' ])->name('insertionCourses');

Route::post('/course/{id}',[ControllerDeleteCourse::class, 'delete' ])->name('delete');

Route::get('/course/{id}',[ControllerUpdateCourse::class, 'edit' ])->name('edit');

Route::post('/course/update/{id}',[ControllerUpdateCourse::class, 'update' ])->name('update');


//calendrier
Route::get('/calendrier/{id}',[ControlleurSelectEnregistrementCourseEtAgendaParAvocat::class, 'getEnregistrementsAndCoursesAndAgendaByAvocat' ])->name('edit');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

