<?php

/**
 * Genera la lista de países con su código lada.
 * Usado por los formularios flotantes para evitar repetir ~200 líneas × N.
 */
function countryOptions()
{
    $countries = [
        ['213', 'Algeria'],
        ['376', 'Andorra'],
        ['244', 'Angola'],
        ['1264', 'Anguilla'],
        ['1268', 'Antigua & Barbuda'],
        ['54', 'Argentina'],
        ['374', 'Armenia'],
        ['297', 'Aruba'],
        ['61', 'Australia'],
        ['43', 'Austria'],
        ['994', 'Azerbaijan'],
        ['1242', 'Bahamas'],
        ['973', 'Bahrain'],
        ['880', 'Bangladesh'],
        ['1246', 'Barbados'],
        ['375', 'Belarus'],
        ['32', 'Belgium'],
        ['501', 'Belize'],
        ['229', 'Benin'],
        ['1441', 'Bermuda'],
        ['975', 'Bhutan'],
        ['591', 'Bolivia'],
        ['387', 'Bosnia Herzegovina'],
        ['267', 'Botswana'],
        ['55', 'Brazil'],
        ['673', 'Brunei'],
        ['359', 'Bulgaria'],
        ['226', 'Burkina Faso'],
        ['257', 'Burundi'],
        ['855', 'Cambodia'],
        ['237', 'Cameroon'],
        ['1', 'Canada'],
        ['238', 'Cape Verde Islands'],
        ['1345', 'Cayman Islands'],
        ['236', 'Central African Republic'],
        ['56', 'Chile'],
        ['86', 'China'],
        ['57', 'Colombia'],
        ['269', 'Comoros'],
        ['242', 'Congo'],
        ['682', 'Cook Islands'],
        ['506', 'Costa Rica'],
        ['385', 'Croatia'],
        ['53', 'Cuba'],
        ['90392', 'Cyprus North'],
        ['357', 'Cyprus South'],
        ['42', 'Czech Republic'],
        ['45', 'Denmark'],
        ['253', 'Djibouti'],
        ['1809', 'Dominica'],
        ['1809', 'Dominican Republic'],
        ['593', 'Ecuador'],
        ['20', 'Egypt'],
        ['503', 'El Salvador'],
        ['240', 'Equatorial Guinea'],
        ['291', 'Eritrea'],
        ['372', 'Estonia'],
        ['251', 'Ethiopia'],
        ['500', 'Falkland Islands'],
        ['298', 'Faroe Islands'],
        ['679', 'Fiji'],
        ['358', 'Finland'],
        ['33', 'France'],
        ['594', 'French Guiana'],
        ['689', 'French Polynesia'],
        ['241', 'Gabon'],
        ['220', 'Gambia'],
        ['7880', 'Georgia'],
        ['49', 'Germany'],
        ['233', 'Ghana'],
        ['350', 'Gibraltar'],
        ['30', 'Greece'],
        ['299', 'Greenland'],
        ['1473', 'Grenada'],
        ['590', 'Guadeloupe'],
        ['671', 'Guam'],
        ['502', 'Guatemala'],
        ['224', 'Guinea'],
        ['245', 'Guinea - Bissau'],
        ['592', 'Guyana'],
        ['509', 'Haiti'],
        ['504', 'Honduras'],
        ['852', 'Hong Kong'],
        ['36', 'Hungary'],
        ['354', 'Iceland'],
        ['91', 'India'],
        ['62', 'Indonesia'],
        ['98', 'Iran'],
        ['964', 'Iraq'],
        ['353', 'Ireland'],
        ['972', 'Israel'],
        ['39', 'Italy'],
        ['1876', 'Jamaica'],
        ['81', 'Japan'],
        ['962', 'Jordan'],
        ['7', 'Kazakhstan'],
        ['254', 'Kenya'],
        ['686', 'Kiribati'],
        ['850', 'Korea North'],
        ['82', 'Korea South'],
        ['965', 'Kuwait'],
        ['996', 'Kyrgyzstan'],
        ['856', 'Laos'],
        ['371', 'Latvia'],
        ['961', 'Lebanon'],
        ['266', 'Lesotho'],
        ['231', 'Liberia'],
        ['218', 'Libya'],
        ['417', 'Liechtenstein'],
        ['370', 'Lithuania'],
        ['352', 'Luxembourg'],
        ['853', 'Macao'],
        ['389', 'Macedonia'],
        ['261', 'Madagascar'],
        ['265', 'Malawi'],
        ['60', 'Malaysia'],
        ['960', 'Maldives'],
        ['223', 'Mali'],
        ['356', 'Malta'],
        ['692', 'Marshall Islands'],
        ['596', 'Martinique'],
        ['222', 'Mauritania'],
        ['269', 'Mayotte'],
        ['52', 'México'],
        ['691', 'Micronesia'],
        ['373', 'Moldova'],
        ['377', 'Monaco'],
        ['976', 'Mongolia'],
        ['1664', 'Montserrat'],
        ['212', 'Morocco'],
        ['258', 'Mozambique'],
        ['95', 'Myanmar'],
        ['264', 'Namibia'],
        ['674', 'Nauru'],
        ['977', 'Nepal'],
        ['31', 'Netherlands'],
        ['687', 'New Caledonia'],
        ['64', 'New Zealand'],
        ['505', 'Nicaragua'],
        ['227', 'Niger'],
        ['234', 'Nigeria'],
        ['683', 'Niue'],
        ['672', 'Norfolk Islands'],
        ['670', 'Northern Marianas'],
        ['47', 'Norway'],
        ['968', 'Oman'],
        ['680', 'Palau'],
        ['507', 'Panama'],
        ['675', 'Papua New Guinea'],
        ['595', 'Paraguay'],
        ['51', 'Peru'],
        ['63', 'Philippines'],
        ['48', 'Poland'],
        ['351', 'Portugal'],
        ['1787', 'Puerto Rico'],
        ['974', 'Qatar'],
        ['262', 'Reunion'],
        ['40', 'Romania'],
        ['7', 'Russia'],
        ['250', 'Rwanda'],
        ['378', 'San Marino'],
        ['239', 'Sao Tome & Principe'],
        ['966', 'Saudi Arabia'],
        ['221', 'Senegal'],
        ['381', 'Serbia'],
        ['248', 'Seychelles'],
        ['232', 'Sierra Leone'],
        ['65', 'Singapore'],
        ['421', 'Slovak Republic'],
        ['386', 'Slovenia'],
        ['677', 'Solomon Islands'],
        ['252', 'Somalia'],
        ['27', 'South Africa'],
        ['34', 'Spain'],
        ['94', 'Sri Lanka'],
        ['290', 'St. Helena'],
        ['1869', 'St. Kitts'],
        ['1758', 'St. Lucia'],
        ['249', 'Sudan'],
        ['597', 'Suriname'],
        ['268', 'Swaziland'],
        ['46', 'Sweden'],
        ['41', 'Switzerland'],
        ['963', 'Syria'],
        ['886', 'Taiwan'],
        ['7', 'Tajikstan'],
        ['66', 'Thailand'],
        ['228', 'Togo'],
        ['676', 'Tonga'],
        ['1868', 'Trinidad & Tobago'],
        ['216', 'Tunisia'],
        ['90', 'Turkey'],
        ['7', 'Turkmenistan'],
        ['993', 'Turkmenistan'],
        ['1649', 'Turks & Caicos Islands'],
        ['688', 'Tuvalu'],
        ['256', 'Uganda'],
        ['44', 'UK'],
        ['380', 'Ukraine'],
        ['971', 'United Arab Emirates'],
        ['598', 'Uruguay'],
        ['1', 'USA'],
        ['7', 'Uzbekistan'],
        ['678', 'Vanuatu'],
        ['379', 'Vatican City'],
        ['58', 'Venezuela'],
        ['84', 'Vietnam'],
        ['1284', 'Virgin Islands - British'],
        ['1340', 'Virgin Islands - US'],
        ['681', 'Wallis & Futuna'],
        ['969', 'Yemen (North)'],
        ['967', 'Yemen (South)'],
        ['260', 'Zambia'],
        ['263', 'Zimbabwe'],
    ];
    $out = '<option value="" selected="selected">Selecciona un país</option>' . "\n";
    $out .= '<optgroup label="Other countries">' . "\n";
    foreach ($countries as $c) {
        $out .= '<option data-lada="' . $c[0] . '">' . $c[1] . '</option>' . "\n";
    }
    $out .= '</optgroup>';
    return $out;
}

