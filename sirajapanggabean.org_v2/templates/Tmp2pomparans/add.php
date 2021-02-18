<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tmp2pomparan $tmp2pomparan
 */
?>

<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Tmp2pomparans'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="tmp2pomparans form content">
            <?= $this->Form->create($tmp2pomparan) ?>
            <fieldset>
                <legend><?= __('Add Tmp2pomparan') ?></legend>
                <?php
                    echo $this->Form->control('parent_id', ['options' => $parentTmp2pomparans, 'empty' => true]);
                    echo $this->Form->control('name');
                    echo $this->Form->control('birth_order');
                    echo $this->Form->control('generation_level');
                    echo $this->Form->control('spouse_name');
                    echo $this->Form->control('gender');
                    echo $this->Form->control('birth_date', ['empty' => true]);
                    echo $this->Form->control('death');
                    echo $this->Form->control('death_date', ['empty' => true]);
                    echo $this->Form->control('address');
                    echo $this->Form->control('city');
                    echo $this->Form->control('phone');
                    echo $this->Form->control('gedcom_id', ['options' => $gedcoms]);
                    echo $this->Form->control('gedcom_fams');
                    echo $this->Form->control('gedcom_famc');
                    echo $this->Form->control('gedcom_data');
                    echo $this->Form->control('approved');
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
