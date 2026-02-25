<!doctype html>
<html lang="en">
<head>

<meta charset="UTF-8">
<meta name="google" content="notranslate">
<meta http-equiv="Content-Language" content="en">
<link rel="shortcut icon" href="img/favicon.ico">
<title>r/MinecraftHelp Main Scoreboard!</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
	<header>
		<a href="https://reddit.com/r/minecrafthelp/" target="_blank">
			<img src="../img/header.png" alt="r/MinecraftHelp banner">
		</a>
	</header>
	<nav class="nav">
		<a href="https://www.reddit.com/r/minecrafthelp/" class="button"><span>r/MinecraftHelp</span></a>
	  <a href="https://status.mchelp.uk" class="button"><span>Bot Status</span></a>
  </nav>
	<div class="description" align=center>
		r/MinecraftHelp Points Scoreboard!
	</div>
	<main>
		<section class="scoreboard",align=center>
			<?php
			$myPDO = new PDO('sqlite:/DB/pointsbot.db');
			$result = $myPDO->query("SELECT * FROM redditor WHERE name != 'LONGGGGGGGGGGGGGGGGG' AND name != 'boluserectus' AND name != 'tempestalphaprime'AND name != 'Old_Man_D' AND name != 'Fish_001' AND name != 'The_1_Bob' AND name != 'Hoppprx' AND name != 'Mindcraftjoe' AND name != 'WhiteLotusJr' AND name != 'sup0042' AND name != 'chair_all_day' AND name != 'investthings' AND name != 'Testing2001' AND name != 'JuDg3_Jacob' AND name != 'S-Quidmonster' AND name != 'jose345no' AND name != 'dubwhale' AND name != '_chaosophy_' AND name != 'Pr04merican' AND name != 'Pi__3' AND name != 'kpkrl28' AND name != 'Oneill4' AND name != 'kjun5946' AND name != 'Tailmc' AND name != 'PikePalan' AND name != 'qxzyxzwqw' AND name != 'D0CTOR_ZED' AND name != 'emulatorguy076' AND name != 'MNLegoBoy' AND name != 'TetsuNoGemu' AND name != 'Srazkat' AND name != 'thE_29' AND name != 'WafflesYT1' AND name != 'Supercrafter1729' AND name != 'MinecraftHelpModTeam' AND name != 'ScottishCrafter'  AND name != 'Greymagic27_' AND points >= '5' ORDER BY points DESC;");
			echo "<table><tr><th>Place</th><th>Username</th><th>Points</th></tr>";
			$place = 1;
			foreach($result as $row)
			{
				echo "<tr><td>".$place++."</td><td>".htmlspecialchars($row["name"])."</td><td>".htmlspecialchars($row["points"])."</td></tr>";
			}
			echo '</table>';
			?>
		</section>
	</main>
	<footer>
		<div class="footer">
			<span><a href="https://reddit.com/u/NitwitBot/">u/NitwitBot</a> uses <a href="https://github.com/slfhstd/MCH-Pointsbot">MCH-Pointsbot</a>.</span>
		</div>
	</footer>
</body>
</html>