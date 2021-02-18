<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Calendar[]|\Cake\Collection\CollectionInterface $calendars
 */
?>
<div class="calendars index content">
    <?= $this->Html->link(__('New Calendar'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Calendars') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('category') ?></th>
                    <th><?= $this->Paginator->sort('start_date') ?></th>
                    <th><?= $this->Paginator->sort('end_date') ?></th>
                    <th><?= $this->Paginator->sort('calendar_system') ?></th>
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
                <?php foreach ($calendars as $calendar): ?>
                <tr>
                    <td><?= $this->Number->format($calendar->id) ?></td>
                    <td><?= h($calendar->name) ?></td>
                    <td><?= h($calendar->category) ?></td>
                    <td><?= h($calendar->start_date) ?></td>
                    <td><?= h($calendar->end_date) ?></td>
                    <td><?= h($calendar->calendar_system) ?></td>
                    <td><?= h($calendar->created) ?></td>
                    <td><?= h($calendar->user_created) ?></td>
                    <td><?= h($calendar->ip_created) ?></td>
                    <td><?= h($calendar->modified) ?></td>
                    <td><?= h($calendar->user_modified) ?></td>
                    <td><?= h($calendar->ip_modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $calendar->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $calendar->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $calendar->id], ['confirm' => __('Are you sure you want to delete # {0}?', $calendar->id)]) ?>
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
