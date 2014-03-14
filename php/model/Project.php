<?php

class Project {
	public $item;
	public $name;
	public $url;
	public $prevName;
	public $prevURL;
	public $nextName;
	public $nextURL;
	
	public function __construct() {

	}

	public function project($item) {
		require_once('./php/project_list.php');
	}


}


?>