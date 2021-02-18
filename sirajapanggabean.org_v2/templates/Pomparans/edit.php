<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Pomparan $pomparan
 */
?>

<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $pomparan->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $pomparan->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Pomparans'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="pomparans form content">
            <?= $this->Form->create($pomparan) ?>
            <fieldset>
                <legend><?= __('Edit Pomparan') ?></legend>
                <?php
                    echo $this->Form->control('parent_id', ['options' => $parentPomparans, 'empty' => true]);
                    echo $this->Form->control('name');
                    echo $this->Form->control('user_id', ['options' => $users, 'empty' => true]);
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
                    echo $this->Form->control('email');
                    echo $this->Form->control('job_title');
                    echo $this->Form->control('children_number');
                    echo $this->Form->control('approved');
                  
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
