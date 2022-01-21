<footer>
			<div class="footer">
				<div class="section1">
					<img src="Spotlessgo.png" alt="" height="" width="">
					<p>Welcome to Spotless.<br>
					We are here because you have other better things to do. At spotless we strive to be price competitive, and always provide value for money using cost efficiencies across our equipment, staff and innovations.</p>
				</div>
				<div class="section2">
					<h5>About Us</h5>
					<div class="f_body">
						<a href="">Vision & Mission</a>
						<a href="">Our Team</a>
						<a href="http://localhost/spotlessgo/services/">Services</a>
						<a href="http://localhost/spotlessgo/">Projects</a>
						<a href="http://localhost/spotlessgo/contact.php">Contact Us</a>
					</div>
				</div>
				<div class="section3">
					<h5>Privacy Policy</h5>
					<div class="f_body">
						<a href="">FAQ</a>
						<a href="">News</a>
						<a href="">Testimonial</a>
					</div>
				</div>
				<div class="section4">
					<h5>Spotless Facilities Pvt. Ltd.</h5>
					<div class="f_body">
						<a href="">Leela Nagar, Ameerpet, Hyderabad - 500016, Telangana, India</a>
						<div>
							<span>Phone: </span><a href="">+91 9603397111 & +91 9603397222 </a>
						</div>
						<div>
							<span>Email: </span><a href="">info@spotlessgo.com</a>
						</div>
						<div>
							<span>Office Time:</span><a href="">Monday-Sunday 8am - 8pm</a>
						</div>
						
					</div>
				</div>
			</div>
			<div class="bottom_bar">
				<a href="#">Support</a>
				<a href="#">Privacy Policy</a>
				<a href="#">Terms and Condition</a>
			</div>
		</footer>
		<script type="text/javascript" src="http://localhost/spotlessgo/js/jQuery v3.6.0.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
		<script type="text/javascript" src="http://localhost/spotlessgo/js/main.js"></script>
		<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
	<script>
  AOS.init();
</script>


<script type="text/javascript">
	

$(document).ready(function(){
if ($(window).width() < 750) {


			$(".menu-icon").click(function(){
  $(".navb_item").show();
});
			$(".menu_close").click(function(){
  $(".navb_item").hide();
}); 
   
}

});


</script>
<script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>
		<script>
			$(document).ready(function(){
		$('.flist').click(function(){
		const value = $(this).attr('data-filter');
		if (value == ''){
			$('.requirement-item').show('1000');
		}else{
			$('.requirement-item').not('.'+value).hide('1000');
			$('.requirement-item').filter('.'+value).show('1000');
		}
		})
		//active claass
		$('.flist').click(function(){
		$(this).addClass('l_active').siblings().removeClass('l_active');
		})
		})

			$('.c_dd').click(function(){
        $(this).siblings(".tog_dd").toggleClass('hidden');
});






		</script>

		<script type="text/javascript">
			var owll = $("#testimonial .owl-carousel").owlCarousel({
	loop:true,
	center:true,
	
	items: 1,
	dots:false,
	
	
	});
		</script>
		<script type="text/javascript">
			var owll = $("#partner .owl-carousel").owlCarousel({
	loop:true,
	center:true,
	margin: 20,
	items: 4,
	dots:false,
	// responsive: true,
	
	
	});
		</script>
	</body>
</html>