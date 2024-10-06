<?php

use App\Jobs\Server\InstallPHP;
use App\Jobs\Server\CreateServer;
use App\Jobs\Server\InstallNginx;
use App\Jobs\Server\FinalizeServer;
use Illuminate\Support\Facades\Bus;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/servers', function () {

    Bus::batch([
        new CreateServer(),
        new InstallNginx(),
        new InstallPHP(),
        new FinalizeServer(),
    ])->dispatch();
   
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
