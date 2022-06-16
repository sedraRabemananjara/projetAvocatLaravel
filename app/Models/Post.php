<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    public function post()
    {
        return $this->belongsTo(User::class);
    }

    public function imagePost()
    {
        return $this->hasMany(ImagePost::class);
    }


    protected $fillable = [
        'titre',
        'contenu',
        'urlImageEntete'
    ];

    protected $casts = [
        'date_publication' => 'datetime',
    ];

    public static function getImagePost($post)
    {
        $post->imagePost = ImagePost::where('post_id', $post->id)->get();
    }
    

}
