<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Announcements Model
 *
 * @property \App\Model\Table\SyllabiTable&\Cake\ORM\Association\BelongsTo $Syllabi
 *
 * @method \App\Model\Entity\Announcement newEmptyEntity()
 * @method \App\Model\Entity\Announcement newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Announcement[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Announcement get($primaryKey, $options = [])
 * @method \App\Model\Entity\Announcement findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Announcement patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Announcement[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Announcement|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Announcement saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Announcement[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Announcement[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Announcement[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Announcement[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class AnnouncementsTable extends Table
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

        $this->setTable('announcements');
        $this->setDisplayField('title');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Syllabi', [
            'foreignKey' => 'syllabus_id',
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
            ->dateTime('start_date_published')
            ->requirePresence('start_date_published', 'create')
            ->notEmptyDateTime('start_date_published');

        $validator
            ->dateTime('end_date_published')
            ->requirePresence('end_date_published', 'create')
            ->notEmptyDateTime('end_date_published');

        $validator
            ->scalar('title')
            ->maxLength('title', 255)
            ->requirePresence('title', 'create')
            ->notEmptyString('title');

        $validator
            ->scalar('pre_body')
            ->requirePresence('pre_body', 'create')
            ->notEmptyString('pre_body');

        $validator
            ->scalar('body')
            ->maxLength('body', 4294967295)
            ->allowEmptyString('body');

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
        $rules->add($rules->existsIn(['syllabus_id'], 'Syllabi'));

        return $rules;
    }
}
