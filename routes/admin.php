<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 11/12/2018
 * Time: 2:36 PM
 */
Route::get('admin/login', 'Auth\LoginController@getLogin')->name('admin.getLogin');
Route::post('admin/login', 'Auth\LoginController@postLogin')->name('admin.postLogin');

Route::get('admin/logout', 'Auth\LoginController@getLogout')->name('admin.getLogout');

Route::get('admin/index', 'Auth\LoginController@getIndex')->name('admin.index');

Route::get('admin/config', 'ConfigsController@index')->name('admin.config.index');
Route::get('admin/config/edit/{config}', 'ConfigsController@edit')->name('admin.config.edit');
Route::post('admin/config/edit/{config}', 'ConfigsController@update')->name('admin.config.update');

Route::get('admin/staff/list', 'StaffsController@index')->name('admin.staff.index');
Route::get('admin/staff/add', 'StaffsController@create')->name('admin.staff.create');
Route::post('admin/staff/add', 'StaffsController@store')->name('admin.staff.store');
Route::get('admin/staff/edit/{staff}', 'StaffsController@edit')->name('admin.staff.edit');
Route::post('admin/staff/edit/{staff}', 'StaffsController@update')->name('admin.staff.update');
Route::get('admin/staff/delete/{staff}', 'StaffsController@destroy')->name('admin.staff.destroy');

Route::get('admin/information', 'AdminsController@getInfo')->name('admin.info');
