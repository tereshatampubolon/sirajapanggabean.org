<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tmp2pomparan[]|\Cake\Collection\CollectionInterface $tmp2pomparans
 */
?>
<div class="tmp2pomparans index content">
    <?= $this->Html->link(__('New Tmp2pomparan'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Tmp2pomparans') ?></h3>
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
                <?php foreach ($tmp2pomparans as $tmp2pomparan): ?>
                <tr>
                    <td><?= $this->Number->format($tmp2pomparan->id) ?></td>
                    <td><?= $tmp2pomparan->has('parent_tmp2pomparan') ? $this->Html->link($tmp2pomparan->parent_tmp2pomparan->name, ['controller' => 'Tmp2pomparans', 'action' => 'view', $tmp2pomparan->parent_tmp2pomparan->id]) : '' ?></td>
                    <td><?= h($tmp2pomparan->name) ?></td>
                    <td><?= $this->Number->format($tmp2pomparan->birth_order) ?></td>
                    <td><?= $this->Number->format($tmp2pomparan->generation_level) ?></td>
                    <td><?= h($tmp2pomparan->spouse_name) ?></td>
                    <td><?= h($tmp2pomparan->gender) ?></td>
                    <td><?= h($tmp2pomparan->birth_date) ?></td>
                    <td><?= h($tmp2pomparan->death) ?></td>
                    <td><?= h($tmp2pomparan->death_date) ?></td>
                    <td><?= h($tmp2pomparan->address) ?></td>
                    <td><?= h($tmp2pomparan->city) ?></td>
                    <td><?= h($tmp2pomparan->phone) ?></td>
                    <td><?= $tmp2pomparan->has('gedcom') ? $this->Html->link($tmp2pomparan->gedcom->id, ['controller' => 'Gedcoms', 'action' => 'view', $tmp2pomparan->gedcom->id]) : '' ?></td>
                    <td><?= h($tmp2pomparan->gedcom_fams) ?></td>
                    <td><?= h($tmp2pomparan->gedcom_famc) ?></td>
                    <td><?= h($tmp2pomparan->approved) ?></td>
                    <td><?= h($tmp2pomparan->created) ?></td>
                    <td><?= h($tmp2pomparan->user_created) ?></td>
                    <td><?= h($tmp2pomparan->ip_created) ?></td>
                    <td><?= h($tmp2pomparan->modified) ?></td>
                    <td><?= h($tmp2pomparan->user_modified) ?></td>
                    <td><?= h($tmp2pomparan->ip_modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $tmp2pomparan->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $tmp2pomparan->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $tmp2pomparan->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tmp2pomparan->id)]) ?>
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
