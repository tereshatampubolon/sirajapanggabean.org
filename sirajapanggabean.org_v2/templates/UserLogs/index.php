<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\UserLog[]|\Cake\Collection\CollectionInterface $userLogs
 */
?>
<div class="userLogs index content">
    <?= $this->Html->link(__('New User Log'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('User Logs') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('username') ?></th>
                    <th><?= $this->Paginator->sort('session_id') ?></th>
                    <th><?= $this->Paginator->sort('login_date') ?></th>
                    <th><?= $this->Paginator->sort('last_access') ?></th>
                    <th><?= $this->Paginator->sort('logout_date') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('user_created') ?></th>
                    <th><?= $this->Paginator->sort('ip_created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th><?= $this->Paginator->sort('user_modified') ?></th>
                    <th><?= $this->Paginator->sort('ip_modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($userLogs as $userLog): ?>
                <tr>
                    <td><?= $this->Number->format($userLog->id) ?></td>
                    <td><?= h($userLog->username) ?></td>
                    <td><?= h($userLog->session_id) ?></td>
                    <td><?= h($userLog->login_date) ?></td>
                    <td><?= h($userLog->last_access) ?></td>
                    <td><?= h($userLog->logout_date) ?></td>
                    <td><?= h($userLog->created) ?></td>
                    <td><?= h($userLog->user_created) ?></td>
                    <td><?= h($userLog->ip_created) ?></td>
                    <td><?= h($userLog->modified) ?></td>
                    <td><?= h($userLog->user_modified) ?></td>
                    <td><?= h($userLog->ip_modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $userLog->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $userLog->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $userLog->id], ['confirm' => __('Are you sure you want to delete # {0}?', $userLog->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
