<?php
class FacebookComments extends Plugin
{
	private static function default_options( )
	{
		return array (
			'user_id' => '',
			'app_id' => '',
			'locale' => 'en_US',
			'num_posts' => 2,
			'width' => 500,
		);
	}

	function action_init( )
	{
		$this->load_text_domain( 'facebookcomments' );
		$this->add_template( 'block.facebookcomments', dirname( __FILE__ ) . '/block.facebookcomments.php' );
	}
	
	public function filter_block_list( $block_list )
	{
		$block_list[ 'facebookcomments' ] = _t( 'Facebook Comments', 'facebookcomments' );
		return $block_list;
	}

	public function action_block_form_facebookcomments( $form, $block )
	{
		// Load defaults
		foreach ( self::default_options( ) as $k => $v ) {
			if ( !isset( $block->$k ) )
				$block->$k = $v;
		}

		$form->append( 'text', 'user_id', $block, _t( 'User ID', 'facebookcomments' ) );
		$form->append( 'text', 'app_id', $block, _t( 'Application ID', 'facebookcomments' ) );
		$form->append( 'select', 'locale', $block, _t( 'Language', 'facebookcomments' ) );
		$form->locale->options = array(
			'af_ZA' => 'Afrikaans',
			'id_ID' => 'Bahasa Indonesia',
			'ms_MY' => 'Bahasa Melayu',
			'ca_ES' => 'Català',
			'cs_CZ' => 'Čeština',
			'cy_GB' => 'Cymraeg',
			'da_DK' => 'Dansk',
			'de_DE' => 'Deutsch',
			'en_GB' => 'English (UK)',
			'en_US' => 'English (US)',
			'en_UD' => 'English (Upside Down)',
			'es_LA' => 'Español',
			'es_ES' => 'Español (España)',
			'tl_PH' => 'Filipino',
			'fr_CA' => 'Français (Canada)',
			'fr_FR' => 'Français (France)',
			'ko_KR' => '한국어',
			'hr_HR' => 'Hrvatski',
			'it_IT' => 'Italiano',
			'lt_LT' => 'Lietuvių',
			'hu_HU' => 'Magyar',
			'nl_NL' => 'Nederlands',
			'ja_JP' => '日本語',
			'nb_NO' => 'Norsk (bokmål)',
			'pl_PL' => 'Polski',
			'pt_BR' => 'Português (Brasil)',
			'pt_PT' => 'Português (Portugal)',
			'ro_RO' => 'Română',
			'ru_RU' => 'Русский',
			'sk_SK' => 'Slovenčina',
			'sl_SI' => 'Slovenščina',
			'fi_FI' => 'Suomi',
			'sv_SE' => 'Svenska',
			'th_TH' => 'ภาษาไทย',
			'vi_VN' => 'Tiếng Việt',
			'tr_TR' => 'Türkçe',
			'zh_CN' => '中文(简体)',
			'zh_TW' => '中文(台灣)',
			'zh_HK' => '中文(香港)',
			'el_GR' => 'Ελληνικά',
			'bg_BG' => 'Български',
			'sr_RS' => 'Српски',
			'he_IL' => 'עברית',
			'ar_AR' => 'العربية',
			'hi_IN' => 'हिन्दी',
			'pa_IN' => 'ਪੰਜਾਬੀ',
			'ta_IN' => 'தமிழ்',
			'te_IN' => 'తెలుగు',
			'ml_IN' => 'മലയാളം',
			'az_AZ' => 'Azərbaycan dili',
			'bs_BA' => 'Bosanski',
			'et_EE' => 'Eesti',
			'en_PI' => 'English (Pirate)',
			'eo_EO' => 'Esperanto',
			'eu_ES' => 'Euskara',
			'fy_NL' => 'Frisian',
			'fo_FO' => 'Føroyskt',
			'ga_IE' => 'Gaeilge',
			'gl_ES' => 'Galego',
			'is_IS' => 'Íslenska',
			'sw_KE' => 'Kiswahili',
			'ku_TR' => 'Kurdî',
			'lv_LV' => 'Latviešu',
			'fb_LT' => 'Leet Speak',
			'la_VA' => 'lingua latina',
			'nn_NO' => 'Norsk (nynorsk)',
			'sq_AL' => 'Shqip',
			'ka_GE' => 'ქართული',
			'be_BY' => 'Беларуская',
			'mk_MK' => 'Македонски',
			'uk_UA' => 'Українська',
			'hy_AM' => 'Հայերեն',
			'fa_IR' => 'فارسی',
			'ps_AF' => 'پښتو',
			'ne_NP' => 'नेपाली',
			'bn_IN' => 'বাংলা',
			'gn_PY' => 'Avañe\'ẽ',
			'ay_BO' => 'Aymar aru',
			'jv_ID' => 'Basa Jawa',
			'ck_US' => 'Cherokee',
			'se_NO' => 'Davvisámegiella',
			'en_IN' => 'English (India)',
			'es_CL' => 'Español (Chile)',
			'es_CO' => 'Español (Colombia)',
			'es_MX' => 'Español (México)',
			'es_VE' => 'Español (Venezuela)',
			'tl_ST' => 'tlhIngan-Hol',
			'li_NL' => 'Limburgs',
			'mg_MG' => 'Malagasy',
			'mt_MT' => 'Malti',
			'nl_BE' => 'Nederlands (België)',
			'uz_UZ' => 'O\'zbek',
			'qu_PE' => 'Qhichwa',
			'rm_CH' => 'Rumantsch',
			'so_SO' => 'Soomaaliga',
			'fb_FI' => 'Suomi (koe)',
			'tt_RU' => 'Tatarça',
			'xh_ZA' => 'isiXhosa',
			'zu_ZA' => 'isiZulu',
			'mn_MN' => 'Монгол',
			'tg_TJ' => 'тоҷикӣ',
			'kk_KZ' => 'Қазақша',
			'yi_DE' => 'ייִדיש',
			'ur_PK' => 'اردو',
			'sy_SY' => 'ܐܪܡܝܐ',
			'mr_IN' => 'मराठी',
			'sa_IN' => 'संस्कृतम्',
			'gu_IN' => 'ગુજરાતી',
			'kn_IN' => 'ಕನ್ನಡ',
			'km_KH' => 'ភាសាខ្មែរ',
		);
		$form->append( 'text', 'num_posts', $block, _t( 'Number of posts', 'facebookcomments' ) );
		$form->append( 'text', 'width', $block, _t( 'Width', 'facebookcomments' ) );
	}

	public function action_block_content_facebookcomments( $block, $theme )
	{
		// Load defaults
		foreach ( self::default_options( ) as $k => $v ) {
			if ( !isset( $block->$k ) )
				$block->$k = $v;
		}

		if ( $block->user_id != '' && $block->app_id != '' ) {
		} else {
			$block->error = _t( 'Facebook Comments Plugin is not configured properly.', 'facebookcomments' );
		}
	}

	public function theme_header( $theme ) {
		$blocks = DB::get_results( 'SELECT * FROM {blocks} WHERE type = ? LIMIT 1', array( 'facebookcomments' ), 'Block' );
		if ( count( $blocks ) ) {
			$block = $blocks[0];
			if ( isset( $block->user_id ) && isset( $block->app_id ) )
				return '<meta property="fb:admins" content="' . $block->user_id . '"/><meta property="fb:app_id" content="' . $block->app_id . '"/>';
		}
	}
}
?>