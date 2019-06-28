<?php

Route::get('/', function () {
    return view('welcome');
})->name('welcome');
Route::view('login', 'login')->name('login');

Route::view('register', 'register')->name('register');
Route::get('residentes/familiar/{id}', 'ResidentController@familiar')->name('familiar');
Route::post('residentes/familiar', 'ResidentController@storeRelatives')->name('familiar.store');
Route::resource('residentes', 'ResidentController');
Route::resource('tipos_de_residentes', 'TypeOfResidentController');
Route::resource('vigilantes', 'VigilantController');
Route::resource('condominium', 'CondominiumController');
Route::get('houses/{condominium}','CondominiumController@houses')->name('condominium.houses');
Route::get('arrending/{house}','CondominiumController@arrending')->name('condominium.arrending');
Route::resource('house', 'HouseController');
Route::resource('lesee', 'LeseeController');
Route::resource('visit', 'VisitController',[
    'names' => [
        'index' => 'visit.index',
        'create' => 'visit.create'
    ]
]);
Route::resource('arrendatedHouse', 'ArrendatedHouseController');
Route::resource('visitante', 'VisitorController', [
    'names' => [
        'index' => 'visitante.indice',
        'create' => 'visitante.crear',
        'destroy' => 'visitante.eliminar'
    ]
]);
Route::resources([
    'type_of_visitors' => 'TypeOfVisitorController',
    'credentials' => 'CredentialController',
    'conveyances'=> 'ConveyanceController'
]);
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::resource('clientes', 'ClienteController');
Route::get('/auditorias', 'PaginasController@auditorias')->name('auditorias');
Route::get('/auditorias/transportes', 'AuditTransporteController@index')->name('audit_conveyances');
Route::get('/auditorias/credenciales', 'AuditCredentialController@index')->name('audit_credentials');
Route::get('/auditorias/tipos_de_visitantes', 'AuditTipoVisitantesController@index')->name('audit_tvisitors');
Route::get('/auditorias/visitantes', 'AuditVisitanteController@index')->name('audit_visitante');

Route::view('/admin', '/admin/dashboard');
Route::view('/audit/visitas', 'auditorias/audit_visitas')->name('audit.visits');
Route::view('/audit/casas', 'auditorias/auditHouse')->name('audit.house');
