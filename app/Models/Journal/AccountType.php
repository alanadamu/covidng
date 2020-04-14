<?php

namespace App\Models\Journal;

use Illuminate\Database\Eloquent\Model;

class AccountType extends Model
{
    protected $table = 'journal_account_types';

    /**
     * Get the account categories for the blog post.
     */
    public function account_type_category()
    {
        return $this->hasMany(AccountTypeCategory::class,'account_type_id');
    }
}
