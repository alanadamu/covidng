<?php

namespace App\Helpers\Journal;

use App\Models\Journal\Account AS JournalAccount;
use App\Models\Journal\Journal AS Journal;



class JournalHelper
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function journal_entry($transaction_type_id, $journal_account_id,$date,$amount,$reason){
        $journal_entry = new Journal;
        $journal_entry->account_id = $journal_account_id;
        $journal_entry->transaction_type_id = $transaction_type_id;
        $journal_entry->date = $date;
        $journal_entry->amount = $amount;
        $journal_entry->reason = $reason;
        $latest_journal_entry = Journal::where('account_id', $journal_account_id)
                                    ->orderBy('id', 'DESC')
                                    ->limit(1)
                                    ->get();
        $account = JournalAccount::with('account_type')->findOrFail($journal_account_id);

        if ($latest_journal_entry->count() > 0) {
            $journal_balance = $latest_journal_entry['0']->balance;
        }
        else {
            $journal_balance = 0;
        }
        if ($account->account_type->to_increase == $transaction_type_id) {
            $journal_entry->balance = $journal_balance + $journal_entry->amount;
        }
        else {
            $journal_entry->balance = $journal_balance - $journal_entry->amount;
        }
        // dd($journal_entry);
        $journal_entry->save();

        //If has parent
        if ($account->parent_id) {
            $this->journal_entry(
                $transaction_type_id,
                $account->parent_id,
                $date,
                $amount,
                $reason
                );
        }
        return $journal_entry;
    }

    public static function get_balance($account_id){
        $latest_journal_entry = Journal::where('account_id', $account_id)
                                    ->orderBy('id', 'DESC')
                                    ->limit(1)
                                    ->get();

        if ($latest_journal_entry->count() > 0) {
            $journal_balance = $latest_journal_entry['0']->balance;
        }
        else {
            $journal_balance = 0;
        }

        return $journal_balance;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function annual_journal_entry($accounts,$level){

        $final_code = '';

        foreach ($accounts as $account) {
            $account['balance'] = JournalHelper::get_balance($account->id);
            $journal_account_helper = new JournalAccountHelper;
            $account['level'] = $level;
            $code = '';
            $code .= '
            <div class="row align-items-center">
                <div class="col-3 mt-50">
                    '.str_repeat('&nbsp;',$account->level+1).$account->account_number.'
                </div>
                <div class="col-6 mt-50">
                    '.str_repeat('&nbsp;',$account->level+1).$account->name.'   <br>
                </div>
                <div class="col-3 mt-50">
                    '.number_format(JournalHelper::get_balance($account->id),2).'  <br>
                </div> 
            </div> ';         
            
            if(JournalAccountHelper::has_children($account->id)){
                
                $account->children = $journal_account_helper->get_children($account->id,++$level);
                $children_code = '';
                foreach ($account->children as $child) {
                    $children_code .= $child->code;
                }
                $account['children_code'] = $children_code;
                $code.= $children_code;
            }
            else
            {
                $account['has_children'] = 0;
            }

            $code .= '<hr><div class="row align-items-center">
                            <div class="col-3 mt-50">
                                
                            </div>
                            <div class="col-6 mt-50">
                                <strong>'.str_repeat('&nbsp;',$account->level).'Total '.$account->name.'   </strong>
                            </div>
                            <div class="col-3 mt-50">
                            <strong>'.number_format($account->balance,2).'  </strong>
                            </div> 
                        </div><hr>';
        $account['code'] = $code;
        $final_code.=$code;
        
        }
        return $final_code;
    }

    
}
