<?php
include 'script.php';
$movies = getMovies("movies.txt");
$movies[1]->select();
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title>Movies!</title>
		<link type="text/css" rel="stylesheet" href="style.css"/>
		<link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
	</head>
	<body>
		<div class = "wrapper">
			<div class = "left">
				<div class = "search">
					<input class = "searchLine" placeholder="Search movies...">
					</input>
				</div>
				<div class = "sidebar">
					<div class = "navTitle">
						Main
					</div>
					<ul class = "linkList">
						<li class = "navLink">
							<img class = "navLink__button" src="play.png" alt="icon">
							<div class = "navLink__text">Playing</div>
						</li>
						<li class = "navLink navLink--selected">
							<img class = "navLink__button" src="play.png" alt="icon">
							<div class = "navLink__text">Discover</div>
						</li>
						<li class = "navLink">
							<img class = "navLink__button" src="play.png" alt="icon">
							<div class = "navLink__text">Activity</div>
						</li>
						<li class = "navLink">
							<img class = "navLink__button" src="play.png" alt="icon">
							<div class = "navLink__text">Top Charts</div>
						</li>
						<li class = "navLink">
							<img class = "navLink__button" src="play.png" alt="icon">
							<div class = "navLink__text">New Releases</div>
						</li>
					</ul>
					<div class = "navTitle">
						Your Movie Circles
					</div>
					<ul class = "linkList">
						<li class = "navLink">
							<img class = "navLink__button" src="play.png" alt="icon">
							<div class = "navLink__text">This I Must See</div>
						</li>
						<li class = "navLink">
							<img class = "navLink__button" src="play.png" alt="icon">
							<div class = "navLink__text">The Best</div>
						</li>
					</ul>
						<div class = "navTitle">
							Collections
						</div>
					<ul class = "linkList">
						<li class = "navLink">
							<img class = "navLink__button" src="play.png" alt="icon">
							<div class = "navLink__text">Me and Bob</div>
						</li>
						<li class = "navLink">
							<img class = "navLink__button" src="play.png" alt="icon">
							<div class = "navLink__text">Travel Movies</div>
						</li>
					</ul>
				</div>
			</div>
			<div class = "center">
				<div class = "topbar">
					<div class = "discover">
						Discover
					</div>
					<div class = "sort">
						<a href="" class = "sort__link">Release Date</a>
						<span class = "sort__divider">|</span>
						<span class = "sort__link sort__link--selected">Popularity</span>
					</div>
					<div class = "buttons">
						<img class = "topbarButton" src="play.png" alt="icon">
						<img class = "topbarButton" src="play.png" alt="icon">
					</div>
				</div>
				<div class = "movies">
				<?php foreach($movies as $movie){?>
					<div class = "movie l-movie">
						<img class = "movie__image <?php if($movie->isSelected){echo 'movie__image--selected';} ?>" src = "<?php echo $movie->image;?>" alt="movie pic">
						<?php if($movie->isSelected){?>
							<img class = "movie__play" alt="play button">
							<img class = "movie__rewind" alt="rewind"><?php }?>
						<div class = "movie__title"><?php echo $movie->name;?></div>
						<div class = "movie__info"><?php echo $movie->genres . '<br>' . $movie->runtime;?> min</div>
					</div>
				<?php } ?>
				</div>
			</div>
			<div class = "right">
				<div class = "profile">
					<ul class = "linkList">
						<li class = "friend">
							<img class = "friend__pic" src = "face.svg" alt="profile">
							<div class = "friend__text">
								<div class = "friend__name">
									Colin Narans
								</div>
							</div>
							<img class = "friend__status" src="green.svg" alt="status">
						</li>
				</div>
				<div class = "friends">
					<div class = "navTitle">Online</div>
					<ul class = "linkList">
						<li class = "friend">
							<img class = "friend__pic" src = "face.svg" alt="profile">
							<div class = "friend__text">
								<div class = "friend__name">
									Robert Robertson
								</div>
								<div class = "friend__movie">
									Jurassic Park
								</div>
							</div>
							<img class = "friend__status" src="green.svg" alt="status">
						</li>
						<li class = "friend">
							<img class = "friend__pic" src = "face.svg" alt="profile">
							<div class = "friend__text">
								<div class = "friend__name">
									Short Name
								</div>
								<div class = "friend__movie">
									Short
								</div>
							</div>
							<img class = "friend__status" src="green.svg" alt="status">
						</li>
						<li class = "friend">
							<img class = "friend__pic" src = "face.svg" alt="profile">
							<div class = "friend__text">
								<div class = "friend__name">
									Short Name
								</div>
								<div class = "friend__movie">
									Short
								</div>
							</div>
							<img class = "friend__status" src="green.svg" alt="status">
						</li>
						<li class = "friend">
							<img class = "friend__pic" src = "face.svg" alt="profile">
							<div class = "friend__text">
								<div class = "friend__name">
									Short Name
								</div>
								<div class = "friend__movie">
									Short
								</div>
							</div>
							<img class = "friend__status" src="green.svg" alt="status">
						</li>
						<li class = "friend">
							<img class = "friend__pic" src = "face.svg" alt="profile">
							<div class = "friend__text">
								<div class = "friend__name">
									Short Name
								</div>
								<div class = "friend__movie">
									Short
								</div>
							</div>
							<img class = "friend__status" src="green.svg" alt="status">
						</li>
					</ul>
					<div class = "navTitle">Offline</div>
					<ul class = "linkList">
						<li class = "friend">
							<img class = "friend__pic" src = "face.svg" alt="profile">
							<div class = "friend__text">
								<div class = "friend__name">
									Short Name
								</div>
								<div class = "friend__movie">
									Short
								</div>
							</div>
							<img class = "friend__status" src="green.svg" alt="status">
						</li>
						<li class = "friend">
							<img class = "friend__pic" src = "face.svg" alt="profile">
							<div class = "friend__text">
								<div class = "friend__name">
									Short Name
								</div>
								<div class = "friend__movie">
									Short
								</div>
							</div>
							<img class = "friend__status" src="green.svg" alt="status">
						</li>
						<li class = "friend">
							<img class = "friend__pic" src = "face.svg" alt="profile">
							<div class = "friend__text">
								<div class = "friend__name">
									Short Name
								</div>
								<div class = "friend__movie">
									Short
								</div>
							</div>
							<img class = "friend__status" src="green.svg" alt="status">
						</li>
						<li class = "friend">
							<img class = "friend__pic" src = "face.svg" alt="profile">
							<div class = "friend__text">
								<div class = "friend__name">
									Short Name
								</div>
								<div class = "friend__movie">
									Short
								</div>
							</div>
							<img class = "friend__status" src="green.svg" alt="status">
						</li>
						<li class = "friend">
							<img class = "friend__pic" src = "face.svg" alt="profile">
							<div class = "friend__text">
								<div class = "friend__name">
									Short Name
								</div>
								<div class = "friend__movie">
									Short
								</div>
							</div>
							<img class = "friend__status" src="green.svg" alt="status">
						</li>
					</ul>
				</div>
				<div class = "chat">
					<input class = "searchLine" placeholder="Chat with...">
					</input>
				</div>
			</div>
		</div>
	</body>
</html>