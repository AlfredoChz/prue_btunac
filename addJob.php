<?php
if (!isset($_SESSION['COMPANYID'])){
    redirect(web_root."index.php");
}
?>
<form class="form-horizontal span6" action="enterprise/controller.php?action=add" method="POST">

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header"></h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>


    <input class="form-control input-sm"  type="hidden" id="N_EMPRESA" name="COMPANYID" value="<?php echo $_SESSION['COMPANYID']?>" contenteditable="false" />



    <div class="form-group">
        <div class="col-md-8">
            <label class="col-md-4 control-label" for=
            "N_EMPRESA">Empresa</label>
            <div class="col-md-8">
                <input class="form-control input-sm" id="N_EMPRESA" name="N_EMPRESA" value="<?php echo $_SESSION['COMPANYNAME']?>" readonly />
            </div>
        </div>
    </div>

    <div class="form-group">
        <div class="col-md-8">
            <label class="col-md-4 control-label" for=
            "CATEGORY">Categoría</label>

            <div class="col-md-8">
                <select required class="form-control input-sm" id="CATEGORY" name="CATEGORY">
                    <option value="None"></option>
                    <?php
                    $sql ="Select * From tblcategory";
                    $mydb->setQuery($sql);
                    $res  = $mydb->loadResultList();
                    foreach ($res as $row) {
                        # code...
                        echo '<option value='.$row->CATEGORY.'>'.$row->CATEGORY.'</option>';
                    }

                    ?>
                </select>
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="col-md-8">
            <label class="col-md-4 control-label" for=
            "OCCUPATIONTITLE">Título Ocupacional</label>
            <div class="col-md-8">
                <input class="form-control input-sm" id="OCCUPATIONTITLE" name="OCCUPATIONTITLE" placeholder="Título Ocupacional"   required autocomplete="none"/>
            </div>
        </div>
    </div>

    <div class="form-group">
        <div class="col-md-8">
            <label class="col-md-4 control-label" for=
            "REQ_NO_EMPLOYEES">Vacantes</label>
            <div class="col-md-8">
                <input required type="number"  value="1" class="form-control input-sm" id="REQ_NO_EMPLOYEES" name="REQ_NO_EMPLOYEES" placeholder="Vacantes" min="1" max="5"  autocomplete="none"/>
            </div>
        </div>
    </div>

    <div class="form-group">
        <div class="col-md-8">
            <label class="col-md-4 control-label" for=
            "SALARIES">Salario</label>
            <div class="col-md-8">
                <input required class="form-control input-sm" id="SALARIES" name="SALARIES" placeholder="Salario"   autocomplete="none"/>
            </div>
        </div>
    </div>

    <div class="form-group">
        <div class="col-md-8">
            <label class="col-md-4 control-label" for=
            "DURATION_EMPLOYEMENT">Tiempo de Oferta (días)</label>
            <div class="col-md-8">
                <input  required value="5" class="form-control input-sm" id="DURATION_EMPLOYEMENT" name="DURATION_EMPLOYEMENT" placeholder="Tiempo de vacante" min="5" max="15" type="number" step="5"   autocomplete="none"/>
            </div>
        </div>
    </div>

    <div class="form-group">
        <div class="col-md-8">
            <label class="col-md-4 control-label" for=
            "QUALIFICATION_WORKEXPERIENCE">Requerimientos</label>
            <div class="col-md-8">
                <textarea  required class="form-control input-sm" id="QUALIFICATION_WORKEXPERIENCE" name="QUALIFICATION_WORKEXPERIENCE" placeholder="Requerimientos del puesto"   autocomplete="none"></textarea>
            </div>
        </div>
    </div>

    <div class="form-group">
        <div class="col-md-8">
            <label class="col-md-4 control-label" for=
            "JOBDESCRIPTION">Descripción</label>
            <div class="col-md-8">
                <textarea required class="form-control input-sm" id="JOBDESCRIPTION" name="JOBDESCRIPTION" placeholder="Descripción..."   autocomplete="none"></textarea>
            </div>
        </div>
    </div>

    <div class="form-group">
        <div class="col-md-8">
            <label class="col-md-4 control-label" for=
            "PREFEREDSEX">Genero preferido</label>
            <div class="col-md-8">
                <select required class="form-control input-sm" id="PREFEREDSEX" name="PREFEREDSEX" >
                    <option>Hombre/Mujer</option>
                    <option>Hombre</option>
                    <option>Mujer</option>
                </select>
            </div>
        </div>
    </div>
    <!--
    <div class="form-group">
        <div class="col-md-8">
            <label class="col-md-4 control-label" for=
            "SECTOR_VACANCY">Sector of Vacancy:</label>
            <div class="col-md-8">
                <textarea class="form-control input-sm" id="SECTOR_VACANCY" name="SECTOR_VACANCY" placeholder="Sector of Vacancy"   autocomplete="none"></textarea>
            </div>
        </div>
    </div>
    -->
    <div class="form-group">
        <div class="col-md-8">
            <label class="col-md-4 control-label" for=
            "idno"></label>

            <div class="col-md-8">
                <button class="btn btn-primary btn-sm" name="save" type="submit" ><span class="fa fa-save fw-fa"></span> Publicar</button>
                <a href="index.php" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-arrow-left"></span>Atrás</a>

            </div>
        </div>
    </div>


</form>

