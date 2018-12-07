<?php
declare(strict_types=1);
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function indexAction()
    {
        return view('misc.landing_page');
    }

    public function aboutAction()
    {
        return view('misc.about');
    }
}
