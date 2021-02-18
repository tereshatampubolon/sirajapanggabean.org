<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Announcement[]|\Cake\Collection\CollectionInterface $announcements
 */
?>
<div class="announcements index content">
    <?= $this->Html->link(__('New Announcement'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Announcements') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('syllabus_id') ?></th>
                    <th><?= $this->Paginator->sort('start_date_published') ?></th>
                    <th><?= $this->Paginator->sort('end_date_published') ?></th>
                    <th><?= $this->Paginator->sort('title') ?></th>
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
                <?php foreach ($announcements as $announcement): ?>
                <tr>
                    <td><?= $this->Number->format($announcement->id) ?></td>
                    <td><?= $this->Number->format($announcement->syllabus_id) ?></td>
                    <td><?= h($announcement->start_date_published) ?></td>
                    <td><?= h($announcement->end_date_published) ?></td>
                    <td><?= h($announcement->title) ?></td>
                    <td><?= h($announcement->created) ?></td>
                    <td><?= h($announcement->user_created) ?></td>
                    <td><?= h($announcement->ip_created) ?></td>
                    <td><?= h($announcement->modified) ?></td>
                    <td><?= h($announcement->user_modified) ?></td>
                    <td><?= h($announcement->ip_modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $announcement->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $announcement->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $announcement->id], ['confirm' => __('Are you sure you want to delete # {0}?', $announcement->id)]) ?>
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
