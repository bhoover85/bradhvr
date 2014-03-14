<div class="row gallery">
	<div class="container text-center">
		<ul class="rslides">
			<li><img src="/img/project/uxe_01.jpg" alt="UX Entertainment"></li>
			<li><img src="/img/project/uxe_02.jpg" alt="UX Entertainment"></li>
			<li><img src="/img/project/uxe_03.jpg" alt="UX Entertainment"></li>
			<li><img src="/img/project/uxe_04.jpg" alt="UX Entertainment"></li>
		</ul>
	</div>
</div>

<div class="clearfix"></div>

<p>
UX Entertainment is a boutique agency and full-service production company in Los Angeles, California.
</p>

<p>
<a href="https://twitter.com/renomsad">Reno Msad</a> did the design for UX Entertainment. I exported the design assets from Photoshop and was responsible for all code. The site is a one page design using HTML5 Boilerplate, CSS, PHP and jQuery.
</p>

<p>
UXE wanted a site that would showcase their variety of work across many media platforms. They also wanted to integrate their Instagram feed on the page, which I did by using the Instagram API. The videos are on Vimeo and both the videos and Instagram photos open in a jQuery lightbox. At higher resolutions the page scales to a large version that displays high quality images. The challenge with the large version was adapting the slideshow to the new dimensions. If the user switched between the two versions, the image offsets came out of alignment. To fix this I used the matchMedia Javascript method to get the size of the browser window and then set the appropriate offset.
</p>