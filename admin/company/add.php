
<?php
     if (!isset($_SESSION['ADMIN_USERID'])){
      redirect(web_root."admin/index.php");
     }

?>
 <form class="form-horizontal span6" action="controller.php?action=add" method="POST">

                <div class="row">
                   <div class="col-lg-12">
                      <h1 class="page-header">Añadir nueva empresa</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                 </div> 

                  <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "COMPANYNAME">Nombre:</label>

                      <div class="col-md-8">
                         <input class="form-control input-sm" id="COMPANYNAME" name="COMPANYNAME" placeholder=
                            "Company Name" type="text" value="" autocomplete="none">
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "COMPANYADDRESS">Direccion:</label> 
                      <div class="col-md-8">
                        <textarea class="form-control input-sm" id="COMPANYADDRESS" name="COMPANYADDRESS" placeholder=
                            "Company Address" type="text" value="" required  onkeyup="javascript:capitalize(this.id, this.value);" autocomplete="off"></textarea>
                         <!-- <input class="form-control input-sm" id="COMPANYADDRESS" name="COMPANYADDRESS" placeholder="Company Address"   autocomplete="none"/>  -->
                      </div>
                    </div>
                  </div> 

                  <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "COMPANYCONTACTNO">Numero :</label>

                      <div class="col-md-8">
                         <input class="form-control input-sm" id="COMPANYCONTACT" name="COMPANYCONTACT" placeholder=
                            "Numero de la empresa" type="text" value="" autocomplete="none">
                      </div>
                    </div>
                  </div>  
                  <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "COMPANYNAME">RUC :</label>

                      <div class="col-md-8">
                         <input class="form-control input-sm" id="COMPANYRUC" name="COMPANYRUC" placeholder=
                            "RUC de la empresa" type="text" value="" autocomplete="none">
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "COMPANYNAME">Pagina Web :</label>

                      <div class="col-md-8">
                         <input class="form-control input-sm" id="COMPANYWEB" name="COMPANYWEB" placeholder=
                            "Pagina Web de la empresa" type="text" value="" autocomplete="none">
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "COMPANYNAME">Descripcion :</label>

                      <div class="col-md-8">
                         <input class="form-control input-sm" id="COMPANYDESCRIPCION" name="COMPANYDESCRIPCION" placeholder=
                            "Descripcion de la empresa" type="text" value="" autocomplete="none">
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "COMPANYNAME">Correo :</label>

                      <div class="col-md-8">
                         <input class="form-control input-sm" id="COMPANYEMAIL" name="COMPANYEMAIL" placeholder=
                            "RUC de la empresa" type="text" value="" autocomplete="none">
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "COMPANYNAME">Correo del CV:</label>

                      <div class="col-md-8">
                         <input class="form-control input-sm" id="COMPANYEMAILCV" name="COMPANYEMAILCV" placeholder=
                            "Correo del CV " type="text" value="" autocomplete="none">
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "COMPANYSTATUS">Estado :</label>

                      <div class="col-md-8">
                         <input class="form-control input-sm" id="COMPANYSTATUS" name="COMPANYSTATUS" placeholder=
                            "RUC de la empresa" type="text" value="" autocomplete="none">
                      </div>
                    </div>
                  </div>


                  <!--  <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "COMPANYMISSION">Company Mission:</label>

                      <div class="col-md-8">
                        
                         <textarea class="form-control input-sm" id="COMPANYMISSION" name="COMPANYMISSION" placeholder=
                            "Company Mission" type="text" value="" required  onkeyup="javascript:capitalize(this.id, this.value);" autocomplete="off"></textarea>
                      </div>
                    </div>
                  </div>  -->

                  <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "idno"></label>  

                      <div class="col-md-8">
                         <button class="btn btn-primary btn-sm" name="save" type="submit" ><span class="fa fa-save fw-fa"></span> Guardar</button>
                      <!-- <a href="index.php" class="btn btn-info"><span class="glyphicon glyphicon-arrow-left"></span>&nbsp;<strong>Back</strong></a> -->
                     
                     </div>
                    </div>
                  </div> 
 
          
        </form>
      
 