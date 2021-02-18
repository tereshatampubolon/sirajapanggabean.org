<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Config[]|\Cake\Collection\CollectionInterface $configs
 */
?>
<div class="configs index content">
    <?= $this->Html->link(__('New Config'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Configs') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('web_name') ?></th>
                    <th><?= $this->Paginator->sort('admin_email') ?></th>
                    <th><?= $this->Paginator->sort('file_location') ?></th>
                    <th><?= $this->Paginator->sort('photo_location') ?></th>
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
                <?php foreach ($configs as $config): ?>
                <tr>
                    <td><?= $this->Number->format($config->id) ?></td>
                    <td><?= h($config->web_name) ?></td>
                    <td><?= h($config->admin_email) ?></td>
                    <td><?= h($config->file_location) ?></td>
                    <td><?= h($config->photo_location) ?></td>
                    <td><?= h($config->created) ?></td>
                    <td><?= h($config->user_created) ?></td>
                    <td><?= h($config->ip_created) ?></td>
                    <td><?= h($config->modified) ?></td>
                    <td><?= h($config->user_modified) ?></td>
                    <td><?= h($config->ip_modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $config->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $config->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $config->id], ['confirm' => __('Are you sure you want to delete # {0}?', $config->id)]) ?>
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
