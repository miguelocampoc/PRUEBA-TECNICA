<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use App\User;
use App\vehiculos;
use App\personas;
class uniqueEdit implements Rule
{
  var $data_request;
  var $data_id;
  var $table;
  var $column;
  var $count;
    public function __construct($data_id,$data_request,$table,$column)
    {
        $this->data_request=$data_request;
        $this->data_id=$data_id;
        $this->table= $table;
        $this->column= $column;
        $this->count;
        $this->n_row();
     
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
        if($this->count>0){
            if($this->data_request=$this->data_id){
                 return true;
            }
            else{
                return false;

            }
        }
        else{
            return true;

        }
         
     }
     public function n_row(){
        switch ($this->table) {
            case 'users':
               $this->count= users::where('email','=','12234')->all();
               break;
            case 'vehiculos':
                $this->count= vehiculos::where($this->column,$this->data_request)->count();
              break;
            case 'personas':
                $this->count= personas::where($this->column,$this->data_request)->count();
                 break;
        }  
     }
    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'The validation error message.';
    }
}
