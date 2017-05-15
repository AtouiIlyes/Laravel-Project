<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Produit extends Model {

    public function vendeurs(){
        return $this->belongsTo('App\Vendeur');
    }


}
