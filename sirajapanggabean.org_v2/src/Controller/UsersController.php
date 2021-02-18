<?php
declare(strict_types=1);

namespace App\Controller;
use \SplFileObject;
use App\Controller\AppController;
use Cake\Datasource\ConnectionManager;


use Cake\Mailer\Mailer;


use Cake\Mailer\TransportFactory;
use Cake\Auth\DefaultPasswordHasher;
use Cake\Utility\Security;
use Cake\ORM\TableRegistry;
use Cake\Event\EventInterface;






/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UsersController extends AppController
{



    
public function forgotpassword(){
    if ($this->request->is('post')) {
        $myemail = $this->request->getData('email');
        $mytoken = Security::hash(Security::randomBytes(25));   
        
        $userTable = TableRegistry::get('Users');
        $user = $userTable->find('all')->where(['email'=>$myemail])->first();
   
        $user->password = 'david';
        $user->token = $mytoken;
        if($userTable->save($user)) {
            $this->Flash->success('Reset Password telah terkirim ke Email Anda ('.$myemail.'), Silahkan buka Email Anda');

          /*  TransportFactory::setConfig('mailtrap', [
              'host' => 'smtp.mailtrap.io',
              'port' => 2525,
              'username' => '437d83f6fd09c2',
              'password' => 'ae2c395c25c2b8',
              'className' => 'Smtp',
              'tls' => true
            ]);*/



            $mailer = new Mailer('default');
            $mailer->setFrom(['davidsimatupang35gmail.com' => 'David Tupang'])
            ->setTo($myemail)
            ->setSubject('Please Konfirm Your Reset Password')
            ->deliver('Hello '.$myemail.'<br/>Silahkan Klik link dibawah ini untuk Reset Password Anda <br/><br/><a href="http://localhost:8765/users/resetpassword/'.$mytoken.'">Reset Password</a>');        
          
       
        }

        
    }
}



public function resetpassword($token){
    if ($this->request->is('post')) {
        $hasher = new DefaultPasswordHasher();
        $mypass = $hasher->hash($this->request->getData('password'));

        $userTable = TableRegistry::get('Users');
        $user = $userTable->find('all')->where(['token'=>$token])->first();
        $user->password = $mypass;
        if ($userTable->save($user)) {

            return $this->redirect(['action'=>'login']);
         } 
    }

}

public function gantipassword()
    {   
        $id = $this->Auth->user('id');

        $user = $this->Users->get($id, [
            'contain' => ['Groups'],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'logout']);
            }
            $this->Flash->error(__('Data belum benar ,Silahkan periksa dan coba kembali.'));
        }
        
        $this->set(compact('user'));      
}



    
 public function relogin()
    {
        if($this->request->is('post')){
            

            $user = $this->Auth->identify();

            
            if($user){
                $this->Auth->setUser($user);
                
                if($user['activated'] == 0)
                {
                    $this->Flash->error("Akun Anda Belum Di Aktivasi oleh Admin !");
                    return $this->redirect(['controller' => 'Users', 'action' => 'logout']);
                }
                if ($user['current_role'] == 1) {
                    return $this->redirect(['controller'=>'Users','action'=>'gantipassword']);
                    
                }
 
                return $this->redirect(['controller'=>'users','action'=>'gantipassword']);
            }else {
                $this->Flash->error("Username dan Password Salah!");
            }
        }
       
    }





    public function login()
    {
        if($this->request->is('post')){
            

            $user = $this->Auth->identify();

            
            if($user){
                $this->Auth->setUser($user);
                
                if($user['activated'] == 0)
                {
                    $this->Flash->error("Akun Anda Belum Di Aktivasi oleh Admin !");
                    return $this->redirect(['controller' => 'Users', 'action' => 'logout']);
                }
                if ($user['current_role'] == 1) {
                    return $this->redirect(['controller'=>'AdminDashboard','action'=>'index']);
                    
                }
 
                return $this->redirect(['controller'=>'PomparansDashboard','action'=>'index']);
            }else {
                $this->Flash->error("Username dan Password Salah!");
            }
        }
       
    }

    public function logout(){
        return $this->redirect($this->Auth->logout());
    }





    public function index()
    {

         if ($this->Auth->user('current_role') != 1) {
             $this->Flash->error(__('Anda Bukan Admin , Tidak Memiliki Hak Akses Ke Halaman Tersebut'));

           return $this->redirect(['controller'=>'PomparansDashboard','action'=>'index']);
        
    }
        $connection = ConnectionManager::get('default');
     
        $statement = $connection->execute('SELECT count(*) as count from users');
     
        $userCount = $statement->fetch('assoc');
     
        //debug($cari);
        
        $key = $this->request->getQuery('key');
        if($key){
            $query = $this->Users->findByUsernameOrEmail($key,$key);
        }else{
            $query = $this->Users;
        }
 
        
        $users = $this->paginate($query,[$this->Users]);

        $this->set(compact('users','userCount'));


    }
    
    /**
     * View method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
         if ($this->Auth->user('current_role') != 1) {
             $this->Flash->error(__('Anda Bukan Admin , Tidak Memiliki Hak Akses Ke Halaman Tersebut'));

           return $this->redirect(['controller'=>'PomparansDashboard','action'=>'index']);
        
    }
        $user = $this->Users->get($id, [
            'contain' => ['Groups', 'Pomparans', 'PomparansOld'],
        ]);

        $this->set(compact('user'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */

    public function add()
    {
         if ($this->Auth->user('current_role') != 1) {
             $this->Flash->error(__('Anda Bukan Admin , Tidak Memiliki Hak Akses Ke Halaman Tersebut'));

           return $this->redirect(['controller'=>'PomparansDashboard','action'=>'index']);
        
    }
        $user = $this->Users->newEmptyEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if(!empty($user['groups'][0]) ) {
             $user['current_role'] = 1;
             
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            else{

            $this->Flash->error(__('Data belum benar ,Silahkan periksa dan coba kembali.'));
                }
         }   
            else
            {
                 $this->Flash->error(__('Pilih Group Sebagai Admin'));
            }
        }
        $groups = $this->Users->Groups->find('list', ['limit' => 200]);
        $this->set(compact('user', 'groups'));
    }



    public function registrasi()
    {
        $user = $this->Users->newEmptyEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if(!empty($user['groups'][0]) ) {
             $user['current_role'] = 2;
             
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            else{

            $this->Flash->error(__('Data belum benar ,Silahkan periksa dan coba kembali.'));
                }
         }   
            else
            {
                 $this->Flash->error(__('Pilih Group Sebagai Pomparan'));
            }
        }
        $groups = $this->Users->Groups->find('list', ['limit' => 200]);
        $this->set(compact('user', 'groups'));
    }

    /**
     * Edit method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
         if ($this->Auth->user('current_role') != 1) {
             $this->Flash->error(__('Anda Bukan Admin , Tidak Memiliki Hak Akses Ke Halaman Tersebut'));

           return $this->redirect(['controller'=>'PomparansDashboard','action'=>'index']);
        
    }
        $user = $this->Users->get($id, [
            'contain' => ['Groups'],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Data belum benar ,Silahkan periksa dan coba kembali.'));
        }
        $groups = $this->Users->Groups->find('list', ['limit' => 200]);
        $this->set(compact('user', 'groups'));
    }

    /**
     * Delete method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
         if ($this->Auth->user('current_role') != 1) {
             $this->Flash->error(__('Anda Bukan Admin , Tidak Memiliki Hak Akses Ke Halaman Tersebut'));

           return $this->redirect(['controller'=>'PomparansDashboard','action'=>'index']);
        
    }
        $this->request->allowMethod(['post', 'delete']);
        $user = $this->Users->get($id);
        if ($this->Users->delete($user)) {
            $this->Flash->success(__('The user has been deleted.'));
        } else {
             $this->Flash->error(__('Data belum benar ,Silahkan periksa dan coba kembali.'));
        }

        return $this->redirect(['action' => 'index']);
    }
    
    public function userStatus($id=null,$activated)
    {
         if ($this->Auth->user('current_role') != 1) {
             $this->Flash->error(__('Anda Bukan Admin , Tidak Memiliki Hak Akses Ke Halaman Tersebut'));

           return $this->redirect(['controller'=>'PomparansDashboard','action'=>'index']);
        
    }
        $this->request->allowMethod(['post']);
        $user = $this->Users->get($id);
        
        if($activated)
            $user['activated'] = 0;
        
        
        if($this->Users->save($user))
        {
            $this->Flash->success(__('The users status has changed.'));
        }

        return $this->redirect(['action' => 'index']);
    }
     public function userAktif($id=null)
    {
         if ($this->Auth->user('current_role') != 1) {
             $this->Flash->error(__('Anda Bukan Admin , Tidak Memiliki Hak Akses Ke Halaman Tersebut'));

           return $this->redirect(['controller'=>'PomparansDashboard','action'=>'index']);
        
    }
         $this->request->allowMethod(['post']);
        $user = $this->Users->get($id);
            $user['activated'] = 1;
        
        
        if($this->Users->save($user))
        { 
            $this->Flash->success(__('The users status has changed.'));
             return $this->redirect(['action' => 'index']);
           
        }
       
    }

}
