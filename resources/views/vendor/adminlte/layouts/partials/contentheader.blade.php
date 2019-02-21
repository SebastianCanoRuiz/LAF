<!-- Content Header (Page header) -->
<!-- <section class="content-header">
    <h1>
        @yield('contentheader_title', 'Page Header here')
        <small>@yield('contentheader_description')</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> {{ trans('adminlte_lang::message.level') }}</a></li>
        <li class="active">{{ trans('adminlte_lang::message.here') }}</li>
    </ol>
</section>
-->

<section class="content-header">

	<div class="box">
		<div class="portlet light">
			<div class="portlet-body">
				<div class="tabbable-custom nav-justified">
					<ul class="nav nav-tabs nav-justified">
						<li class="active">
							<a href="#contratos" data-toggle="tab"><i class="glyphicon glyphicon-user"></i> Contratos</a>
						</li>
						<!--
						<li>
							<a href="#finiquitos" data-toggle="tab"><i class="glyphicon glyphicon-list-alt"></i> Finiquitos</a>
						</li>
						-->						
					</ul>

					<div class="tab-content">
						<div id="contratos" class="tab-pane fade in active">
							<div class="panel panel-primary">
								<div class="panel-heading"><label>GENERAR CONTRATO</label></div>
								<div class="panel-body">
									<form class="form-group" method="POST" action="/contratos">
										@csrf
										<div class="table table-striped">
											<tbody>
												<!-- DATOS DE LA EMPRESA-->
												<tr>
													<td><label>Nombre del Empresa:</label></td>
													<td><input type="text" name="nombreEmpresa" class="form-control"></td>
												</tr>
												<tr>
													<td><label>Dirección sede principal:</label></td>
													<td><input type="text" name="direccionEmpresa" class="form-control"></td>
												</tr>
												<tr>
													<td><label>Identificación de la Empresa (NIT):</label></td>
													<td><input type="text" name="nit" class="form-control"></td>
												</tr>

												<tr>
													<td><label>Correo electrónico de la Empresa:</label></td>
													<td><input type="text" name="emailEmpresa" class="form-control"></td>
												</tr>
												<tr>
													<td><label>Nombre del Representante Legal:</label></td>
													<td><input type="text" name="nombreRepresentante" class="form-control"></td>
												</tr>
												<tr>
													<td><label>Identificación (CC):</label></td>
													<td><input type="text" name="cedulaRepresentante" class="form-control"></td>
												</tr>
												<tr>
													<td><label>Lugar de expedición del documento de identidad:</label></td>
													<td><input type="text" name="expedicionRepresentante" class="form-control"></td>
												</tr>

												<!-- DATOS DEL TRABAJDOR -->
												<tr>
													<td><label>Ingrese el nombre completo del trabajador:</label></td>
													<td><input type="text" name="nombreTrabajador" class="form-control"></td>
												</tr>
												<tr>
													<td><label>Dirección de residencia del trabajador:</label></td>
													<td><input type="text" name="direccionTrabajador" class="form-control"></td>
												</tr>
												<tr>
													<td><label>Número del documento de identidad del trabajador:</label></td>
													<td><input type="text" name="cedulaTrabajador" class="form-control"></td>
												</tr>
												<tr>
													<td><label>Lugar de expedición del documento de identidad:</label></td>
													<td><input type="text" name="expedicionTrabajador" class="form-control"></td>
												</tr>
												<tr>
													<td><label>Correo electrónico del trabajador:</label></td>
													<td><input type="text" name="emailTrabajador" class="form-control"></td>
												</tr>

												<tr>
													<td><label>Cuenta bancaria del trabajador:</label></td>
													<td><input type="text" name="cuentaBancaria" class="form-control"></td>
												</tr>

												<tr>
													<td><label>¿Banco donde está  alojada la cuenta bancaria?</label></td>
													<td><input type="text" name="banco" class="form-control"></td>
												</tr>

												<!-- ELEMENTOS DEL CONTRATO DE TRABAJO --->
												<tr>
													<td><label>Defina el tipo de contrato que se va a realizar:</label></td>
													<td>
														<select class="form-control" name="tipoContrato">
															<option>Indefinido</option>
															<option>A término fijo</option>
															<option>Por obra o labor determinada</option>
														</select>
													</td>
												</tr>
												<tr>
													<td><label>Ingrese la fecha de inicio del contrato de trabajo:</label></td>
													<td><input type="date" name="inicioContrato" class="form-control" step="1" value="<?php echo date("Y-m-d");?>">
													</td>
												</tr>
												<tr>
													<td><label>Ingrese la fecha de finalización del contrato de trabajo:</label></td>
													<td><input type="date" name="finalContrato" class="form-control" step="1">
													</td>
												</tr>
												<tr>
													<td><label>Ingrese el salario mensual que percebirá el trabajador:</label></td>
													<td><input type="text" name="salario" class="form-control"></td>
												</tr>
												<tr>
													<td><label>Indique la periocidad del pago del salario:</label></td>
													<td>
														<select class="form-control" name="periodicidadSalario">
															<option>Mensual</option>
															<option>Quincenal</option>
														</select>
													</td>
												</tr>
												<tr>
													<td><label>Indique la forma de pago del salario:</label></td>
													<td>
														<select class="form-control" name="formaPago">
															<option>1. Efectivo</option>
															<option>2. Consignación bancaria</option>
														</select>
													</td>
												</tr>
												<!-- Horario de Trabajo -->
												<tr>
													<td><label>¿El trabajador laborará de Lunes a?:</label></td>
													<td>
														<select class="form-control" name="lunesA">
															<option><span>SÁBADO</span></option>
															<option><span>VIERNES</span></option>
														</select>
													</td>
												</tr>
												<tr>
													<td><label>Indique la ciudad donde se va a ejecutar el contrato:</label></td>
													<td><input type="text" name="ciudadContrato" class="form-control"></td>
												</tr>
												<tr>
													<td><label>Indique la jornada en que laborará Ciclo 1 (Jornada Mañana):</label></td>
													<td><input type="text" name="ciclo1" class="form-control"></td>
												</tr>
												<tr>
													<td><label>Indique la jornada en que laborará Ciclo 2 (Jornada Tarde):</label></td>
													<td><input type="text" name="ciclo2" class="form-control"></td>
												</tr>
												<tr>
													<td><label>¿Cuál es el cargo del trabajador?</label></td>
													<td><input type="text" name="cargo" class="form-control"></td>
												</tr>
												<tr>
													<td><label>Indique de manera detallada las funciones que desempeñará:</label></td>
													<td>
														<textarea class="form-control" name="funciones" rows="3" placeholder="Escribe las Funciones..."></textarea>
													</td>
												</tr>
												<tr>
													<td><label>Fecha de firma del contrato:</label></td>
													<td><input type="date" name="fechaFirmaContrato" class="form-control" step="1" value="<?php echo date("Y-m-d");?>">
													</td>
												</tr>
											</tbody>
											<br>
											<input type="submit" value="Generar Contrato" class="btn btn-primary btn-lg btn-block">
										</form>
									</div>
								</div>

							</div>						

							<!--
							<div class="tab-pane active" id="finiquitos">

								<div class="panel panel-primary">
									<div class="panel-heading"><label>GENERAR FINIQUITO</label></div>
									<div class="panel-body">
										<form class="form-group" method="POST" action="/finiquitos">
											@csrf
											<div class="table table-striped">
												<tbody>
													<tr>
														<td><label>Nombre del Representante Legal:</label></td>
														<td><input type="text" name="nombreEmpleador" class="form-control"></td>
													</tr>
													<tr>
														<td><label>Identificación (CC):</label></td>
														<td><input type="text" name="cedulaEmpleador" class="form-control"></td>
													</tr>
													<tr>
														<td><label>Lugar de expedición:</label></td>
														<td><input type="text" name="expedicion" class="form-control"></td>
													</tr>

													<tr>
														<td><label>Nombre de la Empresa:</label></td>
														<td><input type="text" name="nombreEmpresa" class="form-control"></td>
													</tr>
													<tr>
														<td><label>Dirección sede principal:</label></td>
														<td><input type="text" name="domicilio" class="form-control"></td>
													</tr>
													<tr>
														<td><label>Identificación de la Empresa (NIT):</label></td>
														<td><input type="text" name="nit" class="form-control"></td>
													</tr>


													<tr>
														<td><label>Nombre completo del Trabajador:</label></td>
														<td><input type="text" name="nombreTrabajador" class="form-control"></td>
													</tr>
													<tr>
														<td><label>Identificación (CC):</label></td>
														<td><input type="text" name="cedulaTrabajador" class="form-control"></td>
													</tr>
													<tr>
														<td><label>Lugar de expedición del doocumento de identidad:</label></td>
														<td><input type="text" name="expedicionTrabajador" class="form-control"></td>
													</tr>
													<tr>
														<td><label>Ingrese la fecha de inicio del Contrato:</label></td>
														<td><input type="text" name="diaInicioContrato" class="form-control"></td>
													</tr>

													<tr>
														<td><label>Ingresé la fecha en la que terminó el Contrato:</label></td>
														<td><input type="text" name="diaFinalContrato" class="form-control"></td>
													</tr>
													<tr>
														<td><label>Salario:</label></td>
														<td><input type="text" name="salario" class="form-control"></td>
													</tr>
													<tr>
														<td><label>Cesantías:</label></td>
														<td><input type="text" name="cesantias" class="form-control"></td>
													</tr>
													<tr>
														<td><label>Intereses sobre las Cesantías:</label></td>
														<td><input type="text" name="intereses" class="form-control"></td>
													</tr>
													<tr>
														<td><label>Primas:</label></td>
														<td><input type="text" name="primas" class="form-control"></td>
													</tr>
													<tr>
														<td><label>Vacaciones:</label></td>
														<td><input type="text" name="vacaciones" class="form-control"></td>
													</tr>
													<tr>
														<td><label>Ingrese el día del último pago:</label></td>
														<td><input type="text" name="diaPago" class="form-control"></td>
													</tr>
													<tr>
														<td><label>Ingrese el día de firma del finiquito:</label></td>
														<td><input type="text" name="diaFirma" class="form-control"></td>
													</tr>
													<tr>
														<td><label>Ingrese el mes de firma del finiquito:</label></td>
														<td><input type="text" name="mesFirma" class="form-control"></td>
													</tr>
												</tbody>
												<br>
												<input type="submit" value="Generar Finiquito" class="btn btn-primary btn-lg btn-block">
											</form>
										</div>
									</div>

								</div>						
							</div>
						-->

						</div>
					</div>
				</div>
			</div>

	<!--
	<h1 align="center">Generar Finiquito</h1>
	<form class="form-group" method="POST" action="/contratos">
		@csrf
		<div class="table table-striped">
			<tbody>
				<tr>
					<td>Nombre Empleador:</td>
					<td><input type="text" name="nombreEmpleador" class="form-control"></td>
				</tr>
				<tr>
					<td>Cédula:</td>
					<td><input type="text" name="cedulaEmpleador" class="form-control"></td>
				</tr>
				<tr>
					<td>Lugar de Expedición:</td>
					<td><input type="text" name="expedicion" class="form-control"></td>
				</tr>

				<tr>
					<td>Nombre Empresa:</td>
					<td><input type="text" name="nombreEmpresa" class="form-control"></td>
				</tr>
				<tr>
					<td>Domicilio Empresa:</td>
					<td><input type="text" name="domicilio" class="form-control"></td>
				</tr>
				<tr>
					<td>NIT:</td>
					<td><input type="text" name="nit" class="form-control"></td>
				</tr>


				<tr>
					<td>Nombre Trabajador:</td>
					<td><input type="text" name="nombreTrabajador" class="form-control"></td>
				</tr>
				<tr>
					<td>Cédula:</td>
					<td><input type="text" name="cedulaTrabajador" class="form-control"></td>
				</tr>
				<tr>
					<td>Lugar de Expedición:</td>
					<td><input type="text" name="expedicionTrabajador" class="form-control"></td>
				</tr>
				<tr>
					<td>Día Inicio Contrato:</td>
					<td><input type="text" name="diaInicioContrato" class="form-control"></td>
				</tr>

				<tr>
					<td>Día Finalización Contrato:</td>
					<td><input type="text" name="diaFinalContrato" class="form-control"></td>
				</tr>
				<tr>
					<td>Salario:</td>
					<td><input type="text" name="salario" class="form-control"></td>
				</tr>
				<tr>
					<td>Cesantías:</td>
					<td><input type="text" name="cesantias" class="form-control"></td>
				</tr>
				<tr>
					<td>Intereses sobre las Cesantías:</td>
					<td><input type="text" name="intereses" class="form-control"></td>
				</tr>
				<tr>
					<td>Primas:</td>
					<td><input type="text" name="primas" class="form-control"></td>
				</tr>
				<tr>
					<td>Vacaciones:</td>
					<td><input type="text" name="vacaciones" class="form-control"></td>
				</tr>
				<tr>
					<td>Día ultimo pago:</td>
					<td><input type="text" name="diaPago" class="form-control"></td>
				</tr>
				<tr>
					<td>Día de Firma:</td>
					<td><input type="text" name="diaFirma" class="form-control"></td>
				</tr>
				<tr>
					<td>Mes de Firma:</td>
					<td><input type="text" name="mesFirma" class="form-control"></td>
				</tr>
			</tbody>
			<br>
			<input type="submit" value="Generar Finiquito" class="btn btn-primary">

		</form>
	</div>-->

</section>