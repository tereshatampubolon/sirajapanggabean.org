<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Module $module
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Module'), ['action' => 'edit', $module->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Module'), ['action' => 'delete', $module->id], ['confirm' => __('Are you sure you want to delete # {0}?', $module->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Modules'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Module'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="modules view content">
            <h3><?= h($module->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($module->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('User Created') ?></th>
                    <td><?= h($module->user_created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Ip Created') ?></th>
                    <td><?= h($module->ip_created) ?></td>
                </tr>
                <tr>
                    <th><?= __('User Modified') ?></th>
                    <td><?= h($module->user_modified) ?></td>
                </tr>
                <tr>
                    <th><?= __('Ip Modified') ?></th>
                    <td><?= h($module->ip_modified) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($module->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($module->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($module->modified) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Fungsis') ?></h4>
                <?php if (!empty($module->fungsis)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Module Id') ?></th>
                            <th><?= __('Group Id') ?></th>
                            <th><?= __('Fungsi') ?></th>
                            <th><?= __('Blocked') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('User Created') ?></th>
                            <th><?= __('Ip Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th><?= __('User Modified') ?></th>
                            <th><?= __('Ip Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($module->fungsis as $fungsis) : ?>
                        <tr>
                            <td><?= h($fungsis->id) ?></td>
                            <td><?= h($fungsis->module_id) ?></td>
                            <td><?= h($fungsis->group_id) ?></td>
                            <td><?= h($fungsis->fungsi) ?></td>
                            <td><?= h($fungsis->blocked) ?></td>
                            <td><?= h($fungsis->created) ?></td>
                            <td><?= h($fungsis->user_created) ?></td>
                            <td><?= h($fungsis->ip_created) ?></td>
                            <td><?= h($fungsis->modified) ?></td>
                            <td><?= h($fungsis->user_modified) ?></td>
                            <td><?= h($fungsis->ip_modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Fungsis', 'action' => 'view', $fungsis->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Fungsis', 'action' => 'edit', $fungsis->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Fungsis', 'action' => 'delete', $fungsis->id], ['confirm' => __('Are you sure you want to delete # {0}?', $fungsis->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Groups') ?></h4>
                <?php if (!empty($module->groups)) : ?>
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
                        <?php foreach ($module->groups as $groups) : ?>
                        <tr>
                            <td><?= h($groups->id) ?></td>
                            <td><?= h($groups->name) ?></td>
                            <td><?= h($groups->created) ?></td>
                            <td><?= h($groups->user_created) ?></td>
                            <td><?= h($groups->ip_created) ?></td>
                            <td><?= h($groups->modified) ?></td>
                            <td><?= h($groups->user_modified) ?></td>
                            <td><?= h($groups->ip_modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Groups', 'action' => 'view', $groups->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Groups', 'action' => 'edit', $groups->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Groups', 'action' => 'delete', $groups->id], ['confirm' => __('Are you sure you want to delete # {0}?', $groups->id)]) ?>
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
