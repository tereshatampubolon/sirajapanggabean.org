<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\GroupsModule $groupsModule
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Groups Module'), ['action' => 'edit', $groupsModule->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Groups Module'), ['action' => 'delete', $groupsModule->id], ['confirm' => __('Are you sure you want to delete # {0}?', $groupsModule->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Groups Modules'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Groups Module'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="groupsModules view content">
            <h3><?= h($groupsModule->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Group') ?></th>
                    <td><?= $groupsModule->has('group') ? $this->Html->link($groupsModule->group->name, ['controller' => 'Groups', 'action' => 'view', $groupsModule->group->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Module') ?></th>
                    <td><?= $groupsModule->has('module') ? $this->Html->link($groupsModule->module->name, ['controller' => 'Modules', 'action' => 'view', $groupsModule->module->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('User Created') ?></th>
                    <td><?= h($groupsModule->user_created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Ip Created') ?></th>
                    <td><?= h($groupsModule->ip_created) ?></td>
                </tr>
                <tr>
                    <th><?= __('User Modified') ?></th>
                    <td><?= h($groupsModule->user_modified) ?></td>
                </tr>
                <tr>
                    <th><?= __('Ip Modified') ?></th>
                    <td><?= h($groupsModule->ip_modified) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($groupsModule->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($groupsModule->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($groupsModule->modified) ?></td>
                </tr>
                <tr>
                    <th><?= __('Allowed') ?></th>
                    <td><?= $groupsModule->allowed ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
