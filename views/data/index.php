<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\ListView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\DataSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Datas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="data-index">

    <h1><?= Html::encode('Транзакции') ?></h1>

    <p>
        <?php //echo Html::a('Create Data', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

	<div class="col-md-2">
		<table class="table">
			<tbody>
			<?php foreach ($listDataProvider as $month): ?>
				<?php if(isset($year)){}else{$year = $month['year']; echo '<th>'.$year.'</th>';}?>
			<tr>
				<td><?=$months_translated[$month['month']]?></td>
				<td>(<?=$month['value']?>)</td>
			</tr>
			<?php endforeach;?>
			</tbody>
		</table>
	</div>

	<div class="col-md-1">
	</div>
	<div class="col-md-9">
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'card_number',
            'date',
            'volume',
            'service',
            'address_id'

            //['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
	</div>

</div>
