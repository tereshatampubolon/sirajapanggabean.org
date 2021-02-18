<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Appscode $appscode
 */
?>

<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $appscode->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $appscode->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Appscodes'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="appscodes form content">
            <?= $this->Form->create($appscode) ?>
            <fieldset>
                <legend><?= __('Edit Appscode') ?></legend>
                <?php
                    echo $this->Form->control('code');
                    echo $this->Form->control('parameter_name');
                    echo $this->Form->control('param');
                    echo $this->Form->control('value');
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
