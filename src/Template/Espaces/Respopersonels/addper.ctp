
<section class="content" style='width:600px'>
    <div class="box box-primary">
        <div class="box-header width-border">
            <?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="profpermanents form large-9 medium-8 columns content">


    <?= $this->Form->create(null,array('role'=>'form','enctype'=>'multipart/form-data')) ?>
  <?php echo $this->Html->script('remplirCombox.js');?>
    <div class="form-style-3" id="menu" class="panel panel-primary">

    <fieldset class="panel-heading" >
   <div style="width:500px;margin-left:8px" >
        <div class="panel-heading"><legend>Informations de Connexion !</legend></div></div>
             <?php
  echo $this->Form->input('username',array(
                        'label' => "Nom d'utilisateur ",
                        'style' => "background-color:#FFFFFF  ; color:#1B4F72;width:500px;font-weight:bold",
                        ));?>
             <?php echo $this->Form->input('password',array(
                        'label' => 'Mot de passe',
                        'style' => "background-color:#FFFFFF; color:#1B4F72;width:500px; font-weight:bold",
                        ));?>
    </fieldset>
    </div>

        </div>
    </div>
</section>
<section class="content" style='width:600px'>
    <div class="box box-primary">
        <div class="box-header width-border">
        <div class="form-style-3" id="contenu" class="panel panel-primary">
     <fieldset class="panel-heading">
        <legend>Saisir les informations du professeur :</legend>
        <?php
         echo $this->Form->input('somme',array('label'=>'SOMME',
                        'style' => "background-color:#FFFFFF; color:#1B4F72;width:460px; font-weight:bold",
                        ));
            echo $this->Form->input('nom_prof',array(
                        'style' => "background-color:#FFFFFF; color:#1B4F72;width:460px; font-weight:bold",
                        'label'=> "NOM PROFESSEUR",
                        ));
            echo $this->Form->input('prenom_prof',array(
                        'style' => "background-color:#FFFFFF; color:#1B4F72;width:460px; font-weight:bold",
                        'label'=> "PRENOM PROFESSEUR",
                        ));
