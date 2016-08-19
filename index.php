<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru" lang="ru">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>nigt.music_EF</title>
	<script 
			src="jquery-2.2.3.js"
			
			></script>
	
	
	
	
<script >
		
	 $(document).ready(function() {
	$("#content div").hide(); // Скрываем содержание
	$("#tabs li:first").attr("id","current"); // Активируем первую закладку
	$("#content div:first").fadeIn(); // Выводим содержание
    
    $('#tabs a').click(function(e) {
        e.preventDefault();        
        $("#content div").hide(); //Скрыть все сожержание
        $("#tabs li").attr("id",""); //Сброс ID
        $(this).parent().attr("id","current"); // Активируем закладку
        $('#' + $(this).attr('title')).fadeIn(); // Выводим содержание текущей закладки
    });
});

 </script>
	
	
	
			
	
		<link rel = "stylesheet" href="style.css"/>	
	
	
</head>
	<body>
			
		<div id="header">
		 <a title="main" href="index2.html">
			<img src="logo2.gif" alt="логотип"/>		
		 </a>
			<a title="main" href="">
			<p0>night.music.FE</p0>
		<a title="sing_up" href="singup.html" 
			style= "color:#fff"/>	
			<p2>sing_up</p2>
				
		<a title="log_in" href="login.html" 
			style= "color:#ffffff"/>	
			<p1>log_in</p1></div>
	
		</div>
	
		<div id="content1">	
			
		<a>
			<tr>
				<table>
			<p3><div class="pp"> Randon playlist</div></p3>
			<th><div class="hover"> <a href="ambient.html"><img src = "ambient.gif"></a></div></th>	
			<th><div class="hover"><a href="jazz.html"><img src = "jazz.gif"></a></div></th>
			<th><div class="hover"><a href="Dnb.html"><img src = "dnb.png"></a></div></th>
			</tr>
			<th><div class="hover"><a href="neoclassical.html"><img src = "NeoClassical.png"></a></div></th>
			<th><div class="hover"><a href="post-rock.html"><img src = "Post-rock.gif"></a></div></th>
			<th><div class="hover"><a href="Instrumental.html"><img src = "Instrumental.gif"></a></div></th>
				
			</table>
		
			</a>
		</div>
			<div id="content2">
				


   <ul id="tabs">

    <li><a href="#" title="Ambient"><p4>Ambient</p4></a></li>

    <li><a href="#" title="Jazz"><p4>Jazz</p4></a></li>

    <li><a href="#" title="Drum & Buss"><p4>D n B</p4></a></li>

    <li><a href="#" title="NeoClassica"><p4>Neo Classica</p4></a></li>
	   <li><a href="#" title="Post-rock"><p4>Post-rock</p4></a></li>
	     <li><a href="#" title="Instrumental"><p4>Instrumental</p4></a></li>

</ul>

 

<div id="content">

    <div id="Ambient"> 
		<td>
			 <p5>
			<table>
				
		 <tr>
			
			
		<?php

	$string_CBLF = "<td>Carbon Based Lifeforms</td>";
	echo  "$string_CBLF ";
			 
	$string_MS = "<td>Mystical Sun</td>";
	echo " $string_MS ";
	
	$string_K = "<td>Koan</td>";
	echo " $string_K";
	
	$string_CO = "<td>Connect.Ohm </td></tr>";
	echo $string_CO;
	
	$string_EM = "<td>E-Mantra</td>";
	echo $string_EM;
	
	$string_C = "<td>Cell</td>";
	echo $string_C;
	
	$string_MR = "<td> Margot Reisinger </td>";
	echo $string_MR;
	
	$string_M = "<td>Mayak</td></tr>";
	echo $string_M;
	
	$string_E = "<td>Erot </td>";
	echo $string_E;
	
	$string_SZ = "<td>SiebZehn</td>";
	echo $string_SZ;
	
	$string_FN = "<td>Formless & Noman </td>";
	echo $string_FN;
	
	$string_Sub = "<td>Subheim</td>";
	echo $string_Sub;
	
	
		?>
				
	</tr>
	</table>
	</p5>
	</td>
	</div>

    <div id="Jazz">																											
		
		
	<tr>
		
	
</tr>
		
	</div>

    <div id="LoFi">
		...
	</div>

    <div id="NeoClassica">
		...
	</div>
	
	
	<div id="Post-rock">
	 <p5><table border="1">
	<tr>
	

		
		<td id='loadText' style="cursor:pointer"> God is an astronaut </td> 
	
		
			</tr>

		 </table>
		 </p5>

	
		 </div>
	
	
		<script>
		$(document).ready(function(){
			$('#loadText').click(function () {
		$('#loader').load('./content.html', function(){
			
						  });
			 });
		 });
	</script>
			

	
	<div id="Instrumental">
		...
	</div>
	</div>
				</div>
				
				<div id ="content3">

				
<div id="slider">
	<input type="radio" name="slider" id="slide1" checked="">
	<input type="radio" name="slider" id="slide2">
	<input type="radio" name="slider" id="slide3">
	<input type="radio" name="slider" id="slide4">
	<input type="radio" name="slider" id="slide5">

	<div id="slides">
		<div id="overflow">
			<div class="inner">
				<div class="page">
					<img src="LoFibw.gif" />
					<img src="ambientbw.gif" />
					<img src="Instrumental.gif" />
					<img src="Post-rock.gif" />
				</div>
				<div class="page">
					<img src="picture1.gif" />
						<img src="picture2.gif" />
						<img src="picture3.gif" />
					<img src="Instrumental.gif" />
				</div>
				<div class="page">
					<img src="LoFibw.gif" />
					<img src="ambientbw.gif" />
					<img src="Post-rockbw.gif" />
					<img src="Jazzbw.gif" />
					
				</div>
				<div class="page">
					<img src="Post-rock.gif" />
					<img src="NeoClassical.gif" />
					<img src="Instrumental.gif" />
					<img src="LoFi.gif" />
				</div>
				<div class="page">
					<img src="http://placehold.it/588x250" />
					<img src="http://placehold.it/588x250" />
					<img src="http://placehold.it/588x250" />
					<img src="http://placehold.it/588x250" />
				</div>
				
			</div> <!--inner-->
		</div> <!--overflow-->
	</div> <!--slides-->
	
	<div id="controls">
		<label for="slide1"></label>
		<label for="slide2"></label>
		<label for="slide3"></label>
		<label for="slide4"></label>
		<label for="slide5"></label>
	</div>
	
	<div id="active">
		<label for="slide1"></label>
		<label for="slide2"></label>
		<label for="slide3"></label>
		<label for="slide4"></label>
		<label for="slide5"></label>
	</div>
</div>
			</div>
					
	<div id = "content4">
		
<table border="2">
				<tr>
				<th><p3>Album</p3></th>
					<th> <p3>Playlist</p3></th>
						
	</tr>
			
			<tr> <td>+++</td>
	<td><div id="loader"></div> </td></tr>
		 
		 </div>
					
			
			
		
			
			
			
		
		
	
		
	</body>
</html>