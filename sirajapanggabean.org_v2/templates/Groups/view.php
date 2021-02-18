<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Group $group
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Group'), ['action' => 'edit', $group->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Group'), ['action' => 'delete', $group->id], ['confirm' => __('Are you sure you want to delete # {0}?', $group->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Groups'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Group'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="groups view content">
            <h3><?= h($group->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($group->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('User Created') ?></th>
                    <td><?= h($group->user_created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Ip Created') ?></th>
                    <td><?= h($group->ip_created) ?></td>
                </tr>
                <tr>
                    <th><?= __('User Modified') ?></th>
                    <td><?= h($group->user_modified) ?></td>
                </tr>
                <tr>
                    <th><?= __('Ip Modified') ?></th>
                    <td><?= h($group->ip_modified) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($group->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($group->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($group->modified) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Modules') ?></h4>
                <?php if (!empty($group->modules)) : ?>
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
                        <?php foreach ($group->modules as $modules) : ?>
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
            <div class="related">
                <h4><?= __('Related Users') ?></h4>
                <?php if (!empty($group->users)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Username') ?></th>
                            <th><?= __('Email') ?></th>
                            <th><?= __('Password') ?></th>
                            <th><?= __('Current Role') ?></th>
                            <th><?= __('Nama Diri') ?></th>
                            <th><?= __('Sundut') ?></th>
                            <th><?= __('Nama Bapak') ?></th>
                            <th><?= __('Nama Ompung') ?></th>
                            <th><?= __('Pomparan') ?></th>
                            <th><?= __('Verification Code') ?></th>
                            <th><?= __('Verified') ?></th>
                            <th><?= __('Activated') ?></th>
                            <th><?= __('Lastlogin') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('User Created') ?></th>
                            <th><?= __('Ip Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th><?= __('User Modified') ?></th>
                            <th><?= __('Ip Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($group->users as $users) : ?>
                        <tr>
                            <td><?= h($users->id) ?></td>
                            <td><?= h($users->username) ?></td>
                            <td><?= h($users->email) ?></td>
                            <td><?= h($users->password) ?></td>
                            <td><?= h($users->current_role) ?></td>
                            <td><?= h($users->nama_diri) ?></td>
                            <td><?= h($users->sundut) ?></td>
                            <td><?= h($users->nama_bapak) ?></td>
                            <td><?= h($users->nama_ompung) ?></td>
                            <td><?= h($users->pomparan) ?></td>
                            <td><?= h($users->verification_code) ?></td>
                            <td><?= h($users->verified) ?></td>
                            <td><?= h($users->activated) ?></td>
                            <td><?= h($users->lastlogin) ?></td>
                            <td><?= h($users->created) ?></td>
                            <td><?= h($users->user_created) ?></td>
                            <td><?= h($users->ip_created) ?></td>
                            <td><?= h($users->modified) ?></td>
                            <td><?= h($users->user_modified) ?></td>
                            <td><?= h($users->ip_modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Users', 'action' => 'view', $users->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Users', 'action' => 'edit', $users->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Users', 'action' => 'delete', $users->id], ['confirm' => __('Are you sure you want to delete # {0}?', $users->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Fungsis') ?></h4>
                <?php if (!empty($group->fungsis)) : ?>
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
                        <?php foreach ($group->fungsis as $fungsis) : ?>
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
        </div>
    </div>
</div>
