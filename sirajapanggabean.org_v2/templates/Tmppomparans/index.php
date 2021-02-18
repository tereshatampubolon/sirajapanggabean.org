<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tmppomparan[]|\Cake\Collection\CollectionInterface $tmppomparans
 */
?>
<div class="tmppomparans index content">
    <?= $this->Html->link(__('New Tmppomparan'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Tmppomparans') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('parent_id') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
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
                    <th><?= $this->Paginator->sort('gedcom_id') ?></th>
                    <th><?= $this->Paginator->sort('gedcom_parent_id') ?></th>
                    <th><?= $this->Paginator->sort('gedcom_spouse_id') ?></th>
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
                <?php foreach ($tmppomparans as $tmppomparan): ?>
                <tr>
                    <td><?= $this->Number->format($tmppomparan->id) ?></td>
                    <td><?= $tmppomparan->has('parent_tmppomparan') ? $this->Html->link($tmppomparan->parent_tmppomparan->name, ['controller' => 'Tmppomparans', 'action' => 'view', $tmppomparan->parent_tmppomparan->id]) : '' ?></td>
                    <td><?= h($tmppomparan->name) ?></td>
                    <td><?= $this->Number->format($tmppomparan->birth_order) ?></td>
                    <td><?= $this->Number->format($tmppomparan->generation_level) ?></td>
                    <td><?= h($tmppomparan->spouse_name) ?></td>
                    <td><?= h($tmppomparan->gender) ?></td>
                    <td><?= h($tmppomparan->birth_date) ?></td>
                    <td><?= h($tmppomparan->death) ?></td>
                    <td><?= h($tmppomparan->death_date) ?></td>
                    <td><?= h($tmppomparan->address) ?></td>
                    <td><?= h($tmppomparan->city) ?></td>
                    <td><?= h($tmppomparan->phone) ?></td>
                    <td><?= $tmppomparan->has('gedcom') ? $this->Html->link($tmppomparan->gedcom->id, ['controller' => 'Gedcoms', 'action' => 'view', $tmppomparan->gedcom->id]) : '' ?></td>
                    <td><?= h($tmppomparan->gedcom_parent_id) ?></td>
                    <td><?= h($tmppomparan->gedcom_spouse_id) ?></td>
                    <td><?= h($tmppomparan->approved) ?></td>
                    <td><?= h($tmppomparan->created) ?></td>
                    <td><?= h($tmppomparan->user_created) ?></td>
                    <td><?= h($tmppomparan->ip_created) ?></td>
                    <td><?= h($tmppomparan->modified) ?></td>
                    <td><?= h($tmppomparan->user_modified) ?></td>
                    <td><?= h($tmppomparan->ip_modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $tmppomparan->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $tmppomparan->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $tmppomparan->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tmppomparan->id)]) ?>
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
