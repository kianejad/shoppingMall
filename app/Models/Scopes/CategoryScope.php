<?php

namespace App\Models\Scopes;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Scope;

class CategoryScope implements Scope
{
    /**
     * Apply the scope to a given Eloquent query builder.
     */
    public function apply(Builder $builder, Model $model): void
    {
//        $builder->where('parent_id', null);
//        $builder->whereNull('parent_id');
//        $builder->whereNotNull('parent_id');
//        $builder->where('is_active', true);
//        $builder->where('is_active', false);
    }
}
