<?php
include('./conn/dbConn.php');
include('./partial/header.php');
?>
<!-- body section -->
<main>
	<div class="q_detail">
		<div class="q_containe">
			<div class="q_box">
				<img class="q_img" src="images/q0.svg" alt="" height="auto" width="auto">
				<h3>9.4</h3>
				<p>Ratings</p>
			</div>
			<div class="q_box">
				<img class="q_img" src="images/q1.svg" alt="" height="auto" width="auto">
				<h3>1 Mn+</h3>
				<p>Customer served</p>
			</div>
			<div class="q_box">
				<img class="q_img" src="images/q2.svg" alt="" height="auto" width="auto">
				<h3>500+</h3>
				<p>Verified Experts</p>
			</div>
		</div>
		<img class="bicon staire s1" src="images/staire.svg" alt="" height="28px" width="95px">
		<img class="bicon clipse e1" src="images/eclips.svg" alt="" height="60" width="51">
	</div>
	<div class="h_container">
		<div class="header_form">
			<div class="requirement">
				
				<h3>Requirment -</h3>
				<ul>
					<li class="flist l_active" data-filter="ps"><img src="images/r1.svg">Pest Control</li>
					<li class="flist" data-filter="dc"><img src="images/r2.svg">Deep Cleaning</li>
					<li class="flist" data-filter="pc"><img src="images/r3.svg">Pigion Control</li>
					<li class="flist" data-filter="ig"><img src="images/r4.svg">Invisible Grill</li>
					<li class="flist" data-filter="as"><img src="images/r5.svg">Anti-Virus Spray</li>
				</ul>
				

<!--// 
require_once('db.php');
$country_result = $conn->query('select * from countries');
?><select name="country" id="countries-list">
<option value="">Select Country</option>

