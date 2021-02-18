<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Fungsi $fungsi
 */
?>

<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $fungsi->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $fungsi->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Fungsis'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="fungsis form content">
            <?= $this->Form->create($fungsi) ?>
            <fieldset>
                <legend><?= __('Edit Fungsi') ?></legend>
                <?php
                    echo $this->Form->control('module_id');
                    echo $this->Form->control('group_id', ['options' => $groups]);
                    echo $this->Form->control('fungsi');
                    echo $this->Form->control('blocked');
                    echo $this->Form->control('user_created');
                    echo $this->Form->control('ip_created');
                    echo $this->Form->control('user_modified');
                    echo $this->Form->control('ip_modified');
                    echo $this->Form->control('modules._ids', ['options' => $modules]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
