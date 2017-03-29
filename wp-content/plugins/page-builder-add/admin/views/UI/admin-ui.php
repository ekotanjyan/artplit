<?php if ( ! defined( 'ABSPATH' ) ) exit; 
$is_front_page = get_post_meta($post->ID, 'ULPB_FrontPage', true );
$loadWpHead = get_post_meta($post->ID, 'ULPB_loadWpHead', true );
$loadWpFooter = get_post_meta($post->ID, 'ULPB_loadWpFooter', true );
?>
  <!-- ========= -->
  <!-- Your HTML -->
  <!-- ========= -->
  <script
  src="http://code.jquery.com/ui/1.12.1/jquery-ui.js"
  integrity="sha256-T0Vest3yCU7pafRw9r+settMBX6JkKN06dqBnpQ8d30="
  crossorigin="anonymous"></script>
  
  <?php include_once('tabs.php'); ?>
  <?php include_once('edit-column.php'); ?>
  <?php include_once('edit-row.php'); ?>
  <?php include_once('edit-widget.php'); ?>
  <?php include_once('new-row.php'); ?>
  <?php include_once('side-panel.php'); ?>






<div class="lpp_modal pb_loader_container">
  <div class="pb_loader"></div>
</div>

<div class="lpp_modal pb_preview_container" style="">
  <div class="pb_temp_prev" style="text-align: center; overflow: visible; position: absolute;" ></div>
</div>

<?php $plugData = get_plugin_data(ULPB_PLUGIN_PATH.'/page-builder-add.php',false,true); ?>
<script type="text/javascript">
  var app = {};
  var URLL = "<?php echo admin_url('admin-ajax.php?action=ulpb_admin_data&page_id='.get_the_id()); ?>";
  var PageBuilderAdminImageFolderPath = '<?php echo ULPB_PLUGIN_URL."/images/menu/"; ?>';
  var P_ID = "<?php echo get_the_id(); ?>";
  var P_menu  = "<?php foreach($menus as $menu){  echo "$menu->name"; } ?>";
  var PageBuilder_Version = "<?php echo $plugData['Version']; ?>";
  var admURL = "<?php echo admin_url(); ?>";
  var siteURLpb = "<?php echo site_url(); ?>";
  var isPub = "<?php echo get_post_status( get_the_id() ); ?>";
  var thisPostType = "<?php echo get_post_type(get_the_id()); ?>";
</script>
<script type="text/javascript">
    jQuery(document).ready(function() {
    jQuery('.tabs .tab-links a').on('click', function(e)  {
        var currentAttrValue = jQuery(this).attr('href');
 
        // Show/Hide Tabs
        jQuery('.tabs ' + currentAttrValue).show().siblings().hide();
 
        // Change/remove current tab to active
        jQuery(this).parent('li').addClass('active').siblings().removeClass('active');
 
        e.preventDefault();
    });

    jQuery( function() {
    jQuery( "#accordion" ).accordion({
      collapsible: true,
      heightStyle: "content"
    });
  } );
    jQuery( function() {
    jQuery( "#accordion1" ).accordion({
      collapsible: true,
      heightStyle: "content"
    });
  });

});
</script>