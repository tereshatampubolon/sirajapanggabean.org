<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Formulir Entity
 *
 * @property int $id
 * @property string $pomparan
 * @property int $sundut
 * @property string $nama_ompung
 * @property string $marga_istri_ompung
 * @property string $nama_bapak
 * @property string $marga_istri_bapak
 * @property string $nama_diri
 * @property string $marga_pasangan
 * @property string $nomor_hp
 * @property string $pekerjaan
 * @property string|null $anak_01
 * @property string|null $jk_anak_01
 * @property string|null $marga_pasangan_anak_01
 * @property string|null $anak_02
 * @property string|null $jk_anak_02
 * @property string|null $marga_pasangan_anak_02
 * @property string|null $anak_03
 * @property string|null $jk_anak_03
 * @property string|null $marga_pasangan_anak_03
 * @property string|null $anak_04
 * @property string|null $jk_anak_04
 * @property string|null $marga_pasangan_anak_04
 * @property string|null $anak_05
 * @property string|null $jk_anak_05
 * @property string|null $marga_pasangan_anak_05
 * @property string|null $anak_06
 * @property string|null $jk_anak_06
 * @property string|null $marga_pasangan_anak_06
 * @property string|null $anak_07
 * @property string|null $jk_anak_07
 * @property string|null $marga_pasangan_anak_07
 * @property string|null $anak_08
 * @property string|null $jk_anak_08
 * @property string|null $marga_pasangan_anak_08
 * @property string|null $anak_09
 * @property string|null $jk_anak_09
 * @property string|null $marga_pasangan_anak_09
 * @property string|null $anak_10
 * @property string|null $jk_anak_10
 * @property string|null $marga_pasangan_anak_10
 * @property string|null $anak_11
 * @property string|null $jk_anak_11
 * @property string|null $marga_pasangan_anak_11
 * @property string|null $anak_12
 * @property string|null $jk_anak_12
 * @property string|null $marga_pasangan_anak_12
 * @property string|null $anak_13
 * @property string|null $jk_anak_13
 * @property string|null $marga_pasangan_anak_13
 * @property string|null $anak_14
 * @property string|null $jk_anak_14
 * @property string|null $marga_pasangan_anak_14
 * @property string|null $anak_15
 * @property string|null $jk_anak_15
 * @property string|null $marga_pasangan_anak_15
 * @property string|null $saudara_01
 * @property string|null $jk_saudara_01
 * @property string|null $marga_pasangan_saudara_01
 * @property string|null $saudara_02
 * @property string|null $jk_saudara_02
 * @property string|null $marga_pasangan_saudara_02
 * @property string|null $saudara_03
 * @property string|null $jk_saudara_03
 * @property string|null $marga_pasangan_saudara_03
 * @property string|null $saudara_04
 * @property string|null $jk_saudara_04
 * @property string|null $marga_pasangan_saudara_04
 * @property string|null $saudara_05
 * @property string|null $jk_saudara_05
 * @property string|null $marga_pasangan_saudara_05
 * @property string|null $saudara_06
 * @property string|null $jk_saudara_06
 * @property string|null $marga_pasangan_saudara_06
 * @property string|null $saudara_07
 * @property string|null $jk_saudara_07
 * @property string|null $marga_pasangan_saudara_07
 * @property string|null $saudara_08
 * @property string|null $jk_saudara_08
 * @property string|null $marga_pasangan_saudara_08
 * @property string|null $saudara_09
 * @property string|null $jk_saudara_09
 * @property string|null $marga_pasangan_saudara_09
 * @property string|null $saudara_10
 * @property string|null $jk_saudara_10
 * @property string|null $marga_pasangan_saudara_10
 * @property string|null $saudara_11
 * @property string|null $jk_saudara_11
 * @property string|null $marga_pasangan_saudara_11
 * @property string|null $saudara_12
 * @property string|null $jk_saudara_12
 * @property string|null $marga_pasangan_saudara_12
 * @property string|null $saudara_13
 * @property string|null $jk_saudara_13
 * @property string|null $marga_pasangan_saudara_13
 * @property string|null $saudara_14
 * @property string|null $jk_saudara_14
 * @property string|null $marga_pasangan_saudara_14
 * @property string|null $saudara_15
 * @property string|null $jk_saudara_15
 * @property string|null $marga_pasangan_saudara_15
 * @property string $sektor
 * @property string $kab_kota
 * @property int $status
 * @property \Cake\I18n\FrozenTime|null $created
 * @property string|null $user_created
 * @property string|null $ip_created
 * @property \Cake\I18n\FrozenTime|null $modified
 * @property string|null $user_modified
 * @property string|null $ip_modified
 */
