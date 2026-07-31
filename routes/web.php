<?php

use App\Http\Controllers\Invitations\InvitationController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Themes\ConfirmationController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//public routes
Route::get('/', function () {
    return view('landing.index');
});
Route::get('/public/invitation/{invitationId}', [InvitationController::class, 'show'])->name('invitation.show');
Route::post('/public/confirmation/{invitationId}', [ConfirmationController::class, 'store'])->name('confirmation.store');


//private routes
Route::get('/dashboard', function () {
    return view('core.dashboard.index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    //Invitations
    Route::get('invitations', [InvitationController::class, 'index'])->name('invitation.index');
    Route::get('invitation/create', [InvitationController::class, 'create'])->name('invitation.create');
    Route::post('invitation/create', [InvitationController::class, 'store'])->name('invitation.store');

    
});



require __DIR__.'/auth.php';
