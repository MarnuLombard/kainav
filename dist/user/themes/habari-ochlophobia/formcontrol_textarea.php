<div class="<?php echo $field; ?>">
	<label for="<?php echo $field; ?>" class="required"><?php echo $caption; ?></label>
	<textarea id="<?php echo $field; ?>" name="<?php echo $field; ?>" rows="10" cols="60" tabindex="<?php echo $tabindex; ?>" required><?php echo Utils::htmlspecialchars($value); ?></textarea>
</div>
