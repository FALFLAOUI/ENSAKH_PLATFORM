<?php
$file = $theme['folder'] . DS . 'src' . DS . 'Template' . DS . 'Element' . DS . 'aside' . DS . 'sidebar-menu.ctp';
$us= $this->request->session()->read('Auth.User');
//début Jellouli
$prof = $this->request->session()->read('prof_id');
echo('psst'. $this->request->session()->read('prof_id'));
//Fin Jellouli
//print_r($us);
//exit;

if (file_exists($file)) {
    ob_start();
    include_once $file;
    echo ob_get_clean();
} else {
?>
<ul class="sidebar-menu">
  
   
                                <!---       SCOLARITE       -->
<?php
if ($us['role']=='resposcolarite')
{
?>
  <li class="header">Espace Scolarité</li>
    <li class="treeview">
        <?php echo $this->Html->link('Acceuil', array('controller' => 'Resposcolarites','action' => 'index')); ?>">
    </li>

    <!-- BECHHAYDA -->
    <li class="treeview">
        <a href="#">
            <i class="fa fa-dashboard"></i> <span>Relever des notes</span> <i class="fa fa-angle-left pull-right"></i>
        </a>

        <!-- changement ici -->
        <ul class="treeview-menu">
            <li><a href="<?php echo $this->Url->build('/resposcolarites/liste-pv-notes'); ?>"><i class="fa fa-circle-o"></i>Liste de pv </a></li>
            <li><a href="<?php echo $this->Url->build('/resposcolarites/liste-classes'); ?>"><i class="fa fa-circle-o"></i>Télécharger</a></li>
        </ul>
        <!-- End -->

    </li>
    <!-- Fin BENCHHAYDA -->

<!-- Abdesamad -->
    <li class="treeview">
        <a href="#">
            <i class="fa fa-cog"></i> <span>Gestion de concours</span> <i class="fa fa-angle-right pull-right"></i>
        </a>
        <ul class="treeview-menu">
            <li><?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-files-o')).'Lancer/Fermer Concours', array('controller' => 'Resposcolarites','action' => 'listeConcours'), array('escape' => false)); ?></li>
            <li><?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-th-list')).'Liste des préinscris', array('controller' => 'Resposcolarites','action' => 'listePreinscris'), array('escape' => false)); ?></li>
            <li><?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-list')).'Liste des préselectionés', array('controller' => 'Resposcolarites','action' => 'listePreselectiones'), array('escape' => false)); ?></li>
            <li><?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-list-ol')).'Liste des admis', array('controller' => 'Resposcolarites','action' => 'listeAdmisGeneral'), array('escape' => false)); ?></li>
            <li><?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-list-ol')).'Listes d\'attente', array('controller' => 'Resposcolarites','action' => 'listesAttentes'), array('escape' => false)); ?></li>
            <li><?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-bar-chart')).'Statistiques', array('controller' => 'Resposcolarites','action' => 'StatistiquesPreinscriptions'), array('escape' => false)); ?></li>
        </ul>

    </li>

    <li class="treeview">
        <a href="#">
            <i class="fa fa-users"></i> <span>Gestion des Etudiants</span> <i class="fa fa-angle-right pull-right"></i>
        </a>
        <ul class="treeview-menu">
            <li><?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-user-plus')).'Ajouter un Etudiant', array('controller' => 'Resposcolarites','action' => 'addUser'), array('escape' => false)); ?></li>
            <li><?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-list')).'Liste des etudiants', array('controller' => 'Resposcolarites','action' => 'etudiantListe'), array('escape' => false)); ?></li>

        </ul>
    </li>
          
       
<!-- Fin Abdessamad -->

 <!-- Zouhir -->

    <li class="treeview">
        <a href="#">
            <i class="fa fa-fw fa-sitemap"></i>
            <span>Classes</span>
            <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
            <li><?php echo $this->Html->link('Modules',array('controller'=>'resposcolarites','action'=>'aitsaidAfficherClasse')); ?>"></li>
        </ul>
    </li>
    <li class="treeview">
        <a href="#">
            <i class="fa fa-fw fa-file"></i>
            <span>Notes</span>
            <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
            <li><?php echo $this->Html->link('Affichage notes',array('controller'=>'resposcolarites','action'=>'affichagenote')); ?>"></li>
            <li><?php echo $this->Html->link('Liste d\'admis',array('controller'=>'resposcolarites','action'=>'listeadmis')); ?>"></li>

        </ul>
    </li>

 <!-- Fin Zouhir -->

 <!-- Hamdi -->
    <li class="treeview">
        <a href="#">
            <i class="fa fa-folder"></i> <span>Certificats des etudiants</span>
            <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
            <li><?php echo $this->Html->link('Tous',array('controller'=>'resposcolarites','action'=>'indexCertificatsEtudiants')); ?>"></li>
            <li><?php echo $this->Html->link('GI',array('controller'=>'resposcolarites','action'=>'indexCertificatsEtudiants/2')); ?>"></li>
            <li><?php echo $this->Html->link('GE',array('controller'=>'resposcolarites','action'=>'indexCertificatsEtudiants/3')); ?>"></li>
            <li><?php echo $this->Html->link('GRT',array('controller'=>'resposcolarites','action'=>'indexCertificatsEtudiants/1')); ?>"></li>
            <li><?php echo $this->Html->link('GPE',array('controller'=>'resposcolarites','action'=>'indexCertificatsEtudiants/4')); ?>"></li>
            <li><?php echo $this->Html->link('TC',array('controller'=>'resposcolarites','action'=>'indexCertificatsEtudiants/6')); ?>"></li>
            <li><?php echo $this->Html->link('CP',array('controller'=>'resposcolarites','action'=>'indexCertificatsEtudiants/5')); ?>"></li>

        </ul>
    </li>


    <!-- Fin Hamdi -->




<!--  mustapha FADILI   -->
    <!--  mustapha   -->
    <li class="treeview">
        <a href="#">
            <i class="fa fa-envelope-o"></i> <span>Messageries</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
            <li><?php echo $this->Html->link('Boîte de réception', array('controller' => 'Resposcolarites','action' => 'boiteRecSco')); ?>"></li>
            <li><?php echo $this->Html->link('Envoyer nouveau message', array('controller' => 'Resposcolarites','action' => 'envoyerNvSco')); ?>"></li>
            <li><?php echo $this->Html->link('Lire mes messages', array('controller' => 'Resposcolarites','action' => 'lireMsgSco')); ?>"></li>
        </ul>
    </li>
<!-- Fin mustapha -->
    <!-- Fin mustapha -->

<!--DEBUT  Kawtar -->
    <li class="treeview">
        <a href="#">
            <i class="fa fa-table"></i> <span>Gestion d'abscences</span>
            <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
            <li><?php echo $this->Html->link('Demander une absence ',array('controller' => 'Resposcolarites','action' => 'demanderabsences')); ?>"></li>

        </ul>
        <!--Fin Kawtar -->
    </li>

    <!--DEBUT  Bouhsise -->
    <li class="treeview">
        <a href="#">
            <i class="fa fa-table"></i> <span>Gestion des demandes</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">

            <li><li><?php echo $this->Html->link('Déposer une demande ', array('controller' => 'Resposcolarites','action' => 'demanderDocFct')); ?>"></li></li>
            <li><li><?php echo $this->Html->link('Liste des documents déposés ', array('controller' => 'Resposcolarites','action' => 'etatDemandeFct  ')); ?>"></li></li>
        </ul>
    </li>


    <?php
}
elseif($us['role']=='profvacataire' || $us['role']=='profpermanent')
{
?> 
    
                            <!---       Proffesseur  :      -->

                             <li class="header">Espace Proffesseur</li>

   <!-- role prof vacataire et permanant -->


<!-- BECHHAYDA -->
    <li class="treeview">
        <a href="#">
            <i class="fa fa-dashboard"></i> <span>notes</span> <i class="fa fa-angle-left pull-right"></i>
        </a>

        <?php if($us['role']=='profvacataire'): ?>
            <ul class="treeview-menu">
                <li><a href="<?php echo $this->Url->build('/profvacataires'); ?>"><i class="fa fa-circle-o"></i>dashboard</a></li>
                <li><a href="<?php echo $this->Url->build('/profvacataires/liste-classes'); ?>"><i class="fa fa-circle-o"></i> Ajouter les notes</a></li>
            </ul>
        <?php else :?>
    <li><li><?php echo $this->Html->link('Déposer Demande Document ', array('controller' => 'Profpermanents','action' => 'demanderDoc')); ?>"></li></li>
    <li><li><?php echo $this->Html->link('Mes Documents ', array('controller' => 'profpermanents','action' => 'etatDemande  ')); ?>"></li></li>


    <ul class="treeview-menu">
                <li><a href="<?php echo $this->Url->build('/profpermanents'); ?>"><i class="fa fa-circle-o"></i>dashboard</a></li>
                <li><a href="<?php echo $this->Url->build('/profpermanents/liste-classes'); ?>"><i class="fa fa-circle-o"></i> Ajouter les notes</a></li>
            </ul>
        <?php endif ?>
    </li>
<!-- Fin BENCHHAYDA -->
   <!-- Bouhsise -->
    <li class="treeview">
        <a href="#">




    <i class="fa fa-dashboard"></i> <span>notes</span> <i class="fa fa-angle-left pull-right"></i>
    </a>

    <!-- Fin bouhsise -->


<!-- BADR  -->
   <li class="treeview">
        <a href="#">
            <i class="fa fa-dashboard"></i> <span>Bibliothéques</span> <i class="fa fa-angle-left pull-right"></i> 
        </a>
        <?php if ($us['role']=='profvacataire') { ?>
        <ul class="treeview-menu">
            <li><?php echo $this->Html->link('Liste Ouvrages',array('controller' =>'Profvacataires','action'=>'listbook')); ?></li>
            <li><?php echo $this->Html->link('Liste par Catégorie',array('controller' =>'Profvacataires','action'=>'listcategorie')); ?></li>
            <li><a href="<?php echo $this->Url->build('/profvacataires/proposerbook'); ?>">Proposer un ouvrage </a></li>
            <li><?php echo $this->Html->link('Ouvrages résérvés',array('controller' =>'Profvacataires','action'=>'hamdihajarselectreservation')); ?></li>
            <li><?php echo $this->Html->link('Ouvrages empruntés',array('controller' =>'Profvacataires','action'=>'majdaselectempreinte')); ?></li>
            <li><?php echo $this->Html->link('Historique des emprunts',array('controller' =>'Profvacataires','action'=>'majdaselecteHistorique')); ?></li>
        </ul>
        <?php } else {?>
        <ul class="treeview-menu">
            <li><?php echo $this->Html->link('Liste Ouvrages',array('controller' =>'Profpermanents','action'=>'listbook')); ?></li>
            <li><?php echo $this->Html->link('Liste par Catégorie',array('controller' =>'Profpermanents','action'=>'listcategorie')); ?></li>
            <li><a href="<?php echo $this->Url->build('/profpermanents/proposerbook'); ?>">Proposer un ouvrage </a></li>
            <li><?php echo $this->Html->link('Ouvrages résérvé',array('controller' =>'Profpermanents','action'=>'hamdihajarselectreservation')); ?></li>
            <li><?php echo $this->Html->link('Ouvrages empruntés',array('controller' =>'Profpermanents','action'=>'majdaselectempreinte')); ?></li>
            <li><?php echo $this->Html->link('Historique des emprunts',array('controller' =>'Profpermanents','action'=>'majdaselecteHistorique')); ?></li>
        </ul>
    <!--  jellouli -->
    <li><a href="<?= $this->Url->build( array( 'controller' => 'Profpermanents',
            'action'=>'viewmouna',
            $prof));
        ?>"><i class="fa fa-circle-o"></i> Validation données </a></li>
    <!-- fin jellouli -->
    <li class="treeview">
        <a href="#">
            <i class="fa fa-dashboard"></i> <span>Messageries</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
            <li><?php echo $this->Html->link('Boîte de réception', array('controller' => 'Profpermanents','action' => 'boiteRecPer')); ?>"></li>
            <li><?php echo $this->Html->link('Envoyer nouveau message', array('controller' => 'Profpermanents','action' => 'envoyerNvPer')); ?>"></li>
            <li><?php echo $this->Html->link('Lire mes messages', array('controller' => 'Profpermanents','action' => 'lireMsgPer')); ?>"></li>
        </ul>
    </li>
        <?php }?>
    </li>

