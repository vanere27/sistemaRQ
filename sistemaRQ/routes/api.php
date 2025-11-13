<?php
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

Route::middleware(['auth:sanctum'])->get('/personas', [PersonaController::class, 'generar']);
