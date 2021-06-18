<?php
	session_start();
	 /**
    * Header content
    *
    * @author  Made by Posysaev
    *
    * @since 1.0.0
    */
?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<title>kyrsach</title>
	<meta charset="UTF-8">
	<meta name="format-detection" content="all">
	<link rel="stylesheet" href="css/style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
</head>
<body>
	<div class="wrapper">
		<main class="page">
			<header class="header">
	<div class="header__row">
			<div class="menu__icon icon-menu">
				<span></span>
				<span></span>
				<span></span>
			</div>
			<div class="menu__body">
			<div class="header__logo"><img src="img/logo3.png" alt="" style="margin-top: 20px;"></div>
				<ul class="menu__list" style="margin-bottom: 80px;">
					<li><a href="cpu/index.html" class="menu__link">cpu</a></li>
					<li id = "vkarts" style="padding-right: 0px;"><a href="video cards/index.html" class="menu__link">video cards</a></li>
					<li style="padding-left: 70px;"><a href="RAM/index.html" class="menu__link">RAM</a></li>
					<li><a href="contacts/index.html" class="menu__link">contact</a></li>



	
	<?php
		if(!isset($_SESSION['email']) && !isset($_SESSION['password'])){
	?>
			<li><div class="menu__link">
				<a href="/form_register.php">Регистрация</a>
			</div></li>

			<li><div class="menu__link">
				<a href="/form_auth.php">Авторизация</a>
			</div></li>
	<?php
		}else{
	?>
			<li><div class="menu__link">
				<a href="/logout.php">Выход</a>
			</div></li>

			<div>
				Привет <?php echo $_SESSION['first_name'].' '.$_SESSION['last_name']; ?>
			</div>
	<?php
		}
	?>

	
	<!-- <div class="clear"></div> -->

				</ul>
			</div>
	</div>
</header>
			<div class="main-screen">
				<div class="main-screen__bg ibg">
					<img src="img/fon.jpg" alt="">
				</div>
			</div>
			<div class="content">
				<section class="generation">
					<div class='container'>
						<div class="generation__block block">
							<div class="block__icon"><img src="img/icons/title/01.png" alt=""></div>
							<h1 class="block__title">Персональные компьютеры в наше время</h1>
							<div class="block__text">В нынешнем мире практически невозможно представить, что кто-то может жить без компьютеров. Они стали электронным устройством, используемым почти каждый день для людей любого возраста и имеют важное значение практически во всех сферах, которые существуют в наши дни. Сегодня все, что связано с вашей повседневной жизнью можно сделать несколькими щелчками. </div>
						</div>
					</div>
				</section>
				<section class="brands">
					<div class="brands__row">
						<div class="brands__column brands__column_b">
							<div class="brands__item item">
								<span class="item__logo">
									
								</span>
								<span class="item__image ibg">
									<img src="img/brands/01.jpg" alt="">
								</span>
							</div>
						</div>
						<div class="brands__column">
							<div class="brands__content block">
								<div class="block__icon"><img src="img/icons/title/03.png" alt=""></div>
								<h2 class="block__title">игровой пк</h2>
								<div class="block__text block__text_j">Игровой компьтер - это мощьная станция, которая обладает огромной вычислительной силой, чтобы тянуть все новинки. В первую очередь важна видеокарта, без нее это прозвище получить невозможно. Видеокарты бывают разные, но игровые объеденяет два пункта - это мощь и подстветка </div>
							</div>
							<div class="brands__image ibg">
								<img src="img/brands/02.jpg" alt="">
							</div>
						</div>
					</div>
				</section>
				<section class="brands brands_rev">
					<div class="brands__row">
						<div class="brands__column brands__column_b">
							<div class="brands__item item">
								<span class="item__logo">
									
								</span>
								<span class="item__image ibg">
									<img src="img/brands/04.jpg" alt="">
								</span>
							</div>
						</div>
						<div class="brands__column">
							<div class="brands__content block">
								<div class="block__icon"><img src="img/icons/title/02.png" alt=""></div>
								<h2 class="block__title">пк для работы</h2>
								<div class="block__text block__text_j">Пк для работы это тип компьютера, в котором особонно важен процессор, ведь, в первую очередь, на нём будут происходить самые сложные и ресурсоёмкие вычисления.</div>
							</div>
							<div class="brands__image ibg">
								<img src="img/brands/03.jpg" alt="">
							</div>
						</div>
					</div>
				</section>
				<section class="brands brands_last">
					<div class="brands__row">
						<div class="brands__column">
							<div class="brands__item item">
								<span class="item__logo">
									
								</span>
								<span class="item__image ibg">
									<img src="img/brands/05.jpg" alt="">
								</span>
							</div>
						</div>
						<div class="brands__column">
							<div class="brands__content block">
								<div class="block__icon"><img src="img/icons/title/04.png" alt=""></div>
								<h2 class="block__title">ноутбуки</h2>
								<div class="block__text block__text_j">Ноутбуки это портативные компьютеры, которые всегда можно взять с собой. Сложно представить человека 21 века без данного аппарата, ведь практически любая деятельность на сегодняшний день подразумевает наличие персонального устройства для выполнения тех или иных задач.  </div>
							</div>
							<div class="brands__image ibg">
								<img src="img/brands/06.jpg" alt="">
							</div>
						</div>
						<div class="brands__column">
							<div class="brands__item item">
								<span class="item__logo">
									
								</span>
								<span class="item__image ibg">
									<img src="img/brands/07.jpg" alt="">
								</span>
							</div>
						</div>
					</div>
				</section>
				
				<footer class="footer">
	<div class='container'>
		<div class="footer__row">
			<div class="footer__column">
				<div class="footer__address">
					<p>BELIKOV Moscow</p>
					<p>115280 Autozavodskya Street </p>
					<p>kostyftre@inbox.ru</p>
				</div>
			</div>
			<div class="footer__column">
				<div class="footer__social social">
					<a href="https://twitter.com/_Weissberg_" class="social__link">
						<img src="img/icons/social/01.png" alt="">
					</a>
					<a href="https://www.instagram.com/ilja_waissberg/" class="social__link2">
						<img src="img/icons/social/insta.png" alt="">
					</a>
					<a href="https://vk.com/belikov__ilya" class="social__link2">
						<img src="img/icons/social/vk.png" alt="">
					</a>
				</div>
			</div>
			<div class="footer__column">
				<div class="footer__dev dev">
					<span class="dev__text">Designed by</span>
					<span class="dev__icon">
						<img src="img/icons/logo2.2.png" alt="">
					</span>
				</div>
			</div>
		</div>
	</div>
</footer>
			</div>
		</main>
	</div>
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script src="js/main.js"></script>

</body>
</html>