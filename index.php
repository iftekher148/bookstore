<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<?php 
        $booksJson = file_get_contents('books.json');
        $books = json_decode($booksJson, true);
    ?>
	
	<table border="2px solid gray">
        <tr>
            <th> id </th>
            <th>Title </th>
            <th>Author </th>
            <th>Available </th>
            <th>Pages </th>
            <th>Isbn </th>
        </tr>
	<?php
	    foreach($books as $book):
	?>
	
	    <tr>
            <td> <?php echo $book['id']; ?> </td>
            <td> <?php echo $book['title']; ?> </td>
            <td> <?php echo $book['author']; ?> </td>
            <td> <?php echo $book['available']; ?> </td>
            <td> <?php echo $book['pages']; ?> </td>
            <td> <?php echo $book['isbn']; ?> </td>
        </tr>
		
	<?php 
	    endforeach; 
	?>
    </table>
	
    <br> 
    <a href="create.php"> Add Book </a>
    </br> 
	
	<br></br>
	<form action="delete.php" method="post">
        <label>Delete a list using id</label>
        <input type="text" name="id"> 
        <input type="submit" value="Delete the book">
    </form>
	
	<br></br>
	<form action="search.php" method="post">
		<input type="text" name="id"> 
        <input type="submit" value="Search Book">
    </form>
	
		
	
</body>
</html>