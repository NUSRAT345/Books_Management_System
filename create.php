<?php
$json =file_get_contents('books.json');
$bookJson =json_decode($json,true);
$title = $_POST['title'];
$author =$_POST['authorName'];
$available=$_POST['available'];
$pages=$_POST['pages'];
$isbn=$_POST['ISBN'];
?>
<?php
  if($bookJson)
  {
    $newBookArray = [
      'title' => $title,
      'author' => $author,
      'available' => $available,
      'pages' => $pages,
      'isbn' => $isbn,
    ];

    $bookJson[] = $newBookArray; 

    $bookJson = json_encode($bookJson); 

    file_put_contents('books.json', $bookJson); 

    header('Location: index.php'); 
    
  else
  echo "Failed";
?>