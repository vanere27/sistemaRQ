<?php
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

Route::middleware([]) 'auth:sanctum'], function () {
    Route::post('/logout', [UserController::class,'logout']);
