<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
<link rel="stylesheet" href="assets/css/style.css">
<title>tenki-api-json-url</title>
</head>
<body>
<div id="urllist">
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
<script>
	window.onload = function(){
		$.ajax({
			type: "POST",
			dataType: "json",
			url:"./lib/tenki.php",
			data: "data",
			success: function (response) {
				let urllist = document.getElementById("urllist");
				for (const key in response) {
					urllist.innerHTML = urllist.innerHTML +  response[key].name + ":" +  response[key].url + "<br>";
				}
			}
		});
	}
</script>
</body>
</html>
