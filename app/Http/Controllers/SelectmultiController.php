<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Selectmulti;

class SelectmultiController extends Controller
{
    public function multi (){
        return view('multi');
    }

    public function multicreate (Request $mi){

        $mi->validate([
            'ielts' => 'required',
            'pte' => 'required',
            'ielts_reading' => 'required',
            'ielts_speaking' => 'required',
            'ielts_writing' => 'required',
            'ielts_listening' => 'required',
            'ielts_overall_score' => 'required',
            'pte_reading' => 'required',
            'pte_speaking' => 'required',
            'pte_writing' => 'required',
            'pte_listening' => 'required',
            'pte_overall_score' => 'required',
        ]);


        $miveriable = new Selectmulti;
        $miveriable->ielts = $mi->ielts;
        $miveriable->pte = $mi->pte;
        $miveriable->ielts_reading = $mi->ielts_reading;
        $miveriable->ielts_speaking = $mi->ielts_speaking;
        $miveriable->ielts_writing = $mi->ielts_writing;
        $miveriable->ielts_listening = $mi->ielts_listening;
        $miveriable->ielts_overall_score = $mi->ielts_overall_score;
        $miveriable->pte_reading = $mi->pte_reading;
        $miveriable->pte_speaking = $mi->pte_speaking;
        $miveriable->pte_writing = $mi->pte_writing;
        $miveriable->pte_listening = $mi->pte_listening;
        $miveriable->pte_overall_score = $mi->pte_overall_score;
        $miveriable->save();
        return redirect()->route('multi')->with('status', 'Application submitted successfully!');
    }
}
