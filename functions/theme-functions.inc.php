<?php
/* Get installed slices */
function mst_get_slices($full_path = false) {
  $slice_paths = list_files(get_template_directory() . '/slices', 1);
  foreach ($slice_paths as $directory_key => $directory) {
    if ($full_path === false) {
      $slices[$directory_key] = str_replace(get_template_directory() . '/slices/', '', rtrim($directory, '/'));
    } else {
      $slices[$directory_key] = $directory;
    }
  }
  return $slices;
}

/* Register slice */
function mst_register_slice($slice_name, $version, $file_array, $settings = false) {
  $slice_slug = str_replace(' ', '-', strtolower($slice_name)) . '-' . $version;
  foreach ($file_array as $slice_file) {
    $slice_type = substr(strrchr($slice_file, '.'), 1);
    if ($slice_type == 'css') {
      
    } else if ($slice_type == 'js') {

    } else if ($slice_type == 'php') {

    }
  }
}

/* Get favicon resource */
function mst_get_icon($resourceFilename) {
  $icon_path = get_option('mst_theme_icon_path', 'masterslice');
  return $icon_path . '/' . $resourceFilename;
}

/* Get pre-defined colour (defaults to masterslice orange) */
function mst_get_color($storedColorName = 'masterslice') {

}

/* Get SVG file content */
function mst_get_svg($resourceFilename, $contentSrc = 'masterslice') {

}

/* Get slice */
function mst_get_slice($sliceType, $sliceName) {

}