/**
 * Renderiza un formulario flotante CRM completo (estilo psicología/finanzas).
 *
 * @param string $id          ID del float-trigger (ej: 'flt-neu')
 * @param string $color       Clase de color: 'neu' o 'est'
 * @param string $title       Título del diplomado
 * @param string $subtitle    Subtítulo
 * @param string $tabText     Texto del botón lateral
 * @param string $oferta      Valor para digofertaint_txt_c
 * @param string $redirectUrl URL de redirección post-envío
 * @param string $tabIcon     Clase FontAwesome opcional
 */
function renderFinForm($id, $color, $title, $subtitle, $tabText, $oferta, $redirectUrl, $tabIcon = 'fa-phone')
{
    $bg = 'bg-' . $color;
?>
    <div class="float-trigger" id="<?= $id ?>" role="complementary" aria-label="Formulario <?= htmlspecialchars($title) ?>">
        <button class="float-tab <?= $bg ?>" onclick="toggleFloat('<?= $id ?>')" aria-expanded="false" aria-controls="<?= $id ?>-panel">
            <i class="fas <?= $tabIcon ?>"></i> <?= htmlspecialchars($tabText) ?>
        </button>
        <form id="WebToLeadForm" action="https://servicios2.uic.edu.mx/crm/Registros/Nuevo.aspx" method="POST" name="WebToLeadForm">
            <div class="float-panel" id="<?= $id ?>-panel">
                <div class="float-panel-head <?= $bg ?>">
                    <div>
                        <div class="title"><?= htmlspecialchars($title) ?></div>
                        <div class="subtitle"><?= htmlspecialchars($subtitle) ?></div>
                    </div>
                    <button type="button" class="float-close" onclick="closeFloat('<?= $id ?>')" aria-label="Cerrar formulario">×</button>
                </div>
                <div class="float-body" id="<?= $id ?>-form-wrap">
                    <div class="float-field">
                        <input name="first_name" id="first_name" type="text" required placeholder="Nombre(s)">
                    </div>
                    <div class="float-field">
                        <div style="display:grid; grid-template-columns:1fr 1fr; gap:8px">
                            <div>
                                <input name="last_name" id="last_name" type="text" required placeholder="Apellido Paterno">
                            </div>
                            <div>
                                <input name="last_name2_c" id="last_name2_c" type="text" placeholder="Apellido Materno">
                            </div>
                        </div>
                    </div>
                    <div class="float-field">
                        <input name="email1" id="email1" type="email" required="required" placeholder="Correo Electrónico" autocomplete="off">
                    </div>
                    <div class="float-field">
                        <input name="digescprocede_txt_c" id="digescprocede_txt_c" type="text" placeholder="Escuela de procedencia" required="required">
                    </div>
                    <div class="float-field">
                        <select name="pais_txt" id="pais" required="required">
                            <?= countryOptions() ?>
                        </select>
                    </div>

                    <!-- Estado -->
                    <div class="float-field dnone">
                        <select id="estado_txt" name="estado_txt" placeholder="Estado de residencia">
                            <option value="" selected="selected">Estado de residencia</option>
                            <option value="1">Aguascalientes</option>
                            <option value="2">Baja California</option>
                            <option value="3">Baja California Sur</option>
                            <option value="4">Campeche</option>
                            <option value="5">Chiapas</option>
                            <option value="6">Chihuahua</option>
                            <option value="7">Ciudad de México</option>
                            <option value="8">Coahuila de Zaragoza</option>
                            <option value="9">Colima</option>
                            <option value="10">Durango</option>
                            <option value="11">Estado de México</option>
                            <option value="12">Guanajuato</option>
                            <option value="13">Guerrero</option>
                            <option value="14">Hidalgo</option>
                            <option value="15">Jalisco</option>
                            <option value="16">Michoacán de Ocampo</option>
                            <option value="17">Morelos</option>
                            <option value="18">Nayarit</option>
                            <option value="19">Nuevo León</option>
                            <option value="20">Oaxaca</option>
                            <option value="21">Puebla</option>
                            <option value="22">Querétaro</option>
                            <option value="23">Quintana Roo</option>
                            <option value="24">San Luis Potosí</option>
                            <option value="25">Sinaloa</option>
                            <option value="26">Sonora</option>
                            <option value="27">Tabasco</option>
                            <option value="28">Tamaulipas</option>
                            <option value="29">Tlaxcala</option>
                            <option value="30">Veracruz</option>
                            <option value="31">Yucatán</option>
                            <option value="32">Zacatecas</option>
                        </select>
                    </div>
                    <!-- End estado -->
                    <div class="float-field">
                        <input type="text" id="lada" name="lada" readonly style="width:16%; margin-right:1%" placeholder="Lada">
                        <input type="tel" name="phone_work" id="phone_work" placeholder="Teléfono a 10 dígitos" required maxlength="12" minlength="4" pattern="[0-9]{10}" inputmode="numeric" style="width:80%">
                    </div>
                    <div class="float-field">
                        <select name="forma" id="forma" aria-required="true" aria-invalid="false" required="required">
                            <option value="" selected="true" disabled="disabled">Forma de contacto</option>
                            <option value="Whatsapp">Whatsapp</option>
                            <option value="Videoconferencia">Videoconferencia</option>
                            <option value="Llamada telefónica">Llamada telefónica</option>
                        </select>
                    </div>

                    <!--/*** Ocultos ***/-->

                    <input type="hidden" id="autoriza" name="autoriza" value="1">

                    <!-- Oferta -->
                    <input name="digofertaint_txt_c" id="digofertaint_txt_c" type="hidden" placeholder="Oferta de interés" value="<?= $oferta ?>">

                    <!-- Forma de contacto -->
                    <input name="digformacont_txt_c" id="digformacont_txt_c" type="hidden" placeholder="Forma de contacto">

                    <!-- Horario de contacto -->
                    <input name="dighoracont_txt_c" id="dighoracont_txt_c" type="hidden">

                    <!-- Campus de interés -->
                    <input name="digcampusint_txt_c" id="digcampusint_txt_c" type="hidden" placeholder="Campus de interés" value="Educación Continua Modular">

                    <!-- Turno de interés -->
                    <input name="digturnoint_txt_c" id="digturnoint_txt_c" type="hidden" placeholder="Turno de interés">

                    <!-- Lada -->
                    <input name="dial_code" id="dial_code" type="hidden">

                    <!-- Fuente digital UTM -->
                    <input name="utm_source" id="utmsource_txt_c" type="hidden" placeholder="Fuente digital UTM">
                    <!-- Medio digital UTM -->
                    <input name="utm_medium" id="utmmedio_txt_c" type="hidden" placeholder="Medio digital UTM">
                    <!-- Campaña digital UTM -->
                    <input name="utm_campaign" id="utmcampana_txt_c" type="hidden" placeholder="Campaña digital UTM">
                    <!-- Contenido digital UTM -->
                    <input name="utm_content" id="utmcontent_txt_c" type="hidden" placeholder="Contenido digital UTM">
                    <!-- URL -->
                    <input name="url" id="url-result" type="hidden">
                    <!-- OTROS DATOS -->
                    <input type="hidden" name="utm_term" id="Term" value="">
                    <input type="hidden" name="utm_keyword" id="Keyword" value="">
                    <input type="hidden" name="utm_clientID" id="Client_ID" value="">
                    <input type="hidden" name="utm_referrer" id="Referrer" value="">

                    <!-- Oferta de interés UTM -->
                    <input name="utmoferinteres_txt_c" id="utmoferinteres_txt_c" type="hidden">

                    <!-- Estatus Digital -->
                    <input name="estadodigital_list_c" id="estadodigital_list_c" type="hidden" value="Nuevo">
                    <!-- Medio -->
                    <input name="medio_gen_list_c" id="medio_gen_list_c" type="hidden" value="Medios Digitales">
                    <!-- Periodo -->
                    <input name="periodoingreso_list_c" id="periodoingreso_list_c" type="hidden" value="NA">

                    <button class="float-btn <?= $bg ?>" onclick="submitFloat('<?= $id ?>')" name="Submit" id="send">Solicitar información →</button>
                    <input name="redirect_url" id="redirect_url" type="hidden" value="<?= $redirectUrl ?>">
                    <input name="redirect_url_error" id="redirect_url_error" type="hidden" value="https://educacionenlinea.uic.mx/">
                    <input type="hidden" name="recaptcha_response" id="recaptchaResponse" class="recaptchaResponse">
                </div>
                <div class="float-success" id="<?= $id ?>-success" style="display:none">
                    <div class="check <?= $bg ?>">✓</div>
                    <h4>¡Solicitud recibida!</h4>
                    <p>Un asesor UIC te contactará en breve.</p>
                </div>
            </div>
        </form>
    </div>
<?php
}
?>
<!DOCTYPE html>
<html lang="es-MX">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- ══ PRIMARY SEO ══ -->
    <title>Diplomados en Neuroeducación y Desarrollo Infantil · UIC Educación Continua · México</title>
    <meta name="description" content="Diplomados ejecutivos en línea en Neuroeducación: Aplicaciones Prácticas y Estimulación y Educación Temprana. Universidad Intercontinental · 125 horas · Constancia con valor curricular · Descuento hasta 20%." />
    <meta name="keywords" content="diplomado en neuroeducación México, diplomado estimulación temprana en línea, neuroeducación aplicada al aula, educación temprana 0-6 años, diplomado desarrollo infantil UIC, educación continua neurociencias México" />
    <link rel="icon" href="https://www.uic.mx/licenciaturas/wp-content/uploads/favicon_uic.png">
    <meta name="robots" content="index, follow" />

    <!-- ══ OPEN GRAPH ══ -->
    <link rel="canonical" href="https://uic.mx/neuroeducacion/" />
    <meta property="og:type" content="website">
    <meta property="og:title" content="Diplomados en Neuroeducación y Desarrollo Infantil · UIC México">
    <meta property="og:description" content="Dos diplomados ejecutivos en línea con aval universitario UIC. 125 horas · Constancia con valor curricular · Descuentos hasta 20%.">
    <meta property="og:image" content="https://educacionenlinea.uic.mx/wp-content/uploads/2024/05/diplomados-neuroeducacion.jpg">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:image:type" content="image/jpeg">
    <meta property="og:url" content="https://uic.mx/neuroeducacion/">
    <meta property="og:locale" content="es_MX">

    <!-- ══ SCHEMA.ORG JSON-LD ══ -->
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@graph": [{
                    "@type": ["CollegeOrUniversity", "EducationalOrganization"],
                    "@id": "https://educacionenlinea.uic.mx/#org",
                    "name": "Universidad Intercontinental — Educación en Línea",
                    "alternateName": "UIC Online",
                    "url": "https://educacionenlinea.uic.mx",
                    "telephone": "+52-55-5487-1397",
                    "logo": "https://www.uic.mx/licenciaturas/wp-content/uploads/2024/05/Logo-50-Universidad-Intercontinental-horizontal-blanco-scaled.png",
                    "image": "https://educacionenlinea.uic.mx/wp-content/uploads/2024/05/diplomados-neuroeducacion.jpg",
                    "address": {
                        "@type": "PostalAddress",
                        "addressLocality": "Ciudad de México",
                        "addressCountry": "MX",
                        "streetAddress": "Avenida Insurgentes Sur 4303, Colonia Santa Úrsula Xitla, Alcaldía Tlalpan",
                        "postalCode": "14420"
                    },
                    "sameAs": ["https://www.facebook.com/UICMexico", "https://www.instagram.com/uic_mexico", "https://www.youtube.com/@UICeduMx2014", "https://twitter.com/uicmx?lang=es", "https://mx.linkedin.com/school/universidad-intercontinental", "https://www.tiktok.com/@uic.mx"]
                },
                {
                    "@type": "Course",
                    "@id": "#neuroeducacion",
                    "name": "Diplomado en Neuroeducación: Aplicaciones Prácticas",
                    "description": "Programa de educación continua que integra los hallazgos más recientes de las neurociencias a la práctica educativa. Cubre procesos cognitivos del aprendizaje, papel de las emociones y estrategias para facilitar la consolidación de información. 100% en línea, 125 horas.",
                    "provider": {
                        "@id": "https://educacionenlinea.uic.mx/#org"
                    },
                    "educationalLevel": "Educación Continua",
                    "teaches": ["Bases cerebrales del aprendizaje", "Emociones y aprendizaje", "Diseño de ambientes de aprendizaje", "Dificultades de aprendizaje", "Modelos pedagógicos basados en neurociencias"],
                    "courseMode": "online",
                    "timeRequired": "PT125H",
                    "offers": {
                        "@type": "Offer",
                        "price": "20570",
                        "priceCurrency": "MXN"
                    }
                },
                {
                    "@type": "Course",
                    "@id": "#estimulacion",
                    "name": "Diplomado en Estimulación y Educación Temprana",
                    "description": "Programa que capacita para evaluar, promover y vigilar el desarrollo integral de niños desde el nacimiento. Cubre neurodesarrollo, estrategias de estimulación biológica, neurológica, afectiva y social. 100% en línea, 125 horas.",
                    "provider": {
                        "@id": "https://educacionenlinea.uic.mx/#org"
                    },
                    "educationalLevel": "Educación Continua",
                    "teaches": ["Estimulación temprana", "Evaluación del neurodesarrollo", "Plasticidad cerebral", "Detección de alteraciones del desarrollo", "Diseño de programas de estimulación"],
                    "courseMode": "online",
                    "timeRequired": "PT125H",
                    "offers": {
                        "@type": "Offer",
                        "price": "17150",
                        "priceCurrency": "MXN"
                    }
                },
                {
                    "@type": "FAQPage",
                    "mainEntity": [{
                            "@type": "Question",
                            "name": "¿Qué es la neuroeducación y por qué es relevante para docentes?",
                            "acceptedAnswer": {
                                "@type": "Answer",
                                "text": "La neuroeducación integra hallazgos de neurociencias, psicología y pedagogía para diseñar ambientes y estrategias de aprendizaje más efectivos. Los docentes que la dominan mejoran resultados académicos y el bienestar emocional de sus alumnos. El diplomado de la UIC tiene 125 horas, cuesta $20,570 MXN y se cursa 100% en línea."
                            }
                        },
                        {
                            "@type": "Question",
                            "name": "¿Cuál es la diferencia entre el Diplomado en Neuroeducación y el de Estimulación Temprana?",
                            "acceptedAnswer": {
                                "@type": "Answer",
                                "text": "Neuroeducación: Aplicaciones Prácticas se centra en estrategias para optimizar el aprendizaje en contextos escolares con cualquier grupo de edad. Estimulación y Educación Temprana se enfoca en la primera infancia (0-6 años), con énfasis en el neurodesarrollo y la estimulación en etapas críticas del crecimiento infantil."
                            }
                        },
                        {
                            "@type": "Question",
                            "name": "¿Los diplomados de neuroeducación de la UIC tienen validez oficial?",
                            "acceptedAnswer": {
                                "@type": "Answer",
                                "text": "Al concluir recibes constancia con valor curricular emitida por la Universidad Intercontinental, institución con 50 años de experiencia y más de 30,000 egresados. Descuento hasta 20% OFF, disponible tanto por convenio empresarial como para público en general, y pagos en parcialidades disponibles."
                            }
                        },
                        {
                            "@type": "Question",
                            "name": "¿A quién están dirigidos los diplomados de neuroeducación?",
                            "acceptedAnswer": {
                                "@type": "Answer",
                                "text": "El Diplomado en Neuroeducación está dirigido a educadores, docentes, psicopedagogos, psicólogos y tutores. El de Estimulación Temprana está diseñado para educadores, psicólogos, pediatras, terapeutas físicos y padres de familia interesados en el desarrollo infantil."
                            }
                        },
                        {
                            "@type": "Question",
                            "name": "¿Cuánto dura el Diplomado en Neuroeducación?",
                            "acceptedAnswer": {
                                "@type": "Answer",
                                "text": "125 horas organizadas en 5 módulos de 25 horas cada uno. Puedes cursarlos completos o por módulo individual, a tu propio ritmo, 100% en línea."
                            }
                        }
                    ]
                },
                {
                    "@type": "BreadcrumbList",
                    "itemListElement": [{
                            "@type": "ListItem",
                            "position": 1,
                            "name": "Inicio",
                            "item": "https://uic.mx/"
                        },
                        {
                            "@type": "ListItem",
                            "position": 2,
                            "name": "Educación Continua",
                            "item": "https://educacionenlinea.uic.mx/diplomados-en-linea/"
                        },
                        {
                            "@type": "ListItem",
                            "position": 3,
                            "name": "Neuroeducación y Desarrollo Infantil",
                            "item": "https://uic.mx/neuroeducacion/"
                        }
                    ]
                }
            ]
        }
    </script>

    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-NFSZ7BH');
    </script>
    <!-- End Google Tag Manager -->

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=GTM-NFSZ7BHb"></script>
    <script>
        sessionStorage.clear();
        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'G-L9RCMVPSV1']);
        _gaq.push(['_trackPageview']);
    </script>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,700,800;1,400;1,500&family=Lato:wght@300;400;700&family=DM+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700,800&display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
    <link rel="stylesheet" href="../css/neuroeducacion.css">
    <script src="https://www.google.com/recaptcha/api.js?render=6LekquUoAAAAAGMnfbnWFjD7VfrLHLjvNOfIP-Ae"></script>
