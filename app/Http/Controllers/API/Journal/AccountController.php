<?php

namespace App\Http\Controllers\API\Journal;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Journal\Account AS Account;
use App\Models\Journal\AccountTypeCategory AS AccountTypeCategory;
use App\Http\Resources\Journal\Account as AccountResource;

use App\Helpers\Journal\JournalHelper AS JournalHelper;


use App\Http\Requests\Journal\AccountRequest;

class AccountController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $accounts = Account::with('account_type')->where('is_source',1)->get();
        return new AccountResource($accounts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $account_type_categories = AccountTypeCategory::get();
        
        return view('journal.account.create',['account_type_categories' => $account_type_categories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $journal_helper = new JournalHelper;
        
        //Debit Entries
        foreach ($request->payload['debit'] as $var) {
            $journal_helper->journal_entry(
                1,
                $var['account_id'],
                $request->payload['date'],
                $var['amount'],
                $request->payload['reference']
                );
        }
        //Credit Entries
        foreach ($request->payload['credit'] as $var) {
            $journal_helper->journal_entry(
                2,
                $var['account_id'],
                $request->payload['date'],
                $var['amount'],
                $request->payload['reference']
                );
        }
        return 'success';
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
