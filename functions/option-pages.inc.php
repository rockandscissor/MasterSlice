<?php
/* Slices option page */
function mst_op_slices() {
?>
  <div class="wrap">
    <h1>Installed Slices</h1>
    <form method="post" action="options.php">
      <?php settings_fields('mst-op-slices-group'); ?>
      <?php do_settings_sections('mst-op-slices-group'); ?>
      <table class="form-table">
        <?php
        /* Get installed slices */
        $mst_slices = mst_get_slices();

        /* Output installed slices */
        foreach ($mst_slices as $slice) {
        ?>
        <tr valign="top">
          <th scope="row"><?php echo $slice; ?></th>
          <td>
            <input type="checkbox" name="mst_slice_<?php echo $slice; ?>" value="1"<?php if (esc_attr(get_option('mst_slice_' . $slice)) == 1) { ?> checked="checked"<?php } ?>> Enable
          </td>
        </tr>
        <?php
        }
        ?>
      </table>
      <?php submit_button(); ?>
    </form>
  </div>
<?php
}

/* Organisation details option page */
function mst_op_organisation() {
?>
<div class="wrap">
  <h1>Organisation Details</h1>
  <form method="post" action="options.php">
    <?php settings_fields('mst-op-slices-group'); ?>
    <?php do_settings_sections('mst-op-slices-group'); ?>
    <table class="form-table">
      <tr valign="top">
        <th scope="row">Slice Name</th>
        <td>
          <input type="text" name="mst_slice_name" value="<?php echo esc_attr( get_option('mst_slice_name') ); ?>">
        </td>
      </tr>
    </table>
    <?php submit_button(); ?>
  </form>
</div>
<?php
}

/* Settings option page */
function mst_op_settings() {
?>
<div class="wrap">
  <h1>MasterSlice Settings</h1>
  <form method="post" action="options.php">
    <?php settings_fields('mst-op-slices-group'); ?>
    <?php do_settings_sections('mst-op-slices-group'); ?>
    <table class="form-table">
      <tr valign="top">
        <th scope="row">Slice Name</th>
        <td>
          <input type="text" name="mst_slice_name" value="<?php echo esc_attr( get_option('mst_slice_name') ); ?>">
        </td>
      </tr>
    </table>
    <?php submit_button(); ?>
  </form>
</div>
<?php
}
