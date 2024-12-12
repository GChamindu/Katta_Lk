<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MultipagesController;
use App\Http\Controllers\OnePageController;


Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/service', [HomeController::class, 'service'])->name('service');
Route::get('/service-details', [HomeController::class, 'service_details'])->name('service-details');
Route::get('/blog', [HomeController::class, 'blog'])->name('blog');
Route::get('/blog-col-1', [HomeController::class, 'blog_col_1'])->name('blog-col-1');
Route::get('/blog-col-2', [HomeController::class, 'blog_col_2'])->name('blog-col-2');
Route::get('/blog-details', [HomeController::class, 'blog_details'])->name('blog-details');
Route::get('/blog-details-2', [HomeController::class, 'blog_details_2'])->name('blog-details-2');
Route::get('/team-1', [HomeController::class, 'team_1'])->name('team-1');
Route::get('/team-2', [HomeController::class, 'team_2'])->name('team-2');
Route::get('/team-details', [HomeController::class, 'team_details'])->name('team-details');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');


// Pages
Route::prefix('pages/')->group(function () {
    Route::controller(PagesController::class)->group(function () {
        Route::get('appoinment','appoinment')->name('appoinment');
        Route::get('faq','faq')->name('faq');
        Route::get('notFound','notFound')->name('notFound');
        Route::get('pricing','pricing')->name('pricing');
        Route::get('project-mesonary-v2','project_mesonary_v2')->name('project-mesonary-v2');
        Route::get('project-mesonary','project_mesonary')->name('project-mesonary');
        Route::get('project-slider','project_slider')->name('project-slider');
        Route::get('project','project')->name('project');
        Route::get('projects-details-2','projects_details_2')->name('projects-details-2');
        Route::get('projects-details','projects_details')->name('projects-details');
        Route::get('team-2','team_2')->name('team-2');
        Route::get('team-details','team_details')->name('team-details');
        Route::get('team','team')->name('team');
    });
});

// OnePage
Route::prefix('onepage/')->group(function () {
    Route::controller(OnePageController::class)->group(function () {
        Route::get('onepage-one','onePage_one')->name('onepage-one');
        Route::get('onepage-two','onePage_two')->name('onepage-two');
        Route::get('onepage-three','onePage_three')->name('onepage-three');
        Route::get('onepage-four','onePage_four')->name('onepage-four');
        Route::get('onepage-five','onePage_five')->name('onepage-five');
        Route::get('onepage-six','onePage_six')->name('onepage-six');
        Route::get('onepage-seven','onePage_seven')->name('onepage-seven');
        Route::get('onepage-eight','onePage_eight')->name('onepage-eight');
    });
});


// Multipages
Route::prefix('multipages/')->group(function () {
    Route::controller(MultipagesController::class)->group(function () {
        Route::get('index-two','index_two')->name('index-two');
        Route::get('index-three','index_three')->name('index-three');
        Route::get('index-four','index_four')->name('index-four');
        Route::get('index-five','index_five')->name('index-five');
        Route::get('index-six','index_six')->name('index-six');
        Route::get('index-seven','index_seven')->name('index-seven');
        Route::get('index-eight','index_eight')->name('index-eight');
    });
});