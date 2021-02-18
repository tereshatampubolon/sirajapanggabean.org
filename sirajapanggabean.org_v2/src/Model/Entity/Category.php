<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Category Entity
 *
 * @property int $id
 * @property int|null $parent_id
 * @property int|null $lft
 * @property int|null $rght
 * @property int|null $order
 * @property string|null $name
 * @property string|null $type
 * @property string|null $controller
 * @property string|null $function
 * @property string|null $params
 * @property \Cake\I18n\FrozenTime $created
 * @property string $user_created
 * @property string $ip_created
 * @property \Cake\I18n\FrozenTime $modified
 * @property string $user_modified
 * @property string $ip_modified
 *
 * @property \App\Model\Entity\ParentCategory $parent_category
 * @property \App\Model\Entity\ChildCategory[] $child_categories
 * @property \App\Model\Entity\Post[] $posts
 */
class Category extends Entity
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
        'order' => true,
        'name' => true,
        'type' => true,
        'controller' => true,
        'function' => true,
        'params' => true,
        'created' => true,
        'user_created' => true,
        'ip_created' => true,
        'modified' => true,
        'user_modified' => true,
        'ip_modified' => true,
        'parent_category' => true,
        'child_categories' => true,
        'posts' => true,
    ];
}
