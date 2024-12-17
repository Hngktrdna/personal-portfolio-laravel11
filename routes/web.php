<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('person.index');
}) -> name("home");

Route::get('/about', function () {
    return view('person.about');
}) -> name("about");

Route::get('/education', function () {
    return view('person.education');
}) -> name("education");

Route::get('/skills', function () {
    return view('person.skills');
}) -> name("skills");

Route::get('/contact', function () {
    return view('person.contact');
}) -> name("contact");

Route::get('/project', function () {
    return view('person.project');
}) -> name("project");
