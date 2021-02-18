<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Gedcom[]|\Cake\Collection\CollectionInterface $gedcoms
 */
?>
<div class="gedcoms index content">
    <?= $this->Html->link(__('New Gedcom'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Gedcoms') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('i_id') ?></th>
                    <th><?= $this->Paginator->sort('i_file') ?></th>
                    <th><?= $this->Paginator->sort('i_rin') ?></th>
                    <th><?= $this->Paginator->sort('i_sex') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($gedcoms as $gedcom): ?>
                <tr>
                    <td><?= $this->Number->format($gedcom->id) ?></td>
                    <td><?= h($gedcom->i_id) ?></td>
                    <td><?= $this->Number->format($gedcom->i_file) ?></td>
                    <td><?= h($gedcom->i_rin) ?></td>
                    <td><?= h($gedcom->i_sex) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $gedcom->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $gedcom->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $gedcom->id], ['confirm' => __('Are you sure you want to delete # {0}?', $gedcom->id)]) ?>
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
