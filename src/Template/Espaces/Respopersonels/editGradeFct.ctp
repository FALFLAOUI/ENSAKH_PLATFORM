<ol class="breadcrumb">
    <li>
        <?= $this->Html->link('<i class="fa fa-dashboard"></i> ' . __('Back'), ['action' => 'listerFonctGrade'], ['escape' => false])?>
    </li>
</ol>
<div class="Fonctionnaires Par Service form large-9 medium-8 columns content">
    <?= $this->Form->create($fonctionnairesGrade) ?>
    <fieldset>
        <legend><?= __('Edit Fonctionnaires Grades') ?></legend>

        <div class="Grade" class="form-group" style="text-align: left">
            <label >Date Prise:</label>
            <div class="input-group">
                <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                </div>
                <input name="date_prise" type="text" class="form-control"placeholder="yyyy-mm-dd hh:mm:ss" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask>
            </div>
        </div>

    </fieldset>
    <br>
    <?= $this->Form->button(__('Update')) ?>
    <?= $this->Form->end() ?>
</div>