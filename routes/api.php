<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::group(['prefix' => 'v1'], function() {
	//Payment Routes
		//APayment Voucher Request Routes		
        Route::get('xxx', 'HomeController@stats');

	//Journal Routes
		//Account Type Category Routes
		Route::resource('journal_account_type_category', 'API\Journal\AccountTypeCategoryController');
		//Account Type Routes
		Route::resource('journal_account_type', 'API\Journal\AccountTypeController');
		//Journal Routes
		Route::resource('journal', 'API\Journal\JournalController');
			//Balance Sheet Routes
			Route::get('journal/balance_sheet/', 'API\Journal\JournalController@balance_sheet');
		//Journal Account Routes
		Route::resource('journal_account', 'API\Journal\AccountController');
});
