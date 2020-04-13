<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Services;
use App\Models\Informative;
use App\Models\Contact;
use App\Models\Continents;
use App\Models\TypeDestination;

class DashboardController extends Controller{
    
    
    public function index(){
        return view('sgi.dashboard');
    }

    public function page(){
        $principales = Services::where('type_service','1')->get();
        $segundarios = Services::where('type_service','2')->get();
        $contacto = Contact::orderBy('contact_update','DESC')->first();
        $comments = Informative::all();
        return view('sgi.page')->with(compact('principales'))->with(compact('comments'))
                ->with(compact('segundarios'))->with(compact('contacto'));
    }

    public function account(){
        return view('sgi.account');
    }

    public function destination(){
        return view('sgi.destination');
    }

    public function employeer(){
        return view('sgi.employeer');
    }

    public function mailing(){
        return view('sgi.mailing');
    }

    public function package(){
        return view('sgi.package');
    }

    public function redirect(){
        return redirect()->route('dashboard');
    }


}
