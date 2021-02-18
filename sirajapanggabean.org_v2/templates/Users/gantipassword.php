<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<style type="text/css">
.error-message {
background-color:#f0f0f0ff;
color:red;
}
</style>
<div class="row">
   
    
    <div class="column-responsive column-50">

        <div class="users form content">

            <?= $this->Form->create($user) ?>
            <fieldset>
                <legend><?= __('Ganti Password') ?></legend>
                <?php
                      echo $this->Html->link('password',array('label' => 'Password Baru','value'=>''));
                      echo $this->Html->link('password_confirm', array('label' => 'Konfirmasi Password', 'type' => 'password'));
                ?>
            </fieldset>
            <br>
            <?= $this->Form->button('Change' ,['class' => 'button btn-success']) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