<!-- Fin BADR -->

<!-- Bouhsie -->

   


    <?php if($us['role']=='profvacataire'){?>
    <!--OMAR RAY-->

    <li class="treeview">
        <a href="#">
            <i class="fa fa-dashboard"></i> <span>Espace Vacataires</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
            <li><?php echo $this->Html->link('Saisir les heures',array('controller' => 'profvacataires','action' => 'saisienbheures')); ?>"></li>

            <li><?php echo $this->Html->link('Mes Vacations',array('controller' => 'profvacataires','action' => 'vacations')); ?>"></li>
            <li><?php echo $this->Html->link('Demande documents',array('controller' => 'profvacataires','action' => 'demandedocs')); ?>"></li>
			<li><?php echo $this->Html->link('validation de données',array('controller' => 'vacataires','action' => 'viewmounaa')); ?>"></li>
<li><a href="

        </ul>
    </li>

    <!--OMAR RAY-->
<!-- Fin Bouhsise -->


    <?php if($us['role']=='profvacataire'){?>
        <!--ASMAA SARIHA-->
       <!-- <li><?php// echo $this->Html->link('Compte Vacataire',array('controller' => 'Respopersonels','action' => 'asmaacomptevacataires')); ?>"></li>
        <!--AS%AA SARIH-->
        <!-- mustapha FADILI -->
    <li class="treeview">
        <a href="#">
            <i class="fa fa-dashboard"></i> <span>Messageries</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
            <li><?php echo $this->Html->link('Boîte de réception', array('controller' => 'Profvacataires','action' => 'boiteRecVac')); ?>"></li>
            <li><?php echo $this->Html->link('Envoyer nouveau message', array('controller' => 'Profvacataires','action' => 'envoyerNvVac')); ?>"></li>
            <li><?php echo $this->Html->link('Lire mes messages', array('controller' => 'Profvacataires','action' => 'lireMsgVac')); ?>"></li>
        </ul>
    </li>
<?php }
?>

    <!-- prof permanent mustapha   -->
    
    <!-- Fin mustapha FADILI -->
<?php
    }}
