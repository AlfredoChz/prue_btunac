<?php
    if (!isset($_SESSION['ADMIN_USERID'])){
      redirect(web_root."admin/index.php");
     }


  $companyid = $_GET['id'];
  $company = New Company();
  $res = $company->single_company($companyid);

?> 
 <form class="form-horizontal span6" action="controller.php?action=edit" method="POST">

       
            <div class="row">
         <div class="col-lg-12">
            <h1 class="page-header">Añadir nueva Empresa</h1>
          </div>
          <!-- /.col-lg-12 -->
       </div> 
                  <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "COMPANYNAME">Nombre:</label>

                      <div class="col-md-8">

                        <input type="hidden" name="COMPANYID" value="<?php echo $res->COMPANYID ;?>">
                         <input class="form-control input-sm" id="COMPANYNAME" name="COMPANYNAME" placeholder=
                            "Nombre de la empresa" type="text" value="<?php echo $res->COMPANYNAME ;?>">
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "COMPANYADDRESS">Direccion:</label> 
                      <div class="col-md-8">
                        <textarea class="form-control input-sm" id="COMPANYADDRESS" name="COMPANYADDRESS" placeholder=
                            "Company Address" type="text" value="" required  onkeyup="javascript:capitalize(this.id, this.value);" autocomplete="off"><?php echo $res->COMPANYADDRESS ;?></textarea>
                         <!-- <input class="form-control input-sm" id="COMPANYADDRESS" name="COMPANYADDRESS" placeholder="Company Address" value="<?php echo $res->COMPANYADDRESS ;?>" />  -->
                      </div>
                    </div>
                  </div> 
                  <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "COMPANYCONTACT">Numero :</label>

                      <div class="col-md-8">
                         <input class="form-control input-sm" id="COMPANYCONTACT" name="COMPANYCONTACT" placeholder=
                            "Numero de la empresa" type="text" value="<?php echo $res->COMPANYCONTACT ;?>">
                      </div>
                    </div>
                  </div>
                    <div class="form-group">
                      <div class="col-md-8">
                        <label class="col-md-4 control-label" for=
                        "COMPANYRUC">RUC :</label>

                        <div class="col-md-8">
                           <input class="form-control input-sm" id="COMPANYRUC" name="COMPANYRUC" placeholder=
                              "RUC de la empresa" type="text" value="<?php echo $res->COMPANYRUC ;?>">
                        </div>
                      </div>
                    </div>
                        <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "COMPANYWEB">Pagina Web :</label>

                      <div class="col-md-8">
                         <input class="form-control input-sm" id="COMPANYWEB" name="COMPANYWEB" placeholder=
                            "Pagina web de la empresa" type="text" value="<?php echo $res->COMPANYWEB ;?>">
                      </div>
                    </div>
                  </div>
                        <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "COMPANYDESCRIPCION">Descripcion :</label>

                      <div class="col-md-8">
                         <input class="form-control input-sm" id="COMPANYDESCRIPCION" name="COMPANYDESCRIPCION" placeholder=
                            "Descripcion de la empresa" type="text" value="<?php echo $res->COMPANYDESCRIPCION ;?>">
                      </div>
                    </div>
                  </div>
                        <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "COMPANYEMAIL">Correo :</label>

                      <div class="col-md-8">
                         <input class="form-control input-sm" id="COMPANYEMAIL" name="COMPANYEMAIL" placeholder=
                            "Correo de la empresa" type="text" value="<?php echo $res->COMPANYEMAIL ;?>">
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "COMPANYEMAILCV ">Correo del CV :</label>

                      <div class="col-md-8">
                         <input class="form-control input-sm" id="COMPANYEMAILCV" name="COMPANYEMAILCV" placeholder=
                            "Correo del CV" type="text" value="<?php echo $res->COMPANYEMAILCV ;?>">
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "COMPANYSTATUS">Estado :</label>

                      <div class="col-md-8">
                         <input class="form-control input-sm" id="COMPANYSTATUS" name="COMPANYSTATUS" placeholder=
                            "Estado de la empresa" type="text" value="<?php echo $res->COMPANYSTATUS ;?>">
                      </div>
                    </div>
                  </div>

               <!--  <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "COMPANYMISSION">Company Mission:</label>

                      <div class="col-md-8">
                        
                         <textarea class="form-control input-sm" id="COMPANYMISSION" name="COMPANYMISSION" placeholder=
                            "Company Mission" type="text" value="" required  onkeyup="javascript:capitalize(this.id, this.value);" autocomplete="off"><?php echo $res->COMPANYMISSION ;?></textarea>
                      </div>
                    </div>
                  </div>  -->



            
             <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "idno"></label>

                      <div class="col-md-8">
                      <!-- <a href="index.php" class="btn btn_fixnmix"><span class="glyphicon glyphicon-arrow-left"></span>&nbsp;<strong>Back</strong></a> -->
                      <button class="btn btn-primary btn-sm" name="save" type="submit" ><span class="fa fa-save fw-fa"></span> Guardar</button>
                   
                      </div>
                    </div>
                  </div>

              
   
        </form>
       