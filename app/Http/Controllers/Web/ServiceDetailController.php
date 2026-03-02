<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;

class ServiceDetailController extends Controller
{
    public function __invoke(string $slug)
    {
        $services = config('services-content');

        if (!isset($services[$slug])) {
            abort(404);
        }

        $service = $services[$slug];

        return view('web.service-detail.index', [
            'service' => $service,
            'slug' => $slug,
            'otherServices' => collect($services)
                ->except($slug)
                ->take(2)
                ->all(),
        ]);
    }
}
