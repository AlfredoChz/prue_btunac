  <section id="banner">

  <!-- Slider -->
        <div id="main-slider" class="flexslider">
            <ul class="slides">
              <li>
                <img src="<?php echo web_root; ?>plugins/home-plugins/img/slides/1.jpg" alt="" />
                <div class="flex-caption">
                    <h3>Innovación</h3>
          <p>Creamos los oportunidades</p>

                </div>
              </li>
              <li>
                <img src="<?php echo web_root; ?>plugins/home-plugins/img/slides/2.jpg" alt="" />
                <div class="flex-caption">
                    <h3>Especialización</h3>
          <p>El Éxito Depende Del Trabajo</p>

                </div>
              </li>
            </ul>
        </div>
  <!-- end slider -->

  </section>
  <section id="call-to-action-2">
    <div class="container">
      <div class="row">
        <div class="col-md-10 col-sm-9">
          <h3>Asociarse con líderes empresariales</h3>
          <p>Desarrollo de relaciones exitosas, a largo plazo, estratégicas entre clientes y proveedores, basadas en el logro de las mejores prácticas y la ventaja competitiva sostenible. En el modelo de socio comercial, los profesionales de recursos humanos trabajan en estrecha colaboración con los líderes empresariales y los gerentes de línea para lograr objetivos organizacionales compartidos.</p>
        </div>
       <!--  <div class="col-md-2 col-sm-3">
          <a href="#" class="btn btn-primary">Read More</a>
        </div> -->
      </div>
    </div>
  </section>

  <section id="content">


  <div class="container">
        <div class="row">
      <div class="col-md-12">
        <div class="aligncenter"><h2 class="aligncenter">Empresa</h2><!-- Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt eius magni provident, doloribus omnis minus ovident, doloribus omnis minus temporibus perferendis nesciunt.. --></div>
        <br/>
      </div>
    </div>

    <?php
      $sql = "SELECT * FROM `tblcompany`";
      $mydb->setQuery($sql);
      $comp = $mydb->loadResultList();


      foreach ($comp as $company ) {
        # code...

    ?>
            <div class="col-sm-4 info-blocks">
                <i class="icon-info-blocks fa fa-building-o"></i>
                <div class="info-blocks-in">
                    <h3><?php echo $company->COMPANYNAME;?></h3>
                    <!-- <p><?php echo $company->COMPANYMISSION;?></p> -->
                    <p>Address :<?php echo $company->COMPANYADDRESS;?></p>
                    <p>Contact No. :<?php echo $company->COMPANYCONTACTNO;?></p>
                </div>
            </div>

    <?php } ?>
  </div>
  </section>

  <section class="section-padding gray-bg">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-title text-center">
            <h2 >TRABAJOS POPULARES</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 ">
          <?php
            $sql = "SELECT * FROM `tblcategory`";
            $mydb->setQuery($sql);
            $cur = $mydb->loadResultList();

            foreach ($cur as $result) {
              echo '<div class="col-md-3" style="font-size:15px;padding:5px">* <a href="'.web_root.'index.php?q=category&search='.$result->CATEGORY.'">'.$result->CATEGORY.'</a></div>';
            }

          ?>
        </div>
      </div>

    </div>
  </section>
  <section id="content-3-10" class="content-block data-section nopad content-3-10">
  <div class="image-container col-sm-6 col-xs-12 pull-left">
    <div class="background-image-holder">

    </div>
  </div>

  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-6 col-sm-offset-6 col-xs-12 content">
        <div class="editContent">
          <h3>Nuestro equipo</h3>
        </div>
        <div class="editContent"  style="height:235px;">
          <p>
          &nbsp;&nbsp;Nuestra actitud de "un equipo" rompe los silos y nos ayuda a participar con la misma eficacia desde la suite C hasta la línea del frente. Nuestro estilo de trabajo colaborativo enfatiza el trabajo en equipo, la confianza y la tolerancia ante opiniones divergentes. La gente nos dice que somos realistas, accesibles y divertidos. <br/><br/>

          &nbsp;&nbsp;  Tenemos una pasión por los verdaderos resultados de nuestros clientes y un impulso pragmático para la acción que comienza el lunes por la mañana a las 8 am y no cesa. Reunimos a los clientes con nuestra energía infecciosa, para hacer que el cambio se mantenga. <br/><br/>

          &nbsp;&nbsp;  Y nunca lo vamos a hacer solos. Apoyamos y recibimos apoyo para desarrollar nuestras propias historias de resultados personales. Balanceamos el desafío y la creación conjunta con nuestros clientes, creando las capacidades internas necesarias para que puedan crear resultados repetibles. </p>
        </div>
      </div>
    </div><!-- /.row-->
  </div><!-- /.container -->
