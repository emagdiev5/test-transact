<?php

/* @var $this yii\web\View */
use kartik\grid\GridView;

$this->title = 'My Yii Application';
?>
<div class="site-index">

	<div class="col-md-2">
		<?php
			echo \yii\widgets\ListView::widget()


		?>
	</div>
	<div class="col-md-10">
	<?php // Generate a bootstrap responsive striped table with row highlighted on hover
	echo GridView::widget([
	'dataProvider'=> $dataProvider,
	'filterModel' => $searchModel,
	'columns' => $gridColumns,
	'responsive'=>true,
	'hover'=>true
	]);
	?>
	</div>
</div>
