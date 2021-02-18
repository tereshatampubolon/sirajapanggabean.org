<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Page[]|\Cake\Collection\CollectionInterface $pages
 */
?>
<div class="pages index content">
    <?= $this->Html->link(__('New Page'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Pages') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('pomparan_id') ?></th>
                    <th><?= $this->Paginator->sort('num_level') ?></th>
                    <th><?= $this->Paginator->sort('chapter') ?></th>
                    <th><?= $this->Paginator->sort('page') ?></th>
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
                <?php foreach ($pages as $page): ?>
                <tr>
                    <td><?= $this->Number->format($page->id) ?></td>
                    <td><?= $page->has('pomparan') ? $this->Html->link($page->pomparan->name, ['controller' => 'Pomparans', 'action' => 'view', $page->pomparan->id]) : '' ?></td>
                    <td><?= $this->Number->format($page->num_level) ?></td>
                    <td><?= $this->Number->format($page->chapter) ?></td>
                    <td><?= $this->Number->format($page->page) ?></td>
                    <td><?= h($page->created) ?></td>
                    <td><?= h($page->user_created) ?></td>
                    <td><?= h($page->ip_created) ?></td>
                    <td><?= h($page->modified) ?></td>
                    <td><?= h($page->user_modified) ?></td>
                    <td><?= h($page->ip_modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $page->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $page->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $page->id], ['confirm' => __('Are you sure you want to delete # {0}?', $page->id)]) ?>
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
