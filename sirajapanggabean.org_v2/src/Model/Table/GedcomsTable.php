<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Gedcoms Model
 *
 * @property \App\Model\Table\IsTable&\Cake\ORM\Association\BelongsTo $Is
 * @property \App\Model\Table\PomparansTable&\Cake\ORM\Association\HasMany $Pomparans
 * @property \App\Model\Table\PomparansOldTable&\Cake\ORM\Association\HasMany $PomparansOld
 * @property \App\Model\Table\Tmp2pomparansTable&\Cake\ORM\Association\HasMany $Tmp2pomparans
 * @property \App\Model\Table\TmppomparansTable&\Cake\ORM\Association\HasMany $Tmppomparans
 *
 * @method \App\Model\Entity\Gedcom newEmptyEntity()
 * @method \App\Model\Entity\Gedcom newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Gedcom[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Gedcom get($primaryKey, $options = [])
 * @method \App\Model\Entity\Gedcom findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Gedcom patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Gedcom[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Gedcom|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Gedcom saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Gedcom[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Gedcom[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Gedcom[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Gedcom[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class GedcomsTable extends Table
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

        $this->setTable('gedcoms');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Is', [
            'foreignKey' => 'i_id',
            'joinType' => 'INNER',
        ]);
        $this->hasMany('Pomparans', [
            'foreignKey' => 'gedcom_id',
        ]);
        $this->hasMany('PomparansOld', [
            'foreignKey' => 'gedcom_id',
        ]);
        $this->hasMany('Tmp2pomparans', [
            'foreignKey' => 'gedcom_id',
        ]);
        $this->hasMany('Tmppomparans', [
            'foreignKey' => 'gedcom_id',
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
            ->integer('i_file')
            ->requirePresence('i_file', 'create')
            ->notEmptyFile('i_file');

        $validator
            ->scalar('i_rin')
            ->maxLength('i_rin', 20)
            ->requirePresence('i_rin', 'create')
            ->notEmptyString('i_rin');

        $validator
            ->scalar('i_sex')
            ->requirePresence('i_sex', 'create')
            ->notEmptyString('i_sex');

        $validator
            ->scalar('i_gedcom')
            ->maxLength('i_gedcom', 16777215)
            ->requirePresence('i_gedcom', 'create')
            ->notEmptyString('i_gedcom');

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
        $rules->add($rules->existsIn(['i_id'], 'Is'));

        return $rules;
    }
}
