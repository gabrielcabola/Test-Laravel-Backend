<?php

namespace App\Repositories;

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
            return $this->articles
                ->when($fields, function ($query, $fields) {
                    $query->select($fields);
                })->get();
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
        try {
            return $this->articles
                ->when($fields, function ($query, $fields) {
                    $query->select($fields);
                })
                ->paginate($totalPerPage);
        } catch (Exception $e) {
            throw $e;
        }
    }

    public function get(int $id) {
        $article =  $this->articles->find($id);
        if (! empty($article)) {
            return $article;
        }
        return null;
    }
}
