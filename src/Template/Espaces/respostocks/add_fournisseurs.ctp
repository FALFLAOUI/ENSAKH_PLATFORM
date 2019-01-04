<section class="content-header">
  <h1>
    Fournisseur
    <small><?= __('Ajouter') ?></small>
  </h1>
  <ol class="breadcrumb">
    <li>
    <?= $this->Html->link('<i class="fa fa-dashboard"></i> '.__('Retour'), ['action' => 'index_fournisseurs'], ['escape' => false]) ?>
    </li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <!-- left column -->
    <div class="col-md-12">
      <!-- general form elements -->
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title"><?= __('Formulaire') ?></h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <?= $this->Form->create($fournisseur, array('role' => 'form')) ?>
          <div class="box-body">
          <?php
            echo $this->Form->input('stock_categorie', ['options' => $donne]);    
            echo $this->Form->input('nom_fournisseur');
            echo $this->Form->input('prenom_fournisseur');
            echo $this->Form->input('label_fournisseur');
            echo $this->Form->input('adresse',['required' => true]);
            echo $this->Form->input('email',['required' => true]);
          ?>
          </div>
          <!-- /.box-body -->
          <div class="box-footer">
            <?= $this->Form->button(__('Sauvegarder')) ?>
          </div>
        <?= $this->Form->end() ?>
      </div>
    </div>
  </div>
</section>