elseif($us['role']=='etudiant')
{
?> 

               <!---      Etudiant  :      -->

                             <li class="header">Espace Etudiant</li>

   <!-- role Etudiant -->
    <li class="treeview">
        <a href="#">
            <i class="fa fa-users"></i> <span>Profil</span> <i class="fa fa-angle-right pull-right"></i>
        </a>
        <ul class="treeview-menu">
            <li><?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-user-plus')).'Informations', array('controller' => 'etudiants','action' => 'index'), array('escape' => false)); ?></li>
            <li><?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-list')).'Edition du profil', array('controller' => 'etudiants','action' => 'editPass'), array('escape' => false)); ?></li>

        </ul>
    </li>
<!-- Zouhir -->

    <li class="treeview">
        <a href="#">
            <i class="fa fa-fw fa-sitemap"></i>
            <span>Mes Notes</span>
            <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
            <li><a href="/Ensaksite/etudiants/notesemestre1"><i class="fa fa-fw fa-book"></i>Semestre 1</a></li>
            <li><a href="/Ensaksite/etudiants/notesemestre2"><i class="fa fa-fw fa-book"></i> Semestre 2</a></li>

        </ul>
    </li>

<!-- fin zouhir -->
<!-- LAHLAOUTI -->


    <li class="treeview">
    <li><?php echo $this->Html->link('Profil', array('controller' => 'Etudiants','action' => 'lahlaoutiprofil')); ?>"></li>
    </li>

    <li class="treeview">
    <li><?php echo $this->Html->link('Mes Professeurs', array('controller' => 'Etudiants','action' => 'lahlaoutimesprofesseurs')); ?>"></li>
    </li>
    </li>
    <li class="treeview">
    <li><?php echo $this->Html->link('Mes Modules', array('controller' => 'Etudiants','action' => 'lahlaoutimesmodules')); ?>"></li>
    </li>




    <!-- FIN LAHLAOUTI -->





    <li class="treeview">
    <li><?php echo $this->Html->link('Emploi', array('controller' => 'Etudiants','action' => 'lahlaoutiemploi')); ?>"></li>
    </li>
    <!-- FIN LAHLAOUTI -->

<!-- BADR -->
     <li class="treeview">
        <a href="#">
            <i class="fa fa-dashboard"></i> <span>Bibliothéques</span> <i class="fa fa-angle-left pull-right"></i> 
        </a>
        <ul class="treeview-menu">
            <li><?php echo $this->Html->link('Liste Ouvrages',array('controller' =>'Etudiants','action'=>'listbook')); ?></li>
            <li><?php echo $this->Html->link('Liste par Catégorie',array('controller' =>'Etudiants','action'=>'listcategorie')); ?></li>
            <li><a href="<?php echo $this->Url->build('/etudiants/proposerbook'); ?>">Proposer un ouvrage</a></li>
            <li><?php echo $this->Html->link('Ouvrage résérvé',array('controller' =>'Etudiants','action'=>'hamdihajarselectreservation')); ?></li>
            <li><?php echo $this->Html->link('ouvrage empruntés',array('controller' =>'Etudiants','action'=>'majdaselectempreinte')); ?></li>
            <li><?php echo $this->Html->link('historiques emprunts',array('controller' =>'Etudiants','action'=>'majdaselecteHistorique')); ?></li>
        </ul>
    </li>

    <!-- FIN BADR -->


<!-- HAMDI -->
    <li class="treeview">
        <a href="<?php echo $this->Url->build(['action'=>'indexCertificats']); ?>"><i class="fa fa-edit"></i> Demander Certificats</a>

    </li>



    <!-- Fin HAMDI -->

<!-- FADILI mustapha   -->
    <li class="treeview">
        <a href="#">
            <i class="fa fa-envelope-o"></i> <span>Messageries</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
            <li><?php echo $this->Html->link('Boîte de réception', array('controller' => 'Etudiants','action' => 'boiteRecEtud')); ?>"></li>
            <li><?php echo $this->Html->link('Envoyer nouveau message', array('controller' => 'Etudiants','action' => 'envoyerNvEtud')); ?>"></li>
            <li><?php echo $this->Html->link('Lire mes messages', array('controller' => 'Etudiants','action' => 'lireMsgEtud')); ?>"></li>
        </ul>
    </li>
<!-- Fin FADILI mustapha -->

 <!---      Finance  :      -->

 <?php
}
elseif($us['role']=='respofinance')
{
?> 

                             <li class="header">Espace Finance</li>

   <!-- role Finance -->
<!-- Yassir -->

    <li class="treeview">
        <a href="#">
            <i class="fa fa-table"></i> <span>Commandes événementielles</span>
            <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
            <li><a href="<?php echo $this->Url->build('/respofinances/addyassir/'); ?>"><i class="fa fa-circle-o"></i>Nouvelle commande</a></li>
            <li><a href="<?php echo $this->Url->build('/respofinances/suivicommande/'); ?>"><i class="fa fa-circle-o"></i>Suivi des commandes</a></li>

        </ul>
    </li>
           <!-- Fin yassir -->
<!-- DEBUT samsam -->
    <li class="treeview">
        <a href="#">
            <i class="fa fa-table"></i> <span>Vacations</span>
            <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
            <li><a href="<?php echo $this->Url->build('/respofinances/Mesvacations/'); ?>"><i class="fa fa-circle-o"></i>Liste Des vacations</a></li>
            <li><a href="<?php echo $this->Url->build('/respofinances/addVac/'); ?>"><i class="fa fa-circle-o"></i>ajouter Vacation</a></li>
            <li><a href="<?php echo $this->Url->build('/respofinances/indexPaimentVac'); ?>"><i class="fa fa-circle-o"></i>paiements</a></li>
            <li><a href="<?php echo $this->Url->build('/respofinances/indexPrelevements'); ?>"><i class="fa fa-circle-o"></i>Prélèvements</a></li>

        </ul>
    </li>
    <li class="treeview">
        <a href="#">
            <i class="fa fa-table"></i> <span>Heures Supplimentaires</span>
            <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
            <li><a href="<?php echo $this->Url->build('/respofinances/Mesheures/'); ?>"><i class="fa fa-circle-o"></i>Liste Des heures supp</a></li>
            <li><a href="<?php echo $this->Url->build('/respofinances/addSup/'); ?>"><i class="fa fa-circle-o"></i>ajouter heures supp</a></li>
            <li><a href="<?php echo $this->Url->build('/respofinances/indexPaimentsup'); ?>"><i class="fa fa-circle-o"></i>paiements</a></li>
            <li><a href="<?php echo $this->Url->build('/respofinances/indexPrelevementsup'); ?>"><i class="fa fa-circle-o"></i>Prélèvements</a></li>
        </ul>
    </li>
    <li class="treeview">
        <a href="#">
            <i class="fa fa-table"></i> <span>Mission</span>
            <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
            <li><a href="<?php echo $this->Url->build('/'); ?>"><i class="fa fa-circle-o"></i> Proffesseur permanent</a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo $this->Url->build('/respofinances/afficherMissionProf'); ?>"><i class="fa fa-circle-o"></i> Afficher les missions</a></li>
                    <li><a href="<?php echo $this->Url->build('/respofinances/AjouterMissionProf'); ?>"><i class="fa fa-circle-o"></i> Ajouter une Mission</a></li>
                </ul>
            </li>
            <li><a href="<?php echo $this->Url->build('/'); ?>"><i class="fa fa-circle-o"></i> Fonctionnaire </a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo $this->Url->build('/respofinances/afficherMissionFonc'); ?>"><i class="fa fa-circle-o"></i> Afficher les missions</a></li>
                    <li><a href="<?php echo $this->Url->build('/respofinances/AjouterMissionFonc'); ?>"><i class="fa fa-circle-o"></i> Ajouter une Mission</a></li>
                </ul>
            </li>
        </ul>
    </li>

    <!--- fin samsam -->

            <!-- debut bouhsise -->

    <!-- Bouhsise -->
    <!--DEBUT  Kawtar -->
    <li class="treeview">
        <a href="#">
            <i class="fa fa-table"></i> <span>Gestion d'abscences</span>
            <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
            <li><?php echo $this->Html->link('Demander une absence ',array('controller' => 'Respofinances','action' => 'demanderabsences')); ?>"></li>

        </ul>
        <!--Fin Kawtar -->
    </li>

    <!--DEBUT  Bouhsise -->
    <li class="treeview">
        <a href="#">
            <i class="fa fa-table"></i> <span>Gestion des demandes</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">

            <li><li><?php echo $this->Html->link('Déposer une demande ', array('controller' => 'Respofinances','action' => 'demanderDocFct')); ?>"></li></li>
            <li><li><?php echo $this->Html->link('Liste des documents déposés ', array('controller' => 'Respofinances','action' => 'etatDemandeFct  ')); ?>"></li></li>
        </ul>
    </li>
    <!-- Fin Bouhsise -->
<!-- Fin Bouhsise -->

<!-- mustapha  FADILI-->



    <!-- Fin mustapha FADILI -->
<?php
}
elseif($us['role']=='respostock')
{
?> 

 <!---      Stock  :      -->

                             <li class="header">Espace Stock</li>

   <!-- role Stock -->

<!--DEBUT  JELAIDI -->
    <li class="treeview">
        <a href="#">
            <i class="fa fa-archive" aria-hidden="true"></i><span>Gestion des Articles</span> <i class="fa fa-angle-left pull-right"></i> 
        </a>
        <ul class="treeview-menu">
        <li><?php echo $this->Html->link('Afficher Articles', array('controller' => 'Respostocks','action' => 'index_articles')); ?></li>
		<li><?php echo $this->Html->link('Ajouter Articles', array('controller' => 'Respostocks','action' => 'add_articles')); ?></li>
        </ul>
    </li>
		<li class="treeview">
        <a href="#">
            <i class="fa fa-cart-plus" aria-hidden="true"></i><span>Gestion des Commandes</span> <i class="fa fa-angle-left pull-right"></i> 
        </a>
        <ul class="treeview-menu">
        <li><?php echo $this->Html->link('Afficher Commandes', array('controller' => 'Respostocks','action' => 'index_commandes')); ?></li>
		<li><?php echo $this->Html->link('Ajouter Commandes', array('controller' => 'Respostocks','action' => 'add_commandes')); ?></li>
        <li><?php echo $this->Html->link('envoyer Commande', array('controller' => 'Respostocks','action' => 'envoieCom')); ?></li>
		</ul>
    </li>
	<li class="treeview">
        <a href="#">
            <i class="fa fa-truck" aria-hidden="true"></i><span>Gestion des Fournisseurs</span> <i class="fa fa-angle-left pull-right"></i> 
        </a>
        <ul class="treeview-menu">
        <li><?php echo $this->Html->link('Afficher Fournisseurs', array('controller' => 'Respostocks','action' => 'index_fournisseurs')); ?></li>
		<li><?php echo $this->Html->link('Ajouter Fournisseurs', array('controller' => 'Respostocks','action' => 'add_fournisseurs')); ?></li>
        </ul>
    </li>
	<li class="treeview">
        <a href="#">
            <i class="fa fa-dashboard"></i><span>Gestion des Magasins</span> <i class="fa fa-angle-left pull-right"></i> 
        </a>
        <ul class="treeview-menu">
        <li><?php echo $this->Html->link('Afficher Magasins', array('controller' => 'Respostocks','action' => 'index_magasins')); ?></li>
		<li><?php echo $this->Html->link('Ajouter Magasins', array('controller' => 'Respostocks','action' => 'add_magasins')); ?></li>
        </ul>
    </li>
	<li class="treeview">
        <a href="#">
            <i class="fa fa-table"></i><span>Gestion des Mouvements</span> <i class="fa fa-angle-left pull-right"></i> 
        </a>
        <ul class="treeview-menu">
        <li><?php echo $this->Html->link('Afficher Mouvements', array('controller' => 'Respostocks','action' => 'index_mouvements')); ?></li>
		<li><?php echo $this->Html->link('Ajouter Mouvements', array('controller' => 'Respostocks','action' => 'add_mouvements')); ?></li>
        </ul>
    </li>
	<li class="treeview">
	    <a href="#">
             <i class="fa fa-clone" aria-hidden="true"></i><span>Gestion des Categories</span> <i class="fa fa-angle-left pull-right"></i> 
        </a>
        <ul class="treeview-menu">
        <li><?php echo $this->Html->link('Afficher Categories', array('controller' => 'Respostocks','action' => 'index_stockcategories')); ?></li>
		<li><?php echo $this->Html->link('Ajouter Categories', array('controller' => 'Respostocks','action' => 'add_stockcategories')); ?></li>
        </ul>
    </li>
<!--FIN  JELAIDI -->
<!--DEBUT  Kawtar -->
    <li class="treeview">
        <a href="#">
            <i class="fa fa-table"></i> <span>Gestion d'abscences</span>
            <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
            <li><?php echo $this->Html->link('Demander une absence ',array('controller' => 'Respostocks','action' => 'demanderabsences')); ?>"></li>

        </ul>
        <!--Fin Kawtar -->
    </li>



    <!--DEBUT  Bouhsise -->
    <li class="treeview">
        <a href="#">
            <i class="fa fa-table"></i> <span>Gestion des demandes</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">

            <li><li><?php echo $this->Html->link('Déposer une demande ', array('controller' => 'Respostocks','action' => 'demanderDocFct')); ?>"></li></li>
            <li><li><?php echo $this->Html->link('Liste des documents déposés ', array('controller' => 'Respostocks','action' => 'etatDemandeFct  ')); ?>"></li></li>
        </ul>
    </li>
    <!-- Bouhsise -->

<?php
}
elseif($us['role']=='respobiblio')
{
?> 
<!---      Bibliothèques  :      -->

                             <li class="header">Espace Bibliothèques</li>

   <!-- role Bibliothèques -->

<!--DEBUT  BADR -->
   <li class="treeview">
        <a href="<?php echo $this->Url->build('/Respobiblios/index'); ?>"><i class="glyphicon glyphicon-home"></i> Accueil</a>
    </li>
    <li class="treeview">
        <a href="<?php echo $this->Url->build('/Respobiblios/badrStatistique'); ?>"><i class="glyphicon glyphicon-stats"></i> Statistiques</a>
    </li>
    <li class="treeview">
        <a href="#">
            <i class="glyphicon glyphicon-th-list"></i><span>Consulter ouvrages</span> <i class="glyphicon glyphicon-chevron-right pull-right"></i> 
        </a>
        <ul class="treeview-menu">
        <li><?php echo $this->Html->link('Tout les ouvrages',array('controller' =>'Respobiblios','action'=>'badrconsulterOuvrages')); ?></li>
        <li><?php echo $this->Html->link('Ouvrages par catégorie',array('controller' =>'Respobiblios','action'=>'badrconsulterOuvragessimple')); ?></li>
        </ul>
    </li>
    <li class="treeview">
        <a href="<?php echo $this->Url->build('/Respobiblios/majdaajouteremprunte'); ?>"><i class="glyphicon glyphicon-plus-sign"></i> Ajouter un emprunt</a>
    </li>
    <li class="treeview">
        <a href="<?php echo $this->Url->build('/Respobiblios/majdaannuleremprunte'); ?>"><i class="glyphicon glyphicon-minus-sign"></i> annuler un emprunt</a>
    </li>
    <li class="treeview">
        <a href="<?php echo $this->Url->build('/Respobiblios/badrajouterOuvrages'); ?>"><i class="glyphicon glyphicon-book"></i> Ajouter ouvrages</a>
    </li>
    <li class="treeview">
        <a href="#">
            <i class="glyphicon glyphicon-list-alt"></i><span>Ouvrages résérvées</span> <i class="glyphicon glyphicon-chevron-right pull-right"></i> 
        </a>
        <ul class="treeview-menu">
        <li><?php echo $this->Html->link('Tout les Ouvrages',array('controller' =>'Respobiblios','action'=>'hajarreservation')); ?></li>
        <li><?php echo $this->Html->link('Professeurs vacataires',array('controller' =>'Respobiblios','action'=>'hajarreservationProfVacataire')); ?></li>
        <li><?php echo $this->Html->link('Professeurs permanents',array('controller' =>'Respobiblios','action'=>'hajarreservationProfPermanent')); ?></li>
        <li><?php echo $this->Html->link('Etudiants',array('controller' =>'Respobiblios','action'=>'hajarreservationEtudiant')); ?></li>
        </ul>
    </li>
    <li>
        <a href="#">
            <i class="glyphicon glyphicon-list-alt"></i><span>Ouvrages empruntées</span> <i class="glyphicon glyphicon-chevron-right pull-right"></i> 
        </a>
        <ul class="treeview-menu">
        <li><?php echo $this->Html->link('Tout les Ouvrages',array('controller' =>'Respobiblios','action'=>'majdaemprunte')); ?></li>
        <li><?php echo $this->Html->link('Professeurs vacataires',array('controller' =>'Respobiblios','action'=>'majdaemprunteProfVacataire')); ?></li>
        <li><?php echo $this->Html->link('Professeurs permanents',array('controller' =>'Respobiblios','action'=>'majdaemprunteProfPermanent')); ?></li>
        <li><?php echo $this->Html->link('Etudiants',array('controller' =>'Respobiblios','action'=>'majdaemprunteEtudiant')); ?></li>
        </ul>
    </li>
    <li class="treeview">
        <a href="<?php echo $this->Url->build('/Respobiblios/badrparametres'); ?>"><i class="glyphicon glyphicon-edit"></i> Paramétres</a>
    </li>
    <li class="treeview">
        <a href="#">
            <i class="glyphicon glyphicon-hdd"></i><span>Historiques</span> <i class="glyphicon glyphicon-chevron-right pull-right"></i> 
        </a>
        <ul class="treeview-menu">
        <li><?php echo $this->Html->link('Historique pour chaque ouvrages',array('controller' =>'Respobiblios','action'=>'badrhistorique')); ?></li>
        <li><?php echo $this->Html->link('Historique par Catégorie',array('controller' =>'Respobiblios','action'=>'badrhistoriqueCategorie')); ?></li>
        <li><?php echo $this->Html->link('Historique de chaques utilisateurs',array('controller' =>'Respobiblios','action'=>'badrehistoriqueutilisateur')); ?></li>
        </ul>
    </li>

    <!--- fin badr -->
    <!--DEBUT  kawtar-->
    <li><?php echo $this->Html->link('Demander une absence ',array('controller' => 'Respobiblios','action' => 'demanderabsences')); ?>"></li>
    <!--Fin kawtar-->

    </ul>
    </li>

    <!-- Bouhsise -->
    <li class="treeview">
        <a href="#">
            <i class="fa fa-dashboard"></i> <span>Gestion des demandes</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">

            <li><li><?php echo $this->Html->link('Déposer une demande ', array('controller' => 'Respobiblios','action' => 'demanderDocFct')); ?>"></li></li>
            <li><li><?php echo $this->Html->link('Liste des documents déposés ', array('controller' => 'Respobiblios','action' => 'etatDemandeFct  ')); ?>"></li></li>
        </ul>
    </li>
    <!-- Fin Bouhsise -->
<?php
}
elseif($us['role']=='respobureauordre')
{
?> 
<!---     Bureau d'ordre  :      -->

                             <li class="header">Espace Bureau d'ordre  :</li>

   <!-- role Bureau d'ordre  : -->


<!--DEBUT  Ibtihal -->
    <li class="treeview">
        <a href="#">
            <i class="fa fa-fw fa-envelope"></i> <span>Courriers Reçus</span>
            <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">



            <li><?php echo $this->Html->link('Liste Courriers Reçus',array('controller'=>'Respobureauordres','action'=>'indexArrivee')); ?>"></li>
            <li><?php echo $this->Html->link('Recherche courriers Reçus',array('controller'=>'Respobureauordres','action'=>'trierArrivee')); ?>"></li>
            <li><?php echo $this->Html->link('Ajouter courriers Reçus',array('controller'=>'Respobureauordres','action'=>'addArrivee')); ?>"></li>
            <li><?php echo $this->Html->link('Expediteurs',array('controller'=>'Respobureauordres','action'=>'indexexpediteur')); ?>"></li>
        </ul>
        <a href="#">
            <i class="fa fa-fw fa-envelope-o"></i> <span>Courriers Departs</span>
            <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">

            <li><?php echo $this->Html->link('Liste Courriers Envoyés',array('controller'=>'Respobureauordres','action'=>'indexDepart1')); ?>"></li>
            <li><?php echo $this->Html->link('Recherche courriers Envoyés',array('controller'=>'Respobureauordres','action'=>'trierDepart')); ?>"></li>
            <li><?php echo $this->Html->link('Ajouter courriers Envoyés',array('controller'=>'Respobureauordres','action'=>'addDepart1')); ?>"></li>

            <li><?php echo $this->Html->link('Destinataires',array('controller'=>'Respobureauordres','action'=>'indexDest')); ?>"></li>

        </ul>
        <a href="#">
            <i class="fa fa-fw fa-reply-all"></i> <span>Envoyer Courrier</span>
            <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">


            <li><?php echo $this->Html->link('Envoyer courrier par email',array('controller'=>'Respobureauordres','action'=>'envoyer')); ?>"></li>
        </ul>
    </li>
<!--FIN  Ibtihal -->
<!-- Bouhsise -->
<!--DEBUT  Kawtar -->
    <li class="treeview">
        <a href="#">
            <i class="fa fa-table"></i> <span>Gestion d'abscences</span>
            <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
            <li><?php echo $this->Html->link('Demander une absence ',array('controller' => 'Respobureauordres','action' => 'demanderabsences')); ?>"></li>

        </ul>
        <!--Fin Kawtar -->
    </li>

    <!--DEBUT  Bouhsise -->
    <li class="treeview">
        <a href="#">
            <i class="fa fa-table"></i> <span>Gestion des demandes</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">

            <li><li><?php echo $this->Html->link('Déposer une demande ', array('controller' => 'Respobureauordres','action' => 'demanderDocFct')); ?>"></li></li>
            <li><li><?php echo $this->Html->link('Liste des documents déposés ', array('controller' => 'Respobureauordres','action' => 'etatDemandeFct  ')); ?>"></li></li>
        </ul>
    </li>
    <!-- Fin Bouhsise -->
<?php
}
elseif($us['role']=='respostage')
{
?> 


    <li class="header">Espacee stage  :</li>

    <!-- role respostage  : -->

    <!-- Hamdi -->
    <li class="treeview">
        <a href="#">
            <i class="fa fa-table"></i> <span>Stages</span>
            <i class="fa fa-angle-left pull-right"></i>
        </a>






    <ul class="treeview-menu">
        <li><?php echo $this->Html->link('Gestion des certificats',array('controller'=>'respostages','action'=>'indexCertificats')); ?>"></li>
        <li><?php echo $this->Html->link('Ajouter certificat',array('controller'=>'respostages','action'=>'addCertificats')); ?>"></li>
        <li class="treeview">


        <li class="treeview">
            <a href="#">
                <i class="fa fa-folder"></i> <span>Certificats des etudiants</span>
                <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
                <li><?php echo $this->Html->link('Tous',array('controller'=>'respostages','action'=>'indexCertificatsEtudiants')); ?>"></li>
                <li><?php echo $this->Html->link('GI',array('controller'=>'respostages','action'=>'indexCertificatsEtudiants/2')); ?>"></li>
                <li><?php echo $this->Html->link('GE',array('controller'=>'respostages','action'=>'indexCertificatsEtudiants/3')); ?>"></li>
                <li><?php echo $this->Html->link('GRT',array('controller'=>'respostages','action'=>'indexCertificatsEtudiants/1')); ?>"></li>
                <li><?php echo $this->Html->link('GPE',array('controller'=>'respostages','action'=>'indexCertificatsEtudiants/4')); ?>"></li>
                <li><?php echo $this->Html->link('TC',array('controller'=>'respostages','action'=>'indexCertificatsEtudiants/6')); ?>"></li>
                <li><?php echo $this->Html->link('CP',array('controller'=>'respostages','action'=>'indexCertificatsEtudiants/5')); ?>"></li>

            </ul>
        </li>

    </ul>

    </li>



    <!-- Fin hamdi -->
    <!--DEBUT  Bouhsise -->
    <li class="treeview">
        <a href="<?php echo $this->Url->build('/pages/tables/simple'); ?>"><i class="fa fa-edit"></i> Demande Document</a>
    </li>
    <!-- Bouhsise -->


    <?php
}
elseif($us['role']=='ingenieur')
{
?>
    <!---     ingenieur:      -->

    <li class="header">Espacee ingenieur  :</li>

    <!-- role ingenieur  : -->

     <!-- Bhihi -->
    <li class="treeview">
        <?php echo $this->Html->link('Home', array('controller' => 'ingenieurs','action' => 'index')); ?>
        <a href="#">
            <i class="fa fa-table"></i> <span style="color:#FFFFFF">actualite</span>
            <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">

            <li><?php echo $this->Html->link('Ajouter actualite', array('controller' => 'ingenieurs','action' => 'ajouterActualites')); ?></li>
            <li><?php echo $this->Html->link('La listes des actualites', array('controller' => 'ingenieurs','action' => 'afficherActualites')); ?></li>



        </ul>
    </li>
    <li class="treeview">

        <a href="#">
            <i class="fa fa-table"></i> <span style="color:#FFFFFF">Evenement</span>
            <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">

            <li><?php echo $this->Html->link('Ajouter evenement', array('controller' => 'ingenieurs','action' => 'ajouterEvenements')); ?></li>
            <li><?php echo $this->Html->link('La listes des evenements', array('controller' => 'ingenieurs','action' => 'afficherEvenements')); ?></li>



        </ul>
    </li>
    <li class="treeview">

        <a href="#">
            <i class="fa fa-table"></i> <span style="color:#FFFFFF">Statistiques</span>
            <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">

            <li><?php echo $this->Html->link('Ajouter Statistique', array('controller' => 'ingenieurs','action' => 'ajouterLaureats')); ?></li>
            <li><?php echo $this->Html->link('La listes des laureats', array('controller' => 'ingenieurs','action' => 'afficherLaureats')); ?></li>



        </ul>
    </li>
        <!--VERSION 2 -->

    <li class="treeview">

        <a href="#">
            <i class="fa fa-table"></i> <span style="color:#FFFFFF">Gallery</span>
            <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
            <li class="treeview">

                <a href="#">
                    <i class="fa fa-table"></i> <span style="color:#FFFFFF">Photo</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    
                    <li><?php echo $this->Html->link('ajouter photo', array('controller' => 'ingenieurs','action' => 'ajouterImages')); ?></li>
                    <li><?php echo $this->Html->link('Liste des photo', array('controller' => 'ingenieurs','action' => 'afficherImages')); ?></li>

                </ul>
            </li>
            <li class="treeview">

                <a href="#">
                    <i class="fa fa-table"></i> <span style="color:#FFFFFF">Video</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    
                    <li><?php echo $this->Html->link('ajouter video', array('controller' => 'ingenieurs','action' => 'ajouterVideos')); ?></li>
                    <li><?php echo $this->Html->link('Liste des video', array('controller' => 'ingenieurs','action' => 'afficherVideos')); ?></li>

                </ul>
            </li>
        </ul>
    </li>
    <li class="treeview">

        <a href="#">
            <i class="fa fa-table"></i> <span style="color:#FFFFFF">Parascolaire</span>
            <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
            <li class="treeview">

                <a href="#">
                    <i class="fa fa-table"></i> <span style="color:#FFFFFF">Club</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    
                    <li><?php echo $this->Html->link('ajouter club', array('controller' => 'ingenieurs','action' => 'ajouterClubs')); ?></li>
                    <li><?php echo $this->Html->link('Liste des clubs', array('controller' => 'ingenieurs','action' => 'afficherClubs')); ?></li>

                </ul>
            </li>
            <li class="treeview">

                <a href="#">
                    <i class="fa fa-table"></i> <span style="color:#FFFFFF">Actualité Club</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">

                    <li><?php echo $this->Html->link('Ajouter Actualité', array('controller' => 'ingenieurs','action' => 'ajouterActualiteClubs')); ?></li>
                    <li><?php echo $this->Html->link('La listes des actualités', array('controller' => 'ingenieurs','action' => 'afficherActualiteClubs')); ?></li>
                </ul>
            </li>
        </ul>
    </li>

    <!-- Fin Bhihi -->

<?php }

