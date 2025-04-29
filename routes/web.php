<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CandidatureController;
use App\Http\Controllers\FormationController;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\RejoignezNousController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\App;
use App\Http\Controllers\ContactController;

// Routes principales
Route::get('/', function () {
    return view('home');
});

Route::get('/nos-services', function () {
    return view('services');
});

Route::get('/a-propos', function () {
    return view('about');
});

Route::get('/actualites', function () {
    return view('news');
});

Route::get('/carrieres', function () {
    return view('jobs');
});

// Route pour "Rejoignez-nous" et le formulaire de candidature
Route::get('/rejoignez-nous', [RejoignezNousController::class, 'index'])->name('rejoignez.nous');
Route::post('/postuler', [CandidatureController::class, 'store'])->name('postuler.submit');

// Route pour le formulaire de candidature
Route::get('/candidature', [CandidatureController::class, 'create'])->name('candidature.create');
Route::post('/candidature', [CandidatureController::class, 'store'])->name('candidature.store');

// Routes pour Formation
Route::get('/formation/{candidature}', [FormationController::class, 'showForm'])->name('postuler.formation'); // تعديل هنا
Route::post('/formation/store/{candidature}', [FormationController::class, 'store'])->name('formation.store');

// Routes pour Experience
Route::get('/experiences/{candidature_id}', [ExperienceController::class, 'showForm'])->name('postuler.experience'); // تعديل هنا
Route::post('/experiences', [ExperienceController::class, 'store'])->name('experiences.store');

// Route pour la page de succès
Route::get('/merci', function () {
    return view('merci');
})->name('candidature.success');

// Routes pour changer la langue de l'application
Route::get('lang/{locale}', function ($locale) {
    $supportedLocales = ['fr', 'en', 'ar', 'de', 'it', 'es'];
    
    if (in_array($locale, $supportedLocales)) {
        App::setLocale($locale);
        session(['locale' => $locale]); // Enregistrer la langue dans la session pour la maintenir durant la session utilisateur
    }

    return redirect()->back(); // Retourner à la même page après avoir changé la langue
});

// Groupes de routes avec préfixe de langue
Route::group(['prefix' => '{locale}', 'where' => ['locale' => '[a-zA-Z]{2}']], function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');
    // Ajouter d'autres routes ici qui utilisent ce préfixe de langue
    Route::get('/nos-services', function () {
        return view('services');
    });

    Route::get('/a-propos', function () {
        return view('about');
    });

    Route::get('/actualites', function () {
        return view('news');
    });

    Route::get('/carrieres', function () {
        return view('jobs');
    });

    Route::get('/contact', function () {
        return view('contact');
    });
});

// Routes supplémentaires
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
// Route pour la page Formation après la candidature
Route::get('/formation/{candidature}', [FormationController::class, 'create'])->name('postuler.formation');
Route::get('/apply/{id}', [RejoignezNousController::class, 'showForm'])->name('apply');




Route::post('/postuler/formation/{candidature}', [CandidatureController::class, 'store'])->name('postuler.formation');
