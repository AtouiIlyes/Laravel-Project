<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'WelcomeController@index');
Route::get('/index', function()
{
	return view('admin/index', ['name' => 'James']);
});



Route::get('/ajouterCategorie', function()
{
	return view('admin/ajouterCategorie', ['name' => 'James']);
});

Route::get('/modifierCategorie', function()
{
	return view('admin/modifierCategorie', ['name' => 'James']);
});

Route::get('/vendeurs', function()
{
	return view('admin/vendeurs', ['name' => 'James']);
});






Route::get('/nouveau_message', function()
{
	return view('admin/newmessage', ['name' => 'James']);
});



Route::get('/message_details', function()
{
	return view('admin/message_details', ['name' => 'James']);
});


Route::get('/modifierVendeur', function()
{
	return view('admin/modifierVendeur', ['name' => 'James']);
});


Route::get('/modifierClient', function()
{
	return view('admin/modifierClient', ['name' => 'James']);
});


Route::get('/login', function()
{
	return view('admin/login', ['name' => 'James']);
});

Route::resource('produits', 'ProduitController');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
Route::get('/test', 'AdminController@showProfile');
Route::get('/suggestion', 'SuggestionController@index');
Route::get('/categorie', 'CategorieController@index');
Route::get('/produits', 'ProduitController@index');
Route::get('/message', 'MessageController@index');
Route::get('/clients', 'ClientController@index');
Route::get('/vendeurs', 'VendeurController@index');
Route::get('/detaillesVendeur/{id}', 'VendeurController@detailsVendeur');
Route::get('/listProduitByVendeur/{id}', 'VendeurController@listProduitByVendeur');