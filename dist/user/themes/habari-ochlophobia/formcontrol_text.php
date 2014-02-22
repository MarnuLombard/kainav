<div class="<?php echo $field; ?>">
	<label for="<?php echo $field; ?>"><?php echo $caption; ?></label>
	<input type="text" id="<?php echo $field; ?>" name="<?php echo $field; ?>" value="<?php echo Utils::htmlspecialchars($value); ?>" tabindex="<?php echo $tabindex; ?>" />
</div>