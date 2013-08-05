<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/
	
	protected $layout = 'layouts.master';

	public function showWelcome()
	{
		return View::make('hello');
	}
	
	public function templateTest(){
		$mids = DB::table('template')
								->join('module', 'template.m_id', '=', 'module.m_id')
								->select('module.m_id', 'module.path')
								->where('template.t_id', 1)
								->where('module.type_id', 1)
								->get();
	
		$this->layout->content = View::make('test', array('mids' => $mids));
	}

}