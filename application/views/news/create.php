<?php echo validation_errors(); ?>

<?php echo form_open('news/create'); ?>

<label for="title">Judul</label>
<input type="text" name="title"><br>
<label for="text">Teks</label><br>
<textarea name="text" id="" cols="30" rows="10"></textarea>
<input type="submit" name="submit" value="kirim">
<?php echo form_close(); ?>
