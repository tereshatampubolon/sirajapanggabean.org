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
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $formulir->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $formulir->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Formulirs'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="formulirs form content">
            <?= $this->Form->create($formulir) ?>
            <fieldset>
                <legend><?= __('Edit Formulir') ?></legend>
                <?php
                    echo $this->Form->control('pomparan');
                    echo $this->Form->control('sundut');
                    echo $this->Form->control('nama_ompung');
                    echo $this->Form->control('marga_istri_ompung');
                    echo $this->Form->control('nama_bapak');
                    echo $this->Form->control('marga_istri_bapak');
                    echo $this->Form->control('nama_diri');
                    echo $this->Form->control('marga_pasangan');
                    echo $this->Form->control('nomor_hp');
                    echo $this->Form->control('pekerjaan');
                    echo $this->Form->control('anak_01');
                    echo $this->Form->control('jk_anak_01');
                    echo $this->Form->control('marga_pasangan_anak_01');
                    echo $this->Form->control('anak_02');
                    echo $this->Form->control('jk_anak_02');
                    echo $this->Form->control('marga_pasangan_anak_02');
                    echo $this->Form->control('anak_03');
                    echo $this->Form->control('jk_anak_03');
                    echo $this->Form->control('marga_pasangan_anak_03');
                    echo $this->Form->control('anak_04');
                    echo $this->Form->control('jk_anak_04');
                    echo $this->Form->control('marga_pasangan_anak_04');
                    echo $this->Form->control('anak_05');
                    echo $this->Form->control('jk_anak_05');
                    echo $this->Form->control('marga_pasangan_anak_05');
                    echo $this->Form->control('anak_06');
                    echo $this->Form->control('jk_anak_06');
                    echo $this->Form->control('marga_pasangan_anak_06');
                    echo $this->Form->control('anak_07');
                    echo $this->Form->control('jk_anak_07');
                    echo $this->Form->control('marga_pasangan_anak_07');
                    echo $this->Form->control('anak_08');
                    echo $this->Form->control('jk_anak_08');
                    echo $this->Form->control('marga_pasangan_anak_08');
                    echo $this->Form->control('anak_09');
                    echo $this->Form->control('jk_anak_09');
                    echo $this->Form->control('marga_pasangan_anak_09');
                    echo $this->Form->control('anak_10');
                    echo $this->Form->control('jk_anak_10');
                    echo $this->Form->control('marga_pasangan_anak_10');
                    echo $this->Form->control('anak_11');
                    echo $this->Form->control('jk_anak_11');
                    echo $this->Form->control('marga_pasangan_anak_11');
                    echo $this->Form->control('anak_12');
                    echo $this->Form->control('jk_anak_12');
                    echo $this->Form->control('marga_pasangan_anak_12');
                    echo $this->Form->control('anak_13');
                    echo $this->Form->control('jk_anak_13');
                    echo $this->Form->control('marga_pasangan_anak_13');
                    echo $this->Form->control('anak_14');
                    echo $this->Form->control('jk_anak_14');
                    echo $this->Form->control('marga_pasangan_anak_14');
                    echo $this->Form->control('anak_15');
                    echo $this->Form->control('jk_anak_15');
                    echo $this->Form->control('marga_pasangan_anak_15');
                    echo $this->Form->control('saudara_01');
                    echo $this->Form->control('jk_saudara_01');
                    echo $this->Form->control('marga_pasangan_saudara_01');
                    echo $this->Form->control('saudara_02');
                    echo $this->Form->control('jk_saudara_02');
                    echo $this->Form->control('marga_pasangan_saudara_02');
                    echo $this->Form->control('saudara_03');
                    echo $this->Form->control('jk_saudara_03');
                    echo $this->Form->control('marga_pasangan_saudara_03');
                    echo $this->Form->control('saudara_04');
                    echo $this->Form->control('jk_saudara_04');
                    echo $this->Form->control('marga_pasangan_saudara_04');
                    echo $this->Form->control('saudara_05');
                    echo $this->Form->control('jk_saudara_05');
                    echo $this->Form->control('marga_pasangan_saudara_05');
                    echo $this->Form->control('saudara_06');
                    echo $this->Form->control('jk_saudara_06');
                    echo $this->Form->control('marga_pasangan_saudara_06');
                    echo $this->Form->control('saudara_07');
                    echo $this->Form->control('jk_saudara_07');
                    echo $this->Form->control('marga_pasangan_saudara_07');
                    echo $this->Form->control('saudara_08');
                    echo $this->Form->control('jk_saudara_08');
                    echo $this->Form->control('marga_pasangan_saudara_08');
                    echo $this->Form->control('saudara_09');
                    echo $this->Form->control('jk_saudara_09');
                    echo $this->Form->control('marga_pasangan_saudara_09');
                    echo $this->Form->control('saudara_10');
                    echo $this->Form->control('jk_saudara_10');
                    echo $this->Form->control('marga_pasangan_saudara_10');
                    echo $this->Form->control('saudara_11');
                    echo $this->Form->control('jk_saudara_11');
                    echo $this->Form->control('marga_pasangan_saudara_11');
                    echo $this->Form->control('saudara_12');
                    echo $this->Form->control('jk_saudara_12');
                    echo $this->Form->control('marga_pasangan_saudara_12');
                    echo $this->Form->control('saudara_13');
                    echo $this->Form->control('jk_saudara_13');
                    echo $this->Form->control('marga_pasangan_saudara_13');
                    echo $this->Form->control('saudara_14');
                    echo $this->Form->control('jk_saudara_14');
                    echo $this->Form->control('marga_pasangan_saudara_14');
                    echo $this->Form->control('saudara_15');
                    echo $this->Form->control('jk_saudara_15');
                    echo $this->Form->control('marga_pasangan_saudara_15');
                    echo $this->Form->control('sektor');
                    echo $this->Form->control('kab_kota');
                    echo $this->Form->control('status');
                    echo $this->Form->control('user_created');
                    echo $this->Form->control('ip_created');
                    echo $this->Form->control('user_modified');
                    echo $this->Form->control('ip_modified');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
