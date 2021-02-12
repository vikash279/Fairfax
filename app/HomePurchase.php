<?php

namespace App;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class HomePurchase extends Model
{   
    protected $fillable = [
        'property_type',
        'property_use',
        'credit_score',
        'already_found_home',
        'estimated_purchase_price',
        'downpayment',
        'military_service',
        'expected_buy_time',
        'contact_time',
        'contact_time',
        'first_name',
        'last_name',
        'email',
        'phone',
        'alternate_phone',
        
        // add all other fields
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    public $table = 'home_purchase_data';
    
    public static function insert($data){
        $value = DB::table('home_purchase_data')->insert($data);
        if($value){
            return TRUE;
        }else{
            return FALSE;
        }
    }
    
     public static function store($data){
        $value = DB::table('home_refinance_data')->insert($data);
        if($value){
            return TRUE;
        }else{
            return FALSE;
        }
    }
}