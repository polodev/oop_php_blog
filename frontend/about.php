 <?php
 require '../php_library/class_frontend.php';
	$obj = new Frontend();
	$posts = $obj-> select_all_from_post();
 $nav = 'about';
 include 'header.php';
?>
    <div class="container">
        <div class="row">
            <div class="col-sm-8 blog-main">
			<h2>Our Team Members:</h2>
				<div class="row">
					<div class="col-md-4">
						<div class="thumbnail">
						<img src="img/team-member-1.jpg" alt="...">
							<div class="caption">
								<h4>Polo Dev</h4>
								<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
								<ul class="socials">
									<li><a href="#">facebook</a></li>
									<li><a href="#">LinkedIn</a></li>
									<li><a href="#">Twitter</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="thumbnail">
						<img src="img/team-member-2.jpg" alt="...">
							<div class="caption">
								<h4>Papia Nasrin</h4>
								<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
								<ul class="socials">
									<li><a href="#">facebook</a></li>
									<li><a href="#">LinkedIn</a></li>
									<li><a href="#">Twitter</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="thumbnail">
						<img src="img/team-member-2.jpg" alt="...">
							<div class="caption">
								<h4>Mousumi</h4>
								<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
								<ul class="socials">
									<li><a href="#">facebook</a></li>
									<li><a href="#">LinkedIn</a></li>
									<li><a href="#">Twitter</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				
				<div class="row">
					<div class="col-md-4">
						<div class="thumbnail">
						<img src="img/team-member-2.jpg" alt="...">
							<div class="caption">
								<h4>Israt Jahan</h4>
								<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
								<ul class="socials">
									<li><a href="#">facebook</a></li>
									<li><a href="#">LinkedIn</a></li>
									<li><a href="#">Twitter</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="thumbnail">
						<img src="img/parvez.jpg" alt="...">
							<div class="caption">
								<h4>Md.Parvez Alam</h4>
								<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
								<ul class="socials">
									<li><a href="#">facebook</a></li>
									<li><a href="#">LinkedIn</a></li>
									<li><a href="#">Twitter</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
            </div><!-- /.blog-main -->
    <!--        Side bar    -->
            <div class="col-sm-3 col-sm-offset-1 blog-sidebar">
              <div class="sidebar-module sidebar-module-inset">
                <h4>Don't have Account</h4>
                <a class="btn btn-primary btn-lg" href="registration_page.php">Register Here</a><br>
              </div>
                <?php include 'sidebar.php' ;?>
            </div><!-- /.blog-sidebar -->
        </div>
    </div>
    <footer class="blog-footer">
        <p>Blog created by Pervez, Papia, Israt, Mousumi, Polo.</p>
        <p>
        <p>Already have account <a href="login_page.php">Login Here</a></p>
        <a href="#">Back to top</a>
        </p>
    </footer>

<script src="../style/js/jquery-1.11.3.js"></script>
<script src="../style/js/bootstrap.js"></script>
</body>
</html>