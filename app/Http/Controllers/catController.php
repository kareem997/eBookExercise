<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class catController extends Controller
{
    public function about () {
      return view('about');
      }
    public function team () {
      return view('team');
    }
    public function services () {
        $services = array(
          array('name'=>'Duty and care','ISBN'=>'9781787395596','category' =>'Non Fiction','pages'=>'352'),
          array('name'=>'Writers and lovers','ISBN'=>'9781529033137','category' =>'Romance','pages'=>'336'),
          array('name'=>'All the stars and teeth','ISBN'=>'9781250762801','category' =>'FANTASY SCIENCE FICTION','pages'=>'304'),
          array('name'=>'OPERATION STEALTH 4 OPERATION JANUS','ISBN'=>'9781912049783','category' =>'CONTEMPORARY','pages'=>'372'),
          );
        return view('service', compact('services'));
        }
}