if ($country_result->num_rows > 0) {
// output data of each row
while($row = $country_result->fetch_assoc()) {
?>
<option value=" echo $row["id"]; ?>">echo $row["country_name"]; ?></option>

}
}
?>
</select>
</br></br></br>
<select name="state" id="states-list">
<option value=''>Select State</option>
</select>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script>
$('#countries-list').on('change', function(){
var country_id = this.value;
$.ajax({
type: "POST",
url: "get_states.php",
data:'country_id='+country_id,
success: function(result){
$("#states-list").html(result);
}
});
});
</script> -->




			</div>
			<div class="requirement-item ps">
				<form class="form">
					<div class="drop_down">
						<input type="hidden" value="pets control" name="services">
						<select name="control" id="control">
							<option disabled selected>Select Control</option>
							<?php
							
							// $records = mysqli_query($db, "SELECT s_category FROM godata GROUP BY s_category ORDER BY s_category ASC");
							// while($data = mysqli_fetch_array($records))
							// {
							// echo "<option value='". $data['s_category'] ."'>" .$data['s_category'] ."</option>";
							// }
							?>
						</select>
						<select name="size" id="size">
							<option disabled selected>Select Size</option>
							<?php
							
							// $records = mysqli_query($db, "SELECT s_type From godata");
							// while($data = mysqli_fetch_array($records))
							// {
							// echo "<option value='". $data['s_type'] ."'>" .$data['s_type'] ."</option>";
							// }
							?>
						</select>
						
					</div>
					<div class="form_card">
						<div class="form_box">
							<span class="recom">Recommended</span>
							<h3>Cockroach Control and Ant Control</h3>
							<p class="p_t">Gel + Spray treatment’s, Cracks and Sealings, Mint Garbage Bags & Kitchen Drain Cleaning.</p>
							<p class="p_t">Complementary Ant Treatment
							</p>
							<div class="price">
								<a class="sprice" href="">Service Price</a>
								<p>As Service Charge</p>
								<a class="rprice" href=""> Rs.  5400/-</a>
							</div>
							<a class="booknow" data-toggle="modal" data-target="#modalLoginForm" href="">BOOK NOW</a>
						</div>
						<!--  -->
					</div>
				</form>
			</div>
			<div class="requirement-item dc">
				<form class="form">
					<div class="drop_down">
						<select name="control" id="control">
							<option value="control">Control</option>
							<option value="control1">Control1</option>
							<option value="control2">Contro2</option>
							<option value="control3">Control3</option>
						</select>
						<select name="house" id="house">
							<option value="3bhk">3BHK</option>
							<option value="2bhk">2BHK</option>
							<option value="1bhk">1BHK</option>
							<option value="rk">RK</option>
						</select>
					</div>
					<div class="form_card">
						<div class="form_box">
							<span class="recom">Recommended</span>
							<h3>Cockroach Control and Ant Control</h3>
							<p class="p_t">Gel + Spray treatment’s, Cracks and Sealings, Mint Garbage Bags & Kitchen Drain Cleaning.</p>
							<p class="p_t">Complementary Ant Treatment
							</p>
							<div class="price">
								<a class="sprice" href="">Service Price</a>
								<p>As Service Charge</p>
								<a class="rprice" href=""> Rs.  5400/-</a>
							</div>
							<a class="booknow" data-toggle="modal" data-target="#modalLoginForm" href="">BOOK NOW</a>
						</div>
						<!--  -->
					</div>
				</form>
			</div>
			<div class="requirement-item pc">
				<form class="form">
					<div class="drop_down">
						<select name="control" id="control">
							<option value="control">Control</option>
							<option value="control1">Control1</option>
							<option value="control2">Contro2</option>
							<option value="control3">Control3</option>
						</select>
						<select name="house" id="house">
							<option value="3bhk">3BHK</option>
							<option value="2bhk">2BHK</option>
							<option value="1bhk">1BHK</option>
							<option value="rk">RK</option>
						</select>
					</div>
					<div class="form_card">
						<div class="form_box">
							<span class="recom">Recommended</span>
							<h3>Cockroach Control and Ant Control</h3>
							<p class="p_t">Gel + Spray treatment’s, Cracks and Sealings, Mint Garbage Bags & Kitchen Drain Cleaning.</p>
							<p class="p_t">Complementary Ant Treatment
							</p>
							<div class="price">
								<a class="sprice" href="">Service Price</a>
								<p>As Service Charge</p>
								<a class="rprice" href=""> Rs.  5400/-</a>
							</div>
							<a class="booknow" data-toggle="modal" data-target="#modalLoginForm" href="">BOOK NOW</a>
						</div>
						
					</div>
				</form>
			</div>
			<div class="requirement-item ig">
				<form class="form">
					<div class="drop_down">
						<select name="control" id="control">
							<option value="control">Control</option>
							<option value="control1">Control1</option>
							<option value="control2">Contro2</option>
							<option value="control3">Control3</option>
						</select>
						<select name="house" id="house">
							<option value="3bhk">3BHK</option>
							<option value="2bhk">2BHK</option>
							<option value="1bhk">1BHK</option>
							<option value="rk">RK</option>
						</select>
					</div>
					<div class="form_card">
						<div class="form_box">
							<span class="recom">Recommended</span>
							<h3>Cockroach Control and Ant Control</h3>
							<p class="p_t">Gel + Spray treatment’s, Cracks and Sealings, Mint Garbage Bags & Kitchen Drain Cleaning.</p>
							<p class="p_t">Complementary Ant Treatment
							</p>
							<div class="price">
								<a class="sprice" href="">Service Price</a>
								<p>As Service Charge</p>
								<a class="rprice" href=""> Rs.  5400/-</a>
							</div>
							<a class="booknow" data-toggle="modal" data-target="#modalLoginForm" href="">BOOK NOW</a>
						</div>
						
					</div>
				</form>
			</div>
			<div class="requirement-item as">
				<form class="form">
					<div class="drop_down">
						<select name="control" id="control">
							<option value="control">Control</option>
							<option value="control1">Control1</option>
							<option value="control2">Contro2</option>
							<option value="control3">Control3</option>
						</select>
						<select name="house" id="house">
							<option value="3bhk">3BHK</option>
							<option value="2bhk">2BHK</option>
							<option value="1bhk">1BHK</option>
							<option value="rk">RK</option>
						</select>
					</div>
					<div class="form_card">
						<div class="form_box">
							<span class="recom">Recommended</span>
							<h3>Cockroach Control and Ant Control</h3>
							<p class="p_t">Gel + Spray treatment’s, Cracks and Sealings, Mint Garbage Bags & Kitchen Drain Cleaning.</p>
							<p class="p_t">Complementary Ant Treatment
							</p>
							<div class="price">
								<a class="sprice" href="">Service Price</a>
								<p>As Service Charge</p>
								<a class="rprice" href=""> Rs.  5400/-</a>
							</div>
							<a class="booknow" data-toggle="modal" data-target="#modalLoginForm" href="">BOOK NOW</a>
						</div>
						
					</div>
				</form>
			</div>
		</div>
		<img src="images/triangle.svg" class="triangle t1 bicon" alt="">
		<img src="images/triangle.svg" class="triangle t2 bicon" alt="">
		<img src="images/cross.svg" class="cross x1 bicon" alt="">
	</div>
