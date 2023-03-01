<?php

namespace App\Models;
use App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reviewer extends Model
{
    use HasFactory;
    protected $table = 'reviewers';
    protected $fillable = ['academic_rank', 'degree', 'office', 'confirmed', "user_info_id"];

    public function user_info()
    {
        return $this->hasOne(UserInfo::class, 'user_info_id','id');
    }
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
    public function meetings()
    {
        return $this->belongsToMany(Meeting::class);
    }
}
