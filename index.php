<!DOCTYPE html>
<html>

<body>

<header><h1><?php echo htmlspecialchars($_GET['title']); ?></h1></header>

<h2>Year Released: <?php echo htmlspecialchars($_GET['year']); ?></h2>

<h2>Gross Revenue: <?php echo htmlspecialchars($_GET['box']); ?> Million</h2>

<h2>This is the movie poster:</h2> <img src="<?php echo htmlspecialchars($_GET['poster']);?>"></img>
  
<!-- title: Rounders year: 1998 revenue: 22 poster: https://pnimg.net/w/articles-attachments/1/5b9/7eba4e3879.jpg -->
  
</body>
</html>
