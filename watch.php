<?php include 'config.php'; ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php echo $sitedata['title'].' - '.$sitedata['discription']; ?></title>
	<?php include 'includes/head_options.php'; ?>
</head>
<body>
	<div class="navbar">
	<a href="/"><div class="logo"></div></a>
	<?php include 'includes/menu.php';  ?>
	</div>
	<div class="content">
        <div class="watch">
			<video class="video" controls>
            <source src="mov_bbb.mp4" type="video/mp4">
            </video>
			<h2>Powerful TIPS to get traffic from YouTube</h2></a>
			<table>
				<tr>
					<td><a href="/">Youtuber</a></td>
					<td>500 подписчиков</td>
					<td><a href="/">Подписаться</a></td>
				</tr>
			</table>
			<table style="float: right; display: block;">
				<tr>
					<td><a style="margin-right: 10px;" href="/"><i class="fa fa-thumbs-up" aria-hidden="true"></i>14432</a></td>
					<td><a href="/"><i class="fa fa-thumbs-down" aria-hidden="true"></i>1000</a></td>
				</tr>
			</table>
		</div>
		<div class="recommends">
			<h2>Рекомндации</h2>
			<div class="preview">
			<a href="/"><img src="/previews/previews.jpg" class="prev_img">
			<h2>Powerful TIPS to get traffic from YouTube</h2></a>
			<table>
				<tr>
					<td><a href="/">Youtuber</a></td>
					<td>100 просмотров</td>
				</tr>
			</table>
		</div>
				 <div class="preview">
			<a href="/"><img src="/previews/previews.jpg" class="prev_img">
			<h2>Powerful TIPS to get traffic from YouTube</h2></a>
			<table>
				<tr>
					<td><a href="/">Youtuber</a></td>
					<td>100 просмотров</td>
				</tr>
			</table>
		</div>
		</div>
		<div class="comments">
			<hr>
			<h4 style="margin-left: 10px;">Комментарии</h4>
			<form action="php-functions/comment.php" method="POST" >
				<textarea rows="5" class="default-form textarea-form" type="text" name="comment"> </textarea><br>
				<input placeholder="Комментарий" class="default-form submit-form" type="submit" name="" value="Отправить">
			</form>
			<p>Вы не можете оставлять коментарии. Пожалуйста <a href="/">авторизуйтесь.</a></p>
			<div class="comment">
				<table>
					<tr>
						<td><a href="/">Youtuber</a></td>
						<td>2019-12-12</td>
					</tr>
				</table>
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.</p>
			</div>
			<div class="comment">
				<table>
					<tr>
						<td><a href="/">Youtuber</a></td>
						<td>2019-12-12</td>
					</tr>
				</table>
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.</p>
			</div>
			<div class="comment">
				<table>
					<tr>
						<td><a href="/">Youtuber</a></td>
						<td>2019-12-12</td>
					</tr>
				</table>
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.</p>
			</div>
		</div>
		</div>
</body>
</html>