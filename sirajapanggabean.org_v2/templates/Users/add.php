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

    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Users'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-100">
        <div class="users form content">
            <?= $this->Form->create($user) ?>
            <fieldset>
                <legend><?= __('Add User') ?></legend>
                <?php
                    echo $this->Form->control('username');
                    echo $this->Form->control('email');
                    echo $this->Form->control('password'); 
                    echo $this->Form->control('password_confirm', array('label' => 'Password Confirm', 'type' => 'password'));
                   /* echo $this->Form->control('current_role');*/
                    echo $this->Form->control('groups._ids', ['options' => $groups=[
                        1=>'Administrator',
                    ]]);
                    echo $this->Form->control('nama_diri');
                    echo $this->Form->control('sundut');
                    echo $this->Form->control('nama_bapak');
                    echo $this->Form->control('nama_ompung');
                    echo $this->Form->control('pomparan',array('default'=>'Model.pomparan', 'options'=>array(''=>'','Panggabean Lumban Ratus'=>'Panggabean Lumban Ratus','Panggabean Simorangkir'=>'Panggabean Simorangkir','Panggabean Lumban Siagian'=>'Panggabean Lumban Siagian')));
                   
                    echo $this->Form->control('verified');
                    echo $this->Form->control('activated');
                  
                  
                  
                  
                  
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
