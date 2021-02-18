<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Pomparan Entity
 *
 * @property int $id
 * @property int|null $parent_id
 * @property int|null $lft
 * @property int|null $rght
 * @property string $name
 * @property int|null $user_id
 * @property int $birth_order
 * @property int $generation_level
 * @property string|null $spouse_name
 * @property string $gender
 * @property \Cake\I18n\FrozenDate|null $birth_date
 * @property bool $death
 * @property \Cake\I18n\FrozenDate|null $death_date
 * @property string|null $address
 * @property string|null $city
 * @property string|null $phone
 * @property string|null $email
 * @property string|null $job_title
 * @property int $children_number
 * @property string $gedcom_id
 * @property string $gedcom_fams
 * @property string $gedcom_famc
 * @property string $gedcom_data
 * @property bool|null $approved
 * @property \Cake\I18n\FrozenTime|null $created
 * @property string|null $user_created
 * @property string|null $ip_created
 * @property \Cake\I18n\FrozenTime|null $modified
 * @property string|null $user_modified
 * @property string|null $ip_modified
 *
 * @property \App\Model\Entity\Pomparan $parent_pomparan
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Gedcom $gedcom
 * @property \App\Model\Entity\Page[] $pages
 * @property \App\Model\Entity\Pomparan[] $child_pomparans
 * @property \App\Model\Entity\PomparansComment[] $pomparans_comments
 */
class Pomparan extends Entity
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
        'parent_id' => true,
        'lft' => true,
        'rght' => true,
        'name' => true,
        'user_id' => true,
        'birth_order' => true,
        'generation_level' => true,
        'spouse_name' => true,
        'gender' => true,
        'birth_date' => true,
        'death' => true,
        'death_date' => true,
        'address' => true,
        'city' => true,
        'phone' => true,
        'email' => true,
        'job_title' => true,
        'children_number' => true,
        'gedcom_id' => true,
        'gedcom_fams' => true,
        'gedcom_famc' => true,
        'gedcom_data' => true,
        'approved' => true,
        'created' => true,
        'user_created' => true,
        'ip_created' => true,
        'modified' => true,
        'user_modified' => true,
        'ip_modified' => true,
        'parent_pomparan' => true,
        'user' => true,
        'gedcom' => true,
        'pages' => true,
        'child_pomparans' => true,
        'pomparans_comments' => true,
    ];
}
