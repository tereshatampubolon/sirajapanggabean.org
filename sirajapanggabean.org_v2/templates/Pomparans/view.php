<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Pomparan $pomparan
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Pomparan'), ['action' => 'edit', $pomparan->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Pomparan'), ['action' => 'delete', $pomparan->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pomparan->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Pomparans'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Pomparan'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-100">
        <div class="pomparans view content">
            <h3><?= h($pomparan->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Parent Pomparan') ?></th>
                    <td><?= $pomparan->has('parent_pomparan') ? $this->Html->link($pomparan->parent_pomparan->name, ['controller' => 'Pomparans', 'action' => 'view', $pomparan->parent_pomparan->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($pomparan->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('User') ?></th>
                    <td><?= $pomparan->has('user') ? $this->Html->link($pomparan->user->username, ['controller' => 'Users', 'action' => 'view', $pomparan->user->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Istri') ?></th>
                    <td><?= h($pomparan->spouse_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Gender') ?></th>
                    <td><?= h($pomparan->gender) ?></td>
                </tr>
                <tr>
                    <th><?= __('Address') ?></th>
                    <td><?= h($pomparan->address) ?></td>
                </tr>
                <tr>
                    <th><?= __('City') ?></th>
                    <td><?= h($pomparan->city) ?></td>
                </tr>
                <tr>
                    <th><?= __('Phone') ?></th>
                    <td><?= h($pomparan->phone) ?></td>
                </tr>
                <tr>
                    <th><?= __('Email') ?></th>
                    <td><?= h($pomparan->email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Job Title') ?></th>
                    <td><?= h($pomparan->job_title) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($pomparan->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Lft') ?></th>
                    <td><?= $this->Number->format($pomparan->lft) ?></td>
                </tr>
                <tr>
                    <th><?= __('Rght') ?></th>
                    <td><?= $this->Number->format($pomparan->rght) ?></td>
                </tr>
                <tr>
                    <th><?= __('Birth Order') ?></th>
                    <td><?= $this->Number->format($pomparan->birth_order) ?></td>
                </tr>
                <tr>
                    <th><?= __('Generation Level') ?></th>
                    <td><?= $this->Number->format($pomparan->generation_level) ?></td>
                </tr>
                <tr>
                    <th><?= __('Children Number') ?></th>
                    <td><?= $this->Number->format($pomparan->children_number) ?></td>
                </tr>
                <tr>
                    <th><?= __('Birth Date') ?></th>
                    <td><?= h($pomparan->birth_date) ?></td>
                </tr>
                <tr>
                    <th><?= __('Death Date') ?></th>
                    <td><?= h($pomparan->death_date) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($pomparan->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($pomparan->modified) ?></td>
                </tr>
                <tr>
                    <th><?= __('Death') ?></th>
                    <td><?= $pomparan->death ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Approved') ?></th>
                    <td><?= $pomparan->approved ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Gedcom Data') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($pomparan->gedcom_data)); ?>
                </blockquote>
            </div>
            <div class="related">
                <h4><?= __('Related Pages') ?></h4>
                <?php if (!empty($pomparan->pages)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Pomparan Id') ?></th>
                            <th><?= __('Num Level') ?></th>
                            <th><?= __('Chapter') ?></th>
                            <th><?= __('Page') ?></th>
                            <th><?= __('Skip') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('User Created') ?></th>
                            <th><?= __('Ip Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th><?= __('User Modified') ?></th>
                            <th><?= __('Ip Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($pomparan->pages as $pages) : ?>
                        <tr>
                            <td><?= h($pages->id) ?></td>
                            <td><?= h($pages->pomparan_id) ?></td>
                            <td><?= h($pages->num_level) ?></td>
                            <td><?= h($pages->chapter) ?></td>
                            <td><?= h($pages->page) ?></td>
                            <td><?= h($pages->skip) ?></td>
                            <td><?= h($pages->created) ?></td>
                            <td><?= h($pages->user_created) ?></td>
                            <td><?= h($pages->ip_created) ?></td>
                            <td><?= h($pages->modified) ?></td>
                            <td><?= h($pages->user_modified) ?></td>
                            <td><?= h($pages->ip_modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Pages', 'action' => 'view', $pages->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Pages', 'action' => 'edit', $pages->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Pages', 'action' => 'delete', $pages->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pages->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Pomparans') ?></h4>
                <?php if (!empty($pomparan->child_pomparans)) : ?>
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
                        <?php foreach ($pomparan->child_pomparans as $childPomparans) : ?>
                        <tr>
                            <td><?= h($childPomparans->id) ?></td>
                            <td><?= h($childPomparans->parent_id) ?></td>
                            <td><?= h($childPomparans->lft) ?></td>
                            <td><?= h($childPomparans->rght) ?></td>
                            <td><?= h($childPomparans->name) ?></td>
                            <td><?= h($childPomparans->user_id) ?></td>
                            <td><?= h($childPomparans->birth_order) ?></td>
                            <td><?= h($childPomparans->generation_level) ?></td>
                            <td><?= h($childPomparans->spouse_name) ?></td>
                            <td><?= h($childPomparans->gender) ?></td>
                            <td><?= h($childPomparans->birth_date) ?></td>
                            <td><?= h($childPomparans->death) ?></td>
                            <td><?= h($childPomparans->death_date) ?></td>
                            <td><?= h($childPomparans->address) ?></td>
                            <td><?= h($childPomparans->city) ?></td>
                            <td><?= h($childPomparans->phone) ?></td>
                            <td><?= h($childPomparans->email) ?></td>
                            <td><?= h($childPomparans->job_title) ?></td>
                            <td><?= h($childPomparans->children_number) ?></td>
                            <td><?= h($childPomparans->gedcom_id) ?></td>
                            <td><?= h($childPomparans->gedcom_fams) ?></td>
                            <td><?= h($childPomparans->gedcom_famc) ?></td>
                            <td><?= h($childPomparans->gedcom_data) ?></td>
                            <td><?= h($childPomparans->approved) ?></td>
                            <td><?= h($childPomparans->created) ?></td>
                            <td><?= h($childPomparans->user_created) ?></td>
                            <td><?= h($childPomparans->ip_created) ?></td>
                            <td><?= h($childPomparans->modified) ?></td>
                            <td><?= h($childPomparans->user_modified) ?></td>
                            <td><?= h($childPomparans->ip_modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Pomparans', 'action' => 'view', $childPomparans->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Pomparans', 'action' => 'edit', $childPomparans->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Pomparans', 'action' => 'delete', $childPomparans->id], ['confirm' => __('Are you sure you want to delete # {0}?', $childPomparans->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Pomparans Comments') ?></h4>
                <?php if (!empty($pomparan->pomparans_comments)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Pomparan Id') ?></th>
                            <th><?= __('Comment') ?></th>
                            <th><?= __('Re Comment') ?></th>
                            <th><?= __('Status') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('User Created') ?></th>
                            <th><?= __('Ip Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th><?= __('User Modified') ?></th>
                            <th><?= __('Ip Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($pomparan->pomparans_comments as $pomparansComments) : ?>
                        <tr>
                            <td><?= h($pomparansComments->id) ?></td>
                            <td><?= h($pomparansComments->pomparan_id) ?></td>
                            <td><?= h($pomparansComments->comment) ?></td>
                            <td><?= h($pomparansComments->re_comment) ?></td>
                            <td><?= h($pomparansComments->status) ?></td>
                            <td><?= h($pomparansComments->created) ?></td>
                            <td><?= h($pomparansComments->user_created) ?></td>
                            <td><?= h($pomparansComments->ip_created) ?></td>
                            <td><?= h($pomparansComments->modified) ?></td>
                            <td><?= h($pomparansComments->user_modified) ?></td>
                            <td><?= h($pomparansComments->ip_modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'PomparansComments', 'action' => 'view', $pomparansComments->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'PomparansComments', 'action' => 'edit', $pomparansComments->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'PomparansComments', 'action' => 'delete', $pomparansComments->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pomparansComments->id)]) ?>
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
