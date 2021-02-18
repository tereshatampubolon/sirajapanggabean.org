<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Pomparans Model
 *
 * @property \App\Model\Table\PomparansTable&\Cake\ORM\Association\BelongsTo $ParentPomparans
 * @property \App\Model\Table\UsersTable&\Cake\ORM\Association\BelongsTo $Users
 * @property \App\Model\Table\GedcomsTable&\Cake\ORM\Association\BelongsTo $Gedcoms
 * @property \App\Model\Table\PagesTable&\Cake\ORM\Association\HasMany $Pages
 * @property \App\Model\Table\PomparansTable&\Cake\ORM\Association\HasMany $ChildPomparans
 * @property \App\Model\Table\PomparansCommentsTable&\Cake\ORM\Association\HasMany $PomparansComments
 *
 * @method \App\Model\Entity\Pomparan newEmptyEntity()
 * @method \App\Model\Entity\Pomparan newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Pomparan[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Pomparan get($primaryKey, $options = [])
 * @method \App\Model\Entity\Pomparan findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Pomparan patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Pomparan[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Pomparan|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Pomparan saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Pomparan[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Pomparan[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Pomparan[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Pomparan[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 * @mixin \Cake\ORM\Behavior\TreeBehavior
 */
class PomparansTable extends Table
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

        $this->setTable('pomparans');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');
        $this->addBehavior('Tree');

        $this->belongsTo('ParentPomparans', [
            'className' => 'Pomparans',
            'foreignKey' => 'parent_id',
        ]);
        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
        ]);
        $this->belongsTo('Gedcoms', [
            'foreignKey' => 'gedcom_id',
            'joinType' => 'INNER',
        ]);
        $this->hasMany('Pages', [
            'foreignKey' => 'pomparan_id',
        ]);
        $this->hasMany('ChildPomparans', [
            'className' => 'Pomparans',
            'foreignKey' => 'parent_id',
        ]);
        $this->hasMany('PomparansComments', [
            'foreignKey' => 'pomparan_id',
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
            ->email('email')
            ->allowEmptyString('email');

        $validator
            ->scalar('job_title')
            ->maxLength('job_title', 200)
            ->allowEmptyString('job_title');

        $validator
            ->integer('children_number')
            ->notEmptyString('children_number');


        $validator
            ->boolean('approved')
            ->allowEmptyString('approved');

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
        $rules->add($rules->existsIn(['parent_id'], 'ParentPomparans'));
        $rules->add($rules->existsIn(['user_id'], 'Users'));
        $rules->add($rules->existsIn(['gedcom_id'], 'Gedcoms'));

        return $rules;
    }
}
