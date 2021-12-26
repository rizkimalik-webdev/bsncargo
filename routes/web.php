<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\Admin\SliderController as AdminSliderController;
use App\Http\Controllers\Admin\ProfileController as AdminProfileController;
use App\Http\Controllers\Admin\PartnerController as AdminPartnerController;
use App\Http\Controllers\Admin\ClientController as AdminClientController;
use App\Http\Controllers\Admin\ServiceController as AdminServiceController;
use App\Http\Controllers\Admin\FaqController as AdminFaqController;
use App\Http\Controllers\Admin\AboutController as AdminAboutController;
use App\Http\Controllers\Admin\GalleryController as AdminGalleryController;
use App\Http\Controllers\Admin\ShipmentController as AdminShipmentController;
use App\Http\Controllers\Admin\TrackingController as AdminTrackingController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Auth::routes();

//? Guest Route
Route::get('/', [HomeController::class, 'index']);
Route::get('/home', [HomeController::class, 'index']);
Route::get('/about', [AboutController::class, 'index']);
Route::get('/contact', [ContactController::class, 'index']);
Route::get('/service', [ServiceController::class, 'index']);
Route::get('/team', [TeamController::class, 'index']);
Route::get('/gallery', [GalleryController::class, 'index']);
Route::get('/faq', [FaqController::class, 'index']);


//? Admin Route
Route::get('/admin_login', function(){
    return view('auth.login');
});

Route::middleware(['auth', 'verified'])->group(function () {
    // Route::group('admin')->group(function () {
        Route::get('/admin_profile', [AdminProfileController::class, 'index']);
        Route::put('/admin_profile/update/{company:id}', [AdminProfileController::class, 'update']);

        Route::get('/admin_about', [AdminAboutController::class, 'index']);
        Route::put('/admin_about/update/{about:company_id}', [AdminAboutController::class, 'update']);

        Route::get('/admin_slider', [AdminSliderController::class, 'index']);
        Route::get('/admin_slider/create', [AdminSliderController::class, 'create']);
        Route::post('/admin_slider/store', [AdminSliderController::class, 'store']);
        Route::get('/admin_slider/{sliders:id}/edit', [AdminSliderController::class, 'edit']);
        Route::put('/admin_slider/update/{sliders:id}', [AdminSliderController::class, 'update']);
        Route::get('/admin_slider/destroy/{sliders:id}', [AdminSliderController::class, 'destroy']);

        Route::get('/admin_service', [AdminServiceController::class, 'index']);
        Route::get('/admin_service/create', [AdminServiceController::class, 'create']);
        Route::post('/admin_service/store', [AdminServiceController::class, 'store']);
        Route::get('/admin_service/{services:id}/edit', [AdminServiceController::class, 'edit']);
        Route::put('/admin_service/update/{services:id}', [AdminServiceController::class, 'update']);
        Route::get('/admin_service/destroy/{services:id}', [AdminServiceController::class, 'destroy']);

        Route::get('/admin_faq/syarat', [AdminFaqController::class, 'index_syarat']);
        Route::get('/admin_faq/syarat/create', [AdminFaqController::class, 'create_syarat']);
        Route::post('/admin_faq/syarat/store', [AdminFaqController::class, 'store_syarat']);
        Route::get('/admin_faq/syarat/{faqs:id}/edit', [AdminFaqController::class, 'edit_syarat']);
        Route::put('/admin_faq/syarat/update/{faqs:id}', [AdminFaqController::class, 'update_syarat']);
        Route::get('/admin_faq/syarat/destroy/{faqs:id}', [AdminFaqController::class, 'destroy_syarat']);

        Route::get('/admin_faq/bisnis', [AdminFaqController::class, 'index_bisnis']);
        Route::get('/admin_faq/bisnis/create', [AdminFaqController::class, 'create_bisnis']);
        Route::post('/admin_faq/bisnis/store', [AdminFaqController::class, 'store_bisnis']);
        Route::get('/admin_faq/bisnis/{faqs:id}/edit', [AdminFaqController::class, 'edit_bisnis']);
        Route::put('/admin_faq/bisnis/update/{faqs:id}', [AdminFaqController::class, 'update_bisnis']);
        Route::get('/admin_faq/bisnis/destroy/{faqs:id}', [AdminFaqController::class, 'destroy_bisnis']);

        Route::get('/admin_partner', [AdminPartnerController::class, 'index']);
        Route::get('/admin_partner/create', [AdminPartnerController::class, 'create']);
        Route::post('/admin_partner/store', [AdminPartnerController::class, 'store']);
        Route::get('/admin_partner/{partners:id}/edit', [AdminPartnerController::class, 'edit']);
        Route::put('/admin_partner/update/{partners:id}', [AdminPartnerController::class, 'update']);
        Route::get('/admin_partner/destroy/{partners:id}', [AdminPartnerController::class, 'destroy']);

        Route::get('/admin_client', [AdminClientController::class, 'index']);
        Route::get('/admin_client/create', [AdminClientController::class, 'create']);
        Route::post('/admin_client/store', [AdminClientController::class, 'store']);
        Route::get('/admin_client/{clients:id}/edit', [AdminClientController::class, 'edit']);
        Route::put('/admin_client/update/{clients:id}', [AdminClientController::class, 'update']);
        Route::get('/admin_client/destroy/{clients:id}', [AdminClientController::class, 'destroy']);

        Route::get('/admin_gallery', [AdminGalleryController::class, 'index']);
        Route::get('/admin_gallery/create', [AdminGalleryController::class, 'create']);
        Route::post('/admin_gallery/store', [AdminGalleryController::class, 'store']);
        Route::get('/admin_gallery/{galleries:id}/edit', [AdminGalleryController::class, 'edit']);
        Route::put('/admin_gallery/update/{galleries:id}', [AdminGalleryController::class, 'update']);
        Route::get('/admin_gallery/destroy/{galleries:id}', [AdminGalleryController::class, 'destroy']);

        Route::get('/admin_shipment', [AdminShipmentController::class, 'index']);
        Route::get('/admin_shipment/create', [AdminShipmentController::class, 'create']);
        Route::get('/admin_shipment/{shipments:no_invoice}', [AdminShipmentController::class, 'show']);
        Route::post('/admin_shipment/store', [AdminShipmentController::class, 'store']);
        Route::get('/admin_shipment/destroy/{shipments:no_invoice}', [AdminShipmentController::class, 'destroy']);
        
        Route::get('/admin_tracking', [AdminTrackingController::class, 'index']);
        Route::get('/admin_tracking/{shipments:no_invoice}', [AdminTrackingController::class, 'tracking']);
        Route::post('/admin_tracking/search', [AdminTrackingController::class, 'search']);
        Route::post('/admin_tracking/store', [AdminTrackingController::class, 'store']);


        // Route::get('/upload', [UploadController::class, 'index']);
        // Route::post('/upload/proses', [UploadController::class, 'store']);
        // Route::get('/upload/edit/{uploads:id}', [UploadController::class, 'edit']);
        // Route::get('/upload/hapus/{uploads:id}', [UploadController::class, 'destroy']);
    // });
});
