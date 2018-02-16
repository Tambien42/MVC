<?php

namespace App\Controllers;

/**
 * Posts controller
 *
 */
class Posts extends \Core\Controller
{
	/**
	* Show the index page
	*
	* @return void
	*/
	public function index()
	{
		echo 'Hello from the index action in the Posts controller!';
	}

	/**
	* Show the add new page
	*
	* @return void
	*/
	public function index()
	{
		echo 'Hello from the addNew action in the Posts controller!';
	}

	/**
	 * Show the edit page
	 *
	 * @return void
	 */
	public function edit()
	{
		echo 'Hello from the edit action in the Posts controller!';
		echo '<p>Rooute parameters: <pre>' . htmlspecialchars(print_r($this->route_params, true)) . '</pre></p>';
	}
}