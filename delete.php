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

    <?php if(isset($_POST['id'])): ?>       
            <?php
                $d = $_POST['id']; 
                foreach($books as $book){
                    foreach($book as $key => $value){
                        if($key == 'id'){
                            if($d == $value){
                                $i = array_search($book, $books);
                                break;                            
                            }
                        }
                    }
                }
                unset($books[$i]); 
             ?>
        <?php 
		    endif;
		?>
    
    <?php 
	    $new_quary = json_encode($books);
		file_put_contents('books.json', $new_quary); 
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
		
        <?php foreach($books as $book): ?>
        <tr>
            <td> <?php echo $book['id']; ?> </td>
            <td> <?php echo $book['title']; ?> </td>
            <td> <?php echo $book['author']; ?> </td>
            <td> <?php echo $book['available']; ?> </td>
            <td> <?php echo $book['pages']; ?> </td>
            <td> <?php echo $book['isbn']; ?> </td>
        </tr>
        <?php endforeach; ?>
    </table>
    
	<br> </br>
    <form action="index.php">
        <input type="submit" value="Delete Again">
    </form>

    
</body>
</html>