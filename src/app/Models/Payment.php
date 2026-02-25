<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable = ['invoice_id', 'payer_membership_id', 'receiver_membership_id', 'amount'];

    public function invoice()
    {
        return $this->belongsTo(Invoice::class);
    }

    public function payerMembership()
    {
        return $this->belongsTo(Membership::class, 'payer_membership_id');
    }

    public function receiverMembership()
    {
        return $this->belongsTo(Membership::class, 'receiver_membership_id');
    }
}

