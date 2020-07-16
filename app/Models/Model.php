<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;

/**
 * Class Model
 * @package App\Models
 * @mixin Eloquent
 * @author zesai
 * @date 2020/7/16
 */
class Model extends \Illuminate\Database\Eloquent\Model
{
    /**
     * @param Builder $query
     * @return mixed
     * @author zesai
     * @date 2020/7/16
     */
    public function scopeRecent($query)
    {
        return $query->orderBy('id', 'desc');
    }

    /**
     * @param Builder $query
     * @return mixed
     * @author zesai
     * @date 2020/7/16
     */
    public function scopeOrdered($query)
    {
        return $query->orderBy('order', 'desc');
    }

}
