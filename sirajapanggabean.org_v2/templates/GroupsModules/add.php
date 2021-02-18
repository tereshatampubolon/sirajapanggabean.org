<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\GroupsModule $groupsModule
 */
?>

<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Groups Modules'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="groupsModules form content">
            <?= $this->Form->create($groupsModule) ?>
            <fieldset>
                <legend><?= __('Add Groups Module') ?></legend>
                <?php
                    echo $this->Form->control('group_id', ['options' => $groups]);
                    echo $this->Form->control('module_id', ['options' => $modules]);
                    echo $this->Form->control('allowed');
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
