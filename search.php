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
	
	 <?php if(isset($_GET['id'])): ?>
        <?php
            $d = $_GET['id'];
            foreach($books as $book){
                foreach($book as $k => $v){
                    if($k == 'id'){
                        if($d == $v){
                            $i = array_search($book, $books);
                            break;
                        }
                    }
                }
            }

            foreach($books[$i] as $key => $val){
                echo $key . " : " . $val;
                echo '<br>';
            }
        ?>
    <?php endif; ?>

</body>
</html>