<?php
switch ( $content->typename ) {
	case 'blogroll':
		$icon = 'link';
		break;
	case 'project':
		$icon = 'cog';
		break;
	case 'example':
		$icon = 'attachment';
		break;
	case 'code':
		$icon = 'console';
		break;
	case 'review':
		$icon = 'book';
		break;
	case 'audio':
	case 'music':
		$icon = 'music';
		break;
	case 'image':
	case 'picture':
		$icon = 'camera';
		break;
	case 'video':
	case 'movie':
		$icon = 'camera-2';
		break;
	case 'product':
		$icon = 'cart';
		break;
	case 'recipe':
		$icon = 'food';
		break;
	case 'podcast':
		$icon = 'podcast';
		break;
	case 'download':
		$icon = 'box-add';
		break;
	case 'person':
		$icon = 'user';
		break;
	default:
		$icon = false;
		break;
}
?>

<?php if ( $icon ) : ?>
<i class="icon-<?php echo $icon; ?>"></i>
<?php endif; ?>
