<link href="css/style.css" rel="stylesheet" type="text/css"/>
<div>
	<?php echo $test->title;?>
	<?php \Controller\Index::quest($test->id);?>
</div>
<div id="result"></div>

<script src="http://code.jquery.com/jquery-1.8.3.js"></script>
<script src="/static/js/Controller/Test.js"></script>
<script>
	Controller_Test.init();
</script>