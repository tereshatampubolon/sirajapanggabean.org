<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Formulirs Model
 *
 * @method \App\Model\Entity\Formulir newEmptyEntity()
 * @method \App\Model\Entity\Formulir newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Formulir[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Formulir get($primaryKey, $options = [])
 * @method \App\Model\Entity\Formulir findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Formulir patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Formulir[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Formulir|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Formulir saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Formulir[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Formulir[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Formulir[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Formulir[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class FormulirsTable extends Table
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

        $this->setTable('formulirs');
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
            ->scalar('pomparan')
            ->maxLength('pomparan', 50)
            ->requirePresence('pomparan', 'create')
            ->notEmptyString('pomparan');

        $validator
            ->integer('sundut')
            ->requirePresence('sundut', 'create')
            ->notEmptyString('sundut');

        $validator
            ->scalar('nama_ompung')
            ->maxLength('nama_ompung', 50)
            ->requirePresence('nama_ompung', 'create')
            ->notEmptyString('nama_ompung');

        $validator
            ->scalar('marga_istri_ompung')
            ->maxLength('marga_istri_ompung', 50)
            ->requirePresence('marga_istri_ompung', 'create')
            ->notEmptyString('marga_istri_ompung');

        $validator
            ->scalar('nama_bapak')
            ->maxLength('nama_bapak', 50)
            ->requirePresence('nama_bapak', 'create')
            ->notEmptyString('nama_bapak');

        $validator
            ->scalar('marga_istri_bapak')
            ->maxLength('marga_istri_bapak', 50)
            ->requirePresence('marga_istri_bapak', 'create')
            ->notEmptyString('marga_istri_bapak');

        $validator
            ->scalar('nama_diri')
            ->maxLength('nama_diri', 50)
            ->requirePresence('nama_diri', 'create')
            ->notEmptyString('nama_diri');

        $validator
            ->scalar('marga_pasangan')
            ->maxLength('marga_pasangan', 50)
            ->requirePresence('marga_pasangan', 'create')
            ->notEmptyString('marga_pasangan');

        $validator
            ->scalar('nomor_hp')
            ->maxLength('nomor_hp', 50)
            ->requirePresence('nomor_hp', 'create')
            ->notEmptyString('nomor_hp');

        $validator
            ->scalar('pekerjaan')
            ->maxLength('pekerjaan', 50)
            ->requirePresence('pekerjaan', 'create')
            ->notEmptyString('pekerjaan');

        $validator
            ->scalar('anak_01')
            ->maxLength('anak_01', 50)
            ->allowEmptyString('anak_01');

        $validator
            ->scalar('jk_anak_01')
            ->maxLength('jk_anak_01', 1)
            ->allowEmptyString('jk_anak_01');

        $validator
            ->scalar('marga_pasangan_anak_01')
            ->maxLength('marga_pasangan_anak_01', 50)
            ->allowEmptyString('marga_pasangan_anak_01');

        $validator
            ->scalar('anak_02')
            ->maxLength('anak_02', 50)
            ->allowEmptyString('anak_02');

        $validator
            ->scalar('jk_anak_02')
            ->maxLength('jk_anak_02', 1)
            ->allowEmptyString('jk_anak_02');

        $validator
            ->scalar('marga_pasangan_anak_02')
            ->maxLength('marga_pasangan_anak_02', 50)
            ->allowEmptyString('marga_pasangan_anak_02');

        $validator
            ->scalar('anak_03')
            ->maxLength('anak_03', 50)
            ->allowEmptyString('anak_03');

        $validator
            ->scalar('jk_anak_03')
            ->maxLength('jk_anak_03', 1)
            ->allowEmptyString('jk_anak_03');

        $validator
            ->scalar('marga_pasangan_anak_03')
            ->maxLength('marga_pasangan_anak_03', 50)
            ->allowEmptyString('marga_pasangan_anak_03');

        $validator
            ->scalar('anak_04')
            ->maxLength('anak_04', 50)
            ->allowEmptyString('anak_04');

        $validator
            ->scalar('jk_anak_04')
            ->maxLength('jk_anak_04', 1)
            ->allowEmptyString('jk_anak_04');

        $validator
            ->scalar('marga_pasangan_anak_04')
            ->maxLength('marga_pasangan_anak_04', 50)
            ->allowEmptyString('marga_pasangan_anak_04');

        $validator
            ->scalar('anak_05')
            ->maxLength('anak_05', 50)
            ->allowEmptyString('anak_05');

        $validator
            ->scalar('jk_anak_05')
            ->maxLength('jk_anak_05', 1)
            ->allowEmptyString('jk_anak_05');

        $validator
            ->scalar('marga_pasangan_anak_05')
            ->maxLength('marga_pasangan_anak_05', 50)
            ->allowEmptyString('marga_pasangan_anak_05');

        $validator
            ->scalar('anak_06')
            ->maxLength('anak_06', 50)
            ->allowEmptyString('anak_06');

        $validator
            ->scalar('jk_anak_06')
            ->maxLength('jk_anak_06', 1)
            ->allowEmptyString('jk_anak_06');

        $validator
            ->scalar('marga_pasangan_anak_06')
            ->maxLength('marga_pasangan_anak_06', 50)
            ->allowEmptyString('marga_pasangan_anak_06');

        $validator
            ->scalar('anak_07')
            ->maxLength('anak_07', 50)
            ->allowEmptyString('anak_07');

        $validator
            ->scalar('jk_anak_07')
            ->maxLength('jk_anak_07', 1)
            ->allowEmptyString('jk_anak_07');

        $validator
            ->scalar('marga_pasangan_anak_07')
            ->maxLength('marga_pasangan_anak_07', 50)
            ->allowEmptyString('marga_pasangan_anak_07');

        $validator
            ->scalar('anak_08')
            ->maxLength('anak_08', 50)
            ->allowEmptyString('anak_08');

        $validator
            ->scalar('jk_anak_08')
            ->maxLength('jk_anak_08', 1)
            ->allowEmptyString('jk_anak_08');

        $validator
            ->scalar('marga_pasangan_anak_08')
            ->maxLength('marga_pasangan_anak_08', 50)
            ->allowEmptyString('marga_pasangan_anak_08');

        $validator
            ->scalar('anak_09')
            ->maxLength('anak_09', 50)
            ->allowEmptyString('anak_09');

        $validator
            ->scalar('jk_anak_09')
            ->maxLength('jk_anak_09', 1)
            ->allowEmptyString('jk_anak_09');

        $validator
            ->scalar('marga_pasangan_anak_09')
            ->maxLength('marga_pasangan_anak_09', 50)
            ->allowEmptyString('marga_pasangan_anak_09');

        $validator
            ->scalar('anak_10')
            ->maxLength('anak_10', 50)
            ->allowEmptyString('anak_10');

        $validator
            ->scalar('jk_anak_10')
            ->maxLength('jk_anak_10', 1)
            ->allowEmptyString('jk_anak_10');

        $validator
            ->scalar('marga_pasangan_anak_10')
            ->maxLength('marga_pasangan_anak_10', 50)
            ->allowEmptyString('marga_pasangan_anak_10');

        $validator
            ->scalar('anak_11')
            ->maxLength('anak_11', 50)
            ->allowEmptyString('anak_11');

        $validator
            ->scalar('jk_anak_11')
            ->maxLength('jk_anak_11', 1)
            ->allowEmptyString('jk_anak_11');

        $validator
            ->scalar('marga_pasangan_anak_11')
            ->maxLength('marga_pasangan_anak_11', 50)
            ->allowEmptyString('marga_pasangan_anak_11');

        $validator
            ->scalar('anak_12')
            ->maxLength('anak_12', 50)
            ->allowEmptyString('anak_12');

        $validator
            ->scalar('jk_anak_12')
            ->maxLength('jk_anak_12', 1)
            ->allowEmptyString('jk_anak_12');

        $validator
            ->scalar('marga_pasangan_anak_12')
            ->maxLength('marga_pasangan_anak_12', 50)
            ->allowEmptyString('marga_pasangan_anak_12');

        $validator
            ->scalar('anak_13')
            ->maxLength('anak_13', 50)
            ->allowEmptyString('anak_13');

        $validator
            ->scalar('jk_anak_13')
            ->maxLength('jk_anak_13', 1)
            ->allowEmptyString('jk_anak_13');

        $validator
            ->scalar('marga_pasangan_anak_13')
            ->maxLength('marga_pasangan_anak_13', 50)
            ->allowEmptyString('marga_pasangan_anak_13');

        $validator
            ->scalar('anak_14')
            ->maxLength('anak_14', 50)
            ->allowEmptyString('anak_14');

        $validator
            ->scalar('jk_anak_14')
            ->maxLength('jk_anak_14', 1)
            ->allowEmptyString('jk_anak_14');

        $validator
            ->scalar('marga_pasangan_anak_14')
            ->maxLength('marga_pasangan_anak_14', 50)
            ->allowEmptyString('marga_pasangan_anak_14');

        $validator
            ->scalar('anak_15')
            ->maxLength('anak_15', 50)
            ->allowEmptyString('anak_15');

        $validator
            ->scalar('jk_anak_15')
            ->maxLength('jk_anak_15', 1)
            ->allowEmptyString('jk_anak_15');

        $validator
            ->scalar('marga_pasangan_anak_15')
            ->maxLength('marga_pasangan_anak_15', 50)
            ->allowEmptyString('marga_pasangan_anak_15');

        $validator
            ->scalar('saudara_01')
            ->maxLength('saudara_01', 50)
            ->allowEmptyString('saudara_01');

        $validator
            ->scalar('jk_saudara_01')
            ->maxLength('jk_saudara_01', 1)
            ->allowEmptyString('jk_saudara_01');

        $validator
            ->scalar('marga_pasangan_saudara_01')
            ->maxLength('marga_pasangan_saudara_01', 50)
            ->allowEmptyString('marga_pasangan_saudara_01');

        $validator
            ->scalar('saudara_02')
            ->maxLength('saudara_02', 50)
            ->allowEmptyString('saudara_02');

        $validator
            ->scalar('jk_saudara_02')
            ->maxLength('jk_saudara_02', 1)
            ->allowEmptyString('jk_saudara_02');

        $validator
            ->scalar('marga_pasangan_saudara_02')
            ->maxLength('marga_pasangan_saudara_02', 50)
            ->allowEmptyString('marga_pasangan_saudara_02');

        $validator
            ->scalar('saudara_03')
            ->maxLength('saudara_03', 50)
            ->allowEmptyString('saudara_03');

        $validator
            ->scalar('jk_saudara_03')
            ->maxLength('jk_saudara_03', 1)
            ->allowEmptyString('jk_saudara_03');

        $validator
            ->scalar('marga_pasangan_saudara_03')
            ->maxLength('marga_pasangan_saudara_03', 50)
            ->allowEmptyString('marga_pasangan_saudara_03');

        $validator
            ->scalar('saudara_04')
            ->maxLength('saudara_04', 50)
            ->allowEmptyString('saudara_04');

        $validator
            ->scalar('jk_saudara_04')
            ->maxLength('jk_saudara_04', 1)
            ->allowEmptyString('jk_saudara_04');

        $validator
            ->scalar('marga_pasangan_saudara_04')
            ->maxLength('marga_pasangan_saudara_04', 50)
            ->allowEmptyString('marga_pasangan_saudara_04');

        $validator
            ->scalar('saudara_05')
            ->maxLength('saudara_05', 50)
            ->allowEmptyString('saudara_05');

        $validator
            ->scalar('jk_saudara_05')
            ->maxLength('jk_saudara_05', 1)
            ->allowEmptyString('jk_saudara_05');

        $validator
            ->scalar('marga_pasangan_saudara_05')
            ->maxLength('marga_pasangan_saudara_05', 50)
            ->allowEmptyString('marga_pasangan_saudara_05');

        $validator
            ->scalar('saudara_06')
            ->maxLength('saudara_06', 50)
            ->allowEmptyString('saudara_06');

        $validator
            ->scalar('jk_saudara_06')
            ->maxLength('jk_saudara_06', 1)
            ->allowEmptyString('jk_saudara_06');

        $validator
            ->scalar('marga_pasangan_saudara_06')
            ->maxLength('marga_pasangan_saudara_06', 50)
            ->allowEmptyString('marga_pasangan_saudara_06');

        $validator
            ->scalar('saudara_07')
            ->maxLength('saudara_07', 50)
            ->allowEmptyString('saudara_07');

        $validator
            ->scalar('jk_saudara_07')
            ->maxLength('jk_saudara_07', 1)
            ->allowEmptyString('jk_saudara_07');

        $validator
            ->scalar('marga_pasangan_saudara_07')
            ->maxLength('marga_pasangan_saudara_07', 50)
            ->allowEmptyString('marga_pasangan_saudara_07');

        $validator
            ->scalar('saudara_08')
            ->maxLength('saudara_08', 50)
            ->allowEmptyString('saudara_08');

        $validator
            ->scalar('jk_saudara_08')
            ->maxLength('jk_saudara_08', 1)
            ->allowEmptyString('jk_saudara_08');

        $validator
            ->scalar('marga_pasangan_saudara_08')
            ->maxLength('marga_pasangan_saudara_08', 50)
            ->allowEmptyString('marga_pasangan_saudara_08');

        $validator
            ->scalar('saudara_09')
            ->maxLength('saudara_09', 50)
            ->allowEmptyString('saudara_09');

        $validator
            ->scalar('jk_saudara_09')
            ->maxLength('jk_saudara_09', 1)
            ->allowEmptyString('jk_saudara_09');

        $validator
            ->scalar('marga_pasangan_saudara_09')
            ->maxLength('marga_pasangan_saudara_09', 50)
            ->allowEmptyString('marga_pasangan_saudara_09');

        $validator
            ->scalar('saudara_10')
            ->maxLength('saudara_10', 50)
            ->allowEmptyString('saudara_10');

        $validator
            ->scalar('jk_saudara_10')
            ->maxLength('jk_saudara_10', 1)
            ->allowEmptyString('jk_saudara_10');

        $validator
            ->scalar('marga_pasangan_saudara_10')
            ->maxLength('marga_pasangan_saudara_10', 50)
            ->allowEmptyString('marga_pasangan_saudara_10');

        $validator
            ->scalar('saudara_11')
            ->maxLength('saudara_11', 50)
            ->allowEmptyString('saudara_11');

        $validator
            ->scalar('jk_saudara_11')
            ->maxLength('jk_saudara_11', 1)
            ->allowEmptyString('jk_saudara_11');

        $validator
            ->scalar('marga_pasangan_saudara_11')
            ->maxLength('marga_pasangan_saudara_11', 50)
            ->allowEmptyString('marga_pasangan_saudara_11');

        $validator
            ->scalar('saudara_12')
            ->maxLength('saudara_12', 50)
            ->allowEmptyString('saudara_12');

        $validator
            ->scalar('jk_saudara_12')
            ->maxLength('jk_saudara_12', 1)
            ->allowEmptyString('jk_saudara_12');

        $validator
            ->scalar('marga_pasangan_saudara_12')
            ->maxLength('marga_pasangan_saudara_12', 50)
            ->allowEmptyString('marga_pasangan_saudara_12');

        $validator
            ->scalar('saudara_13')
            ->maxLength('saudara_13', 50)
            ->allowEmptyString('saudara_13');

        $validator
            ->scalar('jk_saudara_13')
            ->maxLength('jk_saudara_13', 1)
            ->allowEmptyString('jk_saudara_13');

        $validator
            ->scalar('marga_pasangan_saudara_13')
            ->maxLength('marga_pasangan_saudara_13', 50)
            ->allowEmptyString('marga_pasangan_saudara_13');

        $validator
            ->scalar('saudara_14')
            ->maxLength('saudara_14', 50)
            ->allowEmptyString('saudara_14');

        $validator
            ->scalar('jk_saudara_14')
            ->maxLength('jk_saudara_14', 1)
            ->allowEmptyString('jk_saudara_14');

        $validator
            ->scalar('marga_pasangan_saudara_14')
            ->maxLength('marga_pasangan_saudara_14', 50)
            ->allowEmptyString('marga_pasangan_saudara_14');

        $validator
            ->scalar('saudara_15')
            ->maxLength('saudara_15', 50)
            ->allowEmptyString('saudara_15');

        $validator
            ->scalar('jk_saudara_15')
            ->maxLength('jk_saudara_15', 1)
            ->allowEmptyString('jk_saudara_15');

        $validator
            ->scalar('marga_pasangan_saudara_15')
            ->maxLength('marga_pasangan_saudara_15', 50)
            ->allowEmptyString('marga_pasangan_saudara_15');

        $validator
            ->scalar('sektor')
            ->maxLength('sektor', 50)
            ->requirePresence('sektor', 'create')
            ->notEmptyString('sektor');

        $validator
            ->scalar('kab_kota')
            ->maxLength('kab_kota', 50)
            ->requirePresence('kab_kota', 'create')
            ->notEmptyString('kab_kota');

        $validator
            ->integer('status')
            ->notEmptyString('status');

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
}