elseif ($us['role']=='respopersonel')
{
    ?>
    <li class="header">Espace Personnel</li>

    <!--YOUNESS BOUHSISE-->
    <li class="treeview">
        <a href="#">
            <i class="fa fa-dashboard"></i> <span>Gestion Profs Permanents</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <!--YOUNESS BOUHSISE-->
        <ul class="treeview-menu">
            <li><?php echo $this->Html->link('Acceuil', array('controller' => 'Respopersonels','action' => ' index')); ?>"></li></li>
            <li><?php echo $this->Html->link('Départements', array('controller' => 'Respopersonels','action' => ' listerProfsParDepar')); ?>"></li></li>
            <li><?php echo $this->Html->link('Grades', array('controller' => 'Respopersonels','action' => ' listerGrade')); ?></li></li>
            <li><?php echo $this->Html->link('Activités ', array('controller' => 'Respopersonels','action' => 'afficherEvent')); ?>"></li></li>
            <li><?php echo $this->Html->link('Consultation Document ', array('controller' => 'Respopersonels','action' => 'voirDocument')); ?></li></li>
            <li><?php echo $this->Html->link('ChercherProfesseur ', array('controller' => 'Respopersonels','action' => 'rechercher')); ?></li></li>
            <li><?php echo $this->Html->link('Lister Disciplines ', array('controller' => 'Respopersonels','action' => 'listerDisciplines')); ?></li></li>
            <li><?php echo $this->Html->link('Demande Modification Données' ,array('controller' => 'Respopersonels','action' => 'voirDemandes')); ?></li>
            <li><?php echo $this->Html->link('Les statistiques' ,array('controller' => 'Respopersonels','action' => 'statipermanent')); ?></li>
            </a>
            <!-- SARIH debut-->
            <li class="treeview">
                <a href="#">
                    <i class="glyphicon glyphicon-wrench"></i> <span>gestion de compte</span> <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><?php echo $this->Html->link('créer un compte ',array('controller' => 'Respopersonels','action' => 'addper')); ?>"></li>
                    <li><?php echo $this->Html->link('Liste Professeurs Permanents',array('controller' => 'Respopersonels','action' => 'permanentsliste')); ?>"></li>
                </ul>
            </li>
            <!-- SARIH fin-->

        </ul>
        <!--YOUNESS BOUHSISE-->
        <!--IBTISSAM EL ABBADI-->

        <!--YOUNESS BOUHSISE-->
    <li class="treeview">
        <a href="#">
            <i class="fa fa-dashboard"></i> <span>Professeurs Vacataires</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">

            <!-- <li><?php echo $this->Html->link('Afficher vacataireDepartement',array('controller' => 'Respopersonels','action' => 'listepardep')); ?>"></li>-->
            <!--<li><?php echo $this->Html->link('Listes Par Disciplines',array('controller' => 'Respopersonels','action' => 'listepardiscipline')); ?>"></li>-->
            <!--<li><?php echo $this->Html->link('Rechercher un vacataire par somme',array('controller' => 'Respopersonels','action' => 'rechercheparinput')); ?>"></li>-->
            <!-- <li><?php echo $this->Html->link('Rechercher un departement par son id',array('controller' => 'Respopersonels','action' => 'rechercheparinputdepartement')); ?>"></li>-->

            <!--<li><?php echo $this->Html->link('Afficher vacataires/Departements',array('controller' => 'VacatairesDepartements')); ?>"></li>-->
            <li><?php echo $this->Html->link('Afficher vacataires',array('controller' => 'Respopersonels','action'=>'vacataires')); ?>"></li>
            <!--<li><?php echo $this->Html->link('Afficher Departements',array('controller' => 'Departements')); ?>"></li>-->
            <li><?php echo $this->Html->link('Les statistiques',array('controller' => 'Respopersonels','action'=>'statistiquesVac')); ?>"></li>
            <li><?php echo $this->Html->link('Les statistiques sur grades et département',array('controller' => 'Respopersonels','action'=>'statvacs')); ?>"></li>

<!-- Mouna -->

            <li><?php echo $this->Html->link('les demandes de modification des données',array('controller' => 'Respopersonels','action' => 'voirDemandes')); ?>"></li>

            <!-- fin mouna -->

            <!--jadid omar ray-->

            <!--<li><?php echo $this->Html->link('lister par departements',array('controller' => 'respopersonels','action'=>'listerpardepartements')); ?>"></li>-->


            <li><?php echo $this->Html->link('Affecter un vacataire',array('controller' => 'respopersonels','action'=>'Affecteraundepart')); ?>"></li>


            <li><?php echo $this->Html->link('Affecter le Grade',array('controller' => 'respopersonels','action'=>'affectergrades')); ?>"></li>

            <li><?php echo $this->Html->link('Documents',array('controller' => 'respopersonels','action'=>'vacatairedocument')); ?>"></li>

            <li><?php echo $this->Html->link('Validation des données',array('controller' => 'Profvacataires','action'=>'viewMounaaa')); ?>"></li>
            <li><?php echo $this->Html->link('Demande Modification Données',array('controller' => 'Respopersonels','action' => 'voirDemandesVac')); ?>"></li>


            <!-- SARIH debut-->


            <a href="#">
                <i class="glyphicon glyphicon-wrench"></i> <span>gestion de compte</span> <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
                <li><?php echo $this->Html->link('créer un compte ',array('controller' => 'Respopersonels','action' => 'addvac')); ?>"></li>


                <li><?php echo $this->Html->link('Liste Professeurs Vacataires',array('controller' => 'Respopersonels','action' => 'vacatairesliste')); ?>"></li>

            </ul>

            </li>
            <!--SARUH FIN -->
            </li>

        </ul>
    </li>



    <li class="treeview">
        <a href="#">
            <i class="fa fa-dashboard"></i> <span>Fonctionnaires</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
            <!-- SARIH debut-->
            <li class="treeview">
                <a href="#">
                    <i class="glyphicon glyphicon-wrench"></i> <span>gestion de compte</span> <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><?php echo $this->Html->link('créer un compte ',array('controller' => 'Respopersonels','action' => 'addfonc')); ?>"></li>
                    <li><?php echo $this->Html->link('Liste des fonctionnaires',array('controller' => 'Respopersonels','action' => 'fonctionnairesliste')); ?>"></li>
                </ul>
            </li>
            <!-- SARIH fin-->
            <li>
            
                <li><?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-list-ol')).'Les fonctionnaires par Service ',array('controller' => 'Respopersonels','action' => 'mouvementService'), array('escape' => false)); ?>"></li>
                <li><?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-th-list')).'Les activités des fonctionnaires ',array('controller' => 'Respopersonels','action' => 'listerActivites'), array('escape' => false)); ?>"></li>
                <li><?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-th-list')).'Groupement des événements ',array('controller' => 'Respopersonels','action' => 'afficherFonctEvent'), array('escape' => false)); ?>"></li>
                <li><?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-list-ol')).'Mouvement des fonctionnaires ', array('controller' => 'Respopersonels','action' => 'listerMouvement'), array('escape' => false)); ?>"></li>
                <li><?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-search')).'Rechercher un fonctionnaire ', array('controller' => 'Respopersonels','action' => 'fetch'), array('escape' => false)); ?>"></li>
                <li><?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-file')).'Consultation des Documents ', array('controller' => 'Respopersonels','action' => 'voirDocumentFct'), array('escape' => false)); ?>"></li>
                <li><?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-list-ol')).'Les fonctionnaires par Grade ', array('controller' => 'Respopersonels','action' => 'listerFonctGrade'), array('escape' => false)); ?>"></li>
                <li><?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-bar-chart')).'Statistiques ', array('controller' => 'Respopersonels','action' => 'statistiquesFct'), array('escape' => false)); ?>"></li>
                


            
            </li>
			<!--mouna jellouli-->
            <li><?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-list-ol')).'Visualiser les Grades ',array('controller' => 'Respopersonels','action' => 'evolutionGrades'), array('escape' => false)); ?>"></li><!--fin mouna jellouli-->

        </ul>
    </li>
    </li>
    <!--IBTISSAM EL ABBADI-->

    <!-- AYOUGIL KAOUTAR ABSENCE -->
    <li class="treeview">
        <a href="#">
            <i class="fa fa-dashboard"></i> <span>Gestion des abscences</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
            <li><?php echo $this->Html->link('Traiter une absence ',array('controller' => 'Respopersonels','action' => 'gestionabsences')); ?>"></li>

            <li><?php echo $this->Html->link('Lister toutes les absences ',array('controller' => 'Respopersonels','action' => 'listerAbsences')); ?>"></li>

            <li><?php echo $this->Html->link('Trier Les absences par date',array('controller' => 'Respopersonels','action' => 'listerAbsencesParDate')); ?>"></li>

            <li><?php echo $this->Html->link('Rechercher une absence ',array('controller' => 'Respopersonels','action' => 'abs')); ?>"></li>
        </ul></li>

    <!-- AYOUGIL KAOUTAR FIN ABSENCE -->


<?php }

