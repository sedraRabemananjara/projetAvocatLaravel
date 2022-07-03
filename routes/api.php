<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\user\UserSelectController;
use App\Http\Controllers\user\UserInscriptionController;
use App\Http\Controllers\user\UserRefusController;
use App\Http\Controllers\user\UserValiderController;
use App\Http\Controllers\user\UserInfoController;
use Laravel\Passport\Http\Controllers\AccessTokenController;

use App\Http\Controllers\enregistrement\ControllerInsertEnregistrement;
use App\Http\Controllers\enregistrement\ControllerListerEnregistrement;
use App\Http\Controllers\enregistrement\ControllerRechercheEnregistrement;
use App\Http\Controllers\enregistrement\ControllerSelectEnregistrement;
use App\Http\Controllers\enregistrement\ControllerUpdateEnregistrement;

use App\Http\Controllers\course\ControllerInsertCourse;
use App\Http\Controllers\course\ControllerDeleteCourse;
use App\Http\Controllers\course\ControllerUpdateCourse;
use App\Http\Controllers\course\ControllerListerCourse;
use App\Http\Controllers\course\ControllerSelectCourse;

use App\Http\Controllers\agenda\ControllerInsertAgenda;
use App\Http\Controllers\agenda\ControllerDeleteAgenda;
use App\Http\Controllers\agenda\ControllerUpdateAgenda;
use App\Http\Controllers\agenda\ControllerListerAgenda;
use App\Http\Controllers\agenda\ControllerSelectAgenda;

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

use App\Http\Controllers\calendrier\ControlleurSelectEnregistrementCourseEtAgendaParAvocat;

use App\Http\Controllers\frequencePaiement\ControllerInsertFrequencePaiement;
use App\Http\Controllers\frequencePaiement\ControllerDeleteFrequencePaiement;
use App\Http\Controllers\frequencePaiement\ControllerUpdateFrequencePaiement;
use App\Http\Controllers\frequencePaiement\ControllerListerFrequencePaiement;

use App\Http\Controllers\calendrier\ControllerSelectSemaineCalendrier;

use App\Http\Controllers\client\ControllerListerDossierClient;
use App\Http\Controllers\client\ControllerDetailDossierClient;

use App\Http\Controllers\juridiction\ControllerSelectJuridiction;
use App\Http\Controllers\nature\ControllerSelectNature;
use App\Http\Controllers\sectionJuridiction\ControllerSelectSectionJuridiction;
use App\Http\Controllers\typeCharge\ControllerSelectTypeCharge;
use App\Http\Controllers\typeFrequencePaiementCharge\ControllerSelectTypeFrequencePaiementCharge;
use App\Http\Controllers\typeRenvoi\ControllerSelectTypeRenvoi;
use Illuminate\Support\Facades\Auth;


// authentification
Route::post('login', [AccessTokenController::class, 'issueToken'])
    ->middleware(['api-login', 'throttle']);
Route::post('inscription', [UserInscriptionController::class, 'inscription']);

