<?php

namespace App;


use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use  SoftDeletes;

    protected $fillable = [
        'id', 'state_id', 'name', 'status'
    ];

    public function address(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Address::class);
    }

    public function state()
    {
        return $this->belongsTo(State::class);
    }
}
