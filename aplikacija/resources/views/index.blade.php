@extends('app')

@section('content')

<h1>app</h1>
          
<div ng-app="myApp" ng-controller="articlesCtrl">     
    <div ng-repeat="article in articles">
        <div class="col-md-3 " style="margin-bottom:30px;" >
            <img ng-src="<% article.image|filterSlika  %>"  style="width:100%;" class="align-center img-responsive" />
            <div class="kategorija"> <% article.section_name|filterKategorija %> </div>
            <form ng-controller="dadaj_priljubljene">
                <button type="submit" class="priljubljene" ng-click="update( article.title, article.image, article.section_name )">Dodaj med priljubljene</button>
            </form>
            <div class="naslov"><% article.title %></div>       

        </div>

    </div> 
</div>


@stop