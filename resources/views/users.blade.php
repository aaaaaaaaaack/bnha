

<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Bataan High School for the Arts</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="manifest" href="site.webmanifest">
        <link rel="apple-touch-icon" href="icon.png">
        <!-- Place favicon.ico in the root directory -->

        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">

        <style type="text/css">
        	* {
        		margin: 0;
        		padding: 0;
        	}
        	li {
        		list-style: none;
        	}
        	.header {
        		background: #605bff;
        		height: 3vh;
        		width: 100vw;
        	}
        	.right-side-items > li{
        		float: left;
        		padding: 0 12px;
        	}
        </style>

    </head>
    <body>
        
    	<div class="header">
    		<div class="right-side">
    			<ul class="right-side-items">
    				<li>
    					Faculty
    				</li>
    				<li>
    					About Us
    				</li>
    				<li>
    					Login
    				</li>
    			</ul>
    		</div>
    	</div>
    	<div>
    		<span>
    			
    		@foreach($users as $user) 
    			{{$user->id}} {{$user->student_id}} {{$user->fname}}
    		@endforeach

    		</span>

    	</div>

    </body>
</html>