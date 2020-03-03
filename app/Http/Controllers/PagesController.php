<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormMail;
use App\Realisation;
use Illuminate\Support\Facades\Mail;

class PagesController extends Controller
{
    public function homepage() {
        return view('homepage');
    }


    public function aboutpage() {
        return view('aboutpage');
    }


    public function teampage() {
        return view('teampage');
    }


    public function servicespage() {
        return view('servicespage');
    }



    public function portfoliopage() {
        $realisations = Realisation::where('type','portfolio')->get();
        return view('portfoliopage', compact('realisations'));
    }

    public function realisationpage($slug) {
        $realisation = Realisation::where('slug',$slug)->first();
        return view('portfoliopage', compact('realisation'));
    }


    public function internalworkspage() {
        $realisations = Realisation::where('type','internes')->get();
        return view('internalworkspage', compact('realisations'));
    }

    public function contactpage() {
        return view('contactpage');
    }

    public function dolibarrpage() {
        return view('dolibarr');
    }

    public function sendmail() {
        $data = request()->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|numeric',
            'message' => 'required|min:3',
        ]);
        $mail = new ContactFormMail($data);
        $mail->subject('Demande de contact Thundr');
        $mail->from('contact@thundr.fr','Contact Thundr');
        Mail::to(env('MAIL_THUNDR'))->send($mail);
        return redirect()->route('contactpage')->with('success','E-mail Envoyé avec succès');
    }
}
