<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Gedcom $gedcom
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Gedcom'), ['action' => 'edit', $gedcom->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Gedcom'), ['action' => 'delete', $gedcom->id], ['confirm' => __('Are you sure you want to delete # {0}?', $gedcom->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Gedcoms'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Gedcom'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="gedcoms view content">
            <h3><?= h($gedcom->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('I Id') ?></th>
                    <td><?= h($gedcom->i_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('I Rin') ?></th>
                    <td><?= h($gedcom->i_rin) ?></td>
                </tr>
                <tr>
                    <th><?= __('I Sex') ?></th>
                    <td><?= h($gedcom->i_sex) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($gedcom->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('I File') ?></th>
                    <td><?= $this->Number->format($gedcom->i_file) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('I Gedcom') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($gedcom->i_gedcom)); ?>
                </blockquote>
            </div>
            <div class="related">
                <h4><?= __('Related Pomparans') ?></h4>
                <?php if (!empty($gedcom->pomparans)) : ?>
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
                            <th><?= __('Email') ?></th>
                            <th><?= __('Job Title') ?></th>
                            <th><?= __('Children Number') ?></th>
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
                        <?php foreach ($gedcom->pomparans as $pomparans) : ?>
                        <tr>
                            <td><?= h($pomparans->id) ?></td>
                            <td><?= h($pomparans->parent_id) ?></td>
                            <td><?= h($pomparans->lft) ?></td>
                            <td><?= h($pomparans->rght) ?></td>
                            <td><?= h($pomparans->name) ?></td>
                            <td><?= h($pomparans->user_id) ?></td>
                            <td><?= h($pomparans->birth_order) ?></td>
                            <td><?= h($pomparans->generation_level) ?></td>
                            <td><?= h($pomparans->spouse_name) ?></td>
                            <td><?= h($pomparans->gender) ?></td>
                            <td><?= h($pomparans->birth_date) ?></td>
                            <td><?= h($pomparans->death) ?></td>
                            <td><?= h($pomparans->death_date) ?></td>
                            <td><?= h($pomparans->address) ?></td>
                            <td><?= h($pomparans->city) ?></td>
                            <td><?= h($pomparans->phone) ?></td>
                            <td><?= h($pomparans->email) ?></td>
                            <td><?= h($pomparans->job_title) ?></td>
                            <td><?= h($pomparans->children_number) ?></td>
                            <td><?= h($pomparans->gedcom_id) ?></td>
                            <td><?= h($pomparans->gedcom_fams) ?></td>
                            <td><?= h($pomparans->gedcom_famc) ?></td>
                            <td><?= h($pomparans->gedcom_data) ?></td>
                            <td><?= h($pomparans->approved) ?></td>
                            <td><?= h($pomparans->created) ?></td>
                            <td><?= h($pomparans->user_created) ?></td>
                            <td><?= h($pomparans->ip_created) ?></td>
                            <td><?= h($pomparans->modified) ?></td>
                            <td><?= h($pomparans->user_modified) ?></td>
                            <td><?= h($pomparans->ip_modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Pomparans', 'action' => 'view', $pomparans->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Pomparans', 'action' => 'edit', $pomparans->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Pomparans', 'action' => 'delete', $pomparans->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pomparans->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Pomparans Old') ?></h4>
                <?php if (!empty($gedcom->pomparans_old)) : ?>
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
                        <?php foreach ($gedcom->pomparans_old as $pomparansOld) : ?>
                        <tr>
                            <td><?= h($pomparansOld->id) ?></td>
                            <td><?= h($pomparansOld->parent_id) ?></td>
                            <td><?= h($pomparansOld->lft) ?></td>
                            <td><?= h($pomparansOld->rght) ?></td>
                            <td><?= h($pomparansOld->name) ?></td>
                            <td><?= h($pomparansOld->user_id) ?></td>
                            <td><?= h($pomparansOld->birth_order) ?></td>
                            <td><?= h($pomparansOld->generation_level) ?></td>
                            <td><?= h($pomparansOld->spouse_name) ?></td>
                            <td><?= h($pomparansOld->gender) ?></td>
                            <td><?= h($pomparansOld->birth_date) ?></td>
                            <td><?= h($pomparansOld->death) ?></td>
                            <td><?= h($pomparansOld->death_date) ?></td>
                            <td><?= h($pomparansOld->address) ?></td>
                            <td><?= h($pomparansOld->city) ?></td>
                            <td><?= h($pomparansOld->phone) ?></td>
                            <td><?= h($pomparansOld->job_title) ?></td>
                            <td><?= h($pomparansOld->gedcom_id) ?></td>
                            <td><?= h($pomparansOld->gedcom_fams) ?></td>
                            <td><?= h($pomparansOld->gedcom_famc) ?></td>
                            <td><?= h($pomparansOld->gedcom_data) ?></td>
                            <td><?= h($pomparansOld->approved) ?></td>
                            <td><?= h($pomparansOld->created) ?></td>
                            <td><?= h($pomparansOld->user_created) ?></td>
                            <td><?= h($pomparansOld->ip_created) ?></td>
                            <td><?= h($pomparansOld->modified) ?></td>
                            <td><?= h($pomparansOld->user_modified) ?></td>
                            <td><?= h($pomparansOld->ip_modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'PomparansOld', 'action' => 'view', $pomparansOld->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'PomparansOld', 'action' => 'edit', $pomparansOld->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'PomparansOld', 'action' => 'delete', $pomparansOld->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pomparansOld->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Tmp2pomparans') ?></h4>
                <?php if (!empty($gedcom->tmp2pomparans)) : ?>
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
                        <?php foreach ($gedcom->tmp2pomparans as $tmp2pomparans) : ?>
                        <tr>
                            <td><?= h($tmp2pomparans->id) ?></td>
                            <td><?= h($tmp2pomparans->parent_id) ?></td>
                            <td><?= h($tmp2pomparans->lft) ?></td>
                            <td><?= h($tmp2pomparans->rght) ?></td>
                            <td><?= h($tmp2pomparans->name) ?></td>
                            <td><?= h($tmp2pomparans->birth_order) ?></td>
                            <td><?= h($tmp2pomparans->generation_level) ?></td>
                            <td><?= h($tmp2pomparans->spouse_name) ?></td>
                            <td><?= h($tmp2pomparans->gender) ?></td>
                            <td><?= h($tmp2pomparans->birth_date) ?></td>
                            <td><?= h($tmp2pomparans->death) ?></td>
                            <td><?= h($tmp2pomparans->death_date) ?></td>
                            <td><?= h($tmp2pomparans->address) ?></td>
                            <td><?= h($tmp2pomparans->city) ?></td>
                            <td><?= h($tmp2pomparans->phone) ?></td>
                            <td><?= h($tmp2pomparans->gedcom_id) ?></td>
                            <td><?= h($tmp2pomparans->gedcom_fams) ?></td>
                            <td><?= h($tmp2pomparans->gedcom_famc) ?></td>
                            <td><?= h($tmp2pomparans->gedcom_data) ?></td>
                            <td><?= h($tmp2pomparans->approved) ?></td>
                            <td><?= h($tmp2pomparans->created) ?></td>
                            <td><?= h($tmp2pomparans->user_created) ?></td>
                            <td><?= h($tmp2pomparans->ip_created) ?></td>
                            <td><?= h($tmp2pomparans->modified) ?></td>
                            <td><?= h($tmp2pomparans->user_modified) ?></td>
                            <td><?= h($tmp2pomparans->ip_modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Tmp2pomparans', 'action' => 'view', $tmp2pomparans->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Tmp2pomparans', 'action' => 'edit', $tmp2pomparans->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Tmp2pomparans', 'action' => 'delete', $tmp2pomparans->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tmp2pomparans->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Tmppomparans') ?></h4>
                <?php if (!empty($gedcom->tmppomparans)) : ?>
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
                        <?php foreach ($gedcom->tmppomparans as $tmppomparans) : ?>
                        <tr>
                            <td><?= h($tmppomparans->id) ?></td>
                            <td><?= h($tmppomparans->parent_id) ?></td>
                            <td><?= h($tmppomparans->lft) ?></td>
                            <td><?= h($tmppomparans->rght) ?></td>
                            <td><?= h($tmppomparans->name) ?></td>
                            <td><?= h($tmppomparans->birth_order) ?></td>
                            <td><?= h($tmppomparans->generation_level) ?></td>
                            <td><?= h($tmppomparans->spouse_name) ?></td>
                            <td><?= h($tmppomparans->gender) ?></td>
                            <td><?= h($tmppomparans->birth_date) ?></td>
                            <td><?= h($tmppomparans->death) ?></td>
                            <td><?= h($tmppomparans->death_date) ?></td>
                            <td><?= h($tmppomparans->address) ?></td>
                            <td><?= h($tmppomparans->city) ?></td>
                            <td><?= h($tmppomparans->phone) ?></td>
                            <td><?= h($tmppomparans->gedcom_id) ?></td>
                            <td><?= h($tmppomparans->gedcom_parent_id) ?></td>
                            <td><?= h($tmppomparans->gedcom_spouse_id) ?></td>
                            <td><?= h($tmppomparans->gedcom_data) ?></td>
                            <td><?= h($tmppomparans->approved) ?></td>
                            <td><?= h($tmppomparans->created) ?></td>
                            <td><?= h($tmppomparans->user_created) ?></td>
                            <td><?= h($tmppomparans->ip_created) ?></td>
                            <td><?= h($tmppomparans->modified) ?></td>
                            <td><?= h($tmppomparans->user_modified) ?></td>
                            <td><?= h($tmppomparans->ip_modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Tmppomparans', 'action' => 'view', $tmppomparans->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Tmppomparans', 'action' => 'edit', $tmppomparans->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Tmppomparans', 'action' => 'delete', $tmppomparans->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tmppomparans->id)]) ?>
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
