<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Appscode $appscode
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Appscode'), ['action' => 'edit', $appscode->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Appscode'), ['action' => 'delete', $appscode->id], ['confirm' => __('Are you sure you want to delete # {0}?', $appscode->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Appscodes'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Appscode'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="appscodes view content">
            <h3><?= h($appscode->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Parameter Name') ?></th>
                    <td><?= h($appscode->parameter_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Param') ?></th>
                    <td><?= h($appscode->param) ?></td>
                </tr>
                <tr>
                    <th><?= __('Value') ?></th>
                    <td><?= h($appscode->value) ?></td>
                </tr>
                <tr>
                    <th><?= __('User Created') ?></th>
                    <td><?= h($appscode->user_created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Ip Created') ?></th>
                    <td><?= h($appscode->ip_created) ?></td>
                </tr>
                <tr>
                    <th><?= __('User Modified') ?></th>
                    <td><?= h($appscode->user_modified) ?></td>
                </tr>
                <tr>
                    <th><?= __('Ip Modified') ?></th>
                    <td><?= h($appscode->ip_modified) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($appscode->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Code') ?></th>
                    <td><?= $this->Number->format($appscode->code) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($appscode->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($appscode->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
