<?php

namespace App\Models;

/**
 * Class Model
 * @package App\Models
 * @author zesai
 * @date 2020/7/16
 */
class Model extends \Illuminate\Database\Eloquent\Model
{
    public function scopeRecent($query)
    {
        return $query->orderBy('id', 'desc');
    }

    public function scopeOrdered($query)
    {
        return $query->orderBy('order', 'desc');
    }

}
