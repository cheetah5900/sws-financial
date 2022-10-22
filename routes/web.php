<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DisburseController;
use App\Http\Controllers\ProviderController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\VendorController;
use App\Http\Controllers\AdvanceController;
use App\Http\Controllers\AdvanceUsedController;
use App\Http\Controllers\HealthController;
use App\Http\Controllers\LinenotifyController;
use App\Http\Controllers\PurchaseOrderController;

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
// Mobile Detail
Route::get('/md/{id}', [DisburseController::class, 'mobiledetail']);
Route::get('/test', [DisburseController::class, 'test']);
//chkstatus
Route::get('/health', function () {});
Route::get('/health', [HealthController::class, 'index']);
Route::get('/health/connection', [HealthController::class, 'chkdatabase']);

// TODO เช็คว่าล็อคอินหรือยัง ก่อนเข้าหน้าต่างๆ โดยการจัดเป็นกรุ๊ป
Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    // Provider
Route::get('/provider', [ProviderController::class, 'index'])->name('provider');
Route::post('/provider/add', [ProviderController::class, 'add']);
Route::get('/provider/edit/{id}', [ProviderController::class, 'edit']);
Route::post('/provider/update/{id}', [ProviderController::class, 'update']);
    // Purchase Order
    Route::get('/po', [PurchaseOrderController::class, 'index'])->name('po');
    Route::post('/po/add', [PurchaseOrderController::class, 'add']);
    Route::get('/po/edit/{id}', [PurchaseOrderController::class, 'edit']);
    Route::post('/po/update/{id}', [PurchaseOrderController::class, 'update']);
    Route::post('/po/list/add', [PurchaseOrderController::class, 'addpolist']);
    Route::post('/po/file/add', [PurchaseOrderController::class, 'addpofile']);
    Route::get('/po/list/edit/{id}', [PurchaseOrderController::class, 'editpolist']);
    Route::get('/po/file/edit/{id}', [PurchaseOrderController::class, 'editpofile']);
    Route::post('/po/list/update/{id}', [PurchaseOrderController::class, 'updatepolist']);
    Route::post('/po/file/update/{id}', [PurchaseOrderController::class, 'updatepofile']);
    Route::get('/po/detail/{id}', [PurchaseOrderController::class, 'detail'])->name('podetail');
    // Disburse
    Route::get('/', [DisburseController::class, 'index'])->name('disburse');
    Route::post('/disburse/add', [DisburseController::class, 'add']);
    Route::get('/disburse/edit/{id}', [DisburseController::class, 'edit']);
    Route::post('/disburse/update/{id}', [DisburseController::class, 'update']);
    Route::get('/disburse/delete/{id}', [DisburseController::class, 'delete']);
        // Disburse Detail
    Route::get('/disburse/detail/{id}', [DisburseController::class, 'detail']);
    Route::get('/disburse/detail/edit/{id}/{disburseId}', [DisburseController::class, 'detail_edit']);
    Route::post('/disburse/detail/update/{id}', [DisburseController::class, 'detail_update']);
    Route::get('/disburse/detail/delete/{id}/{disburseId}', [DisburseController::class, 'detail_delete']);
    // Payment
    Route::post('/disburse/payment/add', [PaymentController::class, 'paymentadd']);
    // Advance
    Route::post('/advance/add', [AdvanceController::class, 'add']);
    Route::get('/advance/avedit/{id}', [AdvanceController::class, 'avedit']);
    Route::get('/advance/icedit/{id}', [AdvanceController::class, 'icedit']);
    Route::get('/advance/avdetail/{id}', [AdvanceController::class, 'avdetail']);
    Route::get('/advance/icdetail/{id}', [AdvanceController::class, 'icdetail']);
    Route::get('/advance/avuse/{id}', [AdvanceUsedController::class, 'avadvanceUse']);
    Route::get('/advance/icuse/{id}', [AdvanceUsedController::class, 'icadvanceUse']);
    Route::post('/advance/update/{id}', [AdvanceController::class, 'update']);
    Route::get('/advance/advanceall', [AdvanceController::class, 'alldata']);
    Route::post('/advance/updateavuse', [AdvanceUsedController::class, 'updateadvanceUse']);
    // Line Notify
    Route::get('/linenotify', [LinenotifyController::class, 'index']);
    Route::get('/linenotify/{group}/{botname}', [LinenotifyController::class, 'send']);
    // Vendor
    Route::get('/vendor', [VendorController::class, 'index']);
    Route::post('/vendor/add', [VendorController::class, 'add']);
    Route::get('/vendor/edit/{id}', [VendorController::class, 'edit']);
    Route::post('/vendor/update/{id}', [VendorController::class, 'update']);
});
