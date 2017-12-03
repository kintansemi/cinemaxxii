<!DOCTYPE html>
<html>
  <head>
    <title>Cinema XXI Book Show (Book Now)</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
    <script type="text/javascript" src="jquery-1.9.0.js"></script>
    <script type="text/javascript" src="js/jquery-func.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://s.codepen.io/assets/libs/modernizr.js" type="text/javascript"></script>
    <meta name="viewport" content="width=device-width">
    <!--[if IE 6]><link rel="stylesheet" href="css/ie6.css" type="text/css" media="all" /><![endif]-->
  </head>
  <body>
    <!-- START PAGE SOURCE -->
    <body>

  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
    <h2 id="logo"><img src="css/images/cinemax.png" alt=""></h2>
    </div>
  </nav>
<style>
.aaaaa {
  color: white;
}
	.bangku
	{
		width: 30px;
		height:30px;
		text-align:center;
		font-size:20px;
		background-color:#F00;
		color:#FFF;
		cursor:pointer;
		margin-top:4px;
		margin-right:4px;
	}


	.btn-hijau
	{
		background:#4fb821;
	}

	.btn-biru
	{
		background:#2c35f1;
	}
</style>
<script>
function writeCookie(name,value,days) {
    var date, expires;
    if (days) {
        date = new Date();
        date.setTime(date.getTime()+(days*24*60*60*1000));
        expires = "; expires=" + date.toGMTString();
            }else{
        expires = "";
    }
    document.cookie = name + "=" + value + expires + "; path=/";
}

