<? 
	$acc = $this->request->params['pass']['0'];
?>
	<div class="maincontent">
		<div class="contentinner">
		
			<div class="widgettitle nomargin shadowed searchwidget">
				<div class="row">
					<div class="span6">
						<legend>Partner #<? echo $acc;?> Live Traders</legend>
					</div>
					<div class="par pull-right">
						<div class="input-append">
							<?php echo $this->Form->create('Mt4User', array('controller' => 'Mt4Users', 'action' => 'search')); ?>
							<input class="search-query" type="text" name="data[Mt4User][LOGIN]" id="Mt4UserLOGIN" placeholder="Traders ID..." />
							<button type="submit" class="btn"><span class="icon-search"></span></button>
							<?php echo $this->Form->end(); ?>
						</div>
					</div>
				</div>
			</div>
			
			<div style="overflow:auto">
				<table class="table table-striped">
					<tr>
						<th class="center"><?php echo $this->Paginator->sort('TRADERS ID', null, array('direction' => 'desc')); ?></th>
						<th class="center"><?php echo $this->Paginator->sort('GROUP'); ?></th>
						<th class="center"><?php echo $this->Paginator->sort('NAME'); ?></th>
						<th class="center"><?php echo $this->Paginator->sort('COUNTRY'); ?></th>
						<th class="center"><?php echo $this->Paginator->sort('LEVERAGE'); ?></th>
						<th class="center"><?php echo $this->Paginator->sort('BALANCE'); ?></th>
						<th class="center"><?php echo $this->Paginator->sort('CREDIT'); ?></th>
						<th class="center"><?php echo $this->Paginator->sort('EQUITY'); ?></th>
						<th class="center"><?php echo $this->Paginator->sort('MARGIN_FREE'); ?></th>
					</tr>
				
					<?php foreach ($mt4Users as $mt4User): ?>
						
					<tr>
						<td class="center"><?php echo h($mt4User['Mt4User']['LOGIN']); ?>&nbsp;</td>
						<td class="center"><?php echo h($mt4User['Mt4User']['GROUP']); ?>&nbsp;</td>
						<td class="center"><?php echo h($mt4User['Mt4User']['NAME']); ?>&nbsp;</td>
						<td class="center"><?php echo h($mt4User['Mt4User']['COUNTRY']); ?>&nbsp;</td>
						<td class="center">1:<?php echo h($mt4User['Mt4User']['LEVERAGE']); ?>&nbsp;</td>
						<td class="center"><?php echo number_format($mt4User['Mt4User']['BALANCE'], 2, '.', ''); ?>&nbsp;</td>
						<td class="center"><?php echo number_format($mt4User['Mt4User']['CREDIT'], 2, '.', ''); ?>&nbsp;</td>
						<td class="center"><?php echo number_format($mt4User['Mt4User']['EQUITY'], 2, '.', ''); ?>&nbsp;</td>
						<td class="center"><?php echo number_format($mt4User['Mt4User']['MARGIN_FREE'], 2, '.', ''); ?>&nbsp;</td>
					</tr>
					<?php endforeach; ?>
				</table>
			</div>

			<p align="center" class="alert alert-error">
				<?php
					echo $this->Paginator->counter(array(
					'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
					));
				?>	
			</p>
			
			<div class="pagination pagination-small" align="center">
				<ul>
					<li><?php echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled')); ?></li>
					<li><?php echo $this->Paginator->numbers(array('separator' => '')); ?></li>
					<li><?php echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled')); ?></li>
				</ul>
			</div>
			<br>
				
		</div>
	</div>