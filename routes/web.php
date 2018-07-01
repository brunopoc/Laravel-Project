<?php

Route::get('/', 'HomeController@index')->name('home');
Route::get('/index', 'HomeController@index');
//Para acessar a tela de login e registro é necessário não estar logado
Route::get('/login', 'LoginController@index')->name('login')->middleware('guest');
Route::post('/login', 'LoginController@login');
Route::get('/register', 'RegisterController@index')->name('register')->middleware('guest');
Route::post('/register', 'RegisterController@create');

//Password Reset
Route::get('/password/reset/{token?}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('/password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::post('/password/reset', 'Auth\ResetPasswordController@reset')->name('password.reset');

//----- Grupo para rotas que necessita de login
Route::group(['middleware'=>['auth']], function(){
    Route::post('/logout', function(){
            Auth::logout();
            return redirect()->route('home');
    })->name('logout');
    
    // --- DashBoard Section
    Route::get('/dashboard', "HomeController@dashboard")->name('dashboard');
    Route::post('dashsection', "dashSection\dashboardController@index")->name('dash');
});
