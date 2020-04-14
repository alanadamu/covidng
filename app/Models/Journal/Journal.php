<?php

namespace App\Models\Journal;

use Illuminate\Database\Eloquent\Model;

class Journal extends Model
{
    protected $table = 'journal_journals';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
                            'account_id',
                            'transaction_type_id',
                            'date',
                            'reason',
                            'balance',
                            'amount'
                        ];

    /**
     * Get the account of the journal entry
     *
     * @return \App\Role
     */
    public function account()
    {
        return $this->belongsTo(Account::class);
    }
    
    /**
     * Get the type of transaction
     *
     * @return \App\Role
     */
    public function transaction_type()
    {
        return $this->belongsTo(TransactionType::class);
    }
    
}
