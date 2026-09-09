<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="google" content="notranslate">
	<meta http-equiv="Content-Language" content="en">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" href="img/favicon.ico">
	<title>r/MinecraftHelp Full Scoreboard</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="page-shell">
		<header class="site-header">
			<a href="https://reddit.com/r/minecrafthelp/" target="_blank" rel="noopener noreferrer" class="brand-link">
				<img src="img/header.png" alt="r/MinecraftHelp banner">
			</a>
		</header>
		<nav class="nav" aria-label="Main navigation">
			<a href="index.php" class="button primary"><span>Top 20</span></a>
		</nav>
		<div class="description">
			<span class="eyebrow">Community leaderboard</span>
			<h1>Full r/MinecraftHelp Scoreboard</h1>
		</div>
		<main class="content">
			<section class="scoreboard" aria-label="Full Points leaderboard">
				<div class="leaderboard-head">
					<div>
						<p class="leaderboard-kicker">Live standings</p>
						<h2>All Helpers</h2>
					</div>
					<a href="index.php" class="button secondary">Top 20</a>
				</div>
				<div class="search-wrap">
					<label class="search-label" for="user-search">Search username</label>
					<input id="user-search" class="user-search" type="text" placeholder="Type a username..." aria-label="Search leaderboard by username">
				</div>
				<?php
				$myPDO = new PDO('sqlite:/DB/pointsbot.db');
				$excludedNames = [
					'LONGGGGGGGGGGGGGGGGG',
					'boluserectus',
					'tempestalphaprime',
					'Old_Man_D',
					'Fish_001',
					'The_1_Bob',
					'Hoppprx',
					'Mindcraftjoe',
					'WhiteLotusJr',
					'sup0042',
					'chair_all_day',
					'investthings',
					'Testing2001',
					'JuDg3_Jacob',
					'S-Quidmonster',
					'jose345no',
					'dubwhale',
					'_chaosophy_',
					'Pr04merican',
					'Pi__3',
					'kpkrl28',
					'Oneill4',
					'kjun5946',
					'Tailmc',
					'PikePalan',
					'qxzyxzwqw',
					'D0CTOR_ZED',
					'emulatorguy076',
					'MNLegoBoy',
					'TetsuNoGemu',
					'Srazkat',
					'thE_29',
					'WafflesYT1',
					'Supercrafter1729',
					'MinecraftHelpModTeam',
					'Shadow_Walker137',
					'ScottishCrafter',
					'Greymagic27_'
				];
				$fullQuery = 'SELECT * FROM redditor WHERE name NOT IN (' . implode(',', array_map([$myPDO, 'quote'], $excludedNames)) . ') AND points >= 5 ORDER BY points DESC';
				$fullRows = $myPDO->query($fullQuery)->fetchAll(PDO::FETCH_ASSOC);
				echo '<table id="leaderboard-table"><thead><tr><th>Place</th><th>Username</th><th>Points</th></tr></thead><tbody>';
				$place = 1;
				foreach ($fullRows as $row) {
					echo '<tr data-name="' . htmlspecialchars($row['name'], ENT_QUOTES) . '"><td>' . $place++ . '</td><td>' . htmlspecialchars($row['name']) . '</td><td>' . htmlspecialchars($row['points']) . '</td></tr>';
				}
				echo '</tbody></table>';
				?>
				<script>
					const searchInput = document.getElementById('user-search');
					const rows = Array.from(document.querySelectorAll('#leaderboard-table tbody tr'));
					searchInput.addEventListener('input', function () {
						const query = this.value.trim().toLowerCase();
						rows.forEach(function (row) {
							const name = (row.dataset.name || '').toLowerCase();
							const visible = !query || name.includes(query);
							row.style.display = visible ? '' : 'none';
						});
					});
				</script>
			</section>
		</main>
		<footer>
			<div class="footer">
				<span><a href="https://reddit.com/u/NitwitBot/">u/NitwitBot</a> uses <a href="https://github.com/slfhstd/MCH-Pointsbot">MCH-Pointsbot</a>.</span>
			</div>
		</footer>
	</div>
</body>
</html>
