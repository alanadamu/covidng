<?php

namespace App\Http\Controllers\Journal;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Carbon\Carbon as Carbon;

use App\Models\Journal\Journal AS Journal;
use App\Models\Journal\Account AS Account;
use App\Models\Journal\AccountType AS AccountType;
use App\Models\Journal\TransactionType AS TransactionType;

use App\Helpers\Journal\JournalHelper AS JournalHelper;
use App\Helpers\Budget\BudgetHelper AS BudgetHelper;


use App\Http\Requests\Journal\JournalRequest;

class JournalController extends Controller
{
    public function __construct(Request $request)
    {
        // $this->authorizeResource(Journal::class);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->authorize('manage-journals', User::class);
        $journals = Journal::with('account.account_type')->with('transaction_type')->get();
        // dd($journals);

        return view('journal.journal.index', ['journals' => $journals]);
    }

    /**
     * Display balance sheet.
     *
     * @return \Illuminate\Http\Response
     */
    public function balance_sheet()
    {
        // $accounts = Account::with('child_account.child_account.child_account')->whereNull('parent_id')->orderBy('id','ASC')->get();
        // dd($main_accounts);
        // return view('journal.journal.balance_sheet', ['accounts' => $accounts]);

        $accounts = Account::whereNull('parent_id')->orderBy('id','ASC')->get();
        $journal_helper = new JournalHelper();
            $blade_code = $journal_helper->annual_journal_entry($accounts,1);
        
        // dd($blade_code);
        return view('journal.journal.balance_sheet', ['blade_code' => $blade_code]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $accounts = Account::get();
        $transaction_types = TransactionType::get();
        
        return view('journal.journal.create',[
                                                            'accounts' => $accounts,
                                                            'transaction_types' => $transaction_types
                                                            ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(JournalRequest $request, Journal $journal)
    {
        // dd($request->account_id);
        $account = Account::findOrFail($request->account_id);
        $account_type = AccountType::findOrFail($account->account_type_id);

        $latest_journal_entry = Journal::where('account_id', $request->account_id)
                                    ->orderBy('id', 'DESC')
                                    ->limit(1)
                                    ->get();
        if ($latest_journal_entry->count() > 0) {
            $current_balance = $journal['0']->balance;
        }
        else {
            $current_balance = 0;
        }
        if ($account_type->to_increase == $request->transaction_type_id) {
            $new_balance = $current_balance + $request->amount;
        }
        else {
            $new_balance = $current_balance - $request->amount;
        }
        $request->date = date('Y-m-d', strtotime($request->date));

        $journal->create($request->merge([
            'balance' => $new_balance,
            'date' => date('Y-m-d', strtotime($request->date))
        ])->all());

        return redirect()->route('journal.index')                                                
                                    ->withStatus(__('Journal Entry successfully created.'));
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
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show_account($id)
    {
        $account = Account::findOrFail($id);
        $journal = Journal::where('account_id',$id)->orderBy('id', 'ASC')->get();
        // dd($journal);
        return view('journal.journal.show_account',['account' => $account,'journal' => $journal]);

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
