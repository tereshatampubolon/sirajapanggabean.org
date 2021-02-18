<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ModulesFungsi $modulesFungsi
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Modules Fungsi'), ['action' => 'edit', $modulesFungsi->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Modules Fungsi'), ['action' => 'delete', $modulesFungsi->id], ['confirm' => __('Are you sure you want to delete # {0}?', $modulesFungsi->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Modules Fungsis'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Modules Fungsi'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="modulesFungsis view content">
            <h3><?= h($modulesFungsi->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Module') ?></th>
                    <td><?= $modulesFungsi->has('module') ? $this->Html->link($modulesFungsi->module->name, ['controller' => 'Modules', 'action' => 'view', $modulesFungsi->module->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($modulesFungsi->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('User Created') ?></th>
                    <td><?= h($modulesFungsi->user_created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Ip Created') ?></th>
                    <td><?= h($modulesFungsi->ip_created) ?></td>
                </tr>
                <tr>
                    <th><?= __('User Modified') ?></th>
                    <td><?= h($modulesFungsi->user_modified) ?></td>
                </tr>
                <tr>
                    <th><?= __('Ip Modified') ?></th>
                    <td><?= h($modulesFungsi->ip_modified) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($modulesFungsi->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($modulesFungsi->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($modulesFungsi->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
