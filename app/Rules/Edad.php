<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use Illuminate\Support\Carbon;

class Edad implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        $fecha = Carbon::now();
        $edad = Carbon::createFromFormat('Y-m-d', $value);
        $fechaMas18 = $edad->addYears(18);
        
        
        if($fecha->greaterThan($fechaMas18)){
            return true;
        }
        return false;
    }
    
    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'You have to be  at least 18 years old.';
    }
}
