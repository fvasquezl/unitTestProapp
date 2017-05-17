<?php

Route::resource('car','Client\CarController');

Route::get('contracts/{car}',[
    'uses' =>'Client\ContractController@index',
    'as'  => 'contracts.index'
]);

Route::get('contracts/create',[
    'uses' =>'Client\CarController@create',
    'as'  => 'contracts.create'
]);

Route::get('contracts/destroy/{contract}',[
    'uses' =>'Client\CarController@destroy',
    'as'  => 'contracts.destroy'
]);