echo $this->Form->input('nomdepart', ['label'=>'NOM DEPARTEMENT','options' => $nomtab,'style'=>"width:460px"]);
echo $this->Form->input('Poste',array(
                                                                  'style' => "background-color:#FFFFFF; color:#1B4F72; width:460px;font-weight:bold",
                                                                  'label'=> "POSTE DEPARTEMENT",
                                                                  ));
            ?> <label style='margin-left:10px'>DATE D'AFFECTATION AU DEPARTEMENT:</label>
            <div style="width:410px">
            <div class="row">
                    <div class="col-md-6">
                         <div class="box-body">
                          <!-- Date dd/mm/yyyy -->
                          <div class="form-group">

                              <div class="input-group">
                              <div class="input-group-addon">

                                <i class="fa fa-calendar"></i>
                              </div>

                              <input style="width:410px" name="date_debut" type="text" class="form-control"  data-inputmask="'alias': 'dd/mm/yyyy'" data-mask>
                            </div>
                              </div></div>
                        </div>
                     </div>
                  </div><?php


                                                                  $nomtab=['Choisissez le grade convenable','Professeur d\'Enseignement Supérieur','Professeur Habilité','Professeur Assistant'];
                                                                  echo $this->Form->control('grade', ['options' => $nomtab,'label'=>'GRADE','style'=>'width:460px','placeholder'=> "Choisissez le Grade",'onchange'=>"populate('grade','sousgrade')"]);
                                                                                   echo $this->Form->control('sousgrade', ['options'=>"",'label'=>'CLASSE','style'=>'width:460px','onchange'=>"populateBis('sousgrade','echelon','grade')"]);
                                                                               echo $this->Form->control('echelon', ['options' => "",'label'=>'ECHELON','style'=>'width:460px']);?>
                                                                               <label style='margin-left:10px'>Date AFFECTATION GRADE:</label>
                                                                              <div style="width:410px">
                                                                              <div class="row">
                                                                                      <div class="col-md-6">
                                                                                           <div class="box-body">
                                                                                            <!-- Date dd/mm/yyyy -->
                                                                                            <div class="form-group">

                                                                                                <div class="input-group">
                                                                                                <div class="input-group-addon">

                                                                                                  <i class="fa fa-calendar"></i>
                                                                                                </div>

                                                                                                <input style="width:410px" name="date_grade"type="text" class="form-control"  data-inputmask="'alias': 'dd/mm/yyyy'" data-mask>
                                                                                              </div>
                                                                                                </div></div>
                                                                                          </div>
                                                                                       </div>
                                                                                    </div><?php
               echo $this->Form->input('salaire',array('label'=>'SALAIRE',
                        'style' => "background-color:#FFFFFF; color:#1B4F72;width:460px;font-weight:bold",
                        ));

            echo $this->Form->input('etat',array(
                        'style' => "background-color:#FFFFFF; color:#1B4F72;width:410px; font-weight:bold",
                        'type'=>"hidden",
                        'value'=>"Actif",
                        ));?>
             <label style='margin-left:10px'>DATE DE RECRUTEMENT</label>
                        <div style="width:410px">
                        <div class="row">
                                <div class="col-md-6">
                                     <div class="box-body">
                                      <!-- Date dd/mm/yyyy -->
                                      <div class="form-group">

                                          <div class="input-group">
                                          <div class="input-group-addon">

                                            <i class="fa fa-calendar"></i>
                                          </div>

                                          <input style="width:410px" name="dateRecrut"type="text" class="form-control"  data-inputmask="'alias': 'dd/mm/yyyy'" data-mask>
                                        </div>
                                          </div></div>
                                    </div>
                                 </div>
                              </div>
            <?php echo $this->Form->input('age',array('label'=>'AGE',
                        'style' => "background-color:#FFFFFF; color:#1B4F72;width:460px; font-weight:bold",
                        ));
            echo $this->Form->input('diplome',array('label'=>'DIPLOME',
                        'style' => "background-color:#FFFFFF; color:#1B4F72;width:460px; font-weight:bold",
                        ));
            echo $this->Form->input('specialite',array(
                        'style' => "background-color:#FFFFFF; color:#1B4F72;width:460px; font-weight:bold",
                        'label'=>"SPECIALITE",
                        ));
            echo $this->Form->input('universite',array(
                        'style' => "background-color:#FFFFFF; color:#1B4F72; width:460px;font-weight:bold",
                        'label'=>"UNIVERSITE",
                        ));
            echo $this->Form->input('autresdiplomes',array(
                        'style' => "background-color:#FFFFFF; color:#1B4F72;width:460px; font-weight:bold",
                        'label'=> "AUTRES DIPLOMES",
                        ));
             ?>
            <div class="form-group" style='width:460px' >
                            <label>SITUATION FAMILIALE</label>
                            <?php
                            echo  "<select name=\"situation_familiale\" id='situation_familiale' class=\"form-control\" >
                            <option value='marié'>Marié(e)</option>
                          <option value='Célibataire '>Célibataire </option>
                          <option value='Divorcé'>Divorcé(e) </option>
                          <option value='Veuf'>Veuf(ve) </option>

                         <select>"; ?>
                        </div>


            <label style='width:460px'>DATE DE NAISSANCE:</label>
            <div style="width:410px">
            <div class="row">
                    <div class="col-md-6">
                         <div class="box-body">
                          <!-- Date dd/mm/yyyy -->
                          <div class="form-group">

                              <div class="input-group">
                              <div class="input-group-addon">

                                <i class="fa fa-calendar"></i>
                              </div>

                              <input style="width:412px" name="dateNaissance"type="text" class="form-control"  data-inputmask="'alias': 'dd/mm/yyyy'" data-mask>
                            </div>
                              </div></div>
                        </div>
                     </div>
                     </div>
                  </div><?php

            echo $this->Form->input('Lieu_Naissance',array('label'=>'LIEU NAISSANCE',
                        'style' => "background-color:#FFFFFF; color:#1B4F72;width:460px; font-weight:bold",
                        ));
            echo $this->Form->input('CIN',array('label'=>'CIN',
                        'style' => "background-color:#FFFFFF; color:#1B4F72;width:460px; font-weight:bold",
                        ));
            echo $this->Form->input('email_prof',array(
                        'style' => "background-color:#FFFFFF; color:#1B4F72;width:460px; font-weight:bold",
                        'label'=> "EMAIL",
                        ));
            echo $this->Form->input('phone',array(
                        'style' => "background-color:#FFFFFF; color:#1B4F72;width:460px; font-weight:bold",
                        'label' => "TELEPHONE",
                        ));


            echo $this->Form->input('photo',array(
                        'style' => "background-color:#FFFFFF; color:#1B4F72;width:460px; font-weight:bold",
                        'type'=>"file",
                        'label'=>"PHOTO DE PROFIL "
                        ));

        ?>
    </fieldset>
    <?= $this->Form->button(__('Valider')) ?>
    <?= $this->Form->end() ?>
