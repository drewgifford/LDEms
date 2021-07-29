<?php
	require './src/html/map-datalist.php';
?>

<div id="topbar">
	<h1>
		Let's Do Elections Map Simulator
	</h1>
</div>

<div id="layout">
	<div id="navigation">
		<?php
			require './src/html/map-search.php';
			require './src/html/lde.php';
		?>			
	</div>

	<div id="featured">
	<?php
		require './src/html/help-box.php';
		require './src/html/featured.php';
	?>
	</div>
</div>

<?php
	require './src/html/footer.php';
?>
