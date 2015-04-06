<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

//use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Http\JsonResponse;

use App\articles;
use App\Api;
use App\Http\Requests\SaveArticleRequest;
use Illuminate\Support\Facades\Request;

class ApiController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('articles/index');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function show()
	{	
		$articles = articles::latest('created_at')->get();
	
        return response()->json(array(
            'status' => 'success',
            'articles' => $articles),
        	200
        );
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(SaveArticleRequest $request)
	{	/*
		$article = articles::create(['title'=>'test', 'category'=>'kategorija', 'imageUrl'=>'neki']);
		$article->save();
		//$title = $request->title;

		$article = new articles;
	   /* $article->title = Request::get('title');
	    $article->category = Request::get('category');
	    $article->imageUrl = Request::get('imageUrl');
	    $article->save();*/
		$data = articles::all();
		$data = Request::get('data');
		$data = json_decode(file_get_contents('php://input'),true);
		$data = Api::all();
		return $data;
		//return redirect('articles');
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
