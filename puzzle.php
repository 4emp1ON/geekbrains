<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Личный сайт студента GeekBrains</title>
	<link rel="stylesheet" href="style.css"> 
</head>
<body>

<div class="content">
	<?php
	include 'menu.php';
	?>

<div class="contentWrap">
    <div class="content">
        <div class="center">

			<h1>Игра в загадки</h1>

			<div class="box">
				<?php
					$db = array(
						"Загадка №1" => array(
										"question" 	=> "Летом серый, а зимой белый.",
										"answers" 	=> array(
														"заяц",
														"зайка",
														"серый",)),
						"Загадка №2" => array(
							"question" 	=> "Узнать его нам просто, узнать его легко: высокого он роста и видит далеко.",
							"answers" 	=> array(
											"жираф",
											"жирафик",
											"длинношей",)),
						"Загадка №3" => array(
							"question" 	=> "У кого из зверей хвост пушистее и длинней?",
							"answers" 	=> array(
											"лиса",
											"лисица",
											"лисичка",)),
					);
					///TODO доработать IF под возможность масштабировать программу
					if(isset($_GET["userAnswer1"]) && isset($_GET['userAnswer2']) && isset($_GET["userAnswer3"])){
						$userAnswer[1] = mb_strtolower($_GET["userAnswer1"], "UTF-8");
						$userAnswer[2] = mb_strtolower($_GET["userAnswer2"], "UTF-8");
						$userAnswer[3] = mb_strtolower($_GET["userAnswer3"], "UTF-8");
						$rightAnswers = 0;
						for ($i=1;$i<=count($db);$i++){
							if(in_array($userAnswer[$i], $db['Загадка №'.$i]['answers'])){
								$rightAnswers++;
							}
						};
						echo "Количество правильных ответов: ".$rightAnswers;
						
						// echo count($db);
						// $score=0;
						// if ($userAnswer1=='сон' || $userAnswer1=='сноведение'){
						// 	$score++;
						// };
						// if ($userAnswer2=='морской' || $userAnswer2=='укус акулы'){
						// 	$score++;
						// };
						// if ($userAnswer3=='шахматный' || $userAnswer3=='мертвый'){
						// 	$score++;
						// };
						// echo 'Дано правильных ответов: ' . $score;

					}
				?>
				<form method="GET">
					<?php
						for ($i=1;$i<=count($db);$i++){
							echo "
							<p>".$db["Загадка №".$i]['question']."</p>
							<input type='text' name='userAnswer".$i."'>
							";
						};
						echo "<input type='submit' id='button'>";
					?>

				</form>

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