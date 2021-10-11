<?php namespace App\Repositories;

use Illuminate\Support\Collection;
use App\Models\Article;
use http\Exception;
use  Illuminate\Pagination\LengthAwarePaginator;

/**
 * Encapsulates the Model Article
 */
class ArticleRepository
{
    /**
     * @var Articles
     */
    protected $articles;

    /**
     * @param Articles [$articles]
     */
    public function __construct(Article $articles = null)
    {
        $this->articles = (null !== $articles ? $articles : (Article::create()));
    }

    /**
     * Find All Articles
     * @param array $fields
     * @return Collection
     */
    public function findAll(array $fields = []): Collection
    {
        try {
            if (!empty($fields)) {
                // Improve the query builder for specific fields
                return $this->articles->select($fields)->get();
            }
            return $this->articles->all();
        } catch (Exception $e) {
            throw $e;
        }
    }

    /**
     * Find All Articles Paginating
     * @param array $fields
     * @param int|int $totalPerPage
     * @return Collection
     */
    public function findAllPaginated(array $fields = [], int $totalPerPage = 10): LengthAwarePaginator
    {

        return $this->articles
            ->when($fields, function ($query, $fields) {
                $query->select($fields);
            })
            ->paginate($totalPerPage);


//        try {
//            if (!empty($fields)) {
//                 return $this->articles->paginate($totalPerPage)->select($fields)->get();
//            }
//            return $this->articles->paginate($totalPerPage)->all();
//
//        } catch (Exception $e) {
//            throw $e;
//        }
    }

}
