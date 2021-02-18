<?php
use App\Controller\AdminDashboardController;
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 * @var \App\View\AppView $this
 */

$cakeDescription = 'Si Raja Panggabean ';
?>

<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>


    <?= $this->Html->meta('icon') ?>

    <link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.1/normalize.css">

    <?= $this->Html->css('milligram.min.css') ?>
    <?= $this->Html->css('cake.css') ?>
     <?= $this->Html->css('styles.css') ?>
     <?= $this->Html->css('bootstrap.min.css') ?>
      <?= $this->Html->script('bootstrap.js') ?>
       <?= $this->Html->script('jquery-3.1.1.min.js') ?>


    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>


    <div class="col-md-12" style="background-color: #B0E569">
               
    </div>
    </div>
    
</head>
    <body style="background-color: #e5e5e5">
         <div class="container-fluid">
        

          <!-- Bagian Header -->
            <div class="row">
                <div class="col-md-12 header" id="site-header">
                    <header class="header">     

                            <div class="top-nav-title">
                               <center><a style="color: maroon"><?php echo "</span>Tarombo Pomparan </span>". $cakeDescription; ?></a></center>
                            <div class="logo">
                            <?= $this->Html->image('logo.jpg') ?>               
                            </div>
                            <div class="content-fluid" style=" background-color: silver;margin-bottom: -5px;margin-top: -10px">
                                <center><b>Versi 2</b></center>  
                            </div>
                    </header>
                <div>
            </div>

              
                <nav class="menus">
                    <ul>
                          
                      <li>
                       <?php if($current == 1):{
                        }
                      ?>
                       <li><?= $this->Html->link("Home",['controller'=>'Pages','action'=>'guest'],['class' => 'btn btn-success']) ?></li>
                        <li><?= $this->Html->link("Administrator Dashboard",['controller'=>'AdminDashboard','action'=>'index'],['class' => 'btn btn-success']) ?></li>
                     <?php endif; ?>

                     <?php if($current == 2):{
                        }
                      ?>
                        <li>
                        <?= $this->Html->link("Home",['controller'=>'Pages','action'=>'guest'],['class' => 'btn btn-success']) ?></li>

                        <li> <?= $this->Html->link("PomparanDashboaard",['controller'=>'PomparansDashboard','action'=>'index'],['class' => 'btn btn-success']) ?> </li>

                     <?php endif; ?>

                       
                      <?php if($current == 0):{
                      }?>
                      
                      <?php endif; ?> 
                      </li>


                          
                        <li><?= $this->Html->link("Siraja Panggabean",['controller'=>'Pages','action'=>'guest'],['class' => 'btn btn-success']) ?> </a></li>
                        <li><?= $this->Html->link("Monumen",['controller'=>'Posts','action'=>'detail/8'],['class' => 'btn btn-success']) ?></li>
                        <li> 
                        
                        <?= $this->Html->link("Tarombo",['controller'=>'Pomparans','action'=>'index'],['class' => 'btn btn-success']) ?>
                         
                        </li>
                        
                        
                        <li><?= $this->Html->link("Agenda",['controller'=>'Posts','action'=>'detail/5'],['class' => 'btn btn-success']) ?></li>
                        <li><?= $this->Html->link("Hata Manomu Hula-Hula Pasaribu",['controller'=>'Posts','action'=>'detail/13'],['class' => 'btn btn-success']) ?></li>
                        <li><?= $this->Html->link("Hata Huhuasi",['controller'=>'Posts','action'=>'detail/14'],['class' => 'btn btn-success']) ?></li>
                        <li><?= $this->Html->link("Hata Sambutan",['controller'=>'Posts','action'=>'detail/15'],['class' => 'btn btn-success']) ?></li>
                        <li><?= $this->Html->link("Berita",['controller'=>'Posts','action'=>'detail/9'],['class' => 'btn btn-success']) ?></li>
                        <li><?= $this->Html->link("Tokoh Panggabean",['controller'=>'Posts','action'=>'detail/5'],['class' => 'btn btn-success']) ?></li>


                        
                       
                     
                    </ul>

                    
                </nav>

              </div>
            </div>
          <!-- End Bagian Header -->
          

