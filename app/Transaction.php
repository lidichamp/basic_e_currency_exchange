<?php

namespace App;



use Illuminate\Database\Eloquent\Model;
class Transaction extends Model
{
    //use SoftDeletes;
    protected $dates = ['created_at', 'updated_at'];



    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'type', 'amount', 'exchange_rate','amount_payable','e_currency','bank','bank_details','status','user_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

}
