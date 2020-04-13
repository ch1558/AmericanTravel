<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Services;
use App\Models\Informative;
use App\Models\Contact;
use App\Models\Continents;
use App\Models\TypeDestination;

class PageController extends Controller{
    
    public function index(){
        $contacto = Contact::orderBy('contact_update','DESC')->first();
        $principales = Services::where('type_service','1')->get();
        $segundarios = Services::where('type_service','2')->get();
        $comments = Informative::all();
        return view('index')->with(compact('principales'))->with(compact('comments'))->with(compact('segundarios'))->with(compact('contacto'));
    }

    public function services(){
        $servicios = Services::where('type_service','3')->get();
        $contacto = Contact::orderBy('contact_update','DESC')->first();
        return view('services')->with(compact('servicios'))->with(compact('contacto'));
    }

    public function contact(){
        $contacto = Contact::orderBy('contact_update','DESC')->first();
        return view('contact')->with(compact('contacto'));
    }

    public function about(){
        $contacto = Contact::orderBy('contact_update','DESC')->first();
        return view('about')->with(compact('contacto'));
    }

    public function privacity(){
        $contacto = Contact::orderBy('contact_update','DESC')->first();
        return view('privacity')->with(compact('contacto'));
    }

    public function destination(){
        $continents = Continents::all();
        $types = TypeDestination::all();
        $contacto = Contact::orderBy('contact_update','DESC')->first();
        return view('destination')->with(compact('contacto'))->with(compact('continents'))->with(compact('types'));
    }

    public function package(){
        $contacto = Contact::orderBy('contact_update','DESC')->first();
        return view('package')->with(compact('contacto'));
    }

    public function login(){
        return view('sgi.login');
    }

}
