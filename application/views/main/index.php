<p><b>Main Page</b></p>


<?php foreach ($news as $value): ?>
	<h3><?php echo $value['title']; ?></h3>
	<p><?php echo $value['text']; ?></p>
<?php endforeach; ?>
