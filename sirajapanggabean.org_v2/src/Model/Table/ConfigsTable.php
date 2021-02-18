<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Configs Model
 *
 * @method \App\Model\Entity\Config newEmptyEntity()
 * @method \App\Model\Entity\Config newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Config[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Config get($primaryKey, $options = [])
 * @method \App\Model\Entity\Config findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Config patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Config[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Config|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Config saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Config[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Config[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Config[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Config[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ConfigsTable extends Table
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

        $this->setTable('configs');
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
            ->scalar('web_name')
            ->maxLength('web_name', 255)
            ->requirePresence('web_name', 'create')
            ->notEmptyString('web_name');

        $validator
            ->scalar('admin_email')
            ->maxLength('admin_email', 255)
            ->requirePresence('admin_email', 'create')
            ->notEmptyString('admin_email');

        $validator
            ->scalar('file_location')
            ->maxLength('file_location', 255)
            ->requirePresence('file_location', 'create')
            ->notEmptyFile('file_location');

        $validator
            ->scalar('photo_location')
            ->maxLength('photo_location', 250)
            ->requirePresence('photo_location', 'create')
            ->notEmptyString('photo_location');

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
