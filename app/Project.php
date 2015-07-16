<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model {

    protected $table = 'project';

    public function category()
    {
        return $this->belongsTo('Category', 'author_id');
    }
}