elseif ($us['role']=='admin')
{ ?>
    <li class="treeview">
        <a href="#">
            <i class="fa fa-table"></i> <span>Espace scolarité</span>
            <i class="fa fa-angle-left pull-right"></i>
        </a>
    <ul class="treeview-menu">
    <li><?php echo $this->Html->link('Génération code Note',array('controller'=>'resposcolarites','action'=>'generationcode')); ?>"></li>
    <li><a href="<?php echo $this->Url->build('/resposcolarites/liste-pv-notes'); ?>"><i class="fa fa-circle-o"></i>Liste de pv </a></li>
    <li><a href="<?php echo $this->Url->build('/resposcolarites/liste-classes'); ?>"><i class="fa fa-circle-o"></i>Télécharger Liste Pv</a></li>
    <li class="treeview">
        <a href="#">
            <i class="fa fa-cog"></i> <span>Gestion de concours</span> <i class="fa fa-angle-right pull-right"></i>
        </a>
        <ul class="treeview-menu">
            <li><?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-th-list')).'Liste des préinscris', array('controller' => 'Resposcolarites','action' => 'listePreinscris'), array('escape' => false)); ?></li>
            <li><?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-list')).'Liste des préselectionés', array('controller' => 'Resposcolarites','action' => 'listePreselectiones'), array('escape' => false)); ?></li>
            <li><?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-list-ol')).'Liste des admis', array('controller' => 'Resposcolarites','action' => 'listeAdmisGeneral'), array('escape' => false)); ?></li>
            <li><?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-list-ol')).'Listes d\'attente', array('controller' => 'Resposcolarites','action' => 'listesAttentes'), array('escape' => false)); ?></li>
            <li><?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-bar-chart')).'Statistiques', array('controller' => 'Resposcolarites','action' => 'StatistiquesPreinscriptions'), array('escape' => false)); ?></li>
        </ul>

    </li>
    <li class="treeview">
        <a href="#">
            <i class="fa fa-users"></i> <span>Gestion des Etudiants</span> <i class="fa fa-angle-right pull-right"></i>
        </a>
        <ul class="treeview-menu">
            <li><?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-list')).'Liste des etudiants', array('controller' => 'Resposcolarites','action' => 'etudiantListe'), array('escape' => false)); ?></li>

        </ul>




    <!-- Fin Abdessamad -->

    <!-- Zouhir -->

    <li class="treeview">
        <a href="#">
            <i class="fa fa-fw fa-sitemap"></i>
            <span>Classes</span>
            <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
            <li><?php echo $this->Html->link('Modules',array('controller'=>'resposcolarites','action'=>'aitsaidAfficherClasse')); ?>"></li>
        </ul>
    </li>
    <li class="treeview">
        <a href="#">
            <i class="fa fa-fw fa-file"></i>
            <span>Notes</span>
            <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
            <li><?php echo $this->Html->link('Affichage notes',array('controller'=>'resposcolarites','action'=>'affichagenote')); ?>"></li>
            <li><?php echo $this->Html->link('Liste d\'admis',array('controller'=>'resposcolarites','action'=>'listeadmis')); ?>"></li>

        </ul>
    </li>
