<!-- slider -->
		<div class="row">
			<div class="col-sm-12">
				<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                  <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                  </ol>
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <a href="<?=base_url('Home')?>">
                        <img src="<?= base_url('assets/image/1000x500.jpg')?>" class="d-block w-100" alt="...">
                      </a>
                      <div class="carousel-caption d-none d-md-block">
                        <h5>First Slide</h5>
                        <p>First caption on slide</p>
                      </div>
                    </div>
                    <div class="carousel-item">
                      <img src="<?= base_url('assets/image/1000x500.jpg')?>" class="d-block w-100" alt="...">
                      <div class="carousel-caption d-none d-md-block">
                        <h5>Second Slide</h5>
                        <p>Second caption on slide</p>
                      </div>
                    </div>
                    <div class="carousel-item">
                      <img src="<?= base_url('assets/image/1000x500.jpg')?>" class="d-block w-100" alt="...">
                      <div class="carousel-caption d-none d-md-block">
                        <h5>Third Slide</h5>
                        <p>Third caption on slide</p>
                      </div>
                    </div>
                  </div>
                  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
			</div>
		</div>
    <!-- akhir slider -->
		<!-- first section -->
		<div class="row" style="margin-bottom: 10px;">
			<div class="col-sm-12 row">
				<div class="col-sm-6">
					<h1 class="text-center text-uppercase font-weight-bold">Welcome to Eckhardt Steel and Alloys</h1>
					<div class="col-sm-12">
						<h6 class="text-uppercase text-muted font-weight-bold">use our valuable expertise for your factory</h6>
						<p class="text-justify">
         					Many factors combine to achieve the success of a trading business i.e. the right product mix, a broad knowledge of products & their applications, good business relation ships , logistics & financials expertise, proximity to the customer and last but not the least the appropriate range of support service.
						</p>
						<img src="https://placehold.it/650x500.jpg" class="img-fluid">
					</div>
				</div>
				<div class="col-sm-6">
					<div class="row">
						<div class="col-sm-12">
							<p class="text-justify">
								At Eckhardt, all these have been combined to creat a new dimension. Formed by a group of young professionals Eckhardt is one of the leading Manufacturers, Exporter & Supplier of Stainless Steel, Carbon Steel, Alloy Steel, Copper, Brass, Lead, Aluminium, Monel, Inconel, Hastalloy, as per standards Lead in form of: Pipes & Tubes in Seamless and Welded in all Grades Buttwelded Pipe Fittings, Forged Fittings & Hydraulic Fittings
							</p>
						</div>
						<div class="col-sm-5 offset-sm-1 card xp" style="margin-bottom: 10px;">
							<h4 class="font-weight-bold text-body text-center">Innovative Solutions</h4>
							<p class="card-body offset-sm-1 text-justify">Fastest, trustworthy and custom-configured – these have been the bywords of the ECKHARDT for more than 45 years.</p>
						</div>
						<div class="col-sm-5 offset-sm-1 card xp" style="margin-bottom: 10px;">
							<h4 class="font-weight-bold text-body text-center">Our Goal</h4>
							<p class="card-body text-justify">We strive to be the best in our industry. We care about our customers. We do our absolute best to honor our commitments.</p>
						</div>
						<div class="col-sm-5 offset-sm-1 card xp" style="margin-bottom: 10px;">
							<h4 class="font-weight-bold text-body text-center">Online Catalogue</h4>
							<p class="card-body text-justify">Click here for our Engineering Catalogue This catalogue includes stainless steel pipe, tubes and fittings,</p>
						</div>
						<div class="col-sm-5 offset-sm-1 card xp" style="margin-bottom: 10px;">
							<h4 class="font-weight-bold text-body text-center">Application Industry</h4>
							<p class="card-body text-justify">Stainless steel's strength and low maintenance make it the ideal material for a wide range of applications.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- first section-->
