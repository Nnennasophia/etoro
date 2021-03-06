@extends("layouts.spacedcustomlayout")

@section("body")


<main class="retirement-page ourservices-page">
	<!-- contents of the page -->
 <section>
 	<div class="paragraph legal-header">
    		<h1>
    			<span class="line"></span> Fundflux fx <span class="line"></span>
    		</h1>
    	</div>
    	<div class="paragraph">
    		<h2>workforce optimization</h2>
    		<div class="flex retirement-row">
    			<p>
    			 Saving for retirement can be a daunting task, but with a sound strategy, it’s well within reach. igenius fx is here to bring clarity to retirement planning and set you on your path to success. Here you’ll better understand your options and find the right investment.
                 <br>
                 If you had the chance to double—or even quadruple—your retirement savings, you’d probably jump at that opportunity, right? Well, there’s one simple change you can make today that’s sure to boost your retirement savings.
    			</p>
    			<div class="img-container">
    				<img src="{{asset("images/ourservice-retirement-img1.jpg")}}" alt="retirement image">
    			</div>
    		</div>
    	</div>
 </section>

 <section>
     <h3>Quadruple Your Retirement Savings&quest; Really?</h3>
     <p>
         Fundflux fx study of worldwide retirement saving habits discovered that people with some kind of retirement plan have more than three times as much in their nest egg than those with no plan at all. And savers who take it one step further by working with an investing advisor to put their plan to paper? Their average nest egg is a whopping 445% bigger than non-planners. That’s a big deal! Now, did you catch that? By working with an advisor and by having a plan in place, you can supercharge your retirement savings.
     </p>
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
