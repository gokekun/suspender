<html>
	<head>
		<title>S: <?echo htmlspecialchars($_GET["title"]); ?></title>
	</head>
	<body bgcolor="#3B403F" text="#FFFFFF">
		<div style="position:fixed;top:50%;left:50%;transform:translate(-50%,-50%);">
			<div style="width:500px;word-wrap: break-word;">
				<font size=8>This page was suspended</font><br /><br /><br />
				<font size=4>
					<a href="<?echo htmlspecialchars($_GET["url"]); ?>" style="color: #ffffff;text-decoration: none; overflow-wrap: break-word;word-wrap: break-word;">
						<b><?echo htmlspecialchars($_GET["title"]); ?></b><br/>
						<?echo htmlspecialchars($_GET["url"]); ?>
					</a>
				</font>
			</div>
		</div>
	</body>
</html>