</div>
        </div>
        </div>
</section>
<?php
$this->Html->css([
    'AdminLTE./plugins/daterangepicker/daterangepicker-bs3',
    'AdminLTE./plugins/iCheck/all',
    'AdminLTE./plugins/colorpicker/bootstrap-colorpicker.min',
    'AdminLTE./plugins/timepicker/bootstrap-timepicker.min',
    'AdminLTE./plugins/select2/select2.min',
  ],
  ['block' => 'css']);

$this->Html->script([
  'AdminLTE./plugins/select2/select2.full.min',
  'AdminLTE./plugins/input-mask/jquery.inputmask',
  'AdminLTE./plugins/input-mask/jquery.inputmask.date.extensions',
  'AdminLTE./plugins/input-mask/jquery.inputmask.extensions',
  'https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js',
  'AdminLTE./plugins/daterangepicker/daterangepicker',
  'AdminLTE./plugins/colorpicker/bootstrap-colorpicker.min',
  'AdminLTE./plugins/timepicker/bootstrap-timepicker.min',
  'AdminLTE./plugins/iCheck/icheck.min',
],
['block' => 'script']);
?>
<?php $this->start('scriptBotton'); ?>
<script>
  $(function () {
    //Initialize Select2 Elements
    $(".select2").select2();

    //Datemask dd/mm/yyyy
    $("#datemask").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"});
    //Datemask2 mm/dd/yyyy
    $("#datemask2").inputmask("mm/dd/yyyy", {"placeholder": "mm/dd/yyyy"});
    //Money Euro
    $("[data-mask]").inputmask();

    //Date range picker
    $('#reservation').daterangepicker();
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A'});
    //Date range as a button
    $('#daterange-btn').daterangepicker(
        {
          ranges: {
            'Today': [moment(), moment()],
            'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
            'Last 7 Days': [moment().subtract(6, 'days'), moment()],
            'Last 30 Days': [moment().subtract(29, 'days'), moment()],
            'This Month': [moment().startOf('month'), moment().endOf('month')],
            'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
          },
          startDate: moment().subtract(29, 'days'),
          endDate: moment()
        },
        function (start, end) {
          $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
        }
    );

    //iCheck for checkbox and radio inputs
    $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
      checkboxClass: 'icheckbox_minimal-blue',
      radioClass: 'iradio_minimal-blue'
    });
    //Red color scheme for iCheck
    $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
      checkboxClass: 'icheckbox_minimal-red',
      radioClass: 'iradio_minimal-red'
    });
    //Flat red color scheme for iCheck
    $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
      checkboxClass: 'icheckbox_flat-green',
      radioClass: 'iradio_flat-green'
    });

    //Colorpicker
    $(".my-colorpicker1").colorpicker();
    //color picker with addon
    $(".my-colorpicker2").colorpicker();

    //Timepicker
    $(".timepicker").timepicker({
      showInputs: false
    });
  });
</script>
<?php $this->end(); ?>

