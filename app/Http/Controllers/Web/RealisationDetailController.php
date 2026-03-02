<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;

class RealisationDetailController extends Controller
{
    public function __invoke(string $slug)
    {
        $realisations = config('realisations-content');

        if (!isset($realisations[$slug])) {
            abort(404);
        }

        $realisation = $realisations[$slug];

        return view('web.realisation-detail.index', [
            'realisation' => $realisation,
            'slug' => $slug,
            'otherRealisations' => collect($realisations)
                ->except($slug)
                ->take(2)
                ->all(),
        ]);
    }
}
