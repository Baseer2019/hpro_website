@extends('layouts.body.master_home')
@section('content')	
	<header id="gtco-header" class="gtco-cover gtco-cover-sm" role="banner" style="background-image: url('front end/images/img_4.jpg')">
		<div class="overlay"></div>
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-12 col-md-offset-0 text-left">
					<div class="row row-mt-15em">
						<div class="col-md-7 mt-text animate-box" data-animate-effect="fadeInUp">
							<span class="intro-text-small"></span>
							<h1>Our Donors</h1>
						</div>
					</div>
				</div>
					
				</div>
			</div>
		</div>
	</header>
<div class="gtco-section">
		<div class="gtco-container">
			<div class="row">
			    @foreach($donors as $donor)
				<div class="col-md-2 col-md-2 col-sm-6">
						<figure>
							<a href="{{ $donor->weblink }}"><img src="{{ asset('backend/assets/img/ourclients/'.$donor->image) }}" alt="Image" class="img-responsive"></a>
						</figure>
					</a>
				</div>
				 @endforeach
			</div>	
		</div>		
 </div>
@endsection
	