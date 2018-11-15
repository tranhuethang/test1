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

Route::get('admin/config', 'ConfigController@index')->name('admin.config.index');
Route::get('admin/config/edit/{id}', 'ConfigController@edit')->name('admin.config.edit');
Route::post('admin/config/edit/{id}', 'ConfigController@update')->name('admin.config.update');

Route::get('admin/staff/list', 'StaffController@index')->name('admin.staff.index');
Route::get('admin/staff/add', 'StaffController@create')->name('admin.staff.create');
Route::post('admin/staff/add', 'StaffController@store')->name('admin.staff.store');
Route::get('admin/staff/edit/{id}', 'StaffController@edit')->name('admin.staff.edit');
Route::post('admin/staff/edit/{id}', 'StaffController@update')->name('admin.staff.update');
Route::get('admin/staff/delete/{id}', 'StaffController@destroy')->name('admin.staff.destroy');

Route::get('admin/information', 'AdminController@getInfo')->name('admin.info');
