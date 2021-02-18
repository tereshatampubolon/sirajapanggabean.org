<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\PomparansComment $pomparansComment
 */
?>

<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $pomparansComment->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $pomparansComment->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Pomparans Comments'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="pomparansComments form content">
            <?= $this->Form->create($pomparansComment) ?>
            <fieldset>
                <legend><?= __('Edit Pomparans Comment') ?></legend>
                <?php
                    echo $this->Form->control('pomparan_id', ['options' => $pomparans]);
                    echo $this->Form->control('comment');
                    echo $this->Form->control('re_comment');
                    echo $this->Form->control('status');
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
