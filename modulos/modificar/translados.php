<h2 style="margin:auto">TRANSLADOS PROYECTO</h2>
<br><br>

<div class="row">
    <div class="grupo-formulario col-sm-12 ">
        <div class=" row">
            <div class="col-sm-12 col-md-10">
                <input type="text" class="form-control" id="inputPassword">
                <br>
            </div>
            <div class="col-sm-12 col-md-2">
                <div style="text-align:left" class="col-sm-12 col-md-12">
                    <button style="width:100%" class="btn btn-primary">Consultar</button>                        
                </div>
            </div>
        </div>  
    </div>
</div>
<br>
<table class="table table-striped table-hover table-bordered">
  <thead class="table-dark">
    <tr >
      <th scope="col">#</th>
      <th scope="col">PROYECTO</th>
      <th scope="col">COSTO DEL PROYECTO</th>
      <th scope="col">ANTICIPO</th>
      <th scope="col">PRIMER PAGO</th>
      <th scope="col">SEGUNDO PAGO</th>
      <th scope="col">TERCER PAGO</th>
      <th scope="col">SALDO</th>
      <th scope="col">DETALLES</th>
    </tr>
  </thead>
  <tbody>
    <tr>
        <th scope="row">1</th>
            <td>Proyecto A</td>
            <td>100.000.000</td>
            <td>40.000.000</td>
            <td>30.000.000</td>
            <td>15.000.000</td>
            <td>10.000.000</td>
            <td>5.000.000</td>
            <td class="centrar">
                <a class="btn btn-success btn-sm " href="<?php echo RAIZ ?>modificar/detalles" role="button"> 
                    TRANSLADOS <i class="fa-solid fa-arrow-right-arrow-left"></i>
                </a>
            </td>
    </tr>
    <tr>
        <th scope="row">2</th>
            <td>Proyecto B</td>
            <td>50.000.000</td>
            <td>30.000.000</td>
            <td>10.000.000</td>
            <td>5.000.000</td>
            <td>5.000.000</td>
            <td>0</td>
            <td class="centrar">
            <a class="btn btn-success btn-sm " href="<?php echo RAIZ ?>modificar/translados/detalles" role="button"> 
                TRANSLADOS <i class="fa-solid fa-arrow-right-arrow-left"></i> 
            </a>
        </td>
    </tr>
    <tr>
        <th scope="row">3</th>
            <td>Proyecto C</td>
            <td>70.000.000</td>
            <td>40.000.000</td>
            <td>10.000.000</td>
            <td>10.000.000</td>
            <td>10.000.000</td>
            <td>0.000.000</td>
            <td class="centrar">
            <a class="btn btn-success btn-sm " href="<?php echo RAIZ ?>modificar/translados/detalles" role="button"> 
                TRANSLADOS <i class="fa-solid fa-arrow-right-arrow-left"></i> 
            </a>
        </td>
    </tr>
    <tr>
        <th scope="row">4</th>
            <td>Proyecto D</td>
            <td>20.000.000</td>
            <td>10.000.000</td>
            <td>4.000.000</td>
            <td>3.000.000</td>
            <td>2.000.000</td>
            <td>1.000.000</td>
            <td class="centrar">
            <a class="btn btn-success btn-sm " href="<?php echo RAIZ ?>modificar/translados/detalles" role="button"> 
                TRANSLADOS <i class="fa-solid fa-arrow-right-arrow-left"></i> 
            </a>
        </td>
    </tr>
  </tbody>
</table>