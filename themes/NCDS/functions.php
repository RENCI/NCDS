<?php

	/**
	 * Elevation Demo functions and definitions
	 * @package elevation_demo
	 */

	require_once('wp_bootstrap_navwalker.php');

	// Widgets for homepage and/or sidebars
	function register_sidebar_init() {

	}
	add_action('widgets_init', 'register_sidebar_init');

	// Separate all the content into diferents sections 
	if( function_exists('acf_add_options_page') ) {
	  acf_add_options_page(array(
	    'page_title'  => 'Theme General Settings',
	    'menu_title'  => 'Edit Content',
	    'menu_slug'   => 'theme-general-settings',
	    'capability'  => 'edit_posts',
	    'redirect'    => true
	  ));
		acf_add_options_sub_page(array(
			'page_title' 	=> 'Theme Header Settings',
			'menu_title'	=> 'Header',
			'parent_slug'	=> 'theme-general-settings',
		));		
		acf_add_options_sub_page(array(
			'page_title' 	=> 'Theme Home Settings',
			'menu_title'	=> 'Home',
			'parent_slug'	=> 'theme-general-settings',
		));
		acf_add_options_sub_page(array(
			'page_title' 	=> 'Theme Boxes Settings',
			'menu_title'	=> 'Boxes',
			'parent_slug'	=> 'theme-general-settings',
		));		
		acf_add_options_sub_page(array(
			'page_title' 	=> 'Theme Footer Settings',
			'menu_title'	=> 'Footer',
			'parent_slug'	=> 'theme-general-settings',
		));
	}

	// Different Images Resolutions
	add_image_size( 'hd', 1920, 1080 );
	add_image_size( 'lg', 900, 600 );
	add_image_size( 'md', 600, 400 );


	add_theme_support( 'title-tag' );

	// Set up the WordPress core custom logo.
	add_theme_support( 'custom-logo' );

	// Set up the WordPress core post thumbnail.
	add_theme_support( 'post-thumbnails' );

	// Register Menus for header and footer //
	function register_my_menus() {

	  register_nav_menus(
	    array(
	      'header-menu' => __( 'Header Menu' ),
	      'footer-menu' => __( 'Footer Menu' ),
	    )
	  );

	}
	add_action( 'init', 'register_my_menus' );


	// Disallow Intall New Themes //
	function __block_caps( $caps, $cap )
	{
	    if ( $cap === 'install_themes' )
	        $caps[] = 'do_not_allow';
	    return $caps;
	}
	add_filter( 'map_meta_cap', '__block_caps', 10, 2 );

	// Object to a simple array
	function objectToArray ($object) {

	    if(!is_object($object) && !is_array($object))
	        return $object;

	    return array_map('objectToArray', (array) $object);
	}


	function my_pmprorh_init()
	{
	    //don't break if Register Helper is not loaded
	    if(!function_exists( 'pmprorh_add_registration_field' )) {
	        return false;
	    }

	    //define the fields
	    $fields = array();

	    $fields[] = new PMProRH_Field(
	        'first_name',            // input name, will also be used as meta key
	        'text',             // type of field
	        array(
	            'label'   => 'First Name'  ,   // custom field label
	            'size'    => 40,        // input size
	            'class'   => 'first_name',     // custom class
	            'profile' => true,      // show in user profile
	            'required' => true
	        )
	    );

	    $fields[] = new PMProRH_Field(
	        'last_name',            // input name, will also be used as meta key
	        'text',             // type of field
	        array(
	            'label'   => 'Last Name'  ,   // custom field label
	            'size'    => 40,        // input size
	            'class'   => 'last_name',     // custom class
	            'profile' => true,      // show in user profile
	            'required' => true
	        )
	    );    

	    $fields[] = new PMProRH_Field(
	        'job_title',            // input name, will also be used as meta key
	        'text',             // type of field
	        array(
	            'label'   => 'Job Title'  ,   // custom field label
	            'size'    => 40,        // input size
	            'class'   => 'job_title',     // custom class
	            'profile' => true,      // show in user profile
	            'required' => true
	        )
	    );

	    $fields[] = new PMProRH_Field(
	        'address',            // input name, will also be used as meta key
	        'text',             // type of field
	        array(
	            'label'   => 'Address'  ,   // custom field label
	            'size'    => 40,        // input size
	            'class'   => 'address',     // custom class
	            'profile' => true,      // show in user profile
	            'required' => false
	        )
	    );

	    // $fields[] = new PMProRH_Field(
	    //     'street_1',            // input name, will also be used as meta key
	    //     'text',             // type of field
	    //     array(
	    //         'label'   => 'Street 1'  ,   // custom field label
	    //         'size'    => 40,        // input size
	    //         'class'   => 'street_1',     // custom class
	    //         'profile' => true,      // show in user profile
	    //         'required' => false
	    //     )
	    // );

	    // $fields[] = new PMProRH_Field(
	    //     'street_2',            // input name, will also be used as meta key
	    //     'text',             // type of field
	    //     array(
	    //         'label'   => 'Street 2'  ,   // custom field label
	    //         'size'    => 40,        // input size
	    //         'class'   => 'street_2',     // custom class
	    //         'profile' => true,      // show in user profile
	    //         'required' => false
	    //     )
	    // );	    

	    $fields[] = new PMProRH_Field(
	        'city',            // input name, will also be used as meta key
	        'text',             // type of field
	        array(
	            'label'   => 'City'  ,   // custom field label
	            'size'    => 40,        // input size
	            'class'   => 'city',     // custom class
	            'profile' => true,      // show in user profile
	            'required' => false
	        )
	    );

	    $fields[] = new PMProRH_Field(
	        'state',            // input name, will also be used as meta key
	        'text',             // type of field
	        array(
	            'label'   => 'State'  ,   // custom field label
	            'size'    => 40,        // input size
	            'class'   => 'state',     // custom class
	            'profile' => true,      // show in user profile
	            'required' => false
	        )
	    );

	     $fields[] = new PMProRH_Field(
	        'zip',            // input name, will also be used as meta key
	        'text',             // type of field
	        array(
	            'label'   => 'Zip Code'  ,   // custom field label
	            'size'    => 40,        // input size
	            'class'   => 'zip',     // custom class
	            'profile' => true,      // show in user profile
	            'required' => false
	        )
	    );


	    $fields[] = new PMProRH_Field(
	        'phone_number',            // input name, will also be used as meta key
	        'text',             // type of field
	        array(
	            'label'   => 'Phone Number'  ,   // custom field label
	            'size'    => 40,        // input size
	            'class'   => 'phone_number',     // custom class
	            'profile' => true,      // show in user profile
	            'required' => true
	        )
	    );

	    $fields[] = new PMProRH_Field(
	        'website',            // input name, will also be used as meta key
	        'text',             // type of field
	        array(
	            'label'   => 'Website'  ,   // custom field label
	            'size'    => 40,        // input size
	            'class'   => 'website',     // custom class
	            'profile' => true,      // show in user profile
	            'required' => false
	        )
	    );

	    $fields[] = new PMProRH_Field(
	        'organization',            // input name, will also be used as meta key
	        'text',             // type of field
	        array(
	            'label'   => 'Organization'  ,   // custom field label
	            'size'    => 40,        // input size
	            'class'   => 'organization',     // custom class
	            'profile' => true,      // show in user profile
	            'required' => true
	        )
	    );

		$fields[] = new PMProRH_Field(
        'Type of Organization',                        // input name, will also be used as meta key
        'select',                        // type of field
        array(
            'options' => array(                // <option> elements for select field
                ''        => '',            // blank option - cannot be selected if this field is required
                'industry'    => 'Industry',    // <option value="lessthan2000">&lt; $2,000</option>
                'academicInstitution'    => 'Academic Institution',    // <option value="2000to5000">$2,000-$5,000</option>
                'non-profit'    => 'Not Profit',    // <option value="5000to10000">$5,000-$10,000</option>
                'goverment_agency'    => 'Goverment Agency',    // <option value="morethan10000">&gt; $10,000</option>
            )
        )
    );  

	    $fields[] = new PMProRH_Field(
	        'please',            // input name, will also be used as meta key
	        'textarea',             // type of field
	        array(
	            'label'   => 'Please describe your organizations work in data science research or data-intensive business.'  ,   // custom field label
	            'size'    => 40,        // input size
	            'class'   => 'please',     // custom class
	            'profile' => true,      // show in user profile
	            'required' => false
	        )
	    );      	    	    	    	    	    		    	    	    

	    //add the fields into a new checkout_boxes are of the checkout page
	    foreach($fields as $field)
	        pmprorh_add_registration_field(
	            'checkout_boxes',       // location on checkout page
	            $field            // PMProRH_Field object
	        );

	    //that's it. see the PMPro Register Helper readme for more information and examples.
	}
	add_action( 'init', 'my_pmprorh_init' );


	/* Adding a class to the ul */

	function elevation_add_class_to_the_ul( $postarr ) {
	   $postarr['post_content'] = str_replace('<ul>', '<ul class="list">', $postarr['post_content'] );
	   return $postarr;
	}

	add_filter('add_class_to_the_ul', 'elevation_add_class_to_the_ul');	

	/* Reduce the text length */

	function excerpt($limit) {
	  $excerpt = explode(' ', get_the_excerpt(), $limit);
	  if (count($excerpt)>=$limit) {
	    array_pop($excerpt);
	    $excerpt = implode(" ",$excerpt).'...';
	  } else {
	    $excerpt = implode(" ",$excerpt);
	  } 
	  $excerpt = preg_replace('`\[[^\]]*\]`','',$excerpt);
	  return $excerpt;
	}

	/* Allow .svg into the wordpress gallery */

	function elevation_allow_svg($image) {
	  $image['svg'] = 'image/svg+xml';
	  return $image;
	}
	add_filter('upload_mimes', 'elevation_allow_svg');	


		
	/* Scripts Loader */

	function elevation_ncds_scripts() {

		wp_enqueue_script("jquery");
		
		wp_enqueue_style( 'elevation_ncds_bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css');
		wp_enqueue_style( 'elevation_ncds_font_awesome', get_template_directory_uri() . '/css/font-awesome.css');
		wp_enqueue_style( 'elevation_ncds_style', get_template_directory_uri() . '/css/style.css');
		wp_enqueue_style( 'elevation_ncds_flexbox_grid', get_template_directory_uri() . '/css/flexboxgrid.min.css');
		wp_enqueue_style( 'elevation_google_fonts', 'https://fonts.googleapis.com/css?family=Muli:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i|Nanum+Gothic:400,700,800|Teko:300,400,500,600,700');

		wp_enqueue_script( 'elevation_ncds_swiper', get_template_directory_uri() . '/js/swiper.min.js', array( 'jquery' ), '', true);		
		wp_enqueue_script( 'elevation_ncds_jquery', get_template_directory_uri() . '/js/jquery.mobile.custom.min.js', array( 'jquery' ), '', true);
		wp_enqueue_script( 'elevation_ncds_bootstrap_js', get_template_directory_uri() . '/js/bootstrap.min.js', array( 'jquery' ), '', true);
		wp_enqueue_script( 'elevation_ncds_main', get_template_directory_uri() . '/js/main.js', array( 'jquery' ), '', true ); 


	}

	add_action( 'wp_enqueue_scripts', 'elevation_ncds_scripts' );

?>