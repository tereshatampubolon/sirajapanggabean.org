<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Fungsi[]|\Cake\Collection\CollectionInterface $fungsis
 */
?>
<div class="fungsis index content">
    <?= $this->Html->link(__('New Fungsi'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Fungsis') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('module_id') ?></th>
                    <th><?= $this->Paginator->sort('group_id') ?></th>
                    <th><?= $this->Paginator->sort('fungsi') ?></th>
                    <th><?= $this->Paginator->sort('blocked') ?></th>
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
                <?php foreach ($fungsis as $fungsi): ?>
                <tr>
                    <td><?= $this->Number->format($fungsi->id) ?></td>
                    <td><?= $this->Number->format($fungsi->module_id) ?></td>
                    <td><?= $fungsi->has('group') ? $this->Html->link($fungsi->group->name, ['controller' => 'Groups', 'action' => 'view', $fungsi->group->id]) : '' ?></td>
                    <td><?= h($fungsi->fungsi) ?></td>
                    <td><?= h($fungsi->blocked) ?></td>
                    <td><?= h($fungsi->created) ?></td>
                    <td><?= h($fungsi->user_created) ?></td>
                    <td><?= h($fungsi->ip_created) ?></td>
                    <td><?= h($fungsi->modified) ?></td>
                    <td><?= h($fungsi->user_modified) ?></td>
                    <td><?= h($fungsi->ip_modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $fungsi->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $fungsi->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $fungsi->id], ['confirm' => __('Are you sure you want to delete # {0}?', $fungsi->id)]) ?>
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
