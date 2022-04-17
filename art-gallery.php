<museum>
	<h2 class="stern-voice">Art Gallery</h2>

	<art-wall>

		<?php include('art-factory.php') ?>
		<?php 

		foreach ($gallery as $art) { ?>

		<picture-frame>
			<h3 class="calm-voice">Day <?=$art['day']?></h3>

			<picture>
				<img src="<?=$art['piece']?>" alt="">
			</picture>
		</picture-frame>

		<?php }
		?>
	</art-wall>
</museum>

