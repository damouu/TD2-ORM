<?php
namespace app\model;

class Carte extends \Illuminate\Database\Eloquent\Model {
    protected $table = 'carte';
    protected $primaryKey = 'id';
    public $timestamps = true;
}