</section>

  <div class="about home-about">
        <div class="container">

            <div class="row">
              <div class="col-md-4">
                <!-- Heading and para -->
                <div class="block-heading-two">
                  <h3><span>Programas</span></h3>
                </div>
                <p>El Programa de Apoyo Administrativo (Bolsa de Trabajo), en el marco de los programas de apoyo a los estudiantes de pre grado de la Facultades de la Universidad Nacional del Callao, en puestos de apoyo , interno o externo de la facultades teniendo como base la Resolución Rectoral. <br><br> El objectivo es apoyar a estudiantes de pre grado que destaquen en su formación académica profesional, para que asi puedan desarrollar su conocimiento y habilidad para su desarrollo profesional. </p>
              </div>
              <div class="col-md-4">
                <div class="block-heading-two">
                  <h3><span>Últimas noticias</span></h3>
                </div>
                <!-- Accordion starts -->
                <div class="panel-group" id="accordion-alt3">
                 <!-- Panel. Use "panel-XXX" class for different colors. Replace "XXX" with color. -->
                  <div class="panel">
                  <!-- Panel heading -->
                   <div class="panel-heading">
                    <h4 class="panel-title">
                      <a data-toggle="collapse" data-parent="#accordion-alt3" href="#collapseOne-alt3">
                      <i class="fa fa-angle-right"></i> <p class="" style="display:inline;">
                        Capacitación a personas con discapacidad 
                      </p>
                      </a>
                    </h4>
                   </div>
                   <div id="collapseOne-alt3" class="panel-collapse collapse">
                    <!-- Panel body -->
                    <div class="panel-body">
                    Funcionarios indicaron que se viene cumpliendo con normativa legal a favor de las personas con discapacidad. También se les instruyo en temas de Bolsa de Trabajo y Certificado Único Laboral.
                    </div>
                   </div>
                  </div>
                  <div class="panel">
                   <div class="panel-heading">
                    <h4 class="panel-title">
                      <a data-toggle="collapse" data-parent="#accordion-alt3" href="#collapseTwo-alt3">
                      <i class="fa fa-angle-right"></i> <p class="" style="display:inline;">
                      Mercado laboral requiere más técnicos
                      </p>
                      </a>
                    </h4>
                   </div>
                   <div id="collapseTwo-alt3" class="panel-collapse collapse">
                    <div class="panel-body">
                    El 61,9% de los jóvenes trabaja en algo distinto a la carrera que estudió.
                    </div>
                   </div>
                  </div>
                  <div class="panel">
                   <div class="panel-heading">
                    <h4 class="panel-title">
                      <a data-toggle="collapse" data-parent="#accordion-alt3" href="#collapseThree-alt3">
                      <i class="fa fa-angle-right"></i><p class="" style="display:inline;"> Empresas creadas por mujeres en 2019
                      </p>
                      </a>
                    </h4>
                   </div>
                   <div id="collapseThree-alt3" class="panel-collapse collapse">
                    <div class="panel-body">
                  Según datos del INEI, su esfuerzo emprendedor se expandió por encima del 50% en 20 regiones del país y en rubros como el comercio, alojamiento, entre otros.
                    </div>
                   </div>
                  </div>
                  <div class="panel">
                   <div class="panel-heading">
                    <h4 class="panel-title">
                      <a data-toggle="collapse" data-parent="#accordion-alt3" href="#collapseFour-alt3">
                      <i class="fa fa-angle-right"></i><p class="" style="display:inline;"> Mujeres lideran el 52,9% de empresas 
                      </p>
                      </a>
                    </h4>
                   </div>
                   <div id="collapseFour-alt3" class="panel-collapse collapse">
                    <div class="panel-body">
                      
                  Informe. Según datos del INEI, su esfuerzo emprendedor se expandió por encima del 50% en 20 regiones del país y en rubros como el comercio, alojamiento, entre otros.
                    </div>
                   </div>
                  </div>
                </div>
                <!-- Accordion ends -->

              </div>

              <div class="col-md-4">
                <div class="block-heading-two">
                  <h3><span>Testimonios</span></h3>
                </div>
                     <div class="testimonials">
                    <div class="active item">
                      <blockquote><p>Conoce las experiencias de alumnos sobre su búsqueda laboral y la utilidad de los servicios de orientación profesional que brinda la Bolsa de Trabajo de la UNAC.</p></blockquote>
                      <div class="carousel-info">
                      <img alt="" src="img/team4.jpg" class="pull-left">
                      <div class="pull-left">
                        <span class="testimonials-name">Marc Cooper</span>
                        <span class="testimonials-post">Technical Director</span>
                      </div>
                      </div>
                    </div>
                  </div>
              </div>

            </div>



            <br>

            </div>

          </div>
