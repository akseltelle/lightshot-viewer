<?php
function getRandomWord($len = 5) {
    $word = array_merge(range('a', 'z', '0', '9'), range('A', 'Z'));
    shuffle($word);
    return substr(implode($word), 0, $len);
} 
?>
<head>
	<title>Lightshot Random</title>
	<meta http-equiv="refresh" content="5" />
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</head>
	<div class="container">
		<br>
		<div class="navbar-fixed-top">
			<center>
				<a style="border-radius: 0px; !important" class="btn btn-danger" href="index?refresh" role="button">Manual Refresh</a>
			</center>
		</div>
	</div>
<?php 
function rand_word($length, $case=0) 
{ 
   $word = ""; 
   for($ix = 1; $ix <= $length; $ix++) 
   { 
      $word .= chr(rand(97, 122)); 
   } 
   if($case == 1)
   { 
      $word = strtoupper($word); 
   } 
   elseif($case == 2) 
   { 
      $word = ucwords($word); 
   } 
   return($word); 
} 


?>
<iframe src="https://webshot.gorgonsteel.io/process?url=https://prnt.sc/a<?php echo ''.rand_word(5)."";  ?>" width="1" height="1" frameBorder="0"></iframe>
<body style="margin:0px;padding:0px;overflow:hidden">
    <iframe src="https://prnt.sc/a<?php echo ''.rand_word(5)."";  ?>" frameborder="0" style="overflow:hidden;overflow-x:hidden;overflow-y:hidden;height:100%;width:100%;position:absolute;top:0px;left:0px;right:0px;bottom:0px" height="100%" width="100%"></iframe>
</body>