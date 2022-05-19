 <section id="bg-bus" class="d-flex align-items-center">
    <div class="container">
      <?php if(!isset($_SESSION['login_id'])): ?>
      <center>	<button class="btn btn-info btn-lg" type="button" id="book_now">Book Now</button></center>
      <div class='container-fluid text-center' id='info'>
				<div class='row' style='margin:0;padding:0;'>
					<div class='col-lg-4'>
						<h5 style='color:#fcfcfc'>Safe and secure payment</h5>
							We support online, mobile and cash on delivery. Security is our main concern.
					</div>
						<div class='col-lg-4'>
		
						<h5 style='color:#fcfcfc'>Easy Booking</h5>
						<p class='text-muted' style='padding-left:5%;padding-right:5%;'>
							Customer can easily find and book their tickets online.
</p>
					</div>
				</div>
			</div>
      <?php else: ?>
        <h2>Welcome Back</h2>
      <?php endif; ?>
    </div>
  </section>
  <script>
  	$('#book_now').click(function(){
      uni_modal('Find Schedule','book_filter.php')
  })
  </script>