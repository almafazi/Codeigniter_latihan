<?php echo validation_errors(); ?>

<?php echo form_open('news/update/'.$news_item['id']); ?>

<label for="title">Judul</label>
<input type="text" value="<?php echo $news_item['title']; ?>" name="title"><br>
<label for="text">Teks</label><br>
<textarea name="text" id="" cols="30" rows="10"><?php echo $news_item['text']; ?></textarea>
<input type="submit" name="submit" value="kirim">
<?php echo form_close(); ?>
