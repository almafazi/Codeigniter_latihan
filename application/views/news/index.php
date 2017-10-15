<?php
foreach ($news as $news) { ?>

<h1><a href="<?php echo site_url('news/'.$news['slug']); ?>"><?php echo $news['title']; ?></a></h1>
<p><?php echo $news['text']; ?></p>

<?php } ?>
