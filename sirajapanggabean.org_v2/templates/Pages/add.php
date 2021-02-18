<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Page $page
 */
?>

<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Pages'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="pages form content">
            <?= $this->Form->create($page) ?>
            <fieldset>
                <legend><?= __('Add Page') ?></legend>
                <?php
                    echo $this->Form->control('pomparan_id', ['options' => $pomparans]);
                    echo $this->Form->control('num_level');
                    echo $this->Form->control('chapter');
                    echo $this->Form->control('page');
                    echo $this->Form->control('skip');
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
