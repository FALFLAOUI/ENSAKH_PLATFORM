<ol class="breadcrumb">
    <li>
        <?= $this->Html->link('<i class="fa fa-dashboard"></i> ' . __('Retour'), ['action' => 'listerFonctGrade'], ['escape' => false])?>
    </li>
</ol>
<?php
array_unshift($nomtab,"--Choisir le grade convenable--");  ?>
<section class="content">
    <center>
        <div class="panel panel-primary" style="width:800px">
            <div class="panel-heading">

                <div class="row">
                    <h3 class="panel-title"><i class="fa fa-fw fa-info-circle"></i>Affecter un grade à un fonctionnaire</h3>
                </div>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col_md-6 col-lg-6">
<center>
        <?= $this->Form->create($profpermanentsGrade) ?>
        <fieldset>
            <?php
            echo $this->Html->script('remplirCombox.js');
            ?> <label >Nom Fonctionnaire</label><br />
            <select style='color:black;height:35px;width:460px' name="nomFct">
                <?php
                for($i=1;$i<=count($tabNomProf);$i++)
                {
                    ?><option style='color:black' value=<?= $tabNomProf[$i]?> ><?=$tabNomProf[$i]?> </option><?php
                }?>
            </select>
            <label >Prénom Fonctionnaire</label><br />
            <select style='color:black;height:35px;width:460px' name="prenomFct">
                <?php
                for($i=1;$i<=count($tabPrenomProf);$i++)
                {
                    ?><option style='color:black' value=<?= $tabPrenomProf[$i]?> ><?=$tabPrenomProf[$i]?> </option><?php
                }?>
            </select><?php
            echo $this->Form->control('grade', ['options' => $nomtab,'label'=>'Grade','style'=>'width:460px','placeholder'=> "Choisissez le Grade",'onchange'=>"populate('grade','echelle')"]);
            echo $this->Form->control('echelle', ['options'=>"",'label'=>'Echelle','style'=>'width:460px','onchange'=>"populateBis('echelle','echelon','grade')"]);
            echo $this->Form->control('echelon', ['options' => "",'label'=>'Echelon','style'=>'width:460px']);?>


            <label style='margin-left:10px'>Date De Prise :</label>
            <div class="row">
                <div class="col-md-6">
                    <div class="box-body">
                        <!-- Date dd/mm/yyyy -->
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                </div>
                                <input style="width:410px" name="date_grade"type="text" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </fieldset>
        <?= $this->Form->button(__('Submit')) ?>
        <?= $this->Form->end() ?>
</center>
                    </div>
                </div>
            </div>
        </div>
    </center>
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

