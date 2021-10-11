<?php

namespace App\Reducers\Api;

use App\Contracts\Reducers;
use Illuminate\Database\Eloquent\Collection;
use Mockery\Exception;

/**
 * Class ArticleListReducer
 * @package App\Reducers\Api
 */
 */
class ArticleListReducer implements Reducers
{
    protected $allowed = ['manufacturer', 'model', 'mainImage'];

    /**
     * Reduce Action
     * @param Collection $data
     * @return array
     *
     *  Extra fields:
     * 'fullImage' => $item->fullImage,
     * 'thumbImage' => $item->thumbImage
     */
    public function reduce(Collection $data): array
    {
        return $data->map(function ($item) {
            // Create the ImageObject to match the FrontEnd requirement
            $item->mainImage = [
                'fileName' => $item->image,
            ];
            // Reduce
            return collect($item)->filter(function ($value, $key) {
                return (in_array($key, $this->allowed));
            });

        })->toArray();
    }

}
