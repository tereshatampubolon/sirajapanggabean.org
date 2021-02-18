<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->id], ['class' => 'btn btn-primary']) ?>
            <?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->id], ['confirm' => __('Apakah Anda yakin untuk menghapusnya # {0}?', $user->id), 'class' => 'btn btn-danger']) ?>
            <?= $this->Html->link(__('List Users'), ['action' => 'index'], ['class' => 'btn btn-primary']) ?>
            <?php if ($user->activated) : ?>
                <?= $this->Form->postLink(__('Deactivated'), ['action' => 'userStatus',$user->id,$user->activated],['confirm' =>__('Apakah Anda yakin untuk mendeaktivasi # {0}?', $user->id), 'class' => 'btn btn-danger']) ?>
            <?php else : ?>
                <?= $this->Form->postLink(__('Aktivasi'), ['action' => 'userAktif',$user->id,$user->activated],['confirm' =>__('Apakah Anda yakin untuk aktivasi # {0}?', $user->id), 'class' => 'btn btn-success']) ?>
            <?php endif; ?>

            <?= $this->Html->link(__('Reset Password'), ['action' => 'resetpassword',$user->id], ['class' => 'btn btn-danger']) ?>
           
        </div>
    </aside>
    <div class="column-responsive column-100">
        <div class="users view content">
    
            <table>
                 <tr>
                
                    <th><h3><?= __('Id') ?></H3></th>
                    <td><h3><?= h($user->id) ?></H3></td>
                  
                </tr>
                <tr>
                    <th><?= __('Username') ?></th>
                    <td><?= h($user->username) ?></td>
                </tr>
                <tr>
                    <th><?= __('Email') ?></th>
                    <td><?= h($user->email) ?></td>
                </tr>
          
                <tr>
                    <th><?= __('Nama') ?></th>
                    <td><?= h($user->nama_diri) ?></td>
                </tr>
                
                <tr>
                    <th><?= __('Pomparan') ?></th>
                    <td><?= h($user->pomparan) ?></td>
                </tr>
                <tr>
                    <th><?= __('Sundut') ?></th>
                    <td><?= $this->Number->format($user->sundut) ?></td>
                </tr>
                <tr>
                    <th><?= __('Nama Bapak') ?></th>
                    <td><?= h($user->nama_bapak) ?></td>
                </tr>
                
                <tr>
                    <th><?= __('Status Account') ?></th>
                    <td><?= $user->verified ? __('Terverivikasi') : __('Tidak Terverivikasi'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Activated') ?></th>
                    <td><?= $user->activated ? __('Teraktivikasi') : __('Tidak Teraktivikasi'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Login Terakhir ') ?></th>
                    <td><?= h($user->lastlogin) ?></td>
                </tr>
                 <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($user->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('User Created') ?></th>
                    <td><?= h($user->user_created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Ip Created') ?></th>
                    <td><?= h($user->ip_created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($user->modified) ?></td>
                </tr>
                <tr>
                    <th><?= __('User Modified') ?></th>
                    <td><?= h($user->user_modified) ?></td>
                </tr>
                <tr>
                    <th><?= __('Ip Modified') ?></th>
                    <td><?= h($user->ip_modified) ?></td>
                </tr>
            </table>

            <div class="related">
                <h4><?= __('Related Groups') ?></h4>
                <?php if (!empty($user->groups)) : ?>
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
                        <?php foreach ($user->groups as $groups) : ?>
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
            <div class="related">
                <h4><?= __('Related Pomparans') ?></h4>
                <?php if (!empty($user->pomparans)) : ?>
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
                        <?php foreach ($user->pomparans as $pomparans) : ?>
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
                <?php if (!empty($user->pomparans_old)) : ?>
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
                        <?php foreach ($user->pomparans_old as $pomparansOld) : ?>
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
        </div>
    </div>
</div>
