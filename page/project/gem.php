<!-- <div class="row gallery">
	<div class="container text-center">
		<ul class="rslides">
			<li><img src="/img/project/cog_01.jpg" alt="Casualties of the Gridiron"></li>
			<li><img src="/img/project/cog_02.jpg" alt="Casualties of the Gridiron"></li>
			<li><img src="/img/project/cog_03.jpg" alt="Casualties of the Gridiron"></li>
			<li><img src="/img/project/cog_04.jpg" alt="Casualties of the Gridiron"></li>
		</ul>
	</div>
</div>

<div class="clearfix"></div> -->

<p>
GEM Archive Search is a tool that I created for work in my spare time. It allows a user to specify a range of criteria and search through previous test logs. Due to the nature of the tool, I am refraining from posting any pictures that may display sensitive information.
</p>

<p>
The design for GEM Archive Search used my company's internal design template. Applying the framework was like using <a href="http://getbootstrap.com/">Twitter Bootstrap</a>, which cut down on the amount of front end work required. This allowed me to focus more on the backend code which is PHP. ajaxForm and jQuery process the form submission and the results appear on the same page.
</p>

<p>
One of the challenges with this project involved the log data that the user is trying to search. An archive is a collection of separate files that vary in size and are stored on a server as a flat file. Parsing an archive with hundreds to thousands of lines of text would be resource intensive and inefficient. I met with the developer responsible for these archives and he provided me with an API. Using the API, I could retrieve individual files from an archive using an SQL query. The result of the query resembled a DB2 table and from there I was able to search through the data.
</p>

<p>
The tool has proven to be a massive time saver. The old method required us to narrow down a list of archives as much as possible based on the name. Each archive would then have to be manually searched for whatever we were seeking. This new method searches hundreds of archives at a time and returns the result in a concise format.
</p>