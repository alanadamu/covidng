<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
  return redirect('login');
});

Route::get('/welcome', function () {
  return view('home');
});

Auth::routes();

Route::get('home', 'HomeController@index')->name('home');
Route::get('dashboard', 'HomeController@index')->name('home');
Route::get('pricing', 'ExamplePagesController@pricing')->name('page.pricing');
Route::get('lock', 'ExamplePagesController@lock')->name('page.lock');

Route::group(['middleware' => 'auth'], function () {
  //Covid Routes
  Route::name('covid.')->group(function () {
    Route::get('state/bulk/create', 'Covid\StateController@bulk_create')->name('state.bulk_create');
    Route::post('state/bulk', 'Covid\StateController@bulk_store')->name('state.bulk_store');
    Route::resource('state', 'Covid\StateController');

    Route::get('test/bulk/create', 'Covid\TestController@bulk_create')->name('test.bulk_create');
    Route::post('test/bulk', 'Covid\TestController@bulk_store')->name('test.bulk_store');
    Route::resource('test', 'Covid\TestController');

    Route::get('covid_case/bulk/create', 'Covid\CovidCaseController@bulk_create')->name('covid_case.bulk_create');
    Route::post('covid_case/bulk', 'Covid\CovidCaseController@bulk_store')->name('covid_case.bulk_store');
    Route::resource('covid_case', 'Covid\CovidCaseController');

    Route::get('discharge/bulk/create', 'Covid\DischargeController@bulk_create')->name('discharge.bulk_create');
    Route::post('discharge/bulk', 'Covid\DischargeController@bulk_store')->name('discharge.bulk_store');
    Route::resource('discharge', 'Covid\DischargeController');

    Route::get('death/bulk/create', 'Covid\DeathController@bulk_create')->name('death.bulk_create');
    Route::post('death/bulk', 'Covid\DeathController@bulk_store')->name('death.bulk_store');
    Route::resource('death', 'Covid\DeathController'); 
 });   

    // Route::resource('category', 'CategoryController', ['except' => ['show']]);
    // Route::resource('tag', 'TagController', ['except' => ['show']]);
    // Route::resource('item', 'ItemController', ['except' => ['show']]);
    Route::resource('role', 'RoleController', ['except' => ['show', 'destroy']]);
    Route::resource('user', 'UserController', ['except' => ['show']]);
    
    Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
    // Route::put('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
    // Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);
    
    // Route::get('rtl-support', ['as' => 'page.rtl-support', 'uses' => 'ExamplePagesController@rtlSupport']);
    // Route::get('timeline', ['as' => 'page.timeline', 'uses' => 'ExamplePagesController@timeline']);
    // Route::get('widgets', ['as' => 'page.widgets', 'uses' => 'ExamplePagesController@widgets']);
    // Route::get('charts', ['as' => 'page.charts', 'uses' => 'ExamplePagesController@charts']);
    // Route::get('calendar', ['as' => 'page.calendar', 'uses' => 'ExamplePagesController@calendar']);

    // Route::get('buttons', ['as' => 'page.buttons', 'uses' => 'ComponentPagesController@buttons']);
    // Route::get('grid-system', ['as' => 'page.grid', 'uses' => 'ComponentPagesController@grid']);
    // Route::get('panels', ['as' => 'page.panels', 'uses' => 'ComponentPagesController@panels']);
    // Route::get('sweet-alert', ['as' => 'page.sweet-alert', 'uses' => 'ComponentPagesController@sweetAlert']);
    // Route::get('notifications', ['as' => 'page.notifications', 'uses' => 'ComponentPagesController@notifications']);
    Route::get('icons', ['as' => 'page.icons', 'uses' => 'ComponentPagesController@icons']);
    // Route::get('typography', ['as' => 'page.typography', 'uses' => 'ComponentPagesController@typography']);
    
    // Route::get('regular-tables', ['as' => 'page.regular_tables', 'uses' => 'TablePagesController@regularTables']);
    // Route::get('extended-tables', ['as' => 'page.extended_tables', 'uses' => 'TablePagesController@extendedTables']);
    // Route::get('datatable-tables', ['as' => 'page.datatable_tables', 'uses' => 'TablePagesController@datatableTables']);

    // Route::get('regular-form', ['as' => 'page.regular_forms', 'uses' => 'FormPagesController@regularForms']);
    // Route::get('extended-form', ['as' => 'page.extended_forms', 'uses' => 'FormPagesController@extendedForms']);
    // Route::get('validation-form', ['as' => 'page.validation_forms', 'uses' => 'FormPagesController@validationForms']);
    // Route::get('wizard-form', ['as' => 'page.wizard_forms', 'uses' => 'FormPagesController@wizardForms']);
  });


