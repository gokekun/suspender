<?php
	$title = htmlspecialchars($_GET["title"]);
	$url = htmlspecialchars($_GET["url"]);
?>

<html>
	<head>
		<title>S: <?echo $title; ?></title>
	</head>
	<body bgcolor="#3B403F" text="#FFFFFF">
		<div style="position:fixed;top:50%;left:50%;transform:translate(-50%,-50%);">
			<div style="width:500px;word-wrap: break-word;">
				<font size=8>This page was suspended</font><br /><br /><br />
				<font size=4>
					<a href="<?echo $url; ?>" style="color: #ffffff;text-decoration: none; overflow-wrap: break-word;word-wrap: break-word;">
						<b><?echo $title; ?></b><br/>
						<?echo $url; ?>
					</a>
				</font>
			</div>
		</div>
		<?include "write.php";?>
	</body>
</html>