</li>
    <!-- Fin Zouhir -->
    </ul>
    </li>
    <li class="treeview">
        <a href="#">
            <i class="fa fa-table"></i> <span>Espace Finance</span>
            <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-table"></i> <span>Commandes événementielles</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo $this->Url->build('/respofinances/suivicommande/'); ?>"><i class="fa fa-circle-o"></i>Suivi des commandes</a></li>

                </ul>
            </li>
            <!-- Fin yassir -->
            <!-- DEBUT samsam -->
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-table"></i> <span>Vacations</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo $this->Url->build('/respofinances/Mesvacations/'); ?>"><i class="fa fa-circle-o"></i>Liste Des vacations</a></li>
                    <li><a href="<?php echo $this->Url->build('/respofinances/indexPaimentVac'); ?>"><i class="fa fa-circle-o"></i>paiements</a></li>
                    <li><a href="<?php echo $this->Url->build('/respofinances/indexPrelevements'); ?>"><i class="fa fa-circle-o"></i>Prélèvements</a></li>

                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-table"></i> <span>Heures Supplimentaires</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo $this->Url->build('/respofinances/Mesheures/'); ?>"><i class="fa fa-circle-o"></i>Liste Des heures supp</a></li>
                    <li><a href="<?php echo $this->Url->build('/respofinances/indexPaimentsup'); ?>"><i class="fa fa-circle-o"></i>paiements</a></li>
                    <li><a href="<?php echo $this->Url->build('/respofinances/indexPrelevementsup'); ?>"><i class="fa fa-circle-o"></i>Prélèvements</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-table"></i> <span>Mission</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo $this->Url->build('/'); ?>"><i class="fa fa-circle-o"></i> Proffesseur permanent</a>
                        <ul class="treeview-menu">
                            <li><a href="<?php echo $this->Url->build('/respofinances/afficherMissionProf'); ?>"><i class="fa fa-circle-o"></i> Afficher les missions</a></li>
                        </ul>
                    </li>
                    <li><a href="<?php echo $this->Url->build('/'); ?>"><i class="fa fa-circle-o"></i> Fonctionnaire </a>
                        <ul class="treeview-menu">
                            <li><a href="<?php echo $this->Url->build('/respofinances/afficherMissionFonc'); ?>"><i class="fa fa-circle-o"></i> Afficher les missions</a></li>
                        </ul>
                    </li>
                </ul>
            </li>

            <!--- fin samsam -->


        </ul>
    </li>



    <!-- role Finance -->
    <!-- Yassir -->



    <li class="treeview">
        <a href="#">
            <i class="fa fa-table"></i> <span>Espace Stock</span>
            <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">

                       <!-- role Stock -->

            <!--DEBUT  JELAIDI -->
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-archive" aria-hidden="true"></i><span>Gestion des Articles</span> <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><?php echo $this->Html->link('Afficher Articles', array('controller' => 'Respostocks','action' => 'index_articles')); ?></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-cart-plus" aria-hidden="true"></i><span>Gestion des Commandes</span> <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><?php echo $this->Html->link('Afficher Commandes', array('controller' => 'Respostocks','action' => 'index_commandes')); ?></li>
               </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-truck" aria-hidden="true"></i><span>Gestion des Fournisseurs</span> <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><?php echo $this->Html->link('Afficher Fournisseurs', array('controller' => 'Respostocks','action' => 'index_fournisseurs')); ?></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-dashboard"></i><span>Gestion des Magasins</span> <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><?php echo $this->Html->link('Afficher Magasins', array('controller' => 'Respostocks','action' => 'index_magasins')); ?></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-table"></i><span>Gestion des Mouvements</span> <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><?php echo $this->Html->link('Afficher Mouvements', array('controller' => 'Respostocks','action' => 'index_mouvements')); ?></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-clone" aria-hidden="true"></i><span>Gestion des Categories</span> <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><?php echo $this->Html->link('Afficher Categories', array('controller' => 'Respostocks','action' => 'index_stockcategories')); ?></li>
                </ul>
            </li>
            <!--FIN  JELAIDI -->

