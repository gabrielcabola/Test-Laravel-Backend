<?php namespace App\Repositories;

use Illuminate\Support\Collection;
use App\Models\Article;
use Mockery\Exception;


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

    public function findAll(array $fields): Collection
    {
        try {
            if (!empty($fields)) {
                return $this->articles->select($fields)->get();
            }
            return $this->articles->all();
        } catch (Exception $e) {
            throw $e;
        }
    }

}
