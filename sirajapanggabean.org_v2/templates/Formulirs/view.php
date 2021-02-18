<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Formulir $formulir
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Formulir'), ['action' => 'edit', $formulir->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Formulir'), ['action' => 'delete', $formulir->id], ['confirm' => __('Are you sure you want to delete # {0}?', $formulir->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Formulirs'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Formulir'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="formulirs view content">
            <h3><?= h($formulir->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Pomparan') ?></th>
                    <td><?= h($formulir->pomparan) ?></td>
                </tr>
                <tr>
                    <th><?= __('Nama Ompung') ?></th>
                    <td><?= h($formulir->nama_ompung) ?></td>
                </tr>
                <tr>
                    <th><?= __('Marga Istri Ompung') ?></th>
                    <td><?= h($formulir->marga_istri_ompung) ?></td>
                </tr>
                <tr>
                    <th><?= __('Nama Bapak') ?></th>
                    <td><?= h($formulir->nama_bapak) ?></td>
                </tr>
                <tr>
                    <th><?= __('Marga Istri Bapak') ?></th>
                    <td><?= h($formulir->marga_istri_bapak) ?></td>
                </tr>
                <tr>
                    <th><?= __('Nama Diri') ?></th>
                    <td><?= h($formulir->nama_diri) ?></td>
                </tr>
                <tr>
                    <th><?= __('Marga Pasangan') ?></th>
                    <td><?= h($formulir->marga_pasangan) ?></td>
                </tr>
                <tr>
                    <th><?= __('Nomor Hp') ?></th>
                    <td><?= h($formulir->nomor_hp) ?></td>
                </tr>
                <tr>
                    <th><?= __('Pekerjaan') ?></th>
                    <td><?= h($formulir->pekerjaan) ?></td>
                </tr>
                <tr>
                    <th><?= __('Anak 01') ?></th>
                    <td><?= h($formulir->anak_01) ?></td>
                </tr>
                <tr>
                    <th><?= __('Jk Anak 01') ?></th>
                    <td><?= h($formulir->jk_anak_01) ?></td>
                </tr>
                <tr>
                    <th><?= __('Marga Pasangan Anak 01') ?></th>
                    <td><?= h($formulir->marga_pasangan_anak_01) ?></td>
                </tr>
                <tr>
                    <th><?= __('Anak 02') ?></th>
                    <td><?= h($formulir->anak_02) ?></td>
                </tr>
                <tr>
                    <th><?= __('Jk Anak 02') ?></th>
                    <td><?= h($formulir->jk_anak_02) ?></td>
                </tr>
                <tr>
                    <th><?= __('Marga Pasangan Anak 02') ?></th>
                    <td><?= h($formulir->marga_pasangan_anak_02) ?></td>
                </tr>
                <tr>
                    <th><?= __('Anak 03') ?></th>
                    <td><?= h($formulir->anak_03) ?></td>
                </tr>
                <tr>
                    <th><?= __('Jk Anak 03') ?></th>
                    <td><?= h($formulir->jk_anak_03) ?></td>
                </tr>
                <tr>
                    <th><?= __('Marga Pasangan Anak 03') ?></th>
                    <td><?= h($formulir->marga_pasangan_anak_03) ?></td>
                </tr>
                <tr>
                    <th><?= __('Anak 04') ?></th>
                    <td><?= h($formulir->anak_04) ?></td>
                </tr>
                <tr>
                    <th><?= __('Jk Anak 04') ?></th>
                    <td><?= h($formulir->jk_anak_04) ?></td>
                </tr>
                <tr>
                    <th><?= __('Marga Pasangan Anak 04') ?></th>
                    <td><?= h($formulir->marga_pasangan_anak_04) ?></td>
                </tr>
                <tr>
                    <th><?= __('Anak 05') ?></th>
                    <td><?= h($formulir->anak_05) ?></td>
                </tr>
                <tr>
                    <th><?= __('Jk Anak 05') ?></th>
                    <td><?= h($formulir->jk_anak_05) ?></td>
                </tr>
                <tr>
                    <th><?= __('Marga Pasangan Anak 05') ?></th>
                    <td><?= h($formulir->marga_pasangan_anak_05) ?></td>
                </tr>
                <tr>
                    <th><?= __('Anak 06') ?></th>
                    <td><?= h($formulir->anak_06) ?></td>
                </tr>
                <tr>
                    <th><?= __('Jk Anak 06') ?></th>
                    <td><?= h($formulir->jk_anak_06) ?></td>
                </tr>
                <tr>
                    <th><?= __('Marga Pasangan Anak 06') ?></th>
                    <td><?= h($formulir->marga_pasangan_anak_06) ?></td>
                </tr>
                <tr>
                    <th><?= __('Anak 07') ?></th>
                    <td><?= h($formulir->anak_07) ?></td>
                </tr>
                <tr>
                    <th><?= __('Jk Anak 07') ?></th>
                    <td><?= h($formulir->jk_anak_07) ?></td>
                </tr>
                <tr>
                    <th><?= __('Marga Pasangan Anak 07') ?></th>
                    <td><?= h($formulir->marga_pasangan_anak_07) ?></td>
                </tr>
                <tr>
                    <th><?= __('Anak 08') ?></th>
                    <td><?= h($formulir->anak_08) ?></td>
                </tr>
                <tr>
                    <th><?= __('Jk Anak 08') ?></th>
                    <td><?= h($formulir->jk_anak_08) ?></td>
                </tr>
                <tr>
                    <th><?= __('Marga Pasangan Anak 08') ?></th>
                    <td><?= h($formulir->marga_pasangan_anak_08) ?></td>
                </tr>
                <tr>
                    <th><?= __('Anak 09') ?></th>
                    <td><?= h($formulir->anak_09) ?></td>
                </tr>
                <tr>
                    <th><?= __('Jk Anak 09') ?></th>
                    <td><?= h($formulir->jk_anak_09) ?></td>
                </tr>
                <tr>
                    <th><?= __('Marga Pasangan Anak 09') ?></th>
                    <td><?= h($formulir->marga_pasangan_anak_09) ?></td>
                </tr>
                <tr>
                    <th><?= __('Anak 10') ?></th>
                    <td><?= h($formulir->anak_10) ?></td>
                </tr>
                <tr>
                    <th><?= __('Jk Anak 10') ?></th>
                    <td><?= h($formulir->jk_anak_10) ?></td>
                </tr>
                <tr>
                    <th><?= __('Marga Pasangan Anak 10') ?></th>
                    <td><?= h($formulir->marga_pasangan_anak_10) ?></td>
                </tr>
                <tr>
                    <th><?= __('Anak 11') ?></th>
                    <td><?= h($formulir->anak_11) ?></td>
                </tr>
                <tr>
                    <th><?= __('Jk Anak 11') ?></th>
                    <td><?= h($formulir->jk_anak_11) ?></td>
                </tr>
                <tr>
                    <th><?= __('Marga Pasangan Anak 11') ?></th>
                    <td><?= h($formulir->marga_pasangan_anak_11) ?></td>
                </tr>
                <tr>
                    <th><?= __('Anak 12') ?></th>
                    <td><?= h($formulir->anak_12) ?></td>
                </tr>
                <tr>
                    <th><?= __('Jk Anak 12') ?></th>
                    <td><?= h($formulir->jk_anak_12) ?></td>
                </tr>
                <tr>
                    <th><?= __('Marga Pasangan Anak 12') ?></th>
                    <td><?= h($formulir->marga_pasangan_anak_12) ?></td>
                </tr>
                <tr>
                    <th><?= __('Anak 13') ?></th>
                    <td><?= h($formulir->anak_13) ?></td>
                </tr>
                <tr>
                    <th><?= __('Jk Anak 13') ?></th>
                    <td><?= h($formulir->jk_anak_13) ?></td>
                </tr>
                <tr>
                    <th><?= __('Marga Pasangan Anak 13') ?></th>
                    <td><?= h($formulir->marga_pasangan_anak_13) ?></td>
                </tr>
                <tr>
                    <th><?= __('Anak 14') ?></th>
                    <td><?= h($formulir->anak_14) ?></td>
                </tr>
                <tr>
                    <th><?= __('Jk Anak 14') ?></th>
                    <td><?= h($formulir->jk_anak_14) ?></td>
                </tr>
                <tr>
                    <th><?= __('Marga Pasangan Anak 14') ?></th>
                    <td><?= h($formulir->marga_pasangan_anak_14) ?></td>
                </tr>
                <tr>
                    <th><?= __('Anak 15') ?></th>
                    <td><?= h($formulir->anak_15) ?></td>
                </tr>
                <tr>
                    <th><?= __('Jk Anak 15') ?></th>
                    <td><?= h($formulir->jk_anak_15) ?></td>
                </tr>
                <tr>
                    <th><?= __('Marga Pasangan Anak 15') ?></th>
                    <td><?= h($formulir->marga_pasangan_anak_15) ?></td>
                </tr>
                <tr>
                    <th><?= __('Saudara 01') ?></th>
                    <td><?= h($formulir->saudara_01) ?></td>
                </tr>
                <tr>
                    <th><?= __('Jk Saudara 01') ?></th>
                    <td><?= h($formulir->jk_saudara_01) ?></td>
                </tr>
                <tr>
                    <th><?= __('Marga Pasangan Saudara 01') ?></th>
                    <td><?= h($formulir->marga_pasangan_saudara_01) ?></td>
                </tr>
                <tr>
                    <th><?= __('Saudara 02') ?></th>
                    <td><?= h($formulir->saudara_02) ?></td>
                </tr>
                <tr>
                    <th><?= __('Jk Saudara 02') ?></th>
                    <td><?= h($formulir->jk_saudara_02) ?></td>
                </tr>
                <tr>
                    <th><?= __('Marga Pasangan Saudara 02') ?></th>
                    <td><?= h($formulir->marga_pasangan_saudara_02) ?></td>
                </tr>
                <tr>
                    <th><?= __('Saudara 03') ?></th>
                    <td><?= h($formulir->saudara_03) ?></td>
                </tr>
                <tr>
                    <th><?= __('Jk Saudara 03') ?></th>
                    <td><?= h($formulir->jk_saudara_03) ?></td>
                </tr>
                <tr>
                    <th><?= __('Marga Pasangan Saudara 03') ?></th>
                    <td><?= h($formulir->marga_pasangan_saudara_03) ?></td>
                </tr>
                <tr>
                    <th><?= __('Saudara 04') ?></th>
                    <td><?= h($formulir->saudara_04) ?></td>
                </tr>
                <tr>
                    <th><?= __('Jk Saudara 04') ?></th>
                    <td><?= h($formulir->jk_saudara_04) ?></td>
                </tr>
                <tr>
                    <th><?= __('Marga Pasangan Saudara 04') ?></th>
                    <td><?= h($formulir->marga_pasangan_saudara_04) ?></td>
                </tr>
                <tr>
                    <th><?= __('Saudara 05') ?></th>
                    <td><?= h($formulir->saudara_05) ?></td>
                </tr>
                <tr>
                    <th><?= __('Jk Saudara 05') ?></th>
                    <td><?= h($formulir->jk_saudara_05) ?></td>
                </tr>
                <tr>
                    <th><?= __('Marga Pasangan Saudara 05') ?></th>
                    <td><?= h($formulir->marga_pasangan_saudara_05) ?></td>
                </tr>
                <tr>
                    <th><?= __('Saudara 06') ?></th>
                    <td><?= h($formulir->saudara_06) ?></td>
                </tr>
                <tr>
                    <th><?= __('Jk Saudara 06') ?></th>
                    <td><?= h($formulir->jk_saudara_06) ?></td>
                </tr>
                <tr>
                    <th><?= __('Marga Pasangan Saudara 06') ?></th>
                    <td><?= h($formulir->marga_pasangan_saudara_06) ?></td>
                </tr>
                <tr>
                    <th><?= __('Saudara 07') ?></th>
                    <td><?= h($formulir->saudara_07) ?></td>
                </tr>
                <tr>
                    <th><?= __('Jk Saudara 07') ?></th>
                    <td><?= h($formulir->jk_saudara_07) ?></td>
                </tr>
                <tr>
                    <th><?= __('Marga Pasangan Saudara 07') ?></th>
                    <td><?= h($formulir->marga_pasangan_saudara_07) ?></td>
                </tr>
                <tr>
                    <th><?= __('Saudara 08') ?></th>
                    <td><?= h($formulir->saudara_08) ?></td>
                </tr>
                <tr>
                    <th><?= __('Jk Saudara 08') ?></th>
                    <td><?= h($formulir->jk_saudara_08) ?></td>
                </tr>
                <tr>
                    <th><?= __('Marga Pasangan Saudara 08') ?></th>
                    <td><?= h($formulir->marga_pasangan_saudara_08) ?></td>
                </tr>
                <tr>
                    <th><?= __('Saudara 09') ?></th>
                    <td><?= h($formulir->saudara_09) ?></td>
                </tr>
                <tr>
                    <th><?= __('Jk Saudara 09') ?></th>
                    <td><?= h($formulir->jk_saudara_09) ?></td>
                </tr>
                <tr>
                    <th><?= __('Marga Pasangan Saudara 09') ?></th>
                    <td><?= h($formulir->marga_pasangan_saudara_09) ?></td>
                </tr>
                <tr>
                    <th><?= __('Saudara 10') ?></th>
                    <td><?= h($formulir->saudara_10) ?></td>
                </tr>
                <tr>
                    <th><?= __('Jk Saudara 10') ?></th>
                    <td><?= h($formulir->jk_saudara_10) ?></td>
                </tr>
                <tr>
                    <th><?= __('Marga Pasangan Saudara 10') ?></th>
                    <td><?= h($formulir->marga_pasangan_saudara_10) ?></td>
                </tr>
                <tr>
                    <th><?= __('Saudara 11') ?></th>
                    <td><?= h($formulir->saudara_11) ?></td>
                </tr>
                <tr>
                    <th><?= __('Jk Saudara 11') ?></th>
                    <td><?= h($formulir->jk_saudara_11) ?></td>
                </tr>
                <tr>
                    <th><?= __('Marga Pasangan Saudara 11') ?></th>
                    <td><?= h($formulir->marga_pasangan_saudara_11) ?></td>
                </tr>
                <tr>
                    <th><?= __('Saudara 12') ?></th>
                    <td><?= h($formulir->saudara_12) ?></td>
                </tr>
                <tr>
                    <th><?= __('Jk Saudara 12') ?></th>
                    <td><?= h($formulir->jk_saudara_12) ?></td>
                </tr>
                <tr>
                    <th><?= __('Marga Pasangan Saudara 12') ?></th>
                    <td><?= h($formulir->marga_pasangan_saudara_12) ?></td>
                </tr>
                <tr>
                    <th><?= __('Saudara 13') ?></th>
                    <td><?= h($formulir->saudara_13) ?></td>
                </tr>
                <tr>
                    <th><?= __('Jk Saudara 13') ?></th>
                    <td><?= h($formulir->jk_saudara_13) ?></td>
                </tr>
                <tr>
                    <th><?= __('Marga Pasangan Saudara 13') ?></th>
                    <td><?= h($formulir->marga_pasangan_saudara_13) ?></td>
                </tr>
                <tr>
                    <th><?= __('Saudara 14') ?></th>
                    <td><?= h($formulir->saudara_14) ?></td>
                </tr>
                <tr>
                    <th><?= __('Jk Saudara 14') ?></th>
                    <td><?= h($formulir->jk_saudara_14) ?></td>
                </tr>
                <tr>
                    <th><?= __('Marga Pasangan Saudara 14') ?></th>
                    <td><?= h($formulir->marga_pasangan_saudara_14) ?></td>
                </tr>
                <tr>
                    <th><?= __('Saudara 15') ?></th>
                    <td><?= h($formulir->saudara_15) ?></td>
                </tr>
                <tr>
                    <th><?= __('Jk Saudara 15') ?></th>
                    <td><?= h($formulir->jk_saudara_15) ?></td>
                </tr>
                <tr>
                    <th><?= __('Marga Pasangan Saudara 15') ?></th>
                    <td><?= h($formulir->marga_pasangan_saudara_15) ?></td>
                </tr>
                <tr>
                    <th><?= __('Sektor') ?></th>
                    <td><?= h($formulir->sektor) ?></td>
                </tr>
                <tr>
                    <th><?= __('Kab Kota') ?></th>
                    <td><?= h($formulir->kab_kota) ?></td>
                </tr>
                <tr>
                    <th><?= __('User Created') ?></th>
                    <td><?= h($formulir->user_created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Ip Created') ?></th>
                    <td><?= h($formulir->ip_created) ?></td>
                </tr>
                <tr>
                    <th><?= __('User Modified') ?></th>
                    <td><?= h($formulir->user_modified) ?></td>
                </tr>
                <tr>
                    <th><?= __('Ip Modified') ?></th>
                    <td><?= h($formulir->ip_modified) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($formulir->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Sundut') ?></th>
                    <td><?= $this->Number->format($formulir->sundut) ?></td>
                </tr>
                <tr>
                    <th><?= __('Status') ?></th>
                    <td><?= $this->Number->format($formulir->status) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($formulir->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($formulir->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
