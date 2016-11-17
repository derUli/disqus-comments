<?php
define ( "MODULE_ADMIN_HEADLINE", get_translation ( "disqus_for_articles" ) );
define ( "MODULE_ADMIN_REQUIRED_PERMISSION", "disqus_for_articles_settings" );
function disqus_for_articles_settings_admin() {
	if (isset ( $_POST ["submit"] )) {
		Settings::set ( "disqus_id", $_POST ["disqus_id"] );
	}
	$disqus_id = Settings::get ( "disqus_id" );
	?>

<form id="disqus_settings"
	action="<?php echo getModuleAdminSelfPath()?>" method="post">
<?php

	csrf_token_html ();
	?>
<div class="label"><?php translate("disqus_id");?></div>
	<div class="inputWrapper">
		<input type="text" name="disqus_id"
			value="<?php

	Template::escape($disqus_id);
	?>">
	</div>
	<p>
		<input type="submit" name="submit"
			value="<?php translate("save")?> <?php translate("settings");?>" />
	</p>
	<script type="text/javascript">
$("#disqus_settings").ajaxForm({beforeSubmit: function(e){
  $("#message").html("");
  $("#loading").show();
  },
  success:function(e){
  $("#loading").hide();
  $("#message").html("<span style=\"color:green;\"><?php translate("CHANGES_WAS_SAVED");?></span>");
  }


});

</script>
</form>
<?php
}

?>
