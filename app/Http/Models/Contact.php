<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Contact extends Model
{
    use Searchable;

    /*public $primaryKey = 'username';

    public $incrementing = false;*/

    /**
     * Get the indexable data array for the model.
     *
     * @return array
     */
    public function toSearchableArray()
    {
        $record = $this->toArray();

        $record['_tags'] = explode(';', $array['tags']);

        $record['added_month'] = substr($record['created_at'], 0, 7);

        unset($record['tags'], $record['created_at'], $record['updated_at']);

        return $record;
    }

    /*public function searchableAs()
    {
        return config('scout.prefix').'custom_name';
    }*/
}
