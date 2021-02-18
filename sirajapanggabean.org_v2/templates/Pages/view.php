<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Page $page
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Page'), ['action' => 'edit', $page->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Page'), ['action' => 'delete', $page->id], ['confirm' => __('Are you sure you want to delete # {0}?', $page->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Pages'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Page'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-100">
        <div class="pages view content">
            <h3><?= h($page->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Pomparan') ?></th>
                    <td><?= $page->has('pomparan') ? $this->Html->link($page->pomparan->name, ['controller' => 'Pomparans', 'action' => 'view', $page->pomparan->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('User Created') ?></th>
                    <td><?= h($page->user_created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Ip Created') ?></th>
                    <td><?= h($page->ip_created) ?></td>
                </tr>
                <tr>
                    <th><?= __('User Modified') ?></th>
                    <td><?= h($page->user_modified) ?></td>
                </tr>
                <tr>
                    <th><?= __('Ip Modified') ?></th>
                    <td><?= h($page->ip_modified) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($page->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Num Level') ?></th>
                    <td><?= $this->Number->format($page->num_level) ?></td>
                </tr>
                <tr>
                    <th><?= __('Chapter') ?></th>
                    <td><?= $this->Number->format($page->chapter) ?></td>
                </tr>
                <tr>
                    <th><?= __('Page') ?></th>
                    <td><?= $this->Number->format($page->page) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($page->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($page->modified) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Skip') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($page->skip)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>
