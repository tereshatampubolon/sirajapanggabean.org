<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Appscode Entity
 *
 * @property int $id
 * @property int $code
 * @property string $parameter_name
 * @property string $param
 * @property string $value
 * @property \Cake\I18n\FrozenTime $created
 * @property string $user_created
 * @property string $ip_created
 * @property \Cake\I18n\FrozenTime $modified
 * @property string $user_modified
 * @property string $ip_modified
 */
class Appscode extends Entity
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
        'code' => true,
        'parameter_name' => true,
        'param' => true,
        'value' => true,
        'created' => true,
        'user_created' => true,
        'ip_created' => true,
        'modified' => true,
        'user_modified' => true,
        'ip_modified' => true,
    ];
}
