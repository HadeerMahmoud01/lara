<?php

namespace App\Models\User;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class role extends Model
{
    use HasFactory;
    // to avoid error 
    // fillale must be done so laravel can read the col
    protected $fillable=['name'];

    public function users(){
        return $this->hasMany(User::class,'role_id','id');
    }
}
