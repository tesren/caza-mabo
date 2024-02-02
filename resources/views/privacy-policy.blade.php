@extends('components.base')

@section('titles')
    <title>{{__('Políticas de Privacidad')}} - Caza Mabó</title>
    <meta name="description" content="{{__('Políticas de Privacidad de')}} Caza Mabó">
@endsection

@section('content')

    <div class="px-3 py-5 px-lg-5 py-lg-5 bg-dark text-white">
        <div class="container my-6">
            <div class="d-flex ff-oswald text-orange fs-5 pt-5 p-lg-0"><hr> {{__('Políticas')}}</div>
            <h1>{{__('Políticas de Privacidad')}}</h1>    
        </div>
    </div>

    <div class="container mb-6 mt-5">

        @if (app()->getLocale() =='es')
            <h2>AVISO DE PRIVACIDAD CLIENTE</h2>
            <p>De conformidad en lo dispuesto por la Ley Federal de Protección de Datos Personales en Posesión de los Particulares en adelante denominada como “La Ley” se emite el presente aviso de privacidad en los siguientes términos:</p>

            <h2>RESPONSABLE DE LOS DATOS PERSONALES</h2>
            <p>
                Para efectos del presente aviso de privacidad Domus Vallarta Inmobiliaria, S. A. DE C. V., (Nombre comercial Domus-Fine Real Estate, en adelante DVI) con domicilio en Mar Egeo 1428-2, Colonia Country Club, Guadalajara, Jalisco, México C.P. 44610, es el responsable de la obtención, divulgación, almacenamiento, uso, manejo, aprovechamiento, transferencia y/o disposición así como la protección de los datos personales que recabe de sus clientes (en adelante los Titulares).
            </p>

            <h3>
                DATOS PERSONALES RECABADOS
            </h3>
            <p>
                Los datos personales que DVI recaba de los Titulares son de manera enunciativa mas no limitativa los siguientes: Nombre, domicilio particular, correo electrónico, edad, fecha de nacimiento, sexo, estado civil, nacionalidad, teléfono, ocupación, RFC, datos laborales actuales, copia de identificación oficial con fotografía, copia de comprobante de ingresos, referencias bancarias, número de personas que dependan económicamente de él, entre otros.
                Sus datos personales son recabados vía correo electrónico o mediante la entrega de los documentos que acrediten los datos antes mencionados o mediante transferencias de datos.
            </p>

            <h3>POLÍTICA DE DATOS SENSIBLES</h3>
            <p>
                DVI por política no solicita ninguna información que bajo la ley se entiende como datos sensibles, tales como: religión, preferencias sexuales, opiniones políticas, entre otros. La empresa apoya y fomenta la diversidad y por lo tanto prohíbe cualquier acto discriminatorio o la solicitud de cualquier información que pudiese implicar un acto discriminatorio. En caso de que Usted proporcione datos sensibles la empresa los tratará y salvaguardará en términos de la ley.
            </p>

            <h3>FINALIDAD DEL TRATAMIENTO DE DATOS PERSONALES</h3>

            <p>
                Los datos que recabamos tienen como finalidad: (I) elaboración de un contrato de prestación de servicios entre DVI y clientes para establecer los términos y condiciones sobre la promoción del inmueble propiedad del cliente (II) Para la preparación de contratos de arrendamiento, promesa de compraventa, compraventa, traspaso, proyectos de inversión sobre los inmuebles promovidos por DVI (III) Para realizar cualquier gestión que permita confirmar la situación legal del inmueble promovido por DVI (IV) Para coordinar citas con prospectos en el domicilio del inmueble propiedad del cliente y promovido por DVI (V) Para intercambiar información y propuestas entre el prospecto y el cliente relacionados con el inmueble promovido por DVI (VI) Para investigar la integridad crediticia y legal del cliente (VII) Con la finalidad de cerrar todo tipo de operaciones inmobiliarias entre el prospecto y el cliente (VIII) Para informarle de promociones, ofertas y lanzamientos (IX) Para realizar actividades de mercadeo y prospección, (X) Para realizar análisis estadísticos y de mercado, (XI) Para invitarle a eventos (XII) Para mantener actualizados nuestros registros.
                De igual forma los datos personales recabados también podrán ser usados para atender requerimientos legales de autoridades competentes.
                DVI no es responsable de la veracidad ni la precisión de los datos que Usted les ha proporcionado ni tampoco los han verificado, sino que únicamente los recibe, registra y conserva. Asimismo, Usted declara y confirma que cuenta con el consentimiento expreso de aquellas personas de la cuales también proporciona información personal, como lo son ejemplificativamente: conyugue, concubina(o), dependientes económicos, parientes, referencias profesionales, etc.
            </p>

            <h4>EXEPCIONES</h4>
            <p>
                Cabe señalar que de conformidad con la ley existen supuestos en los cuales su consentimiento no es necesario para el tratamiento de sus datos personales, y por ello la ausencia del mismo o su negativa en su caso, no impide ni impedirá que DVI los trate (sus datos personales) en términos de la ley y demás regulaciones que resulten aplicables.
            </p>

            <h4>OPCIONES Y MEDIOS QUE  DVI OFRECE A LOS TITULARES PARA LIMITAR EL USO O DIVULGACION DE LOS DATOS PERSONALES.</h4>
            <p>
                Los datos personales de los Titulares serán tratados bajo la más estricta confidencialidad, cuidando las medidas de seguridad administrativas, físicas y técnicas que DVI implemente es sus políticas y procedimientos de seguridad internos evitando la posible divulgación ilícita de datos y limitando su uso a lo establecido en el presente aviso de privacidad.
            </p>

            <h4>MEDIOS PARA EJERCER LOS DERECHOS DEL TITULAR</h4>
            <p>
                En cualquier momento Usted o su representante legal debidamente acreditado, podrán ejercer los derechos de acceso y rectificación cuando consideren que son erróneos o inexactos, cancelación en caso de que considere que los datos no son tratados de forma adecuada y oposición en caso de que no quieran que sus datos sean tratados para las finalidades específicas. El ejercicio de uno de ellos no impide el ejercicio del otro y ninguno es presupuesto para el ejercicio de otro.

                Para ejercer sus derechos ARCO deberá; presentar su solicitud en nuestro domicilio ubicado en Mar Egeo 1428-2, Colonia Country Club, Guadalajara, Jalisco, México C.P. 44610 o enviarlo a nuestro departamento de datos personales al correo electrónico sistemas@domusvallarta.com con atención al departamento de protección de datos.

                La solicitud deberá contener los siguientes datos: (I) nombre del titular (II) domicilio y dirección de correo electrónico para notificarle la respuesta a la solicitud (III) una descripción clara y precisa de los datos respecto de los cuales se busque ejercer el derecho correspondiente (IV) el objetivo de la solicitud (V) cualquier elemento que facilite la localización de los datos y se deberá anexar copia de su identificación, y en su caso el documento mediante el cual se acredite la representación legal.

                El plazo de respuesta de su solicitud será de 20 días hábiles contados a partir del día en que se recibió la solicitud de acceso, rectificación, cancelación u oposición correspondiente. La respuesta le será comunicada dentro del plazo antes mencionado a la dirección de correo electrónico que proporciono en su solicitud o enviando carta al domicilio proporcionado en la misma. Una vez recibida dicha notificación tendrá un plazo de 15 días hábiles para hacerla efectiva en caso de ser procedente.

                En cualquier momento podrá revocar el consentimiento que nos ha otorgado para el tratamiento de sus datos personales, de tal forma que dejemos de hacer uso de los mismos. Para ello deberá presentar una solicitud en los términos mencionados para el ejercicio de los derechos ARCO. El procedimiento a seguir será el mismo que el previsto para el ejercicio de los derechos ARCO. En caso de ser procedente su solicitud sus datos dejaran de ser tratados por DVI.
            </p>
                
            <h4>
                TRANSFERENCIAS DE DATOS
            </h4>

            <p>
                Sus datos personales podrán ser transferidos a terceros nacionales o extranjeros en caso de ser necesario para el cumplimiento de las obligaciones contraídas en razón de la relación con DVI en los términos de la fracción VII del artículo 37 de la ley.

                Es importante hacer de su conocimiento, que  cualquier tercero que en razón de transferencias realizadas por DVI reciba sus datos personales tendrá las mismas obligaciones y responsabilidades que nosotros como responsables se sus datos y que el presente aviso de privacidad le será comunicado a dicho tercero.
            </p>
            
            <h5>CAMBIOS AL AVISO DE PRIVACIDAD</h5>
            <p>
                Cualquier cambio al presente aviso de privacidad, le será informado a través de los siguientes medios:

                Mediante correo electrónico que personalmente le enviaremos.
                Y mediante anuncios en el lugar visible del área operativa de DVI.
                De igual manera se les informa a los Titulares que el aviso de privacidad podrá ser modificado en cualquier momento con la finalidad de atender novedades legislativas así como modificación de políticas internas de DVI.

                Si se llegaran a modificar las finalidades para las cuales se tratan sus datos personales, en caso de ser necesario se solicitará de nuevo su consentimiento ya sea expreso o tácito atendiendo al caso partícular.
            
            </p>
            
        @else
            <h1>Confidentiality Policy</h1>
            <p>
                Any personal information, such as name, age, state, gender, telephones, email addresses, Facebook, Twitter and/or LinkedIn ID, address, RFC/CURP, credit card information, or signature (hereinafter referred to as DATA), requested for contracts, forms or through any other means by DOMUS VALLARTA INMOBILIARIA, S.A. DE C.V., located at KM 3.7 CARRETERA PUNTA MITA, INTERIOR 21-1. CONDOMINIO REAL DEL MAR. LA CRUZ DE HUANACAXTLE, 63732, BAHIA DE BANDERAS, NAYARIT, shall be used, dealt with and protected in accordance to the stipulations established under the Federal Law for the Protection of Personal Information and its regulations.

                The DATA shall only be used for these objectives: to grant the services and products requested, for notifications regarding new products and services related to those that have already been purchased or acquired, for notifications regarding status changes, to carry out studies and programs necessary to identify consumer habits, to carry out periodic evaluations in order to improve the quality of our products and services, to evaluate the quality of our services and generally speaking, to fulfill our obligations with our clients.
                
                The confidentially of the DATA is guaranteed and is protected by administrative, technical and physical security measures to avoid any damage, loss, modification, destruction, use, access or improper disclosure of information. Only authorized personnel will have access to the DATA.
                
                The DATA can only be given to third parties in the cases foreseen under the Federal Law for the Protection of Personal Information established under Article 37 of such.
                
                It is important to note that you have the right to access, rectify or cancel any of the DATA and refuse its use. In order to do so, you must present your request to the technology department under the stipulations established in Article 29 of the Federal Law for the Protection of Personal Information. This department is located at KM 3.7 CARRETERA PUNTA MITA, INTERIOR 21-1. CONDOMINIO REAL DEL MAR. LA CRUZ DE HUANACAXTLE, 63732, BAHIA DE BANDERAS, NAYARIT or via email message to sistemas@domusvallarta.com In this case we ask that you confirm the receipt of your email via telephone to +52 (329) 298 5010.                    
            </p>
        
        @endif
                
    </div>

@endsection