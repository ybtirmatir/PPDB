<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />    
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <link rel="icon" href="dk.png">
    <title>Dewan Komputer - Summernote WYSIHTML5</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"></link>
    <link rel="stylesheet" href="css/font-awesome.min.css"> 
    <link href="summernote/summernote.css" rel="stylesheet">
</head>
<body>
	<nav class="navbar navbar-dark bg-success fixed-top">
	  <a class="navbar-brand" href="index.php" style="color: #fff;">
	    Dewan Komputer
	  </a>
	</nav>

	<div class="container mb-3">
		<h2 align="center" style="margin: 70px 10px 10px 10px;">Summernote WYSIHTML5</h2><hr>

		<div class="mb-3">
      <form action="" method="POST">
        <textarea id="content" name="content" rows="10"></textarea>
        <input type="submit" name="submit" style="margin-top: 20px;" class="btn btn-success mb-3" value="Tampilkan">
      </form>
		</div><hr>
    <h4>Contoh Output :</h4>
    <?php
      if (isset($_POST['submit'])) {
        echo $_POST['content'];
      }
    ?>
    <hr style="margin-bottom: 100px;">

		<div class="navbar bg-dark fixed-bottom">
			<div style="color: #fff;">© <?php echo date('Y'); ?> Copyright:
			    <a href="https://dewankomputer.com/"> Dewan Komputer</a>
			</div>
		</div>
	</div>

  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
	<script src="summernote/summernote.min.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      $('#content').summernote({
        height: "300px",
        styleWithSpan: false
      });
    }); 
  </script>
</body>
</html>