<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Models\PostImage;

class Post extends Model
{
    protected $fillable = ['name', 'description', 'seo_description', 'content'];

    public function postImages()
    {
      return $this->hasMany(PostImage::class);
    }
}
