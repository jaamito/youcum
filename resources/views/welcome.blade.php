@extends('base.head')
@section('content')
<div class="alert" style="background-color: #1a1a1a;font-size: 20px;color: white">
	Últimos vídeos porno amateur y caseros añadidos 
	<span style="position: absolute;right: 0;margin-right: 3px">
		Ordenar por: 
		<div class="btn yc-btn-head-vid yc-btn-head-active" style='background-color: #00baa8'>Novedades</div>
		<div class="btn yc-btn-head-vid" style='background-color: #343a40'>Destacados</div>
	</span>
</div>
	<div class="row">
        @foreach($arrVid as $vid)
        <div class="col-md-3" style="margin-bottom: 10px">
            <div class="card" style='height: 100%'>
                <div class="media media-video">
			        <a href="#" class="media-lef thumb" style="width: 100%">
			        	<img class="mySlides" data-src='{{$vid["default_thumb"]}}' data-srcold='{{$vid["thumb"]}}' src='{{$vid["default_thumb"]}}' style="width:100%;border-top-left-radius: 4px;border-top-right-radius: 4px;">
			            <span class="duration">{{$vid["duration"]}}</span>
			        </a>
			    </div>
            
                <div class="card-body" style="padding: 3px !important;height: 100%">
                	<p class="card-text YC-text-card" style="color: #00baa8;cursor: pointer;font-size: 15px"><b>{{$vid["title"]}}</b></p>                	
                	@if( $vid["views"] < 1000)
						{{$vid["views"]}}
					@elseif( $vid["views"] < 1000000) 
					   	{{$viewsVid = number_format($vid["views"]/1000,0).'K'}}
					@elseif ($vid["views"] < 1000000000) 
					    {{$viewsVid = number_format($vid["views"]/ 1000000, 0).'M'}}
					@else {
					    {{$viewsVid = number_format($vid["views"]/ 1000000000, 0).'B'}}
					@endif

					
					<i class="fa fa-thumbs-up" aria-hidden="true" style='color: green'></i> {{number_format($vid["rating"],0)}}%<br>
                	@php
						$i = 0
					@endphp
                	@foreach($vid["tags"] as $tagVid)
                		@if($i < 6)
                			<span class="badge badge-dark">{{$tagVid["tag_name"]}}</span>
                		@endif
                    	@php
							$i = $i + 1
						@endphp
                    @endforeach
                </div>
            </div>
        </div>
        @endforeach
	</div>
	<nav aria-label="Page navigation example">
	  <ul class="pagination">
	    <li class="page-item">
	      <a class="page-link" href="#" aria-label="Previous">
	        <span aria-hidden="true">«</span>
	        <span class="sr-only">Previous</span>
	      </a>
	    </li>
	    <li class="page-item active"><a class="page-link" href="#">1</a></li>
	    <li class="page-item"><a class="page-link" href="#">2</a></li>
	    <li class="page-item"><a class="page-link" href="#">3</a></li>
	    <li class="page-item">
	      <a class="page-link" href="#" aria-label="Next">
	        <span aria-hidden="true">»</span>
	        <span class="sr-only">Next</span>
	      </a>
	    </li>
	  </ul>
	</nav> 
	           
@endsection

