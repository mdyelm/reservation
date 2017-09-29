<?php
/**
* CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
* Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
*
* Licensed under The MIT License
* For full copyright and license information, please see the LICENSE.txt
* Redistributions of files must retain the above copyright notice.
*
* @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
* @link          http://cakephp.org CakePHP(tm) Project
* @package       app.View.Layouts
* @since         CakePHP(tm) v 0.10.0.1076
* @license       http://www.opensource.org/licenses/mit-license.php MIT License
*/
$cakeDescription = __d('cake_dev', 'トップページ |　オンライン営業に特化したクラウドソーシング「タクセル」');
?>
<!DOCTYPE html>
<html>
	<head>
		<?php echo $this->Html->charset(); ?>
		<title>
		<?php echo $cakeDescription ?> -
		<?php echo $this->fetch('title'); ?>
		</title>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
		<!-- ogp setting -->
		<meta property="og:title" content="「タクセル」オンライン営業に特化したクラウドソーシング" />
		<meta property="og:description" content="自宅にいながら、あなたの営業経験が活かせる！100%リモート・在宅のお仕事サイト。タクセラー（営業スタッフ）として働きたい方の、事前予約受付中！" />
		<meta property="og:type" content="wbsite" />
		<meta property="og:url" content="http://taku-sale.tech/" />
		<meta property="og:image" content="//taku-sale.tech/asset/images/img_ogp.png" />
		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
		<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<!-- Optional theme -->
		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
		<!-- Latest compiled and minified JavaScript -->
		<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
		<?php
		echo $this->Html->meta ( 'favicon-32x32.png', 'fav/favicon-32x32.png', array (
								    'type' => 'icon' 
								) );
		echo $this->Html->css(['style', 'cake.generic']);
		echo $this->Html->script(['jquery-ui','jquery.validationEngine','jquery.validationEngine-en','plugins/jquery.smallipop', 'scripts','prof']);
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
		?>
	</head>
	<body>
		<header>
			<div id="header_notice">
				<div class="container">
					<p class="text-center">12月に正式サービス開始予定です</p>
				</div>
			</div>
			<div id="header_row" class="clearfix">
				<div class="container">
					<p>オンライン営業に特化したクラウドソーシング「タクセル」</p>
					<ul id="subnav" class="list-unstyled">
						<!-- li><a href="/faq/"><i class="fa fa-question-circle"></i>&nbsp;よくある質問</a></li -->
						<li><a href="mailto:info@taku-sale.tech"><i class="fa fa-envelope"></i>&nbsp;お問い合わせ</a></li>
					</ul>
				</div>
			</div>
			<!-- /.header_row -->
			<nav class="navbar navbar-inverse navbar-fixed-top">
				<div class="containerfluid">
					<!--ウィンドウ幅に合わせて可変-->
					<div class="container">
						<div class="navbar-header">
							<!--スマホ用トグルボタンの設置-->
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
							<!-- ul class="nav navbar-nav navbar-right sp_only nav_menus">
							<li class="login"><a href="/takusaler/"><i class="fa fa-lock"></i>
								<p>ログイン</p>
							</a></li>
						</ul -->
						<!--ロゴ表示の指定-->
						<div class="logo"><a href="<?php echo $this->webroot; ?>"><img src="<?php echo $this->webroot; ?>images/img_logo.png" alt="タクセル" width="132" height="27" /> </a></div>
					</div>
					<!--スマホ用の画面幅が小さいときの表示を非表示にする-->
					<div id="navbar" class="navbar-collapse collapse" aria-expanded="false" style="height: 1px;">
						<ul class="nav navbar-nav" id="gnav">
							<!-- li<?php if ($page == guide) {echo ' class="active"';}?>><a href="/pages/guide.php">はじめての方へ</a></li>
							<li<?php if ($page == takusaler) {echo ' class="active"';}?>><a href="/takusaler/job_search.php">仕事をさがす</a></li>
							<li<?php if ($page == corpmember) {echo ' class="active"';}?>><a href="/corpmember/job_order.php">仕事を依頼する</a></li -->
							<li ><a href="<?php echo $this->webroot; ?>news/">お知らせ</a></li>
							<li ><a href="<?php echo $this->webroot; ?>company/">会社情報</a></li>
							<!-- li class="signup sp_only<?php if ($page == signup) {echo ' active';}?>"><a href="/login/"><i class="fa fa-pencil"></i>&nbsp;12月<span>タクセラー</span>先行登録開始予定</a></li>
							<li class="sp_only<?php if ($page == faq) {echo ' class="active"';}?>"><a href="/faq/"><i class="fa fa-question-circle"></i>&nbsp;よくある質問</a></li -->
							<li class="sp_only"><a href="mailto:info@taku-sale.tech"><i class="fa fa-envelope"></i>&nbsp;お問い合わせ</a></li>
						</ul>
						<ul class="nav navbar-nav navbar-right pc_only nav_menus">
							<!-- li class="company_signup"><a href="/signup/corpmember.php">企業会員登録</a></li -->
							<li class="signup"><a href="https://goo.gl/forms/jHlog2Bku5HqpXy13" target="_blank">タクセラー事前登録する</a></li>
							<!-- li class="login"><a href="/login/"><i class="fa fa-lock"></i>
								<p> ログイン</p>
							</a></li -->
						</ul>
						<!-- /#nav_menus -->
					</div>
					<!--/.nav-collapse -->
				</div>
				<!--/.container-fluid -->
			</div>
		</nav>
	</header>
	<div id="content">
		<?php echo $this->Flash->render(); ?>
		<?php echo $this->fetch('content'); ?>
	</div>
	<p class="gotop">
		<a href="#">
			<img src="<?php echo $this->webroot; ?>images/gotop.png" alt="ページトップへ戻る">
		</a>
	</p>
	<div id="copy">
		<div class="container">
			<address>
				Copyright © takusale all right reserved.
			</address>
		</div>
	</div>
</body>
</html>