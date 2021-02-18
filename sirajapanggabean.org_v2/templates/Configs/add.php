<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Config $config
 */
?>

<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Configs'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="configs form content">
            <?= $this->Form->create($config) ?>
            <fieldset>
                <legend><?= __('Add Config') ?></legend>
                <?php
                    echo $this->Form->control('web_name');
                    echo $this->Form->control('admin_email');
                    echo $this->Form->control('file_location');
                    echo $this->Form->control('photo_location');
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
