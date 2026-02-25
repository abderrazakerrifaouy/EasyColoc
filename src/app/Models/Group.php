<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    protected $fillable = ['name'];

    public function memberships()
    {
        return $this->hasMany(Membership::class);
    }
    public function categories()
    {
        return $this->hasMany(Category::class);
    }

    public function groupPayments()
    {
        return $this->hasMany(Group_payment::class);
    }
}
