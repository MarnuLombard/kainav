<?php

/**
 * OchlophobiaTheme is a custom Theme class.
 *
 * @package Habari
 */



// We must tell Habari to use OchlophobiaTheme as the custom theme class:
define('THEME_CLASS', 'OchlophobiaTheme');

/**
 * A custom theme for Ochlophobia output
 */
class OchlophobiaTheme extends Theme
{
	private $handler_vars = array();

	/**
	 * On theme initialization
	 */
	public function action_init_theme()
	{
		/**
		 * Apply these filters to output
		 */
		if (!Plugins::is_loaded('HabariMarkdown')) {
			// Apply Format::autop() to post content...
			Format::apply('autop', 'post_content_out');
		}
		// Truncate content excerpt at "<!--more-->"...
		Format::apply_with_hook_params('more', 'post_content_out');
		// Apply Format::autop() to comment content...
		Format::apply('autop', 'comment_content_out');
		// Apply Format::tag_and_list() to post tags...
		Format::apply('tag_and_list', 'post_tags_out');

		$this->load_text_domain('ochlophobia');
	}

	public function add_template_vars()
	{
		$this->assign('home_tab', 'Blog'); //Set to whatever you want your first tab text to be.

		if (!$this->assigned('pages')) {
			$this->assign('pages', Posts::get(array('content_type' => 'page', 'status' => Post::status('published'), 'nolimit' => 1)));
		}
		if (!$this->assigned('user')) {
			$this->assign('user', User::identify());
		}
		if (!$this->assigned('recent_entries')) {
			$this->assign('recent_entries', Posts::get(array('limit' => 10, 'content_type' => 'entry', 'status' => Post::status('published'), 'orderby' => 'pubdate DESC')));
		}

		$this->add_template( 'ochlophobia_text', dirname(__FILE__) . '/formcontrol_text.php' );
		$this->add_template( 'ochlophobia_textarea', dirname(__FILE__) . '/formcontrol_textarea.php' );
		$this->add_template( 'ochlophobia_submit', dirname(__FILE__) . '/formcontrol_submit.php' );

		parent::add_template_vars();
	}

	public function filter_theme_call_header($return, $theme)
	{
		if ($this->request->display_search) {
			echo '<meta name="robots" content="noindex,nofollow">';
		} elseif ($this->request->display_entries_by_date
			|| $this->request->display_entries_by_tag) {
			echo '<meta name="robots" content="noindex,follow">';
		}

		$main_color = 'd4d4d4';
		$navi_color = '999999';
		if ($this->posts) {
			$colors = array(
				array('fac3de', 'ff4fa8'),
				array('f6cca4', 'd9822b'),
				array('d9d991', '9c9d1c'),
				array('bbdf96', '65a822'),
				array('98e3e3', '22abab'),
				array('b0d7ff', '489ef5'),
				array('e4c9ff', 'bd7aff')
				);
			$post = $this->posts instanceof Posts && count($this->posts) > 0 ? $this->posts[0] : $this->posts;
			if (isset($post->pubdate)) {
				$color_idx = abs(crc32($post->pubdate->int)) % count($colors);
				$main_color = $colors[$color_idx][0];
				$navi_color = $colors[$color_idx][1];
			}
		}
		echo '<style type="text/css">#articles,#pager{background-color:#' . $main_color . '}#nav a:focus,#nav a:hover{color:#' . $navi_color . ';}</style>';

		return $return;
	}

	public function filter_post_tags_class($tags)
	{
		if ( !count( $tags ) )
			return 'no-tags';

		$tag_slugs = array();
		foreach ( $tags as $tag ) {
			$tag_slugs[] = 'tag-' . $tag->term;
		}
		return implode( ' ', $tag_slugs );
	}

	public function theme_title($theme)
	{
		$title = '';

		if (count($this->handler_vars) === 0) {
			$this->handler_vars = Controller::get_handler()->handler_vars;
		}
		if ($this->request->display_entries_by_date && count($this->handler_vars) > 0) {
			$date_string = '';
			$date_string .= isset($this->handler_vars['year']) ? $this->handler_vars['year'] : '' ;
			$date_string .= isset($this->handler_vars['month']) ? '‒' . $this->handler_vars['month'] : '' ;
			$date_string .= isset($this->handler_vars['day']) ? '‒' . $this->handler_vars['day'] : '' ;
			$title = sprintf(_t('%1$s &raquo; Chronological Archives of %2$s', 'ochlophobia'), $date_string, Options::get('title'));
		}
		else
		if ($this->request->display_entries_by_tag && isset($this->handler_vars['tag'])) {
			$tag = (count($this->posts) > 0) ? Tags::get_by_slug($this->handler_vars['tag'])->term_display : $this->handler_vars['tag'] ;
			$title = sprintf(_t('%1$s &raquo; Taxonomic Archives of %2$s', 'ochlophobia'), htmlspecialchars($tag), Options::get('title'));
		}
		else
		if (($this->request->display_entry || $this->request->display_page || $this->request->display_post) && isset($this->posts)) {
			$title = sprintf(_t('%1$s § %2$s', 'ochlophobia'), strip_tags($this->posts->title_out), Options::get('title'));
		}
		else
		if ($this->request->display_search && isset($this->handler_vars['criteria'])) {
			$title = sprintf(_t('%1$s &raquo; Search Results of %2$s', 'ochlophobia'), htmlspecialchars($this->handler_vars['criteria']), Options::get('title'));
		}
		else
		{
			$title = Options::get('title');
		}

		if ($this->page > 1) {
			$title = sprintf(_t('%1$s &rsaquo; Page %2$s', 'ochlophobia'), $title, $this->page);
		}

		return $title;
	}

