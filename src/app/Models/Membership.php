<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Membership extends Model
{
    protected $fillable = ['user_id', 'group_id', 'role', 'is_approved'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function group()
    {
        return $this->belongsTo(Group::class);
    }

    public function invoices()
    {
        return $this->hasMany(Invoice::class);
    }

    public function paymentsMade()
    {
        return $this->hasMany(Group_payment::class, 'payer_membership_id');
    }

    public function paymentsReceived()
    {
        return $this->hasMany(Group_payment::class, 'receiver_membership_id');
    }

    public function invoicePayments()
    {
        return $this->hasMany(Payment::class, 'payer_membership_id');
    }

    public function invoiceReceipts()
    {
        return $this->hasMany(Payment::class, 'receiver_membership_id');
    }
}
