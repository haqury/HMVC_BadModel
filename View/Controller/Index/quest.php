<form id="test" onsubmit="return(false)">
	<input name="testId" value="<?php echo $test->id;?>">
	<?php foreach($quests as $key => $quest) {?>
		<?php echo $quest->text;?>
		<div id="quest<?php echo $quest->id;?>" class="js-quest <?php if($key!=0){echo 'hidden';}?>">
			<input class="js-questId" value="<?php echo $quest->id;?>" />
			<?php foreach($quest->data['ansvers'] as $ansver) {?>
				<div>
				<input
					type="checkbox"
					name="ansver<?php echo $ansver->id;?>"
					class="js-ansver"
					value=0
				/>
					<?php echo $ansver->text;?>
				</div>
			<?php } ?>
			<button class="js-ansverSend">Ответить</button>
		</div>
	<?php } ?>
	<input id="questCount" value="<?php echo count($quests)?>">
</form>