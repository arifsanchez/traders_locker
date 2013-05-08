<?php echo $this->element('Usermgmt.paginator', array('useAjax' => true, 'updateDivId' => 'updateUserIndex')); ?>

<table class="table table-striped table-bordered table-hover">
	<thead>
		<tr>
			<th><?php echo $this->Paginator->sort('LOGIN', __('Acc No.')); ?></th>
			<th><?php echo $this->Paginator->sort('GROUP', __('Acc Type')); ?></th>
			<th><?php echo $this->Paginator->sort('NAME', __('Name')); ?></th>
			<th><?php echo $this->Paginator->sort('COUNTRY', __('Country')); ?></th>
			<th><?php echo $this->Paginator->sort('EMAIL', __('Email')); ?></th>
			<th><?php echo $this->Paginator->sort('PHONE', __('Phone')); ?></th>
			<th><?php echo $this->Paginator->sort('LEVERAGE', __('Leverage')); ?></th>
			<th><?php echo $this->Paginator->sort('BALANCE', __('Balance $')); ?></th>
			<th><?php echo $this->Paginator->sort('AGENT_ACCOUNT', __('Referral')); ?></th>
			<th style="width:150px;"><?php echo __('Action');?></th>
		</tr>
	</thead>
	<tbody>
	<?php if (!empty($mt4Users)) {
		$page = $this->request->params['paging']['Mt4User']['page'];
		$limit = $this->request->params['paging']['Mt4User']['limit'];
		$i=($page-1) * $limit;

		foreach ($mt4Users as $mt4User){
			$i++;
			echo "<tr id='rowId".$mt4User['Mt4User']['LOGIN']."'>";
			echo "<td>".h($mt4User['Mt4User']['LOGIN'])."</td>";
			echo "<td>".h($mt4User['Mt4User']['GROUP'])."</td>";
			echo "<td>".h($mt4User['Mt4User']['NAME'])."</td>";
			echo "<td>".h($mt4User['Mt4User']['COUNTRY'])."</td>";
			echo "<td>".h($mt4User['Mt4User']['EMAIL'])."</td>";
			echo "<td>".h($mt4User['Mt4User']['PHONE'])."</td>";
			echo "<td>1:".h($mt4User['Mt4User']['LEVERAGE'])."</td>";
			echo "<td>".h($mt4User['Mt4User']['BALANCE'])."</td>";
			echo "<td>".h($mt4User['Mt4User']['AGENT_ACCOUNT'])."</td>";
			echo "<td></td>";
			echo "</tr>";
		}
	} else {
		echo "<tr><td colspan=10><br/><br/>".__('No Data')."</td></tr>";
	} ?>
	</tbody>
</table>

<?php if(!empty($mt4Users)) { echo $this->element('Usermgmt.pagination', array("totolText" => __('Number of Traders'))); } ?>