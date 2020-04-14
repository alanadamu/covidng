<?php

namespace App\Http\Controllers\Journal;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Journal\Account AS Account;
use App\Models\Journal\AccountTypeCategory AS AccountTypeCategory;


use App\Http\Requests\Journal\AccountRequest;

class AccountController extends Controller
{
    public function __construct(Request $request)
    {
        $this->authorizeResource(Account::class);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $accounts = Account::with('parent_account')->with('account_type')->paginate(10);
        return view('journal.account.index', ['accounts' => $accounts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $accounts = Account::get();
        
        return view('journal.account.create',['accounts' => $accounts]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AccountRequest $request, Account $account)
    {
        $parent_account = Account::findOrFail($request->parent_id);
        $account_type_id = $parent_account->account_type_id;
        $parent_account_number = $parent_account->account_number;
        $parent_children_count = Account::where('parent_id',$request->parent_id)->count();
        if ($request->is_source_check) {
            $result = $account->create(  $request->merge([
                'account_type_id' => $account_type_id,
                'account_number' => $parent_account_number.'.'.sprintf('%04d', ++$parent_children_count),
                'is_source' => 1
                ])->except('account_type_category_id')
            );
        } else{
            $result = $account->create(  $request->merge([
                'account_type_id' => $account_type_id,
                'account_number' => $parent_account_number.'.'.sprintf('%04d', ++$parent_children_count),
                'is_source' => 0
                ])->except('account_type_category_id')
            );
        }


        return redirect()->route('journal_account.index')                                                
                                    ->withStatus(__('Account successfully created.'));
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
