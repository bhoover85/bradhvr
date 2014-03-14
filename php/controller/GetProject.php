<?php

class GetProject {

	private $project;
	
	public function __construct($project) {
		$this->project = $project;
	}

	public function project($item) {
		$this->project->project($item);
	}

}


?>