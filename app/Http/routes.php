<?php

$app->get('/', 'DashboardController@index');

$app->get('/settings', 'SettingsController@index');
$app->post('/settings/validate', 'SettingsController@validate');
$app->post('/settings', 'SettingsController@store');
$app->post('/misc-settings', 'SettingsController@storeMiscSettings');
$app->post('/settings/delete', 'SettingsController@delete');
$app->post('/settings/misc', 'SettingsController@storeGlobals');
$app->post('/settings/test', 'SettingsController@sendTestEmil');
$app->get('settings/connection_info', 'SettingsController@getConnectionInfo');

$app->get('/logs', 'LoggerController@get');
$app->get('/logs/show', 'LoggerController@show');
$app->post('/logs/retry', 'LoggerController@retry');
$app->post('/logs/delete', 'LoggerController@delete');