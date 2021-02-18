<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * PomparansComments Model
 *
 * @property \App\Model\Table\PomparansTable&\Cake\ORM\Association\BelongsTo $Pomparans
 *
 * @method \App\Model\Entity\PomparansComment newEmptyEntity()
 * @method \App\Model\Entity\PomparansComment newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\PomparansComment[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\PomparansComment get($primaryKey, $options = [])
 * @method \App\Model\Entity\PomparansComment findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\PomparansComment patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\PomparansComment[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\PomparansComment|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\PomparansComment saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\PomparansComment[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\PomparansComment[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\PomparansComment[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\PomparansComment[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class PomparansCommentsTable extends Table
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

        $this->setTable('pomparans_comments');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Pomparans', [
            'foreignKey' => 'pomparan_id',
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
            ->scalar('comment')
            ->requirePresence('comment', 'create')
            ->notEmptyString('comment');

        $validator
            ->scalar('re_comment')
            ->requirePresence('re_comment', 'create')
            ->notEmptyString('re_comment');

        $validator
            ->integer('status')
            ->requirePresence('status', 'create')
            ->notEmptyString('status');

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

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules): RulesChecker
    {
        $rules->add($rules->existsIn(['pomparan_id'], 'Pomparans'));

        return $rules;
    }
}
