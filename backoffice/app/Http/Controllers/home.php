<?php namespace App\Http\Controllers;

class HomePageController extends BaseController {



    public function showHomepage()
    {
        return view::make('ajouterFournisseur');
    }

}
