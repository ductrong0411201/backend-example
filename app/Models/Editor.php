<?php

namespace App\Models;
use App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Editor extends Model
{
    use HasFactory;
    protected $table = 'editors';
    protected $fillable = ['job_position', 'experience', 'user_info_id'];

    public function user_info()
    {
        return $this->hasOne(UserInfo::class, 'user_info_id','id');
    }
}
