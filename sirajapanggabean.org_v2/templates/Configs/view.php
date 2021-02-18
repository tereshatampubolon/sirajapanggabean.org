<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Config $config
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Config'), ['action' => 'edit', $config->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Config'), ['action' => 'delete', $config->id], ['confirm' => __('Are you sure you want to delete # {0}?', $config->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Configs'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Config'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="configs view content">
            <h3><?= h($config->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Web Name') ?></th>
                    <td><?= h($config->web_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Admin Email') ?></th>
                    <td><?= h($config->admin_email) ?></td>
                </tr>
                <tr>
                    <th><?= __('File Location') ?></th>
                    <td><?= h($config->file_location) ?></td>
                </tr>
                <tr>
                    <th><?= __('Photo Location') ?></th>
                    <td><?= h($config->photo_location) ?></td>
                </tr>
                <tr>
                    <th><?= __('User Created') ?></th>
                    <td><?= h($config->user_created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Ip Created') ?></th>
                    <td><?= h($config->ip_created) ?></td>
                </tr>
                <tr>
                    <th><?= __('User Modified') ?></th>
                    <td><?= h($config->user_modified) ?></td>
                </tr>
                <tr>
                    <th><?= __('Ip Modified') ?></th>
                    <td><?= h($config->ip_modified) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($config->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($config->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($config->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
