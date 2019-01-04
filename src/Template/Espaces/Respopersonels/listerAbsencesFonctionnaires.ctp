
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
  Absences des fonctionnaires
    <div class="pull-right"><?= $this->Html->link(__('New'), ['action' => 'add'], ['class'=>'btn btn-success btn-xs']) ?></div>
  </h1>
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title"><?= __('List of') ?> Absences </h3>
          <div class="box-tools">
            <form action="<?php echo $this->Url->build(); ?>" method="POST">
              <div class="input-group input-group-sm"  style="width: 180px;">
                <input type="text" name="search" class="form-control" placeholder="<?= __('Fill in to start search') ?>">
                <span class="input-group-btn">
                <button class="btn btn-info btn-flat" type="submit"><?= __('Filter') ?></button>
                </span>
              </div>
            </form>
          </div>
            </div>

        <!-- /.box-header -->
        <div class="box-body table-responsive no-padding">
          <table class="table table-hover">
            <tr>
              <th>ID fonctionnaire</th>
              <th>nom fonctionnaire</th>
              <th>nombre absence</th>
            </tr>
              
<?php foreach ($fonctionnaireAbsences as $fonctionnaireAbsence): ?>
             
<tr>
<td><?php echo $fonctionnaireAbsence['id']; ?></td> 
<td><?php echo $fonctionnaireAbsence['nom_fct']; ?></td> 
<td><?php echo $fonctionnaireAbsence['nbr_absence']; ?></td> 

</tr>

<?php endforeach; ?>
          </table>
        </div>
        <!-- /.box-body -->
        <div class="box-footer clearfix">
          <ul class="pagination pagination-sm no-margin pull-right">
          </ul>
        </div>
      </div>
      <!-- /.box -->
    </div>
  </div>
</section>

