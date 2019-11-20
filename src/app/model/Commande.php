<?php
namespace app\model;

class Commande extends \Illuminate\Database\Eloquent\Model {
    protected $table = 'commande';
    protected $primaryKey = 'id';
    public $timestamps = false;

    public function infocarte() {
        return $this->belongsTo('\app\model\Carte', 'carte_id');
    }
}