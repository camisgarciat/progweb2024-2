<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$imagem= 'https://fastly.picsum.photos/id/591/500/600.jpg?hmac=-Kkos27eyJiCYpVCF1YnFvnzJZ-9BvGtpNq2gB5n-9g'; 
$texto= 'testando php';

echo  "<img src='$imagem' alt='Imagem teste' />";
print "<p>$texto</p>";

?>
    
</body>
</html>