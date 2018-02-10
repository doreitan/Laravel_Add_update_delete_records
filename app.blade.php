<!DOCTYPE html>
<html>
    <head>
        <title>{{config("app.name", "Doro")}} </title>

        
    <!--לשלהם" "-->
       <link rel ="stylesheet" type="text/css"
          href="{{asset ("css/app.css")}}">
    
     
    <!--לשלי"    
    <link rel ="stylesheet" type="text/css"
          href="{{asset ("sass/app.scss")}}">
    "-->
    </head>
    <body>

    @include ("inc.navbar")
    
		<div class="container">
            @include("inc.messages")
        
            @yield("content")
    </div>
    
    <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>

    <script>
        CKEDITOR.replace'article-ckeditor';
       
    </script>

    <script src="{{ URL::asset('../vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script> <script> CKEDITOR.replace( 'article-ckeditor' ); </script>
	 
    </body>
</html>
