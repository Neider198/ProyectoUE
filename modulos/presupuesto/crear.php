<h2 style="margin:auto">CREAR SUBCUENTA</h2>
<br><br>

<form >
    <div style="width:70%;margin:auto" class="row">
        <div class="grupo-formulario col-sm-12 ">
            <div class=" row">
                <div class="col-sm-12 col-md-6 col-lg-4 texto-centro">
                    <label class="negrita" for="inputPassword">Cuenta</label>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-8">
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Selecion Subcuenta</option>
                        <option value="1">Anticipo</option>
                        <option value="2">Primer pago</option>
                        <option value="3">Segundo pago</option>
                        <option value="3">Tercer pago</option>
                    </select>
                </div>
            </div>  
        </div>
   
    
    <div class="grupo-formulario col-sm-12 ">
        <div class=" row">
            <div class="col-sm-12 col-md-6 col-lg-4 texto-centro">
                <label class="negrita" for="inputPassword">Nombre de Subcuentas</label>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-8">
                <input type="text" class="form-control" id="inputPassword">
            </div>
        </div>  
    </div>

    <div class="grupo-formulario col-sm-12 ">
        <div class=" row">
            <div class="col-sm-12 col-md-6 col-lg-4 texto-centro">
                <label class="negrita" for="inputPassword">Valor del Gasto</label>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-8">
                <div class="input-group">                      
                    <span class="input-group-text" id="basic-addon1">$</span>
                    <input type="text" class="form-control" id="inputPassword">
                </div>
            </div>
        </div>  
    </div>
   
    <div class="grupo-formulario col-sm-12 ">
        <div class=" row">
            <div class="col-sm-12 col-md-6 col-lg-4 texto-centro">
                <label class="negrita" for="inputPassword">Fecha del Gasto</label>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-8">
                <input type="date" class="form-control" id="inputPassword">
            </div>
        </div>  
    </div>

    <div style="text-align:right" class="grupo-formulario col-sm-12 col-md-12 col-lg-12">
        <button style="width:20%" class="btn btn-primary">Guardar</button>                        
    </div>
    </div>
</form >