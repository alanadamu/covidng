<?php

namespace App\Helpers\Journal;

use App\Models\Journal\Account AS JournalAccount;
use App\Models\Journal\Journal AS Journal;
use App\Helpers\Journal\JournalHelper;

class JournalAccountHelper
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function get_children($account_id,$level){

        $account = JournalAccount::with('child_account')->where('id',$account_id)->get();
        $account = $account['0'];
        $child_acccounts = array();
        foreach ($account->child_account as $key => $child_account) {
            $child_account['balance'] = JournalHelper::get_balance($child_account->id);
            $child_account['level'] = $level;
            $code = '';
            $code .= '
            <div class="row align-items-center">
                <div class="col-3 mt-50">
                    '.str_repeat('&nbsp;',$child_account->level+1).$child_account->account_number.'
                </div>
                <div class="col-6 mt-50">
                    '.str_repeat('&nbsp;',$child_account->level+1).$child_account->name.'   <br>
                </div>
                <div class="col-3 mt-50">
                    '.number_format(JournalHelper::get_balance($child_account->id),2).'  <br>
                </div> 
            </div> ';                                           
        
            if($this->has_children($child_account->id)){
                $child_account->children = $this->get_children($child_account->id,++$level);
                $children_code = '';
                foreach ($child_account->children as $child) {
                    $children_code .= $child->code;
                }
                $child_account['children_code'] = $children_code;
                $code.= $children_code;
            }
            else
            {
                $child_account['has_children'] = 0;
            }
            $code .= '<div class="row align-items-center">
            <div class="col-3 mt-50">
                
            </div>
            <div class="col-6 mt-50">
                '.str_repeat('&nbsp;',$child_account->level).'Total '.$child_account->name.'   <br>
            </div>
            <div class="col-3 mt-50">
                '.number_format($child_account->balance,2).'  <br>
            </div> 
        </div>';
        $child_account['code'] = $code;

           
            $child_acccounts[$key] = $child_account;
        }

        // dd($child_acccounts);
        
        return $child_acccounts;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public static function has_children($account_id){
        $child_count = JournalAccount::where('parent_id',$account_id)->count();
        if($child_count > 0){
            return true;
        }
        else
        {
            return false;
        }
    }


    
}
