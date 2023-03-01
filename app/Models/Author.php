<?php

namespace App\Models;
use App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;
    protected $table = 'authors';
    protected $fillable = ['academic_rank', 'degree', 'office', "user_info_id"];

    public function user_info()
    {
        return $this->hasOne(UserInfo::class, 'user_info_id','id');
    }
    public function articles()
    {
        return $this->belongsToMany(Article::class);
    }
    public function meetings()
    {
        return $this->belongsToMany(Meeting::class);
    }
}
