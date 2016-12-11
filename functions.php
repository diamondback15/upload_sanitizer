add_filter('wp_handle_upload_prefilter', 'custom_upload_filter' );

function upload_sanitizer( $file ){
	$filename = explode('.', $file['name']);
	$extension = array_pop($filename);
	$filename = implode('.', $filename);
	$filename = sanitize_title($filename);
		
    $file['name'] = $filename.'.'.$extension;
    return $file;
}