class Formulir extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'pomparan' => true,
        'sundut' => true,
        'nama_ompung' => true,
        'marga_istri_ompung' => true,
        'nama_bapak' => true,
        'marga_istri_bapak' => true,
        'nama_diri' => true,
        'marga_pasangan' => true,
        'nomor_hp' => true,
        'pekerjaan' => true,
        'anak_01' => true,
        'jk_anak_01' => true,
        'marga_pasangan_anak_01' => true,
        'anak_02' => true,
        'jk_anak_02' => true,
        'marga_pasangan_anak_02' => true,
        'anak_03' => true,
        'jk_anak_03' => true,
        'marga_pasangan_anak_03' => true,
        'anak_04' => true,
        'jk_anak_04' => true,
        'marga_pasangan_anak_04' => true,
        'anak_05' => true,
        'jk_anak_05' => true,
        'marga_pasangan_anak_05' => true,
        'anak_06' => true,
        'jk_anak_06' => true,
        'marga_pasangan_anak_06' => true,
        'anak_07' => true,
        'jk_anak_07' => true,
        'marga_pasangan_anak_07' => true,
        'anak_08' => true,
        'jk_anak_08' => true,
        'marga_pasangan_anak_08' => true,
        'anak_09' => true,
        'jk_anak_09' => true,
        'marga_pasangan_anak_09' => true,
        'anak_10' => true,
        'jk_anak_10' => true,
        'marga_pasangan_anak_10' => true,
        'anak_11' => true,
        'jk_anak_11' => true,
        'marga_pasangan_anak_11' => true,
        'anak_12' => true,
        'jk_anak_12' => true,
        'marga_pasangan_anak_12' => true,
        'anak_13' => true,
        'jk_anak_13' => true,
        'marga_pasangan_anak_13' => true,
        'anak_14' => true,
        'jk_anak_14' => true,
        'marga_pasangan_anak_14' => true,
        'anak_15' => true,
        'jk_anak_15' => true,
        'marga_pasangan_anak_15' => true,
        'saudara_01' => true,
        'jk_saudara_01' => true,
        'marga_pasangan_saudara_01' => true,
        'saudara_02' => true,
        'jk_saudara_02' => true,
        'marga_pasangan_saudara_02' => true,
        'saudara_03' => true,
        'jk_saudara_03' => true,
        'marga_pasangan_saudara_03' => true,
        'saudara_04' => true,
        'jk_saudara_04' => true,
        'marga_pasangan_saudara_04' => true,
        'saudara_05' => true,
        'jk_saudara_05' => true,
        'marga_pasangan_saudara_05' => true,
        'saudara_06' => true,
        'jk_saudara_06' => true,
        'marga_pasangan_saudara_06' => true,
        'saudara_07' => true,
        'jk_saudara_07' => true,
        'marga_pasangan_saudara_07' => true,
        'saudara_08' => true,
        'jk_saudara_08' => true,
        'marga_pasangan_saudara_08' => true,
        'saudara_09' => true,
        'jk_saudara_09' => true,
        'marga_pasangan_saudara_09' => true,
        'saudara_10' => true,
        'jk_saudara_10' => true,
        'marga_pasangan_saudara_10' => true,
        'saudara_11' => true,
        'jk_saudara_11' => true,
        'marga_pasangan_saudara_11' => true,
        'saudara_12' => true,
        'jk_saudara_12' => true,
        'marga_pasangan_saudara_12' => true,
        'saudara_13' => true,
        'jk_saudara_13' => true,
        'marga_pasangan_saudara_13' => true,
        'saudara_14' => true,
        'jk_saudara_14' => true,
        'marga_pasangan_saudara_14' => true,
        'saudara_15' => true,
        'jk_saudara_15' => true,
        'marga_pasangan_saudara_15' => true,
        'sektor' => true,
        'kab_kota' => true,
        'status' => true,
        'created' => true,
        'user_created' => true,
        'ip_created' => true,
        'modified' => true,
        'user_modified' => true,
        'ip_modified' => true,
    ];
}
