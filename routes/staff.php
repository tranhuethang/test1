<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 11/12/2018
 * Time: 2:48 PM
 */
Route::get('staff/login', 'Auth\LoginController@getLogin')->name('staff.getLogin');
Route::post('staff/login', 'Auth\LoginController@postLogin')->name('staff.postLogin');

Route::get('staff/logout', 'Auth\LoginController@getLogout')->name('staff.getLogout');

Route::get('staff/index', 'Auth\LoginController@getIndex')->name('staff.index');

Route::get('staff/timesheet/list', 'TimesheetsController@index')->name('staff.timesheet.index');
Route::get('staff/timesheet/add', 'TimesheetsController@create')->name('staff.timesheet.create');
Route::post('staff/timesheet/add', 'TimesheetsController@store')->name('staff.timesheet.store');
Route::get('staff/timesheet/show/{timesheet}', 'TimesheetsController@show')->name('staff.timesheet.show');
Route::post('staff/timesheet/show/{timesheet}', 'TimesheetsController@detail')->name('staff.timesheet.detail');
Route::get('staff/timesheet/edit/{timesheet}', 'TimesheetsController@edit')->name('staff.timesheet.edit');
Route::post('staff/timesheet/edit/{timesheet}', 'TimesheetsController@update')->name('staff.timesheet.update');

Route::get('staff/information', 'InformationsController@index')->name('staff.information.index');
Route::get('staff/information/edit', 'InformationsController@edit')->name('staff.information.edit');
Route::post('staff/information/update', 'InformationsController@update')->name('staff.information.update');

Route::get('staff/resetpassword', 'InformationsController@getResetPassword')->name('staff.information.getresetpassword');
Route::post('staff/resetpassword', 'InformationsController@postResetPassword')->name('staff.information.postresetpassword');

Route::get('staff/statistic', 'StatisticsController@index')->name('staff.statistic.index');

