<?php

use Illuminate\Support\Facades\Route;

Route::get('/', "control@landing")->name("landing");

Route::get('/container', "control@container")->name("container");

Route::get('/about', "control@about")->name("about");

Route::get('/{id}', "control@return_id")->name("return_id");

Route::post('/landing/search', "control@search")->name("search");
