<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Record extends Model
{
    //
    protected $table = 'record';
    protected $primaryKey = 'id';
    protected $fillable = [
                              'beetle_id'
                            , 'parents_info'
                            , 'generations_info'
                            , 'source'
                            , 'origin'
                            , 'temperature'
                            , 'status'
                            , 'food'
                            , 'change_cycle'
                        ];
}
