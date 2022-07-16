<h2 style="margin:auto">CONSULTAR PROYECTO</h2>
<br><br>

<div class="row">
    <div class="grupo-formulario col-sm-12 ">
        <div class=" row">
            <div class="col-sm-12 col-md-11">
                <select class="form-select" aria-label="Default select example">
                    <option selected>Selecione el proyecto a consultar</option>
                    <option value="1">Proyecto A</option>
                    <option value="2">Proyecto B</option>
                    <option value="3">Proyecto C</option>
                    <option value="3">Proyecto D</option>
                </select>
            </div>
            <div class="col-sm-12 col-md-1">
                <div style="text-align:left" class="col-sm-12 col-md-12">
                    <button class="btn btn-primary">Consultar</button>                        
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
      <th scope="col">TIEMPO INICILA</th>
      <th scope="col">TIEMPO FINAL</th>
      <th scope="col">EJECUCUION DEL CONTRATO</th>
      <th scope="col">COSTO</th>
      <th scope="col">DETALLE</th>
    </tr>
  </thead>
  <tbody>
    <tr>
        <th scope="row">1</th>
            <td>Proyecto A</td>
            <td>01/01/2022</td>
            <td>31/12/2022</td>  
            <td>12 Meses</td>
            <td>100.000.000</td>
            <td >
            <a class="btn btn-warning btn-sm " href="<?php echo RAIZ ?>proyecto/detalle" role="button"> 
                <i class="fa-solid fa-eye"></i> 
            </a>
        </td>
    </tr>
    <tr>
        <th scope="row">2</th>
            <td>Proyecto B</td>
            <td>01/04/2022</td>
            <td>31/12/2022</td>  
            <td>8 Meses</td>
            <td>50.000.000</td>
            <td >
            <a class="btn btn-warning btn-sm " href="<?php echo RAIZ ?>proyecto/detalle" role="button"> 
                <i class="fa-solid fa-eye"></i> 
            </a>
        </td>
    </tr>
    <tr>
        <th scope="row">3</th>
            <td>Proyecto C</td>
            <td>01/06/2022</td>
            <td>31/12/2022</td>  
            <td>6 Meses</td>
            <td>70.000.000</td>
            <td >
            <a class="btn btn-warning btn-sm " href="<?php echo RAIZ ?>proyecto/detalle" role="button"> 
                <i class="fa-solid fa-eye"></i> 
            </a>
        </td>
    </tr>
    <tr>
        <th scope="row">4</th>
            <td>Proyecto D</td>
            <td>01/010/2022</td>
            <td>31/12/2022</td>  
            <td>2 Meses</td>
            <td>20.000.000</td>
            <td >
            <a class="btn btn-warning btn-sm " href="<?php echo RAIZ ?>proyecto/detalle" role="button"> 
                <i class="fa-solid fa-eye"></i> 
            </a>
        </td>
    </tr>
  </tbody>
</table>