</main>
<hr>
<!-- about section -->
<section id="aboutus">
	<div class="aboutus">
		<div class="a_left">
			<div class="content">
				<h2>We are the best service provider
				company</h2>
				<img class="hide-img" src="images/about.png">
				<p>Your happiness is our goal. If your’re not happy, we’ll work to make it right. Our freindly customer service agents are available 24 hours a day, 7 days a week. The Spotless Happiness zGaurentee only applies when you
					look and pay for a service directly through the Spotless platform. A local,  professional company with fully trained
					and insured cleaners
					which prides itself on delivering customer satisfaction,
					fairness and high standards.
				</p>
			</div>
			<img src="images/triangle.svg" class="triangle t3 bicon" alt="" height="45px" width="45px">
			<img src="images/cross.svg" class="cross x2 bicon" height="35px" width="35px">
		</div>
		<div class="a_right">
			<div class="content">
				<img src="images/about1.png" alt="" height="auto" width="80%">
				<img class="a_2" src="images/about.png" alt="" height="auto" width="100%">
			</div>
			<img src="images/triangle.svg" class="triangle t4 bicon" alt="">
			<img class="eclipse e2 bicon" src="images/eclips.svg" alt="" height="60" width="51">
			<img class="eclipse e3 bicon" src="images/eclips.svg" alt="" height="60" width="51">
			<img class="eclipse e4 bicon" src="images/eclips.svg" alt="" height="60" width="51">
		</div>
	</div>
</section>
<section id="point">
	<div class="point_container">
		<div class="point_box">
			<div class="sub_box">
				<img src="images/p001.png" alt="" height="62px" width="62px">
				<h3>Expert Team</h3>
				<p>Our staff are experienced and fully trained in all aspects of services. They take pride in their work until the job meets ours and your with high standards.</p>
			</div>
			<div class="sub_box">
				<img src="images/p002.png" alt="" height="62px" width="62px">
				<h3>100% Satisfaction</h3>
				<p>We offer a 100% Satisfaction Guarantee on all of our bookings, leaving you confident that you have chosen the right company to carry out your work.</p>
			</div>
			<div class="sub_box">
				<img src="images/p003.png" alt="" height="62px" width="62px">
				<h3>Eco- friendly</h3>
				<p>Where we can, we use cleaning & other products that are environmentally friendly. As part of our health and safety.</p>
			</div>
			<div class="sub_box">
				<img src="images/p004.png" alt="" height="62px" width="62px">
				<h3>Competitive Prices</h3>
				<p>Where we can, we use cleaning & other products that are environmentally friendly. As part of our health and safety.</p>
			</div>
		</div>
		<img class="duck" src="images/pimg.png" alt="" height="450px" width="330px">
		<img class="eclipse e5 bicon" src="images/eclips.svg" alt="" height="60" width="51">
		<img class="eclipse e6 bicon" src="images/eclips.svg" alt="" height="60" width="51">
		<img class="eclipse e7 bicon" src="images/eclips.svg" alt="" height="60" width="51">
		<img class="eclipse e8 bicon" src="images/eclips.svg" alt="" height="60" width="51">
		<img class="eclipse e9 bicon" src="images/eclips.svg" alt="" height="60" width="51">
	</div>
</section>
<hr>
<section id="hwork">
	<div class="w_container">
		<div class="w_content">
			<h2>How it work</h2>
			<div class="w_box">
				<div class="w_dbox">
					<div class="number">
						<h3>1.</h3>
					</div>
					<h4>Get a Call</h4>
					<p>Give us a call or get a call by filling the booking form and send it, the our customer support executive will connect within mintues.</p>
				</div>
				<div class="w_dbox">
					<div class="number">
						<h3>2.</h3>
					</div>
					<h4>Set up your service plan</h4>
					<p>Choose a single service or year plan, Date and time that works for you, we schedule your bookings to make things easy.</p>
				</div>
				<div class="w_dbox">
					<div class="number">
						<h3>3.</h3>
					</div>
					<h4>Sit Back & Relax</h4>
					<p>An experienced, fully equipped & reliable professional will be there on time. Delivering customer satisfaction with high standards.</p>
				</div>
			</div>
		</div>
		<img class="cross bicon x3" src="images/cross.svg" alt="" height="35px" width="35px">
		<img class="cross bicon x4" src="images/cross.svg" alt="" height="35px" width="35px">
		<img class="cross bicon x5" src="images/cross.svg" alt="" height="35px" width="35px">
		<img class="eclips bicon e10" src="images/eclips.svg" alt="" height="50px" width="50px"><img class="eclips bicon e11" src="images/eclips.svg" alt="" height="50px" width="50px"><img class="eclips bicon e12" src="images/eclips.svg" alt="" height="50px" width="50px">
	</div>
