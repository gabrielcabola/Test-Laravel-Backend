<?php

namespace App\Contracts;

use Illuminate\Database\Eloquent\Collection;

interface Reducers
{
    /**
     *  Reduce command
     */
    public function reduce(Collection $data);
}
