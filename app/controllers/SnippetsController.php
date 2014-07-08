<?php

class SnippetsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return Redirect::action('snippet.create');
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create($snippet = '')
	{
		return View::make('snippets.create', array('snippet'=>$snippet));
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//validate
		$validator = Validator::make(Input::all(), 
			array(
				'snippet' => 'required'
			)
		);

		if($validator->fails()){
			return Redirect::action('snippet.create');
		}
		//save
		$new_snippet = Snippet::create(array(
			'snippet' => Input::get('snippet')
		));

		if($new_snippet){
			return Redirect::action('snippet.show', $new_snippet->id);
		}else{
			return "couldnt do it man";
		}
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$snippet = Snippet::find($id);
		return View::make('snippets.show', array('snippet' => $snippet));
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$snippet = Snippet::find($id);

		if(!$snippet){
			return Redirect::action('snippet.create');
		}

		return $this->create($snippet->snippet);
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
