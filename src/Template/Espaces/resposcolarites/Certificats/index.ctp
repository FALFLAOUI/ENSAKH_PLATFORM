<?php?>
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Certificats
    <div class="pull-right"><?= $this->Html->link(_(''),['action' => 'addCertificats'], ['class'=>'btn fa fa-plus btn-success btn-xs']) ?></div>
  </h1>
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title"><?= __('List of') ?> Certificats</h3>
          <div class="box-tools">
            <form action="<?php echo $this->Url->build(); ?>" method="POST">
              <div class="input-group input-group-sm"  style="width: 180px;">
                <input type="text" name="search" class="form-control" placeholder="<?= __('chercher') ?>">
                <span class="input-group-btn">
                <button class="btn btn-info btn-flat" type="submit"> Rechercher </button>
                   </span>
              </div>
            </form>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body table-responsive no-padding">
          <table class="table table-hover">
            <tr>
              <th><?= $this->Paginator->sort('id') ?></th>
              <th><?= $this->Paginator->sort('type') ?></th>
              <th><?= $this->Paginator->sort('nombre maximale') ?></th>  
              <th><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($certificats as $certificat): ?>
              <tr>
                <td><?= $this->Number->format($certificat->id) ?></td>
                <td><?= h($certificat->type) ?></td>
                <td> <?= h($certificat->nombre_max) ?> </td>
                <td class="actions" style="white-space:nowrap">
                  <?= $this->Html->link(__('Afficher'), ['action' => 'viewCertificats', $certificat->id], ['class'=>'btn btn-info btn-xs']) ?>
                  <?= $this->Html->link(__('Editer'), ['action' => 'editCertificats', $certificat->id], ['class'=>'btn btn-warning btn-xs']) ?>
                  <?= $this->Form->postLink(__('Supprimer'), ['action' => 'deleteCertificats', $certificat->id], ['confirm' => __('Confirm to delete this entry?'), 'class'=>'btn btn-danger btn-xs']) ?>
                </td>
              </tr>
            <?php endforeach; ?>
          </table>
        </div>
        <!-- /.box-body -->
        <div class="box-footer clearfix">
          <ul class="pagination pagination-sm no-margin pull-right">
            <?php echo $this->Paginator->numbers(); ?>
          </ul>
        </div>
      </div>
      <!-- /.box -->
    </div>
  </div>
</section>
<!-- /.content -->
