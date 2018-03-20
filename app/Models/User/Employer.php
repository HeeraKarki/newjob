<?php
namespace App\Models\User ;
use Illuminate\Database\Eloquent\Model;
class Employer extends Model{
 
    protected $fillable=[
      'company_name','address_1','address_2','phone_no','description','no_of_employee',
      'location_id','website','logo','user_id'
    ];
}