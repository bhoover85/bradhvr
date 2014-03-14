<?php

function buildURL($name) {
	return "/portfolio/".strtolower(str_replace(" ", "-", $name));
}

$this->item = $item;

switch ($this->item) {
	case '':
	break;
	
	case 'cog':
		$this->name 	= "Casualties of the Gridiron";
		$this->url 		= "casualtiesofthegridiron.com";
		$this->prevName = "";
		$this->prevURL 	= "";
		$this->nextName = "UX Entertainment";
		$this->nextURL 	= buildURL($this->nextName);
	break;

	case 'uxe':
		$this->name 	= "UX Entertainment";
		$this->url 		= "uxentertainment.com";
		$this->prevName = "Casualties of the Gridiron";
		$this->prevURL	= buildURL($this->prevName);
		$this->nextName	= "REvival 41";
		$this->nextURL 	= buildURL($this->nextName);
	break;

	case 'revival41':
		$this->name 	= "REvival 41";
		$this->url 		= "revival41.com";
		$this->prevName = "UX Entertainment";
		$this->prevURL 	= buildURL($this->prevName);
		$this->nextName = "Thin Crust Square";
		$this->nextURL 	= buildURL($this->nextName);
	break;

	case 'tcs':
		$this->name 	= "Thin Crust Square";
		$this->url 		= "thincrustsquare.com";
		$this->prevName = "REvival 41";
		$this->prevURL 	= buildURL($this->prevName);
		$this->nextName = "GEM Archive Search";
		$this->nextURL 	= buildURL($this->nextName);
	break;

	case 'gem':
		$this->name 	= "GEM Archive Search";
		$this->prevName = "Thin Crust Square";
		$this->prevURL 	= buildURL($this->prevName);
		$this->nextName = "RFID Tracking System";
		$this->nextURL 	= buildURL($this->nextName);
	break;

	case 'rfid':
		$this->name 	= "RFID Tracking System";
		$this->prevName = "GEM Archive Search";
		$this->prevURL 	= buildURL($this->prevName);
		$this->nextName = "";
		$this->nextURL 	= "";
	break;
}

?>