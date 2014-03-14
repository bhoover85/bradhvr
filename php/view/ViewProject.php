<?php

class ViewProject {
	private $project;
	private $getProject;
	
	public function __construct($project, $getProject) {
		$this->project = $project;
		$this->getProject = $getProject;
	}

	public function getName() {
		return $this->project->name;
	}

	public function getURL() {
		return $this->project->url;
	}

	public function getPrevName() {
		return $this->project->prevName;
	}

	public function getPrevURL() {
		return $this->project->prevURL;
	}

	public function getNextName() {
		return $this->project->nextName;
	}

	public function getNextURL() {
		return $this->project->nextURL;
	}

}


?>