<h1 class="text-center">About</h1>
<hr>

<p class="lead">
My name is Brad Hoover and I live in <a href="http://en.wikipedia.org/wiki/Beacon,_New_York">Beacon, New York</a>.
</p>

<p>
I love web development. The web is my sandbox and the languages that power it are my tools. There's something about building a concept into a product that's both functional and beautiful that is incredibly motivating. I find myself learning new tricks and techniques with every project and I hope that never changes. 
</p>

<div class="center-block watson-quote">
	<blockquote>
		<p>"There is no saturation point in education."</p>
		<footer>IBM Founder, Thomas J. Watson, Sr.</cite></footer>
	</blockquote>
</div>

<p class="lead work">
Do you need some work done?
</p>

<p>
I have experience with <strong>HTML, CSS, PHP, jQuery, MySQL, Photoshop</strong> and more. I feel most comfortable writing code, but will dabble with design from time to time. You can <a href="/portfolio">check out my previous work</a> or contact me using one of the methods below.
</p>

<form class="form-horizontal" role="form" id="contact-form" method="post" action="page/contact.php">
	<div class="form-group">
		<label for="name" class="col-sm-2 control-label">Name</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" id="name" name="name" placeholder="Please enter your name." required="">
		</div>
	</div>
	<div class="form-group">
		<label for="email" class="col-sm-2 control-label">Email</label>
		<div class="col-sm-10">
			<input type="email" class="form-control" id="email" name="email" placeholder="Please enter your email." required="">
		</div>
	</div>
	<div class="form-group">
		<label for="comments" class="col-sm-2 control-label">Comments</label>
		<div class="col-sm-10">
			<textarea class="form-control" rows="3" id="comments" name="comments" placeholder="Please enter your comments." required=""></textarea>
		</div>
	</div>
	<label style="display:block;position:absolute;left:-9999px">
		Please leave this checkbox blank
		<input type=checkbox name=honeypot value=1>
	</label>
	<div class="form-group">
		<div class="col-sm-offset-2 col-sm-10">
			<button type="submit" class="btn btn-primary">Submit</button>
			<div class="form-response"></div>
		</div>
	</div>
</form>

<script src="http://malsup.github.com/jquery.form.js"></script> 

<script> 
    // wait for the DOM to be loaded 
    $(document).ready(function() { 
        // bind 'myForm' and provide a simple callback function 
        $('#contact-form').ajaxForm(function() {
        	$('.form-response').fadeOut("slow", function() { 
        		$(this).html("<span class='success'><i class='fa fa-check'></i>Thanks for your email!</span>").fadeIn("slow"); 
        	});
        }); 
    }); 
</script> 