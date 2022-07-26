<?php

namespace App\Http\Controllers\Mail;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Mail\TestMail;
use Illuminate\Support\Facades\Mail;
use App\Models\Agenda;
use App\Models\Course;
use App\Models\ViewSelectEnregistrementCourseEtAgendaParAvocat;
use Illuminate\Support\Facades\DB;

class ControllerMail extends Controller
{
    public function sendMail($id, $idE)
    {
        $enregistrement = ViewSelectEnregistrementCourseEtAgendaParAvocat::select("*")
            ->where('user_id', $id)
            ->where('id_enregistrement', $idE)
            ->LIMIT(2)
            ->get();

        ///$emailclient= $enregistrement->email_client; 

        $user = ['email_client' => $enregistrement[0]->email_client, 'client' => $enregistrement[1]->client, 'procedure' => $enregistrement[0]->procedure, 'espace_conclusion' => $enregistrement[1]->espace_conclusion, 'motif' => $enregistrement[1]->motif, 'date_agenda' => $enregistrement[0]->date_agenda, 'salle' => $enregistrement[0]->salle, 'nouveaumotif' => $enregistrement[0]->motif];
        Mail::to($user['email_client'])->send(new TestMail($user));
        //return view('emails.test');
        // ->where('id_enregistrement', $idE)

    }
}