</ul>
    </li>


    <li class="treeview">
        <a href="#">
            <i class="fa fa-table"></i> <span>Espace Bibilothèque</span>
            <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">

            <!---      Bibliothèques  :      -->


            <!-- role Bibliothèques -->

            <!--DEBUT  BADR -->
            <li class="treeview">
                <a href="<?php echo $this->Url->build('/Respobiblios/index'); ?>"><i class="glyphicon glyphicon-home"></i> Accueil</a>
            </li>
            <li class="treeview">
                <a href="<?php echo $this->Url->build('/Respobiblios/badrStatistique'); ?>"><i class="glyphicon glyphicon-stats"></i> Statistiques</a>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="glyphicon glyphicon-th-list"></i><span>Consulter ouvrages</span> <i class="glyphicon glyphicon-chevron-right pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><?php echo $this->Html->link('Tout les ouvrages',array('controller' =>'Respobiblios','action'=>'badrconsulterOuvrages')); ?></li>
                    <li><?php echo $this->Html->link('Ouvrages par catégorie',array('controller' =>'Respobiblios','action'=>'badrconsulterOuvragessimple')); ?></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="glyphicon glyphicon-list-alt"></i><span>Ouvrages résérvées</span> <i class="glyphicon glyphicon-chevron-right pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><?php echo $this->Html->link('Tout les Ouvrages',array('controller' =>'Respobiblios','action'=>'hajarreservation')); ?></li>
                    <li><?php echo $this->Html->link('Professeurs vacataires',array('controller' =>'Respobiblios','action'=>'hajarreservationProfVacataire')); ?></li>
                    <li><?php echo $this->Html->link('Professeurs permanents',array('controller' =>'Respobiblios','action'=>'hajarreservationProfPermanent')); ?></li>
                    <li><?php echo $this->Html->link('Etudiants',array('controller' =>'Respobiblios','action'=>'hajarreservationEtudiant')); ?></li>
                </ul>
            </li>
            <li>
                <a href="#">
                    <i class="glyphicon glyphicon-list-alt"></i><span>Ouvrages empruntées</span> <i class="glyphicon glyphicon-chevron-right pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><?php echo $this->Html->link('Tout les Ouvrages',array('controller' =>'Respobiblios','action'=>'majdaemprunte')); ?></li>
                    <li><?php echo $this->Html->link('Professeurs vacataires',array('controller' =>'Respobiblios','action'=>'majdaemprunteProfVacataire')); ?></li>
                    <li><?php echo $this->Html->link('Professeurs permanents',array('controller' =>'Respobiblios','action'=>'majdaemprunteProfPermanent')); ?></li>
                    <li><?php echo $this->Html->link('Etudiants',array('controller' =>'Respobiblios','action'=>'majdaemprunteEtudiant')); ?></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="<?php echo $this->Url->build('/Respobiblios/badrparametres'); ?>"><i class="glyphicon glyphicon-edit"></i> Paramétres</a>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="glyphicon glyphicon-hdd"></i><span>Historiques</span> <i class="glyphicon glyphicon-chevron-right pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><?php echo $this->Html->link('Historique pour chaque ouvrages',array('controller' =>'Respobiblios','action'=>'badrhistorique')); ?></li>
                    <li><?php echo $this->Html->link('Historique par Catégorie',array('controller' =>'Respobiblios','action'=>'badrhistoriqueCategorie')); ?></li>
                    <li><?php echo $this->Html->link('Historique de chaques utilisateurs',array('controller' =>'Respobiblios','action'=>'badrehistoriqueutilisateur')); ?></li>
                </ul>
            </li>

            <!--- fin badr -->

        </ul>
    </li>





    <li class="treeview">
        <a href="#">
            <i class="fa fa-table"></i> <span>Espace Bureau Ordre </span>
            <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">


            <!--DEBUT  Ibtihal -->
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-fw fa-envelope"></i> <span>Courriers Reçus</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">



                    <li><?php echo $this->Html->link('Liste Courriers Reçus',array('controller'=>'Respobureauordres','action'=>'indexArrivee')); ?>"></li>
                    <li><?php echo $this->Html->link('Recherche courriers Reçus',array('controller'=>'Respobureauordres','action'=>'trierArrivee')); ?>"></li>
                    <li><?php echo $this->Html->link('Expediteurs',array('controller'=>'Respobureauordres','action'=>'indexexpediteur')); ?>"></li>
                </ul>
                <a href="#">
                    <i class="fa fa-fw fa-envelope-o"></i> <span>Courriers Departs</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">

                    <li><?php echo $this->Html->link('Liste Courriers Envoyés',array('controller'=>'Respobureauordres','action'=>'indexDepart1')); ?>"></li>
                    <li><?php echo $this->Html->link('Recherche courriers Envoyés',array('controller'=>'Respobureauordres','action'=>'trierDepart')); ?>"></li>

                    <li><?php echo $this->Html->link('Destinataires',array('controller'=>'Respobureauordres','action'=>'indexDest')); ?>"></li>

                </ul>


            </li>
            <!--FIN  Ibtihal -->
            <!-- Bouhsise -->

    </ul>
    </li>





    <li class="treeview">
        <a href="#">
            <i class="fa fa-table"></i> <span>Espace Stage </span>
            <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">


            <!-- Hamdi -->
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-table"></i> <span>Stages</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>

                <ul class="treeview-menu">
                    <li><?php echo $this->Html->link('Gestion des certificats',array('controller'=>'respostages','action'=>'indexCertificats')); ?>"></li>
                    <li class="treeview">


                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-folder"></i> <span>Certificats etudiants</span>
                            <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu">
                            <li><?php echo $this->Html->link('Tous',array('controller'=>'respostages','action'=>'indexCertificatsEtudiants')); ?>"></li>
                            <li><?php echo $this->Html->link('GI',array('controller'=>'respostages','action'=>'indexCertificatsEtudiants/2')); ?>"></li>
                            <li><?php echo $this->Html->link('GE',array('controller'=>'respostages','action'=>'indexCertificatsEtudiants/3')); ?>"></li>
                            <li><?php echo $this->Html->link('GRT',array('controller'=>'respostages','action'=>'indexCertificatsEtudiants/1')); ?>"></li>
                            <li><?php echo $this->Html->link('GPE',array('controller'=>'respostages','action'=>'indexCertificatsEtudiants/4')); ?>"></li>
                            <li><?php echo $this->Html->link('TC',array('controller'=>'respostages','action'=>'indexCertificatsEtudiants/6')); ?>"></li>
                            <li><?php echo $this->Html->link('CP',array('controller'=>'respostages','action'=>'indexCertificatsEtudiants/5')); ?>"></li>

                        </ul>
                    </li>

                </ul>

            </li>




        </ul>
    </li>





    <li class="treeview">
        <a href="#">
            <i class="fa fa-table"></i> <span>Espace Ingenieur </span>
            <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">

            <!-- role ingenieur  : -->

            <!-- Bhihi -->
            <li class="treeview">
                <?php echo $this->Html->link('Home', array('controller' => 'ingenieurs','action' => 'index')); ?>
                <a href="#">
                    <i class="fa fa-table"></i> <span style="color:#FFFFFF">actualite</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">

                    <li><?php echo $this->Html->link('La listes des actualites', array('controller' => 'ingenieurs','action' => 'afficherActualites')); ?></li>



                </ul>
            </li>
            <li class="treeview">

                <a href="#">
                    <i class="fa fa-table"></i> <span style="color:#FFFFFF">Evenement</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">

                    <li><?php echo $this->Html->link('La listes des evenements', array('controller' => 'ingenieurs','action' => 'afficherEvenements')); ?></li>



                </ul>
            </li>
            <li class="treeview">

                <a href="#">
                    <i class="fa fa-table"></i> <span style="color:#FFFFFF">Statistiques</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">

                    <li><?php echo $this->Html->link('La listes des laureats', array('controller' => 'ingenieurs','action' => 'afficherLaureats')); ?></li>



                </ul>
            </li>
            <!--VERSION 2 -->

            <li class="treeview">

                <a href="#">
                    <i class="fa fa-table"></i> <span style="color:#FFFFFF">Gallery</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li class="treeview">

                        <a href="#">
                            <i class="fa fa-table"></i> <span style="color:#FFFFFF">Photo</span>
                            <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu">

                            <li><?php echo $this->Html->link('Liste des photo', array('controller' => 'ingenieurs','action' => 'afficherImages')); ?></li>

                        </ul>
                    </li>
                    <li class="treeview">

                        <a href="#">
                            <i class="fa fa-table"></i> <span style="color:#FFFFFF">Video</span>
                            <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu">

                            <li><?php echo $this->Html->link('Liste des video', array('controller' => 'ingenieurs','action' => 'afficherVideos')); ?></li>

                        </ul>
                    </li>
                </ul>
            </li>
            <li class="treeview">

                <a href="#">
                    <i class="fa fa-table"></i> <span style="color:#FFFFFF">Parascolaire</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li class="treeview">

                        <a href="#">
                            <i class="fa fa-table"></i> <span style="color:#FFFFFF">Club</span>
                            <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu">

                            <li><?php echo $this->Html->link('Liste des clubs', array('controller' => 'ingenieurs','action' => 'afficherClubs')); ?></li>

                        </ul>
                    </li>
                    <li class="treeview">

                        <a href="#">
                            <i class="fa fa-table"></i> <span style="color:#FFFFFF">Actualité Club</span>
                            <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu">

                            <li><?php echo $this->Html->link('La listes des actualités', array('controller' => 'ingenieurs','action' => 'afficherActualiteClubs')); ?></li>
                        </ul>
                    </li>
                </ul>
            </li>


        </ul>
    </li>








            <li class="treeview">
                <a href="#">
                    <i class="fa fa-table"></i> <span>Espace Personnel </span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">

                    <!--YOUNESS BOUHSISE-->
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-dashboard"></i> <span>Gestion Profs Permanents</span> <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <!--YOUNESS BOUHSISE-->
                        <ul class="treeview-menu">
                            <li><?php echo $this->Html->link('Acceuil', array('controller' => 'Respopersonels','action' => ' index')); ?>"></li></li>
                            <li><?php echo $this->Html->link('Départements', array('controller' => 'Respopersonels','action' => ' listerProfsParDepar')); ?>"></li></li>
                            <li><?php echo $this->Html->link('Grades', array('controller' => 'Respopersonels','action' => 'listerPassage')); ?></li></li>
                            <li><?php echo $this->Html->link('Activités ', array('controller' => 'Respopersonels','action' => 'afficherEvent')); ?>"></li></li>
                            <li><?php echo $this->Html->link('Consultation Document ', array('controller' => 'Respopersonels','action' => 'voirDocument')); ?></li></li>
                            <li><?php echo $this->Html->link('ChercherProfesseur ', array('controller' => 'Respopersonels','action' => 'rechercher')); ?></li></li>
                            <li><?php echo $this->Html->link('Lister Disciplines ', array('controller' => 'Respopersonels','action' => 'listerDisciplines')); ?></li></li>
                            <li><?php echo $this->Html->link('Lister Grades ', array('controller' => 'Respopersonels','action' => 'listerGrade1')); ?></li></li>
                            </a>
                            <!-- SARIH debut-->
                            <li class="treeview">
                                <a href="#">
                                    <i class="glyphicon glyphicon-wrench"></i> <span>gestion de compte</span> <i class="fa fa-angle-left pull-right"></i>
                                </a>
                                <ul class="treeview-menu">
                                    <li><?php echo $this->Html->link('Liste Professeurs Permanents',array('controller' => 'Respopersonels','action' => 'permanentsliste')); ?>"></li>
                                </ul>
                            </li>
                            <!-- SARIH fin-->

                        </ul>
                        <!--YOUNESS BOUHSISE-->
                        <!--IBTISSAM EL ABBADI-->

                        <!--YOUNESS BOUHSISE-->
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-dashboard"></i> <span>Professeurs Vacataires</span> <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu">

                            <!-- <li><?php echo $this->Html->link('Afficher vacataireDepartement',array('controller' => 'Respopersonels','action' => 'listepardep')); ?>"></li>-->
                            <!--<li><?php echo $this->Html->link('Listes Par Disciplines',array('controller' => 'Respopersonels','action' => 'listepardiscipline')); ?>"></li>-->
                            <!--<li><?php echo $this->Html->link('Rechercher un vacataire par somme',array('controller' => 'Respopersonels','action' => 'rechercheparinput')); ?>"></li>-->
                            <!-- <li><?php echo $this->Html->link('Rechercher un departement par son id',array('controller' => 'Respopersonels','action' => 'rechercheparinputdepartement')); ?>"></li>-->

                            <!--<li><?php echo $this->Html->link('Afficher vacataires/Departements',array('controller' => 'VacatairesDepartements')); ?>"></li>-->
                            <li><?php echo $this->Html->link('Afficher vacataires',array('controller' => 'Respopersonels','action'=>'vacataires')); ?>"></li>
                            <!--<li><?php echo $this->Html->link('Afficher Departements',array('controller' => 'Departements')); ?>"></li>-->

                            <!-- Mouna -->

                            <li><?php echo $this->Html->link('les demandes de modification des données',array('controller' => 'Respopersonels','action' => 'voirDemandes')); ?>"></li>
