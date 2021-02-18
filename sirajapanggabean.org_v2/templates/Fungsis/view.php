<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Fungsi $fungsi
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Fungsi'), ['action' => 'edit', $fungsi->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Fungsi'), ['action' => 'delete', $fungsi->id], ['confirm' => __('Are you sure you want to delete # {0}?', $fungsi->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Fungsis'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Fungsi'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="fungsis view content">
            <h3><?= h($fungsi->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Group') ?></th>
                    <td><?= $fungsi->has('group') ? $this->Html->link($fungsi->group->name, ['controller' => 'Groups', 'action' => 'view', $fungsi->group->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Fungsi') ?></th>
                    <td><?= h($fungsi->fungsi) ?></td>
                </tr>
                <tr>
                    <th><?= __('User Created') ?></th>
                    <td><?= h($fungsi->user_created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Ip Created') ?></th>
                    <td><?= h($fungsi->ip_created) ?></td>
                </tr>
                <tr>
                    <th><?= __('User Modified') ?></th>
                    <td><?= h($fungsi->user_modified) ?></td>
                </tr>
                <tr>
                    <th><?= __('Ip Modified') ?></th>
                    <td><?= h($fungsi->ip_modified) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($fungsi->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Module Id') ?></th>
                    <td><?= $this->Number->format($fungsi->module_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($fungsi->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($fungsi->modified) ?></td>
                </tr>
                <tr>
                    <th><?= __('Blocked') ?></th>
                    <td><?= $fungsi->blocked ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Modules') ?></h4>
                <?php if (!empty($fungsi->modules)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Name') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('User Created') ?></th>
                            <th><?= __('Ip Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th><?= __('User Modified') ?></th>
                            <th><?= __('Ip Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($fungsi->modules as $modules) : ?>
                        <tr>
                            <td><?= h($modules->id) ?></td>
                            <td><?= h($modules->name) ?></td>
                            <td><?= h($modules->created) ?></td>
                            <td><?= h($modules->user_created) ?></td>
                            <td><?= h($modules->ip_created) ?></td>
                            <td><?= h($modules->modified) ?></td>
                            <td><?= h($modules->user_modified) ?></td>
                            <td><?= h($modules->ip_modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Modules', 'action' => 'view', $modules->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Modules', 'action' => 'edit', $modules->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Modules', 'action' => 'delete', $modules->id], ['confirm' => __('Are you sure you want to delete # {0}?', $modules->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