</head>

<body>

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NFSZ7BH"
            height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <!-- ═══ TOP FIXED NAV ═══ -->
    <div class="fixed top-0 left-0 w-full bg-[#064c23] shadow-md z-[1000] h-14">
        <div class="max-w-7xl mx-auto px-4 h-full flex items-center justify-between">
            <div class="flex-shrink-0">
                <a href="https://uic.mx">
                    <img src="https://www.uic.mx/licenciaturas/wp-content/uploads/2024/05/Logo-50-Universidad-Intercontinental-horizontal-blanco-scaled.png"
                        alt="Logo UIC"
                        class="h-10 md:h-12 w-auto uic-logo-filter-white">
                </a>
            </div>

            <!-- NAVEGACIÓN ESCRITORIO -->
            <nav class="hidden lg:flex items-center space-x-8">
                <a href="https://www.uic.mx/nosotros/" class="text-sm font-bold text-white/90 hover:text-white transition-colors" target="_blank">Sobre UIC</a>
            </nav>

            <!-- BOTÓN MENÚ MÓVIL -->
            <div class="lg:hidden flex items-center">
                <button id="menu-open" class="text-white p-2 focus:outline-none">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- MENÚ LATERAL MÓVIL -->
    <div id="mobile-menu-overlay" class="fixed inset-0 bg-black/60 z-[1001] hidden opacity-0 transition-opacity duration-300 backdrop-blur-sm"></div>
    <div id="mobile-menu" class="fixed top-0 right-0 h-full w-[80%] max-w-sm bg-[#064c23] z-[1002] shadow-2xl hidden-panel flex flex-col p-6 overflow-y-auto">
        <div class="flex justify-between items-center mb-10">
            <img src="https://www.uic.mx/licenciaturas/wp-content/uploads/2024/05/Logo-50-Universidad-Intercontinental-horizontal-blanco-scaled.png" class="h-8 uic-logo-filter-white" alt="Logo">
            <button id="menu-close" class="p-2 text-white/70 hover:text-white">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
        </div>

        <nav class="flex flex-col space-y-6">
            <a href="https://www.uic.mx/nosotros/" class="mobile-link text-xl font-bold text-white border-b border-white/10 pb-2">Sobre UIC</a>
        </nav>
    </div>

    <!-- ═══ HERO ═══ -->
    <header class="hero" role="banner">
        <div class="hero-inner">
            <div class="au">
                <p class="hero-eyebrow">Universidad Intercontinental · Educación Continua</p>
                <span class="hero-hub-name">Diplomados en Neuroeducación y Desarrollo Infantil</span>
                <h1>Transforma tu práctica educativa con la ciencia <em>del aprendizaje.</em></h1>
                <p class="hero-sub">Dos diplomados en línea que integran los hallazgos más recientes de las neurociencias a la educación y al desarrollo infantil. Para quienes forman personas, desde el aula o desde la cuna.</p>
                <div class="hero-pills" style="display: none;">
                    <span class="pill">Neuroeducación</span>
                    <span class="pill">Estimulación Temprana</span>
                    <span class="pill">Primera Infancia</span>
                    <span class="pill">100% en línea</span>
                    <span class="pill">Aval universitario UIC</span>
                </div>
            </div>
            <div class="hero-stats au d1">
                <div class="stat">
                    <div class="stat-n">2</div>
                    <div class="stat-l">Diplomados especializados en educación y neurociencias</div>
                </div>
                <div class="stat">
                    <div class="stat-n">125 h</div>
                    <div class="stat-l">Por programa · 5 módulos flexibles</div>
                </div>
                <div class="stat">
                    <div class="stat-n">50</div>
                    <div class="stat-l">Años formando profesionistas en México</div>
                </div>
                <div class="stat">
                    <div class="stat-n">20%</div>
                    <div class="stat-l">Descuento máximo OFF en todos los programas</div>
                </div>
            </div>
        </div>
    </header>

    <!-- ═══ STICKY NAV ═══ -->
    <nav class="prog-nav" aria-label="Programas">
        <div class="prog-nav-inner">
            <a href="#hub"><span class="dot" style="background:var(--gold)"></span>Todos los diplomados</a>
            <a href="#neuroeducacion"><span class="dot bg-neu"></span>Neuroeducación</a>
            <a href="#estimulacion"><span class="dot bg-est"></span>Estimulación Temprana</a>
            <a href="#faq">Preguntas frecuentes</a>
        </div>
    </nav>

    <!-- ═══ HUB OVERVIEW ═══ -->
    <section id="hub" class="hub" aria-labelledby="hub-h2">
        <div class="wrap">
            <p class="sec-label">Oferta académica completa</p>
            <h2 class="sec-title" id="hub-h2">Elige el programa<br />que necesita tu práctica</h2>
            <p class="sec-sub">Dos diplomados diseñados para educadores, terapeutas y profesionistas del desarrollo infantil que quieren integrar la ciencia del cerebro a su trabajo cotidiano.</p>

            <div class="card-grid">
                <a class="pcard" href="#neuroeducacion">
                    <div class="pcard-stripe bg-neu"></div>
                    <div class="pcard-body">
                        <div class="pcard-level c-neu">Neuroeducación</div>
                        <h3>Neuroeducación: Aplicaciones Prácticas</h3>
                        <p class="pcard-desc">Diseña ambientes de aprendizaje basados en las bases cerebrales del aprendizaje, las emociones y las metodologías pedagógicas más efectivas.</p>
                        <div class="pcard-meta">
                            <span class="tag">En línea</span><span class="tag">125 h</span><span class="tag tag-price">$20,570 MXN</span>
                        </div>
                        <div class="pcard-link c-neu">Ver programa</div>
                    </div>
                </a>
                <a class="pcard" href="#estimulacion">
                    <div class="pcard-stripe bg-est"></div>
                    <div class="pcard-body">
                        <div class="pcard-level c-est">Desarrollo Infantil</div>
                        <h3>Estimulación y Educación Temprana</h3>
                        <p class="pcard-desc">Conoce, promueve y vigila el neurodesarrollo infantil desde el nacimiento para optimizar las etapas más cruciales del crecimiento integral.</p>
                        <div class="pcard-meta">
                            <span class="tag">En línea</span><span class="tag">125 h</span><span class="tag tag-price">$17,150 MXN</span>
                        </div>
                        <div class="pcard-link c-est">Ver programa</div>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <!-- ═══ OBJETIVOS ═══ -->
    <section class="obj-sec" aria-labelledby="obj-h2">
        <div class="wrap">
            <p class="sec-label">Encuentra tu camino</p>
            <h2 class="sec-title" id="obj-h2">¿Qué te gustaría <em>lograr?</em></h2>
            <p class="sec-sub">Cada programa responde a un objetivo distinto. Explora el que mejor se alinea con lo que quieres transformar en tu práctica profesional o personal.</p>
            <div class="obj-grid">
                <a class="obj-card" href="#neuroeducacion" style="border-top-color:var(--neu)">
                    <div class="obj-icon">🧠</div>
                    <div class="obj-goal">Quiero entender cómo aprende el cerebro y aplicarlo en el aula o en mi práctica educativa</div>
                    <div class="obj-desc">Descubre las bases cerebrales del aprendizaje, el papel de las emociones y cómo diseñar experiencias educativas que realmente funcionen para cada persona.</div>
                    <div class="obj-cta c-neu">Neuroeducación: Aplicaciones Prácticas →</div>
                </a>
                <a class="obj-card" href="#estimulacion" style="border-top-color:var(--est)">
                    <div class="obj-icon">🌱</div>
                    <div class="obj-goal">Quiero acompañar el desarrollo de los niños en sus primeros años con herramientas basadas en la ciencia</div>
                    <div class="obj-desc">Aprende a evaluar el neurodesarrollo infantil, diseñar estrategias de estimulación temprana y potenciar las etapas más críticas del crecimiento de 0 a 6 años.</div>
                    <div class="obj-cta c-est">Estimulación y Educación Temprana →</div>
                </a>
            </div>
            <div class="obj-nudge" style="display: none;">
                <div>
                    <h3>¿No sabes por dónde empezar?</h3>
                    <p>Nuestro equipo puede orientarte sobre el programa que mejor se adapte a tu práctica y objetivos profesionales. Sin compromiso.</p>
                </div>
                <a class="btn-gold" href="tel:5554871397">Hablar con un asesor →</a>
            </div>
        </div>
    </section>

    <!-- ═══════════════════════════════════════════════════
            FLOATING FORMS (one per diplomado)
        ═══════════════════════════════════════════════════ -->


    <!-- FLOAT: Diplomado en Neuroeducación -->
    <?php renderFinForm('flt-neu', 'neu', 'Diplomado en Neuroeducación', 'Recibe información sin compromiso', 'Solicitar información', 'Neuroeducación: Aplicaciones prácticas', 'https://educacionenlinea.uic.mx/gracias/tp-neuroeducacion.html'); ?>

    <!-- FLOAT: Diplomado en Estimulación y Educación Temprana -->
    <?php renderFinForm('flt-est', 'est', 'Estimulación y Educación Temprana', 'Recibe información sin compromiso', 'Solicitar información', 'Estimulación y Educación Temprana', 'https://educacionenlinea.uic.mx/gracias/tp-estimulaciontemp.html'); ?>


    <!-- ═══ NEUROEDUCACIÓN ═══ -->
    <section id="neuroeducacion" class="prog-sec" data-float="flt-neu" aria-labelledby="h2-neuroeducacion">
        <div class="wrap">
            <div class="prog-head">
                <div>
                    <span class="badge-pill bg-neu-l c-neu">Neuroeducación</span>
                    <h2 id="h2-neuroeducacion">Neuroeducación: <em>Aplicaciones Prácticas</em></h2>
                    <p class="prog-lead">Adquiere conocimientos sobre los procesos cognitivos implicados en el aprendizaje, cómo se modifica el sistema nervioso durante este proceso y qué papel tienen las emociones. Aprende a desarrollar estrategias y métodos innovadores para facilitar la consolidación del conocimiento en cualquier escenario educativo, desde preescolar hasta educación de adultos.</p>
                </div>
                <div class="info-box">
                    <div class="info-box-head bg-neu">Datos del programa</div>
                    <div class="info-row"><span class="lbl">Modalidad</span><span class="val">100% en línea</span></div>
                    <div class="info-row"><span class="lbl">Duración</span><span class="val">125 horas · 5 módulos</span></div>
                    <div class="info-row"><span class="lbl">Inversión</span><span class="val">$20,570 MXN</span></div>
                    <div class="info-row"><span class="lbl">Descuento</span><span class="val">Hasta 20% OFF*</span></div>
                    <div class="info-row"><span class="lbl">Constancia</span><span class="val">Valor curricular UIC</span></div>
                    <p class="info-box-note">*Consulta todas las promociones vigentes y pagos en parcialidades con tu asesor educativo.</p>
                </div>
            </div>
            <div class="cols-2">
                <div class="content-box">
                    <h4 style="color: var(--neu);">¿Qué aprenderás?</h4>
                    <ul>
                        <li>Las bases cerebrales del aprendizaje y la memoria desde las neurociencias</li>
                        <li>El papel de las emociones en los procesos de enseñanza y consolidación del conocimiento</li>
                        <li>Cómo diseñar ambientes de aprendizaje que favorezcan el desarrollo cognitivo</li>
                        <li>Estrategias de intervención para alumnos con dificultades de aprendizaje</li>
                        <li>Modelos pedagógicos alternativos basados en el funcionamiento cerebral</li>
                    </ul>
                </div>
                <div class="content-box">
                    <h4 style="color: var(--neu);">¿Qué lograrás?</h4>
                    <ul>
                        <li>Diseñar estrategias de enseñanza más efectivas basadas en cómo funciona el cerebro</li>
                        <li>Comprender por qué algunos alumnos aprenden diferente y cómo acompañarlos mejor</li>
                        <li>Incorporar el bienestar emocional como eje central de tu práctica educativa</li>
                        <li>Proponer nuevos estilos educativos fundamentados en la ciencia del aprendizaje</li>
                        <li>Transformar tu aula o espacio educativo en un ambiente neuroeducativo de alto impacto</li>
                    </ul>
                </div>
            </div>
            <div class="faq-wrap">
                <h3 class="faq-title">Preguntas frecuentes</h3>
                <details>
                    <summary>¿Para qué nivel educativo está pensado este diplomado?</summary>
                    <div class="faq-ans">El diplomado está diseñado para educadores que trabajan con cualquier grupo de edad: preescolar, primaria, secundaria, bachillerato, educación superior o capacitación de adultos. Los principios del aprendizaje basado en neurociencias aplican a todos los niveles. También es relevante para psicopedagogos, tutores, capacitadores corporativos y profesionales que facilitan aprendizajes en cualquier contexto.</div>
                </details>
                <details>
                    <summary>¿Qué diferencia hay entre este diplomado y el de Estimulación Temprana?</summary>
                    <div class="faq-ans">El Diplomado en Neuroeducación: Aplicaciones Prácticas se enfoca en estrategias de enseñanza y aprendizaje para cualquier etapa educativa, desde la comprensión de los procesos cognitivos hasta el diseño de ambientes de aprendizaje efectivos. El Diplomado en Estimulación y Educación Temprana se especializa en la primera infancia (0-6 años) con énfasis en el neurodesarrollo y la estimulación en etapas críticas del crecimiento infantil. Son complementarios y pueden cursarse en cualquier orden.</div>
                </details>
                <details>
                    <summary>¿Necesito formación previa en neurociencias para inscribirme?</summary>
                    <div class="faq-ans">No. El programa parte de conceptos accesibles y avanza progresivamente. Está diseñado para educadores y profesionales del área psicopedagógica con o sin conocimientos previos de neurociencias. El enfoque es siempre práctico: cómo aplicar los hallazgos de la ciencia en el contexto educativo real.</div>
                </details>
            </div>
        </div>
    </section>

    <!-- ═══ ESTIMULACIÓN TEMPRANA ═══ -->
    <section id="estimulacion" class="prog-sec" data-float="flt-est" aria-labelledby="h2-estimulacion">
        <div class="wrap">
            <div class="prog-head">
                <div>
                    <span class="badge-pill bg-est-l c-est">Desarrollo Infantil</span>
                    <h2 id="h2-estimulacion">Estimulación y <em>Educación Temprana</em></h2>
                    <p class="prog-lead">Conoce, promueve y vigila el desarrollo de los niños desde el nacimiento: una de las etapas con las mayores oportunidades y condiciones cruciales para el desarrollo integral. Aprende a evaluar el neurodesarrollo infantil y a emplear estrategias de estimulación que optimicen la adquisición de futuros aprendizajes del infante.</p>
                </div>
                <div class="info-box">
                    <div class="info-box-head bg-est">Datos del programa</div>
                    <div class="info-row"><span class="lbl">Modalidad</span><span class="val">100% en línea</span></div>
                    <div class="info-row"><span class="lbl">Duración</span><span class="val">125 horas · 5 módulos</span></div>
                    <div class="info-row"><span class="lbl">Inversión</span><span class="val">$17,150 MXN</span></div>
                    <div class="info-row"><span class="lbl">Descuento</span><span class="val">Hasta 20% OFF*</span></div>
                    <div class="info-row"><span class="lbl">Constancia</span><span class="val">Valor curricular UIC</span></div>
                    <p class="info-box-note">*Consulta todas las promociones vigentes y pagos en parcialidades con tu asesor educativo.</p>
                </div>
            </div>
            <div class="cols-2">
                <div class="content-box">
                    <h4 style="color: var(--est);">¿Qué aprenderás?</h4>
                    <ul>
                        <li>Conceptos fundamentales de estimulación temprana e intervención temprana</li>
                        <li>Cómo evaluar el neurodesarrollo infantil a través de indicadores específicos</li>
                        <li>Estrategias de estimulación para el desarrollo biológico, neurológico, afectivo y social</li>
                        <li>Detección oportuna de alteraciones en el desarrollo y señales de alarma</li>
                        <li>Diseño de campañas y programas de estimulación y educación temprana</li>
                    </ul>
                </div>
                <div class="content-box">
                    <h4 style="color: var(--est);">¿Qué lograrás?</h4>
                    <ul>
                        <li>Evaluar el neurodesarrollo infantil con criterios profesionales y herramientas validadas</li>
                        <li>Diseñar programas de estimulación temprana personalizados para cada niño</li>
                        <li>Identificar de forma oportuna posibles alteraciones en el desarrollo</li>
                        <li>Optimizar las etapas más sensibles del crecimiento cerebral en la primera infancia</li>
                        <li>Acompañar a familias y cuidadores con orientación basada en evidencia científica</li>
                    </ul>
                </div>
            </div>
            <div class="faq-wrap">
                <h3 class="faq-title">Preguntas frecuentes</h3>
                <details>
                    <summary>¿Este diplomado es solo para profesionales de la salud o también para educadores?</summary>
                    <div class="faq-ans">Está diseñado para un perfil amplio: educadores de preescolar, psicólogos, pediatras, enfermeras, terapeutas físicos y ocupacionales, trabajadores sociales, y también madres y padres de familia interesados en el desarrollo de sus hijos. El programa parte de conceptos accesibles y no requiere formación médica previa.</div>
                </details>
                <details>
                    <summary>¿Qué rango de edad abarca el programa?</summary>
                    <div class="faq-ans">El diplomado se centra en la primera infancia, especialmente el rango de 0 a 6 años, que comprende las etapas de mayor plasticidad cerebral y mayor impacto de la estimulación en el desarrollo posterior del niño. Abarca desde el período prenatal hasta el inicio de la educación formal.</div>
                </details>
                <details>
                    <summary>¿El diplomado incluye herramientas para detectar retrasos en el desarrollo?</summary>
                    <div class="faq-ans">Sí. Uno de los ejes centrales del programa es la evaluación del neurodesarrollo: aprenderás a utilizar indicadores para identificar señales de alerta en el desarrollo motor, cognitivo, del lenguaje y socioemocional, y a derivar o intervenir de forma oportuna según el caso.</div>
                </details>
            </div>
        </div>
    </section>

    <!-- ═══ GEO CONTENT ═══ -->
    <section class="geo-sec" aria-label="Guía diplomados en neuroeducación y estimulación temprana México">
        <div class="wrap">
            <div class="geo-inner">
                <p class="sec-label">Guía para decidir</p>
                <h2>Neuroeducación y estimulación temprana: lo que necesitas saber antes de inscribirte</h2>
                <p>La neuroeducación es una de las áreas de mayor crecimiento en la formación docente y el desarrollo educativo en México. Cada vez más educadores, psicólogos, terapeutas y profesionales de la salud buscan programas que les permitan integrar los hallazgos de las neurociencias a su práctica cotidiana. La pregunta que más nos hacen es: <strong>¿cómo me ayuda un diplomado de neuroeducación en mi trabajo real?</strong></p>
                <p>La respuesta es directa: cuando entiendes cómo funciona el cerebro durante el aprendizaje, tus estrategias pedagógicas cambian. Dejas de hacer lo que siempre se ha hecho y empiezas a hacer lo que la ciencia dice que funciona.</p>

                <h3>¿Qué es la neuroeducación y por qué es relevante hoy?</h3>
                <p>La neuroeducación es un campo interdisciplinario que une neurociencias, psicología y pedagogía para entender cómo aprendemos y cómo enseñar mejor. A diferencia de las metodologías pedagógicas tradicionales, parte de la evidencia científica sobre el funcionamiento del cerebro: cómo se consolida la memoria, qué papel juegan las emociones en el aprendizaje, cómo influye el estrés en la cognición y de qué manera el entorno físico y emocional del aula afecta el rendimiento.</p>
                <p>Para los docentes mexicanos, este conocimiento es especialmente valioso en un contexto de aulas diversas, con distintos estilos de aprendizaje, necesidades educativas especiales y crecientes demandas de bienestar socioemocional.</p>

                <h3>¿Cuál es la diferencia entre neuroeducación y estimulación temprana?</h3>
                <p>El <strong>Diplomado en Neuroeducación: Aplicaciones Prácticas</strong> aplica a cualquier grupo de edad y contexto educativo. Su enfoque es el diseño de ambientes y estrategias de aprendizaje basadas en el funcionamiento cerebral. Es el programa ideal para docentes, psicopedagogos y capacitadores. El <strong>Diplomado en Estimulación y Educación Temprana</strong> se concentra en la primera infancia, de 0 a 6 años, período de mayor plasticidad cerebral. Su objetivo es optimizar el neurodesarrollo infantil en sus etapas más críticas. Es especialmente relevante para educadores de preescolar, psicólogos infantiles, pediatras, terapeutas y padres de familia.</p>

                <h3>¿Por qué la estimulación temprana es irreversible?</h3>
                <p>Los primeros años de vida representan una ventana de oportunidad única para el desarrollo cerebral. Durante este período, el cerebro del niño forma conexiones neuronales a una velocidad que no volverá a repetirse. Las experiencias de los primeros 1,000 días de vida tienen un impacto profundo y duradero en el desarrollo cognitivo, emocional y social del individuo. <strong>La estimulación temprana no acelera el desarrollo: lo optimiza</strong>, asegurando que cada etapa se consolide de la mejor manera posible.</p>

                <h3>¿Cuál es el valor curricular de los diplomados de la UIC?</h3>
                <p>Al concluir cualquiera de los dos diplomados recibes una <strong>constancia con valor curricular</strong> emitida por la Universidad Intercontinental, institución con 50 años de trayectoria y más de 30,000 egresados. Esta constancia respalda tu formación especializada ante escuelas, instituciones, clínicas y empleadores en todo México. Los programas ofrecen descuento hasta 20% OFF*, disponible tanto por convenio empresarial como para el público en general, además de opciones de pago en parcialidades disponibles para todos los participantes.</p>
            </div>
        </div>
    </section>

    <!-- ═══ TRUST / E-E-A-T ═══ -->
    <section class="trust-sec" aria-label="Por qué confiar en la UIC">
        <div class="wrap">
            <p class="sec-label" style="justify-content:center;color:var(--gold)">Respaldo institucional</p>
            <h2 class="sec-title" style="color:#fff;text-align:center;margin-bottom:.6rem">Una universidad con <em style="color:var(--gold-l)">50 años de trayectoria</em></h2>
            <p style="text-align:center;font-size:clamp(.85rem, 2vw, .95rem);color:rgba(255,255,255,.6);margin-bottom:0;max-width:60ch;margin-left:auto;margin-right:auto">La Universidad Intercontinental ha formado a más de 30,000 profesionistas. Sus diplomados integran rigor académico con aplicación práctica inmediata.</p>
            <div class="trust-grid">
                <div class="trust-card">
                    <div class="icon">🏛️</div>
                    <h3>Institución con historia</h3>
                    <p>50 años formando profesionistas en México con excelencia académica y enfoque en la formación integral y humanista.</p>
                </div>
                <div class="trust-card">
                    <div class="icon">📋</div>
                    <h3>Constancia con valor curricular</h3>
                    <p>Al concluir recibes constancia emitida por la UIC, reconocida por escuelas, clínicas e instituciones en toda la República.</p>
                </div>
                <div class="trust-card">
                    <div class="icon">⚡</div>
                    <h3>Aplicación desde el primer módulo</h3>
                    <p>Cada módulo está diseñado para que los aprendizajes se puedan aplicar de forma inmediata en el aula, consultorio o contexto de trabajo.</p>
                </div>
                <div class="trust-card">
                    <div class="icon">🤝</div>
                    <h3>Convenios empresariales</h3>
                    <p>Descuento hasta 20% OFF*, disponible tanto por convenio empresarial como para el público en general. Consulta si tu institución, escuela o empleador tiene convenio vigente con la UIC.</p>
                </div>
                <div class="trust-card">
                    <div class="icon">🗓️</div>
                    <h3>Flexibilidad real</h3>
                    <p>5 módulos independientes de 25 horas. Cursa todos o solo los que necesitas, sin comprometer tu agenda profesional o familiar.</p>
                </div>
                <div class="trust-card">
                    <div class="icon">💳</div>
                    <h3>Opciones de pago</h3>
                    <p>Pagos en parcialidades disponibles. Neuroeducación: $20,570 MXN · Estimulación y Educación Temprana: $17,150 MXN. Descuentos hasta 20% disponibles.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ═══ GLOBAL FAQ ═══ -->
    <section id="faq" class="faq-sec" aria-labelledby="faq-h2">
        <div class="wrap">
            <p class="sec-label">Todo lo que necesitas saber</p>
            <h2 class="sec-title" id="faq-h2">Preguntas frecuentes</h2>
            <div class="faq-global">
                <details>
                    <summary>¿Qué es la neuroeducación y por qué es relevante para docentes hoy?</summary>
                    <div class="faq-ans">La neuroeducación integra hallazgos de neurociencias, psicología y pedagogía para diseñar ambientes y estrategias de aprendizaje más efectivos. Los docentes que la dominan no solo mejoran los resultados académicos de sus alumnos, sino también su bienestar emocional. El Diplomado en Neuroeducación de la UIC tiene 125 horas, $20,570 MXN. El de Estimulación y Educación Temprana tiene 125 horas, $17,150 MXN. Ambos se cursan 100% en línea.</div>
                </details>
                <details>
                    <summary>¿Cuál es la diferencia entre el Diplomado en Neuroeducación y el de Estimulación Temprana?</summary>
                    <div class="faq-ans">El Diplomado en <strong>Neuroeducación: Aplicaciones Prácticas</strong> se enfoca en estrategias para optimizar el aprendizaje en contextos escolares con cualquier grupo de edad. El Diplomado en <strong>Estimulación y Educación Temprana</strong> se especializa en la primera infancia (0-6 años), con énfasis en el neurodesarrollo en etapas críticas del crecimiento. Son complementarios y pueden cursarse en cualquier orden.</div>
                </details>
                <details>
                    <summary>¿Necesito formación previa en neurociencias para inscribirme?</summary>
                    <div class="faq-ans">No. Ambos diplomados parten de conceptos accesibles y avanzan progresivamente. Están diseñados para educadores, psicólogos, terapeutas y profesionales del área sin conocimientos previos de neurociencias. El enfoque es siempre práctico: cómo aplicar la ciencia en el contexto real.</div>
                </details>
                <details>
                    <summary>¿Los diplomados de la UIC tienen validez oficial?</summary>
                    <div class="faq-ans">Al concluir recibes una <strong>constancia con valor curricular</strong> emitida por la Universidad Intercontinental, institución con 50 años de experiencia y más de 30,000 egresados. Es reconocida por escuelas, clínicas, centros terapéuticos e instituciones en México.</div>
                </details>
                <details>
                    <summary>¿A quién está dirigido el Diplomado en Estimulación Temprana?</summary>
                    <div class="faq-ans">Está diseñado para educadores de preescolar, psicólogos, pediatras, enfermeras, terapeutas físicos y ocupacionales, trabajadores sociales, y también madres y padres de familia interesados en el desarrollo de sus hijos. No requiere formación médica previa.</div>
                </details>
                <details>
                    <summary>¿Cuánto tiempo necesito dedicar a la semana?</summary>
                    <div class="faq-ans">Con <strong>5 a 8 horas semanales</strong> puedes completar un módulo en aproximadamente 4 semanas y el diplomado completo en unos 5 meses. La plataforma está disponible las 24 horas para que estudies cuando mejor se adapte a tu agenda.</div>
                </details>
                <details>
                    <summary>¿Puedo cursar un solo módulo sin hacer el diplomado completo?</summary>
                    <div class="faq-ans">Sí. Los 5 módulos de cada diplomado pueden cursarse de forma individual, cada uno de 25 horas con su propio objetivo de aprendizaje. Es ideal para quienes necesitan actualización en un tema específico de neuroeducación o estimulación.</div>
                </details>
                <details>
                    <summary>¿Hay descuentos disponibles?</summary>
                    <div class="faq-ans">Sí. Todos los programas cuentan con descuento hasta 20% OFF*, disponible tanto por convenio empresarial como para el público en general, además de opciones de <strong>pago en parcialidades</strong>. Contacta a un asesor educativo para conocer todas las promociones vigentes.</div>
                </details>
            </div>
        </div>
    </section>

    <!-- ═══ CTA BANNER ═══ -->
    <section class="cta-banner" aria-label="Solicitar información">
        <div class="wrap">
            <p style="font-size:.68rem;font-weight:700;letter-spacing:.18em;text-transform:uppercase;color:var(--gold);margin-bottom:.6rem">¿Listo para dar el siguiente paso?</p>
            <h2>Habla hoy con un asesor UIC</h2>
            <p>Sin compromiso. Te orientamos sobre el programa que mejor se adapta a tu práctica y objetivos profesionales.</p>
            <div class="cta-banner-btns">
                <a class="btn-gold" href="tel:5554871397" style="display:none">💬 Solicitar información</a>
                <a class="btn-ghost" href="tel:5554871397">📞 55 5487-1397</a>
            </div>
        </div>
    </section>

    <!-- ═══ FOOTER ═══ -->
    <footer>
        <div class="wrap">
            <p>© 2026 Universidad Intercontinental · Ciudad de México · <a href="https://www.uic.edu.mx/aviso-privacidad/">Aviso de Privacidad</a></p>
            <p>Neuroeducación: Aplicaciones Prácticas · Estimulación y Educación Temprana</p>
        </div>
    </footer>

    <!-- ═══════════════════════════════════════════════════
            JAVASCRIPT
        ═══════════════════════════════════════════════════ -->
    <script>
        /* ─── STICKY NAV ACTIVE STATE ─── */
        const allSections = document.querySelectorAll('[id]');
        const navLinks = document.querySelectorAll('.prog-nav a, .hero-nav a');
        const secObserver = new IntersectionObserver(entries => {
            entries.forEach(e => {
                if (e.isIntersecting) {
                    navLinks.forEach(l => l.classList.remove('is-active'));
                    const active = document.querySelector(`.prog-nav a[href="#${e.target.id}"], .hero-nav a[href="#${e.target.id}"]`);
                    if (active) active.classList.add('is-active');
                }
            });
        }, {
            rootMargin: '-35% 0px -60% 0px'
        });
        allSections.forEach(s => secObserver.observe(s));

        /* ─── FLOATING FORMS: show/hide based on section ─── */
        const progSections = document.querySelectorAll('.prog-sec[data-float]');
        const floatMap = {};
        progSections.forEach(sec => {
            floatMap[sec.id] = sec.dataset.float;
        });

        let currentFloat = null;

        const floatObserver = new IntersectionObserver(entries => {
            entries.forEach(e => {
                const floatId = floatMap[e.target.id];
                const floatEl = document.getElementById(floatId);
                if (!floatEl) return;

                if (e.isIntersecting) {
                    document.querySelectorAll('.float-trigger').forEach(f => {
                        f.style.display = 'none';
                        f.classList.remove('is-visible');
                    });
                    floatEl.style.display = 'flex';
                    setTimeout(() => floatEl.classList.add('is-visible'), 60);
                    const grBadge = document.querySelector('.grecaptcha-badge');
                    if (grBadge) grBadge.classList.add('is-visible');
                    currentFloat = floatId;
                } else {
                    if (currentFloat === floatId) {
                        const panel = floatEl.querySelector('.float-panel');
                        const btn = floatEl.querySelector('.float-tab');
                        const solicitar = floatEl.querySelector('.float-tab');

                        if (panel) {
                            panel.style.maxHeight = '0';
                            panel.style.opacity = '0';
                        }
                        if (btn) btn.setAttribute('aria-expanded', 'false');
                        if (solicitar) solicitar.style.display = '';

                        floatEl.classList.remove('is-visible');
                        const grBadge2 = document.querySelector('.grecaptcha-badge');
                        if (grBadge2) grBadge2.classList.remove('is-visible');
                        setTimeout(() => {
                            floatEl.style.display = 'none';
                        }, 420);
                        currentFloat = null;
                    }
                }
            });
        }, {
            rootMargin: '0px 0px -15% 0px',
            threshold: 0.15
        });

        progSections.forEach(sec => floatObserver.observe(sec));

        /* ─── TOGGLE FLOAT PANEL ─── */
        function toggleFloat(id) {
            const el = document.getElementById(id);
            const panel = document.getElementById(`${id}-panel`);
            const btn = el.querySelector('.float-tab');
            const open = panel.style.maxHeight && panel.style.maxHeight !== '0px';
            const solicitar = el.querySelector('.float-tab');

            if (open) {
                panel.style.maxHeight = '0';
                panel.style.opacity = '0';
                btn.setAttribute('aria-expanded', 'false');
                if (solicitar) solicitar.style.display = '';
                const grBadge = document.querySelector('.grecaptcha-badge');
                if (grBadge) grBadge.classList.remove('is-visible');
            } else {
                panel.style.maxHeight = '635px';
                panel.style.opacity = '1';
                btn.setAttribute('aria-expanded', 'true');
                panel.style.zIndex = '9999';
                if (solicitar) solicitar.style.display = 'none';
                const grBadge = document.querySelector('.grecaptcha-badge');
                if (grBadge) grBadge.classList.add('is-visible');
            }
        }

        /* close button */
        function closeFloat(id) {
            const el = document.getElementById(id);
            const panel = document.getElementById(`${id}-panel`);
            const btn = document.getElementById(id).querySelector('.float-tab');
            const solicitar = el.querySelector('.float-tab');

            panel.style.maxHeight = '0';
            panel.style.opacity = '0';
            btn.setAttribute('aria-expanded', 'false');
            if (solicitar) solicitar.style.display = '';
            const grBadge = document.querySelector('.grecaptcha-badge');
            if (grBadge) grBadge.classList.remove('is-visible');
        }

        /* initial state: panel collapsed */
        document.querySelectorAll('.float-trigger').forEach(ft => {
            const panel = ft.querySelector('.float-panel');
            if (!panel) return;
            panel.style.maxHeight = '0';
            panel.style.opacity = '0';
            panel.style.transition = 'max-height .4s cubic-bezier(.16,1,.3,1), opacity .35s ease';
            panel.style.overflow = 'hidden';
        });

        /* ─── SUBMIT ─── */
        function submitFloat(id) {
            const wrap = document.getElementById(`${id}-form-wrap`);
            const success = document.getElementById(`${id}-success`);
            if (!wrap) return;
            const inputs = wrap.querySelectorAll('input[type="text"],input[type="email"],input[type="tel"]');
            let valid = true;
            inputs.forEach(i => {
                if (!i.value.trim()) {
                    i.style.borderColor = '#e05c5c';
                    valid = false;
                    setTimeout(() => {
                        i.style.borderColor = '';
                    }, 2000);
                }
            });
            if (!valid) return;

            // Muestra mensaje de éxito localmente
            wrap.style.display = 'none';
            if (success) success.style.display = 'block';

            // Envía el formulario al endpoint (navega a redirect_url)
            const form = document.getElementById(`WebToLeadForm-${id}`);
            if (form) form.submit();
        }

        /* ─── FORM SUBMIT LISTENER (intercepta envío nativo del botón) ─── */
        document.querySelectorAll('form[id^="WebToLeadForm-"]').forEach(form => {
            form.addEventListener('submit', e => {
                e.preventDefault();
                const formId = form.dataset.formId;
                if (formId) submitFloat(formId);
            });
        });

        /* ─── FAQ — one open at a time per section ─── */
        document.querySelectorAll('details').forEach(d => {
            d.addEventListener('toggle', () => {
                if (!d.open) return;
                const parent = d.closest('.faq-wrap') || d.closest('.faq-global') || document;
                parent.querySelectorAll('details').forEach(other => {
                    if (other !== d) other.open = false;
                });
            });
        });

        /* ─── PROGRAM SWITCHER: un diplomado visible a la vez ─── */
        const PROGRAM_IDS = ['neuroeducacion', 'estimulacion'];
        const programSections = document.querySelectorAll('.prog-sec');
        const progNavLinks = document.querySelectorAll('.prog-nav a');
        const hubCards = document.querySelectorAll('.pcard');
        const objCards = document.querySelectorAll('.obj-card');

        function showProgram(targetId) {
            programSections.forEach(sec => {
                sec.hidden = sec.id !== targetId;
            });

            progNavLinks.forEach(link => {
                const href = link.getAttribute('href').replace('#', '');
                if (PROGRAM_IDS.includes(href)) {
                    link.classList.toggle('active', href === targetId);
                }
            });
        }

        // Estado inicial: solo el primer diplomado visible
        showProgram('neuroeducacion');

        // Sticky nav clicks
        progNavLinks.forEach(link => {
            link.addEventListener('click', e => {
                const targetId = link.getAttribute('href').replace('#', '');
                if (PROGRAM_IDS.includes(targetId)) {
                    e.preventDefault();
                    showProgram(targetId);
                    const target = document.getElementById(targetId);
                    if (target) target.scrollIntoView({
                        behavior: 'smooth'
                    });
                }
            });
        });

        // Hub overview card clicks
        hubCards.forEach(card => {
            card.addEventListener('click', e => {
                const targetId = card.getAttribute('href').replace('#', '');
                if (PROGRAM_IDS.includes(targetId)) {
                    e.preventDefault();
                    showProgram(targetId);
                    const target = document.getElementById(targetId);
                    if (target) target.scrollIntoView({
                        behavior: 'smooth'
                    });
                }
            });
        });

        // Objetivos section card clicks
        objCards.forEach(card => {
            card.addEventListener('click', e => {
                const targetId = card.getAttribute('href').replace('#', '');
                if (PROGRAM_IDS.includes(targetId)) {
                    e.preventDefault();
                    showProgram(targetId);
                    const target = document.getElementById(targetId);
                    if (target) target.scrollIntoView({
                        behavior: 'smooth'
                    });
                }
            });
        });

        /* ─── SCROLL REVEAL ─── */
        const revealEls = document.querySelectorAll('.pcard, .content-box, .stat, .obj-card, .trust-card');
        const rv = new IntersectionObserver(entries => {
            entries.forEach((e, i) => {
                if (e.isIntersecting) {
                    e.target.style.animation = `fadeUp .55s ${i*0.04}s ease both`;
                    rv.unobserve(e.target);
                }
            });
        }, {
            threshold: .12
        });
        revealEls.forEach(el => {
            el.style.opacity = '0';
            rv.observe(el);
        });

        document.querySelectorAll('.au').forEach(el => {
            el.style.opacity = '1';
        });
    </script>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script>
        /* ─── País → Lada / Estado ─── */
        jQuery('.float-trigger').each(function() {
            var form = jQuery(this);
            form.find('[name="forma"]').change(function() {
                form.find('[name="digformacont_txt_c"]').val(jQuery(this).val());
            });
        });

        jQuery('.float-trigger').each(function() {
            var form = jQuery(this);
            form.find('[name="pais_txt"]').change(function() {
                var opcion = jQuery(this).val();
                var lada = jQuery(this).find(':selected').attr('data-lada');
                var estadoWrap = form.find('[name="estado_txt"]').parent();

                if (opcion === 'México') {
                    estadoWrap.removeClass('dnone');
                    form.find('[name="estado_txt"]').attr('required', 'required');
                } else {
                    estadoWrap.addClass('dnone');
                    form.find('[name="estado_txt"]').removeAttr('required').val('');
                }

                form.find('[name="lada"]').val(lada);
                form.find('[name="dial_code"]').val(lada);
            });
        });

        /* ─── URL ─── */
        jQuery(function() {
            var pageURL = jQuery(location).attr('href');
            jQuery('.url-result').val(pageURL);
        });
    </script>

    <style>
        @keyframes fadeUp {
            from {
                opacity: 0;
                transform: translateY(16px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>

    <footer class="bg-black text-white pt-1 pb-8 border-t-4 border-[#ddb96a]">
        <div class="max-w-7xl mx-auto px-4">
            <div class="border-t border-slate-900 pt-8 flex flex-col md:flex-row justify-between items-center text-xs text-slate-500 space-y-4 md:space-y-0">
                <div class="flex space-x-6">
                    <a href="https://www.uic.mx/aviso-de-privacidad/" class="hover:text-white" target="_blank">Aviso de Privacidad</a>
                    <a href="mailto:admision@uic.edu.mx" class="hover:text-white">Admisiones: admision@uic.edu.mx</a>
                    <a href="Tel:5554871400" class="hover:text-white" target="_blank">Conmutador: 55 5487 1400</a>
                </div>
                <p>© 2026 Universidad Intercontinental. Todos los derechos reservados.</p>
            </div>
        </div>
    </footer>

    <!-- Google Tag Manager (script) -->
    <script src="https://www.uic.mx/wp-content/themes/hello-theme-child/js/uicUTM.js" id="uic-utm-js-js"></script>
    <!-- End Google Tag Manager (script) -->
    <script>
        grecaptcha.ready(function() {
            grecaptcha.execute('6LekquUoAAAAAGMnfbnWFjD7VfrLHLjvNOfIP-Ae', {
                    action: 'formulario'
                })
                .then(function(token) {
                    document.querySelectorAll('.recaptchaResponse').forEach(function(el) {
                        el.value = token;
                    });
                });
        });
    </script>

    <script>
        window.onload = function() {
            var $recaptcha = document.querySelector('#g-recaptcha-response');
            if ($recaptcha) {
                $recaptcha.setAttribute('required', 'required');
            }
        };

        document.querySelectorAll('[name="phone_work"]').forEach(function(input) {
            input.addEventListener('input', function() {
                this.value = this.value.replace(/[^0-9]/g, '').slice(0, 10);
                if (this.value.length === 10) {
                    this.style.borderColor = '#006847';
                } else {
                    this.style.borderColor = '#e05c5c';
                }
            });
        });
    </script>

    <script>
        const menuOpen = document.getElementById('menu-open');
        const menuClose = document.getElementById('menu-close');
        const mobileMenu = document.getElementById('mobile-menu');
        const overlay = document.getElementById('mobile-menu-overlay');
        const body = document.body;
        const mobileLinks = document.querySelectorAll('.mobile-link');

        function toggleMenu(show) {
            if (show) {
                overlay.classList.remove('hidden');
                setTimeout(() => overlay.classList.add('opacity-100'), 10);
                mobileMenu.classList.remove('hidden-panel');
                body.classList.add('overflow-hidden');
            } else {
                overlay.classList.remove('opacity-100');
                mobileMenu.classList.add('hidden-panel');
                body.classList.remove('overflow-hidden');
                setTimeout(() => overlay.classList.add('hidden'), 300);
            }
        }

        menuOpen.addEventListener('click', () => toggleMenu(true));
        menuClose.addEventListener('click', () => toggleMenu(false));
        overlay.addEventListener('click', () => toggleMenu(false));
        mobileLinks.forEach(link => {
            link.addEventListener('click', () => toggleMenu(false));
        });
    </script>

</body>

</html>