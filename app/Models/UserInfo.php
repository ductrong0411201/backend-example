<?php

namespace App\Models;
use App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserInfo extends Model
{
    use HasFactory;
    protected $table = 'user_information';
    protected $fillable = ['name', 'mobile', 'email', 'date_of_birth', 'address', 'login_name', 'password', 'role'];

    public function editor()
    {
        return $this->belongsTo(Editor::class);
    }
    public function reviewer()
    {
        return $this->belongsTo(Reviewer::class);
    }
    public function author()
    {
        return $this->belongsTo(Author::class);
    }
}
