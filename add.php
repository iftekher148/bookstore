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

    <?php 
	    $rows_count = count($books); 
	?>

    <?php  
	    if(isset($_POST['id']) && isset($_POST['title']) && isset($_POST['author']) && isset($_POST['available']) && isset($_POST['pages']) && isset($_POST['isbn'])): 
	?>
            <?php $books[$rows_count]['id'] = $_POST['id']; ?> 
            <?php $books[$rows_count]['title'] = $_POST['title']; ?> 
            <?php $books[$rows_count]['author'] = $_POST['author']; ?>    
            <?php $books[$rows_count]['available'] = $_POST['available']; ?>    
            <?php $books[$rows_count]['pages'] = $_POST['pages']; ?>    
            <?php $books[$rows_count]['isbn'] = $_POST['isbn']; ?>    
    <?php else: ?>
            <p> You are not adding book? </P>
    <?php endif; ?>

    <?php 
		$new_quary = json_encode($books);
		file_put_contents('books.json', $new_quary ); 
    ?>

    <table border="2px solid gray">
        <tr>
            <th> Id </th>
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

</body>
</html>