<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * CertificatsEtudiants Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Certificats
 * @property \Cake\ORM\Association\BelongsTo $Etudiants
 * @property \Cake\ORM\Association\BelongsTo $Profpermanents
 *
 * @method \App\Model\Entity\CertificatsEtudiant get($primaryKey, $options = [])
 * @method \App\Model\Entity\CertificatsEtudiant newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\CertificatsEtudiant[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\CertificatsEtudiant|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\CertificatsEtudiant patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\CertificatsEtudiant[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\CertificatsEtudiant findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class CertificatsEtudiantsTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('certificats_etudiants');
        $this->setDisplayField('certificat_id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Certificats', [
            'foreignKey' => 'certificat_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Etudiants', [
            'foreignKey' => 'etudiant_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Profpermanents', [
            'foreignKey' => 'profpermanent_id',
            'joinType' => 'INNER'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->requirePresence('etat', 'create')
            ->notEmpty('etat');

        $validator
            ->allowEmpty('commentaire');

        $validator
            ->allowEmpty('entreprise');

        $validator
            ->allowEmpty('raison_retrait');

        $validator
            ->integer('duree_stage')
            ->requirePresence('duree_stage', 'create')
            ->notEmpty('duree_stage');

        $validator
            ->allowEmpty('theme_stage');

        $validator
            ->date('debut_stage')
            ->requirePresence('debut_stage', 'create')
            ->notEmpty('debut_stage');

        $validator
            ->date('fin_stage')
            ->requirePresence('fin_stage', 'create')
            ->notEmpty('fin_stage');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['certificat_id'], 'Certificats'));
        $rules->add($rules->existsIn(['etudiant_id'], 'Etudiants'));
        $rules->add($rules->existsIn(['profpermanent_id'], 'Profpermanents'));

        return $rules;
    }
}
