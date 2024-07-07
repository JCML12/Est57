<?php


    //rutas para eventos

use GuzzleHttp\Middleware;

    Route::group(['prefix' => 'admin/eventos'], function () {
        Route::get('/', [App\Http\Controllers\Admin\EventosController::class, 'index'])->middleware('auth')->name('admin.eventos.index');
        Route::get('/create', [App\Http\Controllers\Admin\EventosController::class, 'create'])->name('admin.eventos.create');
        Route::post('/store', [App\Http\Controllers\Admin\EventosController::class, 'store'])->name('admin.eventos.store');
        Route::get('/{id}/edit', [App\Http\Controllers\Admin\EventosController::class, 'edit'])->name('admin.eventos.edit');
        Route::put('/update/{id}', [App\Http\Controllers\Admin\EventosController::class, 'update'])->name('admin.eventos.update');
        Route::get('/{id}/delete', [App\Http\Controllers\Admin\EventosController::class, 'destroy'])->name('admin.eventos.destroy');
    });

    Route::delete('/images/{id}', [App\Http\Controllers\Admin\ImageController::class, 'destroy'])->name('admin.images.destroy');

