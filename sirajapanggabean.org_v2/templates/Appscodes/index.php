<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Appscode[]|\Cake\Collection\CollectionInterface $appscodes
 */
?>
<div class="appscodes index content">
    <?= $this->Html->link(__('New Appscode'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Appscodes') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('code') ?></th>
                    <th><?= $this->Paginator->sort('parameter_name') ?></th>
                    <th><?= $this->Paginator->sort('param') ?></th>
                    <th><?= $this->Paginator->sort('value') ?></th>
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
                <?php foreach ($appscodes as $appscode): ?>
                <tr>
                    <td><?= $this->Number->format($appscode->id) ?></td>
                    <td><?= $this->Number->format($appscode->code) ?></td>
                    <td><?= h($appscode->parameter_name) ?></td>
                    <td><?= h($appscode->param) ?></td>
                    <td><?= h($appscode->value) ?></td>
                    <td><?= h($appscode->created) ?></td>
                    <td><?= h($appscode->user_created) ?></td>
                    <td><?= h($appscode->ip_created) ?></td>
                    <td><?= h($appscode->modified) ?></td>
                    <td><?= h($appscode->user_modified) ?></td>
                    <td><?= h($appscode->ip_modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $appscode->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $appscode->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $appscode->id], ['confirm' => __('Are you sure you want to delete # {0}?', $appscode->id)]) ?>
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
