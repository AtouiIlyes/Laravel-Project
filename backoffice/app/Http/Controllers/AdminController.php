<?php namespace App\Http\Controllers;

use App\Admin;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Produit;

class AdminController extends Controller {


	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function showProfile()
	{
		$admin=Admin::all();
		return view('admin/admin', ['users' => $admin]);

	}

}
