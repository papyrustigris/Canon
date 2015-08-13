@extends('app')

@section('content')
<div id="interactive-carousel" class="container-fluid">
	<div class="container-fluid">
	  <div id="myCarousel" class="carousel slide" data-ride="carousel" style="height:460px">
	    <!-- Indicators -->
	    <ol class="carousel-indicators">
	      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
	      <li data-target="#myCarousel" data-slide-to="1"></li>
	      <li data-target="#myCarousel" data-slide-to="2"></li>
	      <li data-target="#myCarousel" data-slide-to="3"></li>
	      <li data-target="#myCarousel" data-slide-to="4"></li>
	      <li data-target="#myCarousel" data-slide-to="5"></li>
	      <li data-target="#myCarousel" data-slide-to="6"></li>
	      <li data-target="#myCarousel" data-slide-to="7"></li>
	      <li data-target="#myCarousel" data-slide-to="8"></li>
	      <li data-target="#myCarousel" data-slide-to="9"></li>
	      <li data-target="#myCarousel" data-slide-to="10"></li>
	      <li data-target="#myCarousel" data-slide-to="11"></li>
	      <li data-target="#myCarousel" data-slide-to="12"></li>
	      <li data-target="#myCarousel" data-slide-to="13"></li>
	      <li data-target="#myCarousel" data-slide-to="14"></li>
	      <li data-target="#myCarousel" data-slide-to="15"></li>
	    </ol>

	    <!-- Wrapper for slides -->
	    <div class="carousel-inner" role="listbox">
	      <!-- <div class="item active">
	        <div class="col-xs-12">
	        	<div class="text-center">
	        		<h1 style="margin-top:100px">
	        			{{ $solutions[0]->solution_name }}
	        		</h1>
	        	</div>
	        </div>
	      </div> -->
    	@foreach($solutions as $solution)
	      <div class="item">
	        <div class="col-xs-12">
	        	<div class="text-center">
	        		<h1 style="margin-top:100px">
	        			{{ $solution->solution_name }}
	        		</h1>
	        	</div>
	        </div>
	      </div>
    	@endforeach
	    </div>
	    
	    <!-- Left and right controls -->
	    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
	      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
	      <span class="sr-only">Previous</span>
	    </a>
	    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
	      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
	      <span class="sr-only">Next</span>
	    </a>

	  </div> <!-- end #myCarousel -->
	</div> <!-- end container-fluid -->
</div>
@endsection
