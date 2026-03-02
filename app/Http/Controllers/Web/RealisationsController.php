<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;

class RealisationsController extends Controller
{
    public function __invoke()
    {
        return view('web.realisations.index');
    }
}
