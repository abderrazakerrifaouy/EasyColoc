<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name', 'group_id'];

    public function group()
    {
        return $this->belongsTo(Group::class);
    }

    public function invoices()
    {
        return $this->hasMany(Invoice::class);
    }
}
