<?php

namespace App\Http\Controllers\ApiV1;

use Illuminate\Http\Request;
use App\Reducers\Api\ArticleListReducer;
use App\Repositories\ArticleRepository;


class ApiArticlesController extends ApiController
{
    protected $repo;
    protected $request;

    public function __construct(Request $request, ArticleRepository $repo)
    {
        $this->request = $request;
        $this->repo = $repo;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function listAll(ArticleListReducer $reducer)
    {
        try {
            $articles = $this->repo->findAll(['manufacturer', 'model', 'articleNumber']);
            if ($articles->count() === 0) {
                return response()->json(['status' => true, 'message' => 'No Articles found / empty']);
            }
            return response()->json([
                'status' => true,
                'articles' => $reducer->reduce($articles),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'error' => $e->getMessage(),
            ]);
        }
    }
}
