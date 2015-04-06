@extends('app')

@section('content')

<h1>Priljubljeni</h1>
          
<div ng-app="myAppPopular" ng-controller="popularCtrl">        
    <div ng-repeat="article in populararticles">
        <div class="col-md-3 " style="margin-bottom:30px;" >
          	<img ng-src="<% article.imageUrl %>"  style="width:100%;" class="align-center img-responsive" />
            <div class="kategorija"> <% article.category %> </div>
            <div class="naslov"><% article.title %></div>       
        </div>
    </div> 
</div>

@stop