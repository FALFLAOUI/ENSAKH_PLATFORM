<section class="content-header">
  <h1>
    Evenement
    <small><?= __('Add') ?></small>
  </h1>
  <ol class="breadcrumb">
    <li>
    <?= $this->Html->link('<i class="fa fa-dashboard"></i> '.__('Back'), ['action' => 'index'], ['escape' => false]) ?>
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
          <h3 class="box-title"><?= __('Form') ?></h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <?= $this->Form->create($evenement, array('role' => 'form')) ?>
          <div class="box-body">
          <?php
            echo $this->Form->input('titre');
            echo $this->Form->input('date');
            echo $this->Form->input('adresse');
            echo $this->Form->input('tele');
            echo $this->Form->input('texte');
            echo $this->Form->input('website');
            echo $this->Form->input('membre');
            echo $this->Form->input('invite');
            echo $this->Form->input('photo');
          ?>
          </div>
          <!-- /.box-body -->
          <div class="box-footer">
            <?= $this->Form->button(__('Save')) ?>
          </div>
        <?= $this->Form->end() ?>
      </div>
    </div>
  </div>
</section>
