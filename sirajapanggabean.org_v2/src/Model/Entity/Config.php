<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Config Entity
 *
 * @property int $id
 * @property string $web_name
 * @property string $admin_email
 * @property string $file_location
 * @property string $photo_location
 * @property \Cake\I18n\FrozenTime $created
 * @property string $user_created
 * @property string $ip_created
 * @property \Cake\I18n\FrozenTime $modified
 * @property string $user_modified
 * @property string $ip_modified
 */
class Config extends Entity
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
        'web_name' => true,
        'admin_email' => true,
        'file_location' => true,
        'photo_location' => true,
        'created' => true,
        'user_created' => true,
        'ip_created' => true,
        'modified' => true,
        'user_modified' => true,
        'ip_modified' => true,
    ];
}
