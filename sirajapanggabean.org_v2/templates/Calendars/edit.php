<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Calendar $calendar
 */
?>

<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $calendar->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $calendar->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Calendars'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="calendars form content">
            <?= $this->Form->create($calendar) ?>
            <fieldset>
                <legend><?= __('Edit Calendar') ?></legend>
                <?php
                    echo $this->Form->control('name');
                    echo $this->Form->control('category');
                    echo $this->Form->control('start_date');
                    echo $this->Form->control('end_date', ['empty' => true]);
                    echo $this->Form->control('description');
                    echo $this->Form->control('calendar_system');
                    echo $this->Form->control('user_created');
                    echo $this->Form->control('ip_created');
                    echo $this->Form->control('user_modified');
                    echo $this->Form->control('ip_modified');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
