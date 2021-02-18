<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User[]|\Cake\Collection\CollectionInterface $users
 */
?>
<style type="text/css">
.error-message {
background-color:#f0f0f0ff;
color:red;
}
</style>
<div class="users index content">
    
    <div class="float-right">
    <h4>Jumlah User Seluruhnya :  <?php echo $userCount['count'];?></h4>
    <?= $this->Form->create(null, ['type' => 'get']) ?>
    <?= $this->Form->control('key', ['label' => 'Pencarian User', 'value' => $this->request->getQuery('key'), 'autocomplete' => 'off']) ?>
    <h5>Silahkan Masukkan Username atau Email Lengkap </h5>
    <?= $this->Form->submit('Cari') ?>
    <?= $this->Form->end() ?>
     </div>   
   <div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>
        <li><?= $this->Html->link(__('Tambahkan Admin'), ['action' => 'add'], ['class' => 'btn btn-warning']) ?></li>
        <li><?= $this->Html->link(__('Daftar Groups'), ['controller'=>'groups','action' => 'index'], ['class' => 'btn btn-primary']) ?></li>
        <li><?= $this->Html->link(__('Daftar Modul'), ['controller'=>'modules','action' => 'index'], ['class' => 'btn btn-danger']) ?></li>

    </ul>
</div> 
    <h3><?= __('Users') ?></h3>



   
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('username') ?></th>
                    <th><?= $this->Paginator->sort('email') ?></th>
                    <th><?= $this->Paginator->sort('verified') ?></th>
                    <th><?= $this->Paginator->sort('pomparan') ?></th>
                     <th><?= $this->Paginator->sort('current_role') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                    
                </tr>
            </thead>
            <tbody>
                <?php foreach ($users as $user): ?>
                <tr>
                    <td><?= $this->Number->format($user->id) ?></td>
                    <td><?= h($user->username) ?></td>
                    <td><?= h($user->email) ?></td>
                    <td><?php  

                        if ($user->verified)
                       echo("<font color=#33ff00><b>Ve</b></font>");
                    else 
                       echo("<font color=#ff0000><b>NV</b></font>");
                       echo "-";
                       if ($user->activated)
                       echo("<font color=#33ff00><b>Ac</b></font>");
                    else 
                       echo("<font color=#ff0000><b>NA</b></font>");
                       

                    
                    ?>
                    </td>
                    <td><?= h($user->pomparan) ?></td>
                    <td><?= h($user->current_role) ?></td>
                    
                    <td class="actions">
                   
                        <?= $this->Html->link(__('View'), ['action' => 'view', $user->id],['class'=>'btn btn-primary']) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $user->id],['class'=>'btn btn-primary']) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $user->id],['class'=>'btn btn-primary','confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?>

                        <?php if ($user->activated) : ?>
                            <?= $this->Form->postLink(__('Deactivated'), ['action' => 'userStatus',$user->id,$user->activated],['confirm' =>__('Apakah Anda yakin untuk mendeaktivasi # {0}?', $user->id), 'class' => 'btn btn-danger']) ?>
                        <?php else : ?>
                            <?= $this->Form->postLink(__('Aktivasi'), ['action' => 'userAktif',$user->id,$user->activated],['confirm' =>__('Apakah Anda yakin untuk aktivasi # {0}?', $user->id), 'class' => 'btn btn-success']) ?>
                        <?php endif; ?>
                    </td>
                   

                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>

</div>
