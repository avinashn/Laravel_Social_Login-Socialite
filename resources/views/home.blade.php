<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Laravel</title>

<!-- Fonts -->
<link href="https://fonts.googleapis.com/css?family=Raleway:100,600"
	rel="stylesheet" type="text/css">

<!-- Styles -->
<style>
html, body {
	background-color: #fff;
	color: #636b6f;
	font-family: 'Raleway', sans-serif;
	font-weight: 100;
	height: 100vh;
	margin: 0;
}

.full-height {
	height: 100vh;
}

.flex-center {
	align-items: center;
	display: flex;
	justify-content: center;
}

.position-ref {
	position: relative;
}

.top-right {
	position: absolute;
	right: 10px;
	top: 18px;
}

.content {
	text-align: center;
}

.title {
	font-size: 84px;
}

.links>a {
	color: #636b6f;
	padding: 0 25px;
	font-size: 12px;
	font-weight: 600;
	letter-spacing: .1rem;
	text-decoration: none;
	text-transform: uppercase;
}

.m-b-md {
	margin-bottom: 30px;
}
</style>
</head>
<body>
	<div class="flex-center position-ref full-height">
		<div class="content">
			@if($service == 'facebook')
			<div class="title m-b-md">
				Welcome {{ $details->user['name']}} ! <br> Your email is : {{
				$details->user['email'] }} <br> You are {{ $details->user['gender']
				}}.
			</div>
			@endif @if($service == 'google')
			<div class="title m-b-md">
				Welcome {{ $details->name}} ! <br> Your email is : {{
				$details->email }} <br> Your are {{ $details->user['gender'] }}.
			</div>

			@endif @if($service == 'twitter')
			<div class="title m-b-md">
				Welcome {{ $details->name}} ! <br> Your username is : {{
				$details->nickname }}<br> Total Tweets : {{
				$details->user['statuses_count']}}<br> Followers : {{
				$details->user['followers_count']}}<br> Following : {{
				$details->user['friends_count']}}
			</div>
			@endif @if($service == 'github')
			<div class="title m-b-md">
				Welcome {{ $details->user['name'] }} ! <br> Your email is : {{
				$details->user['email'] }} <br> Public Repositories :
				{{$details->user['public_repos']}}<br> Followers :
				{{$details->user['followers']}}
			</div>

			@endif
		</div>
	</div>
</body>
</html>
