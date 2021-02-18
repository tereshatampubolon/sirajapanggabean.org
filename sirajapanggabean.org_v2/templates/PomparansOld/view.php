<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\PomparansOld $pomparansOld
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Pomparans Old'), ['action' => 'edit', $pomparansOld->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Pomparans Old'), ['action' => 'delete', $pomparansOld->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pomparansOld->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Pomparans Old'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Pomparans Old'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-100">
        <div class="pomparansOld view content">
            <h3><?= h($pomparansOld->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Parent Pomparans Old') ?></th>
                    <td><?= $pomparansOld->has('parent_pomparans_old') ? $this->Html->link($pomparansOld->parent_pomparans_old->name, ['controller' => 'PomparansOld', 'action' => 'view', $pomparansOld->parent_pomparans_old->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($pomparansOld->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('User') ?></th>
                    <td><?= $pomparansOld->has('user') ? $this->Html->link($pomparansOld->user->id, ['controller' => 'Users', 'action' => 'view', $pomparansOld->user->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Spouse Name') ?></th>
                    <td><?= h($pomparansOld->spouse_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Gender') ?></th>
                    <td><?= h($pomparansOld->gender) ?></td>
                </tr>
                <tr>
                    <th><?= __('Address') ?></th>
                    <td><?= h($pomparansOld->address) ?></td>
                </tr>
                <tr>
                    <th><?= __('City') ?></th>
                    <td><?= h($pomparansOld->city) ?></td>
                </tr>
                <tr>
                    <th><?= __('Phone') ?></th>
                    <td><?= h($pomparansOld->phone) ?></td>
                </tr>
                <tr>
                    <th><?= __('Job Title') ?></th>
                    <td><?= h($pomparansOld->job_title) ?></td>
                </tr>
                <tr>
                    <th><?= __('Gedcom') ?></th>
                    <td><?= $pomparansOld->has('gedcom') ? $this->Html->link($pomparansOld->gedcom->id, ['controller' => 'Gedcoms', 'action' => 'view', $pomparansOld->gedcom->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Gedcom Fams') ?></th>
                    <td><?= h($pomparansOld->gedcom_fams) ?></td>
                </tr>
                <tr>
                    <th><?= __('Gedcom Famc') ?></th>
                    <td><?= h($pomparansOld->gedcom_famc) ?></td>
                </tr>
                <tr>
                    <th><?= __('User Created') ?></th>
                    <td><?= h($pomparansOld->user_created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Ip Created') ?></th>
                    <td><?= h($pomparansOld->ip_created) ?></td>
                </tr>
                <tr>
                    <th><?= __('User Modified') ?></th>
                    <td><?= h($pomparansOld->user_modified) ?></td>
                </tr>
                <tr>
                    <th><?= __('Ip Modified') ?></th>
                    <td><?= h($pomparansOld->ip_modified) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($pomparansOld->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Lft') ?></th>
                    <td><?= $this->Number->format($pomparansOld->lft) ?></td>
                </tr>
                <tr>
                    <th><?= __('Rght') ?></th>
                    <td><?= $this->Number->format($pomparansOld->rght) ?></td>
                </tr>
                <tr>
                    <th><?= __('Birth Order') ?></th>
                    <td><?= $this->Number->format($pomparansOld->birth_order) ?></td>
                </tr>
                <tr>
                    <th><?= __('Generation Level') ?></th>
                    <td><?= $this->Number->format($pomparansOld->generation_level) ?></td>
                </tr>
                <tr>
                    <th><?= __('Birth Date') ?></th>
                    <td><?= h($pomparansOld->birth_date) ?></td>
                </tr>
                <tr>
                    <th><?= __('Death Date') ?></th>
                    <td><?= h($pomparansOld->death_date) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($pomparansOld->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($pomparansOld->modified) ?></td>
                </tr>
                <tr>
                    <th><?= __('Death') ?></th>
                    <td><?= $pomparansOld->death ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Approved') ?></th>
                    <td><?= $pomparansOld->approved ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Gedcom Data') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($pomparansOld->gedcom_data)); ?>
                </blockquote>
            </div>
            <div class="related">
                <h4><?= __('Related Pomparans Old') ?></h4>
                <?php if (!empty($pomparansOld->child_pomparans_old)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Parent Id') ?></th>
                            <th><?= __('Lft') ?></th>
                            <th><?= __('Rght') ?></th>
                            <th><?= __('Name') ?></th>
                            <th><?= __('User Id') ?></th>
                            <th><?= __('Birth Order') ?></th>
                            <th><?= __('Generation Level') ?></th>
                            <th><?= __('Spouse Name') ?></th>
                            <th><?= __('Gender') ?></th>
                            <th><?= __('Birth Date') ?></th>
                            <th><?= __('Death') ?></th>
                            <th><?= __('Death Date') ?></th>
                            <th><?= __('Address') ?></th>
                            <th><?= __('City') ?></th>
                            <th><?= __('Phone') ?></th>
                            <th><?= __('Job Title') ?></th>
                            <th><?= __('Gedcom Id') ?></th>
                            <th><?= __('Gedcom Fams') ?></th>
                            <th><?= __('Gedcom Famc') ?></th>
                            <th><?= __('Gedcom Data') ?></th>
                            <th><?= __('Approved') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('User Created') ?></th>
                            <th><?= __('Ip Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th><?= __('User Modified') ?></th>
                            <th><?= __('Ip Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($pomparansOld->child_pomparans_old as $childPomparansOld) : ?>
                        <tr>
                            <td><?= h($childPomparansOld->id) ?></td>
                            <td><?= h($childPomparansOld->parent_id) ?></td>
                            <td><?= h($childPomparansOld->lft) ?></td>
                            <td><?= h($childPomparansOld->rght) ?></td>
                            <td><?= h($childPomparansOld->name) ?></td>
                            <td><?= h($childPomparansOld->user_id) ?></td>
                            <td><?= h($childPomparansOld->birth_order) ?></td>
                            <td><?= h($childPomparansOld->generation_level) ?></td>
                            <td><?= h($childPomparansOld->spouse_name) ?></td>
                            <td><?= h($childPomparansOld->gender) ?></td>
                            <td><?= h($childPomparansOld->birth_date) ?></td>
                            <td><?= h($childPomparansOld->death) ?></td>
                            <td><?= h($childPomparansOld->death_date) ?></td>
                            <td><?= h($childPomparansOld->address) ?></td>
                            <td><?= h($childPomparansOld->city) ?></td>
                            <td><?= h($childPomparansOld->phone) ?></td>
                            <td><?= h($childPomparansOld->job_title) ?></td>
                            <td><?= h($childPomparansOld->gedcom_id) ?></td>
                            <td><?= h($childPomparansOld->gedcom_fams) ?></td>
                            <td><?= h($childPomparansOld->gedcom_famc) ?></td>
                            <td><?= h($childPomparansOld->gedcom_data) ?></td>
                            <td><?= h($childPomparansOld->approved) ?></td>
                            <td><?= h($childPomparansOld->created) ?></td>
                            <td><?= h($childPomparansOld->user_created) ?></td>
                            <td><?= h($childPomparansOld->ip_created) ?></td>
                            <td><?= h($childPomparansOld->modified) ?></td>
                            <td><?= h($childPomparansOld->user_modified) ?></td>
                            <td><?= h($childPomparansOld->ip_modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'PomparansOld', 'action' => 'view', $childPomparansOld->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'PomparansOld', 'action' => 'edit', $childPomparansOld->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'PomparansOld', 'action' => 'delete', $childPomparansOld->id], ['confirm' => __('Are you sure you want to delete # {0}?', $childPomparansOld->id)]) ?>
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
