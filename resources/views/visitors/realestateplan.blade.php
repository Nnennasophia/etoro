@extends("layouts.spacedcustomlayout")

@section('body')




<main class="ourservices-page">
	<!-- contents of the page -->
	<section>
		<div class="paragraph realestate-header header">
    		<h1>
    			<span class="line"></span>fundflux fx <span class="line"></span>
    		</h1>
    	</div>
    	<div class="paragraph">
    		<h2>hot deals from real estate</h2>
    		<p>
    			Real estate investment involves the purchase, ownership, management, rental and/or sale of real estate for profit. Improvement of realty property as part of a real estate investment strategy is generally considered to be a sub-specialty of real estate investing called real estate development. Real estate is an asset form with limited liquidity relative to other investments (such as stocks or bonds that openly trade on financial markets). It is also capital intensive (although capital may be gained through mortgage leverage) and is highly cash flow dependent. If these factors are not well understood and managed by the investor, real estate becomes a risky investment.
    		</p>
    	</div>
	</section>

	<!-- main body section-->
	<section>
		<!-- first row -->
		<div class="flex services realestate">
			<div class="left">
				<h3>&dollar; 620,000</h3>
				<p>
					Zak Hale 9 | Offered for $620,000 | 4 BR/ 4.5 BA | 2,460 sq. ft. Interior.
				</p>
				<a href="#" target="_blank" class="services-cta realestate">view details</a>
			</div>
		<div class="right">
			<div class="img-container">
				<img src="../images/ourservice-realestate-img1.jpg" alt="forex image">
			</div>
		</div>
	   </div>

	   <!-- second row -->
		<div class="flex services">
			<div class="left">
			<div class="img-container">
				<img src="../images/ourservice-realestate-img2.jpg" alt="real estate image">
			</div>
			</div>
			<div class="right">
				<h3>&dollar; 1,450,000</h3>
				<p>
				 This stunning modern-styled townhome located within the private golf and ocean club community of Kohanaiki is a 4 BR/ 4.5 BA dream with a lounge pool, spa, and detached guest ohana
				</p>
				<a href="#" target="_blank" class="services-cta realestate">view details</a>
		     </div>
		    </div>

		    <!-- third row -->
		   <div class="flex services">
			<div class="left">
			<h3>&dollar;350,000</h3>
				<p>
				4/5.5/2 |5,472 sqft |8,060 sqft lot Location:Afton oaks
				</p>
				<a href="#" target="_blank" class="services-cta realestate">view details</a>	
			</div>
			<div class="right">
			<div class="img-container">
				<img src="{{asset("images/ourservice-realestate-img3.jpg")}}" alt="gold investment image">
			</div>
			</div>
		   </div>
            
            <!-- fourth row -->
		   <div class="flex services">
			<div class="left">
			<div class="img-container">
				<img src="{{asset("images/ourservice-realestate-img4.jpg")}}" alt="retirement plan image">
			</div>	
			</div>
			<div class="right">
			<h3>&dollar;26,430</h3>
				<p>
					Bds | 1 Ba | 360 SQFT Location: 225 East 4th Street, Apt 18, New York
				</p>
				<a href="#" target="_blank" class="services-cta realestate">view details</a>
			</div>
		   </div>
	</section>

	<!--want to see more services section -->
	<section>
		 <div class="want-tosee-more flex">
    	  	<p>want to see more services &quest;</p>
    	  	<a href="{{route('services')}}" target="_blank">see all services</a>
    	  </div>
	</section>

	<section class="start-financial-freedom">
    	<div class="flex">
    		<p>Start your journey to
    	   <span class="lg-font">financial freedom</span></p>
    	   <a href="{{route('login')}}">get started</a>
    	</div>
    </section>
</main>



@endsection
