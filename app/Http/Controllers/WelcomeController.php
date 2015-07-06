<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

/**
 * Class WelcomeController
 * @package App\Http\Controllers
 */
class WelcomeController extends Controller
{
    /**
     * @return \Illuminate\View\View
     */
    public function Index()
    {
        return view('welcome');
    }

    /**
     * @return \Illuminate\View\View
     */
    public function getContact()
    {
        return view('pages.contact');
    }

    /**
     * @return \Illuminate\View\View
     */
    public function getAbout()
    {
        $first = "Ömer";
        $last = "Öztürk";

        return view('pages.about', compact('first', 'last'));
    }
}
