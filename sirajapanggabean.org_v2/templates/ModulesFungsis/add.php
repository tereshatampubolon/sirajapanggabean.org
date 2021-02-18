<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ModulesFungsi $modulesFungsi
 */
?>

<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Modules Fungsis'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="modulesFungsis form content">
            <?= $this->Form->create($modulesFungsi) ?>
            <fieldset>
                <legend><?= __('Add Modules Fungsi') ?></legend>
                <?php
                    echo $this->Form->control('module_id', ['options' => $modules]);
                    echo $this->Form->control('name');
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
