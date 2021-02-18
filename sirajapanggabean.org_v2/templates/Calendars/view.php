<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Calendar $calendar
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Calendar'), ['action' => 'edit', $calendar->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Calendar'), ['action' => 'delete', $calendar->id], ['confirm' => __('Are you sure you want to delete # {0}?', $calendar->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Calendars'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Calendar'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="calendars view content">
            <h3><?= h($calendar->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($calendar->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Category') ?></th>
                    <td><?= h($calendar->category) ?></td>
                </tr>
                <tr>
                    <th><?= __('Calendar System') ?></th>
                    <td><?= h($calendar->calendar_system) ?></td>
                </tr>
                <tr>
                    <th><?= __('User Created') ?></th>
                    <td><?= h($calendar->user_created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Ip Created') ?></th>
                    <td><?= h($calendar->ip_created) ?></td>
                </tr>
                <tr>
                    <th><?= __('User Modified') ?></th>
                    <td><?= h($calendar->user_modified) ?></td>
                </tr>
                <tr>
                    <th><?= __('Ip Modified') ?></th>
                    <td><?= h($calendar->ip_modified) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($calendar->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Start Date') ?></th>
                    <td><?= h($calendar->start_date) ?></td>
                </tr>
                <tr>
                    <th><?= __('End Date') ?></th>
                    <td><?= h($calendar->end_date) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($calendar->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($calendar->modified) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Description') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($calendar->description)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>
