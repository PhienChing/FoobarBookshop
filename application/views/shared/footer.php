<?php
$base_url = $this->config->item('base_url'); 
$assets = $this->config->item('assets');
?>

	<script src="<?=$assets;?>js/vendor/jquery.js"></script>
  	<script src="<?=$assets;?>js/foundation.min.js"></script>
  	<script src="<?=$assets;?>js/foundation/foundation.topbar.js"></script>
  	<script>
    	$(document).foundation();
  	</script>
</body>
</html>