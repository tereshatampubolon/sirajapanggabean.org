<?php
declare(strict_types=1);

/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link      https://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   https://opensource.org/licenses/mit-license.php MIT License
 */
namespace App\Controller;

use Cake\Controller\Controller;
use Cake\Datasource\ConnectionManager;


/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @link https://book.cakephp.org/4/en/controllers.html#the-app-controller
 */
class AppController extends Controller
{
    /**
     * Initialization hook method.
     *
     * Use this method to add common initialization code like loading components.
     *
     * e.g. `$this->loadComponent('FormProtection');`
     *
     * @return void
     */
    public function initialize(): void
    {
        parent::initialize();



        $this->loadComponent('RequestHandler');
        $this->loadComponent('Flash');
        $this->loadComponent('Auth');
        /*$this->Auth->allow(['registrasi','display','versi','guest']);*/
        if($this->Auth->user('current_role') == 1){
        $this->Auth->allow(['index','add','view','delete','login','logout']);
        }
        else if($this->Auth->user('current_role') == 2){
         $this->Auth->allow(['index','add','view','delete','login','logout']);
             
        }
        else{
        $this->Auth->allow(['guest','display','versi','registrasi','login','forgotpassword','resetpassword']);
        $this->Auth->allow(['detail']);
         /*$this->redirect($this->Auth->redirectUrl('/posts'));*/
        
        }
       
        $this->set('username',$this->Auth->user('username'));
        $this->set('current',$this->Auth->user('current_role'));
        $this->set('idku',$this->Auth->user('id'));







        


        /*Fungsi Jumlah*/
        


 
        $connection = ConnectionManager::get('default');
     
        $statement = $connection->execute('SELECT count(*) as count from pomparans');
     
        $pomparansCount = $statement->fetch('assoc');
        $this->set(compact('pomparansCount'));

        }

      
      

}
