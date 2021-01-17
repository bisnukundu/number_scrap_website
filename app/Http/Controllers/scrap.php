<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Goutte\Client;
use Symfony\Component\HttpClient\HttpClient;

class scrap extends Controller
{
    // For first method 
    public $prefijo_movil = [];
    public $prefijo_movil_num = [];
    public $prefijo_index = [];
    public $prefijo_index_num = [];
    public $all_data = [];
    // For withparam method 
    public $params_data = [];
    public $params_data_num = [];
    public $final_num = [];
    public $search_q = [];



    public function first(Request $request)
    {
        // This code only needed when Search 
        if (isset($request->all()['search'])) {
            $this->search_q[] = $request->all()["search"];
            $num_ =  str_split($this->search_q[0]);
           

            if (count($num_) > 1) {
                $id = '';
                $spin_txt = '';
                $heading_title = '';
                $title = '';
                if (count($num_) === 3) {
                    $id = implode("", $num_);
                    if ($id != '') {
                        $title = "🥇 Prefijo $id Provincia ✔️ 【en España】";
                        $heading_title = "<h1 class='fw-bolder my-5 py-3 text-center border-bottom'>🥇 Prefijo $id Provincia ✔️ 【en España】</h1>";

                        $spin_txt = $this->randomizeString("
                        <p>El {prefijo|código de área} $id {está asignado|esta designado|corresponde} {exclusivamente|específicamente} {a la provincia|al territorio|localidad} que ves arriba, aquí {también|además} se ven {utilizados|empleados} los {prefijos|códigos} de área. {Distribuidos|Repartidos} entre sus {sectores|distritos} y {operadoras|compañías} telefónicas.</p>
                        
                        <h2>Qué es un prefijo telefónico {en |}(España)?</h2>
                        
                        <p>Los {prefijos|códigos de área} en {territorio español|España} se {diseñaron|crearon} para {organizar|clasificar} las {diferentes|distintas} regiones {del país|de la nación} con el {objetivo|fin} de que exista una {forma|manera} {sencilla|simple|fácil} de {realizar|remitir} y recibir llamadas por vía telefónica. En {este sentido|esta dirección} los {prefijos|códigos de área} {son similares|tienen similitud} a los códigos postales, aunque no {tengan|exista} una {relación|asociación} directa entre {los mismos|ellos}, {sin embargo|pero} tiene un {fin|objeto final|objetivo} {semejante|similar|parecido} de {organizar|clasificar} el territorio Español para {hacer simple|simplificar|facilitar} las {comunicaciones|conexiones} entre {los individuos|las personas}, {empresas|compañías} e {organizaciones|instituciones}.</p>
                        
                        <p>Los {códigos de áreas|prefijos} telefónicos están {organizados|distribuidos} de {forma|manera} {simple|práctica} que {facilite|permita} al {destinatario|receptor} identificar de qué {distrito|localidad| provincia} de España se está {realizando|remitiendo| emitiendo} la llamada. Por lo que es {posible|probable} con estos {3 dígitos|prefijos} $id {conocer|saber|identificar| reconocer}  desde donde nos están {llamando|remitiendo la llamada}. 
                         {Esta organización|este sistema|esta clasificación} se ha {normalizado|estandarizado} que todos los números {de teléfono|telefónicos} poseen 9 dígitos, {a excepción|excepto} los números de {urgencia|emergencia}, números de información, {atención al cliente|soporte técnico} y números de {interés social|casos sociales}. </p>
                        
                        <h3>Cuánto vale llamar al prefijo $id: es de pago?</h3>
                        
                        <p>{Verdaderamente|Realmente|en realidad} no, el {precio|costo|coste} de {iniciar|realizar|hacer} una llamada con el {código de area|prefijo} $id es {muy|bastante} {barato|accesible|asequible}: <strong>GRATIS EN LA MAYORÍA DE COMPAÑÍAS</strong>. </p>
                        
                        <p>Esto {depende|va a depender} por supuesto de cada {compañía|operadora} telefónica, {sin embargo|pero} al {ser|tratarse de} una llamada {dentro de España|nacional} {la tarifa|el costo|el precio} es {regular|normal} de {zona|ámbito} nacional. {También|E incluso} puede {ser|resultar} {gratis|gratuita} si es {hecha|realizada} desde un {móvil|terminal} con el que se {tenga|mantenga} un {acuerdo|contrato|convenio} de {utilidad|servicio} plano o de llamadas {infinitas|ilimitadas}.</p>
                        
                        
                        <p>{Esto va a depender|esto se ve relacionado} {Por supuesto|claro} al {operador telefónico| prestador del servicio} por el que se esté {conversando|hablando}.  Si {posee|tienes|cuentas con} un {plan|servicio} de llamadas ilimitadas {las tarifas|los gastos} telefónicos se ven {anexados|incluidos|indexados|añadidos} y {solamente|únicamente|solo} serán {cobrados|descontados} si se {exceden|sobrepasan} los {minutos|segundos} {programados|definidos|destinados|planificados|dados} en el {plan|programa|servicio} de llamadas telefónicas (en caso de tenerlo). Si esto {llega a pasar|pasase|te pasa} puedes {conocer|consultar|ver} {la tarifa|los costos|los precios} {consultando|contactando} a tu {operador telefónico|compañía telefónica} directamente.</p>
                        
                        <p>{Pero en líneas generales|Generalmente|Casi siempre} las llamadas {hechas|realizadas} {pormedio|a través} de prefijo $id dentro del {país|territorio nacional} no se ven {modificadas|alteradas} por {precios|costos} {exagerados|excesivos|desmesurados|desmedidos| desproporcionados}, haciéndolos muy {baratos|accesibles|asequibles} a todas {las personas|los ciudadanos|los individuos} y una gran {alternativa|opción} para {compañías|empresas} y {organizaciones|instituciones}: GRATIS NORMALMENTE.</p>
                        
                        <h2>Cómo busco un número dentro del prefijo telefónico $id?</h2>
                        
                        <p>{Hacer|Realizar|iniciar} una {búsqueda|investigación| exploración|indagación} de un número telefónico que {posea|tenga|contenga} el {código de area|prefijo} $id es muy {sencillo|fácil|simple} {por medio|a través} de {este|nuestro} directorio {electrónico|digital|online| en línea}. No {te hace falta|necesitas|requieres} de conocimientos {complejos|complicados|compuestos|amplios} sobre {telecomunicaciones|tecnología|comunicación electrónica}. </p>
                        
                        <p>Con {poseer|tener|disponer} en {tu|vuestra|sus} {poder|manos} el número {telefónico|de teléfono} que {deseas|quieres} {conocer|investigar|identificar} {podemos|logramos|conseguimos} darte {datos|información} sobre {operadora|compañía} telefónica de afiliación, {localidad|provincia} en la que se encuentra, si se encuentra {asignado|activo} o no a algún suscriptor, fecha de asignación y {opiniones|comentarios} reales  de {individuos|personas} que tengan {contacto|comunicación} o han {tenido|mantenido} {contacto|comunicación} con el numero {determinado|en cuestión}. Recuerda que la info la extraemos de internet y podría no ser verídica.</p>
                        
                        <p>El número que {queremos|deseamos|tenemos que} localizar lo podemos {rastrear|ubicar|identificar} {por medio|a través} del {buscador|rastreador} que {simplifica|facilita} {el portal| la web|la página}, el cual nos {lleva|redirecciona} {directamente|hacia} {los datos|la información} {sobre|referente} al número. En este caso $id </p>
                        
                        <p>O {además|también} podemos {clicar|pinchar} en el  {código de area|prefijo} $id, el cual nos {redirige|re direccionara} a una {ventana|ventanilla} con {todos|la totalidad de} los prefijos $id {del territorio|de la provincia} de arriba escrita en {mezcla|combinación} con dos dígitos que les {continúan|siguen} y son {característicos |propios} de cada {compañía telefónica|operadora}. {Elegimos|Seleccionamos|Pinchamos} el que {va|corresponde} con {vuestro|nuestro|el} número {en cuestión| a identificar} y {vemos|nos fijamos} si aparece en {listado|lista}.</p>
                        
                        <p>El {sistema|procedimiento} de {este portal|esta web} es muy {instintivo|simplificado|simple|fácil} {la información|los datos} de un número telefónico con {unos|pocos} clics. Se puede {ubicar|buscar|encontrar|identificar} lo que desees {sobre|acerca} de un número telefónico, {además|incluso|también} el distrito de procedencia.</p>
                        
                        <h3>Puedo saber opiniones reales de un número que comienza por $id?</h3>
                        
                        <p>{Por supuesto|Claro que sí}. {Esta|Nuestra} {Pagina|web} {tiene|posee} {muchos|cientos de|varios|multiples} usuarios que {todos los dias|diariamente} {renuevan|actualizan|innovan} la información {sobre|referente} a las {distintas|diferentes} {variantes|combinaciones} telefónicas que {hay|existen} en la secuencia del {código de area|prefijo} $id.</p>
                        
                        <p>{Esta característica es necesaria|Este punto es crítico} para {poner la confianza|confiar} en alguna {página|web}, {por suerte tenemos|meritos tenemos por nuestros} usuarios {muy|altamente} {interactivos|activos|participativos|dinámicos} que {brindan|ofrecen|comentan} {datos unicos|información original}  sobre los números de teléfonos {buscados|consultados}. {No dudes|No te preocupes} en {emplear|utilizar} nuestro directorio {electrónico|online|en linea|digital}, {caracterizado|categorizado} por su {inmediatez|veracidad} y {eficacia|facilidad}.</p>
                        
                        <p>{Vuestro|Nuestro} {simple|fácil} {mecanismo|sistema} de {ubicación|identificación|rastreo} {permite|facilita} a {cualquier persona|todos} {ubicar|localizar} {datos|información verdadera y ampliamente} verificable {sobre|referente a} un número telefónico en concreto. Ya que {brindamos|aportamos} {información|datos} como provincia, distrito, asignación, fecha de asignación y {comentarios|opiniones} {VERDADEROS|REALES} de {ciudadanos|personas} que tengan {contacto|comunicación} con dicho número. En {algunas situaciones|algunos casos} {las personas|los usuarios|los participantes} pueden dejar {datos|información detallada} {referente|sobre} el suscriptor o dirección exacta del teléfono, {así mismo|igualmente} si {quieres|deseas} ser {localizado|ubicado} {fácilmente|de manera simple} puedes {facilitar|dejarnos} información {sobre|acerca de} tu {número de teléfono|combinación telefónica} con {código de area|prefijo} $id, con ello {multiples|muchas} personas pueden ponerse en {contacto|comunicación} con tu número fijo.</p>
                        
                        <p>Si {tienes|gozas de} nuestro servicio y {posees|tienes} información {sobre|acerca de} alguna {secuencia|combinación} telefónica no {lo pienses|dudes} en dejar tu {opinión|comentario} en nuestra {taquilla|caja} de {opiniones|comentarios} ubicados al {final|terminar} de cada {ventana|pagina}. Esto {facilita|garantiza|permite} que {el|nuestro} {directorio|sistema} crezca y {brinde|proporcione} {datos|información} más {inmediata|directa} {acerca de|sobre} algún número telefónico. </p>");
                    }
                    
                } else if (count($num_) === 5) {
                    $id = implode("", $num_);
                    if ($id != '') {
                        $title = $this->randomizeString("🥇 {De quién es|A quién pertenece} el bloque $id ✔️ 【en España】");
                        $heading_title = $this->randomizeString("<h1 class='fw-bolder my-5 py-3 text-center border-bottom'>🥇 {De quién es|A quién pertenece} el bloque $id ✔️ 【en España】</h1>");
                        $spin_txt = $this->randomizeString("
                        <p>{En algunos casos|A veces} cuando {recibimos|atendemos|admitimos} una llamada de un número <strong>(como podría ser $id)</strong> {incierto| no identificable|incognito|anónimo|desconocido}, y {deseamos|queremos} {conocer|saber|identificar} quién {llama|es}, se {requiere|necesita} {soporte|ayuda} {profesional|de un especialista}, {sin embargo|pero} {en la actualidad|actualmente|hoy } y {por el|gracias a} internet, {no es necesario| no se requiere} {recurrir|ir|contactar} a un {especialista|profesional|técnico}, o a un {equipo|organismo} específico para {tener|obtener|conseguir} {esta información|estos datos}.</p> 
                        
                        <p>{Ejemplo de ello|Por ejemplo}, {sabemos|se sabe} que el {grupo|bloque} de {secuencia|numeración} $id, es el {designado|asignado} {a la compañía de arriba mencionada|al operador mencionado} y está {compuesto|organizado} por miles de números telefónicos {íntegramente|específicamente} {asignados|adjudicado|otorgado}, y se {organizan|distribuyen|reparten} en los {distintos|diferentes} {municipios|distritos} de una {localidad|provincia|área}.</p>
                        
                        <p>De los {distintos|diferentes} datos informativos que {posea|tenga} un número de teléfono fijo del bloque $id, {otorgado|asignado|designado} se {indaga|investiga|busca} {inmediatamente|automáticamente} {la información|los datos} que necesitas para tí, como: {municipio|distrito}, {localidad|provincia}, e incluso {domicilio|dirección}, y hasta nombre del {suscriptor|propietario}. Te {facilitara|ayudara} a agendar cualquier número fijo que desees {ubicar|localizar}.</p>
                        
                        <h2>Cuánto {cuesta|vale} {una llamada|llamar} al prefijo $id?</h2>
                        
                        <p>{contactar|Llamar} a un número {designado|asignado|otorgado} con el prefijo $id, es muy {simple|sencillo}, solo debes {acceder|ingresar|entrar} a nuestra {página|web}, y {colocar|poner} el número {entero|completo} en el {rastreador|buscador} de números telefónicos, los {códigos de área|prefijos} de $id son de alguna operadora y al ser {privada|particular|no pública} esta compañía telefónica, {están|se encuentran} {designados|asignados} a las {ciudadades|capitales} y {localidades|provincias} grandes, ten {precaución|cuidado|reserva|alerta|atención} cuando {trates de|intentes} {contactar|llamar|comunicarte}, porque raramente pero sí a veces son {considerados|conocidos} como números de {SPAM|precio|tarifación} especial.  </p>
                        
                        <h2>Como encuentro un número con este prefijo telefónico?</h2>
                        
                        <p>Si {deseas|quieres} {ubicar|encontrar|localizar} una llamada de un número con este {código de área|prefijo}, que {encontraste|hallaste|viste} registrado en tu {agenda|registro} de llamadas, es muy {fácil|simple|sencillo}, {solamente|únicamente|solo} debes {acceder|ingresar|entrar} el prefijo $id y la {culminación|terminación} del número {entero|completo}, al {rastreador|buscador} en nuestro {portal|web}, y en un {clic|clikeo} te {encontraremos|ubicaremos} el número por {localidad|área|territorio|provincia}. </p>
                        
                        <h3>Que es un bloque de numeración? </h3>
                        
                        <p{En España|En territorio español} un bloque de numeración, es {una secuencia|un bloque} de números de teléfono, que está {designado|asignados} y {repartido|distribuidos|asignado|designado} por  {una compañía especifica|un operador  específico}, un bloque de numeración puede cubrir desde 1.000, hasta 10.000 números, estos tienen un {código de área|prefijo fijo}, y se pueden {repartir|organizar|asignar|distribuir} {por|entre} los {distintos|diferentes} {sectores|distritos} de una {localidad|provincia|ciudad}. Recuerda que nuestros datos son sacados de internet y podrían no ser verídicos a día de hoy. </p>");
                    }
                    
                } else if (count($num_) === 7) {
                    $id = implode("", $num_);
                    if ($id != '') {
                        $title = $this->randomizeString("🥇 De donde es el sub-bloque{| telefónico} $id ✔️ 【en España】");
                        $heading_title = $this->randomizeString("<h1 class='fw-bolder my-5 py-3 text-center border-bottom'>🥇 De donde es el sub-bloque{| telefónico} $id ✔️ 【en España】</h1>");
                        $spin_txt = $this->randomizeString("
                        <p>{Si en algún momento|Si alguna vez} has {notado|visto} en tu {historial|registro} de llamadas, este número, {seguramente|de seguro} {quieres|deseas} {conocer|saber} {donde se ubica|dondé se localiza|de dondé es}, pues a {varios|muchos} les pasa que reciben {muchas|varias} llamadas del {código de área|prefijo} $id, {bien|bueno} este número {corresponde|pertenece} {a la compañía|al operador} que ves arriba. Es una {compañía|empresa} {particular|privada}, está {adjudicado|asignado} a {distintas|diferentes} {ciudades|localidades|provincias} en {territorio español|España}.</p>
                        
                        <h2>¿Qué es un sub-bloque{| de numeración}?</h2>
                        
                        <p>Un sub-bloque de numeración es un {grupo|conjunto} de números {adjudicados|adscritos|asignados} por una {compañía|operadora}, {en la situación|en el caso} del sub-{grupo|bloque} $id estamos {haciendo referencia|refiriéndonos} a números {adjudicados|adscritos|asignados} por el operador. <strong>$id</strong> es un sub bloque y estos números podrían ser o no {negociados|personas} de {forma|manera} {particular|privada}, ya que están {distribuidos|repartidos} en las principales {localidades|ciudades|provincias del país} y sin {disponer|tener} el número completo no puedes {conocer|saber} más que lo que pone arriba, {casi todos|la mayoría} {corresponden|pertenece} a personas.</p>
                        
                        <h2>¿Cuánto {cuesta|vale} {una llamada|llamar} al sub-bloque $id? </h2>
                        
                        <p>{Realizar|Hacer} una llamada al sub-{grupo|bloque} de {secuencia numérica|numeración} $id, desde tu {teléfono fijo|operadora}, no debería ser {caro|costoso}, aunque, {existen casos donde|a veces} estos números son {empleados|utilizados|operados} por {compañías|empresas|instituciones} que {publicitan|promocionan} {artículos|productos}, y {devolverles|retornar} la llamada, {cuesta|vale} muchos euros, {contando con|teniendo} los dígitos de { $id|dicho} número, puedes {visualizar|observar|ver} {los datos|la información}, de {forma|manera} {simple|sencilla|fácil} desde {nuestro por$id|nuestra web}. <strong>{INVESIGA SI EL NÚMERO|ASEGÚRATE DE QUE EL TELÉFONO} QUE ES DE ESPAÑA PARA QUE SE APLIQUEN {LOS PRECIOS|LAS TARIFAS} EN TEORÍA GRATUITAS</strong>.</p>
                        
                        <h3>¿Cómo {localizar|localizo|encontar|buscar|encuentro} un número con este sub-bloque?</h3>
                        
                        <p>{Es simple|Es fácil|Es sencillo}, {unicamen|solamente|solo} debes {introducir|ingresar} en nuestro {rastreador|buscador} {todas la secuencia|todos los dígitos} del número que {quieres|deseas} {ubicar|encontrar|identificar}, y {explorar|buscar}, y listo en un {poco tiempo|par de segundos} {tienes|tendrás} {todos los datos|toda la información} disponible del número, aunque {en la mayoría|mayormente|casi siempre} {conoceras|descubrirás} la {localidad|provincia|ciudad} a la que {corresponde|pertenece} y nombre del {suscriptor|propietario}.</p>");
                    };
                    
                } else if (count($num_) === 9) {
                    $id = implode("", $num_);
                    if ($id != '') {
                        $title = "🥇 ¿$id – De quién es? – Experiencias reales disponibles ✔️ 【en España】";
                        $heading_title = "<h1 class='fw-bolder my-5 py-3 text-center border-bottom'>🥇 ¿$id – De quién es? – Experiencias reales disponibles ✔️ 【en España】</h1>";
                        $spin_txt = $this->randomizeString("<p>{Segúramente|De seguro} has llegado un día a {tu hogar|casa} y {visualizaste|observaste|viste} el $id en el {historial|registro} de llamadas, {preguntándote|cuestionando} {de quien es|a quien pertenece|a quien corresponde}, {sin embargo|pero} no te has {atrevido|aventurado} a {retornar|devolver} la llamada {pensando|meditando} en {guardarte|economizarte|reservarte|ahorrarte} los {euros|billetes}. </p>
            
                        <p>El número $id es del sub-{grupo|bloque} {suscrito|asignado|adjudicado|designado} por una {compañía|operadora} en específico y el {código de área|prefijo} $id se {halla|encuentra} {designado|asignado|adjudicado} en la {localidad|ciudad|provincia} de España que ves arriba. </p>
                        
                        <h2>¿De qué Provincia es el número $id?</h2>
                        
                        <p>El número $id es {designado|adjudicado|asignado} por una {empresa|compañía|operadora} específica, esta {compañía|empresa|operadora} tiene un {grupo|bloque} de {numeración|números} {designados|asignados|adjudicados}, en las {más importantes|principales} {localidades|provincias|ciudades} de España, {precisamente|específicamente|exactamente} el número $id está {designado|adjudicado|asignado} para la {región|localidad|provincia} que puedes ver arriba.</p>
                         
                        <p>Es un número {muy reconocido|emblemático|conocido}, pues {muchas|varias} personas reciben llamadas de números con este {código de área|prefijo}, el cual {a veces|en ocasiones} es atendido por {empresas|operadoras} {que ofrecen|ofreciendo} {productos|premios}, {hay quien|varios|algunos} se {cuestionan|preguntan} si es {una estafa|un fraude|un engaño} o es {verdadero|verídico|real}.</p>
                        
                        <h2>¿Cuánto vale llamar al teléfono $id? </h2>
                        
                        <p>Se {conoce|sabe} que el número $id es de la provincia arriba escrita, y que es {usado|empleado|utilizado} por las {compañías|empresas}, por {ello|lo tanto} {contactar|llamar} desde tu teléfono fijo o móvil, NO DEBERÍA COSTARTE {un precio|una tarifa|} {agregado|añadido|adicional}, ya que, es un número {frecuente|común}. </p>
                        
                        <p>Una llamada a este número no debería {costar|valer} dinero. <strong>{Pero|No obstante} el precio será el determinado por la {operadora|compañía}</strong>, desde tu teléfono {de casa|fijo}, y es no debería ser más {costoso|caro} si {intentas|tratas} de llamar desde tu {móvil|teléfono}, a {muchas|varias} personas les {gustaría|intriga} {conocer|saber} de dónde y a quien esta {asignado|designado|adjudicado}, pero en vez de devolver la llamada, ahora tienes la {elección|alternativa|opción|posibilidad} de poder {rastrearlo|buscarlo|ubicarlo} con nuestro directorio {online|en línea de números de teléfono|on line de teléfonos}.</p>
                        
                        <h2>¿Cómo {busco INFO de|encuentro|localizar información de} cualquier número de teléfono?</h2>
                        
                        <p>{Ubicar|hallar|localizar|Rastrear|Encontrar} {un|cualquier|algún} número de teléfono ahora es muy {fácil|simple|sencillo}, puedes {introducir|ingresar} el número de cualquier teléfono {fijo|casa} de España, en nuestro {rastreador|buscador} {e inmediatamente|y enseguida} {ubicaremos|hallaremos|localizaremos|identificaremos|encontraremos} {toda la información|todos los datos} que estás {explorando|buscando}, como de qué {localidad|ciudad|provincia} es, quien es el {suscriptor|propietario}, e incluso hasta {el domicilio|la dirección} del mismo si está {disponible|en directorio}. (Datos extraídos de internet pueden no ser válidos a día de hoy). Recuérdalo.</p>
                         
                        <p>{Anteriormente|Antes} las {empresas|compañías} {brindaban|ofrecían} este {servicio|beneficio} y {recaudan|cobraban} por {realizarlo|hacerlo}, {actualmente|ahora} puedes {realizarlo|hacerlo} tú desde {el confort|la comodidad} de tu {hogar|vivienda|casa}, y gratis, ya no {debes preocuparte|te tienes que preocupar} por {conocer|saber} {datos|información} de los números {no identificados|desconocidos} de tu {historial|registrador} de llamadas, podrás {indagar|averiguar} a quien {corresponde|pertenece} solo con un clic en nuestra {página|web}. </p>
                        
                        </h3>¿Cómo explico mi experiencia con el número $id?</h3>
                        
                        <p>Muchos {quieren|desean} {conocer|saber} que {significado tiene|significa} la llamada de este número en sus {teléfonos|móviles}, pero pocos {retornan|devuelven} la llamada.</p>
                        
                        <p>Si eres uno de los {valientes|usuarios} que se {aventuró|atrevió} a {contactar|llamar} a este número, y {quieres|deseas} contar a los demás, tu {trayectoria|experiencia} a y los datos de tu {diálogo|conversación} con este número de teléfono, entonces puedes {introducir|ingresar} en {el apartado|la sección} de {opiniones|comentarios} y {contar|relatar} lo que {viviste|experimentaste} con la llamada telefónica. </p>
                        
                        <p>Es muy {simple|fácil|sencillo}, y no te {quitará|tomará} mucho tiempo, {solamente|únicamente|solo} {describe|expresa} tu {vivencia|experiencia} y lo {remites|envías}, de la misma {forma|manera} como usar un foro, {varias|muchas} personas que {quieren|desean} {datos|información} sobre este número, te lo agradecerán. </p>
                        
                        <h2>¿Es fraude o spam este teléfono?</h2>
                        
                        <p>Como este es un número NO parece ser de {compañías|empresas}, es {clasificado|calificado|categorizado} como un número de NO {estafa|spam|fraude}. Si piensas que es SPAM comunícalo ya que muchas {empresas|compañías} en las {primordiales|principales} {localidades|provincias|regiones|ciudades} pueden tener el  número $id, y lo {emplearlo|usarlo} para hacer {mercadotecnia|marketing} ofrecer {precios|productos|subscripciones}, o buscan que les {retornes|devuelvas} la llamada de alguna {manera|forma}.  </p>");
                    }
                   
                }

                $this->all_data["heading_title"] = $heading_title;
                $this->all_data['spin_text'] = $spin_txt;
                $this->all_data['title'] = $title;
                $client = new Client(HttpClient::create(['timeout' => 120]));
                $data = $client->request("GET", "https://www.numerosdetelefono.es/" . $id);
                // For Prefijo-Index number and name
                $data->filter(".prefijo-intermedio")->each(function ($d) {
                    array_push($this->params_data, $d->text());
                });
                // For Prefijo-Index only number; 
                $data->filter(".prefijo-intermedio .textoVerde")->each(function ($d) {
                    array_push($this->params_data_num, $d->text());
                });
                // For Final number; 
                $data->filter(".datoficha")->each(function ($d) {
                    array_push($this->final_num, $d->text());
                });
                $this->all_data["final_number"] = $this->final_num;
                $this->all_data["params_num"] = $this->params_data;
                $this->all_data["params_num_only"] = $this->params_data_num;

                return view("withparam", ['data' => $this->all_data]);
            }
        }
        //This code appear home page data
        $client = new Client(HttpClient::create(['timeout' => 120]));
        $data = $client->request("GET", "https://www.numerosdetelefono.es/");
        // For Prefijo-Movil number and name
        $data->filter(".prefijo-movil")->each(function ($d) {
            array_push($this->prefijo_movil, $d->text());
        });
        // For Prefijo-Movil only number 
        $data->filter(".prefijo-movil .textoVerde")->each(function ($d) {
            array_push($this->prefijo_movil_num, $d->text());
        });
        // For Prefijo-Index number and name
        $data->filter(".prefijo-index")->each(function ($d) {
            array_push($this->prefijo_index, $d->text());
        });
        // For Prefijo-Index only number;
        $data->filter(".prefijo-index .textoVerde")->each(function ($d) {
            array_push($this->prefijo_index_num, $d->text());
        });
        $this->all_data["prefijo_index"] = $this->prefijo_index;
        $this->all_data["prefijo_index_num"] = $this->prefijo_index_num;
        $this->all_data["prefijo_movil"] = $this->prefijo_movil;
        $this->all_data["prefijo_movil_num"] = $this->prefijo_movil_num;
        return view('home', ["data" => $this->all_data]);
    }
    public function withparam(Request $request, $id = '', $idd = '', $idd3 = '', $idd4 = '')
    {
        $spin_txt = '';
        $heading_title = '';
        $title = '';

        if ($id != '') {
            $title = "🥇 Prefijo $id Provincia ✔️ 【en España】";
            $heading_title = "<h1 class='fw-bolder my-5 py-3 text-center border-bottom'>🥇 Prefijo $id Provincia ✔️ 【en España】</h1>";

            $spin_txt = $this->randomizeString("
            <p>El {prefijo|código de área} $id {está asignado|esta designado|corresponde} {exclusivamente|específicamente} {a la provincia|al territorio|localidad} que ves arriba, aquí {también|además} se ven {utilizados|empleados} los {prefijos|códigos} de área. {Distribuidos|Repartidos} entre sus {sectores|distritos} y {operadoras|compañías} telefónicas.</p>
            
            <h2>Qué es un prefijo telefónico {en |}(España)?</h2>
            
            <p>Los {prefijos|códigos de área} en {territorio español|España} se {diseñaron|crearon} para {organizar|clasificar} las {diferentes|distintas} regiones {del país|de la nación} con el {objetivo|fin} de que exista una {forma|manera} {sencilla|simple|fácil} de {realizar|remitir} y recibir llamadas por vía telefónica. En {este sentido|esta dirección} los {prefijos|códigos de área} {son similares|tienen similitud} a los códigos postales, aunque no {tengan|exista} una {relación|asociación} directa entre {los mismos|ellos}, {sin embargo|pero} tiene un {fin|objeto final|objetivo} {semejante|similar|parecido} de {organizar|clasificar} el territorio Español para {hacer simple|simplificar|facilitar} las {comunicaciones|conexiones} entre {los individuos|las personas}, {empresas|compañías} e {organizaciones|instituciones}.</p>
            
            <p>Los {códigos de áreas|prefijos} telefónicos están {organizados|distribuidos} de {forma|manera} {simple|práctica} que {facilite|permita} al {destinatario|receptor} identificar de qué {distrito|localidad| provincia} de España se está {realizando|remitiendo| emitiendo} la llamada. Por lo que es {posible|probable} con estos {3 dígitos|prefijos} $id {conocer|saber|identificar| reconocer}  desde donde nos están {llamando|remitiendo la llamada}. 
             {Esta organización|este sistema|esta clasificación} se ha {normalizado|estandarizado} que todos los números {de teléfono|telefónicos} poseen 9 dígitos, {a excepción|excepto} los números de {urgencia|emergencia}, números de información, {atención al cliente|soporte técnico} y números de {interés social|casos sociales}. </p>
            
            <h3>Cuánto vale llamar al prefijo $id: es de pago?</h3>
            
            <p>{Verdaderamente|Realmente|en realidad} no, el {precio|costo|coste} de {iniciar|realizar|hacer} una llamada con el {código de area|prefijo} $id es {muy|bastante} {barato|accesible|asequible}: <strong>GRATIS EN LA MAYORÍA DE COMPAÑÍAS</strong>. </p>
            
            <p>Esto {depende|va a depender} por supuesto de cada {compañía|operadora} telefónica, {sin embargo|pero} al {ser|tratarse de} una llamada {dentro de España|nacional} {la tarifa|el costo|el precio} es {regular|normal} de {zona|ámbito} nacional. {También|E incluso} puede {ser|resultar} {gratis|gratuita} si es {hecha|realizada} desde un {móvil|terminal} con el que se {tenga|mantenga} un {acuerdo|contrato|convenio} de {utilidad|servicio} plano o de llamadas {infinitas|ilimitadas}.</p>
            
            
            <p>{Esto va a depender|esto se ve relacionado} {Por supuesto|claro} al {operador telefónico| prestador del servicio} por el que se esté {conversando|hablando}.  Si {posee|tienes|cuentas con} un {plan|servicio} de llamadas ilimitadas {las tarifas|los gastos} telefónicos se ven {anexados|incluidos|indexados|añadidos} y {solamente|únicamente|solo} serán {cobrados|descontados} si se {exceden|sobrepasan} los {minutos|segundos} {programados|definidos|destinados|planificados|dados} en el {plan|programa|servicio} de llamadas telefónicas (en caso de tenerlo). Si esto {llega a pasar|pasase|te pasa} puedes {conocer|consultar|ver} {la tarifa|los costos|los precios} {consultando|contactando} a tu {operador telefónico|compañía telefónica} directamente.</p>
            
            <p>{Pero en líneas generales|Generalmente|Casi siempre} las llamadas {hechas|realizadas} {pormedio|a través} de prefijo $id dentro del {país|territorio nacional} no se ven {modificadas|alteradas} por {precios|costos} {exagerados|excesivos|desmesurados|desmedidos| desproporcionados}, haciéndolos muy {baratos|accesibles|asequibles} a todas {las personas|los ciudadanos|los individuos} y una gran {alternativa|opción} para {compañías|empresas} y {organizaciones|instituciones}: GRATIS NORMALMENTE.</p>
            
            <h2>Cómo busco un número dentro del prefijo telefónico $id?</h2>
            
            <p>{Hacer|Realizar|iniciar} una {búsqueda|investigación| exploración|indagación} de un número telefónico que {posea|tenga|contenga} el {código de area|prefijo} $id es muy {sencillo|fácil|simple} {por medio|a través} de {este|nuestro} directorio {electrónico|digital|online| en línea}. No {te hace falta|necesitas|requieres} de conocimientos {complejos|complicados|compuestos|amplios} sobre {telecomunicaciones|tecnología|comunicación electrónica}. </p>
            
            <p>Con {poseer|tener|disponer} en {tu|vuestra|sus} {poder|manos} el número {telefónico|de teléfono} que {deseas|quieres} {conocer|investigar|identificar} {podemos|logramos|conseguimos} darte {datos|información} sobre {operadora|compañía} telefónica de afiliación, {localidad|provincia} en la que se encuentra, si se encuentra {asignado|activo} o no a algún suscriptor, fecha de asignación y {opiniones|comentarios} reales  de {individuos|personas} que tengan {contacto|comunicación} o han {tenido|mantenido} {contacto|comunicación} con el numero {determinado|en cuestión}. Recuerda que la info la extraemos de internet y podría no ser verídica.</p>
            
            <p>El número que {queremos|deseamos|tenemos que} localizar lo podemos {rastrear|ubicar|identificar} {por medio|a través} del {buscador|rastreador} que {simplifica|facilita} {el portal| la web|la página}, el cual nos {lleva|redirecciona} {directamente|hacia} {los datos|la información} {sobre|referente} al número. En este caso $id </p>
            
            <p>O {además|también} podemos {clicar|pinchar} en el  {código de area|prefijo} $id, el cual nos {redirige|re direccionara} a una {ventana|ventanilla} con {todos|la totalidad de} los prefijos $id {del territorio|de la provincia} de arriba escrita en {mezcla|combinación} con dos dígitos que les {continúan|siguen} y son {característicos |propios} de cada {compañía telefónica|operadora}. {Elegimos|Seleccionamos|Pinchamos} el que {va|corresponde} con {vuestro|nuestro|el} número {en cuestión| a identificar} y {vemos|nos fijamos} si aparece en {listado|lista}.</p>
            
            <p>El {sistema|procedimiento} de {este portal|esta web} es muy {instintivo|simplificado|simple|fácil} {la información|los datos} de un número telefónico con {unos|pocos} clics. Se puede {ubicar|buscar|encontrar|identificar} lo que desees {sobre|acerca} de un número telefónico, {además|incluso|también} el distrito de procedencia.</p>
            
            <h3>Puedo saber opiniones reales de un número que comienza por $id?</h3>
            
            <p>{Por supuesto|Claro que sí}. {Esta|Nuestra} {Pagina|web} {tiene|posee} {muchos|cientos de|varios|multiples} usuarios que {todos los dias|diariamente} {renuevan|actualizan|innovan} la información {sobre|referente} a las {distintas|diferentes} {variantes|combinaciones} telefónicas que {hay|existen} en la secuencia del {código de area|prefijo} $id.</p>
            
            <p>{Esta característica es necesaria|Este punto es crítico} para {poner la confianza|confiar} en alguna {página|web}, {por suerte tenemos|meritos tenemos por nuestros} usuarios {muy|altamente} {interactivos|activos|participativos|dinámicos} que {brindan|ofrecen|comentan} {datos unicos|información original}  sobre los números de teléfonos {buscados|consultados}. {No dudes|No te preocupes} en {emplear|utilizar} nuestro directorio {electrónico|online|en linea|digital}, {caracterizado|categorizado} por su {inmediatez|veracidad} y {eficacia|facilidad}.</p>
            
            <p>{Vuestro|Nuestro} {simple|fácil} {mecanismo|sistema} de {ubicación|identificación|rastreo} {permite|facilita} a {cualquier persona|todos} {ubicar|localizar} {datos|información verdadera y ampliamente} verificable {sobre|referente a} un número telefónico en concreto. Ya que {brindamos|aportamos} {información|datos} como provincia, distrito, asignación, fecha de asignación y {comentarios|opiniones} {VERDADEROS|REALES} de {ciudadanos|personas} que tengan {contacto|comunicación} con dicho número. En {algunas situaciones|algunos casos} {las personas|los usuarios|los participantes} pueden dejar {datos|información detallada} {referente|sobre} el suscriptor o dirección exacta del teléfono, {así mismo|igualmente} si {quieres|deseas} ser {localizado|ubicado} {fácilmente|de manera simple} puedes {facilitar|dejarnos} información {sobre|acerca de} tu {número de teléfono|combinación telefónica} con {código de area|prefijo} $id, con ello {multiples|muchas} personas pueden ponerse en {contacto|comunicación} con tu número fijo.</p>
            
            <p>Si {tienes|gozas de} nuestro servicio y {posees|tienes} información {sobre|acerca de} alguna {secuencia|combinación} telefónica no {lo pienses|dudes} en dejar tu {opinión|comentario} en nuestra {taquilla|caja} de {opiniones|comentarios} ubicados al {final|terminar} de cada {ventana|pagina}. Esto {facilita|garantiza|permite} que {el|nuestro} {directorio|sistema} crezca y {brinde|proporcione} {datos|información} más {inmediata|directa} {acerca de|sobre} algún número telefónico. </p>");
        }
        if ($idd != '') {
            $title = $this->randomizeString("🥇 {De quién es|A quién pertenece} el bloque $id$idd ✔️ 【en España】");
            $heading_title = $this->randomizeString("<h1 class='fw-bolder my-5 py-3 text-center border-bottom'>🥇 {De quién es|A quién pertenece} el bloque $id$idd ✔️ 【en España】</h1>");
            $spin_txt = $this->randomizeString("
            <p>{En algunos casos|A veces} cuando {recibimos|atendemos|admitimos} una llamada de un número <strong>(como podría ser $id$idd)</strong> {incierto| no identificable|incognito|anónimo|desconocido}, y {deseamos|queremos} {conocer|saber|identificar} quién {llama|es}, se {requiere|necesita} {soporte|ayuda} {profesional|de un especialista}, {sin embargo|pero} {en la actualidad|actualmente|hoy } y {por el|gracias a} internet, {no es necesario| no se requiere} {recurrir|ir|contactar} a un {especialista|profesional|técnico}, o a un {equipo|organismo} específico para {tener|obtener|conseguir} {esta información|estos datos}.</p> 
            
            <p>{Ejemplo de ello|Por ejemplo}, {sabemos|se sabe} que el {grupo|bloque} de {secuencia|numeración} $id$idd, es el {designado|asignado} {a la compañía de arriba mencionada|al operador mencionado} y está {compuesto|organizado} por miles de números telefónicos {íntegramente|específicamente} {asignados|adjudicado|otorgado}, y se {organizan|distribuyen|reparten} en los {distintos|diferentes} {municipios|distritos} de una {localidad|provincia|área}.</p>
            
            <p>De los {distintos|diferentes} datos informativos que {posea|tenga} un número de teléfono fijo del bloque $id$idd, {otorgado|asignado|designado} se {indaga|investiga|busca} {inmediatamente|automáticamente} {la información|los datos} que necesitas para tí, como: {municipio|distrito}, {localidad|provincia}, e incluso {domicilio|dirección}, y hasta nombre del {suscriptor|propietario}. Te {facilitara|ayudara} a agendar cualquier número fijo que desees {ubicar|localizar}.</p>
            
            <h2>Cuánto {cuesta|vale} {una llamada|llamar} al prefijo $id$idd?</h2>
            
            <p>{contactar|Llamar} a un número {designado|asignado|otorgado} con el prefijo $id$idd, es muy {simple|sencillo}, solo debes {acceder|ingresar|entrar} a nuestra {página|web}, y {colocar|poner} el número {entero|completo} en el {rastreador|buscador} de números telefónicos, los {códigos de área|prefijos} de $id$idd son de alguna operadora y al ser {privada|particular|no pública} esta compañía telefónica, {están|se encuentran} {designados|asignados} a las {ciudadades|capitales} y {localidades|provincias} grandes, ten {precaución|cuidado|reserva|alerta|atención} cuando {trates de|intentes} {contactar|llamar|comunicarte}, porque raramente pero sí a veces son {considerados|conocidos} como números de {SPAM|precio|tarifación} especial.  </p>
            
            <h2>Como encuentro un número con este prefijo telefónico?</h2>
            
            <p>Si {deseas|quieres} {ubicar|encontrar|localizar} una llamada de un número con este {código de área|prefijo}, que {encontraste|hallaste|viste} registrado en tu {agenda|registro} de llamadas, es muy {fácil|simple|sencillo}, {solamente|únicamente|solo} debes {acceder|ingresar|entrar} el prefijo $id$idd y la {culminación|terminación} del número {entero|completo}, al {rastreador|buscador} en nuestro {portal|web}, y en un {clic|clikeo} te {encontraremos|ubicaremos} el número por {localidad|área|territorio|provincia}. </p>
            
            <h3>Que es un bloque de numeración?</h3>

            <p>{En España|En territorio español} un bloque de numeración, es {una secuencia|un bloque} de números de teléfono, que está {designado|asignados} y {repartido|distribuidos|asignado|designado} por  {una compañía especifica|un operador  específico}, un bloque de numeración puede cubrir desde 1.000, hasta 10.000 números, estos tienen un {código de área|prefijo fijo}, y se pueden {repartir|organizar|asignar|distribuir} {por|entre} los {distintos|diferentes} {sectores|distritos} de una {localidad|provincia|ciudad}. Recuerda que nuestros datos son sacados de internet y podrían no ser verídicos a día de hoy. </p>");
        }
        if ($idd3 != '') {
            $title = $this->randomizeString("🥇 De donde es el sub-bloque{| telefónico} $id$idd$idd3 ✔️ 【en España】");
            $heading_title = $this->randomizeString("<h1 class='fw-bolder my-5 py-3 text-center border-bottom'>🥇 De donde es el sub-bloque{| telefónico} $id$idd$idd3 ✔️ 【en España】</h1>");
            $spin_txt = $this->randomizeString("
            <p>{Si en algún momento|Si alguna vez} has {notado|visto} en tu {historial|registro} de llamadas, este número, {seguramente|de seguro} {quieres|deseas} {conocer|saber} {donde se ubica|dondé se localiza|de dondé es}, pues a {varios|muchos} les pasa que reciben {muchas|varias} llamadas del {código de área|prefijo} $id$idd$idd3, {bien|bueno} este número {corresponde|pertenece} {a la compañía|al operador} que ves arriba. Es una {compañía|empresa} {particular|privada}, está {adjudicado|asignado} a {distintas|diferentes} {ciudades|localidades|provincias} en {territorio español|España}.</p>
            
            <h2>¿Qué es un sub-bloque{| de numeración}?</h2>
            
            <p>Un sub-bloque de numeración es un {grupo|conjunto} de números {adjudicados|adscritos|asignados} por una {compañía|operadora}, {en la situación|en el caso} del sub-{grupo|bloque} $id$idd$idd3 estamos {haciendo referencia|refiriéndonos} a números {adjudicados|adscritos|asignados} por el operador. <strong>$id$idd$idd3</strong> es un sub bloque y estos números podrían ser o no {negociados|personas} de {forma|manera} {particular|privada}, ya que están {distribuidos|repartidos} en las principales {localidades|ciudades|provincias del país} y sin {disponer|tener} el número completo no puedes {conocer|saber} más que lo que pone arriba, {casi todos|la mayoría} {corresponden|pertenece} a personas.</p>
            
            <h2>¿Cuánto {cuesta|vale} {una llamada|llamar} al sub-bloque $id$idd$idd3? </h2>
            
            <p>{Realizar|Hacer} una llamada al sub-{grupo|bloque} de {secuencia numérica|numeración} $id$idd$idd3, desde tu {teléfono fijo|operadora}, no debería ser {caro|costoso}, aunque, {existen casos donde|a veces} estos números son {empleados|utilizados|operados} por {compañías|empresas|instituciones} que {publicitan|promocionan} {artículos|productos}, y {devolverles|retornar} la llamada, {cuesta|vale} muchos euros, {contando con|teniendo} los dígitos de { $id$idd$idd3|dicho} número, puedes {visualizar|observar|ver} {los datos|la información}, de {forma|manera} {simple|sencilla|fácil} desde {nuestro por$id$idd$idd3|nuestra web}. <strong>{INVESIGA SI EL NÚMERO|ASEGÚRATE DE QUE EL TELÉFONO} QUE ES DE ESPAÑA PARA QUE SE APLIQUEN {LOS PRECIOS|LAS TARIFAS} EN TEORÍA GRATUITAS</strong>.</p>
            
            <h3>¿Cómo {localizar|localizo|encontar|buscar|encuentro} un número con este sub-bloque?</h3>
            
            <p>{Es simple|Es fácil|Es sencillo}, {unicamen|solamente|solo} debes {introducir|ingresar} en nuestro {rastreador|buscador} {todas la secuencia|todos los dígitos} del número que {quieres|deseas} {ubicar|encontrar|identificar}, y {explorar|buscar}, y listo en un {poco tiempo|par de segundos} {tienes|tendrás} {todos los datos|toda la información} disponible del número, aunque {en la mayoría|mayormente|casi siempre} {conoceras|descubrirás} la {localidad|provincia|ciudad} a la que {corresponde|pertenece} y nombre del {suscriptor|propietario}.</p>");
        };
        if ($idd4 != '') {
            $title = "🥇 ¿$id$idd$idd3$idd4 – De quién es? – Experiencias reales disponibles ✔️ 【en España】";
            $heading_title = "<h1 class='fw-bolder my-5 py-3 text-center border-bottom'>🥇 ¿$id$idd$idd3$idd4 – De quién es? – Experiencias reales disponibles ✔️ 【en España】</h1>";
            $spin_txt = $this->randomizeString("<p>{Segúramente|De seguro} has llegado un día a {tu hogar|casa} y {visualizaste|observaste|viste} el $id$idd$idd3$idd4 en el {historial|registro} de llamadas, {preguntándote|cuestionando} {de quien es|a quien pertenece|a quien corresponde}, {sin embargo|pero} no te has {atrevido|aventurado} a {retornar|devolver} la llamada {pensando|meditando} en {guardarte|economizarte|reservarte|ahorrarte} los {euros|billetes}. </p>

            <p>El número $id$idd$idd3$idd4 es del sub-{grupo|bloque} {suscrito|asignado|adjudicado|designado} por una {compañía|operadora} en específico y el {código de área|prefijo} $id$idd$idd3$idd4 se {halla|encuentra} {designado|asignado|adjudicado} en la {localidad|ciudad|provincia} de España que ves arriba. </p>
            
            <h2>¿De qué Provincia es el número $id$idd$idd3$idd4?</h2>
            
            <p>El número $id$idd$idd3$idd4 es {designado|adjudicado|asignado} por una {empresa|compañía|operadora} específica, esta {compañía|empresa|operadora} tiene un {grupo|bloque} de {numeración|números} {designados|asignados|adjudicados}, en las {más importantes|principales} {localidades|provincias|ciudades} de España, {precisamente|específicamente|exactamente} el número $id$idd$idd3$idd4 está {designado|adjudicado|asignado} para la {región|localidad|provincia} que puedes ver arriba.</p>
             
            <p>Es un número {muy reconocido|emblemático|conocido}, pues {muchas|varias} personas reciben llamadas de números con este {código de área|prefijo}, el cual {a veces|en ocasiones} es atendido por {empresas|operadoras} {que ofrecen|ofreciendo} {productos|premios}, {hay quien|varios|algunos} se {cuestionan|preguntan} si es {una estafa|un fraude|un engaño} o es {verdadero|verídico|real}.</p>
            
            <h2>¿Cuánto vale llamar al teléfono $id$idd$idd3$idd4? </h2>
            
            <p>Se {conoce|sabe} que el número $id$idd$idd3$idd4 es de la provincia arriba escrita, y que es {usado|empleado|utilizado} por las {compañías|empresas}, por {ello|lo tanto} {contactar|llamar} desde tu teléfono fijo o móvil, NO DEBERÍA COSTARTE {un precio|una tarifa|} {agregado|añadido|adicional}, ya que, es un número {frecuente|común}. </p>
            
            <p>Una llamada a este número no debería {costar|valer} dinero. <strong>{Pero|No obstante} el precio será el determinado por la {operadora|compañía}</strong>, desde tu teléfono {de casa|fijo}, y es no debería ser más {costoso|caro} si {intentas|tratas} de llamar desde tu {móvil|teléfono}, a {muchas|varias} personas les {gustaría|intriga} {conocer|saber} de dónde y a quien esta {asignado|designado|adjudicado}, pero en vez de devolver la llamada, ahora tienes la {elección|alternativa|opción|posibilidad} de poder {rastrearlo|buscarlo|ubicarlo} con nuestro directorio {online|en línea de números de teléfono|on line de teléfonos}.</p>
            
            <h2>¿Cómo {busco INFO de|encuentro|localizar información de} cualquier número de teléfono?</h2>
            
            <p>{Ubicar|hallar|localizar|Rastrear|Encontrar} {un|cualquier|algún} número de teléfono ahora es muy {fácil|simple|sencillo}, puedes {introducir|ingresar} el número de cualquier teléfono {fijo|casa} de España, en nuestro {rastreador|buscador} {e inmediatamente|y enseguida} {ubicaremos|hallaremos|localizaremos|identificaremos|encontraremos} {toda la información|todos los datos} que estás {explorando|buscando}, como de qué {localidad|ciudad|provincia} es, quien es el {suscriptor|propietario}, e incluso hasta {el domicilio|la dirección} del mismo si está {disponible|en directorio}. (Datos extraídos de internet pueden no ser válidos a día de hoy). Recuérdalo.</p>
             
            <p>{Anteriormente|Antes} las {empresas|compañías} {brindaban|ofrecían} este {servicio|beneficio} y {recaudan|cobraban} por {realizarlo|hacerlo}, {actualmente|ahora} puedes {realizarlo|hacerlo} tú desde {el confort|la comodidad} de tu {hogar|vivienda|casa}, y gratis, ya no {debes preocuparte|te tienes que preocupar} por {conocer|saber} {datos|información} de los números {no identificados|desconocidos} de tu {historial|registrador} de llamadas, podrás {indagar|averiguar} a quien {corresponde|pertenece} solo con un clic en nuestra {página|web}. </p>
            
            </h3>¿Cómo explico mi experiencia con el número $id$idd$idd3$idd4?</h3>
            
            <p>Muchos {quieren|desean} {conocer|saber} que {significado tiene|significa} la llamada de este número en sus {teléfonos|móviles}, pero pocos {retornan|devuelven} la llamada.</p>
            
            <p>Si eres uno de los {valientes|usuarios} que se {aventuró|atrevió} a {contactar|llamar} a este número, y {quieres|deseas} contar a los demás, tu {trayectoria|experiencia} a y los datos de tu {diálogo|conversación} con este número de teléfono, entonces puedes {introducir|ingresar} en {el apartado|la sección} de {opiniones|comentarios} y {contar|relatar} lo que {viviste|experimentaste} con la llamada telefónica. </p>
            
            <p>Es muy {simple|fácil|sencillo}, y no te {quitará|tomará} mucho tiempo, {solamente|únicamente|solo} {describe|expresa} tu {vivencia|experiencia} y lo {remites|envías}, de la misma {forma|manera} como usar un foro, {varias|muchas} personas que {quieren|desean} {datos|información} sobre este número, te lo agradecerán. </p>
            
            <h2>¿Es fraude o spam este teléfono?</h2>
            
            <p>Como este es un número NO parece ser de {compañías|empresas}, es {clasificado|calificado|categorizado} como un número de NO {estafa|spam|fraude}. Si piensas que es SPAM comunícalo ya que muchas {empresas|compañías} en las {primordiales|principales} {localidades|provincias|regiones|ciudades} pueden tener el  número $id$idd$idd3$idd4, y lo {emplearlo|usarlo} para hacer {mercadotecnia|marketing} ofrecer {precios|productos|subscripciones}, o buscan que les {retornes|devuelvas} la llamada de alguna {manera|forma}.  </p>");
        }
        $this->all_data["heading_title"] = $heading_title;
        $this->all_data['spin_text'] = $spin_txt;
        $this->all_data['title'] = $title;
        $client = new Client(HttpClient::create(['timeout' => 120]));
        $data = $client->request("GET", "https://www.numerosdetelefono.es/" . $id . $idd . $idd3 . $idd4);
        // For Prefijo-Index number and name
        $data->filter(".prefijo-intermedio")->each(function ($d) {
            array_push($this->params_data, $d->text());
        });
        // For Prefijo-Index only number; 
        $data->filter(".prefijo-intermedio .textoVerde")->each(function ($d) {
            array_push($this->params_data_num, $d->text());
        });
        // For Final number; 
        $data->filter(".datoficha")->each(function ($d) {
            array_push($this->final_num, $d->text());
        });
        $this->all_data["final_number"] = $this->final_num;
        $this->all_data["params_num"] = $this->params_data;
        $this->all_data["params_num_only"] = $this->params_data_num;
        return view("withparam", ['data' => $this->all_data]);
    }
    public function randomizeString($string)
    {
        if (preg_match_all('/(?<={)[^}]*(?=})/', $string, $matches)) {
            $matches = reset($matches);
            foreach ($matches as $i => $match) {
                if (preg_match_all('/(?<=\[)[^\]]*(?=\])/', $match, $sub_matches)) {
                    $sub_matches = reset($sub_matches);
                    foreach ($sub_matches as $sub_match) {
                        $pieces = explode('|', $sub_match);
                        $count = count($pieces);

                        $random_word = $pieces[rand(0, ($count - 1))];
                        $matches[$i] = str_replace('[' . $sub_match . ']', $random_word, $matches[$i]);
                    }
                }
                $pieces = explode('|', $matches[$i]);
                $count = count($pieces);

                $random_word = $pieces[rand(0, ($count - 1))];
                $string = str_replace('{' . $match . '}', $random_word, $string);
            }
        }
        return $string;
    }
}
