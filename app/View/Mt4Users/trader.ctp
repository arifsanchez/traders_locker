<?php echo $this->element('Usermgmt.dashboard'); ?>
<div class="um-panel">
	<div class="um-panel-header">
		<span class="um-panel-title">
			<?php echo __('All Traders') ?>
		</span>
	</div>
	<div class="um-panel-content">
		<div id="updateUserIndex">
			<?php echo $this->element('all_traders'); ?>
		</div>
	</div>
</div>