<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Announcement $announcement
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Announcement'), ['action' => 'edit', $announcement->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Announcement'), ['action' => 'delete', $announcement->id], ['confirm' => __('Are you sure you want to delete # {0}?', $announcement->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Announcements'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Announcement'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="announcements view content">
            <h3><?= h($announcement->title) ?></h3>
            <table>
                <tr>
                    <th><?= __('Title') ?></th>
                    <td><?= h($announcement->title) ?></td>
                </tr>
                <tr>
                    <th><?= __('User Created') ?></th>
                    <td><?= h($announcement->user_created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Ip Created') ?></th>
                    <td><?= h($announcement->ip_created) ?></td>
                </tr>
                <tr>
                    <th><?= __('User Modified') ?></th>
                    <td><?= h($announcement->user_modified) ?></td>
                </tr>
                <tr>
                    <th><?= __('Ip Modified') ?></th>
                    <td><?= h($announcement->ip_modified) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($announcement->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Syllabus Id') ?></th>
                    <td><?= $this->Number->format($announcement->syllabus_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Start Date Published') ?></th>
                    <td><?= h($announcement->start_date_published) ?></td>
                </tr>
                <tr>
                    <th><?= __('End Date Published') ?></th>
                    <td><?= h($announcement->end_date_published) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($announcement->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($announcement->modified) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Pre Body') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($announcement->pre_body)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Body') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($announcement->body)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>
