<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class iou extends Model
{
    //
    protected $table='ious';
    public $primarykey='id';
    public $timestamp = true;
    public $fillable = ['name', 'comment', 'email', 'telephone', 'amount', 'time'];
}
