<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\UserLog $userLog
 */
?>

<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $userLog->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $userLog->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List User Logs'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="userLogs form content">
            <?= $this->Form->create($userLog) ?>
            <fieldset>
                <legend><?= __('Edit User Log') ?></legend>
                <?php
                    echo $this->Form->control('username');
                    echo $this->Form->control('session_id');
                    echo $this->Form->control('login_date');
                    echo $this->Form->control('last_access', ['empty' => true]);
                    echo $this->Form->control('logout_date', ['empty' => true]);
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
