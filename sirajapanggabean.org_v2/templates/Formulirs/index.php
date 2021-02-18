<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Formulir[]|\Cake\Collection\CollectionInterface $formulirs
 */
?>
<div class="formulirs index content">
    <?= $this->Html->link(__('New Formulir'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Formulirs') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('pomparan') ?></th>
                    <th><?= $this->Paginator->sort('sundut') ?></th>
                    <th><?= $this->Paginator->sort('nama_ompung') ?></th>
                    <th><?= $this->Paginator->sort('marga_istri_ompung') ?></th>
                    <th><?= $this->Paginator->sort('nama_bapak') ?></th>
                    <th><?= $this->Paginator->sort('marga_istri_bapak') ?></th>
                    <th><?= $this->Paginator->sort('nama_diri') ?></th>
                    <th><?= $this->Paginator->sort('marga_pasangan') ?></th>
                    <th><?= $this->Paginator->sort('nomor_hp') ?></th>
                    <th><?= $this->Paginator->sort('pekerjaan') ?></th>
                    <th><?= $this->Paginator->sort('anak_01') ?></th>
                    <th><?= $this->Paginator->sort('jk_anak_01') ?></th>
                    <th><?= $this->Paginator->sort('marga_pasangan_anak_01') ?></th>
                    <th><?= $this->Paginator->sort('anak_02') ?></th>
                    <th><?= $this->Paginator->sort('jk_anak_02') ?></th>
                    <th><?= $this->Paginator->sort('marga_pasangan_anak_02') ?></th>
                    <th><?= $this->Paginator->sort('anak_03') ?></th>
                    <th><?= $this->Paginator->sort('jk_anak_03') ?></th>
                    <th><?= $this->Paginator->sort('marga_pasangan_anak_03') ?></th>
                    <th><?= $this->Paginator->sort('anak_04') ?></th>
                    <th><?= $this->Paginator->sort('jk_anak_04') ?></th>
                    <th><?= $this->Paginator->sort('marga_pasangan_anak_04') ?></th>
                    <th><?= $this->Paginator->sort('anak_05') ?></th>
                    <th><?= $this->Paginator->sort('jk_anak_05') ?></th>
                    <th><?= $this->Paginator->sort('marga_pasangan_anak_05') ?></th>
                    <th><?= $this->Paginator->sort('anak_06') ?></th>
                    <th><?= $this->Paginator->sort('jk_anak_06') ?></th>
                    <th><?= $this->Paginator->sort('marga_pasangan_anak_06') ?></th>
                    <th><?= $this->Paginator->sort('anak_07') ?></th>
                    <th><?= $this->Paginator->sort('jk_anak_07') ?></th>
                    <th><?= $this->Paginator->sort('marga_pasangan_anak_07') ?></th>
                    <th><?= $this->Paginator->sort('anak_08') ?></th>
                    <th><?= $this->Paginator->sort('jk_anak_08') ?></th>
                    <th><?= $this->Paginator->sort('marga_pasangan_anak_08') ?></th>
                    <th><?= $this->Paginator->sort('anak_09') ?></th>
                    <th><?= $this->Paginator->sort('jk_anak_09') ?></th>
                    <th><?= $this->Paginator->sort('marga_pasangan_anak_09') ?></th>
                    <th><?= $this->Paginator->sort('anak_10') ?></th>
                    <th><?= $this->Paginator->sort('jk_anak_10') ?></th>
                    <th><?= $this->Paginator->sort('marga_pasangan_anak_10') ?></th>
                    <th><?= $this->Paginator->sort('anak_11') ?></th>
                    <th><?= $this->Paginator->sort('jk_anak_11') ?></th>
                    <th><?= $this->Paginator->sort('marga_pasangan_anak_11') ?></th>
                    <th><?= $this->Paginator->sort('anak_12') ?></th>
                    <th><?= $this->Paginator->sort('jk_anak_12') ?></th>
                    <th><?= $this->Paginator->sort('marga_pasangan_anak_12') ?></th>
                    <th><?= $this->Paginator->sort('anak_13') ?></th>
                    <th><?= $this->Paginator->sort('jk_anak_13') ?></th>
                    <th><?= $this->Paginator->sort('marga_pasangan_anak_13') ?></th>
                    <th><?= $this->Paginator->sort('anak_14') ?></th>
                    <th><?= $this->Paginator->sort('jk_anak_14') ?></th>
                    <th><?= $this->Paginator->sort('marga_pasangan_anak_14') ?></th>
                    <th><?= $this->Paginator->sort('anak_15') ?></th>
                    <th><?= $this->Paginator->sort('jk_anak_15') ?></th>
                    <th><?= $this->Paginator->sort('marga_pasangan_anak_15') ?></th>
                    <th><?= $this->Paginator->sort('saudara_01') ?></th>
                    <th><?= $this->Paginator->sort('jk_saudara_01') ?></th>
                    <th><?= $this->Paginator->sort('marga_pasangan_saudara_01') ?></th>
                    <th><?= $this->Paginator->sort('saudara_02') ?></th>
                    <th><?= $this->Paginator->sort('jk_saudara_02') ?></th>
                    <th><?= $this->Paginator->sort('marga_pasangan_saudara_02') ?></th>
                    <th><?= $this->Paginator->sort('saudara_03') ?></th>
                    <th><?= $this->Paginator->sort('jk_saudara_03') ?></th>
                    <th><?= $this->Paginator->sort('marga_pasangan_saudara_03') ?></th>
                    <th><?= $this->Paginator->sort('saudara_04') ?></th>
                    <th><?= $this->Paginator->sort('jk_saudara_04') ?></th>
                    <th><?= $this->Paginator->sort('marga_pasangan_saudara_04') ?></th>
                    <th><?= $this->Paginator->sort('saudara_05') ?></th>
                    <th><?= $this->Paginator->sort('jk_saudara_05') ?></th>
                    <th><?= $this->Paginator->sort('marga_pasangan_saudara_05') ?></th>
                    <th><?= $this->Paginator->sort('saudara_06') ?></th>
                    <th><?= $this->Paginator->sort('jk_saudara_06') ?></th>
                    <th><?= $this->Paginator->sort('marga_pasangan_saudara_06') ?></th>
                    <th><?= $this->Paginator->sort('saudara_07') ?></th>
                    <th><?= $this->Paginator->sort('jk_saudara_07') ?></th>
                    <th><?= $this->Paginator->sort('marga_pasangan_saudara_07') ?></th>
                    <th><?= $this->Paginator->sort('saudara_08') ?></th>
                    <th><?= $this->Paginator->sort('jk_saudara_08') ?></th>
                    <th><?= $this->Paginator->sort('marga_pasangan_saudara_08') ?></th>
                    <th><?= $this->Paginator->sort('saudara_09') ?></th>
                    <th><?= $this->Paginator->sort('jk_saudara_09') ?></th>
                    <th><?= $this->Paginator->sort('marga_pasangan_saudara_09') ?></th>
                    <th><?= $this->Paginator->sort('saudara_10') ?></th>
                    <th><?= $this->Paginator->sort('jk_saudara_10') ?></th>
                    <th><?= $this->Paginator->sort('marga_pasangan_saudara_10') ?></th>
                    <th><?= $this->Paginator->sort('saudara_11') ?></th>
                    <th><?= $this->Paginator->sort('jk_saudara_11') ?></th>
                    <th><?= $this->Paginator->sort('marga_pasangan_saudara_11') ?></th>
                    <th><?= $this->Paginator->sort('saudara_12') ?></th>
                    <th><?= $this->Paginator->sort('jk_saudara_12') ?></th>
                    <th><?= $this->Paginator->sort('marga_pasangan_saudara_12') ?></th>
                    <th><?= $this->Paginator->sort('saudara_13') ?></th>
                    <th><?= $this->Paginator->sort('jk_saudara_13') ?></th>
                    <th><?= $this->Paginator->sort('marga_pasangan_saudara_13') ?></th>
                    <th><?= $this->Paginator->sort('saudara_14') ?></th>
                    <th><?= $this->Paginator->sort('jk_saudara_14') ?></th>
                    <th><?= $this->Paginator->sort('marga_pasangan_saudara_14') ?></th>
                    <th><?= $this->Paginator->sort('saudara_15') ?></th>
                    <th><?= $this->Paginator->sort('jk_saudara_15') ?></th>
                    <th><?= $this->Paginator->sort('marga_pasangan_saudara_15') ?></th>
                    <th><?= $this->Paginator->sort('sektor') ?></th>
                    <th><?= $this->Paginator->sort('kab_kota') ?></th>
                    <th><?= $this->Paginator->sort('status') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('user_created') ?></th>
                    <th><?= $this->Paginator->sort('ip_created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th><?= $this->Paginator->sort('user_modified') ?></th>
                    <th><?= $this->Paginator->sort('ip_modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($formulirs as $formulir): ?>
                <tr>
                    <td><?= $this->Number->format($formulir->id) ?></td>
                    <td><?= h($formulir->pomparan) ?></td>
                    <td><?= $this->Number->format($formulir->sundut) ?></td>
                    <td><?= h($formulir->nama_ompung) ?></td>
                    <td><?= h($formulir->marga_istri_ompung) ?></td>
                    <td><?= h($formulir->nama_bapak) ?></td>
                    <td><?= h($formulir->marga_istri_bapak) ?></td>
                    <td><?= h($formulir->nama_diri) ?></td>
                    <td><?= h($formulir->marga_pasangan) ?></td>
                    <td><?= h($formulir->nomor_hp) ?></td>
                    <td><?= h($formulir->pekerjaan) ?></td>
                    <td><?= h($formulir->anak_01) ?></td>
                    <td><?= h($formulir->jk_anak_01) ?></td>
                    <td><?= h($formulir->marga_pasangan_anak_01) ?></td>
                    <td><?= h($formulir->anak_02) ?></td>
                    <td><?= h($formulir->jk_anak_02) ?></td>
                    <td><?= h($formulir->marga_pasangan_anak_02) ?></td>
                    <td><?= h($formulir->anak_03) ?></td>
                    <td><?= h($formulir->jk_anak_03) ?></td>
                    <td><?= h($formulir->marga_pasangan_anak_03) ?></td>
                    <td><?= h($formulir->anak_04) ?></td>
                    <td><?= h($formulir->jk_anak_04) ?></td>
                    <td><?= h($formulir->marga_pasangan_anak_04) ?></td>
                    <td><?= h($formulir->anak_05) ?></td>
                    <td><?= h($formulir->jk_anak_05) ?></td>
                    <td><?= h($formulir->marga_pasangan_anak_05) ?></td>
                    <td><?= h($formulir->anak_06) ?></td>
                    <td><?= h($formulir->jk_anak_06) ?></td>
                    <td><?= h($formulir->marga_pasangan_anak_06) ?></td>
                    <td><?= h($formulir->anak_07) ?></td>
                    <td><?= h($formulir->jk_anak_07) ?></td>
                    <td><?= h($formulir->marga_pasangan_anak_07) ?></td>
                    <td><?= h($formulir->anak_08) ?></td>
                    <td><?= h($formulir->jk_anak_08) ?></td>
                    <td><?= h($formulir->marga_pasangan_anak_08) ?></td>
                    <td><?= h($formulir->anak_09) ?></td>
                    <td><?= h($formulir->jk_anak_09) ?></td>
                    <td><?= h($formulir->marga_pasangan_anak_09) ?></td>
                    <td><?= h($formulir->anak_10) ?></td>
                    <td><?= h($formulir->jk_anak_10) ?></td>
                    <td><?= h($formulir->marga_pasangan_anak_10) ?></td>
                    <td><?= h($formulir->anak_11) ?></td>
                    <td><?= h($formulir->jk_anak_11) ?></td>
                    <td><?= h($formulir->marga_pasangan_anak_11) ?></td>
                    <td><?= h($formulir->anak_12) ?></td>
                    <td><?= h($formulir->jk_anak_12) ?></td>
                    <td><?= h($formulir->marga_pasangan_anak_12) ?></td>
                    <td><?= h($formulir->anak_13) ?></td>
                    <td><?= h($formulir->jk_anak_13) ?></td>
                    <td><?= h($formulir->marga_pasangan_anak_13) ?></td>
                    <td><?= h($formulir->anak_14) ?></td>
                    <td><?= h($formulir->jk_anak_14) ?></td>
                    <td><?= h($formulir->marga_pasangan_anak_14) ?></td>
                    <td><?= h($formulir->anak_15) ?></td>
                    <td><?= h($formulir->jk_anak_15) ?></td>
                    <td><?= h($formulir->marga_pasangan_anak_15) ?></td>
                    <td><?= h($formulir->saudara_01) ?></td>
                    <td><?= h($formulir->jk_saudara_01) ?></td>
                    <td><?= h($formulir->marga_pasangan_saudara_01) ?></td>
                    <td><?= h($formulir->saudara_02) ?></td>
                    <td><?= h($formulir->jk_saudara_02) ?></td>
                    <td><?= h($formulir->marga_pasangan_saudara_02) ?></td>
                    <td><?= h($formulir->saudara_03) ?></td>
                    <td><?= h($formulir->jk_saudara_03) ?></td>
                    <td><?= h($formulir->marga_pasangan_saudara_03) ?></td>
                    <td><?= h($formulir->saudara_04) ?></td>
                    <td><?= h($formulir->jk_saudara_04) ?></td>
                    <td><?= h($formulir->marga_pasangan_saudara_04) ?></td>
                    <td><?= h($formulir->saudara_05) ?></td>
                    <td><?= h($formulir->jk_saudara_05) ?></td>
                    <td><?= h($formulir->marga_pasangan_saudara_05) ?></td>
                    <td><?= h($formulir->saudara_06) ?></td>
                    <td><?= h($formulir->jk_saudara_06) ?></td>
                    <td><?= h($formulir->marga_pasangan_saudara_06) ?></td>
                    <td><?= h($formulir->saudara_07) ?></td>
                    <td><?= h($formulir->jk_saudara_07) ?></td>
                    <td><?= h($formulir->marga_pasangan_saudara_07) ?></td>
                    <td><?= h($formulir->saudara_08) ?></td>
                    <td><?= h($formulir->jk_saudara_08) ?></td>
                    <td><?= h($formulir->marga_pasangan_saudara_08) ?></td>
                    <td><?= h($formulir->saudara_09) ?></td>
                    <td><?= h($formulir->jk_saudara_09) ?></td>
                    <td><?= h($formulir->marga_pasangan_saudara_09) ?></td>
                    <td><?= h($formulir->saudara_10) ?></td>
                    <td><?= h($formulir->jk_saudara_10) ?></td>
                    <td><?= h($formulir->marga_pasangan_saudara_10) ?></td>
                    <td><?= h($formulir->saudara_11) ?></td>
                    <td><?= h($formulir->jk_saudara_11) ?></td>
                    <td><?= h($formulir->marga_pasangan_saudara_11) ?></td>
                    <td><?= h($formulir->saudara_12) ?></td>
                    <td><?= h($formulir->jk_saudara_12) ?></td>
                    <td><?= h($formulir->marga_pasangan_saudara_12) ?></td>
                    <td><?= h($formulir->saudara_13) ?></td>
                    <td><?= h($formulir->jk_saudara_13) ?></td>
                    <td><?= h($formulir->marga_pasangan_saudara_13) ?></td>
                    <td><?= h($formulir->saudara_14) ?></td>
                    <td><?= h($formulir->jk_saudara_14) ?></td>
                    <td><?= h($formulir->marga_pasangan_saudara_14) ?></td>
                    <td><?= h($formulir->saudara_15) ?></td>
                    <td><?= h($formulir->jk_saudara_15) ?></td>
                    <td><?= h($formulir->marga_pasangan_saudara_15) ?></td>
                    <td><?= h($formulir->sektor) ?></td>
                    <td><?= h($formulir->kab_kota) ?></td>
                    <td><?= $this->Number->format($formulir->status) ?></td>
                    <td><?= h($formulir->created) ?></td>
                    <td><?= h($formulir->user_created) ?></td>
                    <td><?= h($formulir->ip_created) ?></td>
                    <td><?= h($formulir->modified) ?></td>
                    <td><?= h($formulir->user_modified) ?></td>
                    <td><?= h($formulir->ip_modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $formulir->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $formulir->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $formulir->id], ['confirm' => __('Are you sure you want to delete # {0}?', $formulir->id)]) ?>
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
