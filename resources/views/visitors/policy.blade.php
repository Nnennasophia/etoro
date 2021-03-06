@extends("layouts.spacedcustomlayout")

@section("body")



<main class="policy-contents ourcompany-page">
	<!-- contents of the page -->
   <section>
   	<div class="paragraph plicy-header">
    		<h1>
    			<span class="line"></span>{{$compd? $compd->Companyname: 'FUNDLUX'}} fx <span class="line"></span>
    		</h1>
    	</div>
    	<div class="paragraph">
    		<h2>Our policy</h2>
    		<p>
    			Our company understands the importance of personal information of every participant. Cooperating with our company, you can be sure in privacy of your personal information and in its protection by our employees. Our employees protect the collected by them information from unauthorized access. We use a variety of technologies to reduce the risk of theft of accounts and receiving personal information of our investors.
    		</p>
    	</div>
    	<div class="personal-info">
    		"Personal information" includes such items as":
    		<ul>
    			<li>Name and Last Name of the investor</li>
    			<li>Email of investor</li>
    			<li>Contact address of investor</li>
    		</ul>
    	</div>
    	<div class="paragraph">
    		<p>
    			Our company collects your personal information only with your consent and confidence in the security of your personal information on our project. Users should note, that the collection of personal information is only from adult. The rules of our company explain, how your information is collected and used. These rules apply only in our website. Information which is collected when you visit this site. This types of information are also the part of the personal information. Customer information, whether public or private, will not be sold, exchanged, transferred, or given to any other company for any reason whatsoever, without the consent of the customer, other than for the express purpose of delivering the purchased product or service requested by the customer. For your safety and protection, your credit card information is not stored on our servers. Our payment gateway provider, (insert providers name/s here), keeps this information encrypted and secure on your behalf. The email address you provide for order processing, may be used to send you information and updates pertaining to your account, in addition to periodic company news, updates, and/or related product or service information, etc. If you decide to opt-in to our mailing list, you will receive emails that may include company news, updates, related product or service information, promotions, etc. However, you may opt-out at any time by (please enter the opt-out or unsubscribe process here. This may be something like clicking the unsubscribe button at the bottom of your emails.
    		</p>
    	</div>

    	<div class="paragraph">
    		<h2>information storage</h2>
    		<p>
    			Saving of information is only in our company or its equipment. Personal information is stored in accordance with the rules of storage and disposal, which are set for archive of our company. To receive your personal information, contact direct with our employees.
    		</p>
    	</div>
    	<div class="paragraph">
    		<h2>contact information</h2>
    		<p>
    			igenius fx is glad to receive your comments concerning this "Privacy Policy". In case you think that igenius fx does not follow the rules and violate this Statement, contact us at <a href="mailto:{{$compd? $compd->Companyemail: 'Coming soon'}}"> {{$compd? $compd->Companyemail: 'Coming soon'}} </a> We guarantee that we will take commercially reasonable efforts to discover and solve the problem.
    		</p>
    	</div>
   </section>
   <section class="start-financial-freedom">
    	<div class="flex">
    		<p>Start your journey to
    	   <span class="lg-font">financial freedom</span></p>
    	   <a href="{{route('login')}}" class="cta-btn" target="_blank">get started</a>
    	</div>
    </section>
</main>



@endsection
