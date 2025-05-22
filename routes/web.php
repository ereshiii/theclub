<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\UserDashboardController;
use App\Http\Controllers\LiveTournamentsController;
use App\Http\Controllers\HighStakesTablesController;
use App\Http\Controllers\MemberBenefitsController;
use App\Http\Controllers\AboutController;


// Landing / Home
Route::get('/', [PageController::class, 'home'])->name('home');

// Static Pages
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/contact', [ContactController::class, 'show'])->name('contact');
Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');
Route::get('/gallery', [PageController::class, 'gallery'])->name('gallery');

// Auth Pages
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login');
Route::post('/logout', function () {
    auth()->logout();
    return redirect('/'); // Redirect to home or login page
})->name('logout');

Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);


Route::get('/search', [SearchController::class, 'index'])->name('search.index');
Route::get('/results', [SearchController::class, 'results'])->name('search.results');

Route::middleware('auth')->get('/dashboard', [UserDashboardController::class, 'index'])->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [UserDashboardController::class, 'index'])->name('dashboard');
});



Route::get('/member-benefits', [MemberBenefitsController::class, 'show'])->name('member.benefits');
Route::get('/live-tournaments', [LiveTournamentsController::class, 'show'])->name('live.tournaments');
Route::get('/high-stakes-tables', [HighStakesTablesController::class, 'show'])->name('high.stakes.tables');


Route::get('/about/who-we-are', [AboutController::class, 'who'])->name('about.who');
Route::get('/about/our-mission', [AboutController::class, 'mission'])->name('about.mission');
Route::get('/about/vision-values', [AboutController::class, 'vision'])->name('about.vision');


