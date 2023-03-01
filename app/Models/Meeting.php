<?php

namespace App\Models;
use App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Meeting extends Model
{
    use HasFactory;
    protected $table = 'meetings';
    protected $fillable = ['title', 'description', 'date_start', "time_start",'created_by','link','password','article_id'];

    public function authors()
    {
        return $this->belongsToMany(Author::class);
    }
    public function article()
    {
        return $this->belongsTo(Article::class);
    }
    public function reviewers()
    {
        return $this->belongsToMany(Reviewer::class);
    }
}
