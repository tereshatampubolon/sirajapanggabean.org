<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Token[]|\Cake\Collection\CollectionInterface $tokens
 */
?>
<div class="tokens index content">
    <?= $this->Html->link(__('New Token'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Tokens') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th><?= $this->Paginator->sort('token') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($tokens as $token): ?>
                <tr>
                    <td><?= $this->Number->format($token->id) ?></td>
                    <td><?= h($token->created) ?></td>
                    <td><?= h($token->modified) ?></td>
                    <td><?= h($token->token) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $token->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $token->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $token->id], ['confirm' => __('Are you sure you want to delete # {0}?', $token->id)]) ?>
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
