<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Les réservations des Etudiants
  </h1>
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">La Liste des ouvrages réservés</h3>
          <div class="box-tools">
            <form action="<?php echo $this->Url->build(); ?>" method="POST">
              <div class="input-group input-group-sm">
                <?php echo $this->Form->input('categorie', ['label' => '','empty'=> '(choisissez une Catégorie)','options' => $categorie, 'onchange'=>"this.form.submit()"]);?>
              </div>
            </form>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body table-responsive no-padding">
          <table class="table table-hover">
            <tr>
              <th><?= $this->Paginator->sort('code appogée') ?></th>
              <th><?= $this->Paginator->sort('nom & prenom') ?></th>
              <th><?= $this->Paginator->sort('titre ouvrage') ?></th>
              <th><?= $this->Paginator->sort("numéro d'Inventaire") ?></th>
              <th><?= $this->Paginator->sort('date Réservation') ?></th>
              <th><?= $this->Paginator->sort('délai') ?></th>
            </tr>
            <?php for ($i=0;$i<count($reservation);$i++) { ?>
              <tr>
                <td><?= $reservation[$i]['username'] ?></td>
                <td><?= $nom[$i] ?></td>
                <td><?= $reservation[$i]['titre'] ?></td>
                <td><?= $reservation[$i]['numInventaire'] ?></td>
                <td><?= $reservation[$i]['dateReservation'] ?></td>
                <td><?= $reservation[$i]['delai'] ?></td>
              </tr>
            <?php } ?>
          </table>
        </div>
        <!-- /.box-body -->

      </div>
      <!-- /.box -->
    </div>
  </div>
</section>
<!-- /.content -->
