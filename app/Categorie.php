<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    public function article()
    {
        return $this->hasMany(Article::class, 'article_id');
    }
}
