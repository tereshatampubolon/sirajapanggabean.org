<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Announcement $announcement
 */
?>

<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Announcements'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="announcements form content">
            <?= $this->Form->create($announcement) ?>
            <fieldset>
                <legend><?= __('Add Announcement') ?></legend>
                <?php
                    echo $this->Form->control('syllabus_id');
                    echo $this->Form->control('start_date_published');
                    echo $this->Form->control('end_date_published');
                    echo $this->Form->control('title');
                    echo $this->Form->control('pre_body');
                    echo $this->Form->control('body');
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
