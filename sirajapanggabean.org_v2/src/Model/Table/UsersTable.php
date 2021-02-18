<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Users Model
 *
 * @property \App\Model\Table\PomparansTable&\Cake\ORM\Association\HasMany $Pomparans
 * @property \App\Model\Table\PomparansOldTable&\Cake\ORM\Association\HasMany $PomparansOld
 * @property \App\Model\Table\GroupsTable&\Cake\ORM\Association\BelongsToMany $Groups
 *
 * @method \App\Model\Entity\User newEmptyEntity()
 * @method \App\Model\Entity\User newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\User[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\User get($primaryKey, $options = [])
 * @method \App\Model\Entity\User findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\User patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\User[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\User|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\User saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class UsersTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('users');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Pomparans', [
            'foreignKey' => 'user_id',
        ]);
        $this->hasMany('PomparansOld', [
            'foreignKey' => 'user_id',
        ]);
        $this->belongsToMany('Groups', [
            'foreignKey' => 'user_id',
            'targetForeignKey' => 'group_id',
            'joinTable' => 'groups_users',
        ]);

        
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->integer('id')
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('username')
            ->maxLength('username', 50)
            ->requirePresence('username', 'create')
            ->notEmptyString('username','Tidak boleh kosong')
            ->add('username', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->email('email')
            ->requirePresence('email', 'create')
            ->notEmptyString('email','Tidak boleh kosong');

        $validator
            ->scalar('password')
            ->maxLength('password', 40)
            ->requirePresence('password', 'create')
            ->notEmptyString('password','Tidak boleh kosong');

        $validator -> sameAs('password_confirm','password','Passwords not equal.');

/*
        $validator
            ->integer('current_role')
            ->requirePresence('current_role', 'create')
            ->notEmptyString('current_role');
*/
        $validator
            ->scalar('nama_diri')
            ->maxLength('nama_diri', 50)
            ->requirePresence('nama_diri', 'create')
            ->notEmptyString('nama_diri','Tidak boleh kosong');

        $validator
            ->integer('sundut')
            ->requirePresence('sundut', 'create')
            ->notEmptyString('sundut','Tidak boleh kosong');

        $validator
            ->scalar('nama_bapak')
            ->maxLength('nama_bapak', 50)
            ->requirePresence('nama_bapak', 'create')
            ->notEmptyString('nama_bapak','Tidak boleh kosong');

        $validator
            ->scalar('nama_ompung')
            ->maxLength('nama_ompung', 50)
            ->requirePresence('nama_ompung', 'create')
            ->notEmptyString('nama_ompung','Tidak boleh kosong');

        $validator
            ->scalar('pomparan')
            ->maxLength('pomparan', 50)
            ->requirePresence('pomparan', 'create')
            ->notEmptyString('pomparan','Tidak boleh kosong');

/*        $validator
            ->boolean('verified')
            ->requirePresence('verified', 'create')
            ->notEmptyString('verified');

        $validator
            ->boolean('activated')
            ->requirePresence('activated', 'create')
            ->notEmptyString('activated');
*/

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules): RulesChecker
    {
        $rules->add($rules->isUnique(['username']));
        $rules->add($rules->isUnique(['email']));

        return $rules;
    }

}
