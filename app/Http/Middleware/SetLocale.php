<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class SetLocale
{
    public function handle(Request $request, Closure $next)
    {
        //$locale = $request->segment(1); // Le premier segment de l'URL (ex: /fr, /en)
        $locale = session('locale');
        // Vérifier si la locale est valide
        if ($locale && in_array($locale, ['fr', 'en'])) {
            App::setLocale($locale);
        }
        else {
            App::setLocale(config('app.locale'));
        }
        return $next($request);
    }
}
