<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Личный сайт студента GeekBrains</title>
	<link rel="stylesheet" href="style.css"> 
	<script type="text/javascript">

		var answer = parseInt(Math.random() * 100);
		var tryCount = 0;
		var maxTryCount = 3;
		var playerNum = 1;


		function readInt(){
			var number = document.getElementById("userAnswer").value;
			return parseInt(number);
			// return +document.getElementById("userAnswer").value;
		}

		function write(text){
			document.getElementById("info").innerHTML = text;
		}

		function hide(id){
			document.getElementById(id).style.display = "none";
		}


		function guess(){
			
			tryCount+=0.5; //Индийский код, настало твое время!
			var userAnswer = readInt();
			
			if(userAnswer == answer){
				write("<b>Поздравляю, Игрок " + playerNum + ", вы угадали!</b>");
				hide("button");
				hide("userAnswer");
				hide("playerName");
			} else if(tryCount >= maxTryCount){
				write("Вы проиграли<br>Правильный ответ: " + answer);
				hide("button");
				hide("userAnswer");
				hide("playerName")
			} else if(userAnswer > answer){
				write("Вы ввели слишком большое число<br>Попробуйте еще раз. Введите число от 1 до 100");
				if (playerNum==1){playerNum=2; writePlayerNum();}
				else{playerNum=1; writePlayerNum();}
			} else if(userAnswer < answer){
				write("Вы ввели слишком маленькое число<br>Попробуйте еще раз. Введите число от 1 до 100");		
				if (playerNum==1){playerNum=2; writePlayerNum();}
				else{playerNum=1; writePlayerNum();}		
			}
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

			<h1>Игра угадайка Multiplayer</h1>

			<div class="box">

				
					<p id="info">Угадайте число от 0 до 100</p>
					<p id="playerName"></p>
					<input type="text" id="userAnswer">

					<a href="#" onClick="guess();" id="button">Начать</a>	
					
				

				</div>	
			</div>

        </div>
    </div>
</div>

	

</div>
<div class="footer">
	Copyright &copy; Vasily Pupkin
<div>
			<script>
			function writePlayerNum(){
						document.getElementById("playerName").innerHTML = 'Ходит игрок №' + playerNum;
					}
					writePlayerNum();
</script>
</body>
</html>