function readCookie(name) {
    var i, c, ca, nameEQ = name + "=";
    ca = document.cookie.split(';');
    for(i=0;i < ca.length;i++) {
        c = ca[i];
        while (c.charAt(0)==' ') {
            c = c.substring(1,c.length);
        }
        if (c.indexOf(nameEQ) == 0) {
            return c.substring(nameEQ.length,c.length);
        }
    }
    return '';
}
$(document).ready(function(){
	$('.bangku').each(function() {
		    $(this).click(function() {

		    	var i=$(this).attr("data-id");
					if(i=="1")
					{
						return false;
					}else{
						if(i=="0")
						{
							$(this).attr('class','btn-biru bangku');
							$(this).attr('data-id','3');
							Tambah();
						}else if(i=="3"){
							$(this).attr('class','btn-hijau bangku');
							$(this).attr('data-id','0');
							Tambah();
						}
					}
		    });
  		});

  	$("#lihattotal").click(function(){
  		var total=$('div[data-id="3"]').length;
  		alert("Jumlah pemesanan " + total);
  	});

  	$("#lihatbangku").click(function(){
  		var str = [], item;
			    $.each($('div[data-id="3"]'), function (index, value) {
			        item = $(this).text();
			        str.push(item);
			    });
			    var selek=str.join(',');
			    alert("Bangku yg dipesan "+selek);
  	});

  	function Tambah() {
		  var total=$('div[data-id="3"]').length;
		    	var str = [], item;
			    $.each($('div[data-id="3"]'), function (index, value) {
			        item = $(this).text();
			        str.push(item);
			    });
			    var selek=str.join(',');
		    	writeCookie('totseat',total,1);
		    	writeCookie('selekseat',selek,1);

	}
});
</script>
<br><br><br><br>
<center>
<table width="10%" border="0" cellpadding="4" cellspacing="4" class="aaaaa">
  <tr>
    <h1 style="color:white;">CHOOSE YOUR SEAT</h1>
  </tr>
  <tr>
		<td>A</td>
    <td><div class="bangku btn-hijau" data-id="0">1</div></td>
    <td><div class="bangku btn-hijau" data-id="0">2</div></td>
    <td><div class="bangku btn-hijau" data-id="0">3</div></td>
    <td><div class="bangku btn-hijau" data-id="0">4</div></td>
		<td><div class="bangku btn-hijau" data-id="0">5</div></td>
		<td><div class="bangku btn-hijau" data-id="0">6</div></td>
		<td><div class="bangku btn-hijau" data-id="0">7</div></td>
	  <td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
		<td><div class="bangku btn-hijau" data-id="0">8</div></td>
		<td><div class="bangku btn-hijau" data-id="0">9</div></td>
		<td><div class="bangku btn-hijau" data-id="0">10</div></td>
		<td><div class="bangku btn-hijau" data-id="0">11</div></td>
		<td><div class="bangku btn-hijau" data-id="0">12</div></td>
		<td><div class="bangku btn-hijau" data-id="0">13</div></td>
		<td><div class="bangku btn-hijau" data-id="0">14</div></td>
		<td>A</td>
  </tr>
	<tr>
		<td>B</td>
    <td><div class="bangku btn-hijau" data-id="0">1</div></td>
    <td><div class="bangku btn-hijau" data-id="0">2</div></td>
    <td><div class="bangku btn-hijau" data-id="0">3</div></td>
    <td><div class="bangku btn-hijau" data-id="0">4</div></td>
		<td><div class="bangku btn-hijau" data-id="0">5</div></td>
		<td><div class="bangku btn-hijau" data-id="0">6</div></td>
		<td><div class="bangku btn-hijau" data-id="0">7</div></td>
	  <td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
		<td><div class="bangku btn-hijau" data-id="0">8</div></td>
		<td><div class="bangku btn-hijau" data-id="0">9</div></td>
		<td><div class="bangku btn-hijau" data-id="0">10</div></td>
		<td><div class="bangku btn-hijau" data-id="0">11</div></td>
		<td><div class="bangku btn-hijau" data-id="0">12</div></td>
		<td><div class="bangku btn-hijau" data-id="0">13</div></td>
		<td><div class="bangku btn-hijau" data-id="0">14</div></td>
		<td>B</td>
  </tr>
	<tr>
		<td>C</td>
    <td><div class="bangku btn-hijau" data-id="0">1</div></td>
    <td><div class="bangku btn-hijau" data-id="0">2</div></td>
    <td><div class="bangku btn-hijau" data-id="0">3</div></td>
    <td><div class="bangku btn-hijau" data-id="0">4</div></td>
		<td><div class="bangku btn-hijau" data-id="0">5</div></td>
		<td><div class="bangku btn-hijau" data-id="0">6</div></td>
		<td><div class="bangku btn-hijau" data-id="0">7</div></td>
	  <td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
		<td><div class="bangku btn-hijau" data-id="0">8</div></td>
		<td><div class="bangku btn-hijau" data-id="0">9</div></td>
		<td><div class="bangku btn-hijau" data-id="0">10</div></td>
		<td><div class="bangku btn-hijau" data-id="0">11</div></td>
		<td><div class="bangku btn-hijau" data-id="0">12</div></td>
		<td><div class="bangku btn-hijau" data-id="0">13</div></td>
		<td><div class="bangku btn-hijau" data-id="0">14</div></td>
		<td>C</td>
  </tr>
	<tr>
		<td>D</td>
    <td><div class="bangku btn-hijau" data-id="0">1</div></td>
    <td><div class="bangku btn-hijau" data-id="0">2</div></td>
    <td><div class="bangku btn-hijau" data-id="0">3</div></td>
    <td><div class="bangku btn-hijau" data-id="0">4</div></td>
		<td><div class="bangku btn-hijau" data-id="0">5</div></td>
		<td><div class="bangku btn-hijau" data-id="0">6</div></td>
		<td><div class="bangku btn-hijau" data-id="0">7</div></td>
	  <td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
		<td><div class="bangku btn-hijau" data-id="0">8</div></td>
		<td><div class="bangku btn-hijau" data-id="0">9</div></td>
		<td><div class="bangku btn-hijau" data-id="0">10</div></td>
		<td><div class="bangku btn-hijau" data-id="0">11</div></td>
		<td><div class="bangku btn-hijau" data-id="0">12</div></td>
		<td><div class="bangku btn-hijau" data-id="0">13</div></td>
		<td><div class="bangku btn-hijau" data-id="0">14</div></td>
		<td>D</td>
  </tr>
	<tr>
		<td>E</td>
    <td><div class="bangku btn-hijau" data-id="0">1</div></td>
    <td><div class="bangku btn-hijau" data-id="0">2</div></td>
    <td><div class="bangku btn-hijau" data-id="0">3</div></td>
    <td><div class="bangku btn-hijau" data-id="0">4</div></td>
		<td><div class="bangku btn-hijau" data-id="0">5</div></td>
		<td><div class="bangku btn-hijau" data-id="0">6</div></td>
		<td><div class="bangku btn-hijau" data-id="0">7</div></td>
	  <td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
		<td><div class="bangku btn-hijau" data-id="0">8</div></td>
		<td><div class="bangku btn-hijau" data-id="0">9</div></td>
		<td><div class="bangku btn-hijau" data-id="0">10</div></td>
		<td><div class="bangku btn-hijau" data-id="0">11</div></td>
		<td><div class="bangku btn-hijau" data-id="0">12</div></td>
		<td><div class="bangku btn-hijau" data-id="0">13</div></td>
		<td><div class="bangku btn-hijau" data-id="0">14</div></td>
		<td>E</td>
  </tr>
	<tr>
		<td>F</td>
    <td><div class="bangku btn-hijau" data-id="0">1</div></td>
    <td><div class="bangku btn-hijau" data-id="0">2</div></td>
    <td><div class="bangku btn-hijau" data-id="0">3</div></td>
    <td><div class="bangku btn-hijau" data-id="0">4</div></td>
		<td><div class="bangku btn-hijau" data-id="0">5</div></td>
		<td><div class="bangku btn-hijau" data-id="0">6</div></td>
		<td><div class="bangku btn-hijau" data-id="0">7</div></td>
	  <td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
		<td><div class="bangku btn-hijau" data-id="0">8</div></td>
		<td><div class="bangku btn-hijau" data-id="0">9</div></td>
		<td><div class="bangku btn-hijau" data-id="0">10</div></td>
		<td><div class="bangku btn-hijau" data-id="0">11</div></td>
		<td><div class="bangku btn-hijau" data-id="0">12</div></td>
		<td><div class="bangku btn-hijau" data-id="0">13</div></td>
		<td><div class="bangku btn-hijau" data-id="0">14</div></td>
		<td>F</td>
  </tr>
	<tr>
		<td>G</td>
    <td><div class="bangku btn-hijau" data-id="0">1</div></td>
    <td><div class="bangku btn-hijau" data-id="0">2</div></td>
    <td><div class="bangku btn-hijau" data-id="0">3</div></td>
    <td><div class="bangku btn-hijau" data-id="0">4</div></td>
		<td><div class="bangku btn-hijau" data-id="0">5</div></td>
		<td><div class="bangku btn-hijau" data-id="0">6</div></td>
		<td><div class="bangku btn-hijau" data-id="0">7</div></td>
	  <td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
		<td><div class="bangku btn-hijau" data-id="0">8</div></td>
		<td><div class="bangku btn-hijau" data-id="0">9</div></td>
		<td><div class="bangku btn-hijau" data-id="0">10</div></td>
		<td><div class="bangku btn-hijau" data-id="0">11</div></td>
		<td><div class="bangku btn-hijau" data-id="0">12</div></td>
		<td><div class="bangku btn-hijau" data-id="0">13</div></td>
		<td><div class="bangku btn-hijau" data-id="0">14</div></td>
		<td>G</td>
  </tr>
	<tr>
		<td>H</td>
    <td><div class="bangku btn-hijau" data-id="0">1</div></td>
    <td><div class="bangku btn-hijau" data-id="0">2</div></td>
    <td><div class="bangku btn-hijau" data-id="0">3</div></td>
    <td><div class="bangku btn-hijau" data-id="0">4</div></td>
		<td><div class="bangku btn-hijau" data-id="0">5</div></td>
		<td><div class="bangku btn-hijau" data-id="0">6</div></td>
		<td><div class="bangku btn-hijau" data-id="0">7</div></td>
	  <td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
		<td><div class="bangku btn-hijau" data-id="0">8</div></td>
		<td><div class="bangku btn-hijau" data-id="0">9</div></td>
		<td><div class="bangku btn-hijau" data-id="0">10</div></td>
		<td><div class="bangku btn-hijau" data-id="0">11</div></td>
		<td><div class="bangku btn-hijau" data-id="0">12</div></td>
		<td><div class="bangku btn-hijau" data-id="0">13</div></td>
		<td><div class="bangku btn-hijau" data-id="0">14</div></td>
		<td>H</td>
  </tr>
</table><br><br>
</center>
<center><button type="button" class="btn btn-warning">Continue</button></center>
	<!-- END PAGE SOURCE -->
</body>
</html>
