<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    protected $fillable = ['title', 'membership_id', 'category_id', 'amount', 'description'];

    public function membership()
    {
        return $this->belongsTo(Membership::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    
}
