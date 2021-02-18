<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ModulesFungsis Model
 *
 * @property \App\Model\Table\ModulesTable&\Cake\ORM\Association\BelongsTo $Modules
 *
 * @method \App\Model\Entity\ModulesFungsi newEmptyEntity()
 * @method \App\Model\Entity\ModulesFungsi newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\ModulesFungsi[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ModulesFungsi get($primaryKey, $options = [])
 * @method \App\Model\Entity\ModulesFungsi findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\ModulesFungsi patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ModulesFungsi[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\ModulesFungsi|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ModulesFungsi saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ModulesFungsi[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\ModulesFungsi[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\ModulesFungsi[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\ModulesFungsi[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ModulesFungsisTable extends Table
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

        $this->setTable('modules_fungsis');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Modules', [
            'foreignKey' => 'module_id',
            'joinType' => 'INNER',
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
            ->scalar('name')
            ->maxLength('name', 100)
            ->requirePresence('name', 'create')
            ->notEmptyString('name');

        $validator
            ->scalar('user_created')
            ->maxLength('user_created', 200)
            ->allowEmptyString('user_created');

        $validator
            ->scalar('ip_created')
            ->maxLength('ip_created', 15)
            ->allowEmptyString('ip_created');

        $validator
            ->scalar('user_modified')
            ->maxLength('user_modified', 200)
            ->allowEmptyString('user_modified');

        $validator
            ->scalar('ip_modified')
            ->maxLength('ip_modified', 15)
            ->allowEmptyString('ip_modified');

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
        $rules->add($rules->existsIn(['module_id'], 'Modules'));

        return $rules;
    }
}
