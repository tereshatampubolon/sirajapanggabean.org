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
            <?= $this->Html->link(__('Edit User Log'), ['action' => 'edit', $userLog->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete User Log'), ['action' => 'delete', $userLog->id], ['confirm' => __('Are you sure you want to delete # {0}?', $userLog->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List User Logs'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New User Log'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="userLogs view content">
            <h3><?= h($userLog->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Username') ?></th>
                    <td><?= h($userLog->username) ?></td>
                </tr>
                <tr>
                    <th><?= __('Session Id') ?></th>
                    <td><?= h($userLog->session_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('User Created') ?></th>
                    <td><?= h($userLog->user_created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Ip Created') ?></th>
                    <td><?= h($userLog->ip_created) ?></td>
                </tr>
                <tr>
                    <th><?= __('User Modified') ?></th>
                    <td><?= h($userLog->user_modified) ?></td>
                </tr>
                <tr>
                    <th><?= __('Ip Modified') ?></th>
                    <td><?= h($userLog->ip_modified) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($userLog->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Login Date') ?></th>
                    <td><?= h($userLog->login_date) ?></td>
                </tr>
                <tr>
                    <th><?= __('Last Access') ?></th>
                    <td><?= h($userLog->last_access) ?></td>
                </tr>
                <tr>
                    <th><?= __('Logout Date') ?></th>
                    <td><?= h($userLog->logout_date) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($userLog->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($userLog->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
