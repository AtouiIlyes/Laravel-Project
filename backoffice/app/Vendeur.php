<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Vendeur extends Model {

    public function produits(){
        return $this->hasMany('App\Produit');
    }
}