Route::middleware(['web', 'auth:api'])->group(function () {

    Route::get('/valider-token', function () {
        return ['data' => true];
    });

    // user
    Route::put('user/refuser', [UserRefusController::class, 'refuser']);
    Route::put('user/valider', [UserValiderController::class, 'valider']);
    Route::get('user-except', [UserSelectController::class, 'selectAllExceptUser']);
    Route::get('user/date-verification-email/{id}', [UserSelectController::class, 'getDateVerificationEmail']);
    Route::get('user/info', [UserInfoController::class, 'getInfo']);

    // enregistrement
    Route::post('enregistrement', [ControllerInsertEnregistrement::class, 'insert']);
    Route::get('enregistrement/{page}', [ControllerListerEnregistrement::class, 'getAllEnregistrements']);
    Route::get('enregistrement/{id}', [ControllerSelectEnregistrement::class, 'getEnregistrement']);
    Route::put('enregistrement', [ControllerUpdateEnregistrement::class, 'update']);
    Route::get('rechercher-enregistrement/{information}', [ControllerRechercheEnregistrement::class, 'rechercher']);

    // courses
    Route::get('course', [ControllerListerCourse::class, 'getAllCourses']);
    Route::get('course/{id}', [ControllerSelectCourse::class, 'getCourse']);
    Route::put('course', [ControllerUpdateCourse::class, 'update']);
    Route::post('course', [ControllerInsertCourse::class, 'insert']);
    Route::delete('supprimerCourse/{idCourse}', [ControllerDeleteCourse::class, 'delete']);

    // agenda
    Route::get('agenda', [ControllerListerAgenda::class, 'getAllAgenda']);
    Route::get('agenda/{id}', [ControllerSelectAgenda::class, 'getAgenda']);
    Route::put('agenda', [ControllerUpdateAgenda::class, 'update']);
    Route::post('agenda', [ControllerInsertAgenda::class, 'insert']);
    Route::delete('supprimerAgenda/{idAgenda}', [ControllerDeleteAgenda::class, 'delete']);

    // avocat
    Route::get('/voirLesAvocat', [ControllerListerAvocat::class, 'getAllAvocats']);
    Route::post('/insererAvocat', [ControllerInsertAvocat::class, 'insert'])->name('insertionAvocat');
    Route::delete('/supprimerAvocat/{idAvocat}', [ControllerDeleteAvocat::class, 'delete'])->name('supprimerAvocat');
    Route::post('/modifierAvocat/{idAvocat}', [ControllerUpdateAvocat::class, 'update'])->name('modifierAvocat');

    //charge
    Route::get('/voirLesCharge', [ControllerListerCharge::class, 'getAllCharges']);
    Route::post('/insererCharge', [ControllerInsertCharge::class, 'insert'])->name('insertionCharge');
    Route::delete('/supprimerCharge/{idCharge}', [ControllerDeleteCharge::class, 'delete'])->name('supprimerCharge');
    Route::post('/modifierCharge/{idCharge}', [ControllerUpdateCharge::class, 'update'])->name('modifierCharge');

    //etat
    Route::get('/voirLesEtat', [ControllerListerEtat::class, 'getAllEtats']);
    Route::post('/insererEtat', [ControllerInsertEtat::class, 'insert'])->name('insertionEtat');
    Route::delete('/supprimerEtat/{idEtat}', [ControllerDeleteEtat::class, 'delete'])->name('supprimerEtat');
    Route::post('/modifierEtat/{idEtat}', [ControllerUpdateEtat::class, 'update'])->name('modifierEtat');

    //calendrier
    Route::get('/calendrier/{id}', [ControlleurSelectEnregistrementCourseEtAgendaParAvocat::class, 'getEnregistrementsAndCoursesAndAgendaByAvocat']);


    //frequencePaiement
    Route::get('/voirLesFrequencePaiement', [ControllerListerFrequencePaiement::class, 'getAllFrequencePaiements']);
    Route::post('/insererFrequencePaiement', [ControllerInsertFrequencePaiement::class, 'insert'])->name('insertionFrequencePaiement');
    Route::delete('/supprimerFrequencePaiement/{idFrequence}', [ControllerDeleteFrequencePaiement::class, 'delete'])->name('supprimerFrequencePaiement');
    Route::post('/modifierFrequencePaiement/{idFrequence}', [ControllerUpdateFrequencePaiement::class, 'update'])->name('modifierFrequencePaiement');

    //client
    Route::get('/client/dossier', [ControllerListerDossierClient::class, 'getAll']);
    Route::get('/client/dossier/detail/{id}', [ControllerDetailDossierClient::class, 'get']);
});



// Juridiction
Route::get('juridiction', [ControllerSelectJuridiction::class, 'selectAll']);

// Nature
Route::get('nature', [ControllerSelectNature::class, 'selectAll']);

// Selection juridiction
Route::get('section-juridiction', [ControllerSelectSectionJuridiction::class, 'selectAll']);

// Type charge
Route::get('type-charge', [ControllerSelectTypeCharge::class, 'selectAll']);

// Type frequence paiement charge
Route::get('type-frequence-paiement-charge', [ControllerSelectTypeFrequencePaiementCharge::class, 'selectAll']);

// Type frequence paiement charge
Route::get('type-renvoi', [ControllerSelectTypeRenvoi::class, 'selectAll']);
