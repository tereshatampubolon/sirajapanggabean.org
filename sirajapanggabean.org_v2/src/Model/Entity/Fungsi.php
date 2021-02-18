<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Fungsi Entity
 *
 * @property int $id
 * @property int $module_id
 * @property int $group_id
 * @property string $fungsi
 * @property bool $blocked
 * @property \Cake\I18n\FrozenTime|null $created
 * @property string|null $user_created
 * @property string|null $ip_created
 * @property \Cake\I18n\FrozenTime|null $modified
 * @property string|null $user_modified
 * @property string|null $ip_modified
 *
 * @property \App\Model\Entity\Module[] $modules
 * @property \App\Model\Entity\Group $group
 */
class Fungsi extends Entity
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
        'module_id' => true,
        'group_id' => true,
        'fungsi' => true,
        'blocked' => true,
        'created' => true,
        'user_created' => true,
        'ip_created' => true,
        'modified' => true,
        'user_modified' => true,
        'ip_modified' => true,
        'modules' => true,
        'group' => true,
    ];
}