<li><?php echo $this->Html->link('les statistiques ',array('controller' => 'Respopersonels','action' => 'statistiquesVac')); ?>"></li>
                            <!-- fin mouna -->

                            <!--jadid omar ray-->

                            <!--<li><?php echo $this->Html->link('lister par departements',array('controller' => 'respopersonels','action'=>'listerpardepartements')); ?>"></li>-->





                            <li><?php echo $this->Html->link('Documents',array('controller' => 'respopersonels','action'=>'vacatairedocument')); ?>"></li>



                            <!-- SARIH debut-->


                            <a href="#">
                                <i class="glyphicon glyphicon-wrench"></i> <span>gestion de compte</span> <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">


                                <li><?php echo $this->Html->link('Liste Professeurs Vacataires',array('controller' => 'Respopersonels','action' => 'vacatairesliste')); ?>"></li>

                            </ul>

                            </li>
                            <!--SARUH FIN -->
                            </li>

                        </ul>
                    </li>



                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-dashboard"></i> <span>Fonctionnaires</span> <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu">
                            <!-- SARIH debut-->
                            <li class="treeview">
                                <a href="#">
                                    <i class="glyphicon glyphicon-wrench"></i> <span>gestion de compte</span> <i class="fa fa-angle-left pull-right"></i>
                                </a>
                                <ul class="treeview-menu">
                                    <li><?php echo $this->Html->link('Liste des fonctionnaires',array('controller' => 'Respopersonels','action' => 'fonctionnairesliste')); ?>"></li>
                                </ul>
                            </li>
                            <!-- SARIH fin-->
                            <li><?php echo $this->Html->link('Les fonctionnaires par Service ',array('controller' => 'Respopersonels','action' => 'mouvementService')); ?>"></li>
                            <li><?php echo $this->Html->link('Les activités des fonctionnaires ',array('controller' => 'Respopersonels','action' => 'listerActivites')); ?>"></li>
                            <li><?php echo $this->Html->link('Groupement des événements ',array('controller' => 'Respopersonels','action' => 'afficherFonctEvent')); ?>"></li>
                            <li><li><?php echo $this->Html->link('Mouvement des fonctionnaires ', array('controller' => 'Respopersonels','action' => 'listerMouvement')); ?>"></li></li>
                            <li><li><?php echo $this->Html->link('Rechercher un fonctionnaire ', array('controller' => 'Respopersonels','action' => 'fetch')); ?>"></li></li>
                            <li><li><?php echo $this->Html->link('Consultation des Documents ', array('controller' => 'Respopersonels','action' => 'voirDocumentFct')); ?>"></li></li>
                            <li><li><?php echo $this->Html->link('Les fonctionnaires par Grade ', array('controller' => 'Respopersonels','action' => 'listerFonctGrade')); ?>"></li></li>
                            <!--mouna jellouli-->
                            <li><?php echo $this->Html->link('Visualiser les Grades ',array('controller' => 'Respopersonels','action' => 'evolutionGrades')); ?>"></li><!--fin mouna jellouli-->
<li><?php echo $this->Html->link('Avancement des Grades ',array('controller' => 'Respopersonels','action' => 'passageEchelonAdmin')); ?>"></li>
                        </ul>
                    </li>
                    </li>
                    <!--IBTISSAM EL ABBADI-->

                    <!-- AYOUGIL KAOUTAR ABSENCE -->
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-dashboard"></i> <span>Gestion des abscences</span> <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu">
                            <li><?php echo $this->Html->link('Traiter une absence ',array('controller' => 'Respopersonels','action' => 'gestionabsences')); ?>"></li>

                            <li><?php echo $this->Html->link('Lister toutes les absences ',array('controller' => 'Respopersonels','action' => 'listerAbsences')); ?>"></li>

                            <li><?php echo $this->Html->link('Trier Les absences par date',array('controller' => 'Respopersonels','action' => 'listerAbsencesParDate')); ?>"></li>

                            <li><?php echo $this->Html->link('Rechercher une absence ',array('controller' => 'Respopersonels','action' => 'abs')); ?>"></li>
                        </ul></li>

                    <!-- AYOUGIL KAOUTAR FIN ABSENCE -->

















            /****/

        </ul>
    </li>
    <?php
}}
?>