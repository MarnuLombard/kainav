<?php

class OliverTheme extends Theme
{
	public function action_template_header($theme) 
	{
		Stack::add('template_stylesheet', $theme->get_url('/css/style.css'), 'style');
		Stack::add('template_stylesheet', 'http://fonts.googleapis.com/css?family=Sorts+Mill+Goudy:400,400italic|PT+Sans:400');
	}
	
	/**
	 * No homepage. 
	 * @param type $user_filters
	 */
//	public function act_display_home($user_filters = array()) 
//	{
//		Utils::redirect(Post::get(array('status' => Post::status('published'), 'content_type' => Post::type('entry')))->permalink);
//	}
	
}

