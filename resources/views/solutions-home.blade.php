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
	    </ol>

	    <!-- Wrapper for slides -->
	    <div class="carousel-inner" role="listbox">
	      <div class="item active">
	        <div class="col-xs-12">
	        	<div class="text-center">
	        		<h1 style="margin-top:100px">
	        			Solution #1
	        		</h1>
	        	</div>
	        </div>
	      </div>

	      <div class="item">
	        <div class="col-xs-12">
	        	<div class="text-center">
	        		<h1 style="margin-top:100px">
	        			Solution #2
	        		</h1>
	        	</div>
	        </div>
	      </div>
	    
	      <div class="item">
	        <div class="col-xs-12">
	        	<div class="text-center">
	        		<h1 style="margin-top:100px">
	        			Solution #3
	        		</h1>
	        	</div>
	        </div>
	      </div>

	      <div class="item">
	        <div class="col-xs-12">
	        	<div class="text-center">
	        		<h1 style="margin-top:100px">
	        			Solution #4
	        		</h1>
	        	</div>
	        </div>
	      </div>
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
	  </div>
	</div>
</div>
@endsection
