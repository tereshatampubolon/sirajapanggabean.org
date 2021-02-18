<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ModulesFungsi[]|\Cake\Collection\CollectionInterface $modulesFungsis
 */
?>
<div class="modulesFungsis index content">
    <?= $this->Html->link(__('New Modules Fungsi'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Modules Fungsis') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('module_id') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
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
                <?php foreach ($modulesFungsis as $modulesFungsi): ?>
                <tr>
                    <td><?= $this->Number->format($modulesFungsi->id) ?></td>
                    <td><?= $modulesFungsi->has('module') ? $this->Html->link($modulesFungsi->module->name, ['controller' => 'Modules', 'action' => 'view', $modulesFungsi->module->id]) : '' ?></td>
                    <td><?= h($modulesFungsi->name) ?></td>
                    <td><?= h($modulesFungsi->created) ?></td>
                    <td><?= h($modulesFungsi->user_created) ?></td>
                    <td><?= h($modulesFungsi->ip_created) ?></td>
                    <td><?= h($modulesFungsi->modified) ?></td>
                    <td><?= h($modulesFungsi->user_modified) ?></td>
                    <td><?= h($modulesFungsi->ip_modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $modulesFungsi->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $modulesFungsi->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $modulesFungsi->id], ['confirm' => __('Are you sure you want to delete # {0}?', $modulesFungsi->id)]) ?>
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
