<?php
class HomeController extends Controller
{
	/**
	 * If exists, this method will be called by the route handler
	 * before the matching controller action will be executed. 
	 * So it´s a good place to do initialization stuffs.
	 */
	public function init()
	{
		// Set page title
		$this->view->title = 'Home';
	}

	public function index()
	{
		// Renders the home view (Views/Home/Index.phtml).
		// This is done using naming convention.
		$this->view->render();
	}
}