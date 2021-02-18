<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Category $category
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Category'), ['action' => 'edit', $category->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Category'), ['action' => 'delete', $category->id], ['confirm' => __('Are you sure you want to delete # {0}?', $category->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Categories'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Category'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="categories view content">
            <h3><?= h($category->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Parent Category') ?></th>
                    <td><?= $category->has('parent_category') ? $this->Html->link($category->parent_category->name, ['controller' => 'Categories', 'action' => 'view', $category->parent_category->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($category->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Type') ?></th>
                    <td><?= h($category->type) ?></td>
                </tr>
                <tr>
                    <th><?= __('Controller') ?></th>
                    <td><?= h($category->controller) ?></td>
                </tr>
                <tr>
                    <th><?= __('Function') ?></th>
                    <td><?= h($category->function) ?></td>
                </tr>
                <tr>
                    <th><?= __('Params') ?></th>
                    <td><?= h($category->params) ?></td>
                </tr>
                <tr>
                    <th><?= __('User Created') ?></th>
                    <td><?= h($category->user_created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Ip Created') ?></th>
                    <td><?= h($category->ip_created) ?></td>
                </tr>
                <tr>
                    <th><?= __('User Modified') ?></th>
                    <td><?= h($category->user_modified) ?></td>
                </tr>
                <tr>
                    <th><?= __('Ip Modified') ?></th>
                    <td><?= h($category->ip_modified) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($category->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Lft') ?></th>
                    <td><?= $this->Number->format($category->lft) ?></td>
                </tr>
                <tr>
                    <th><?= __('Rght') ?></th>
                    <td><?= $this->Number->format($category->rght) ?></td>
                </tr>
                <tr>
                    <th><?= __('Order') ?></th>
                    <td><?= $this->Number->format($category->order) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($category->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($category->modified) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Categories') ?></h4>
                <?php if (!empty($category->child_categories)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Parent Id') ?></th>
                            <th><?= __('Lft') ?></th>
                            <th><?= __('Rght') ?></th>
                            <th><?= __('Order') ?></th>
                            <th><?= __('Name') ?></th>
                            <th><?= __('Type') ?></th>
                            <th><?= __('Controller') ?></th>
                            <th><?= __('Function') ?></th>
                            <th><?= __('Params') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('User Created') ?></th>
                            <th><?= __('Ip Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th><?= __('User Modified') ?></th>
                            <th><?= __('Ip Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($category->child_categories as $childCategories) : ?>
                        <tr>
                            <td><?= h($childCategories->id) ?></td>
                            <td><?= h($childCategories->parent_id) ?></td>
                            <td><?= h($childCategories->lft) ?></td>
                            <td><?= h($childCategories->rght) ?></td>
                            <td><?= h($childCategories->order) ?></td>
                            <td><?= h($childCategories->name) ?></td>
                            <td><?= h($childCategories->type) ?></td>
                            <td><?= h($childCategories->controller) ?></td>
                            <td><?= h($childCategories->function) ?></td>
                            <td><?= h($childCategories->params) ?></td>
                            <td><?= h($childCategories->created) ?></td>
                            <td><?= h($childCategories->user_created) ?></td>
                            <td><?= h($childCategories->ip_created) ?></td>
                            <td><?= h($childCategories->modified) ?></td>
                            <td><?= h($childCategories->user_modified) ?></td>
                            <td><?= h($childCategories->ip_modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Categories', 'action' => 'view', $childCategories->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Categories', 'action' => 'edit', $childCategories->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Categories', 'action' => 'delete', $childCategories->id], ['confirm' => __('Are you sure you want to delete # {0}?', $childCategories->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Posts') ?></h4>
                <?php if (!empty($category->posts)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Category Id') ?></th>
                            <th><?= __('Title') ?></th>
                            <th><?= __('Pre Body') ?></th>
                            <th><?= __('Body') ?></th>
                            <th><?= __('Source') ?></th>
                            <th><?= __('Url') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('User Created') ?></th>
                            <th><?= __('Ip Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th><?= __('User Modified') ?></th>
                            <th><?= __('Ip Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($category->posts as $posts) : ?>
                        <tr>
                            <td><?= h($posts->id) ?></td>
                            <td><?= h($posts->category_id) ?></td>
                            <td><?= h($posts->title) ?></td>
                            <td><?= h($posts->pre_body) ?></td>
                            <td><?= h($posts->body) ?></td>
                            <td><?= h($posts->source) ?></td>
                            <td><?= h($posts->url) ?></td>
                            <td><?= h($posts->created) ?></td>
                            <td><?= h($posts->user_created) ?></td>
                            <td><?= h($posts->ip_created) ?></td>
                            <td><?= h($posts->modified) ?></td>
                            <td><?= h($posts->user_modified) ?></td>
                            <td><?= h($posts->ip_modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Posts', 'action' => 'view', $posts->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Posts', 'action' => 'edit', $posts->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Posts', 'action' => 'delete', $posts->id], ['confirm' => __('Are you sure you want to delete # {0}?', $posts->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
