<?php

/**
 * Genera la lista de países con su código lada.
 * Usado por los 6 formularios flotantes para evitar repetir ~200 líneas × 6.
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
    $out .= '<option data-lada="52">México</option>' . "\n";
    $out .= '<optgroup label="Other countries">' . "\n";
    foreach ($countries as $c) {
        if ($c[0] === '52') continue;
        $out .= '<option data-lada="' . $c[0] . '">' . $c[1] . '</option>' . "\n";
    }
    $out .= '</optgroup>';
    return $out;
}

/**
 * Renderiza un formulario flotante CRM completo (estilo psicología).
 *
 * @param string $id          ID del float-trigger (ej: 'flt-fin1')
 * @param string $color       Clase de color: 'fin','bas','dat','bi','com'
 * @param string $title       Título del diplomado (en float-panel-head .title)
 * @param string $subtitle    Subtítulo (ej: 'Recibe información sin compromiso')
 * @param string $tabText     Texto del botón lateral (ej: 'Análisis Financiero')
 * @param string $oferta      Valor para digofertaint_txt_c
 * @param string $redirectUrl URL de redirección post-envío
 * @param string $tabIcon     Clase FontAwesome opcional para el botón
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
    <title>Diplomados en Finanzas y Negocios en Línea · UIC Educación Continua · México</title>
    <meta name="description" content="Seis diplomados ejecutivos en línea en Finanzas, Business Intelligence, Estadística y Comercio Exterior. Universidad Intercontinental · 50 años · 125 horas · Constancia con valor curricular · Descuento hasta 20%." />
    <meta name="keywords" content="diplomado en finanzas en línea México, diplomado business intelligence UIC, análisis de estados financieros, ingeniería financiera diplomado, estadística aplicada negocios, diplomado comercio exterior T-MEC, educación continua universitaria México" />
    <link rel="icon" href="https://www.uic.mx/licenciaturas/wp-content/uploads/favicon_uic.png">
    <meta name="robots" content="index, follow" />

    <!-- ══ OPEN GRAPH ══ -->
    <link rel="canonical" href="https://uic.mx/finanzas/" />
    <meta property="og:type" content="website">
    <meta property="og:title" content="Diplomados en Finanzas y Negocios · UIC México">
    <meta property="og:description" content="Seis diplomados ejecutivos en línea con aval universitario UIC. 125 horas · Constancia con valor curricular · Descuentos hasta 20%.">
    <meta property="og:image" content="https://educacionenlinea.uic.mx/wp-content/uploads/2024/04/diplomados-finanzas-negocios-1.jpg">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:image:type" content="image/jpeg">
    <meta property="og:url" content="https://uic.mx/finanzas/">
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
                    "image": "https://educacionenlinea.uic.mx/wp-content/uploads/2024/04/diplomados-finanzas-negocios-1.jpg",
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
                    "@id": "#analisis",
                    "name": "Diplomado en Análisis de Estados e Instrumentos Financieros",
                    "description": "Programa de educación continua que forma profesionales capaces de interpretar estados financieros, diseñar portafolios de inversión, analizar mercados de divisas y operar con criptomonedas. Modalidad 100% en línea, 125 horas.",
                    "provider": {
                        "@id": "https://educacionenlinea.uic.mx/#org"
                    },
                    "educationalLevel": "Educación Continua",
                    "teaches": ["Análisis de estados financieros", "Portafolios de inversión", "Mercados de divisas", "Criptomonedas y DeFi", "Instrumentos derivados básicos", "Análisis fundamental y técnico"],
                    "courseMode": "online",
                    "timeRequired": "PT125H",
                    "offers": {
                        "@type": "Offer",
                        "price": "22650",
                        "priceCurrency": "MXN"
                    }
                },
                {
                    "@type": "Course",
                    "@id": "#ingenieria",
                    "name": "Diplomado en Ingeniería Financiera: Enfoque Empresarial",
                    "description": "Programa de educación continua enfocado en derivados, coberturas y gestión de riesgo financiero aplicados al entorno empresarial. Modalidad 100% en línea, 125 horas.",
                    "provider": {
                        "@id": "https://educacionenlinea.uic.mx/#org"
                    },
                    "educationalLevel": "Educación Continua",
                    "teaches": ["Instrumentos derivados", "Coberturas financieras", "Gestión de riesgo corporativo", "Matemáticas financieras", "Mercado MexDer"],
                    "courseMode": "online",
                    "timeRequired": "PT125H",
                    "offers": {
                        "@type": "Offer",
                        "price": "22900",
                        "priceCurrency": "MXN"
                    }
                },
                {
                    "@type": "Course",
                    "@id": "#basicas",
                    "name": "Diplomado en Finanzas Básicas para Empresas",
                    "description": "Programa de educación continua dirigido a directivos y emprendedores sin formación financiera previa. Lectura de balances, presupuestos, flujo de caja y control de costos. 100% en línea, 125 horas.",
                    "provider": {
                        "@id": "https://educacionenlinea.uic.mx/#org"
                    },
                    "educationalLevel": "Educación Continua",
                    "teaches": ["Balance general", "Estado de resultados", "Presupuestos", "Flujo de caja", "Control de costos", "Riesgos financieros en PYMES"],
                    "courseMode": "online",
                    "timeRequired": "PT125H",
                    "offers": {
                        "@type": "Offer",
                        "price": "24500",
                        "priceCurrency": "MXN"
                    }
                },
                {
                    "@type": "Course",
                    "@id": "#estadistica",
                    "name": "Diplomado en Estadística Aplicada a los Negocios",
                    "description": "Programa que enseña a recolectar, analizar e interpretar información estadística para tomar mejores decisiones en ventas, operaciones, marketing o finanzas. 100% en línea, 125 horas.",
                    "provider": {
                        "@id": "https://educacionenlinea.uic.mx/#org"
                    },
                    "educationalLevel": "Educación Continua",
                    "teaches": ["Estadística descriptiva", "Modelos de regresión", "Pronósticos", "Reportes estadísticos", "Toma de decisiones bajo incertidumbre"],
                    "courseMode": "online",
                    "timeRequired": "PT125H",
                    "offers": {
                        "@type": "Offer",
                        "price": "22665",
                        "priceCurrency": "MXN"
                    }
                },
                {
                    "@type": "Course",
                    "@id": "#bi",
                    "name": "Diplomado en Business Intelligence",
                    "description": "Programa que enseña a transformar grandes volúmenes de información en reportes, dashboards y estrategias concretas de negocio. 100% en línea, 125 horas.",
                    "provider": {
                        "@id": "https://educacionenlinea.uic.mx/#org"
                    },
                    "educationalLevel": "Educación Continua",
                    "teaches": ["Modelos de BI", "Dashboards ejecutivos", "KPIs por área", "Análisis organizacional", "Políticas de crecimiento basadas en datos"],
                    "courseMode": "online",
                    "timeRequired": "PT125H",
                    "offers": {
                        "@type": "Offer",
                        "price": "29400",
                        "priceCurrency": "MXN"
                    }
                },
                {
                    "@type": "Course",
                    "@id": "#comercio",
                    "name": "Diplomado en Comercio Exterior y Aduanero",
                    "description": "Programa que capacita para elaborar procesos completos de exportación e importación, dominar la normatividad aduanera y detectar oportunidades internacionales de negocio. Cubre el T-MEC. 100% en línea, 125 horas.",
                    "provider": {
                        "@id": "https://educacionenlinea.uic.mx/#org"
                    },
                    "educationalLevel": "Educación Continua",
                    "teaches": ["Exportación e importación", "Marco legal aduanero", "T-MEC y tratados comerciales", "Logística internacional", "Incoterms", "Inteligencia de mercados internacionales"],
                    "courseMode": "online",
                    "timeRequired": "PT125H",
                    "offers": {
                        "@type": "Offer",
                        "price": "21750",
                        "priceCurrency": "MXN"
                    }
                },
                {
                    "@type": "FAQPage",
                    "mainEntity": [{
                            "@type": "Question",
                            "name": "¿Cuál es el mejor diplomado en finanzas para directivos en México?",
                            "acceptedAnswer": {
                                "@type": "Answer",
                                "text": "Depende del objetivo. Sin formación financiera previa: Finanzas Básicas para Empresas. Con experiencia: Análisis de Estados Financieros ($22,650 MXN). Para derivados y coberturas: Ingeniería Financiera ($22,900 MXN). Todos son 125 horas en línea con aval UIC."
                            }
                        },
                        {
                            "@type": "Question",
                            "name": "¿Cuánto duran los diplomados en línea de la UIC?",
                            "acceptedAnswer": {
                                "@type": "Answer",
                                "text": "125 horas organizadas en 5 módulos de 25 horas. Puedes cursarlos completos o por módulo individual, a tu propio ritmo."
                            }
                        },
                        {
                            "@type": "Question",
                            "name": "¿Los diplomados de la UIC tienen validez oficial?",
                            "acceptedAnswer": {
                                "@type": "Answer",
                                "text": "Al concluir recibes constancia con valor curricular emitida por la Universidad Intercontinental, institución con 50 años y más de 30,000 egresados. Descuentos desde 10% con convenio empresarial."
                            }
                        },
                        {
                            "@type": "Question",
                            "name": "¿El Diplomado en Business Intelligence requiere conocimientos técnicos?",
                            "acceptedAnswer": {
                                "@type": "Answer",
                                "text": "No. Está diseñado para analistas y directivos sin perfil técnico avanzado. El enfoque es estratégico: dashboards, KPIs y decisiones basadas en datos aplicables desde el primer módulo."
                            }
                        },
                        {
                            "@type": "Question",
                            "name": "¿El Diplomado en Comercio Exterior incluye el T-MEC?",
                            "acceptedAnswer": {
                                "@type": "Answer",
                                "text": "Sí. Cubre T-MEC, normativa aduanera, regímenes de importación/exportación, clasificación arancelaria y detección de oportunidades internacionales. Inversión: $21,750 MXN · 125 horas."
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
                            "name": "Finanzas y Negocios",
                            "item": "https://uic.mx/finanzas/"
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
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,700,800;1,400;1,500&family=Lato:wght@300;400;700&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700,800&display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
    <link rel="stylesheet" href="../css/finanzas.css">
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
                <span class="hero-hub-name">Diplomados en Finanzas y Negocios</span>
                <h1>¿Cuánto más podrías crecer si dominaras las finanzas <em>de tu empresa?</em></h1>
                <p class="hero-sub">Seis diplomados ejecutivos en línea para tomar mejores decisiones financieras, leer datos con certeza y operar en mercados globales. Sin pausar tu carrera.</p>
                <div class="hero-pills" style="display: none;">
                    <span class="pill">Finanzas Corporativas</span>
                    <span class="pill">Business Intelligence</span>
                    <span class="pill">Comercio Exterior</span>
                    <span class="pill">Estadística</span>
                    <span class="pill">100% en línea</span>
                    <span class="pill">Aval universitario UIC</span>
                </div>
            </div>
            <div class="hero-stats au d1">
                <div class="stat">
                    <div class="stat-n">6</div>
                    <div class="stat-l">Diplomados especializados en negocios</div>
                </div>
                <div class="stat">
                    <div class="stat-n">50</div>
                    <div class="stat-l">Años formando líderes empresariales</div>
                </div>
                <div class="stat">
                    <div class="stat-n">30k+</div>
                    <div class="stat-l">Egresados en toda la oferta UIC</div>
                </div>
                <div class="stat">
                    <div class="stat-n">20%</div>
                    <div class="stat-l">Descuento máximo por convenio empresarial</div>
                </div>
            </div>
        </div>
    </header>

    <!-- ═══ STICKY NAV ═══ -->
    <nav class="prog-nav" aria-label="Programas">
        <div class="prog-nav-inner">
            <a href="#hub"><span class="dot" style="background:var(--gold)"></span>Todos los diplomados</a>
            <a href="#analisis"><span class="dot bg-fin"></span>Análisis Financiero</a>
            <a href="#ingenieria"><span class="dot bg-ing"></span>Ing. Financiera</a>
            <a href="#basicas"><span class="dot bg-bas"></span>Finanzas Básicas</a>
            <a href="#estadistica"><span class="dot bg-dat"></span>Estadística</a>
            <a href="#bi"><span class="dot bg-bi"></span>Business Intelligence</a>
            <a href="#comercio"><span class="dot bg-com"></span>Comercio Exterior</a>
            <a href="#faq">Preguntas frecuentes</a>
        </div>
    </nav>

    <!-- ═══ HUB OVERVIEW ═══ -->
    <section id="hub" class="hub" aria-labelledby="hub-h2">
        <div class="wrap">
            <p class="sec-label">Oferta académica completa</p>
            <h2 class="sec-title" id="hub-h2">Elige el programa<br />que necesita tu carrera</h2>
            <p class="sec-sub">Desde la lectura de un estado financiero hasta la operación de derivados. Desde la estadística básica hasta el Business Intelligence. Todos con aval de la Universidad Intercontinental.</p>

            <div class="card-grid">
                <a class="pcard" href="#analisis">
                    <div class="pcard-stripe bg-fin"></div>
                    <div class="pcard-body">
                        <div class="pcard-level c-fin">Finanzas Corporativas</div>
                        <h3>Análisis de Estados e Instrumentos Financieros</h3>
                        <p class="pcard-desc">Decisiones financieras basadas en datos. Análisis de estados, mercados, divisas y criptomonedas.</p>
                        <div class="pcard-meta">
                            <span class="tag">En línea</span><span class="tag">125 h</span><span class="tag tag-price">$22,650 MXN</span>
                        </div>
                        <div class="pcard-link c-fin">Ver programa</div>
                    </div>
                </a>
                <a class="pcard" href="#ingenieria">
                    <div class="pcard-stripe bg-ing"></div>
                    <div class="pcard-body">
                        <div class="pcard-level c-ing">Finanzas Corporativas</div>
                        <h3>Ingeniería Financiera: Enfoque Empresarial</h3>
                        <p class="pcard-desc">Derivados, coberturas y gestión de riesgo financiero aplicados al entorno empresarial.</p>
                        <div class="pcard-meta">
                            <span class="tag">En línea</span><span class="tag">125 h</span><span class="tag tag-price">$22,900 MXN</span>
                        </div>
                        <div class="pcard-link c-ing">Ver programa</div>
                    </div>
                </a>
                <a class="pcard" href="#basicas">
                    <div class="pcard-stripe bg-bas"></div>
                    <div class="pcard-body">
                        <div class="pcard-level c-bas">Para No Financieros</div>
                        <h3>Finanzas Básicas para Empresas</h3>
                        <p class="pcard-desc">Optimiza recursos y evalúa inversiones sin formación previa. Ideal para directivos y emprendedores.</p>
                        <div class="pcard-meta">
                            <span class="tag">En línea</span><span class="tag">125 h</span><span class="tag tag-price">$24,500 MXN</span>
                        </div>
                        <div class="pcard-link c-bas">Ver programa</div>
                    </div>
                </a>
                <a class="pcard" href="#estadistica">
                    <div class="pcard-stripe bg-dat"></div>
                    <div class="pcard-body">
                        <div class="pcard-level c-dat">Datos e Inteligencia</div>
                        <h3>Estadística Aplicada a los Negocios</h3>
                        <p class="pcard-desc">Interpreta datos y tecnología para decidir mejor en cualquier área de tu organización.</p>
                        <div class="pcard-meta">
                            <span class="tag">En línea</span><span class="tag">125 h</span><span class="tag tag-price">$22,665 MXN</span>
                        </div>
                        <div class="pcard-link c-dat">Ver programa</div>
                    </div>
                </a>
                <a class="pcard" href="#bi">
                    <div class="pcard-stripe bg-bi"></div>
                    <div class="pcard-body">
                        <div class="pcard-level c-bi">Datos e Inteligencia</div>
                        <h3>Business Intelligence</h3>
                        <p class="pcard-desc">Transforma datos en decisiones estratégicas. Dashboards, KPIs y herramientas BI para líderes.</p>
                        <div class="pcard-meta">
                            <span class="tag">En línea</span><span class="tag">125 h</span><span class="tag tag-price">$29,400 MXN</span>
                        </div>
                        <div class="pcard-link c-bi">Ver programa</div>
                    </div>
                </a>
                <a class="pcard" href="#comercio">
                    <div class="pcard-stripe bg-com"></div>
                    <div class="pcard-body">
                        <div class="pcard-level c-com">Comercio Internacional</div>
                        <h3>Comercio Exterior y Aduanero</h3>
                        <p class="pcard-desc">Normativa aduanera, T-MEC y operación de comercio internacional desde el primer módulo.</p>
                        <div class="pcard-meta">
                            <span class="tag">En línea</span><span class="tag">125 h</span><span class="tag tag-price">$21,750 MXN</span>
                        </div>
                        <div class="pcard-link c-com">Ver programa</div>
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
            <p class="sec-sub">Cada programa está diseñado para acompañarte hacia un objetivo concreto. Explora el que mejor se alinee con lo que quieres conseguir.</p>
            <div class="obj-grid">
                <a class="obj-card" href="#analisis" style="border-top-color:var(--fin)">
                    <div class="obj-icon">📊</div>
                    <div class="obj-goal">Quiero entender mejor las finanzas de mi empresa y decidir con mayor certeza</div>
                    <div class="obj-desc">Aprende a leer estados financieros, evaluar inversiones y analizar mercados. Convierte los números en información útil para actuar con confianza.</div>
                    <div class="obj-cta c-fin">Análisis de Estados Financieros →</div>
                </a>
                <a class="obj-card" href="#ingenieria" style="border-top-color:var(--ing)">
                    <div class="obj-icon">⚙️</div>
                    <div class="obj-goal">Quiero dominar instrumentos financieros avanzados y proteger a mi organización del riesgo</div>
                    <div class="obj-desc">Descubre cómo funcionan los derivados, las coberturas y las estrategias de gestión de riesgo que usan las grandes corporaciones.</div>
                    <div class="obj-cta c-ing">Ingeniería Financiera →</div>
                </a>
                <a class="obj-card" href="#basicas" style="border-top-color:var(--bas)">
                    <div class="obj-icon">🏢</div>
                    <div class="obj-goal">Quiero gestionar con mayor solidez los recursos de mi negocio o área</div>
                    <div class="obj-desc">Desde los presupuestos hasta el flujo de caja. Herramientas financieras esenciales para dirigir con claridad y seguridad, sin importar tu formación previa.</div>
                    <div class="obj-cta c-bas">Finanzas Básicas para Empresas →</div>
                </a>
                <a class="obj-card" href="#estadistica" style="border-top-color:var(--dat)">
                    <div class="obj-icon">📈</div>
                    <div class="obj-goal">Quiero aprovechar mejor los datos de mi organización para decidir con rigor</div>
                    <div class="obj-desc">Aprende a interpretar datos estadísticos y convertirlos en conclusiones accionables para ventas, operaciones, marketing o finanzas.</div>
                    <div class="obj-cta c-dat">Estadística Aplicada →</div>
                </a>
                <a class="obj-card" href="#bi" style="border-top-color:var(--bi)">
                    <div class="obj-icon">💡</div>
                    <div class="obj-goal">Quiero transformar los datos de mi empresa en estrategias e impulsar su crecimiento</div>
                    <div class="obj-desc">Construye dashboards, define KPIs y genera reportes que orienten las decisiones más importantes de tu organización.</div>
                    <div class="obj-cta c-bi">Business Intelligence →</div>
                </a>
                <a class="obj-card" href="#comercio" style="border-top-color:var(--com)">
                    <div class="obj-icon">🌎</div>
                    <div class="obj-goal">Quiero abrirme al comercio internacional y dominar la operación aduanera</div>
                    <div class="obj-desc">Conoce el marco normativo, los tratados internacionales y las oportunidades del mercado global para expandir tu alcance más allá de las fronteras.</div>
                    <div class="obj-cta c-com">Comercio Exterior y Aduanero →</div>
                </a>
            </div>
            <div class="obj-nudge" style="display: none;">
                <div>
                    <h3>¿No sabes por dónde empezar?</h3>
                    <p>Nuestro equipo puede ayudarte a encontrar el programa que mejor se adapte a tus objetivos profesionales. Sin compromiso, sin cuestionarios.</p>
                </div>
                <a class="btn-gold" href="tel:5554871397">Hablar con un asesor →</a>
            </div>
        </div>
    </section>

    <!-- ═══════════════════════════════════════════════════
            FLOATING FORMS (one per diplomado)
        ═══════════════════════════════════════════════════ -->


    <!-- FLOAT: Diplomado en Análisis de Estados e Instrumentos Financieros -->
    <?php renderFinForm('flt-fin1', 'fin', 'Diplomado en Análisis Financiero', 'Recibe información sin compromiso', 'Solicitar información', 'Análisis de Estados e Instrumentos Financieros', 'https://educacionenlinea.uic.mx/gracias/tp-analisisestadosfin.html'); ?>

    <!-- FLOAT: Diplomado en Ingeniería Financiera -->
    <?php renderFinForm('flt-ing', 'ing', 'Diplomado en Ingeniería Financiera', 'Recibe información sin compromiso', 'Solicitar información', 'Ingeniería Financiera - Enfoque Empresarial', 'https://educacionenlinea.uic.mx/gracias/tp-ingenieriafin.html'); ?>

    <!-- FLOAT: Diplomado en Finanzas Básicas -->
    <?php renderFinForm('flt-bas', 'bas', 'Diplomado en Finanzas Básicas', 'Recibe información sin compromiso', 'Solicitar información', 'Finanzas básicas para empresas', 'https://educacionenlinea.uic.mx/gracias/tp-finbasicasemp.html'); ?>

    <!-- FLOAT: Diplomado en Estadística Aplicada -->
    <?php renderFinForm('flt-dat', 'dat', 'Diplomado en Estadística', 'Recibe información sin compromiso', 'Solicitar información', 'Estadística Aplicada a los Negocios', 'https://educacionenlinea.uic.mx/gracias/tp-estadisticanegocios.html'); ?>

    <!-- FLOAT: Diplomado en Business Intelligence -->
    <?php renderFinForm('flt-bi', 'bi', 'Diplomado en Business Intelligence', 'Recibe información sin compromiso', 'Solicitar información', 'Business Intelligence', 'https://educacionenlinea.uic.mx/gracias/tp-businessint.html'); ?>

    <!-- FLOAT: Diplomado en Comercio Exterior -->
    <?php renderFinForm('flt-com', 'com', 'Diplomado en Comercio Exterior', 'Recibe información sin compromiso', 'Solicitar información', 'Comercio Exterior y Aduanero', 'https://educacionenlinea.uic.mx/gracias/tp-comercioextyaduanero.html'); ?>


    <!-- ═══ ANÁLISIS FINANCIERO ═══ -->
    <section id="analisis" class="prog-sec" data-float="flt-fin1" aria-labelledby="h2-analisis">
        <div class="wrap">
            <div class="prog-head">
                <div>
                    <span class="badge-pill bg-fin-l c-fin">Finanzas Corporativas</span>
                    <h2 id="h2-analisis">Análisis de Estados e <em>Instrumentos Financieros</em></h2>
                    <p class="prog-lead">En la economía digital la información financiera se genera a una velocidad sin precedente. Este diplomado te equipa para leer estados financieros, diseñar portafolios de inversión, analizar mercados de divisas y operar en el mundo de las criptomonedas. Cinco módulos para convertir los datos financieros en decisiones con impacto real.</p>
                </div>
                <div class="info-box">
                    <div class="info-box-head bg-fin">Datos del programa</div>
                    <div class="info-row"><span class="lbl">Modalidad</span><span class="val">100% en línea</span></div>
                    <div class="info-row"><span class="lbl">Duración</span><span class="val">125 horas · 5 módulos</span></div>
                    <div class="info-row"><span class="lbl">Inversión</span><span class="val">$22,650 MXN</span></div>
                    <div class="info-row"><span class="lbl">Descuento</span><span class="val">Hasta 20% OFF*</span></div>
                    <div class="info-row"><span class="lbl">Constancia</span><span class="val">Valor curricular UIC</span></div>
                    <p class="info-box-note">*Consulta todas las promociones vigentes y pagos en parcialidades con tu asesor educativo.</p>
                </div>
            </div>
            <div class="cols-2">
                <div class="content-box">
                    <h4 style="color: var(--fin);">¿Qué aprenderás?</h4>
                    <ul>
                        <li>Interpretar estados financieros y analizar la situación real de cualquier empresa</li>
                        <li>Diseñar portafolios de inversión y evaluar instrumentos del mercado bursátil</li>
                        <li>Operar en mercados de divisas, commodities y criptomonedas</li>
                        <li>Aplicar instrumentos derivados básicos para gestionar exposiciones financieras</li>
                        <li>Tomar decisiones de inversión con análisis fundamental y técnico</li>
                    </ul>
                </div>
                <div class="content-box">
                    <h4 style="color: var(--fin);">¿Qué lograrás?</h4>
                    <ul>
                        <li>Entender la salud financiera de tu empresa o tus inversiones con claridad</li>
                        <li>Hablar el lenguaje de las finanzas con confianza en cualquier reunión ejecutiva</li>
                        <li>Evaluar oportunidades de inversión con criterio propio y fundamentado</li>
                        <li>Gestionar mejor los activos personales y los recursos de tu organización</li>
                        <li>Comprender el ecosistema de las finanzas descentralizadas y las cripto</li>
                    </ul>
                </div>
            </div>
            <div class="faq-wrap">
                <h3 class="faq-title">Preguntas frecuentes</h3>
                <details>
                    <summary>¿Este diplomado es adecuado si ya tengo experiencia en contabilidad?</summary>
                    <div class="faq-ans">Sí. Complementa muy bien la formación contable al agregar la perspectiva de los mercados financieros, los instrumentos de inversión y el análisis bursátil. Te permite ir más allá del registro y pasar a la interpretación estratégica de la información financiera.</div>
                </details>
                <details>
                    <summary>¿Qué diferencia hay entre este diplomado y el de Ingeniería Financiera?</summary>
                    <div class="faq-ans">Este diplomado te da la base para leer, interpretar y decidir con información financiera: mercados, estados financieros, inversiones y criptomonedas. La Ingeniería Financiera lleva eso a un nivel más técnico: derivados, coberturas y gestión de riesgo corporativo. Son programas complementarios que pueden cursarse en secuencia.</div>
                </details>
                <details>
                    <summary>¿El diplomado incluye mercados de criptomonedas?</summary>
                    <div class="faq-ans">Sí. El módulo 5 aborda criptomonedas, blockchain y finanzas descentralizadas (DeFi), integrando estos activos emergentes a la perspectiva de análisis financiero contemporáneo.</div>
                </details>
            </div>
        </div>
    </section>

    <!-- ═══ INGENIERÍA FINANCIERA ═══ -->
    <section id="ingenieria" class="prog-sec" data-float="flt-ing" aria-labelledby="h2-ingenieria">
        <div class="wrap">
            <div class="prog-head">
                <div>
                    <span class="badge-pill bg-ing-l c-ing">Finanzas Corporativas</span>
                    <h2 id="h2-ingenieria">Ingeniería Financiera: <em>Enfoque Empresarial</em></h2>
                    <p class="prog-lead">Domina los instrumentos que usan los directores financieros de las grandes corporaciones para proteger a sus empresas ante la volatilidad. Aprende a analizar, planear y operar futuros, opciones y swaps e implementar coberturas de riesgo en el contexto real del mercado mexicano.</p>
                </div>
                <div class="info-box">
                    <div class="info-box-head bg-ing">Datos del programa</div>
                    <div class="info-row"><span class="lbl">Modalidad</span><span class="val">100% en línea</span></div>
                    <div class="info-row"><span class="lbl">Duración</span><span class="val">125 horas · 5 módulos</span></div>
                    <div class="info-row"><span class="lbl">Inversión</span><span class="val">$22,900 MXN</span></div>
                    <div class="info-row"><span class="lbl">Descuento</span><span class="val">Hasta 20% OFF*</span></div>
                    <div class="info-row"><span class="lbl">Constancia</span><span class="val">Valor curricular UIC</span></div>
                    <p class="info-box-note">*Consulta todas las promociones vigentes y pagos en parcialidades con tu asesor educativo.</p>
                </div>
            </div>
            <div class="cols-2">
                <div class="content-box">
                    <h4 style="color: var(--ing);">¿Qué aprenderás?</h4>
                    <ul>
                        <li>Analizar y valuar instrumentos financieros derivados: futuros, opciones y swaps</li>
                        <li>Diseñar estrategias de cobertura ante riesgos de tasa, divisa y precio</li>
                        <li>Operar en mercados de derivados nacionales e internacionales</li>
                        <li>Aplicar matemáticas financieras a decisiones corporativas complejas</li>
                        <li>Gestionar el riesgo financiero desde la perspectiva de la alta dirección</li>
                    </ul>
                </div>
                <div class="content-box">
                    <h4 style="color: var(--ing);">¿Qué lograrás?</h4>
                    <ul>
                        <li>Proteger a tu organización de la volatilidad de tasas, divisas y materias primas</li>
                        <li>Dominar los instrumentos que usan las grandes corporaciones para gestionar riesgos</li>
                        <li>Tomar decisiones financieras complejas con metodología y criterio técnico</li>
                        <li>Posicionarte como especialista en gestión de riesgo financiero corporativo</li>
                        <li>Agregar valor inmediato a tesorerías, áreas financieras y despachos de consultoría</li>
                    </ul>
                </div>
            </div>
            <div class="faq-wrap">
                <h3 class="faq-title">Preguntas frecuentes</h3>
                <details>
                    <summary>¿Es necesario haber tomado el Diplomado en Análisis Financiero antes?</summary>
                    <div class="faq-ans">No es un requisito formal, pero sí es recomendable tener conocimientos previos en finanzas o economía. Si ya trabajas en áreas financieras o tesorería, puedes ingresar directamente. El primer módulo de matemáticas financieras da la base necesaria para el resto del programa.</div>
                </details>
                <details>
                    <summary>¿Los derivados que se estudian aplican al mercado mexicano?</summary>
                    <div class="faq-ans">Sí. El programa estudia tanto los mercados internacionales como el MexDer (Mercado Mexicano de Derivados) y los instrumentos de cobertura más utilizados por empresas mexicanas exportadoras, importadoras y con deuda en dólares.</div>
                </details>
                <details>
                    <summary>¿Qué tipo de empresas necesitan profesionales con esta formación?</summary>
                    <div class="faq-ans">Cualquier empresa con exposición a riesgos de mercado: exportadoras e importadoras, instituciones financieras, tesorerías corporativas, fondos de inversión, aseguradoras y despachos de consultoría financiera.</div>
                </details>
            </div>
        </div>
    </section>

    <!-- ═══ FINANZAS BÁSICAS ═══ -->
    <section id="basicas" class="prog-sec" data-float="flt-bas" aria-labelledby="h2-basicas">
        <div class="wrap">
            <div class="prog-head">
                <div>
                    <span class="badge-pill bg-bas-l c-bas">Para No Financieros</span>
                    <h2 id="h2-basicas">Finanzas Básicas <em>para Empresas</em></h2>
                    <p class="prog-lead">Dirigir una empresa sin entender sus finanzas es el riesgo más subestimado del mundo empresarial. Este diplomado convierte los conceptos más complejos en herramientas prácticas: lee un balance, evalúa inversiones, controla costos y gestiona el flujo de caja. Sin formación previa, sin pausar tu agenda.</p>
                </div>
                <div class="info-box">
                    <div class="info-box-head bg-bas">Datos del programa</div>
                    <div class="info-row"><span class="lbl">Modalidad</span><span class="val">100% en línea</span></div>
                    <div class="info-row"><span class="lbl">Duración</span><span class="val">125 horas · 5 módulos</span></div>
                    <div class="info-row"><span class="lbl">Inversión</span><span class="val">$24,500 MXN</span></div>
                    <div class="info-row"><span class="lbl">Descuento</span><span class="val">Hasta 20% OFF*</span></div>
                    <div class="info-row"><span class="lbl">Constancia</span><span class="val">Valor curricular UIC</span></div>
                    <p class="info-box-note">*Consulta todas las promociones vigentes y pagos en parcialidades con tu asesor educativo.</p>
                </div>
            </div>
            <div class="cols-2">
                <div class="content-box">
                    <h4 style="color: var(--bas);">¿Qué aprenderás?</h4>
                    <ul>
                        <li>Leer e interpretar un balance general y un estado de resultados</li>
                        <li>Elaborar presupuestos y proyecciones financieras para tu área o negocio</li>
                        <li>Gestionar el flujo de caja y tomar decisiones de inversión con criterio</li>
                        <li>Identificar y controlar los costos clave que afectan la rentabilidad</li>
                        <li>Reconocer y gestionar los riesgos financieros más comunes en pymes</li>
                    </ul>
                </div>
                <div class="content-box">
                    <h4 style="color: var(--bas);">¿Qué lograrás?</h4>
                    <ul>
                        <li>Entender las finanzas de tu empresa sin depender de un contador para cada decisión</li>
                        <li>Comunicarte con tu equipo financiero de igual a igual</li>
                        <li>Tomar mejores decisiones de inversión, gasto y crecimiento en tu organización</li>
                        <li>Ganar seguridad para presentar y defender presupuestos ante dirección o consejo</li>
                        <li>Profesionalizar la gestión financiera de tu negocio o emprendimiento</li>
                    </ul>
                </div>
            </div>
            <div class="faq-wrap">
                <h3 class="faq-title">Preguntas frecuentes</h3>
                <details>
                    <summary>¿Realmente no necesito ningún conocimiento previo de finanzas?</summary>
                    <div class="faq-ans">Correcto. El programa parte de cero: el primer módulo te da el vocabulario financiero esencial y avanza progresivamente. Está diseñado para personas con responsabilidades directivas o de gestión que no vienen de una formación contable o financiera.</div>
                </details>
                <details>
                    <summary>¿Este diplomado me sirve si tengo mi propio negocio?</summary>
                    <div class="faq-ans">Es uno de los programas más solicitados por emprendedores y dueños de pymes. Te da exactamente lo que necesitas para gestionar el dinero de tu empresa con mayor orden y criterio: desde cómo leer tus estados financieros hasta cómo evaluar si una inversión vale la pena.</div>
                </details>
                <details>
                    <summary>¿Puedo tomarlo al mismo tiempo que trabajo?</summary>
                    <div class="faq-ans">Sí. La modalidad 100% en línea y la estructura de 5 módulos independientes está pensada para profesionistas en activo. Puedes avanzar a tu propio ritmo y estudiar en los horarios que mejor se adapten a tu agenda.</div>
                </details>
            </div>
        </div>
    </section>

    <!-- ═══ ESTADÍSTICA ═══ -->
    <section id="estadistica" class="prog-sec" data-float="flt-dat" aria-labelledby="h2-estadistica">
        <div class="wrap">
            <div class="prog-head">
                <div>
                    <span class="badge-pill bg-dat-l c-dat">Datos e Inteligencia</span>
                    <h2 id="h2-estadistica">Estadística Aplicada <em>a los Negocios</em></h2>
                    <p class="prog-lead">Los líderes más exitosos hoy son los que saben leer datos. Aprende a recolectar, analizar e interpretar información estadística para tomar mejores decisiones en ventas, operaciones, marketing o finanzas. Desde la estadística descriptiva hasta modelos de regresión aplicados, sin necesidad de ser matemático.</p>
                </div>
                <div class="info-box">
                    <div class="info-box-head bg-dat">Datos del programa</div>
                    <div class="info-row"><span class="lbl">Modalidad</span><span class="val">100% en línea</span></div>
                    <div class="info-row"><span class="lbl">Duración</span><span class="val">125 horas · 5 módulos</span></div>
                    <div class="info-row"><span class="lbl">Inversión</span><span class="val">$22,665 MXN</span></div>
                    <div class="info-row"><span class="lbl">Descuento</span><span class="val">Hasta 20% OFF*</span></div>
                    <div class="info-row"><span class="lbl">Constancia</span><span class="val">Valor curricular UIC</span></div>
                    <p class="info-box-note">*Consulta todas las promociones vigentes y pagos en parcialidades con tu asesor educativo.</p>
                </div>
            </div>
            <div class="cols-2">
                <div class="content-box">
                    <h4 style="color: var(--dat);">¿Qué aprenderás?</h4>
                    <ul>
                        <li>Aplicar estadística descriptiva para resumir e interpretar datos de negocio</li>
                        <li>Construir modelos de regresión y pronóstico para anticipar tendencias</li>
                        <li>Interpretar reportes y dashboards con criterio estadístico riguroso</li>
                        <li>Tomar decisiones bajo incertidumbre con bases cuantitativas sólidas</li>
                        <li>Comunicar hallazgos estadísticos de forma clara a equipos directivos</li>
                    </ul>
                </div>
                <div class="content-box">
                    <h4 style="color: var(--dat);">¿Qué lograrás?</h4>
                    <ul>
                        <li>Dejar de tomar decisiones por intuición y empezar a hacerlo con evidencia</li>
                        <li>Interpretar cualquier reporte de datos con mayor seguridad y precisión</li>
                        <li>Aportar análisis cuantitativos en reuniones estratégicas de tu organización</li>
                        <li>Identificar tendencias y anticipar escenarios antes que tu competencia</li>
                        <li>Fortalecer tu perfil analítico en cualquier industria o área funcional</li>
                    </ul>
                </div>
            </div>
            <div class="faq-wrap">
                <h3 class="faq-title">Preguntas frecuentes</h3>
                <details>
                    <summary>¿Necesito saber matemáticas avanzadas para este diplomado?</summary>
                    <div class="faq-ans">No. El enfoque es aplicado, no teórico. Aprenderás a utilizar herramientas estadísticas y tecnológicas para analizar datos de negocio, sin necesidad de profundizar en demostraciones matemáticas. La lógica de negocio es siempre el centro.</div>
                </details>
                <details>
                    <summary>¿En qué áreas de la empresa se aplica más este diplomado?</summary>
                    <div class="faq-ans">En prácticamente todas: ventas y comercial (análisis de tendencias, proyecciones), operaciones (control de calidad, productividad), recursos humanos (rotación, ausentismo), finanzas (modelos de presupuesto) y marketing (análisis de campañas y comportamiento del cliente).</div>
                </details>
                <details>
                    <summary>¿Es complementario al diplomado de Business Intelligence?</summary>
                    <div class="faq-ans">Sí, son muy complementarios. La Estadística Aplicada te da la base metodológica para interpretar datos con rigor. El Business Intelligence añade la capa de herramientas, dashboards y estrategia organizacional. Juntos forman un perfil analítico muy completo.</div>
                </details>
            </div>
        </div>
    </section>

    <!-- ═══ BUSINESS INTELLIGENCE ═══ -->
    <section id="bi" class="prog-sec" data-float="flt-bi" aria-labelledby="h2-bi">
        <div class="wrap">
            <div class="prog-head">
                <div>
                    <span class="badge-pill bg-bi-l c-bi">Datos e Inteligencia</span>
                    <h2 id="h2-bi">Diplomado en <em>Business Intelligence</em></h2>
                    <p class="prog-lead">Las empresas que lideran sus mercados no toman decisiones por intuición: las toman con datos. El Diplomado en Business Intelligence de la UIC te enseña a transformar grandes volúmenes de información en reportes, dashboards y estrategias concretas de negocio. Desde el primer módulo, con aplicación directa a tu organización.</p>
                </div>
                <div class="info-box">
                    <div class="info-box-head bg-bi">Datos del programa</div>
                    <div class="info-row"><span class="lbl">Modalidad</span><span class="val">100% en línea</span></div>
                    <div class="info-row"><span class="lbl">Duración</span><span class="val">125 horas · 5 módulos</span></div>
                    <div class="info-row"><span class="lbl">Inversión</span><span class="val">$29,400 MXN</span></div>
                    <div class="info-row"><span class="lbl">Descuento</span><span class="val">Hasta 20% OFF*</span></div>
                    <div class="info-row"><span class="lbl">Constancia</span><span class="val">Valor curricular UIC</span></div>
                    <p class="info-box-note">*Consulta todas las promociones vigentes y pagos en parcialidades con tu asesor educativo.</p>
                </div>
            </div>
            <div class="cols-2">
                <div class="content-box">
                    <h4 style="color: var(--bi);">¿Qué aprenderás?</h4>
                    <ul>
                        <li>Diseñar e implementar modelos de Business Intelligence para tu organización</li>
                        <li>Construir dashboards y reportes ejecutivos que faciliten la toma de decisiones</li>
                        <li>Definir KPIs relevantes por área y monitorear el desempeño organizacional</li>
                        <li>Identificar cuellos de botella y oportunidades mediante análisis de datos</li>
                        <li>Formular políticas de crecimiento basadas en inteligencia de negocios</li>
                    </ul>
                </div>
                <div class="content-box">
                    <h4 style="color: var(--bi);">¿Qué lograrás?</h4>
                    <ul>
                        <li>Transformar los datos de tu empresa en decisiones estratégicas concretas</li>
                        <li>Crear reportes ejecutivos que antes tardaban días, en minutos</li>
                        <li>Liderar conversaciones de datos con cualquier área de tu organización</li>
                        <li>Impulsar la cultura analítica de tu equipo desde cualquier posición</li>
                        <li>Detectar oportunidades de crecimiento que hoy están ocultas en tus datos</li>
                    </ul>
                </div>
            </div>
            <div class="faq-wrap">
                <h3 class="faq-title">Preguntas frecuentes</h3>
                <details>
                    <summary>¿Necesito saber programar o tener perfil técnico?</summary>
                    <div class="faq-ans">No. El diplomado está orientado a directivos, analistas y gerentes que trabajan con datos pero no tienen formación técnica en programación. Se utilizan herramientas de BI accesibles y el enfoque es estratégico, no de desarrollo de software.</div>
                </details>
                <details>
                    <summary>¿En qué industrias se aplica el Business Intelligence?</summary>
                    <div class="faq-ans">En todas. Retail, manufactura, servicios financieros, salud, educación, logística, tecnología. Cualquier organización que genere datos puede beneficiarse del BI. El diplomado incluye casos de empresas mexicanas en distintos sectores.</div>
                </details>
                <details>
                    <summary>¿Qué diferencia hay entre BI y Big Data?</summary>
                    <div class="faq-ans">El Business Intelligence trabaja con los datos estructurados que ya tiene tu empresa para generar reportes y estrategias. El Big Data involucra volúmenes masivos de datos no estructurados y tecnologías más complejas. Este diplomado cubre BI y es el punto de partida ideal antes de escalar a proyectos de Big Data.</div>
                </details>
            </div>
        </div>
    </section>

    <!-- ═══ COMERCIO EXTERIOR ═══ -->
    <section id="comercio" class="prog-sec" data-float="flt-com" aria-labelledby="h2-comercio">
        <div class="wrap">
            <div class="prog-head">
                <div>
                    <span class="badge-pill bg-com-l c-com">Comercio Internacional</span>
                    <h2 id="h2-comercio">Comercio Exterior <em>y Aduanero</em></h2>
                    <p class="prog-lead">México es la undécima economía exportadora del mundo y el T-MEC abre oportunidades sin precedente. Este diplomado te capacita para elaborar procesos completos de exportación e importación, dominar la normatividad aduanera y detectar oportunidades internacionales de negocio desde el primer módulo.</p>
                </div>
                <div class="info-box">
                    <div class="info-box-head bg-com">Datos del programa</div>
                    <div class="info-row"><span class="lbl">Modalidad</span><span class="val">100% en línea</span></div>
                    <div class="info-row"><span class="lbl">Duración</span><span class="val">125 horas · 5 módulos</span></div>
                    <div class="info-row"><span class="lbl">Inversión</span><span class="val">$21,750 MXN</span></div>
                    <div class="info-row"><span class="lbl">Descuento</span><span class="val">Hasta 20% OFF*</span></div>
                    <div class="info-row"><span class="lbl">Constancia</span><span class="val">Valor curricular UIC</span></div>
                    <p class="info-box-note">*Consulta todas las promociones vigentes y pagos en parcialidades con tu asesor educativo.</p>
                </div>
            </div>
            <div class="cols-2">
                <div class="content-box">
                    <h4 style="color: var(--com);">¿Qué aprenderás?</h4>
                    <ul>
                        <li>Elaborar procesos completos de exportación e importación cumpliendo la normativa vigente</li>
                        <li>Dominar el marco legal aduanero, aranceles y regímenes de operación</li>
                        <li>Aplicar el T-MEC y otros tratados comerciales en operaciones reales</li>
                        <li>Identificar oportunidades de negocio en mercados internacionales</li>
                        <li>Gestionar cadena de suministro y logística internacional con Incoterms</li>
                    </ul>
                </div>
                <div class="content-box">
                    <h4 style="color: var(--com);">¿Qué lograrás?</h4>
                    <ul>
                        <li>Operar con confianza en el ámbito aduanero y del comercio internacional</li>
                        <li>Abrir nuevos mercados para tu empresa o asesorar a otras en ese proceso</li>
                        <li>Resolver conflictos aduaneros y optimizar costos de importación o exportación</li>
                        <li>Aprovechar las ventajas del T-MEC y los tratados comerciales vigentes en México</li>
                        <li>Diseñar un plan de exportación sólido para tu producto o servicio</li>
                    </ul>
                </div>
            </div>
            <div class="faq-wrap">
                <h3 class="faq-title">Preguntas frecuentes</h3>
                <details>
                    <summary>¿Este diplomado me permite trabajar como agente aduanal?</summary>
                    <div class="faq-ans">El diplomado te da una formación sólida en operación aduanera y comercio exterior. Para ejercer como agente aduanal patente se requiere un proceso de certificación adicional ante el SAT. Sin embargo, el programa es ideal para trabajar en agencias aduanales, áreas de comercio exterior de empresas o consultoría en el sector.</div>
                </details>
                <details>
                    <summary>¿El programa aborda el T-MEC en profundidad?</summary>
                    <div class="faq-ans">Sí. El T-MEC es uno de los ejes centrales del programa: reglas de origen, preferencias arancelarias, mecanismos de solución de controversias y aprovechamiento de ventajas para empresas mexicanas exportadoras e importadoras.</div>
                </details>
                <details>
                    <summary>¿Es útil para alguien que quiere expandir su negocio al extranjero?</summary>
                    <div class="faq-ans">Absolutamente. El diplomado incluye un módulo de estrategia de comercio internacional enfocado en la detección de oportunidades, elaboración de planes de exportación e inteligencia de mercados internacionales. Es el mapa que necesita cualquier empresa que quiere ir más allá de las fronteras.</div>
                </details>
            </div>
        </div>
    </section>

    <!-- ═══ GEO CONTENT ═══ -->
    <section class="geo-sec" aria-label="Guía de diplomados en finanzas y negocios en línea México">
        <div class="wrap">
            <div class="geo-inner">
                <p class="sec-label">Guía para decidir</p>
                <h2>Diplomados en finanzas y negocios en línea: lo que necesitas saber antes de inscribirte</h2>
                <p>Cada vez más profesionistas en México buscan programas de educación continua que les permitan actualizar sus habilidades sin detener su carrera. Los diplomados ejecutivos en línea se han convertido en la opción más práctica para directivos, analistas, emprendedores y gerentes que necesitan formación real, aplicable y con aval universitario.</p>
                <p>La pregunta que más nos hacen es: <strong>¿cuál es el mejor diplomado en finanzas para alguien con mi perfil?</strong> La respuesta depende de dónde estás hoy y hacia dónde quieres ir. Por eso la UIC ofrece seis programas distintos que cubren desde los fundamentos financieros básicos hasta la operación de instrumentos derivados y la inteligencia de negocios basada en datos.</p>

                <h3>¿Qué es un diplomado ejecutivo en línea y para qué sirve?</h3>
                <p>Un diplomado ejecutivo es un programa de educación continua diseñado para profesionistas en activo. A diferencia de una maestría, no requiere tiempo completo ni abandonar el trabajo: se cursa en horarios flexibles, en módulos independientes y con aplicación inmediata al contexto laboral. Al concluir, el participante recibe una <strong>constancia con valor curricular</strong> que respalda su actualización profesional ante empleadores, clientes e instituciones.</p>
                <p>En el caso de los diplomados de la UIC, cada programa se estructura en <strong>5 módulos de 25 horas</strong> cada uno, dando como resultado <strong>125 horas totales</strong>; un formato que busca adaptarse a la agenda de cualquier ejecutivo.</p>

                <h3>¿Cuál es la diferencia entre un diplomado en finanzas y uno en Business Intelligence?</h3>
                <p>Los <strong>diplomados en finanzas</strong> se enfocan en la gestión, interpretación y operación de recursos e instrumentos financieros. Son ideales para quienes toman decisiones sobre inversión, presupuesto, riesgo o rentabilidad dentro de una organización. El <strong>diplomado en Business Intelligence</strong> se centra en el uso de datos de cualquier tipo para generar reportes, dashboards y estrategias de crecimiento. El <strong>diplomado en Estadística Aplicada</strong> es el puente entre ambos mundos: proporciona la base cuantitativa para interpretar datos con rigor, sin requerir perfil matemático avanzado.</p>

                <h3>¿Qué validez tiene una constancia de diplomado de la UIC?</h3>
                <p>La Universidad Intercontinental es una institución privada con 50 años de trayectoria y más de 30,000 egresados. Sus constancias tienen <strong>valor curricular reconocido</strong> por empresas, despachos e instituciones en México. Para profesionistas que ya cuentan con licenciatura o posgrado, un diplomado UIC fortalece el perfil de especialización en áreas de alta demanda como finanzas corporativas, análisis de datos y comercio exterior.</p>

                <h3>¿Por qué la educación continua en línea sigue creciendo en México?</h3>
                <p>La demanda de perfiles con formación en <strong>finanzas, datos y comercio exterior</strong> sigue siendo alta en el mercado laboral mexicano. Empresas de manufactura, banca, retail, tecnología y comercio internacional buscan constantemente ejecutivos que dominen estas áreas. Un diplomado especializado es, en muchos casos, el diferenciador que abre la siguiente puerta en la carrera profesional. La modalidad en línea elimina las barreras geográficas y de horario, haciendo accesible la formación universitaria a profesionistas de todo el país.</p>
            </div>
        </div>
    </section>

    <!-- ═══ TRUST / E-E-A-T ═══ -->
    <section class="trust-sec" aria-label="Por qué confiar en la UIC">
        <div class="wrap">
            <p class="sec-label" style="justify-content:center;color:var(--gold)">Respaldo institucional</p>
            <h2 class="sec-title" style="color:#fff;text-align:center;margin-bottom:.6rem">Una universidad con <em style="color:var(--gold-l)">50 años de trayectoria</em></h2>
            <p style="text-align:center;font-size:clamp(.85rem, 2vw, .95rem);color:rgba(255,255,255,.6);margin-bottom:0;max-width:60ch;margin-left:auto;margin-right:auto">La Universidad Intercontinental ha formado a más de 30,000 profesionistas. Sus diplomados combinan rigor académico con aplicación práctica inmediata al entorno laboral mexicano.</p>
            <div class="trust-grid">
                <div class="trust-card">
                    <div class="icon">🏛️</div>
                    <h3>Institución con historia</h3>
                    <p>50 años formando profesionistas en México con excelencia académica y enfoque en la formación integral.</p>
                </div>
                <div class="trust-card">
                    <div class="icon">📋</div>
                    <h3>Constancia con valor curricular</h3>
                    <p>Al concluir recibes constancia emitida por la UIC, reconocida por empresas e instituciones en toda la República.</p>
                </div>
                <div class="trust-card">
                    <div class="icon">⚡</div>
                    <h3>Aplicación inmediata</h3>
                    <p>Cada módulo se construye sobre casos reales del entorno empresarial mexicano para que lo que aprendas hoy lo apliques mañana.</p>
                </div>
                <div class="trust-card">
                    <div class="icon">🤝</div>
                    <h3>Convenios empresariales</h3>
                    <p>Descuento desde 10% y hasta 20% con convenio. Consulta si tu empresa o gremio tiene convenio vigente con la UIC.</p>
                </div>
                <div class="trust-card">
                    <div class="icon">🗓️</div>
                    <h3>Flexibilidad real</h3>
                    <p>Los 5 módulos son independientes: cursa todos o solo los que necesitas, sin comprometer tu agenda laboral.</p>
                </div>
                <div class="trust-card">
                    <div class="icon">💳</div>
                    <h3>Opciones de pago</h3>
                    <p>Pagos en parcialidades disponibles en todos los programas. Inversión desde $21,750 MXN con descuentos disponibles.</p>
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
                    <summary>¿Cuál es el mejor diplomado en finanzas para directivos en México?</summary>
                    <div class="faq-ans">Depende del objetivo. Sin formación financiera previa: <strong>Finanzas Básicas para Empresas</strong>. Con experiencia en finanzas y quieres profundizar en mercados e inversión: <strong>Análisis de Estados e Instrumentos Financieros</strong> ($22,650 MXN). Para operar derivados y cubrir riesgos: <strong>Ingeniería Financiera</strong> ($22,900 MXN). Los tres son 125 horas en línea con aval universitario UIC.</div>
                </details>
                <details>
                    <summary>¿Cuánto duran los diplomados y cuál es su estructura?</summary>
                    <div class="faq-ans">Cada diplomado tiene <strong>125 horas</strong> organizadas en 5 módulos de 25 horas. Puedes cursarlos completos o inscribirte al módulo que más te interese, con total flexibilidad de horario y ritmo de estudio. La plataforma está disponible 24 horas.</div>
                </details>
                <details>
                    <summary>¿Los diplomados de la UIC tienen validez oficial?</summary>
                    <div class="faq-ans">Al concluir recibes una <strong>constancia con valor curricular</strong> emitida por la Universidad Intercontinental, institución con 50 años de experiencia y más de 30,000 egresados. Aunque no equivale a un título universitario, representa formación especializada con aval de una institución de prestigio reconocida en México.</div>
                </details>
                <details>
                    <summary>¿Hay descuentos disponibles?</summary>
                    <div class="faq-ans">Sí. La UIC cuenta con <strong>convenios con empresas e instituciones</strong> que ofrecen descuento desde 10% y hasta 20% sobre el precio de lista. Todos los programas tienen opciones de <strong>pago en parcialidades</strong>. Contacta a un asesor para verificar si tu empresa tiene convenio vigente.</div>
                </details>
                <details>
                    <summary>¿Puedo cursar un solo módulo sin hacer el diplomado completo?</summary>
                    <div class="faq-ans">Sí. Los 5 módulos de cada diplomado pueden cursarse de forma individual, cada uno de 25 horas con su propio objetivo de aprendizaje. Es ideal para profesionistas que necesitan actualización en un tema específico.</div>
                </details>
                <details>
                    <summary>¿Cuánto tiempo necesito dedicar a la semana?</summary>
                    <div class="faq-ans">Con <strong>5 a 8 horas semanales</strong> puedes completar un módulo en aproximadamente 4 semanas y el diplomado completo en unos 5 meses. La plataforma está disponible 24 horas para que estudies cuando mejor se adapte a tu agenda profesional.</div>
                </details>
                <details>
                    <summary>¿El Diplomado en Comercio Exterior incluye el T-MEC?</summary>
                    <div class="faq-ans">Sí. El T-MEC es uno de los ejes centrales del programa: reglas de origen, preferencias arancelarias, mecanismos de solución de controversias y aprovechamiento de ventajas para empresas mexicanas exportadoras e importadoras. Duración: 125 horas · $21,750 MXN.</div>
                </details>
                <details>
                    <summary>¿Los diplomados en línea tienen la misma calidad que los presenciales?</summary>
                    <div class="faq-ans">Sí. Los diplomados en línea de la UIC ofrecen la misma calidad académica que los presenciales, con la ventaja de total flexibilidad de lugar y horario. El participante accede a los contenidos desde cualquier dispositivo, a su propio ritmo. En términos de contenido, evaluaciones y constancia final, los programas son equivalentes.</div>
                </details>
            </div>
        </div>
    </section>

    <!-- ═══ CTA BANNER ═══ -->
    <section class="cta-banner" aria-label="Solicitar información">
        <div class="wrap">
            <p style="font-size:.68rem;font-weight:700;letter-spacing:.18em;text-transform:uppercase;color:var(--gold);margin-bottom:.6rem">¿Listo para dar el siguiente paso?</p>
            <h2>Habla hoy con un asesor UIC</h2>
            <p>Sin compromiso. Te orientamos sobre el programa que mejor se adapta a tu perfil y objetivos.</p>
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
            <p>Análisis Financiero · Ingeniería Financiera · Finanzas Básicas · Estadística · Business Intelligence · Comercio Exterior</p>
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

            // Envía el formulario al endpoint del CRM (que hace redirect a redirect_url)
            const form = wrap.closest('form');
            if (form) form.submit();
        }

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
        const PROGRAM_IDS = ['analisis', 'ingenieria', 'basicas', 'estadistica', 'bi', 'comercio'];
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
        showProgram('analisis');

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
            jQuery('[id="url-result"]').val(pageURL);
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