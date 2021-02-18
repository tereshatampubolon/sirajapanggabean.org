<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Calendars Model
 *
 * @method \App\Model\Entity\Calendar newEmptyEntity()
 * @method \App\Model\Entity\Calendar newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Calendar[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Calendar get($primaryKey, $options = [])
 * @method \App\Model\Entity\Calendar findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Calendar patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Calendar[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Calendar|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Calendar saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Calendar[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Calendar[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Calendar[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Calendar[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class CalendarsTable extends Table
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

        $this->setTable('calendars');
        $this->setDisplayField('name');
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
            ->scalar('name')
            ->maxLength('name', 255)
            ->requirePresence('name', 'create')
            ->notEmptyString('name');

        $validator
            ->scalar('category')
            ->maxLength('category', 15)
            ->requirePresence('category', 'create')
            ->notEmptyString('category');

        $validator
            ->dateTime('start_date')
            ->requirePresence('start_date', 'create')
            ->notEmptyDateTime('start_date');

        $validator
            ->dateTime('end_date')
            ->allowEmptyDateTime('end_date');

        $validator
            ->scalar('description')
            ->requirePresence('description', 'create')
            ->notEmptyString('description');

        $validator
            ->scalar('calendar_system')
            ->maxLength('calendar_system', 10)
            ->requirePresence('calendar_system', 'create')
            ->notEmptyString('calendar_system');

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
