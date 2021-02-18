<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * PomparansOld Model
 *
 * @property \App\Model\Table\PomparansOldTable&\Cake\ORM\Association\BelongsTo $ParentPomparansOld
 * @property \App\Model\Table\UsersTable&\Cake\ORM\Association\BelongsTo $Users
 * @property \App\Model\Table\GedcomsTable&\Cake\ORM\Association\BelongsTo $Gedcoms
 * @property \App\Model\Table\PomparansOldTable&\Cake\ORM\Association\HasMany $ChildPomparansOld
 *
 * @method \App\Model\Entity\PomparansOld newEmptyEntity()
 * @method \App\Model\Entity\PomparansOld newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\PomparansOld[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\PomparansOld get($primaryKey, $options = [])
 * @method \App\Model\Entity\PomparansOld findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\PomparansOld patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\PomparansOld[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\PomparansOld|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\PomparansOld saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\PomparansOld[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\PomparansOld[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\PomparansOld[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\PomparansOld[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 * @mixin \Cake\ORM\Behavior\TreeBehavior
 */
class PomparansOldTable extends Table
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

        $this->setTable('pomparans_old');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');
        $this->addBehavior('Tree');

        $this->belongsTo('ParentPomparansOld', [
            'className' => 'PomparansOld',
            'foreignKey' => 'parent_id',
        ]);
        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
        ]);
        $this->belongsTo('Gedcoms', [
            'foreignKey' => 'gedcom_id',
            'joinType' => 'INNER',
        ]);
        $this->hasMany('ChildPomparansOld', [
            'className' => 'PomparansOld',
            'foreignKey' => 'parent_id',
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
            ->maxLength('name', 50)
            ->requirePresence('name', 'create')
            ->notEmptyString('name');

        $validator
            ->integer('birth_order')
            ->notEmptyString('birth_order');

        $validator
            ->integer('generation_level')
            ->requirePresence('generation_level', 'create')
            ->notEmptyString('generation_level');

        $validator
            ->scalar('spouse_name')
            ->maxLength('spouse_name', 200)
            ->allowEmptyString('spouse_name');

        $validator
            ->scalar('gender')
            ->maxLength('gender', 3)
            ->notEmptyString('gender');

        $validator
            ->date('birth_date')
            ->allowEmptyDate('birth_date');

        $validator
            ->boolean('death')
            ->notEmptyString('death');

        $validator
            ->date('death_date')
            ->allowEmptyDate('death_date');

        $validator
            ->scalar('address')
            ->maxLength('address', 255)
            ->allowEmptyString('address');

        $validator
            ->scalar('city')
            ->maxLength('city', 255)
            ->allowEmptyString('city');

        $validator
            ->scalar('phone')
            ->maxLength('phone', 30)
            ->allowEmptyString('phone');

        $validator
            ->scalar('job_title')
            ->maxLength('job_title', 200)
            ->allowEmptyString('job_title');

        $validator
            ->scalar('gedcom_fams')
            ->maxLength('gedcom_fams', 100)
            ->requirePresence('gedcom_fams', 'create')
            ->notEmptyString('gedcom_fams');

        $validator
            ->scalar('gedcom_famc')
            ->maxLength('gedcom_famc', 100)
            ->requirePresence('gedcom_famc', 'create')
            ->notEmptyString('gedcom_famc');

        $validator
            ->scalar('gedcom_data')
            ->requirePresence('gedcom_data', 'create')
            ->notEmptyString('gedcom_data');

        $validator
            ->boolean('approved')
            ->allowEmptyString('approved');

        $validator
            ->scalar('user_created')
            ->maxLength('user_created', 200)
            ->allowEmptyString('user_created');

        $validator
            ->scalar('ip_created')
            ->maxLength('ip_created', 50)
            ->allowEmptyString('ip_created');

        $validator
            ->scalar('user_modified')
            ->maxLength('user_modified', 200)
            ->allowEmptyString('user_modified');

        $validator
            ->scalar('ip_modified')
            ->maxLength('ip_modified', 50)
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
        $rules->add($rules->existsIn(['parent_id'], 'ParentPomparansOld'));
        $rules->add($rules->existsIn(['user_id'], 'Users'));
        $rules->add($rules->existsIn(['gedcom_id'], 'Gedcoms'));

        return $rules;
    }
}
