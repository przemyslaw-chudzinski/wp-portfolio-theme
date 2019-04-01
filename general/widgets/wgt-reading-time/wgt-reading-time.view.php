<?php $this->getArg($args, 'before_widget', '<div>') ?>
<!-- Title -->
<?php $this->getArg($args, 'before_title', '<h2>') ?>
    <?= $this->getWgtTitle($instance) ?>
<?php $this->getArg($args, 'after_title', '</h2>') ?>
<!-- END: Title -->

<!-- Widget content -->
<div class="reading-time-wgt">
    <div class="reading-time-wgt__icon u-text-center">
        <span class="fa fa-clock-o"></span>
    </div>
    <div class="reading-time-wgt__content u-text-center"><?= $this->readingTime ?> min</div>
</div>
<!-- END: Widget content -->
<?php $this->getArg($args, 'after_widget', '</div>') ?>


