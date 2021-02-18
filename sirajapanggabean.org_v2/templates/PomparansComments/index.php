<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\PomparansComment[]|\Cake\Collection\CollectionInterface $pomparansComments
 */
?>
<div class="pomparansComments index content">
    <?= $this->Html->link(__('New Pomparans Comment'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Pomparans Comments') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('pomparan_id') ?></th>
                    <th><?= $this->Paginator->sort('status') ?></th>
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
                <?php foreach ($pomparansComments as $pomparansComment): ?>
                <tr>
                    <td><?= $this->Number->format($pomparansComment->id) ?></td>
                    <td><?= $pomparansComment->has('pomparan') ? $this->Html->link($pomparansComment->pomparan->name, ['controller' => 'Pomparans', 'action' => 'view', $pomparansComment->pomparan->id]) : '' ?></td>
                    <td><?= $this->Number->format($pomparansComment->status) ?></td>
                    <td><?= h($pomparansComment->created) ?></td>
                    <td><?= h($pomparansComment->user_created) ?></td>
                    <td><?= h($pomparansComment->ip_created) ?></td>
                    <td><?= h($pomparansComment->modified) ?></td>
                    <td><?= h($pomparansComment->user_modified) ?></td>
                    <td><?= h($pomparansComment->ip_modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $pomparansComment->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $pomparansComment->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $pomparansComment->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pomparansComment->id)]) ?>
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