<!-- Batas -->
	

      

          <!-- Bagian Wrapper atas --> 
          <div class="row">
           
                <div class="col-md-3 sidebar" id="site-sidebar">
                  <aside class="widgets">
                    <?php if(isset($username)):{
                    	
                    	//Jika Current Role = 1 menampilkan Admin
                    	if ($current == 1) {
                    		
                    		echo "<H4><b>Hi : ";
                        	echo $username."  , Peran : ".'Administrator'." </b></h4>";                    	
                        }
               					else{
               						echo "<H4><b>Hi : ";
                                  	echo $username."  , Peran : ".'Pomparan'."</b></h4>";  	                
                            	}
                        	}
                    	?>
                        <b>
                        <?= $this->Html->link("Logout",['controller'=>'Users','action'=>'logout'],['class' => 'btn btn-primary']) ?> ||
                        <?= $this->Html->link("Ganti Password",['controller'=>'Users','action'=>'relogin'],['class' => 'btn btn-primary']) ?>
                        </b>
                    <?php else: ?>
                        <h5>Welcome : Guest</h5>
                        <?= $this->Html->link("Login",['controller'=>'Users','action'=>'login'],['class' => 'btn btn-primary']) ?> || 
                        <?= $this->Html->link("Registrasi",['controller'=>'Users','action'=>'registrasi'],['class' => 'btn btn-primary']) ?>
                    <?php endif; ?>
                  </aside>
                     <aside class="widgets">
                        <h2 class="widget-title">Statistik Tarombo</h2>
                        <h4>
                        <ul>
                            <li>Total Jumlah Pomparan  &nbsp&nbsp: <font color="blue"> <?php echo $pomparansCount['count'];?></font>
                              <span class="float-right">100%</span>
                             <div class="progress mb-4">
                                <div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                </div></li> 
                           

                            <li>Lumban Ratus  
                               <span class="float-right">35%</span>
                              <div class="progress mb-4">
                                <div class="progress-bar bg-danger" role="progressbar" style="width: 35%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                </div></li>
                             

                            <li>Lumban Siagian
                              <span class="float-right">25%</span>
                            <div class="progress mb-4">
                              <div class="progress-bar bg-warning" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </li>
                                   

                             <li>Simorangkir
                              <span class="float-right">40%</span>
                               <div class="progress mb-4">
                                <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                               </div>
                             </li>
                             
                            <li>Jumlah Data Masuk Hari Ini
                            <div class="progress mb-4">
                                <div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                               </div></li>
                           
                            <li>Jumlah Formulir Masuk
                            <div class="progress mb-4">
                                <div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                               </div></li>
                             
                          </h4>
                        </ul>
                    </aside>

                    <!-- Bagian Wrapper bawah--> 
                    <aside class="widgets">
                        <h3 class="widget-title">Photo</h3>
                        <div>
                            <ul>
                            <li><?= $this->Html->image('imgSlider/slide_1.jpg', array('height' => '150', 'width' => '300'))?></li>
                            <li><?= $this->Html->image('imgSlider/slide_2.jpg', array('height' => '150', 'width' => '300'))?></li>
                            <li><?= $this->Html->image('imgSlider/slide_3.jpg', array('height' => '150', 'width' => '300'))?></li>
                            </ul>
                        </div>
                       
                
                    </aside>
                </div>


<!-- Batas -->

                <!-- Bagian Wrapper Content-->   
                <div class="col-md-9 articles" id="site-content">
                  <article class="posts">
                      <h2 class="title-post"></h2>
                      <div class="meta-post">
                          <span><em class="glyphicon glyphicon-user"></em></span>
                          <span><em class="glyphicon glyphicon-time"></em></span>
                      </div>
                      <div class="content-fluid">
                        <?= $this->Flash->render() ?>
                        <?= $this->fetch('content') ?>   
                      </div>
                  </article>
                </div>
              
          </div>
          <!-- End Bagian wrapper -->
    
          

<!-- Batas -->

          <!-- Bagian footer -->
          <div class="row">
              <div class="col-md-12 footer" id="site-footer">
                  <div class="copyright">
                    <center><footer class="copyright">@Copyright 2020 , D3TI18-12 </footer></center>
                  </div>
              </div>
          </div>
          <!-- End Bagian footer -->

    </div>
  </body>
    </body>
</html>