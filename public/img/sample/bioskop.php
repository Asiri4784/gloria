<!DOCTYPE HTML>
<html>
<head>
<title>Nonton21.com - Nonton Terus Sampe Mampus</title>
  <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet"type="text/css" href="bootstrap/css/bootstrap.css">
  <link rel="shortcut icon" href="img/favicon-96x96.png	">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</head>
<body>
<?php include 'connection.php' ?>
<header>
<nav class="navbar">
<div class="container-fluid" style = "background-color : red;">
<div class="navbar-header">
<img src ="img/nonton21.jpg">
</div>
<div class = "container-fluid">
<ul class="nav navbar-nav" id ="navlist">
<li style = "display: inline;"><a href ="home.php" style = "color:#ffffff; display:inline-block;"><span class="glyphicon glyphicon-home"></span> Beranda</a>
<li style = "display: inline;"><a href ="bioskop.php" style = "color:#ffffff; display:inline-block;"><span class="glyphicon glyphicon-list"></span> Bioskop</a>
<li style = "display: inline;"><a href ="film.php" style = "color:#ffffff; display:inline-block;"><span class="glyphicon glyphicon-film"></span> Film</a>
</ul>
</div>
</div>
</nav>			
</header>
<div class = "container-fluid" style = "background-color : white">
<p align = "center">
<div align = "center">
<h2>Cari Bioskop</h2>
<form action="" method="POST">
Nama Kota:<br/>
<input type="text" name="kota">
<br/>
Judul Film:<br/>
<input type="text" name="film">
<br/>
<br/>
<button type="submit" name ="submit" value="Submit">Cari</button>
<br/>
</form>
<table class="table table-hover" id="table_id"  data-link="row"><tr>
<div id="content">
<?php
if(!isset($_POST['submit']))
{
$start=0;
$limit=10;

if(isset($_GET['id']))
{
$id=$_GET['id'];
$start=($id-1)*$limit;
}

$query=pg_query("select * from bioskop LIMIT '$limit' OFFSET '$start'");
echo "<ul>";
while($query2=pg_fetch_array($query))
{
echo "<li>".$query2['nama']."</li>";
}
echo "</ul>";
$rows=pg_num_rows(pg_query("select * from bioskop"));
$total=ceil($rows/$limit);

if($id>1)
{
echo "<a href='?id=".($id-1)."' class='button'>PREVIOUS</a>";
}
if($id!=$total)
{
echo "<a href='?id=".($id+1)."' class='button'>NEXT</a>";
}

echo "<ul class='page'>";
for($i=1;$i<=$total;$i++)
{
if($i==$id) { echo "<li class='current'>".$i."</li>"; }

else { echo "<li><a href='?id=".$i."'>".$i."</a></li>"; }
}
echo "</ul>";
?>
</div>
<?php include 'search.php' ?>	
<tr>
</table>
</div>
</p>
</div>
<br/>
<div class = "container-fluid" style = "background-color : red;">
<h5 align ="center"><span class="glyphicon glyphicon-copyright-mark"></span> &nbsp 2015 by A07 Design</h5>
</div>
</body>
</html>