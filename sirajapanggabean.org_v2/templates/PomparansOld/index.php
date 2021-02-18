<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\PomparansOld[]|\Cake\Collection\CollectionInterface $pomparansOld
 */
?>
<div class="pomparansOld index content">
    <?= $this->Html->link(__('New Pomparans Old'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Pomparans Old') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('parent_id') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('user_id') ?></th>
                    <th><?= $this->Paginator->sort('birth_order') ?></th>
                    <th><?= $this->Paginator->sort('generation_level') ?></th>
                    <th><?= $this->Paginator->sort('spouse_name') ?></th>
                    <th><?= $this->Paginator->sort('gender') ?></th>
                    <th><?= $this->Paginator->sort('birth_date') ?></th>
                    <th><?= $this->Paginator->sort('death') ?></th>
                    <th><?= $this->Paginator->sort('death_date') ?></th>
                    <th><?= $this->Paginator->sort('address') ?></th>
                    <th><?= $this->Paginator->sort('city') ?></th>
                    <th><?= $this->Paginator->sort('phone') ?></th>
                    <th><?= $this->Paginator->sort('job_title') ?></th>
                    <th><?= $this->Paginator->sort('gedcom_id') ?></th>
                    <th><?= $this->Paginator->sort('gedcom_fams') ?></th>
                    <th><?= $this->Paginator->sort('gedcom_famc') ?></th>
                    <th><?= $this->Paginator->sort('approved') ?></th>
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
                <?php foreach ($pomparansOld as $pomparansOld): ?>
                <tr>
                    <td><?= $this->Number->format($pomparansOld->id) ?></td>
                    <td><?= $pomparansOld->has('parent_pomparans_old') ? $this->Html->link($pomparansOld->parent_pomparans_old->name, ['controller' => 'PomparansOld', 'action' => 'view', $pomparansOld->parent_pomparans_old->id]) : '' ?></td>
                    <td><?= h($pomparansOld->name) ?></td>
                    <td><?= $pomparansOld->has('user') ? $this->Html->link($pomparansOld->user->id, ['controller' => 'Users', 'action' => 'view', $pomparansOld->user->id]) : '' ?></td>
                    <td><?= $this->Number->format($pomparansOld->birth_order) ?></td>
                    <td><?= $this->Number->format($pomparansOld->generation_level) ?></td>
                    <td><?= h($pomparansOld->spouse_name) ?></td>
                    <td><?= h($pomparansOld->gender) ?></td>
                    <td><?= h($pomparansOld->birth_date) ?></td>
                    <td><?= h($pomparansOld->death) ?></td>
                    <td><?= h($pomparansOld->death_date) ?></td>
                    <td><?= h($pomparansOld->address) ?></td>
                    <td><?= h($pomparansOld->city) ?></td>
                    <td><?= h($pomparansOld->phone) ?></td>
                    <td><?= h($pomparansOld->job_title) ?></td>
                    <td><?= $pomparansOld->has('gedcom') ? $this->Html->link($pomparansOld->gedcom->id, ['controller' => 'Gedcoms', 'action' => 'view', $pomparansOld->gedcom->id]) : '' ?></td>
                    <td><?= h($pomparansOld->gedcom_fams) ?></td>
                    <td><?= h($pomparansOld->gedcom_famc) ?></td>
                    <td><?= h($pomparansOld->approved) ?></td>
                    <td><?= h($pomparansOld->created) ?></td>
                    <td><?= h($pomparansOld->user_created) ?></td>
                    <td><?= h($pomparansOld->ip_created) ?></td>
                    <td><?= h($pomparansOld->modified) ?></td>
                    <td><?= h($pomparansOld->user_modified) ?></td>
                    <td><?= h($pomparansOld->ip_modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $pomparansOld->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $pomparansOld->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $pomparansOld->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pomparansOld->id)]) ?>
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
