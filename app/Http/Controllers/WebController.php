<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Career;

class WebController extends Controller
{
    public function index()
    {
        return view('web.homepage');
    }


    public function about()
    {
        return view('web.about');
    }

    public function services()
    {
        return view('web.services');
    }


    public function restaurant()
    {
        return view('web.restaurant', compact('menus'));
    }

    public function rooms()
    {

        return view('web.rooms.rooms');
    }

    public function availability($id)
    {

        return view('web.rooms.booking', compact('id'));
    }


    public function room_details($id)
    {
        return view('web.rooms.room-details', compact('id'));
    }

    public function facilities()
    {
        return view('web.facilities');
    }

    public function gallery()
    {
        return view('web.gallery');
    }

    public function team()
    {
        return view('web.team');
    }

    public function pricing()
    {
        return view('web.pricing');
    }

    public function careers()
    {
        $careers = Career::findAll();
        return view('web.careers', compact('careers'));
    }

    public function career($id)
    {
        $career = Career::findById($id);
        return view('web.career', compact('career'));
    }
    public function faq()
    {
        return view('web.faq');
    }

    public function contact()
    {
        return view('web.contact');
    }

    // others
    public function errorpage()
    {
        return view('web.errorpage');
    }
    public function comingsoon()
    {
        return view('web.comingsoon');
    }

    public function news()
    {
        return view('web.news');
    }

    public function post()
    {
        return view('web.post');
    }
}
