<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * UserLog Entity
 *
 * @property int $id
 * @property string $username
 * @property string|null $session_id
 * @property \Cake\I18n\FrozenTime $login_date
 * @property \Cake\I18n\FrozenTime|null $last_access
 * @property \Cake\I18n\FrozenTime|null $logout_date
 * @property \Cake\I18n\FrozenTime|null $created
 * @property string|null $user_created
 * @property string|null $ip_created
 * @property \Cake\I18n\FrozenTime|null $modified
 * @property string|null $user_modified
 * @property string|null $ip_modified
 *
 * @property \App\Model\Entity\Session $session
 */
class UserLog extends Entity
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
        'username' => true,
        'session_id' => true,
        'login_date' => true,
        'last_access' => true,
        'logout_date' => true,
        'created' => true,
        'user_created' => true,
        'ip_created' => true,
        'modified' => true,
        'user_modified' => true,
        'ip_modified' => true,
        'session' => true,
    ];
}
