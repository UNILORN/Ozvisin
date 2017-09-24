<!DOCTYPE html>
<html>
	<head>
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
		<title></title>
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<a class="navbar-brand" href="/company/sub">OZvisin</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
		 		<ul class="navbar-nav mr-auto">
		    		<li class="nav-item active">
		        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
		    </li>
		    <li class="nav-item">
		        <a class="nav-link" href="#">Link</a>
		    </li>
		    <li class="nav-item">
		        <a class="nav-link disabled" href="#">Disabled</a>
		    </li>
				</ul>
				<form class="form-inline my-2 my-lg-0">
		    		<input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
					<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
				</form>
			</div>
		</nav>
		<style type="text/css" media="screen">
			.jumbotron{
				max-height: 288px;
			}
		</style>
	</head>

	<body>
		@foreach($codes as $code)
		<div class="card">
  			<div class="card-body">
    			<h4 class="card-title">{{ $code->title }}</h4>
    			<h6 class="card-subtitle mb-2 text-muted">{{ $code->user->name }}さん</h6>
    			<p class="card-text">{{ $code->comment }}</p>
			    <a href="{{ $code->URL }}" class="card-link" target="_blank">Githubへ</a>
  			</div>
		</div>
		@endforeach
	</body>
</html>
