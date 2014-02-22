<?php //namespace Habari; ?>
<?php echo $theme->content($content, 'admin'); ?>

<header id="post-<?php echo $content->id; ?>" class="post type-<?php echo $content->typename; ?> status-<?php echo $content->statusname; ?>">
	<h1><?php echo $content->title_out; ?></h1>
	<p>
		<time datetime="<?php echo $content->modified->format('c'); ?>">
			<?php echo $content->modified_out; ?>
		</time>
	</p><p>&#x2766;</p>
</header>

<?php if( $content->project->platform == 'habari' ): ?>
	<p>
	<?php echo $content->title; ?> is a <?php echo $content->project->type; ?> developed for the
	<a href="http://habariproject.org">Habari</a> blogging platform and released under the
	<a href="<?php echo $content->project->license['url']; ?>" rel="license">
	<?php echo $content->project->license['name']; ?></a>.

	<?php if( $content->project->screenshot_url ): ?>
	<img class="card right" src="<?php echo $content->project->screenshot_url; ?>" alt="Screenshot of the Scientist theme">
	<?php endif; ?>

	</p>
<?php endif; ?>

<?php echo $content->content_out; ?>


<?php if ( $content->project->help ) : ?>
	<h2>More Information</h2>
	<?php echo $content->project->help; ?>
<?php endif; ?>

<h2>Download</h2>
<p>A variety of releases are listed below. <?php if( $content->project->platform == 'habari'): ?>
Please download the one compatible with your version of Habari.<?php endif; ?></p>

<table id="releases" style="font-size:14px;">
<thead>
	<tr>
		<th>Tag</th>
		<th>Date</th>
		<th>Description</th>
		<th>Download</th>
	</tr>
</thead>
<tbody>
<?php
// Add a "tag" to download the alpha development version;
$alphatag = new stdclass;
$alphatag->tag = 'alpha';
$alphatag->date = $content->project->pushdate;
$alphatag->zipball_url = $content->project->zipball_url;

if( $content->project->platform == 'habari' ) {
	$alphatag->message = 'Alpha version currently being developed; only compatible with the latest development version of Habari (' . Version::get_habariversion() . ')';
}
else {
	$alphatag->message = 'Alpha version currently being developed; not for the feint of heart';
}

$tags = $content->project->tags;
array_unshift( $tags, $alphatag );
?>

<?php foreach( $tags as $tag ): ?>
	<tr>
		<td><?php echo $tag->tag; ?></td>
		<td class="date"><?php echo $tag->date->format( 'Y-m-d'); ?></td>
		<td><?php echo $tag->message; ?></td>
		<td>
			<a href="<?php echo $tag->zipball_url; ?>" title="Download a zip of the <?php echo $content->project->type; ?>">ZIP</a>
		</td>
	</tr>
<?php endforeach; ?>
</tbody>
</table>

<p><?php echo $content->title; ?> is hosted on <a href="<?php echo $content->project->github; ?>">GitHub</a>.
You can grab the current version (<strong><?php echo $content->project->version; ?></strong>) by cloning
the GitHub <a href="<?php echo $content->project->cloneurl; ?>">repository</a>. I also encourage you to fork
the project.</p>

<pre><code>git clone <?php echo $content->project->cloneurl; ?></code></pre>

<h2>Support</h2>
<p>If you have any issue or suggestion concerning this project, please
<a href="<?php echo $content->project->new_issue_url; ?>">open an issue</a> on GitHub.</p>
