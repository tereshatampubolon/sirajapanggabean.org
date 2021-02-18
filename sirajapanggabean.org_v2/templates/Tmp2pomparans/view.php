<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tmp2pomparan $tmp2pomparan
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Tmp2pomparan'), ['action' => 'edit', $tmp2pomparan->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Tmp2pomparan'), ['action' => 'delete', $tmp2pomparan->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tmp2pomparan->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Tmp2pomparans'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Tmp2pomparan'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="tmp2pomparans view content">
            <h3><?= h($tmp2pomparan->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Parent Tmp2pomparan') ?></th>
                    <td><?= $tmp2pomparan->has('parent_tmp2pomparan') ? $this->Html->link($tmp2pomparan->parent_tmp2pomparan->name, ['controller' => 'Tmp2pomparans', 'action' => 'view', $tmp2pomparan->parent_tmp2pomparan->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($tmp2pomparan->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Spouse Name') ?></th>
                    <td><?= h($tmp2pomparan->spouse_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Gender') ?></th>
                    <td><?= h($tmp2pomparan->gender) ?></td>
                </tr>
                <tr>
                    <th><?= __('Address') ?></th>
                    <td><?= h($tmp2pomparan->address) ?></td>
                </tr>
                <tr>
                    <th><?= __('City') ?></th>
                    <td><?= h($tmp2pomparan->city) ?></td>
                </tr>
                <tr>
                    <th><?= __('Phone') ?></th>
                    <td><?= h($tmp2pomparan->phone) ?></td>
                </tr>
                <tr>
                    <th><?= __('Gedcom') ?></th>
                    <td><?= $tmp2pomparan->has('gedcom') ? $this->Html->link($tmp2pomparan->gedcom->id, ['controller' => 'Gedcoms', 'action' => 'view', $tmp2pomparan->gedcom->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Gedcom Fams') ?></th>
                    <td><?= h($tmp2pomparan->gedcom_fams) ?></td>
                </tr>
                <tr>
                    <th><?= __('Gedcom Famc') ?></th>
                    <td><?= h($tmp2pomparan->gedcom_famc) ?></td>
                </tr>
                <tr>
                    <th><?= __('User Created') ?></th>
                    <td><?= h($tmp2pomparan->user_created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Ip Created') ?></th>
                    <td><?= h($tmp2pomparan->ip_created) ?></td>
                </tr>
                <tr>
                    <th><?= __('User Modified') ?></th>
                    <td><?= h($tmp2pomparan->user_modified) ?></td>
                </tr>
                <tr>
                    <th><?= __('Ip Modified') ?></th>
                    <td><?= h($tmp2pomparan->ip_modified) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($tmp2pomparan->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Lft') ?></th>
                    <td><?= $this->Number->format($tmp2pomparan->lft) ?></td>
                </tr>
                <tr>
                    <th><?= __('Rght') ?></th>
                    <td><?= $this->Number->format($tmp2pomparan->rght) ?></td>
                </tr>
                <tr>
                    <th><?= __('Birth Order') ?></th>
                    <td><?= $this->Number->format($tmp2pomparan->birth_order) ?></td>
                </tr>
                <tr>
                    <th><?= __('Generation Level') ?></th>
                    <td><?= $this->Number->format($tmp2pomparan->generation_level) ?></td>
                </tr>
                <tr>
                    <th><?= __('Birth Date') ?></th>
                    <td><?= h($tmp2pomparan->birth_date) ?></td>
                </tr>
                <tr>
                    <th><?= __('Death Date') ?></th>
                    <td><?= h($tmp2pomparan->death_date) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($tmp2pomparan->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($tmp2pomparan->modified) ?></td>
                </tr>
                <tr>
                    <th><?= __('Death') ?></th>
                    <td><?= $tmp2pomparan->death ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Approved') ?></th>
                    <td><?= $tmp2pomparan->approved ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Gedcom Data') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($tmp2pomparan->gedcom_data)); ?>
                </blockquote>
            </div>
            <div class="related">
                <h4><?= __('Related Tmp2pomparans') ?></h4>
                <?php if (!empty($tmp2pomparan->child_tmp2pomparans)) : ?>
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
                        <?php foreach ($tmp2pomparan->child_tmp2pomparans as $childTmp2pomparans) : ?>
                        <tr>
                            <td><?= h($childTmp2pomparans->id) ?></td>
                            <td><?= h($childTmp2pomparans->parent_id) ?></td>
                            <td><?= h($childTmp2pomparans->lft) ?></td>
                            <td><?= h($childTmp2pomparans->rght) ?></td>
                            <td><?= h($childTmp2pomparans->name) ?></td>
                            <td><?= h($childTmp2pomparans->birth_order) ?></td>
                            <td><?= h($childTmp2pomparans->generation_level) ?></td>
                            <td><?= h($childTmp2pomparans->spouse_name) ?></td>
                            <td><?= h($childTmp2pomparans->gender) ?></td>
                            <td><?= h($childTmp2pomparans->birth_date) ?></td>
                            <td><?= h($childTmp2pomparans->death) ?></td>
                            <td><?= h($childTmp2pomparans->death_date) ?></td>
                            <td><?= h($childTmp2pomparans->address) ?></td>
                            <td><?= h($childTmp2pomparans->city) ?></td>
                            <td><?= h($childTmp2pomparans->phone) ?></td>
                            <td><?= h($childTmp2pomparans->gedcom_id) ?></td>
                            <td><?= h($childTmp2pomparans->gedcom_fams) ?></td>
                            <td><?= h($childTmp2pomparans->gedcom_famc) ?></td>
                            <td><?= h($childTmp2pomparans->gedcom_data) ?></td>
                            <td><?= h($childTmp2pomparans->approved) ?></td>
                            <td><?= h($childTmp2pomparans->created) ?></td>
                            <td><?= h($childTmp2pomparans->user_created) ?></td>
                            <td><?= h($childTmp2pomparans->ip_created) ?></td>
                            <td><?= h($childTmp2pomparans->modified) ?></td>
                            <td><?= h($childTmp2pomparans->user_modified) ?></td>
                            <td><?= h($childTmp2pomparans->ip_modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Tmp2pomparans', 'action' => 'view', $childTmp2pomparans->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Tmp2pomparans', 'action' => 'edit', $childTmp2pomparans->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Tmp2pomparans', 'action' => 'delete', $childTmp2pomparans->id], ['confirm' => __('Are you sure you want to delete # {0}?', $childTmp2pomparans->id)]) ?>
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
