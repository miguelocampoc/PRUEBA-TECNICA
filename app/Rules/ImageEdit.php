<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class ImageEdit implements Rule
{
    var $file;
    
    public function __construct($file)
    {
        $this->file=$file;
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
        if($this->file==NULL){
            return true;

        }
        else{
           if($this->file=="image/jpg" || $this->file=="image/png" ||  $this->file=="image/jpeg"  ){
               return true;
           }
           else{
               return false;
           }
        }
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'La imagen cargada debe ser png o jpg o jpeg';
    }
}
