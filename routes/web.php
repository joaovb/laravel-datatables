<?php

Route::get('/', function () {
    $users = App\User::all();

    return view('welcome', compact('users'));
});

Route::get('api/users', function(){
    return Datatables::eloquent(App\User::query())->make(true);
});
