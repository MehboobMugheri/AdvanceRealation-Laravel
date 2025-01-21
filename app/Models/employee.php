<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class employee extends Model
{
    use HasFactory;

    public function company(){
        return $this->hasOne(company::class);
    }

    public function companyNumber(){
        return $this->hasOneThrough(contact_number::class,company::class);
    }

    public function latestIncome(){
        return $this->hasOne(salary::class)->latestOfMany();
    }

    public function largestIncome(){
        return $this->hasOne(salary::class)->ofMany('monthly_income','max');
    }
}
