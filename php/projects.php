<?php

$this->item = $item;

switch ($this->item) {
	case '':
	break;
	
	case 'cog':
		$this->name = "Casualties of the Gridiron";
		$this->url = "casualtiesofthegridiron.com";
	break;

	case 'uxe':
		$this->name = "UX Entertainment";
		$this->url = "uxentertainment.com";
	break;

	case 'revival41':
		$this->name = "REvival41";
		$this->url = "revival41.com";
	break;
}

?>