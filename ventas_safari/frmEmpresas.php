<link href="css/default.css" media="screen" rel="stylesheet" type="text/css" />

<div>
    <label>
        <span>Empresa<b>*</b></span>
        <input type="hidden" id="hidEmpID" value ="" />
        <input type="hidden" id="hidEmpValid" value ="" />
        <input id="txtEmpEmpresa" class="large"  />
    </label>
    <label>
        <span style="width: 120px;">Nom. Abrev:<b>*</b></span>
        <input id="txtEmpAbrev" maxlength="4" class="code"/>
    </label>
    <label>
        <span style="width: 80px;">R.U.C.:<b>*</b></span>
        <input id="txtEmpRuc" class="entero normal" maxlength="11"/>
    </label>
    <label>
        <span style="width: 85px;">Tipo<b>*</b></span>
        <select id="selEmpTipo" >
            <option value="E">Empresa</option>
            <option value="T">Tienda</option>
        </select>
    </label>
</div>
<div>
    <label>
        <span>Ubicacion<b>*</b></span>
        <select id="selEmpUbic" >
            <option value="0">Lima</option>
            <option value="1">Provincia</option>
        </select>
    </label>
    <label>
        <span style="width: 101px;">Direccion:<b>*</b></span>
        <input id="txtEmpDirec" class="large"/>
    </label>
    <label>
        <span style="width: 80px;">Telefono:</span>
        <input id="txtEmpTelefono" maxlength="15" class="normal"/>
    </label>
</div>
<div>
    <label>
        <span style="width: 85px;">List.Precios:<b>*</b></span>
        <select id="selEmpZona">
            <option value="">[----]</option>
            
        </select>
    </label>
</div>
<!--<fieldset style="padding-top: 5px; padding-bottom: 3px; margin-top: 5px;">-->
<blockquote>
    <div>
    <fieldset>
        <legend>Series</legend>
        <label>
            <span style="width: 79px;">Serie:<b>*</b></span>
            <input id="txtEmpSerDoc" class="entero" maxlength="3"/>
        </label>
        <label>
            <span style="width: 154px;">Serie Maq-TK</span>
            <input id="txtEmpSerMaquina" maxlength="20" onkeyup=""/>
        </label>
    </fieldset>
    </div>
</blockquote>
<blockquote class="block-right">
    <div>
        <fieldset>
        <legend>Fecha de Inventario</legend>
            <label>
                <span>IVP:</span>
                <input id="txtEmpFecInvPt" class="date" readonly/>
                <a href="javascript:;" title="Establecer fecha" onclick="calDate.showCalendar(this, 'txtEmpFecInvPt');">
                        <img src="imgs/calendar.png" alt="Establecer fecha" />
                </a>
            </label>
        </fieldset>
    </div>
</blockquote>

<!--</fieldset>-->
<p>
    <button id="btnEmpnew" type="button" class="new no-disabled" onclick="mewEmp();">Nuevo</button>
    <button id="btnEmpSave" type="button" id="btnEmpSave" class="save" onclick="saveEmp();">Guardar</button>
    <button id="btnEmpClose" type="button" class="close"  onclick="removeCap('winfrmEmpresas')">cerrar</button>
</p>
<table id="tblEmp" cellspacing="1" class="tbl-butts" summary="14,10" style="width: 940px;">
    <thead>
        <tr>
            <th width="30">ID</th>
            <th>Empresa</th>
            <th width="45">Abrev.</th>
            <th width="80">RUC</th>
            <th width="100">Direccion</th>
            <th width="60">Telefono</th>
            <th width="50">Ubic</th>
            <th width="30">TP</th>
            <th width="60">Cliente</th>
            <th width="30">DR</th>
            <th width="30">Ser</th>
            <th width="60">Ser.TK</th>
            <th width="60">Estado</th>
            <th colspan="2"></th>
        </tr>
    </thead>
    <tbody>

    </tbody>
</table>