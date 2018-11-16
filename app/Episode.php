<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Episode extends Model
{
    use Sluggable;

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    public function podcast()
    {
        $this->belongsTo(Podcast::class);
    }

    public function audio_file()
    {
        return $this->hasOne(AudioFile::class);
    }
}
