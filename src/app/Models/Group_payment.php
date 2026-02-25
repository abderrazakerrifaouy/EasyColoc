<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Group_payment extends Model
{
    protected $fillable = ['group_id', 'payer_membership_id', 'receiver_membership_id', 'amount'];

    public function group()
    {
        return $this->belongsTo(Group::class);
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
