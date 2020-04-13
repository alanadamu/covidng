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

    //Account Routes
      //Payment Routes
      Route::get('account/payment/update_db', 'Account\PaymentController@update_db')->name('account.payment.update_db');
      Route::resource('account/payment', 'Account\PaymentController');
      //Payment Method Routes
      Route::get('account/payment_method/update_db', 'Account\PaymentMethodController@update_db')->name('account.payment_method.update_db');
      Route::resource('account/payment_method', 'Account\PaymentMethodController');

    //Res Routes
      //Company Routes
      Route::get('res/company/update_db', 'Res\CompanyController@update_db')->name('res.company.update_db');
      Route::resource('res/company', 'Res\CompanyController');
      //Partner Routes
      Route::get('res/partner/update_db', 'Res\PartnerController@update_db')->name('res.partner.update_db');
      Route::resource('res/partner', 'Res\PartnerController');
      //Odoo User Routes
      Route::get('res/odoo_user/update_db', 'Res\OdooUserController@update_db')->name('res.odoo_user.update_db');
      Route::resource('res/odoo_user', 'Res\OdooUserController');

    //Product Routes
      //Product Routes
      Route::get('product/product/update_db', 'Product\ProductController@update_db')->name('product.product.update_db');
      Route::resource('product/product', 'Product\ProductController');
      //Category Routes
      Route::get('product/category/update_db', 'Product\ProductCategoryController@update_db')->name('product.category.update_db');
      Route::resource('product/category', 'Product\ProductCategoryController');
      //Template Routes
      Route::get('product/template/update_db', 'Product\TemplateController@update_db')->name('product.template.update_db');
      Route::resource('product/template', 'Product\TemplateController');
      //Product Move Routes
      Route::get('product/move/update_db', 'Product\MoveController@update_db')->name('product.move.update_db');
      Route::resource('product/move', 'Product\MoveController');

    //POS Order Routes
      //Order Routes
      Route::get('pos/order/update_db', 'POS\OrderController@update_db')->name('pos.order.update_db');
      Route::resource('pos/order', 'POS\OrderController');
      //Product Lines Routes
      Route::get('pos/product_line/update_db', 'POS\ProductLineController@update_db')->name('pos.product_line.update_db');
      Route::resource('pos/product_line', 'POS\ProductLineController');
    //Odoo API Routes
      //Order Routes
      Route::get('odoo_api/{model}/{latest_id}/{fields?}', ['as' => 'odoo_api.get_latest', 'uses' => 'OdooAPI\OdooController@get_latest']);

    Route::resource('category', 'CategoryController', ['except' => ['show']]);
    Route::resource('tag', 'TagController', ['except' => ['show']]);
    Route::resource('item', 'ItemController', ['except' => ['show']]);
    Route::resource('role', 'RoleController', ['except' => ['show', 'destroy']]);
    Route::resource('user', 'UserController', ['except' => ['show']]);
    
    Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
    Route::put('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
    Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);
    
    Route::get('rtl-support', ['as' => 'page.rtl-support', 'uses' => 'ExamplePagesController@rtlSupport']);
    Route::get('timeline', ['as' => 'page.timeline', 'uses' => 'ExamplePagesController@timeline']);
    Route::get('widgets', ['as' => 'page.widgets', 'uses' => 'ExamplePagesController@widgets']);
    Route::get('charts', ['as' => 'page.charts', 'uses' => 'ExamplePagesController@charts']);
    Route::get('calendar', ['as' => 'page.calendar', 'uses' => 'ExamplePagesController@calendar']);

    Route::get('buttons', ['as' => 'page.buttons', 'uses' => 'ComponentPagesController@buttons']);
    Route::get('grid-system', ['as' => 'page.grid', 'uses' => 'ComponentPagesController@grid']);
    Route::get('panels', ['as' => 'page.panels', 'uses' => 'ComponentPagesController@panels']);
    Route::get('sweet-alert', ['as' => 'page.sweet-alert', 'uses' => 'ComponentPagesController@sweetAlert']);
    Route::get('notifications', ['as' => 'page.notifications', 'uses' => 'ComponentPagesController@notifications']);
    Route::get('icons', ['as' => 'page.icons', 'uses' => 'ComponentPagesController@icons']);
    Route::get('typography', ['as' => 'page.typography', 'uses' => 'ComponentPagesController@typography']);
    
    Route::get('regular-tables', ['as' => 'page.regular_tables', 'uses' => 'TablePagesController@regularTables']);
    Route::get('extended-tables', ['as' => 'page.extended_tables', 'uses' => 'TablePagesController@extendedTables']);
    Route::get('datatable-tables', ['as' => 'page.datatable_tables', 'uses' => 'TablePagesController@datatableTables']);

    Route::get('regular-form', ['as' => 'page.regular_forms', 'uses' => 'FormPagesController@regularForms']);
    Route::get('extended-form', ['as' => 'page.extended_forms', 'uses' => 'FormPagesController@extendedForms']);
    Route::get('validation-form', ['as' => 'page.validation_forms', 'uses' => 'FormPagesController@validationForms']);
    Route::get('wizard-form', ['as' => 'page.wizard_forms', 'uses' => 'FormPagesController@wizardForms']);

    Route::get('google-maps', ['as' => 'page.google_maps', 'uses' => 'MapPagesController@googleMaps']);
    Route::get('fullscreen-maps', ['as' => 'page.fullscreen_maps', 'uses' => 'MapPagesController@fullscreenMaps']);
    Route::get('vector-maps', ['as' => 'page.vector_maps', 'uses' => 'MapPagesController@vectorMaps']);
  });


