<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\PartnerController;
use App\Http\Controllers\Admin\ClientController;
use App\Http\Controllers\Admin\ServiceController as AdminServiceController;
use App\Http\Controllers\Admin\FaqController as AdminFaqController;
use App\Http\Controllers\Admin\AboutController as AdminAboutController;
use App\Http\Controllers\Admin\GalleryController as AdminGalleryController;

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

Auth::routes();

//? Guest Route
Route::get('/', function(){
    return view('auth.login');
});


//? Admin Route
Route::middleware(['auth', 'verified'])->group(function () {
    // Route::group('admin')->group(function () {
        Route::get('/profile', [ProfileController::class, 'index']);
        Route::put('/profile/update/{company:id}', [ProfileController::class, 'update']);

        Route::get('/about', [AdminAboutController::class, 'index']);
        Route::put('/about/update/{about:company_id}', [AdminAboutController::class, 'update']);

        Route::get('/slider', [SliderController::class, 'index']);
        Route::get('/slider/create', [SliderController::class, 'create']);
        Route::post('/slider/store', [SliderController::class, 'store']);
        Route::get('/slider/{sliders:id}/edit', [SliderController::class, 'edit']);
        Route::put('/slider/update/{sliders:id}', [SliderController::class, 'update']);
        Route::get('/slider/destroy/{sliders:id}', [SliderController::class, 'destroy']);

        Route::get('/service', [AdminServiceController::class, 'index']);
        Route::get('/service/create', [AdminServiceController::class, 'create']);
        Route::post('/service/store', [AdminServiceController::class, 'store']);
        Route::get('/service/{services:id}/edit', [AdminServiceController::class, 'edit']);
        Route::put('/service/update/{services:id}', [AdminServiceController::class, 'update']);
        Route::get('/service/destroy/{services:id}', [AdminServiceController::class, 'destroy']);

        Route::get('/faq/syarat', [AdminFaqController::class, 'index_syarat']);
        Route::get('/faq/syarat/create', [AdminFaqController::class, 'create_syarat']);
        Route::post('/faq/syarat/store', [AdminFaqController::class, 'store_syarat']);
        Route::get('/faq/syarat/{faqs:id}/edit', [AdminFaqController::class, 'edit_syarat']);
        Route::put('/faq/syarat/update/{faqs:id}', [AdminFaqController::class, 'update_syarat']);
        Route::get('/faq/syarat/destroy/{faqs:id}', [AdminFaqController::class, 'destroy_syarat']);

        Route::get('/faq/bisnis', [AdminFaqController::class, 'index_bisnis']);
        Route::get('/faq/bisnis/create', [AdminFaqController::class, 'create_bisnis']);
        Route::post('/faq/bisnis/store', [AdminFaqController::class, 'store_bisnis']);
        Route::get('/faq/bisnis/{faqs:id}/edit', [AdminFaqController::class, 'edit_bisnis']);
        Route::put('/faq/bisnis/update/{faqs:id}', [AdminFaqController::class, 'update_bisnis']);
        Route::get('/faq/bisnis/destroy/{faqs:id}', [AdminFaqController::class, 'destroy_bisnis']);

        Route::get('/partner', [PartnerController::class, 'index']);
        Route::get('/partner/create', [PartnerController::class, 'create']);
        Route::post('/partner/store', [PartnerController::class, 'store']);
        Route::get('/partner/{partners:id}/edit', [PartnerController::class, 'edit']);
        Route::put('/partner/update/{partners:id}', [PartnerController::class, 'update']);
        Route::get('/partner/destroy/{partners:id}', [PartnerController::class, 'destroy']);

        Route::get('/client', [ClientController::class, 'index']);
        Route::get('/client/create', [ClientController::class, 'create']);
        Route::post('/client/store', [ClientController::class, 'store']);
        Route::get('/client/{clients:id}/edit', [ClientController::class, 'edit']);
        Route::put('/client/update/{clients:id}', [ClientController::class, 'update']);
        Route::get('/client/destroy/{clients:id}', [ClientController::class, 'destroy']);

        Route::get('/gallery', [AdminGalleryController::class, 'index']);
        Route::get('/gallery/create', [AdminGalleryController::class, 'create']);
        Route::post('/gallery/store', [AdminGalleryController::class, 'store']);
        Route::get('/gallery/{galleries:id}/edit', [AdminGalleryController::class, 'edit']);
        Route::put('/gallery/update/{galleries:id}', [AdminGalleryController::class, 'update']);
        Route::get('/gallery/destroy/{galleries:id}', [AdminGalleryController::class, 'destroy']);


        // Route::get('/upload', [UploadController::class, 'index']);
        // Route::post('/upload/proses', [UploadController::class, 'store']);
        // Route::get('/upload/edit/{uploads:id}', [UploadController::class, 'edit']);
        // Route::get('/upload/hapus/{uploads:id}', [UploadController::class, 'destroy']);
    // });
});


// require __DIR__ . '/auth.php';
