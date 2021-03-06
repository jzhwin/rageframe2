<?php
use common\helpers\Html;
use common\enums\StatusEnum;
?>

<div class="form-group">
    <?= Html::label($row['title'], $row['name'], ['class' => 'control-label demo']);?>
    <?php if($row['is_hide_remark'] != StatusEnum::ENABLED){ ?>
        (<?= $row['remark']?>)
    <?php } ?>
    <div class="col-sm-push-10">
        <?= kartik\time\TimePicker::widget([
            'name'  =>"config[".$row['name']."]",
            'value' => $row['value'],
            'language' => 'zh-CN',
            'pluginOptions' => [
                'showSeconds' => true,
                'showMeridian' => false,
                'minuteStep' => 1,
                'secondStep' => 5,
            ]
        ]) ?>
    </div>
</div>