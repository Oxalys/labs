<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    // many-to-many
    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'article_tag');
    }
    //

    public function user() {
        return $this->belongsTo('App\User', 'user_id');
    }

    public function categorie() {
        return $this->belongsTo('App\Categorie', 'categorie_id');
    }
}
