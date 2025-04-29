<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class SetLocale
{
    public function handle(Request $request, Closure $next)
    {
        $locale = $request->segment(1); // Le premier segment de l'URL (ex: /fr, /en)

        // Vérifier si la locale est valide
        if (in_array($locale, ['fr', 'en', 'ar', 'de', 'it', 'es'])) {
            App::setLocale($locale);
        }

        return $next($request);
    }
}