	public function theme_mutiple_h1($theme)
	{
		$h1 = '';

		if (count($this->handler_vars) === 0) {
			$this->handler_vars = Controller::get_handler()->handler_vars;
		}
		if ($this->request->display_entries_by_date && count($this->handler_vars) > 0) {
			$date_string = '';
			$date_string .= isset($this->handler_vars['year']) ? $this->handler_vars['year'] : '' ;
			$date_string .= isset($this->handler_vars['month']) ? '‒' . $this->handler_vars['month'] : '' ;
			$date_string .= isset($this->handler_vars['day']) ? '‒' . $this->handler_vars['day'] : '' ;
			$h1 = '<h1>' . sprintf(_t('Posts written in <strong>%s</strong>', 'ochlophobia'), $date_string) . '</h1>';
		}
		else
		if ($this->request->display_entries_by_tag && isset($this->handler_vars['tag'])) {
			$tag = (count($this->posts) > 0) ? Tags::get_by_slug($this->handler_vars['tag'])->term_display : $this->handler_vars['tag'] ;
			$h1 = '<h1>' . sprintf(_t('Posts tagged with <strong>%s</strong>', 'ochlophobia'), htmlspecialchars($tag)) . '</h1>';
		}
		else
		if ($this->request->display_search && isset($this->handler_vars['criteria'])) {
			$h1 = '<h1>' . sprintf(_t('Search results for “<strong>%s</strong>”', 'ochlophobia'), htmlspecialchars($this->handler_vars['criteria'])) . '</h1>';
		}
		return $h1;
	}

	/**
	 * Provides a link to the previous page
	 *
	 * @param string $text text to display for link
	 */
	public function theme_prev_page_link($theme, $text = NULL)
	{
		$settings = array();

		// If no text was supplied, use default text
		if ($text == '') {
			$text = _t('Newer Posts', 'ochlophobia') . ' &rarr;';
		}

		// If there's no previous page, skip and return null
		$settings['page']= (int) ($theme->page - 1);
		if ($settings['page'] < 1) {
			return '<span class="next-page">' . $text . '</span>';
		}

		return '<a class="next-page" href="' . URL::get(null, $settings, false) . '" title="' . $text . '">' . $text . '</a>';
	}

	/**
	 * Provides a link to the next page
	 *
	 * @param string $text text to display for link
	 */
	public function theme_next_page_link( $theme, $text = NULL )
	{
		$settings = array();

		// If no text was supplied, use default text
		if ($text == '') {
			$text = '&larr; ' . _t('Older Posts', 'ochlophobia');
		}

		// If there's no next page, skip and return null
		$settings['page']= (int) ( $theme->page + 1);
		$items_per_page = isset($theme->posts->get_param_cache['limit']) ?
			$theme->posts->get_param_cache['limit'] :
			Options::get('pagination');
		$total = Utils::archive_pages( $theme->posts->count_all(), $items_per_page );
		if ( $settings['page'] > $total ) {
			return '<span class="prev-page">' . $text . '</span>';
		}

		return '<a class="prev-page" href="' . URL::get(null, $settings, false) . '" title="' . $text . '">' . $text . '</a>';
	}

	public function action_form_comment($form) {
		$form->append('fieldset', 'cf_fieldset', _t('Leave your thoughts', 'ochlophobia'));

		$form->cf_fieldset->append('wrapper', 'cf_rules');
		$form->cf_fieldset->cf_rules->append('static', 'comment_rules', '<ul><li>' . _t('You can use some HTML in your comment.', 'ochlophobia') . '</li><li>' . _t('Your comment may not display immediately due to spam filtering. Please wait for moderation.', 'ochlophobia') . '</li></ul>');

		$form->cf_fieldset->append('wrapper', 'cf_inputarea');

		$form->cf_content->move_before($form->cf_commenter);
		$form->cf_content->move_into($form->cf_fieldset->cf_inputarea);
		$form->cf_content->caption = _t('Your Comments', 'ochlophobia');
		$form->cf_content->template = 'ochlophobia_textarea';

		$form->cf_commenter->move_into($form->cf_fieldset->cf_inputarea);
		$form->cf_commenter->caption = _t('Name', 'ochlophobia');
		$form->cf_commenter->template = 'ochlophobia_text';

		$form->cf_email->move_into($form->cf_fieldset->cf_inputarea);
		$form->cf_email->caption = _t('E-mail', 'ochlophobia');
		$form->cf_email->template = 'ochlophobia_text';

		$form->cf_url->move_into($form->cf_fieldset->cf_inputarea);
		$form->cf_url->caption = _t('Website <span>(optional)</span>', 'ochlophobia');
		$form->cf_url->template = 'ochlophobia_text';

		$form->cf_submit->move_into($form->cf_fieldset->cf_inputarea);
		$form->cf_submit->caption = _t('Send', 'ochlophobia');
		$form->cf_submit->template = 'ochlophobia_submit';
	}
}
?>
