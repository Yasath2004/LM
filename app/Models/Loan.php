<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Loan extends Model
{
    protected $guarded = [];

    protected $casts = [
        'start_date' => 'date',
        'due_date' => 'date',
    ];

    protected static function boot()
    {
        parent::boot();

        self::created(function ($loan) {
            $loan->loan_number = 'L' . str_pad($loan->id, 5, '0', STR_PAD_LEFT);
            $loan->save();
        });
    }

    public function customer(): BelongsTo
    {
        return $this->belongsTo(Customer::class);
    }

    public function premiums()
    {
        return $this->hasMany(LoanPremium::class);
    }

    public function createdBy(): BelongsTo
    {
        return $this->belongsTo(Admin::class, 'created_by');
    }

    public function getBalance()
    {
        return $this->amount - $this->premiums()->sum('amount');
    }

    public function isSettled():bool
    {
        return $this->getBalance() <= 0;
    }
}
