<?php

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::apiResource('damage_types', 'DamageTypeController');
Route::apiResource('dice_types', 'DiceTypeController');
Route::apiResource('weapons', 'WeaponController');
Route::apiResource('weapon_types', 'WeaponTypeController');
Route::apiResource('weapon_categories', 'WeaponCategoryController');
