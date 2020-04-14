<?php

namespace App\Models\Journal;

use Illuminate\Database\Eloquent\Model;

use App\Models\Budget\Budget;
use App\Models\Journal\Journal;

class Account extends Model
{
    protected $table = 'journal_accounts';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'account_type_id',
        'parent_id',
        'is_source',
        'account_number'
    ];
    /**
     * Get the type of account
     *
     * @return \App\Role
     */
    public function account_type()
    {
        return $this->belongsTo(AccountType::class);
    }

    /**
     * Get the type of account
     *
     * @return \App\Role
     */
    public function parent_account()
    {
        return $this->belongsTo(Account::class,'parent_id');
    }

    /**
     * Get the account category of the account
     *
     * @return \App\Role
     */
    public function child_account()
    {
        return $this->hasMany(Account::class,'parent_id');
    }

    /**
     * Get the account category of the account
     *
     * @return \App\Role
     */
    public function budget()
    {
        return $this->hasMany(Budget::class,'journal_account_id');
    }

    /**
     * Get the entries
     *
     * @return \App\Role
     */
    public function entries()
    {
        return $this->hasMany(Journal::class,'account_id');
    }
}
