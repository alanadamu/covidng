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
  //Journal Routes
		//Account Type Category Routes
    Route::resource('journal_account_type_category', 'Journal\AccountTypeCategoryController');
		//Account Type Routes
			Route::resource('journal_account_type', 'Journal\AccountTypeController');
		//Journal Routes
			//Show Account Routes
			Route::get('/journal/show_account/{id}', 'Journal\JournalController@show_account')->name('journal.show_account');
			//Balance Sheet Routes
			Route::get('journal/balance_sheet/', 'Journal\JournalController@balance_sheet')->name('journal.balance_sheet');
			Route::resource('journal', 'Journal\JournalController');
			
		//Journal Account Routes
			Route::resource('journal_account', 'Journal\AccountController');

    //Account Routes
      //Payment Routes
      Route::get('account/payment/update_db', 'Account\PaymentController@update_db')->name('account.payment.update_db');
      Route::resource('account/payment', 'Account\PaymentController');
      //Payment Method Routes
      Route::get('account/payment_method/update_db', 'Account\PaymentMethodController@update_db')->name('account.payment_method.update_db');
      Route::resource('account/payment_method', 'Account\PaymentMethodController');

      //Res Routes
      Route::name('res.')->group(function () {
          //Res Routes
            //Company Routes
            Route::get('res/company/update_db', 'Res\CompanyController@update_db')->name('company.update_db');
            Route::resource('res/company', 'Res\CompanyController');
            //Partner Routes
            Route::post('res/partner/store_journal', 'Res\PartnerController@store_journal')->name('partner.store_journal');
            Route::get('res/partner/connect_journal/{partner_id}', 'Res\PartnerController@create_journal')->name('partner.create_journal');
            Route::get('res/partner/update_db', 'Res\PartnerController@update_db')->name('partner.update_db');
            Route::resource('res/partner', 'Res\PartnerController');
            //Odoo User Routes
            Route::get('res/odoo_user/update_db', 'Res\OdooUserController@update_db')->name('odoo_user.update_db');
            Route::resource('res/odoo_user', 'Res\OdooUserController');
      });
    

    //Product Routes
    Route::name('product.')->group(function () {
      //Product Routes
        Route::get('product/product/update_db', 'Product\ProductController@update_db')->name('update_db');
        Route::resource('product/product', 'Product\ProductController');
      //Category Routes
        Route::get('product/category/update_db', 'Product\ProductCategoryController@update_db')->name('category.update_db');
        Route::resource('product/category', 'Product\ProductCategoryController');
      //Template Routes
        Route::get('product/template/update_db', 'Product\TemplateController@update_db')->name('template.update_db');
        Route::resource('product/template', 'Product\TemplateController');
      //Product Move Routes
        Route::get('product/move/update_db', 'Product\MoveController@update_db')->name('move.update_db');
        Route::resource('product/move', 'Product\MoveController');
    });
      

    //POS  Routes
    Route::name('pos.')->group(function () {
      //Order Routes
        Route::get('pos/order/update_db', 'POS\OrderController@update_db')->name('order.update_db');
        Route::resource('pos/order', 'POS\OrderController');
      //Product Lines Routes
        Route::get('pos/product_line/update_db', 'POS\ProductLineController@update_db')->name('product_line.update_db');
        Route::resource('pos/product_line', 'POS\ProductLineController');
    });
      
    //Odoo API Routes
    Route::name('odoo_api.')->group(function () {
      //Odoo API Routes
      Route::get('odoo_api/{model}/{latest_id}/{fields?}', ['as' => 'odoo_api.get_latest', 'uses' => 'OdooAPI\OdooController@get_latest'])->name('get_latest');
    });

    //Config Routes
    Route::name('config.')->group(function () {
      //Res Routes
        //Company Routes
        Route::resource('config/config', 'Config\ConfigController');
  });
      

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


