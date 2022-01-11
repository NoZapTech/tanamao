<?php

use Illuminate\Support\Facades\Route,
    App\Http\Controllers\DashboardController,
    App\Http\Controllers\Comercial\SubscriptionController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::group(['middleware' => 'auth:sanctum', 'as' => 'dashboard.', 'prefix' => ''], function () {

    // Rotas do painel  - PainelController
    Route::get('', [DashboardController::class, 'welcome'])->name('welcome');

    // Comercial
    Route::group(['middleware' => 'can:listar_assinaturas', 'as' => 'comercial.', 'prefix' => 'comercial'], function() {

        // SubscriptionController
        Route::get('assinaturas', [SubscriptionController::class, 'index'])->name('assinaturas.index');
        Route::get('assinaturas/nova', [SubscriptionController::class, 'create'])->name('assinaturas.create');
        Route::post('assinaturas/nova', [SubscriptionController::class, 'store'])->name('assinaturas.store');
    });
});
