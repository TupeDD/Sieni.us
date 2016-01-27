<?php
$song = 'shirk.wav';
$video = 'mp4.mp4';
$gif = 'gif.gif';
?>

<!DOCTYPE html>
<html>
<head>
  <title>GIF.us</title>
</head>
<body>

<video controls autoplay loop>
  <source src="<?php echo $video; ?>" type="video/mp4">
</video>

<br><br>

<img src="<?php echo $gif; ?>">

<br><br>

<audio controls autoplay loop>
<source src="<?php echo $song; ?>" type="audio/mpeg">
</audio>


</body>
</html>