<!-- --------------------------------------------------------------------------------------------- -->
		<!-- second section -->
		<div class="row align-items-center" style="margin-bottom: 10px; background-image: url('<?= base_url('assets/image/fact2.jpg')?>'); background-repeat: no-repeat; background-size: cover; background-attachment: fixed;">
			<div class="col-sm-6" style="background: rgba(102, 255, 102,0.7); padding: 50px;">
				<h1 class="text-center" style="margin-top: 30px; font-weight: bold;">The factory or manufacturing plant is an industrial site</h1>
			</div>
			<div class="col-sm-6 ">
				<div class="col-sm-6 offset-sm-3 align-self-center">
					<p class="h3"><a href="#" class="btn btn-outline-danger font-weight-bold form-control" style="margin: 10px 0;">Learn More</a></p>
				</div>
			</div>
		</div>
		<!-- second section -->
<!-- -------------------------------------------------------------------------------------------- -->
		<!-- third section -->
		<div class="row" style="margin: 10px 0;">
			<div class="col-sm-5 offset-sm-1">
				<h2 class="text-uppercase font-weight-bold">Request <span class="text-warning">For Quote</span></h2>
				<p class="text-justify">
					A request for quotation (RFQ) is a document that an organization submits to one or more potential suppliers eliciting quotations for a product or service.
				</p>
				<?= form_open();?>
				<table class=" form-group" cellpadding="10">
					<tr>
						<td>
							<input type="text" name="name" placeholder=" Your Name">
						</td>
						<td>
							<input type="email" name="email" placeholder=" E-mail">
						</td>
					</tr>
					<tr>
						<td><input  type="text" name="text" placeholder=" Phone Number"></td>
					</tr>
					<tr>
						<td colspan="2">
							<button type="submit" class="text-uppercase btn btn-outline-warning text-uppercase font-weight-bold form-control">Submit Now</button>
						</td>
					</tr>
				</table>
				</form>
			</div>
			<div class="col-sm-5">
				<img src="<?= base_url('assets/image/factory_pipe.jpg')?>" class="img-fluid" width="100%">
			</div>
		</div>
		<!-- third section -->
<!-- --------------------------------------------------------------------------------------------- -->
		<!-- fourth section -->
		<div class="row mt-4 mb-4" style="background-image: url('<?= base_url('assets/image/factory_pipe.jpg')?>');">
			<div class="col-sm-12" style="background: rgba(51, 51, 51,0.8);">
				<h1 class="text-uppercase font-weight-bold text-warning" style="text-indent: 30px;"><span class="text-white">our</span> product</h1>
				<div class="col-sm-6">
					<p class="text-white">Manufacturer, Exporter and Stockiest of Stainless Steel, Carbon Steel Alloy Steel, Copper, Brass, Cupro Nickel.</p>
				</div>
			</div>
			<!-- ------------------------------------------ -->
			<div class="col-sm-12" style="background: rgba(51, 51, 51,0.8);">
		<div class="owl-carousel owl-theme">
    		<div class="item col-sm-12 bg-warning" style="padding: 5px;">
    			<img src="https://placehold.it/300x200.jpg">
    			<p>Description Image</p>
    		</div>
    		<div class="item col-sm-12 bg-warning" style="padding: 5px;">
    			<img src="https://placehold.it/300x200.jpg">
    			<p>Description Image</p>
    		</div>
    		<div class="item col-sm-12 bg-warning" style="padding: 5px;">
    			<img src="https://placehold.it/300x200.jpg">
    			<p>Description Image</p>
    		</div>
    		<div class="item col-sm-12 bg-warning" style="padding: 5px;">
    			<img src="https://placehold.it/300x200.jpg">
    			<p>Description Image</p>
    		</div>
    		<div class="item col-sm-12 bg-warning" style="padding: 5px;">
    			<img src="https://placehold.it/300x200.jpg">
    			<p>Description Image</p>
    		</div>
    		<div class="col-sm-12 bg-warning" style="padding: 5px;">
    			<div class="item">
    				<img src="https://placehold.it/300x200.jpg" class="img-fluid">
    				<p>Description Image</p>
    			</div>
    		</div>
		</div>
        	</div>
		</div>
		<!-- fourth section -->
