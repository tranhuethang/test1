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

Route::get('staff/timesheet/list', 'TimesheetController@index')->name('staff.timesheet.index');
Route::get('staff/timesheet/add', 'TimesheetController@create')->name('staff.timesheet.create');
Route::post('staff/timesheet/add', 'TimesheetController@store')->name('staff.timesheet.store');
Route::get('staff/timesheet/show/{id}', 'TimesheetController@show')->name('staff.timesheet.show');
Route::post('staff/timesheet/show/{id}', 'TimesheetController@detail')->name('staff.timesheet.detail');
Route::get('staff/timesheet/edit/{id}', 'TimesheetController@edit')->name('staff.timesheet.edit');
Route::post('staff/timesheet/edit/{id}', 'TimesheetController@update')->name('staff.timesheet.update');

Route::get('staff/information', 'InformationController@index')->name('staff.information.index');
Route::get('staff/information/edit', 'InformationController@edit')->name('staff.information.edit');
Route::post('staff/information/update', 'InformationController@update')->name('staff.information.update');

Route::get('staff/resetpassword', 'InformationController@getResetPassword')->name('staff.information.getresetpassword');
Route::post('staff/resetpassword', 'InformationController@postResetPassword')->name('staff.information.postresetpassword');

Route::get('staff/statistic', 'StatisticController@index')->name('staff.statistic.index');

