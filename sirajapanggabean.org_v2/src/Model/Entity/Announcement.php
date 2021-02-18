<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Announcement Entity
 *
 * @property int $id
 * @property int $syllabus_id
 * @property \Cake\I18n\FrozenTime $start_date_published
 * @property \Cake\I18n\FrozenTime $end_date_published
 * @property string $title
 * @property string $pre_body
 * @property string|null $body
 * @property \Cake\I18n\FrozenTime|null $created
 * @property string|null $user_created
 * @property string|null $ip_created
 * @property \Cake\I18n\FrozenTime|null $modified
 * @property string|null $user_modified
 * @property string|null $ip_modified
 *
 * @property \App\Model\Entity\Syllabus $syllabus
 */
class Announcement extends Entity
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
        'syllabus_id' => true,
        'start_date_published' => true,
        'end_date_published' => true,
        'title' => true,
        'pre_body' => true,
        'body' => true,
        'created' => true,
        'user_created' => true,
        'ip_created' => true,
        'modified' => true,
        'user_modified' => true,
        'ip_modified' => true,
        'syllabus' => true,
    ];
}
