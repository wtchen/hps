<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Peak extends Model
{
    protected $fillable = ['name', 'serial', 'elevation', 'prominence', 'lat', 'long', 'usgs', 'caltopo', 'featured_image', 'article_md', 'status'];

    public function region()
    {
        return $this -> belongsTo('App\Region');
    }
}
