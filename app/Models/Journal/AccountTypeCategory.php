<?php

namespace App\Models\Journal;

use Illuminate\Database\Eloquent\Model;

class AccountTypeCategory extends Model
{
    protected $table = 'journal_account_type_categories';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'account_type_id'
    ];

    /**
     * Get the type of the account
     *
     * @return \App\Role
     */
    public function account_type()
    {
        return $this->belongsTo(AccountType::class);
    }

    /**
     * Get the type of the account
     *
     * @return \App\Role
     */
    public function account()
    {
        return $this->hasMany(Account::class);
    }
}
