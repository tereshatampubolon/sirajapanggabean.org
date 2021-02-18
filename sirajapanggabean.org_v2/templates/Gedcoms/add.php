<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Gedcom $gedcom
 */
?>

<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Gedcoms'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="gedcoms form content">
            <?= $this->Form->create($gedcom) ?>
            <fieldset>
                <legend><?= __('Add Gedcom') ?></legend>
                <?php
                    echo $this->Form->control('i_id');
                    echo $this->Form->control('i_file');
                    echo $this->Form->control('i_rin');
                    echo $this->Form->control('i_sex');
                    echo $this->Form->control('i_gedcom');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
