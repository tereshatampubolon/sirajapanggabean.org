<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Appscodes Model
 *
 * @method \App\Model\Entity\Appscode newEmptyEntity()
 * @method \App\Model\Entity\Appscode newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Appscode[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Appscode get($primaryKey, $options = [])
 * @method \App\Model\Entity\Appscode findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Appscode patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Appscode[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Appscode|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Appscode saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Appscode[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Appscode[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Appscode[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Appscode[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class AppscodesTable extends Table
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

        $this->setTable('appscodes');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');
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
            ->integer('code')
            ->requirePresence('code', 'create')
            ->notEmptyString('code');

        $validator
            ->scalar('parameter_name')
            ->maxLength('parameter_name', 50)
            ->requirePresence('parameter_name', 'create')
            ->notEmptyString('parameter_name');

        $validator
            ->scalar('param')
            ->maxLength('param', 10)
            ->requirePresence('param', 'create')
            ->notEmptyString('param');

        $validator
            ->scalar('value')
            ->maxLength('value', 50)
            ->requirePresence('value', 'create')
            ->notEmptyString('value');

        $validator
            ->scalar('user_created')
            ->maxLength('user_created', 200)
            ->requirePresence('user_created', 'create')
            ->notEmptyString('user_created');

        $validator
            ->scalar('ip_created')
            ->maxLength('ip_created', 45)
            ->requirePresence('ip_created', 'create')
            ->notEmptyString('ip_created');

        $validator
            ->scalar('user_modified')
            ->maxLength('user_modified', 200)
            ->requirePresence('user_modified', 'create')
            ->notEmptyString('user_modified');

        $validator
            ->scalar('ip_modified')
            ->maxLength('ip_modified', 45)
            ->requirePresence('ip_modified', 'create')
            ->notEmptyString('ip_modified');

        return $validator;
    }
}
