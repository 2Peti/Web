<html lang="sk"><head>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script type="text/javascript" async="" src="https://www.google-analytics.com/analytics.js"></script><script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-165933585-1"></script>
	<script>
	window.dataLayer = window.dataLayer || [];
	function gtag(){dataLayer.push(arguments);}
	gtag('js', new Date());
	gtag('config', 'UA-165933585-1');
	</script>

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>What's my Location!</title>
	<style type="text/css">
		* { margin:0; padding:0; }
		body { background:#333; color:#efefef; margin-top:50px; }
		.tools { margin:25px auto; width:960px; }
		.tools p {
			margin-left:20px; color:#777; font-family: Georgia,serif;
			-webkit-text-shadow:0 0 7px #000; -moz-text-shadow:0 0 7px #000; text-shadow:0 0 7px #000;
			}
		#Latitude { 
			border:1px solid #aaa; 
			background-position:50% 50%; background-repeat:repeat-x; background-color:#777;
			background-image: url(data:image/gif;base64,R0lGODlhAQBWAfcAAHZ2dkVFRXJyck1NTVFRUUVEREpKSnR0dEhISEZGRklJSW1tbVNTU1ZWVnV1dW9vb2lpaUdHR2dnZ2tra0xMTFpaWlBQUFRUVF9fX1VVVFlZWWRkZGBgYEtLS2FhYU5OTl1dXVVVVW5ubnZ1dmpqakZGR2tsbGZmZmJiYnZ1dWNjY0xNTVpbWmxsbFtbW0ZFRkZFRVJSUnBwb15eXlhYWWVlZVdXV05PT09PT1JTUm5vbnNzc3Nyc3BwcHFxcXFwcGppamhoaFhYWF5fXnJxcWhpaWJiY0hISVRUU25tbXV1dmNkY25vb3Rzc1NUU0xLTG1ubnR1dUhHSHV0dGNkZEhHR19eXk5OTXd3dlxdXVdXWHR1dFFRUFxcXU9PUFxbXFdWVlxcXHFxcGFhYmNjYlxdXFhYV3Bvb21sbGNjZGVlZmZmZUxNTFlZWF5dXnBxcFxcW3V2dnR0c1tcW2BfX2JhYlBQUVZXV2hnaFBPT3BxcUhJSElISG5ubXJzc2tqanJzcmZmZ0lKSlhXV1JSUXd2dkdGR2VkZFBQT0tMS2loaGJjY2ZnZmxtbEtLTExMS0lISVtbWkVFRkdGRmRlZGdnaHFxclxbW1FSUUpLSklJSkdHSF9gX2FgYFtaW09OTmtrak9QT1lZWnN0dF5dXVJSU0RFRXN0c2VmZUtMTHNzdGtsa1VVVkRERHd3dwAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACH5BAAAAAAALAAAAAABAFYBAAj/AF0JHEiQYCFXABJiSQhgxIg4KUakUOKgYhQHU7Yc2LhxlJxTTVTt2MGDhwA/gASoVGmJiA+Xen6I+fGmRw8ZMs482PmAiQ4dIoJC6ZNkgdEFjdC0aGGi6aoJUCeA+kOCBBCrECAU0QpBUZAgeCpJGCvhBKNAJ9ScWIOqRg1KGw5t2EAljYolKsgYWWQEBYo6KMZ4GNyJg2E6nDAoHmJlyIwZbkCQApEFRJkuYb64gHNpjotInliwqEBalAYNbTTQoCFEiJlBWmzYuAOmge0GrELozsD7gm8GSJwwYJCDeKkYMQgRIIBpOQEuFuxYQGQhj5dQOD7dwHHjg/crA8IPUFgxng2F848cpXqSqIN7AwYywTcgSIF9TfYhIdhzBAEfBFIgUAUCm0RgoCElRFBCAiVMksCDLyQQwAswBACDJAEUEEAApmRYwIethChiiAEBADs=);
			-webkit-border-radius:11px; -moz-border-radius:11px; border-radius:11px; 
			-webkit-box-shadow:0 0 11px #111; -moz-box-shadow:0 0 11px #111; box-shadow:0 0 11px #111;
		}
		#Longitude { 
			border:1px solid #aaa; 
			background-position:50% 50%; background-repeat:repeat-x; background-color:#777;
			background-image: url(data:image/gif;base64,R0lGODlhAQBWAfcAAHZ2dkVFRXJyck1NTVFRUUVEREpKSnR0dEhISEZGRklJSW1tbVNTU1ZWVnV1dW9vb2lpaUdHR2dnZ2tra0xMTFpaWlBQUFRUVF9fX1VVVFlZWWRkZGBgYEtLS2FhYU5OTl1dXVVVVW5ubnZ1dmpqakZGR2tsbGZmZmJiYnZ1dWNjY0xNTVpbWmxsbFtbW0ZFRkZFRVJSUnBwb15eXlhYWWVlZVdXV05PT09PT1JTUm5vbnNzc3Nyc3BwcHFxcXFwcGppamhoaFhYWF5fXnJxcWhpaWJiY0hISVRUU25tbXV1dmNkY25vb3Rzc1NUU0xLTG1ubnR1dUhHSHV0dGNkZEhHR19eXk5OTXd3dlxdXVdXWHR1dFFRUFxcXU9PUFxbXFdWVlxcXHFxcGFhYmNjYlxdXFhYV3Bvb21sbGNjZGVlZmZmZUxNTFlZWF5dXnBxcFxcW3V2dnR0c1tcW2BfX2JhYlBQUVZXV2hnaFBPT3BxcUhJSElISG5ubXJzc2tqanJzcmZmZ0lKSlhXV1JSUXd2dkdGR2VkZFBQT0tMS2loaGJjY2ZnZmxtbEtLTExMS0lISVtbWkVFRkdGRmRlZGdnaHFxclxbW1FSUUpLSklJSkdHSF9gX2FgYFtaW09OTmtrak9QT1lZWnN0dF5dXVJSU0RFRXN0c2VmZUtMTHNzdGtsa1VVVkRERHd3dwAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACH5BAAAAAAALAAAAAABAFYBAAj/AF0JHEiQYCFXABJiSQhgxIg4KUakUOKgYhQHU7Yc2LhxlJxTTVTt2MGDhwA/gASoVGmJiA+Xen6I+fGmRw8ZMs482PmAiQ4dIoJC6ZNkgdEFjdC0aGGi6aoJUCeA+kOCBBCrECAU0QpBUZAgeCpJGCvhBKNAJ9ScWIOqRg1KGw5t2EAljYolKsgYWWQEBYo6KMZ4GNyJg2E6nDAoHmJlyIwZbkCQApEFRJkuYb64gHNpjotInliwqEBalAYNbTTQoCFEiJlBWmzYuAOmge0GrELozsD7gm8GSJwwYJCDeKkYMQgRIIBpOQEuFuxYQGQhj5dQOD7dwHHjg/crA8IPUFgxng2F848cpXqSqIN7AwYywTcgSIF9TfYhIdhzBAEfBFIgUAUCm0RgoCElRFBCAiVMksCDLyQQwAswBACDJAEUEEAApmRYwIethChiiAEBADs=);
			-webkit-border-radius:11px; -moz-border-radius:11px; border-radius:11px; 
			-webkit-box-shadow:0 0 11px #111; -moz-box-shadow:0 0 11px #111; box-shadow:0 0 11px #111;
		}
		#tools p { font-size:77px; }
		h1 { 
			font: 124px/1 Helvetica, Arial; text-align:center; margin:50px 0; color:#efefef;
			-webkit-text-shadow:0 0 7px #333; -moz-text-shadow:0 0 7px #333; text-shadow:0 0 7px #333;
			}
		h1 a:link { color:#efefef; }
		a:link,a:visited { 
			color:#777; text-decoration:none; outline:0 none; 
			-webkit-text-shadow:0 0 7px #000; -moz-text-shadow:0 0 7px #000; text-shadow:0 0 7px #000;
			}
		a:hover,a:active { color:#eee; text-decoration:underline; outline:0 none; }
		li span { 
			font:16px/1 Monaco,"Panic Sans","Lucida Console","Courier New",Courier,monospace,sans-serif; color:#ccc; 
			-webkit-text-shadow:0 0 3px #777; -moz-text-shadow:0 0 3px #777; text-shadow:0 0 3px #777;
			}
	</style>
	</head>
	<body onload="getLocation()">

		<div id="tools" class="tools">
			<p>Latitude:</p>
		</div>
		<div id="Latitude" class="tools">
		</div>

		<div id="tools" class="tools">
			<p>Longitude:</p>
		</div>
		<div id="Longitude" class="tools">
		</div>

<script type="text/javascript">
var x = document.getElementById("coordinates");
function getLocation() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(showPosition);
  } else { 
    x.innerHTML = "This browser doesn't suport Geolocation.";
  }
}
function showPosition(position) {
	document.getElementById('Latitude').innerHTML = "<h1>" + position.coords.latitude + "</h1>";
	document.getElementById('Longitude').innerHTML = "<h1>" + position.coords.longitude + "</h1>";
  x.innerHTML = "Latitude: " + position.coords.latitude + 
  "<br>Longitude: " + position.coords.longitude;
}
</script>

</body>
</html>
