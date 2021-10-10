<?php

namespace App\Reducers\Api;

use App\Contracts\Reducers;
use Illuminate\Database\Eloquent\Collection;
use Mockery\Exception;

class ArticleListReducer implements Reducers
{
    protected $allowed = ['manufacturer', 'model','mainImage'];

    public function reduce(Collection $data): Array
    {
        return $data->map(function ($item) {
            //Create the ImageObject to match the FrontEnd requirement
            $item->mainImage = [
                'fileName' => $item->image,
//                'fullImage' => $item->fullImage,
//                'thumbImage' => $item->thumbImage
            ];
            // Return only allowed fileds
            return collect($item)->filter(function ($value, $key) {
                return (in_array($key, $this->allowed));
            });

        })->toArray();
    }

}
