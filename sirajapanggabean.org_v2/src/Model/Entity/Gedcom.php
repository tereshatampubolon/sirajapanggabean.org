<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Gedcom Entity
 *
 * @property int $id
 * @property string $i_id
 * @property int $i_file
 * @property string $i_rin
 * @property string $i_sex
 * @property string $i_gedcom
 *
 * @property \App\Model\Entity\I $i
 * @property \App\Model\Entity\Pomparan[] $pomparans
 * @property \App\Model\Entity\PomparansOld[] $pomparans_old
 * @property \App\Model\Entity\Tmp2pomparan[] $tmp2pomparans
 * @property \App\Model\Entity\Tmppomparan[] $tmppomparans
 */
class Gedcom extends Entity
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
        'i_id' => true,
        'i_file' => true,
        'i_rin' => true,
        'i_sex' => true,
        'i_gedcom' => true,
        'i' => true,
        'pomparans' => true,
        'pomparans_old' => true,
        'tmp2pomparans' => true,
        'tmppomparans' => true,
    ];
}
