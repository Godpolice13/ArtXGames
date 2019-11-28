<style type="text/css">
	#text{
		background-color: rgb(85, 85, 85);
	    border-radius: 12.5px;
	    padding-top: 3px;
	    padding-bottom: 1px;
	}
</style>

<?php 
$con = mysqli_connect('mysqlweb.clans.hu', 'forizonplay143', 'A6aBeLYHESuPEGY', 'forizonplay143');
function formatDate($date){
	return date('g:i a', strtotime($date));
}

$query = " SELECT * FROM ArtXGames_Csevego ORDER BY date DESC";
$run = mysqli_query($con, $query);

	while ($row =mysqli_fetch_array($run, MYSQLI_BOTH)) {
		?>
			<tr align="center">
				<!-- <span style="color:green;"><?php echo $row['name']; ?></span> <br> -->
				<div id="text"> <span style="color:rgb(175, 5, 5); margin-left: 12.5px; font-weight: bold;"><?php echo ucfirst($row['name'])."</span><br><span style='color:rgb(175, 175, 175)'>". str_repeat('&nbsp', 12); echo ""; echo $row['msg']; ?></span>
				<span style="float:right;color:rgb(25, 25, 215)"><?php echo formatDate($row['date']); echo "&nbsp&nbsp&nbsp&nbsp&nbsp"; ?></span></div><br>
			</tr>
		<?php
	}
?>
