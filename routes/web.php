<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\AboutController;
use App\Http\Controllers\Frontend\BlogController;
use App\Http\Controllers\Frontend\BookingController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\EventController;
use App\Http\Controllers\Frontend\FaqController;
use App\Http\Controllers\Frontend\GalleryController;
use App\Http\Controllers\Frontend\ServiceController;
use App\Http\Controllers\Frontend\SpeakerController;
use App\Http\Controllers\Frontend\EventdetailsController;
use App\Http\Controllers\Frontend\BlogdetailsController;
use App\Http\Controllers\Backend\TestimonialController;


use App\Http\Controllers\Auth\AdminLoginController;
use App\Http\Controllers\Auth\AdminRegisterController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::get('login', [AdminLoginController::class, 'showLoginForm'])->name('login');
    Route::post('login', [AdminLoginController::class, 'login']);
    Route::post('logout', [AdminLoginController::class, 'logout'])->name('logout');

    Route::get('register', [AdminRegisterController::class, 'showRegistrationForm'])->name('register');
    Route::post('register', [AdminRegisterController::class, 'register']);
});

// Backend Route Started

Route::group([
    'prefix' => 'admin'
], function () {

    Route::get('/', [App\Http\Controllers\Backend\HomeController::class, 'index']);
    Route::get('/about', [App\Http\Controllers\Backend\AboutController::class, 'index']);
    Route::get('/blog', [App\Http\Controllers\Backend\BlogController::class, 'index']);
    Route::get('/event-booking', [App\Http\Controllers\Backend\EventbookingController::class, 'index']);
    Route::get('/contact', [App\Http\Controllers\Backend\ContactController::class, 'index']);
    Route::get('/event', [App\Http\Controllers\Backend\EventController::class, 'index']);
    // Route::get('/faq', [App\Http\Controllers\Backend\FaqController::class, 'index']);
    // Route::get('/gallery', [App\Http\Controllers\Backend\GalleryController::class, 'index']);
    Route::get('/service', [App\Http\Controllers\Backend\ServiceController::class, 'index']);
    Route::get('/speaker', [App\Http\Controllers\Backend\SpeakerController::class, 'index']);
    Route::get('/event-details', [App\Http\Controllers\Backend\EventdetailsController::class, 'index']);
    Route::get('/blog-details', [App\Http\Controllers\Backend\BlogdetailsController::class, 'index']);
    Route::get('/nav-item', [App\Http\Controllers\Backend\NavitemController::class, 'index']);
    Route::get('/slider', [App\Http\Controllers\Backend\SliderController::class, 'index']);
    // Route::get('/testimonial', [App\Http\Controllers\Backend\TestimonialController::class, 'index']);

    // Working route

    Route::get('/speakers', [App\Http\Controllers\Backend\SpeakerController::class, 'index'])->name('speakers.index');
    Route::post('/speakers', [App\Http\Controllers\Backend\SpeakerController::class, 'store'])->name('speakers.store');
    Route::get('/speakers/{id}/edit', [App\Http\Controllers\Backend\SpeakerController::class, 'edit'])->name('speakers.edit');
    Route::put('/speakers/{id}', [App\Http\Controllers\Backend\SpeakerController::class, 'update'])->name('speakers.update');
    Route::delete('/speakers/{id}', [App\Http\Controllers\Backend\SpeakerController::class, 'destroy'])->name('speakers.destroy');

    // faq started
    Route::get('/faqs', [App\Http\Controllers\Backend\FaqController::class, 'index'])->name('backend.faq.index');
    Route::post('/faqs', [App\Http\Controllers\Backend\FaqController::class, 'store'])->name('backend.faq.store');
    Route::get('/faqs/{faq}/edit', [App\Http\Controllers\Backend\FaqController::class, 'edit'])->name('backend.faq.edit');
    Route::put('/faqs/{faq}', [App\Http\Controllers\Backend\FaqController::class, 'update'])->name('backend.faq.update');
    Route::delete('/faqs/{faq}', [App\Http\Controllers\Backend\FaqController::class, 'destroy'])->name('backend.faq.destroy');


    Route::get('/testimonials', [TestimonialController::class, 'index'])->name('backend.testimonial.index');
    Route::get('/testimonials/create', [TestimonialController::class, 'create'])->name('backend.testimonial.create');
    Route::post('/testimonials', [TestimonialController::class, 'store'])->name('backend.testimonial.store');
    Route::get('/testimonials/{id}/edit', [TestimonialController::class, 'edit'])->name('backend.testimonial.edit');
    Route::put('/testimonials/{id}', [TestimonialController::class, 'update'])->name('backend.testimonial.update');
    Route::delete('/testimonials/{id}', [TestimonialController::class, 'destroy'])->name('backend.testimonial.destroy');


    // Gallery routes

    Route::get('/gallery', [App\Http\Controllers\Backend\GalleryController::class, 'index'])->name('backend.gallery.index');
    Route::post('/gallery', [App\Http\Controllers\Backend\GalleryController::class, 'store'])->name('backend.gallery.store');
    Route::get('/gallery/{id}/edit', [App\Http\Controllers\Backend\GalleryController::class, 'edit'])->name('backend.gallery.edit');
    Route::put('/gallery/{id}', [App\Http\Controllers\Backend\GalleryController::class, 'update'])->name('backend.gallery.update');
    Route::delete('/gallery/{id}', [App\Http\Controllers\Backend\GalleryController::class, 'destroy'])->name('backend.gallery.destroy');


    // Service routes

    Route::get('/services', [App\Http\Controllers\Backend\ServiceController::class, 'index'])->name('services.index');
    Route::post('/services', [App\Http\Controllers\Backend\ServiceController::class, 'store'])->name('services.store');
    Route::get('/services/edit/{id}', [App\Http\Controllers\Backend\ServiceController::class, 'edit'])->name('services.edit');
    Route::put('/services/update/{id}', [App\Http\Controllers\Backend\ServiceController::class, 'update'])->name('services.update');
    Route::delete('/services/delete/{id}', [App\Http\Controllers\Backend\ServiceController::class, 'destroy'])->name('services.destroy');


    // Blog routes

    Route::get('/blogs', [App\Http\Controllers\Backend\BlogController::class, 'index'])->name('blogs.index');
    Route::post('/blogs', [App\Http\Controllers\Backend\BlogController::class, 'store'])->name('blogs.store');
    Route::get('/blogs/edit/{id}', [App\Http\Controllers\Backend\BlogController::class, 'edit'])->name('blogs.edit');
    Route::put('/blogs/update/{id}', [App\Http\Controllers\Backend\BlogController::class, 'update'])->name('blogs.update');
    Route::delete('/blogs/delete/{id}', [App\Http\Controllers\Backend\BlogController::class, 'destroy'])->name('blogs.destroy');


    // Blog Details routes
    Route::get('/blog-details', [App\Http\Controllers\Backend\BlogdetailsController::class, 'index'])->name('blog-details.index');
    Route::get('/blog-details/create', [App\Http\Controllers\Backend\BlogdetailsController::class, 'create'])->name('blog-details.create');
    Route::post('/blog-details', [App\Http\Controllers\Backend\BlogdetailsController::class, 'store'])->name('blog-details.store');
    Route::get('/blog-details/{id}/edit', [App\Http\Controllers\Backend\BlogdetailsController::class, 'edit'])->name('blog-details.edit');
    Route::put('/blog-details/{id}', [App\Http\Controllers\Backend\BlogdetailsController::class, 'update'])->name('blog-details.update');
    Route::delete('/blog-details/{id}', [App\Http\Controllers\Backend\BlogdetailsController::class, 'destroy'])->name('blog-details.destroy');


   // Event routes
    Route::get('/admin/events', [App\Http\Controllers\Backend\EventController::class, 'index'])->name('events.index');
    Route::get('/admin/events/create', [App\Http\Controllers\Backend\EventController::class, 'create'])->name('events.create');
    Route::post('/admin/events', [App\Http\Controllers\Backend\EventController::class, 'store'])->name('events.store');
    Route::get('/admin/events/{id}/edit', [App\Http\Controllers\Backend\EventController::class, 'edit'])->name('events.edit');
    Route::put('/admin/events/{id}', [App\Http\Controllers\Backend\EventController::class, 'update'])->name('events.update');
    Route::delete('/admin/events/{id}', [App\Http\Controllers\Backend\EventController::class, 'destroy'])->name('events.destroy');


    // Event Details routes
    Route::get('/admin/event-details', [App\Http\Controllers\Backend\EventdetailsController::class, 'index'])->name('event-details.index');
    Route::post('/admin/event-details', [App\Http\Controllers\Backend\EventdetailsController::class, 'store'])->name('event-details.store');
    Route::get('/admin/event-details/{id}/edit', [App\Http\Controllers\Backend\EventdetailsController::class, 'edit'])->name('event-details.edit');
    Route::put('/admin/event-details/{id}', [App\Http\Controllers\Backend\EventdetailsController::class, 'update'])->name('event-details.update');
    Route::delete('/admin/event-details/{id}', [App\Http\Controllers\Backend\EventdetailsController::class, 'destroy'])->name('event-details.destroy');



    Route::get('backend/contact', [ContactController::class, 'index'])->name('backend.contact');
    Route::post('backend/contact/submit', [ContactController::class, 'submit'])->name('backend.contact.submit');

    });


// Frontend Route Started

Route::get('/', [App\Http\Controllers\Frontend\HomeController::class, 'index']);
Route::get('/about', [App\Http\Controllers\Frontend\AboutController::class, 'index']);
Route::get('/blog', [App\Http\Controllers\Frontend\BlogController::class, 'index']);
Route::get('/booking', [App\Http\Controllers\Frontend\BookingController::class, 'index']);
Route::get('/contact', [App\Http\Controllers\Frontend\ContactController::class, 'index']);
Route::get('/event-1', [App\Http\Controllers\Frontend\EventController::class, 'index']);
Route::get('/faq', [App\Http\Controllers\Frontend\FaqController::class, 'index']);
Route::get('/gallery', [App\Http\Controllers\Frontend\GalleryController::class, 'index']);
Route::get('/service', [App\Http\Controllers\Frontend\ServiceController::class, 'index']);
Route::get('/speaker', [App\Http\Controllers\Frontend\SpeakerController::class, 'index']);
Route::get('/event-details', [App\Http\Controllers\Frontend\EventdetailsController::class, 'index']);
Route::get('/blog-details', [App\Http\Controllers\Frontend\BlogdetailsController::class, 'index']);




// Route::get('/', function () {
//     return view('welcome');
// });
