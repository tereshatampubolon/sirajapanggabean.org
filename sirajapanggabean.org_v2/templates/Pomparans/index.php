<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Pomparan[]|\Cake\Collection\CollectionInterface $pomparans
 */
?>
<div class="pomparans index content">
    <h3><?= __('Pomparans') ?></h3><br>
    <div class="float-right">
    <h4>Jumlah Pomparan Seluruhnya :  <?php echo $pomparansCount['count'];?></h4>
    <?= $this->Form->create(null, ['type' => 'get']) ?>
    <?= $this->Form->control('key', ['label' => 'Pencarian Pomparan', 'value' => $this->request->getQuery('key'), 'autocomplete' => 'off']) ?>
    <h5>Silahkan Masukkan Nama Pomparan </h5>
    <?= $this->Form->submit('Cari') ?>
    <?= $this->Form->end() ?>
     </div>   
    <?= $this->Html->link(__('Tambahkan Pomparan'), ['action' => 'add'], ['class' => 'button btn-success ']) ?>
    
    <div class="table-responsive">
        <br>
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('Bapak') ?></th>
                    <th><?= $this->Paginator->sort('Nama') ?></th>
                    <th><?= $this->Paginator->sort('birth_order') ?></th>
                    <th><?= $this->Paginator->sort('generation_level') ?></th>
                    <th><?= $this->Paginator->sort('Istri') ?></th>
                    <th><?= $this->Paginator->sort('gender') ?></th>
                    <th><?= $this->Paginator->sort('birth_date') ?></th>
                    <th><?= $this->Paginator->sort('death') ?></th>
                    <th><?= $this->Paginator->sort('death_date') ?></th>
                    <th><?= $this->Paginator->sort('address') ?></th>
                    <th><?= $this->Paginator->sort('city') ?></th>
                    <th><?= $this->Paginator->sort('phone') ?></th>
                    <th><?= $this->Paginator->sort('email') ?></th>
                    <th><?= $this->Paginator->sort('job_title') ?></th>
                    <th><?= $this->Paginator->sort('children_number') ?></th>
                    <th><?= $this->Paginator->sort('approved') ?></th>
                    <th><?= $this->Paginator->sort('Actions Verified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($pomparans as $pomparan): ?>
                <tr>
                    <td><?= $this->Number->format($pomparan->id) ?></td>
                    <td><?= $pomparan->has('parent_pomparan') ? $this->Html->link($pomparan->parent_pomparan->name, ['controller' => 'Pomparans', 'action' => 'view', $pomparan->parent_pomparan->id]) : '' ?></td>
                    <td><?= h($pomparan->name) ?></td>
                    
                    <td><?= $this->Number->format($pomparan->birth_order) ?></td>
                    <td><?= $this->Number->format($pomparan->generation_level) ?></td>
                    <td><?= h($pomparan->spouse_name) ?></td>
                    <td><?= h($pomparan->gender) ?></td>
                    <td><?= h($pomparan->birth_date) ?></td>
                    <td><?= h($pomparan->death) ?></td>
                    <td><?= h($pomparan->death_date) ?></td>
                    <td><?= h($pomparan->address) ?></td>
                    <td><?= h($pomparan->city) ?></td>
                    <td><?= h($pomparan->phone) ?></td>
                    <td><?= h($pomparan->email) ?></td>
                    <td><?= h($pomparan->job_title) ?></td>
                    <td><?= $this->Number->format($pomparan->children_number) ?></td>
                    
                    <td>
                    <?php  

                        if (h($pomparan->approved))
                       echo("<font color=#33ff00><b>Ve</b></font>");
                    else 
                       echo("<font color=#ff0000><b>NV</b></font>");
                    ?>
                    </td>

                    <td>
                    <?php if (h($pomparan->approved)) : ?>
                            <?= $this->Form->postLink(__('Un-Aproved'), ['action' => 'pomparanStatus',$pomparan->id,$pomparan->approved],['confirm' =>__('Apakah Anda yakin untuk Un-Aproved Pomparan # {0}?', $pomparan->id), 'class' => 'btn btn-danger']) ?>
                        <?php else : ?>
                            <?= $this->Form->postLink(__('Approved'), ['action' => 'pomparanAktif',$pomparan->id,$pomparan->approved],['confirm' =>__('Apakah Anda yakin untuk Aproved Pomparan # {0}?', $pomparan->id), 'class' => 'btn btn-success']) ?>
                        <?php endif; ?>
                
                    </td>
                   
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $pomparan->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $pomparan->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $pomparan->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pomparan->id)]) ?>
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