<!-- --------------------------------------------------------------------------------------------- -->
		<!-- fifth section -->
	<div class="row">
		<div class="col-sm-12">
			<h2 class="text-uppercase font-weight-bold text-uppercase">application <span class="text-warning">industries</span></h2>
		</div>
		<div class="col-sm-4 images1">
			<img src="https://placehold.it/750x750.jpg" alt="Avatar" class="image img-thumbnail">
  			<div class="overlay1">
    			<div class="text1">Hello World1</div>
  			</div>
		</div>
		<div class="col-sm-4 images2">
			<img src="https://placehold.it/750x750.jpg" alt="Avatar" class="image img-thumbnail">
  			<div class="overlay2">
    			<div class="text2">Hello World2</div>
  			</div>
		</div>
		<div class="col-sm-4 images3">
			<img src="https://placehold.it/750x750.jpg" alt="Avatar" class="image img-thumbnail">
  			<div class="overlay3">
    			<div class="text3">Hello World3</div>
  			</div>
		</div>
		<div class="col-sm-4 images4" style="margin-top: 10px;">
			<img src="https://placehold.it/750x750.jpg" alt="Avatar" class="image img-thumbnail">
  			<div class="overlay4">
    			<div class="text4">Hello World4</div>
  			</div>
		</div>
		<div class="col-sm-4 images5" style="margin-top: 10px;">
			<img src="https://placehold.it/750x750.jpg" alt="Avatar" class="image img-thumbnail">
  			<div class="overlay5">
    			<div class="text5">Hello World5</div>
  			</div>
		</div>
		<div class="col-sm-4 images6" style="margin-top: 10px;">
			<img src="https://placehold.it/750x750.jpg" alt="Avatar" class="image img-thumbnail">
  			<div class="overlay6">
    			<div class="text6">Hello World6</div>
  			</div>
		</div>
	</div>
		<!-- fifth section -->
<!-- --------------------------------------------------------------------------------------------- -->
		<!-- sixth section -->
	<div class="row">
		<div class="col-sm-12">
			<h2 class="text-uppercase font-weight-bold">Our <span class="text-warning">Clients</span></h2>
            <section class="customer-logos slider">
               <div class="slide"><img src="https://placehold.it/500x500.jpg"></div>
               <div class="slide"><img src="https://image.freepik.com/free-vector/retro-label-on-rustic-background_82147503374.jpg"></div>
               <div class="slide"><img src="https://placehold.it/500x500.jpg"></div>
               <div class="slide"><img src="https://image.freepik.com/free-vector/blue-tech-logo_1103-822.jpg"></div>
               <div class="slide"><img src="https://placehold.it/500x500.jpg"></div>
               <div class="slide"><img src="https://image.freepik.com/free-vector/abstract-cross-logo_23-2147536124.jpg"></div>
               <div class="slide"><img src="https://placehold.it/500x500.jpg"></div>
               <div class="slide"><img src="https://image.freepik.com/free-vector/background-of-spots-halftone_1035-3847.jpg"></div>
               <div class="slide"><img src="https://image.freepik.com/free-vector/retro-label-on-rustic-background_82147503374.jpg"></div>
            </section>
		</div>
	</div>
		<!-- sixth section -->
		<!-- seventh section -->
	<div class="row">
		<div class="col-sm-12">
			<h2 class="text-uppercase font-weight-bold">Our  <span class="text-warning">Partners</span></h2>
            <section class="customer-logos slider">
               <div class="slide"><img src="https://placehold.it/500x500.jpg"></div>
               <div class="slide"><img src="https://image.freepik.com/free-vector/retro-label-on-rustic-background_82147503374.jpg"></div>
               <div class="slide"><img src="https://placehold.it/500x500.jpg"></div>
               <div class="slide"><img src="https://image.freepik.com/free-vector/blue-tech-logo_1103-822.jpg"></div>
               <div class="slide"><img src="https://placehold.it/500x500.jpg"></div>
               <div class="slide"><img src="https://image.freepik.com/free-vector/abstract-cross-logo_23-2147536124.jpg"></div>
               <div class="slide"><img src="https://placehold.it/500x500.jpg"></div>
               <div class="slide"><img src="https://image.freepik.com/free-vector/background-of-spots-halftone_1035-3847.jpg"></div>
               <div class="slide"><img src="https://image.freepik.com/free-vector/retro-label-on-rustic-background_82147503374.jpg"></div>
            </section>
		</div>
	</div>
		<!-- end seven section -->