</section>
<hr>
<section id="testimonial">
	<h2 class="heading">What Clients say about our services</h2>
	<div class="testimonial">
		<div class="owl-carousel owl-theme t_cont">
			<div class="item t-box">
				<div class="t_left">
					<div class="f_box">
						<div class="s_box">
							<img src="images/t001.png" alt="" height="100px" width="100px">
							<h3>Mr. Preetam Reddy</h3>
							<h4>Kavuril Hills, Madhapur</h4>
							<div class="rating">
								<span><i class="fa fa-star"></i></span>
								<span><i class="fa fa-star"></i></span>
								<span><i class="fa fa-star"></i></span>
								<span><i class="fa fa-star"></i></span>
								<span><i class="fa fa-star"></i></span>
							</div>
						</div>
					</div>
				</div>
				<div class="t_right">
					<p>Tried a lot of cleanning services to get my sofas &Mattress cleaning but no one has given rightsolutions. Spotless team provide such a qualityservices to my expectations... so I prefer <span>“SPOTLESS TEAM”</span></p>
				</div>
			</div>
		</div>
		<img class="cross bicon x6" src="images/cross.svg" alt="" height="35px" width="35px">
		<img class="cross bicon x7" src="images/cross.svg" alt="" height="35px" width="35px">
		<img class="eclips bicon e13" src="images/eclips.svg" alt="" height="50px" width="50px">
		<img class="eclips bicon e14" src="images/eclips.svg" alt="" height="50px" width="50px">
		<img class="eclips bicon e15" src="images/eclips.svg" alt="" height="50px" width="50px">
		<img class="eclips bicon e16" src="images/eclips.svg" alt="" height="50px" width="50px">
		<img class="eclips bicon e17" src="images/eclips.svg" alt="" height="50px" width="50px">
	</div>
</section>
<hr>
<section id="partner">
	<h2 class="heading">Valuable Partners</h2>
	<div class="partner">
		<div class="owl-carousel owl-theme p_container">
			<div class="item p_box">
				<img src="images/pro1.png" alt="" height="auto" width="100%">
			</div>
			<div class="item p_box">
				<img src="images/pro2.png" alt="" height="auto" width="100%">
			</div>
			<div class="item p_box">
				<img src="images/pro3.png" alt="" height="auto" width="80%">
			</div>
			<div class="item p_box">
				<img src="images/pro4.png" alt="" height="auto" width="100%">
			</div>
		</div>
		
		<img class="eclips bicon e18" src="images/eclips.svg" alt="" height="50px" width="50px">
		<img class="eclips bicon e19" src="images/eclips.svg" alt="" height="50px" width="50px">
		<img class="eclips bicon e20" src="images/eclips.svg" alt="" height="50px" width="50px">
		<img class="eclips bicon e21" src="images/eclips.svg" alt="" height="50px" width="50px">
		<img class="eclips bicon e22" src="images/eclips.svg" alt="" height="50px" width="50px">
		<img class="eclips bicon e23" src="images/eclips.svg" alt="" height="50px" width="50px">
		<img class="eclips bicon e24" src="images/eclips.svg" alt="" height="50px" width="50px">
		<img class="eclips bicon e25" src="images/eclips.svg" alt="" height="50px" width="50px">
		<img class="eclips bicon e26" src="images/eclips.svg" alt="" height="50px" width="50px">
	</div>
</section>
<!-- footer section -->
<div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
	aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header text-center">
				<h4 class="modal-title w-100 font-weight-bold">Details</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body mx-3">
				<form>
					<div class="md-form mb-3">
						<input type="text" class="form-control validate" required placeholder="Name">
					</div>
					<div class="md-form mb-3">
						<input type="email" class="form-control validate" required placeholder="Email">
					</div>
					<div class="md-form mb-3">
						<input type="number" class="form-control validate" required placeholder="Phone">
					</div>
					<div class="md-form mb-3">
						<input type="text" class="form-control validate" required placeholder="Service">
					</div>
					<div class="md-form mb-3">
						<textarea class="form-control validate" required placeholder="Message"></textarea>
					</div>
					<div class="md-form mb-3">
						<button class="sub_btn" type="submit">Submit</button>
					</div>
				</form>
			</div>
			
		</div>
	</div>
</div>
<?php
include('./partial/footer.php');
?>