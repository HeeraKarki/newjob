<?php
/**
 * Created by PhpStorm.
 * User: bkj
 * Date: 4/15/18
 * Time: 8:29 PM
 */

namespace App\Models\User;


use Illuminate\Database\Eloquent\Model;

class CareerObjective extends Model
{
    protected $fillable=['txt','user_id'];

    public function user (){
        return $this->belongsTo(User::class);
    }
}