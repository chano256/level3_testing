<?php

namespace level3_testing;

use Illuminate\Database\Eloquent\Model;
use level3_testing\Exceptions\MinorCannotBuyAlcoholicBeverageException;

class Beverage extends Model
{
    public function buy()
    {
        if(auth()->user()->isMinor()){
            throw new MinorCannotBuyAlcoholicBeverageException;
        }

        return true;
    }
}
