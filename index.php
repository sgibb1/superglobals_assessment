<!DOCTYPE html>
<html>

<body>

<header><?php echo htmlspecialchars($_GET['title']); ?></header>

<h2>Year Released: <?php echo htmlspecialchars($_GET['year']); ?></h2>

<h2>Gross Revenue: <?php echo htmlspecialchars($_GET['box']); ?> Million</h2>

<h2>This is the movie poster: <?php echo htmlspecialchars($_GET['poster']); ?></h2>

</body>
</html>
