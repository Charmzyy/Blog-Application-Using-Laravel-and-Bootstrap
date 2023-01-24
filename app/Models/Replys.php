<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Replys extends Model
{
    use HasFactory;
    protected $table= 'replys';
    protected $fillable =[
        'replies_id',
        'user_id',
        'body'
    ];

  
   public function user(){
    return $this->belongsTo(User::class);
   }

 public function replys(){
    return $this->hasMany(Replys::class);
 }

}
