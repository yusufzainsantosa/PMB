<?php
	$qi = mysqli_query("SELECT * FROM info ORDER BY iTgl DESC");
	while ($i=mysqli_fetch_array($qi)){
		$tgl = tgl_indo($i[iTgl]);
		echo "<article>
					<h2><a href='#'>$i[iJudul]</a></h2>
					<p>$i[iIsi]</p>
					<br>
					<div class='blog_links'>
						<span class='right'><p class='sub'>Pada : $tgl</p></span>
					</div>
				</article>";
	}
?>