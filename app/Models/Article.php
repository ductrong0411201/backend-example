<?php

namespace App\Models;
use App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    protected $table = 'articles';
    protected $fillable = ['title', 'abstract', 'key_word', "field",'file_path','status','journal_code'];

    public function authors()
    {
        return $this->belongsToMany(Author::class);
    }
    public function published_issue()
    {
        return $this->belongsTo(PublishedIssue::class,'journal_code','id');
    }
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
    public function meetings()
    {
        return $this->hasMany(Comment::class);
    }

}
