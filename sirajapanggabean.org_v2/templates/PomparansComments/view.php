<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\PomparansComment $pomparansComment
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Pomparans Comment'), ['action' => 'edit', $pomparansComment->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Pomparans Comment'), ['action' => 'delete', $pomparansComment->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pomparansComment->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Pomparans Comments'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Pomparans Comment'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="pomparansComments view content">
            <h3><?= h($pomparansComment->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Pomparan') ?></th>
                    <td><?= $pomparansComment->has('pomparan') ? $this->Html->link($pomparansComment->pomparan->name, ['controller' => 'Pomparans', 'action' => 'view', $pomparansComment->pomparan->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('User Created') ?></th>
                    <td><?= h($pomparansComment->user_created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Ip Created') ?></th>
                    <td><?= h($pomparansComment->ip_created) ?></td>
                </tr>
                <tr>
                    <th><?= __('User Modified') ?></th>
                    <td><?= h($pomparansComment->user_modified) ?></td>
                </tr>
                <tr>
                    <th><?= __('Ip Modified') ?></th>
                    <td><?= h($pomparansComment->ip_modified) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($pomparansComment->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Status') ?></th>
                    <td><?= $this->Number->format($pomparansComment->status) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($pomparansComment->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($pomparansComment->modified) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Comment') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($pomparansComment->comment)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Re Comment') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($pomparansComment->re_comment)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>
