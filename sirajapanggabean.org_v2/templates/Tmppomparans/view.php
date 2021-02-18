<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tmppomparan $tmppomparan
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Tmppomparan'), ['action' => 'edit', $tmppomparan->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Tmppomparan'), ['action' => 'delete', $tmppomparan->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tmppomparan->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Tmppomparans'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Tmppomparan'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="tmppomparans view content">
            <h3><?= h($tmppomparan->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Parent Tmppomparan') ?></th>
                    <td><?= $tmppomparan->has('parent_tmppomparan') ? $this->Html->link($tmppomparan->parent_tmppomparan->name, ['controller' => 'Tmppomparans', 'action' => 'view', $tmppomparan->parent_tmppomparan->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($tmppomparan->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Spouse Name') ?></th>
                    <td><?= h($tmppomparan->spouse_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Gender') ?></th>
                    <td><?= h($tmppomparan->gender) ?></td>
                </tr>
                <tr>
                    <th><?= __('Address') ?></th>
                    <td><?= h($tmppomparan->address) ?></td>
                </tr>
                <tr>
                    <th><?= __('City') ?></th>
                    <td><?= h($tmppomparan->city) ?></td>
                </tr>
                <tr>
                    <th><?= __('Phone') ?></th>
                    <td><?= h($tmppomparan->phone) ?></td>
                </tr>
                <tr>
                    <th><?= __('Gedcom') ?></th>
                    <td><?= $tmppomparan->has('gedcom') ? $this->Html->link($tmppomparan->gedcom->id, ['controller' => 'Gedcoms', 'action' => 'view', $tmppomparan->gedcom->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Gedcom Parent Id') ?></th>
                    <td><?= h($tmppomparan->gedcom_parent_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Gedcom Spouse Id') ?></th>
                    <td><?= h($tmppomparan->gedcom_spouse_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('User Created') ?></th>
                    <td><?= h($tmppomparan->user_created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Ip Created') ?></th>
                    <td><?= h($tmppomparan->ip_created) ?></td>
                </tr>
                <tr>
                    <th><?= __('User Modified') ?></th>
                    <td><?= h($tmppomparan->user_modified) ?></td>
                </tr>
                <tr>
                    <th><?= __('Ip Modified') ?></th>
                    <td><?= h($tmppomparan->ip_modified) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($tmppomparan->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Lft') ?></th>
                    <td><?= $this->Number->format($tmppomparan->lft) ?></td>
                </tr>
                <tr>
                    <th><?= __('Rght') ?></th>
                    <td><?= $this->Number->format($tmppomparan->rght) ?></td>
                </tr>
                <tr>
                    <th><?= __('Birth Order') ?></th>
                    <td><?= $this->Number->format($tmppomparan->birth_order) ?></td>
                </tr>
                <tr>
                    <th><?= __('Generation Level') ?></th>
                    <td><?= $this->Number->format($tmppomparan->generation_level) ?></td>
                </tr>
                <tr>
                    <th><?= __('Birth Date') ?></th>
                    <td><?= h($tmppomparan->birth_date) ?></td>
                </tr>
                <tr>
                    <th><?= __('Death Date') ?></th>
                    <td><?= h($tmppomparan->death_date) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($tmppomparan->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($tmppomparan->modified) ?></td>
                </tr>
                <tr>
                    <th><?= __('Death') ?></th>
                    <td><?= $tmppomparan->death ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Approved') ?></th>
                    <td><?= $tmppomparan->approved ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Gedcom Data') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($tmppomparan->gedcom_data)); ?>
                </blockquote>
            </div>
            <div class="related">
                <h4><?= __('Related Tmppomparans') ?></h4>
                <?php if (!empty($tmppomparan->child_tmppomparans)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Parent Id') ?></th>
                            <th><?= __('Lft') ?></th>
                            <th><?= __('Rght') ?></th>
                            <th><?= __('Name') ?></th>
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
                            <th><?= __('Gedcom Id') ?></th>
                            <th><?= __('Gedcom Parent Id') ?></th>
                            <th><?= __('Gedcom Spouse Id') ?></th>
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
                        <?php foreach ($tmppomparan->child_tmppomparans as $childTmppomparans) : ?>
                        <tr>
                            <td><?= h($childTmppomparans->id) ?></td>
                            <td><?= h($childTmppomparans->parent_id) ?></td>
                            <td><?= h($childTmppomparans->lft) ?></td>
                            <td><?= h($childTmppomparans->rght) ?></td>
                            <td><?= h($childTmppomparans->name) ?></td>
                            <td><?= h($childTmppomparans->birth_order) ?></td>
                            <td><?= h($childTmppomparans->generation_level) ?></td>
                            <td><?= h($childTmppomparans->spouse_name) ?></td>
                            <td><?= h($childTmppomparans->gender) ?></td>
                            <td><?= h($childTmppomparans->birth_date) ?></td>
                            <td><?= h($childTmppomparans->death) ?></td>
                            <td><?= h($childTmppomparans->death_date) ?></td>
                            <td><?= h($childTmppomparans->address) ?></td>
                            <td><?= h($childTmppomparans->city) ?></td>
                            <td><?= h($childTmppomparans->phone) ?></td>
                            <td><?= h($childTmppomparans->gedcom_id) ?></td>
                            <td><?= h($childTmppomparans->gedcom_parent_id) ?></td>
                            <td><?= h($childTmppomparans->gedcom_spouse_id) ?></td>
                            <td><?= h($childTmppomparans->gedcom_data) ?></td>
                            <td><?= h($childTmppomparans->approved) ?></td>
                            <td><?= h($childTmppomparans->created) ?></td>
                            <td><?= h($childTmppomparans->user_created) ?></td>
                            <td><?= h($childTmppomparans->ip_created) ?></td>
                            <td><?= h($childTmppomparans->modified) ?></td>
                            <td><?= h($childTmppomparans->user_modified) ?></td>
                            <td><?= h($childTmppomparans->ip_modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Tmppomparans', 'action' => 'view', $childTmppomparans->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Tmppomparans', 'action' => 'edit', $childTmppomparans->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Tmppomparans', 'action' => 'delete', $childTmppomparans->id], ['confirm' => __('Are you sure you want to delete # {0}?', $childTmppomparans->id)]) ?>
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
