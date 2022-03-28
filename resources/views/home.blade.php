@extends('layouts.body.master_home')
@section('content')
 <header id="gtco-header" class="gtco-cover" role="banner" style="background-image: url('front end/images/img_4.jpg')">
		<div class="overlay"></div>
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-12 col-md-offset-0 text-left">


					<div class="row row-mt-15em">
						<div class="col-md-7 mt-text animate-box" data-animate-effect="fadeInUp">
							<span class="intro-text-small"></span>
							<h1>Health Protection And Research Organization</h1>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-8 text-left gtco-heading">
					<h2>Core Competencies</h2>

				</div>
			</div>
			<div class="row">
				<div class="col-md-5">
					<div class="feature-left animate-box" data-animate-effect="fadeInLeft">
						<span class="icon">
							<i class="icon-check"></i>
						</span>
						<div class="feature-copy">
							<h3>Research and Epidemiology</h3>
							<p></p>
						</div>
					</div>

					<div class="feature-left animate-box" data-animate-effect="fadeInLeft">
						<span class="icon">
							<i class="icon-check"></i>
						</span>
						<div class="feature-copy">
							<h3>Third Party Monitoring and M&E</h3>
							<p></p>
						</div>
					</div>

					<div class="feature-left animate-box" data-animate-effect="fadeInLeft">
						<span class="icon">
							<i class="icon-check"></i>
						</span>
						<div class="feature-copy">
							<h3>Institutional Development</h3>
							<p></p>
						</div>
					</div>

					<div class="feature-left animate-box" data-animate-effect="fadeInLeft">
						<span class="icon">
							<i class="icon-check"></i>
						</span>
						<div class="feature-copy">
							<h3>Health Protection</h3>
							<p></p>
						</div>
					</div>
				</div>
			</div>
<div class="gtco-container">			
	<div class="row">
				<div class="col-md-12 text-center gtco-heading">
				<h2>Our Mission</h2>
				<p><h4>Saving lives by enchancing the responsiveness, equity and effectiveness of national systems. </p></h4>
				</div>
	</div>	
	<div class="row">
				<div class="col-md-12 text-center gtco-heading">
				<h2>Our Vision</h2>
				<p><h4>HPRO is known as a reliable development partner delivering a wide range of technical assistance services in Afghanistan and the region.</h4></p>
				</div>
	</div>					
</div>						

    <div class="gtco-section">
		<div class="gtco-container">
		    <div class="row">
				<div class="col-md-8 col-md-offset-2 text-center gtco-heading animate-box">
					<h2>Donors</h2>
				</div>
			</div>
			<div class="row">
			    @foreach($donors as $donor)
				<div class="col-md-2 col-md-2 col-sm-6">
						<figure>
							<img src="{{ asset('backend/assets/img/ourclients/'.$donor->image) }}" alt="Image" class="img-responsive-new">
						</figure>
					</a>
				</div>
				 @endforeach
				  <div class="row">
				<div class="col-md-8 col-md-offset-2 text-center gtco-heading animate-box">
					<button type="button" class="btn btn-primary"><a href="{{ url('donor')}}">All Donors-></a></button>
				</div>
			</div>
			</div>	
		</div>		
 </div>


    <div id="gtco-counter" class="gtco-section">
		<div class="gtco-container">

			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center gtco-heading animate-box">
					<h2>Information</h2>
					<p>Here you can see our Projects, number of Donors and our key Staff.</p>
				</div>
			</div>

			<div class="row">

				<div class="col-md-4 col-sm-6 animate-box" data-animate-effect="fadeInCenter">
					<div class="feature-center">
						<span class="icon">
							<i class="ti-face-smile"></i>
                        </span>
                        <h1>{{ $donors->count() }}</h1>
						<span class="counter-label"><a href="{{url('')}}">Donors</a></span>

					</div>
				</div>
				<div class="col-md-4 col-sm-6 animate-box" data-animate-effect="fadeInCenter">
					<div class="feature-center">
						<span class="icon">
							<i class="ti-briefcase"></i>
                        </span>
                        <h1>{{ $projects->count() }}</h1>
						<span class="counter-label"><a href="{{url('project')}}">Projects</a></span>
					</div>
				</div>
				<div class="col-md-4 col-sm-6 animate-box" data-animate-effect="fadeInCenter">
					<div class="feature-center">
						<span class="icon">
							<i class="ti-user"></i>
                        </span>
                        <h1>{{ $users->count() }}</h1>
						<span class="counter-label"><a href="{{url('staff')}}">Our Staff</a></span>
					</div>
				</div>

			</div>
		</div>
	</div>


	

@endsection
