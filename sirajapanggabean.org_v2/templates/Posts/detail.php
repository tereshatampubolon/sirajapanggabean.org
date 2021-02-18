<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Post $post
 */
?>
  
   

 <div class="text">
                
                <blockquote>
                    <h3><?= $this->Text->autoParagraph(h($post->pre_body)); ?></h3>
                     <td><?= h($post->created) ?></td>
                </blockquote>
            </div>
            <div class="text">
                
                <blockquote>
                    <h5><?= $this->Text->autoParagraph(h($post->body)); ?></h5>
                </blockquote>
            </div>


   