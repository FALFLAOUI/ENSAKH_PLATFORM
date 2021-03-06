<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Profpermanentsbi Entity
 *
 * @property int $id
 * @property int $user_id
 * @property string $somme
 * @property string $poste
 * @property int $echelle
 * @property int $echelon
 * @property float $salaire
 * @property string $etat
 * @property \Cake\I18n\Time $date_Recrut
 * @property string $nom_prof
 * @property string $prenom_prof
 * @property int $age
 * @property string $diplome
 * @property string $specialite
 * @property string $universite
 * @property string $autresdiplomes
 * @property string $situation_familiale
 * @property int $code_situation_admin
 * @property \Cake\I18n\Time $dateNaissance
 * @property int $codeEtablissement
 * @property string $Lieu_Naissance
 * @property int $CIN
 * @property string $email_prof
 * @property string $phone
 * @property int $etat_attestation
 * @property int $etatdemande
 * @property string $photo
 * @property int $etat_fichesalaire
 *
 * @property \App\Model\Entity\User $user
 */
class Profpermanentsbi extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true,
        'id' => false
    ];
}
