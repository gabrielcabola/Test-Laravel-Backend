<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $primaryKey = 'articleNumber';

    /**
     *  Custom field calculated and injected as a field in the model
     * !!! File Extension could be in a config as an helper
     * @return string
     */
    public function getImageAttribute()
    {
        return sprintf('%s.jpg', $this->articleNumber);
    }

    /**
     *  Get the thumbnail URL
     * !!! Could be moved to a ImageHelper, URL should be set in a config file
     * @return string
     */
    public function getThumbImageAttribute()
    {
        return sprintf('https://thumbs.static-thomann.de/thumb/thumb120x/pics/prod/%s', $this->image);
    }

    /**
     * Get the Full ImgURL
     * !!! Could be moved to a ImageHelpe, Main URL should be set in a config file
     * @return string
     */
    public function getFullImageAttribute()
    {
        return sprintf('https://thumbs.static-thomann.de/thumb/thumb1000x/pics/prod/%s', $this->image);
    }

}
