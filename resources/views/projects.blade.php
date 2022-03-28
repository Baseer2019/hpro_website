@extends('layouts.body.master_home')

@section('content')
<header id="gtco-header" class="gtco-cover gtco-cover-sm" role="banner" style="background-image: url('front end/images/img_4.jpg')">
    <div class="overlay"></div>
    <div class="gtco-container">
        <div class="row">
            <div class="col-md-12 col-md-offset-0 text-left">
                <div class="row row-mt-15em">

                    <div class="col-md-7 mt-text animate-box" data-animate-effect="fadeInUp">
                        <span class="intro-text-small">See Our</span>
                        <h1>Projects</h1>
                    </div>

                </div>

            </div>
        </div>
    </div>
</header>
<div class="row">
    <div class="col-md-8 col-md-offset-2 text-center gtco-heading">
        <h2>Projects</h2>
       
    </div>
</div>
 
<!--<div class="gtco-section">-->
<!--    <div class="gtco-container">-->
<!--        <div class="row">-->
<!--           @foreach($projects as $project)-->
<!--            <div class="col-md-4 col-sm-4  col-lg-3">-->
<!--                <a href="{{ asset('backend/assets/img/project/'.$project->pdf) }}" class="-project-item pdf-popup">-->
<!--                    <figure>-->
<!--                        <div class="overlay"><i class="ti-plus"></i></div>-->
<!--                        <img src="{{ asset('backend/assets/img/user/'.$project->image) }}" alt="Image" class="img-responsive">-->
<!--                    </figure>-->
<!--                    <div class="fh5co-text">-->
<!--                        <h4 class="project-name text-ellipsis"><b>{{ $project->name }}</b></h2>-->
<!--                        <h6 class="project-name text-ellipsis">{{$project->projectType->name}}</h6>-->
<!--                        <span class="intro-text-small">Status:{{$project->description}}</span>-->
<!--                        <p>{{ $project->start_date }}</p>-->
<!--                    </div><br>-->
<!--                </a>-->
<!--            </div>-->
<!--           @endforeach-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
<div class="gtco-section border-bottom">
		<div class="gtco-container">
			<div class="row">
			    @foreach($projects as $project)
				<div class="col-lg-4 col-md-4 col-sm-6">
					<a href="{{ asset('backend/assets/img/project/'.$project->pdf) }}" class="fh5co-project-item ">
						<figure>
							<img src="{{ asset('backend/assets/img/user/'.$project->image) }}" alt="Image" class="img-responsive">
						</figure>
						<div class="fh5co-text">
							<h2><b>{{ $project->name }}</b></h2>
							<h6 class="project-name text-ellipsis"><b>{{$project->projectType->name}}</b></h6>
							<span class="intro-text-small">Status:{{$project->description}}</span>
							<p>{{ $project->start_date }}</p>
						</div>
					</a>
				</div>
				 @endforeach
			</div>	
		</div>		
 </div>
{{ $projects->links('pagination::bootstrap-4') }}

@endsection
