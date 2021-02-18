<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Calendar Entity
 *
 * @property int $id
 * @property string $name
 * @property string $category
 * @property \Cake\I18n\FrozenTime $start_date
 * @property \Cake\I18n\FrozenTime|null $end_date
 * @property string $description
 * @property string $calendar_system
 * @property \Cake\I18n\FrozenTime $created
 * @property string $user_created
 * @property string $ip_created
 * @property \Cake\I18n\FrozenTime $modified
 * @property string $user_modified
 * @property string $ip_modified
 */
class Calendar extends Entity
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
        'name' => true,
        'category' => true,
        'start_date' => true,
        'end_date' => true,
        'description' => true,
        'calendar_system' => true,
        'created' => true,
        'user_created' => true,
        'ip_created' => true,
        'modified' => true,
        'user_modified' => true,
        'ip_modified' => true,
    ];
}
