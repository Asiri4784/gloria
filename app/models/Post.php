<?php

/**
 * Created by PhpStorm.
 * User: Jaguar Bonaventura
 * Date: 11/17/2015
 * Time: 1:32 AM
 */
class Post extends Eloquent
{
    public function scopeSearch($query, $search){
        return $query->where('name', 'LIKE', "%$search%");
    }
}