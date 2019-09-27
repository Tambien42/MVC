<?php

namespace App\Controllers;

use \Core\View;
use App\Auth;

/**
 * Home controller
 *
 */
class Home extends \Core\Controller
{
	/**
     * Before filter
     *
     * @return void
     */
    protected function before()
    {
        //echo "(before) ";
        //return false;
    }

    /**
     * After filter
     *
     * @return void
     */
    protected function after()
    {
        //echo " (after)";
    }

	/**
	* Show the index page
	*
	* @return void
	*/
	public function indexAction()
	{
		//echo 'Hello from the index action in the Home controller!';
		/*View::render('Home/index.php', [
            'name' => 'Dave',
            'colours' => ['red', 'green', 'blue']
        ]);*/
		//\App\Mail::send('tambien_36@hotmail.com', 'Test', 'This is a test', '<h1>This is a test</h1>');
        View::renderTemplate('Home/index.html', [
            'colours' => ['red', 'green', 'blue']
        ]);
	}
}
