<html xml:lang="en" xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">

  <title>Contrato LAF</title>

<style type="text/css">

@font-face {font-family:'Roboto';
src:url('Roboto-Regular.ttf') format("truetype");}

@page {
 margin: 2cm;
}

body {
  /*font-family: sans-serif;*/
  margin: 0.5cm 0;
  text-align: justify;
}

#header,
#footer {
  position: fixed;
  left: 0;
  right: 0;
  color: #aaa;
  font-size: 0.9em;
}

#header {
  top: 0;
  border-bottom: 0.1pt solid #aaa;
}

#footer {
  bottom: 0;
  border-top: 0.1pt solid #aaa;
}

#header table,
#footer table {
	width: 100%;
	border-collapse: collapse;
	border: none;
}

#header td,
#footer td {
  padding: 0;
  width: 50%;
}

.page-number {
  text-align: center;
}

.page-number:before {
  /* content: "Page " counter(page);*/
  content: counter(page);
}

hr {
  page-break-after: always;
  border: 0;
}

</style>

</head>

<body marginwidth="0" marginheight="0">

  <div id="header">
    <table>
      <tbody><tr>
        <td style="width: 100%; font-size: 10pt;"><b>Contrato generado por LAF-Demo</b></td>
        <!-- <td style="text-align: right;">«Contrato»</td> -->
      </tr>
    </tbody></table>
  </div>

  <div id="footer">
    <div class="page-number"></div>
  </div>

  <p style="text-align: center; width: 100%; font-size: 10pt;"><b>CONTRATO INDIVIDUAL DE TRABAJO {{ $datos->tipoContrato }}</b></p>

  <p>

    <table style="width: 100%; font-size: 8pt;">
      <tbody>
        <tr>
          <td><b>1.	INFORMACION DE LAS PARTES CONTRATANTES</b></td>
        </tr>

        <tr>
          <td><b>1.1. <b>EL EMPLEADOR</b></b></td>
          <td><b>1.2. <b>El EMPLEADO</b></b></td>
        </tr>

        <tr>
          <td><b>NOMBRES:	1.1.1</b> {{ $datos->nombreEmpresa }}</td>
          <td><b>1.2.1</b> {{ $datos->nombreTrabajador }}</td>
        </tr>

        <tr>
          <td><b>DIRECCIÓN: 1.1.2</b> {{ $datos->direccionEmpresa }}</td>
          <td><b>1.2.2</b> {{ $datos->direccionTrabajador }}</td>
        </tr>

        <tr>
          <td><b>IDENTIFICACIÓN: 1.1.3</b> NIT {{ $datos->nit }}</td>
          <td><b>1.2.3</b> CC {{ $datos->cedulaTrabajador }}</td>
        </tr>

        <tr>
          <td><b>CORREO ELECTRÓNICO: 1.1.4</b> {{ $datos->emailEmpresa }}</td>
            <td><b>1.2.4</b> {{ $datos->emailTrabajador }}</td>
          </tr>

          <tr><td></td></tr>
          <tr><td></td></tr>

          <tr>
            <td><b>2. ELEMENTOS DEL CONTRATO DE TRABAJO</b></td>
          </tr>

          <tr>
            <td><b>2.1 EXTREMOS TEMPORALES</b></td>
            <td><b>2.2 SALARIO</b></td>
          </tr>

          <tr>
            <td><b>2.1.1 INICIO:</b>	{{ $datos->inicioContrato }}</td>
            <td><b>2.2.1 MONTO (MENSUAL):</b>	{{ $datos->salario }}</td>
          </tr>

          <tr>
            <td><b>2.1.2 TERMINA:</b>	{{ $datos->finalContrato }}</td>
            <td><b>2.2.2 PERIODICIDAD:</b>
              @if($datos->tipoContrato == 'A termino fijo')
                {{ $datos->periodicidadSalario }}
              @else
                Indefinido.
              @endif
            </td>

          </tr>

          <tr>
            <td><b>2.1.3. DURACION:</b>	{{ $datos->tipoContrato }}</td>
          </tr>	

          <tr><td></td></tr>
          <tr><td></td></tr>

          <tr>
            <td><b>2.3 HORARIO DE TRABAJO (LUNES A {{ $datos->lunesA }})</b></td>
            <td><b>2.4 TERRITORIALIDAD</b></td>
          </tr>

          <tr>
            <td><b>2.3.1 CICLO 1:</b>	{{ $datos->ciclo1 }}</td>
            <td><b>2.4.1 LUGAR DE PPS:</b>	{{ $datos->ciudadContrato }}</td>
          </tr>

          <tr>
            <td><b>2.3.2 CICLO 2:</b>	{{ $datos->ciclo2 }}</td>
            <td><b>2.4.2 FORMA DE PAGO:</b>	{{ $datos->formaPago }}</td>
          </tr>

          <tr><td></td></tr>
          <tr><td></td></tr>

          <tr>
            <td><b>2.5 CARGO A DESEMPEÑAR</b></td>
          </tr>

          <tr>
            <td><b>2.5.1 DENOMINACION:</b> {{ $datos->cargo }}</td>
          </tr>

          <tr>
            <td><b>2.5.2 DETALLE DE OBRA Y/O FUNCIONES:</b> {{ $datos->funciones }}</td>
          </tr>

        </tbody></table>
      </p>

      <p style="font-size: 7.5pt;">
        Entre las partes, <b>EL EMPLEADOR</b> y <b></b>, plenamente identificadas en el encabezado, hacemos constar la
        celebración del presente contrato individual de trabajo, el cual se regirá, en lo general y no previsto, por las
        estipulaciones del régimen laboral ordinario y en lo particular, por las siguientes cláusulas: <b>PRIMERA. OBJETO</b>.
        <b>{{ $datos->nombreTrabajador }}</b> se obliga a prestar, de manera personal y exclusiva, a <b>EL EMPLEADOR</b>
        toda su capacidad normal de trabajo en el desempeño de las funciones inherentes al cargo para el cual se le designa
        o las que se le asignen en lo sucesivo por <b>EL EMPLEADOR</b> o sus representantes, de conformidad con las órdenes
        o instrucciones que por ellos se le dirija. Todo lo cual será bajo la remuneración estipulada a cargo de <b>EL EMPLEADOR</b>.
        <b>SEGUNDA. OBLIGACIONES</b>. Son obligaciones las siguientes: <b>A) DE {{ $datos->nombreTrabajador }}</b>: 1. Cumplir estrictamente
        con el horario de trabajo asignado definido en el numeral 2.3 del encabezado o el que le asigne <b>EL EMPLEADOR</b> o sus representantes;
        2. A permanecer en el sitio de trabajo durante su jornada y no ausentarse de él. 3. Informar a <b>EL EMPLEADOR</b>
        de las anomalías que puedan presentarse en las actividades de la Empresa. 4. Acatar las órdenes e instrucciones
        impartidas por <b>EL EMPLEADOR</b> o su representante. 5. A Observar diligencia y cuidado en el desarrollo de sus
        funciones. 6. Cumplir cabalmente con las obligaciones especiales establecidas en el artículo 58 del Código Sustantivo
        del Trabajo, en adelante CST, y a no ejecutar los actos establecidos en el artículo 60 del mismo ordenamiento,
        normas estas que se entienden incorporadas al presente contrato. B) DE <b>EL EMPLEADOR</b>: 1. A pagar en las
        proporciones y oportunidades establecidas en este contrato y en la ley, los salarios y prestaciones a favor de
        <b>{{ $datos->nombreTrabajador }}</b>. 2. Guardar absoluto respeto frente las creencias, opiniones o manifestaciones
        respetuosas de <b>{{ $datos->nombreTrabajador }}</b>. 3. Cumplir cabalmente con las obligaciones especiales
        establecidas en el artículo 57 del Código Sustantivo del Trabajo, en adelante CST, y a no ejecutar los actos
        establecidos en el artículo 59 del mismo ordenamiento. <b>TERCERA</b>. La prestación del servicio por parte de
        <b>{{ $datos->nombreTrabajador }}</b> se desarrollará en la ciudad que se estipula en el numeral 2.4.1 del
        encabezado, sin perjuicio de que, por necesidad de la obra o la labor contratada se requiera su traslado a otro
        sitio, caso en el cual y desde ahora este se obliga a aceptarlo, siempre y cuando no se afecte su honor, su
        dignidad y derechos mínimos, y sin que, además, se considere que dicho traslado es una modificación unilateral
        del contrato, como tampoco desmejora alguna de la remuneración. Igualmente, en caso de que se requiera la
        prestación del servicio en jornada nocturna, <b>{{ $datos->nombreTrabajador }}</b> la acepta desde ya, sin
        perjuicio de que <b>EL EMPLEADOR</b> asuma el pago de los recargos correspondientes. <b>CUARTA. SALARIO. </b>
        El salario convenido por las partes es el que se señala en el numeral 2.2.1 del encabezado, y pagadero, de manera
        vencida, con la periodicidad establecida en el numeral 2.2.2 del mismo encabezado. Dicho salario incorpora o
        contiene el pago de los descansos legalmente obligatorios. En cuanto a la remuneración por trabajo suplementario
        o de horas extras, <b>EL EMPLEADOR</b> no reconocerá pago alguno por dicho concepto sin que medie previa autorización
        escrita de él o de sus representantes para realizarlo; en caso de que se requiera trabajo suplementario de manera
        urgente o imprevista, <b>{{ $datos->nombreTrabajador }}</b> informará de tal circunstancia a <b>EL EMPLEADOR</b>
        quien decidirá si lo autoriza. Si el trabajo es en dominical o festivo, y se presta ocasionalmente, <b>EL EMPLEADOR</b>
        tiene derecho a elegir entre un descanso compensatorio remunerado o a su retribución en dinero de conformidad
        con lo normado en el artículo 179 del CST, subrogado por el artículo 26 de la ley 789 de 2003. Ahora, si el
        trabajo en dominicales o festivos es habitual, <b>{{ $datos->nombreTrabajador }}</b> tendrá derecho a un descanso
        compensatorio remunerado en otro día de la semana sin lugar a recargo. <b>Parágrafo. {{ $datos->nombreTrabajador }}</b>
        autoriza desde este momento a <b>EL EMPLEADOR</b> para que deposite los salarios, prestaciones, liquidaciones y
        demás emolumentos a su favor en la cuenta de ahorros {{ $datos->cuentaBancaria }} de {{ $datos->banco }}, la cual
        declara ser de su propiedad exclusiva y por lo cual declara exenta de responsabilidad a <b>EL EMPLEADOR</b> por
        cualquier siniestro que pueda ocurrir en la mencionada cuenta después de efectuado el depósito. En todo caso, <b>EL EMPLEADOR</b>
        podrá efectuar el pago en efectivo directamente a <b>{{ $datos->nombreTrabajador }}</b> para lo cual, este suscribirá
        el comprobante respectivo.  <b>QUINTA. PAGOS NO SALARIALES</b>. No se consideran salarios, y por tanto, no se
        consideran factores para liquidar acreencias laborales, los pagos que según la ley y la jurisprudencia carecen
        de ese carácter, los cuales, estipulan expresamente las partes, que tampoco lo son, aunque originariamente la
        hayan tenido y perdieren por virtud de este contrato, los siguientes conceptos: 1. Suministros en especie tales
        como alimentación, alojamiento, vestuario, y/o los bienes y servicios con que la empresa beneficie a
        <b>{{ $datos->nombreTrabajador }}</b>, por mera liberalidad o discrecionalidad, aún se suministren de manera
        habitual, permanente o esporádica y sin distingos o excepciones de ninguna naturaleza. 2. Todas las primas o
        bonificaciones extralegales de igual naturaleza al numeral anterior, dígase, de antigüedad, de vacaciones, de
        navidad, administrativa, de dirección, de rodamiento, de costo de vida, de educación o capacitación, técnica,
        de vehículo, de rendimiento, de calidad, de salud y aquellas otras que se le asemejen en cuanto a sus orígenes,
        finalidad o naturaleza y que provengan de la mera liberalidad o discrecionalidad de la Empresa, sin importar que
        se otorguen de manera periódica  u ocasional. Por lo tanto, las partes reiteran que los anteriores conceptos
        <b>NO</b> son salarios, ni inciden en la liquidación de créditos laborales, por lo que se aclara que únicamente
        el salario es la suma convenida en el numeral <b>2.2.1</b> del encabezado de este contrato. <b>SEXTA. DEDUCCIONES.
          {{ $datos->nombreTrabajador }}</b> autoriza de forma pura y simple a <b>EL EMPLEADOR</b> para que, una vez
        terminado el contrato, por cualquier causa, compense, con el valor de los salarios, prestaciones, indemnizaciones
        o bonificaciones, y aún hasta la total concurrencia de estos, los siguientes conceptos: 1. Las sumas que adeude
        por préstamos otorgados por <b>EL EMPLEADOR</b> y que se encuentren autorizados expresamente; 2. El valor de las
        herramientas, insumos, mercancías, equipos o demás bienes que <b>{{ $datos->nombreTrabajador }}</b> ha recibido
        de <b>EL EMPLEADOR</b> o de terceros para el desarrollo de la labor y que fueren extraviados o averiados por su
        negligencia y/o culpa y/o dolo reconocido, salvo que, en el caso de las herramientas y enseres, se haya producido
        su desgaste o deterioro por la actividad normal u ordinaria de los mismos. 3. Las sumas de dinero que se le hayan
        entregado por <b>EL EMPLEADOR</b> o por terceros, para su manejo o para la entrega a la Empresa, y que haya
        extraviado, apropiado o permitido su hurto por no observar las mínimas reglas de seguridad. 4. El valor de los
        días que, según este contrato, deba reintegrar o pagar, por faltar al deber de preavisar la terminación unilateral
        del contrato sin justa causa por su parte. 5. El valor de los aportes a la SSI no cubiertos por él durante el
        periodo de licencia no remunerada. <b>SEPTIMA. TERMINACION NATURAL Y CON JUSTA CAUSA</b>. El presente contrato
        termina
        @if($datos->tipoContrato == 'A término fijo')
          el {{ $datos->finalContrato }}
        @elseif($datos->tipoContrato == 'Por obra o labor determinada')
          por la terminación de la obra o labor contratada o
        @endif
        por las causales previstas en el artículo 5° de la Ley 50 de 1990 y el artículo 7° del
        Decreto 2351 de 1965, sin preaviso, excepto en los casos contemplados en los numerales 9 a 15 de la última norma
        citada, pues según esta, se requiere preaviso no menor de 15 días. Quien termina el contrato debe aducir el
        motivo de dicha decisión sin que pueda alegar válidamente otros motivos. <b>OCTAVA. TERMINACIÓN SIN JUSTA CAUSA
          POR PARTE DE {{ $datos->nombreTrabajador }}</b>. <b>{{ $datos->nombreTrabajador }}</b> podrá dar por terminado,
        sin justa causa, el presente contrato, caso en el cual deberá avisar por escrito de dicha determinación a
        <b>EL EMPLEADOR</b> con una anticipación no inferior a <b>TREINTA (30) DÍAS</b> a la fecha de su retiro, a
        efectos de que <b>EL EMPLEADOR</b> tenga la oportunidad de ponderar las alternativas de seleccionar, contratar
        y capacitar la persona de reemplazo. No obstante, si <b>{{ $datos->nombreTrabajador }}</b> deja de prestar el
        servicio antes del término mencionado, o presenta renuncia intempestiva o inmediata, autoriza desde ya a
        <b>EL EMPLEADOR</b> para que de la liquidación de sus salarios, prestaciones y/o bonificaciones, descuente el
        valor correspondiente a los días que falten para completar ese término o la totalidad de este. <b>NOVENA.
          FALTAS GRAVES</b>. Además de las causales establecidas en la ley para dar por terminado por justa causa, por
        parte de <b>EL EMPLEADOR</b>, en el presente contrato, las partes calificamos, de consuno, como <b>FALTAS GRAVES</b>
        las siguientes conductas de <b>{{ $datos->nombreTrabajador }}: 1.</b> El no acatamiento de las funciones, ordenes
        o instrucciones, así como de sus obligaciones establecidas en la ley y en  este contrato; <b>2.</b> Llegar al sitio
        de trabajo en estado de embriaguez o alicoramiento, o ingerir alcohol en su jornada de trabajo, aún se trate de
        una mínima cantidad; así mismo, cuando se presente bajo el influjo de sustancias alucinógenas o las consuma o
        posea en el sitio de trabajo o las venda, ofrezca o facilite a sus compañeros de trabajo o terceros, aún se trate,
        inclusive, de dosis mínima personal; <b>3.</b> El hecho de que <b>{{ $datos->nombreTrabajador }}</b> no se presente
        a trabajar a una (1) sesión completa de trabajo sin excusa justificada; la calamidad doméstica, entendiéndose esta
        como la enfermedad o accidente de los padres, hijo, cónyuge, compañera(o) permanente, cuyo soporte documental deberá
        presentar <b>{{ $datos->nombreTrabajador }}</b>. En cuanto a las incapacidades temporales, estas deberán ser expedidas
        por el médico tratante adscrito a la EPS a la que se encuentre afiliado <b>{{ $datos->nombreTrabajador }}</b>, y
        presentadas, a más tardar al segundo (2º) día hábil de otorgadas, de manera que, expirado este plazo sin que se
        presente la respectiva incapacidad, se entenderá que <b>{{ $datos->nombreTrabajador }}</b> ha incurrido en la
        presente falta grave. <b>4.</b> La conducta, aun por primera vez, consistente en amenazar o agredir, física o
        verbalmente a los jefes o compañeros de trabajo. <b>5.</b> Presentar documentos alterados o falsos para acceder
        al contrato de trabajo, o mantenerse en el cargo o para justificar cualquier asunto o solicitar algún beneficio.
        <b>6.</b> Propiciar o participar en desavenencias con los compañeros de trabajo o jefes. <b>7.</b> Abandonar el
        sitio de trabajo sin la previa autorización de sus jefes durante la jornada laboral. <b>8.</b> La asistencia
        retardada, por segunda vez, al sitio de trabajo sin justa causa. <b>9.</b> Realizar trabajos o actividades
        ajenas al servicio contratado, para sí o para terceros <b>10.</b> Utilizar las herramientas o equipos encomendados
        para la labor en actividades ajenas a la ejecución de sus labores. <b>11.</b> Sustraer insumos, herramientas o
        equipos de las instalaciones de la empresa. <b>12.</b> La renuencia u olvido del uso de los elementos de protección
        suministrados por <b>EL EMPLEADOR</b> o sus representantes.  <b>DÉCIMA. PERIODO DE PRUEBA</b>. El Período de
        prueba es la etapa inicial del presente contrato de trabajo, el cual tiene por objeto, por parte de <b>EL EMPLEADOR</b>,
        apreciar las aptitudes de <b>{{ $datos->nombreTrabajador }}</b>, y por parte de éste, la conveniencia de las
        condiciones del trabajo. En tal sentido, las partes pactamos que exista ese periodo durante
        @if($datos->tipoContrato == 'A término fijo')
          <b>15 días</b>,
        @else
          <b>1 mes</b>
        @endif
        no prorrogables, durante los cuales el presente contrato puede darse por terminado unilateralmente en cualquier
        momento, sin previo aviso, por cualquiera de las partes y sin lugar a indemnización alguna. Se aclara que durante
        el periodo de prueba <b>{{ $datos->nombreTrabajador }}</b> gozará de todas las prestaciones. <b>DECIMAPRIMERA.
          INVENCIONES</b>. las partes acuerdan que todas la invenciones, descubrimientos y trabajos originales concebidos
        o hechos por <b>{{ $datos->nombreTrabajador }}</b> en vigencia del presente contrato pertenecerán a <b>EL EMPLEADOR</b>,
        por lo cual, <b>{{ $datos->nombreTrabajador }}</b> se obliga a informar a aquel, y de manera inmediata, sobre
        la existencia de dichas invenciones y/o trabajos originales <b>{{ $datos->nombreTrabajador }}</b> accederá a
        facilitar  el cumplimiento oportuno de las correspondencias formalidades y dará su firma o extenderá los poderes
        y documentos necesarias para transferir la propiedad intelectual a <b>EL EMPLEADOR</b> cuando así se lo solicite.
        <b>DECIMOSEGUNDA. DIRECCION DEL TRABAJADOR: {{ $datos->nombreTrabajador }}</b> se compromete a informar por escrito
        a <b>EL EMPLEADOR</b> cualquier cambio de dirección a la registrada en el numeral <b>1.2.2</b> del encabezado de
        este contrato, teniéndose como suya para todos los efectos legales, por ende, para dirigir cualquier comunicación
        escrita. Igualmente, <b>{{ $datos->nombreTrabajador }}</b> se compromete a informar por escrito a <b>EL EMPLEADOR</b>
        cualquier cambio de correo electrónico diferente al registrado en el numeral <b>1.2.4</b> del encabezado de este
        contrato, teniéndose como suyo para todos los efectos legales, por ende, para dirigir cualquier comunicación o
        notificación, incluso, desde un buzón de correo diferente al reportado en el numeral <b>1.1.4</b> del encabezado
        de este contrato. <b>DECIMOTERCERA</b>. EFECTOS. El presente contrato reemplaza en su integridad y deja sin
        efecto cualquier otro contrato verbal o escrito celebrado entre las partes con anterioridad pudiendo las partes
        convenir por escrito modificaciones al mismo los que forman parte integrante de este contrato.
      </p>

      <p style="font-size: 7.5pt;">
        Para constancia se firma en Tuluá, hoy {{ $datos->fechaFirmaContrato }}, en dos (2) ejemplares del mismo tenor
        y contenido, destinados, uno para <b>EL EMPLEADOR</b> y, el otro, para <b>{{ $datos->nombreTrabajador }}</b>,
        quien declara haber recibido la copia correspondiente.
      </p>

      <br>

      <p>
        <table style="width: 100%; font-size: 8pt;">
          <tbody>

            <tr>
              <td><b>EL EMPLEADOR,</b></td>
              <td><b>EL EMPLEADO,</b></td>
            </tr>

            <tr><td></td></tr>
            <tr><td></td></tr>
            <tr><td></td></tr>
            <tr><td></td></tr>
            <tr><td></td></tr>
            <tr><td></td></tr>
            <tr><td></td></tr>
            <tr><td></td></tr>
            <tr><td></td></tr>
            <tr><td></td></tr>
            <tr><td></td></tr>
            <tr><td></td></tr>

            <tr>
              <td><b>{{ $datos->nombreRepresentante }}</b></td>
              <td><b>{{ $datos->nombreTrabajador }}</b></td>
            </tr>

            <tr>
              <td>Cédula de ciudadanía {{ $datos->cedulaRepresentante }} de {{ $datos->expediciónRepresentante }}</td>
              <td>Cédula de ciudadanía {{ $datos->cedulaTrabajador }} de {{ $datos->expedicionTrabajador }}</td>
            </tr>

            <tr>
              <td>Representante Legal de <b>empresa</b></td>
            </tr>
          </p>
        </tbody></table>

      </body></html>