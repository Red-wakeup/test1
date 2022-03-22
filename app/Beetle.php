<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Beetle extends Model
{
    //
    protected $table = 'beetle';
    protected $primaryKey = 'id';
    protected $fillable = [
                            'name'
                            , 'scientific_name'
                            , 'variety'
                            , 'larval_stage'
                            , 'insect_life'
                        ];
}
