<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Личный сайт студента GeekBrains</title>
	<link rel="stylesheet" href="style.css"> 
	<script type="text/javascript">
		function generateStrongPassword(){
			var len = document.getElementById("passLength").value;
			if (len<8){
				document.getElementById("info").innerHTML = 'Не рекомендуется использовать пароль короче 8 символов';
				len = 8;}

			var an = an&&an.toLowerCase();
			var str="", i=0, min=an=="a"?10:0, max=an=="n"?10:62;
			for(;i++<len;){
			var r = Math.random()*(max-min)+min <<0;
			str += String.fromCharCode(r+=r>9?r<36?55:61:48);
			}
			document.getElementById("info").innerHTML+= '<br \/>Ваш надежный пароль: ' + str;
				
		}
	</script>
</head>
<body>

<div class="content">
	<?php
	include 'menu.php';
	?>

<div class="contentWrap">
    <div class="content">
        <div class="center">

			<h1>Генератор сложных паролей</h1>

			<div class="box">

				
					<p id="info">Введите необходимую длинну пароля</p>
					<input type="text" id="passLength">
					<br>
					<a href="#" onClick="generateStrongPassword();" id="button">Сгенерировать</a>
					
				

				</div>	
			</div>

        </div>
    </div>
</div>

	

</div>
<div class="footer">
	Copyright &copy; Vasily Pupkin
<div>


</body>
</html>