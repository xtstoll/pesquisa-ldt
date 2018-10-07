<?php

Route::get('/', function () {
    return view('index');
});

Route::get('/parte1', function(){
	return view('parte1');
});

    Route::post('/parte1', 'RespostaController@parte1');
        
Route::get('/parte2', function(){
	return view('parte2');
});

Route::post('/parte2', 'RespostaController@parte2');

Route::get('/parte3', function(){
	return view('parte3');
});

Route::post('/parte3', 'RespostaController@parte3');

Route::get('/parte4', function(){
	return view('parte4');
});

Route::post('/parte4', 'RespostaController@parte4');

Route::get('/parte5', function(){
	return view('parte5');
});

Route::post('/parte5', 'RespostaController@parte5');

Route::get('/parte6', function(){
	return view('parte6');
});

Route::post('/parte6', 'RespostaController@parte6');



