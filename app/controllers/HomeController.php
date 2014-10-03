<?php

// Check app/routes.php to understand how a request gets directed to this controller
// Since route to this controller is defined as Controller then the function name in this controller should be prefixed with the type of the request
// For example:
// GET 		=> function getEmployees() {}
// PUT 		=> function putEmployees() {}
// POST 	=> function postEmployees() {}
// DELETE 	=> function deleteEmployees() {}
// On the other hand, if the router is defined as Resource then the function name can be index, show, create, etc.
// For more information go to http://laravel.com/docs/4.2/controllers
class HomeController extends BaseController {

	public function getIndex()
	{
		$data = array(
			'languages' => $this->getLanguages(),
		);

		// This will show a view called index in app/views/home and pass the data into the view, http://laravel.com/docs/4.2/responses#views
		return View::make('home/index', $data);
	}

	public function getMyPad()
	{
		// To know if a request has a specific input or get it
		if(Input::has('pad_id') && Input::has('language'))
		{
			$data = array(
				'padId'    => Input::get('pad_id'),
				'language' => Input::get('language'),
			);

			// This will show a view called collab in app/views/home and pass the data into the view
			return View::make('home/collab', $data);
		}
	}

	private function _generateRandomString($length = 10)
	{
		$characters   = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$randomString = '';
		for ($i = 0; $i < $length; $i++) {
			$randomString .= $characters[rand(0, strlen($characters) - 1)];
		}
		return $randomString;
	}

	public function postSubmit()
	{
		if (Input::has('language'))
		{
			$language = Input::get('language');
			$randString = $this->_generateRandomString();

			$data = array(
				'padId'   => $randString,
				'lang'    => $language,
			);

			return Redirect::to('my-pad?pad_id=' . $randString . '&language=' . $language);
		} else {
			$template = Input::get('template');
			$randString = $this->_generateRandomString();

			return Redirect::to('my-pad?pad_id=' . $randString . '&language=' . $language . '&template=' . $template);
		}
	}

	public function getTemplates()
	{
	}

	public function getLanguages()
	{
		return array(
			'Plain Text',
			'apl',
			'asterisk',
			'c',
			'c++',
			'c#',
			'clojure',
			'cobol',
			'coffeescript',
			'commonlisp',
			'css',
			'd',
			'diff',
			'dtd',
			'ecl',
			'eiffel',
			'erlang',
			'f#',
			'fortran',
			'gas',
			'gfm',
			'gherkin',
			'go',
			'groovy',
			'haml',
			'haskell',
			'haxe',
			'htmlembedded',
			'htmlmixed',
			'http',
			'jade',
			'java',
			'javascript',
			'jinja2',
			'julia',
			'livescript',
			'lua',
			'markdown',
			'mirc',
			'nginx',
			'ntriples',
			'ocaml',
			'octave',
			'pascal',
			'pegjs',
			'perl',
			'php',
			'pig',
			'properties',
			'puppet',
			'python',
			'q',
			'r',
			'rpm',
			'rst',
			'ruby',
			'rust',
			'sass',
			'scheme',
			'shell',
			'sieve',
			'smalltalk',
			'smarty',
			'smartymixed',
			'solr',
			'sparql',
			'sql',
			'stex',
			'tcl',
			'tiddlywiki',
			'tikiwiki',
			'toml',
			'turtle',
			'vb',
			'vbscript',
			'velocity',
			'verilog',
			'xml',
			'xquery',
			'yaml',
			'z80',
		);
	}
}
