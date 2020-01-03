<!-- For everypage the header and footer should display. The inbetween content should only change-->
<?php include("includes/header.php"); ?>

<h1 class="pageHeadingBig">You Might Also Like</h1>

<div class="gridViewContainer">
    
    <?php
		$albumQuery = mysqli_query($con, "SELECT * FROM albums ORDER BY RAND() LIMIT 10");

		/*For each itertaion $row variable will contain a new array
    	which include all data of a single row(current iteration row) in albums table*/
		while($row = mysqli_fetch_array($albumQuery)) {
            
            echo "<div class='gridViewItem'>
					<a href='album.php?id=" . $row['id'] . "'>
						<img src='" . $row['artworkPath'] . "'>

						<div class='gridViewInfo'>"
							. $row['title'] .
						"</div>
					</a>

				</div>";
		}
	?>

</div>

<?php include("includes/footer.php"); ?>
