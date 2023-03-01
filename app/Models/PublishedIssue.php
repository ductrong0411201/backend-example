<?php

namespace App\Models;
use App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PublishedIssue extends Model
{
    use HasFactory;
    protected $table = 'published_issues';
    protected $primaryKey = 'journal_code';
    protected $fillable = ['journal_code', 'title', 'published_date'];

    public function articles()
    {
        return $this->hasMany(Article::class, 'journal_code');
    }
}
