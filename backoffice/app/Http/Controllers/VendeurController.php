<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Vendeur;
use App\Vendeurs;
use Illuminate\Http\Request;

class VendeurController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$vendeur=Vendeur::all();
		return view('admin/vendeurs',['vendeurs'=>$vendeur]);
	}
	/**
	 * Display a listing of products by id
	 *
	 * @return Response
	 */

	public function listProduitByVendeur($id)
	{

		$vendeur= Vendeur::find($id);
		return view('admin/listProduitByVendeur',['vendeur'=>$vendeur]);
	}

	public function detailsVendeur($id)
	{

		$vendeur= Vendeur::find($id);
		return view('admin/DetaillesVendeur',['vendeur'=>$vendeur]);
	}
	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
