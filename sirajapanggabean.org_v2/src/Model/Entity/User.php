<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\Auth\DefaultPasswordHasher;
use Cake\ORM\Entity;

/**
 * User Entity
 *
 * @property int $id
 * @property string $username
 * @property string $email
 * @property string $password
 * @property int $current_role
 * @property string $nama_diri
 * @property int $sundut
 * @property string $nama_bapak
 * @property string $nama_ompung
 * @property string $pomparan
 * @property string $verification_code
 * @property bool $verified
 * @property bool $activated
 * @property \Cake\I18n\FrozenTime $lastlogin
 * @property \Cake\I18n\FrozenTime|null $created
 * @property string|null $user_created
 * @property string|null $ip_created
 * @property \Cake\I18n\FrozenTime|null $modified
 * @property string|null $user_modified
 * @property string|null $ip_modified
 *
 * @property \App\Model\Entity\Pomparan[] $pomparans
 * @property \App\Model\Entity\PomparansOld[] $pomparans_old
 * @property \App\Model\Entity\Group[] $groups
 */
class User extends Entity
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
        'email' => true,
        'password' => true,
        'current_role' => true,
        'nama_diri' => true,
        'sundut' => true,
        'nama_bapak' => true,
        'nama_ompung' => true,
        'pomparan' => true,
        'verification_code' => true,
        'verified' => true,
        'activated' => true,
        'lastlogin' => true,
        'created' => true,
        'user_created' => true,
        'ip_created' => true,
        'modified' => true,
        'user_modified' => true,
        'ip_modified' => true,
        'pomparans' => true,
        'pomparans_old' => true,
        'groups' => true,
    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array
     */
    protected $_hidden = [
        'password',
    ];

    protected function _setPassword($password)
    {
        if (strlen($password) > 0) {
          return (new DefaultPasswordHasher)->hash($password);
        }
    }
}
