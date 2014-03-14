<div class="row gallery">
	<div class="container text-center video">
		<iframe src="//www.youtube.com/embed/KcGrwvYP6w8?rel=0" frameborder="0" allowfullscreen></iframe>
	</div>
</div>

<div class="clearfix"></div>

<p>
RFID Tracking System was my senior design project for college. The intent was to build an inventory management system using RFID  tags affixed to an item. RFID stands for <a href="http://en.wikipedia.org/wiki/Radio-frequency_identification">Radio Frequency Identification</a> and the items in this case were CD cases. The system loaded each case in a storage rack, one at a time. As the loading process occurred the RFID reader scanned the tag. The item information and location was then stored in a central database on a PC. To retrieve a case, a user selected the item from a list. The system then went to the stored location, grabbed the CD case and dropped it in a bin.
</p>

<p>
Myself and two other team members did the complete  design, build and code for this project. It used a <a href="http://www.skyetek.com/ProductsServices/EmbeddedRFIDReaders/SkyeModuleM1/tabid/82/Default.aspx">Skyetek M1 RFID reader</a> to scan the tags on the CD case. A <a href="http://www.parallax.com/catalog/microcontrollers/propeller">Parallax Propeller</a> microcontroller managed the motors, vacuum pump, h-bridge, and optical encoder. A PC ensured proper timing with the RFID reader and held the database of part information.
</p>

<p>
This was a challenging project from start to finish. All team members had a variety of skills that played an important role during the design and build process. We experimented with various mechanisms for the arm. For example, we tried using a CD/DVD drive to extend and retract the tray, but the range of motion was insufficient for our needs. Because of this, we had to build a custom tray. We needed a motor strong enough to control a lead screw for up/down motion and an arm with enough lateral range to reach the case.
</p>

<p>
The circuit boards used in this project were custom made and etched by us. We chose this approach over a breadboard to cut the amount of wires and space needed for mounting the electronics. Creating and etching the custom circuit boards turned out to be a fun learning process.
</p>

<p>
You may download the entire report here:

	<ul class="report">
		<li><a href="/docs/rfid_tracking_system.doc"><i class="fa fa-file-text"></i>RFID Tracking System.doc</a></li>
		<li><a href="/docs/rfid_tracking_system.pdf"><i class="fa fa-file-text"></i>RFID Tracking System.pdf</a></li>
	</ul>
</p>