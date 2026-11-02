<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\DeviceController;

Route::get('/device/create', [DeviceController::class, 'create'])->name('device.create');
Route::post('/device/create/submit', [DeviceController::class, 'storecrud'])->name('device.submit');
Route::get('/device/show/{device}', [DeviceController::class, 'show'])->name('device.show');
Route::get('/device/edit/{device}', [DeviceController::class, 'edit'])->name('device.edit');
Route::put('/device/update/{device}', [DeviceController::class, 'update'])->name('device.update');
Route::delete('/device/delete/{device}', [DeviceController::class, 'delete'])->name('device.delete');

Route::get('/device/index', [DeviceController::class, 'index'])->name('device.index');


Route::get('/', [PublicController::class, 'homepage'])->name('home');
Route::get('/contattaci', [PublicController::class, 'contactUs'])->name('contact.us');
Route::post('/contattaci/invio', [PublicController::class, 'submit'])->name('contattaci.invio');
Route::get('/contattaci/invio/success', [PublicController::class, 'success'])->name('contattaci.invio.success');
Route::get('/device/{device}', [DeviceController::class, 'dettaglio'])->name('device.dettaglio');


Route::get('/user/profile', [PublicController::class, 'profile'])->name('user.profile');
