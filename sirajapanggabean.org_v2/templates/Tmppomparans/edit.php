<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tmppomparan $tmppomparan
 */
?>

<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $tmppomparan->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $tmppomparan->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Tmppomparans'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="tmppomparans form content">
            <?= $this->Form->create($tmppomparan) ?>
            <fieldset>
                <legend><?= __('Edit Tmppomparan') ?></legend>
                <?php
                    echo $this->Form->control('parent_id', ['options' => $parentTmppomparans, 'empty' => true]);
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
                    echo $this->Form->control('gedcom_parent_id');
                    echo $this->Form->control('gedcom_spouse_id');
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
