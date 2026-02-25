# r/MinecraftHelp Web Scoreboard

This project is a modern web-based scoreboard for the [r/MinecraftHelp](https://www.reddit.com/r/MinecraftHelp/) subreddit. It displays a live leaderboard of user points, powered by [u/NitwitBot](https://www.reddit.com/user/NitwitBot) and the [MCH-PointsBot](https://github.com/slfhstd/MCH-PointsBot) backend.

## Features
- Responsive, modern UI
- Live scoreboard of top contributors
- Data sourced from a local SQLite database managed by MCH-PointsBot
- Customizable and easy to deploy

## How it Works
- The backend ([MCH-PointsBot](https://github.com/slfhstd/MCH-PointsBot)) tracks user points and updates a SQLite database.
- This web app (index.php) queries the database and displays the top users in a styled, sortable table.
- The design is tailored for the r/MinecraftHelp community and integrates with u/NitwitBot.

## Setup
1. Clone this repository.
2. If you want to use Docker, ensure you have Docker and Docker Compose installed.
3. Edit the `docker-compose.yml` file if you need to change volume or port mappings.
4. Start the service with:

   ```sh
   docker-compose up -d
   ```

   This will run the web scoreboard at http://localhost:8555/ (or your server's IP).

5. If running without Docker, ensure you have PHP and a web server (e.g., Apache, Nginx) installed.
6. Place your SQLite database (pointsbot.db) in the correct location as referenced in `index.php` and the Docker volume (`/docker/data/pointsbot/data:/DB`).
7. Start your web server and navigate to the site.

## Customization
- Edit `style.css` for appearance tweaks.
- Update `index.php` for logic or database changes.

## Credits
- [r/MinecraftHelp](https://www.reddit.com/r/MinecraftHelp/)
- [u/NitwitBot](https://www.reddit.com/user/NitwitBot)
- [MCH-PointsBot](https://github.com/slfhstd/MCH-PointsBot)

---

For questions or contributions, open an issue or pull request!
