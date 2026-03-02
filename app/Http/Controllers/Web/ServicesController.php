<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;

class ServicesController extends Controller
{
    public function __invoke()
    {
        return view('web.services.index');
    }
}
