<?php
// This file is part of Moodle - https://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <https://www.gnu.org/licenses/>.

/**
 * Plugin strings are defined here.
 *
 * @package     local_classroom_teams
 * @author      2022 JuanCarlo Castillo <juancarlo.castillo20@gmail.com>
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 * @copyright   2022 JuanCa Castillo & Eurecat.dev
 * @category    string
 */

defined('MOODLE_INTERNAL') || die();

$string['pluginname'] = 'Equipos para clase';
$string['pluginnameextra'] = '(Versión gratuita / Beta)';

// Main tab.
$string['select_course'] = 'Seleccione un curso:';
$string['select_title'] = 'Seleccione un título:';
$string['select_group_cour'] = 'Seleccione un grupo del curso:';
$string['byStudents'] = 'según el número de estudiantes';
$string['byGroups'] = 'según un número de grupos';
$string['choose'] = 'Seleccione... ';
$string['none'] = ' &nbsp;&nbsp; Ningún filtro creado &nbsp;';
$string['manyStudent'] = 'Cuántos estudiantes?';
$string['manyGroups'] = 'Cuántos grupos?';
$string['groupsChoises'] = '¿Cómo dividir los grupos?:';
$string['title_indications'] = 'Seleccione un curso y como dividirlo';
$string['pupils'] = 'Lista de estudiante';
$string['create'] = 'Crear "Team"';
$string['refresh'] = 'Actualizar';
$string['try_again'] = 'Pruebe otra vez';
$string['with_history'] = 'Con referencia del historial de los grupos pasados';
$string['history'] = 'Historial';
$string['saveGroups'] = 'Guardar en el historial';
$string['save'] = 'Guardar';
$string['group_proposal'] = 'Propuesta de estudiante "Teams"';
$string['heterogenic'] = 'Team heterogéneo';
$string['homogenic'] = 'Team homogéneo';
$string['santi'] = 'Es posible no repetir equipos anteriores';
$string['threshold'] = 'Insertar un umbral';
$string['f_screen'] = 'Pantalla completa ...';
$string['x'] = 'X';
$string['customisable'] = 'Filtro personalizado';
$string['fullscreen'] = 'Pantalla completa';
$string['incompatible'] = 'Tándem Incompatible';
$string['nostudent'] = 'Sin estudiantes';
$string['more_filter'] = 'Más filtros ...';
$string['less_filter'] = 'Menos filtros ...';

// Personal filter tab.
$string['add_button'] = 'Añadir';
$string['remove_button'] = 'Quitar';
$string['name_filter'] = 'Nombre del filtro:';
$string['value_filter'] = 'Introduzca los valores:';
$string['values_print'] = 'Valores del filtro';
$string['filter_print'] = 'Nombre del filtro';
$string['select_personal_filter'] = 'Seleccione un filtro personalizado';
$string['result'] = 'Resultado del filtro personalizado';
$string['indications1'] = 'Pulse ENTER después del nombre';
$string['indications2'] = 'Pulse ENTER después de cada valor';
$string['indications3'] = 'Elija un valor y los estudiantes que tienen ese valor, a continuación, pulse "Añadir".';
$string['indications4'] = 'Para crear un tándem a partir de aquellos alumnos que NO tienen que compartir el mismo grupo';

// Incompatible tandem tab.
$string['tandem'] = 'Tándem Incompatible';
$string['student_one'] = 'Primer estudiante';
$string['student_two'] = 'Segundo estudiante';

// Historial Tab.
$string['export'] = 'Exportar a CSV';
$string['titletable'] = 'Historial del generador de "Teams"';
$string['id_user'] = 'Usuarios';
$string['id_course'] = 'Curso';
$string['id_group'] = 'Subgrupos';
$string['toggle'] = 'Grupos o estudiantes';
$string['toggle_value'] = 'Dividir en';
$string['split_group'] = '"Teams"';
$string['timecreated'] = 'Momento de creación';
$string['record_course'] = 'No hay registros guardados';
$string['aftersave'] = 'Tarea añadida satisfactoriamente';
$string['history'] = 'Historial';
$string['filter'] = 'Filtro';
$string['homogenic_table'] = 'Heterogéneo';
$string['threshold_table'] = 'Umbral';
$string['tandem_value'] = 'Tándem';
$string['no'] = '-';
$string['right'] = 'Si';
$string['reference'] = 'con referencia de grupo anterior';

$string['personal_filter'] = 'Filtro Personalizado';
$string['general_filter'] = 'Filtro General';
$string['allstudent'] = 'Todos los estudiantes';
$string['modal'] = 'Pantalla completa';
$string['savemoodle'] = 'Guardar en Moodle';
$string['coursecompleted'] = 'Curso completado';
$string['meangrade'] = 'Nota media';
$string['titleteam'] = 'Seleccione un título para este proyecto';
$string['filter_name'] = 'Nombre del filtro';
$string['filter_value'] = 'Valores del filtro';
$string['filter_studentOn'] = 'Estudiantes';
$string['form'] = 'nuevo formulario';
$string['titletable'] = 'Tabla de resultados "Teams"';
$string['all_courses'] = 'Todo los cursos';
$string['select'] = 'Seleccionar';
$string['select_title'] = 'Seleccione un título';
$string['all_courses'] = 'Todos los cursos';
$string['saveinmoodle'] = 'Guardar en moodle';
$string['typeeach'] = 'Escriba cada valor y pulse Intro';
$string['typename'] = 'Escriba el nombre del filtro';
$string['sti'] = 'Seleccione un título';
$string['title'] = 'Título';
$string['titleteam'] = 'Título del "Team"';
$string['avgcourse'] = 'Promedio';
$string['success'] = 'Proceso satisfactorio. Guardado en el historial';
$string['successmoodle'] = 'Proceso satisfactorio. Guardado en moodle';
$string['norec'] = 'Ningún registro guardado';
$string['managedeletion'] = '* Para manejar la eliminación de grupos, se deberá realizar desde la plataforma de moodle.';

// Pics.
$string['pixtgcustom'] = 'Vista de filtro perzonalizado';
$string['pixtgcustomtable'] = 'Vista de filtro perzonalizado';
$string['premiumicon'] = 'Premium';

// Settings.
$string['email'] = 'Correo electrónico';
$string['email_des'] = 'Ingrese su correo';
$string['manage'] = 'Gestionar el Moderador de foros';
$string['showinnavigation'] = 'Mostrar en el navegador';
$string['showinnavigation_desc'] = 'Cuando esté activada, la navegación del sitio mostrará un enlace al Análisis de Sentimiento';
$string['apikey'] = 'APIKey';
$string['apikey_des'] = 'Ingrese su APIKey';
$string['name'] = 'Nombre';
$string['name_des'] = 'Ingrese su nombre';
$string['time'] = 'Tiempo';
$string['time_des'] = 'tiempo';
$string['url'] = 'Url';
$string['url_des'] = 'Url - Actual';
$string['productid'] = 'Identificador de producto';
$string['productid_des'] = 'Su producto actual';
$string['privacy'] = 'Acepto términos y condiciones';
$string['privacy_des'] = 'Aceptar condiciones';
$string['privacy_policy'] = 'Política de privacidad';
$string['email_cannot_be_empty'] = 'El campo Email no puede estar vacío';
$string['activate'] = 'Activar';
$string['error_empty_field'] = 'Este campo no puede estar vacío';
$string['placeholder_text'] = '123456789';
$string['title'] = 'Una vez instalado el plugin, tardará unos minutos en leer la base de datos y comprobar todos los mensajes del foro disponibles en la plataforma';

// Explain.
$string['homogenic_explain'] = '¿Cómo crear un "team"?';
$string['explain_course'] = 'Seleccione un curso para empezar. A continuación aparecerán diferentes opciones';
$string['explain_course_help'] = 'Seleccione un curso para empezar. A continuación aparecerán diferentes opciones';
$string['explain_groupcour'] = 'En caso de que el curso tenga grupos, se mostrarán en esta sección. Seleccione un grupo para este curso para continuar.';
$string['explain_groupcour_help'] = 'En caso de que el curso tenga grupos, se mostrarán en esta sección. Seleccione un grupo para este curso para continuar.';
$string['explain_formatsplit'] = 'Decidir cómo se dividirán los grupos, teniendo la opción de dividirse por alumnos o por grupos.';
$string['explain_formatsplit_help'] = 'Decidir cómo se dividirán los grupos, teniendo la opción de dividirse por alumnos o por grupos.';
$string['explain_bystudent_help'] = 'Escribir un número determinado de alumnos para cada grupo. Sólo permite valores numéricos';
$string['explain_bygroup_help'] = 'Para escribir un número determinado de grupos a dividir. Sólo admite valores numéricos';
$string['explain_bystudent'] = 'Escribir un número determinado de alumnos para cada grupo. Sólo permite valores numéricos';
$string['explain_bygroup'] = 'Para escribir un número determinado de grupos a dividir. Sólo admite valores numéricos';
$string['explainhisto'] = 'Al hacer clic en esta casilla, el programa utilizará como referencia los grupos generados anteriormente.';
$string['explainhisto_help'] = 'Al hacer clic en esta casilla, el programa utilizará como referencia los grupos generados anteriormente.';
$string['explain_tandem'] = 'Al hacer clic en esta casilla, el programa se referirá a las parejas creadas como tándems incompatibles. Si desea modificar las parejas creadas, vaya a dicha pestaña.';
$string['explain_tandem_help'] = 'Al hacer clic en esta casilla, el programa se referirá a las parejas creadas como tándems incompatibles. Si desea modificar las parejas creadas, vaya a dicha pestaña.';
$string['explain_personalfilter'] = 'Si el curso tiene un filtro personalizado, se mostrará en esta sección. También tiene la posibilidad de crear un filtro personalizado en la pestaña indicada. Además, se incluyen los valores por defecto de nota media y curso completo.';
$string['explain_personalfilter_help'] = 'Si el curso tiene un filtro personalizado, se mostrará en esta sección. También tiene la posibilidad de crear un filtro personalizado en la pestaña indicada. Además, se incluyen los valores por defecto de nota media y curso completo.';
$string['explain_homogenic'] = 'Esta opción permite elegir los grupos entre heterogéneos (diferentes) u homogéneos (iguales), en relación con el filtro elegido.';
$string['explain_homogenic_help'] = 'Esta opción permite elegir los grupos entre heterogéneos (diferentes) u homogéneos (iguales), en relación con el filtro elegido.';
$string['explain_heterogen'] = 'Esta opción permite elegir los grupos entre heterogéneos (diferentes) u homogéneos (iguales), en relación con el filtro elegido.';
$string['explain_threshold'] = 'El umbral nos permite dividir el grupo de una forma más flexible. cambiando este valor generamos mitades no exactas.';
$string['explain_threshold_help'] = 'El umbral nos permite dividir el grupo de una forma más flexible. cambiando este valor generamos mitades no exactas.';
$string['explain_title'] = 'Escriba un título para todo el proyecto';
$string['explain_titleteam'] = 'Debe escribir un título para mostrarlo como resultado';
$string['explain_titleteam_help'] = 'Debe escribir un título para mostrarlo como resultado';
$string['explain_title'] = 'Cuando escribas un título aquí, los grupos se guardarán en moodle group con este título';

// Provider.
$string['privacy:metadata:iduser'] = 'Id de usuario';
$string['privacy:metadata:idcourse'] = "Curso donde el usuario esta inscrito";
$string['privacy:metadata:idgroup'] = "Grupo dentro del curso donde el usuario esta inscrito";
$string['privacy:metadata:titleteam'] = "Título para un nuevo equipo donde el usuario entrará ";
$string['privacy:metadata:splitgroup'] = "La forma en que los usuarios se dividen en equipos";
$string['privacy:metadata:history'] = "Array con información de Id de usuario";
$string['privacy:metadata:tandem'] = "La forma de unir dos id de usuario";
$string['privacy:metadata:timecreated'] = "Para saber la hora de creación";
$string['privacy:metadata:studentonfilter'] = "Para atribuir un perfil a cualquier usuario";
$string['privacy:metadata:filtername'] = "Nombre para un nuevo usuario de filtro entrará";
$string['privacy:metadata:filtervalue'] = "Nombre de valor para un nuevo filtro de usuario";
$string['privacy:metadata:studenttandem'] = "Array con Id de usuario";
$string['privacy:metadata:localclassroomteams'] = "Tabla para guardar información de arrays de usuarios";
$string['privacy:metadata:localcgfiltername'] = "Tabla para guardar array de usuarios con información de atributos";
$string['privacy:metadata:localcgtandem'] = "Tabla para guardar array de usuarios con información de tándem incompatible";

// About us.
$string['about'] = 'Sobre nosotros';
$string['developed'] = 'Desarrollado por:';
$string['eurecat'] = 'Eurecat Academy';
$string['eurecatorg'] = 'Eurecat.org';
$string['aboutus'] = "En Eurecat Academy, reunimos a un equipo multidisciplinar de expertos apasionados por mejorar las competencias de las personas. La experiencia de nuestro equipo abarca desde el diseño instruccional hasta el desarrollo técnico para ofrecer soluciones que optimicen las actividades formativas de nuestros socios. Eurecat Academy es el departamento de formación de Eurecat Technology Centre";
$string['aboutus1'] = "Eurecat es un centro de investigación y tecnología con sede en Barcelona, España, que proporciona servicios de tecnología avanzada, innovación y formación a más de 1.500 empresas y organizaciones. Eurecat está considerado como uno de los principales centros europeos de investigación y tecnología, siendo la segunda organización privada sin ánimo de lucro más grande del sur de Europa.";
$string['aboutus2'] = "Eurecat Academy colabora con organizaciones laborales y de formación públicas y privadas en un espectro empresarial muy amplio como proveedor integral de servicios de formación, creación de contenidos y consultoría educativa. Eurecat Academy cuenta con un grupo de innovación especializado que se centra en la mejora de los procesos de transferencia y evaluación del conocimiento a través de interfaces TIC innovadoras, metodologías adaptativas y motivacionales, analítica del aprendizaje y entornos personales de formación. Combinamos conocimientos tecnológicos y pedagógicos y experiencia profesional para crear actividades, herramientas y recursos formativos de alto rendimiento, y para desarrollar planes educativos e itinerarios formativos.";
$string['aboutus3'] = "Nuestro propósito general es ofrecer soluciones con capacidad para generar un impacto positivo en personas y entidades, proporcionándoles herramientas eficaces para optimizar sus actividades formativas. Aspiramos a que cada persona libere su máximo potencial y contribuya a su progreso personal y profesional, para su propio bienestar y su contribución al desarrollo social.";

// Description.
$string['Describ'] = "Sobre el plugin";
$string['Describtion'] = 'Classroom Teams greatly facilitates the creation of groups of students in classroom environments, despite it can be used in any other situation, both homogeneous and heterogeneous, and considering characteristics that each creator, usually a teacher or academic coordinator, can customize. It is useful to ensure that the groups are balanced, in accordance with the objective of the task and up to date. It also improves the relationship between the people in the "Team" and the collective in general, increasing confidence in the environment and promoting class cohesion.';

$string['more'] = 'Cómo funciona';
$string['moreinfo'] = "La herramienta Equipos de clase podría crear y gestionar grupos de enseñanza, que pueden utilizarse para facilitar el trabajo en grupo, el debate y la colaboración entre los estudiantes. Actualmente existen algunas herramientas relacionadas con los grupos, que permiten hacer agrupaciones aleatorias dividiendo una clase en grupos o número de personas por grupo";
$string['moreinfo1'] = "La herramienta de creación automática de grupos de Eurecat Academy ofrece algunas características únicas: ";
$string['moreinfo2'] = " * Creación de equipos por varias características, incluyendo el tamaño de los equipos, el tipo de estudiante, las calificaciones o la finalización del curso, etc.";
$string['moreinfo3'] = " * Creación de equipos homogéneos (grupos que contienen personas con las mismas características) o heterogéneos (grupos con características diferentes).";
$string['moreinfo4'] = " * Creación de nuevos grupos aleatorios teniendo en cuenta agrupaciones anteriores";
$string['moreinfo5'] = " * Creación de grupos considerando incompatibilidades entre los miembros";
$string['moreinfo6'] = "La herramienta ofrece al profesor la posibilidad de mostrar el grupo creado en pantalla completa para ser utilizado en las actividades de clase. Los grupos creados pueden ser guardados ad Moodle group para ser utilizados en posteriores colaboraciones de los equipos";
$string['moreinfo7'] = "La herramienta permite agrupar a los alumnos en función de diversos factores, como sus capacidades de aprendizaje, intereses u objetivos específicos de aprendizaje, para facilitar estrategias eficaces de enseñanza y aprendizaje, promover la colaboración entre los alumnos y atender a las necesidades individuales";

// Classroom.
$string['classroom'] = "Los grupos de clase pueden adoptar diferentes formas, dependiendo de los objetivos educativos y del enfoque didáctico empleado por el instructor. Algunos tipos comunes de grupos de aula incluyen:";
$string['classroom1'] = "1.- Grupos basados en habilidades: Los alumnos se agrupan en función de sus capacidades académicas o niveles de destreza. Esto permite a los profesores diferenciar la instrucción y proporcionar materiales y actividades apropiados para estudiantes con diferentes niveles de competencia";
$string['classroom2'] = "2.- Grupos heterogéneos: Los alumnos con diversas capacidades, procedencias y estilos de aprendizaje se mezclan en grupos. Este enfoque fomenta la cooperación, el aprendizaje entre iguales y la interacción social entre alumnos con diversos puntos fuertes y débiles.";
$string['classroom3'] = "3.- Grupos homogéneos: Los alumnos con capacidades o características similares se agrupan juntos. Esta agrupación puede ser beneficiosa para centrarse en necesidades educativas específicas o para abordar retos comunes a los que se enfrenta un grupo concreto de estudiantes.";
$string['classroom4'] = "4.- Grupos de aprendizaje cooperativo: Los alumnos se organizan en pequeños grupos para trabajar en colaboración en tareas o proyectos académicos. Este enfoque fomenta el trabajo en equipo, las habilidades de comunicación y la responsabilidad compartida entre los estudiantes.";
$string['classroom5'] = "5.- Grupos basados en intereses: Los alumnos se agrupan en función de sus intereses o pasiones individuales. Este enfoque tiene como objetivo mejorar el compromiso y la motivación al permitir a los estudiantes explorar temas que se alinean con sus intereses personales.";
$string['classroom6'] = "El propósito de los grupos de clase es crear un entorno de aprendizaje inclusivo y de apoyo que maximice los resultados de aprendizaje de los alumnos. Al adaptar la instrucción y promover la colaboración dentro de estos grupos, los educadores pueden atender las diversas necesidades de los alumnos y facilitar su desarrollo académico y social en general";

// Regarding.
$string['regard'] = "Con respecto al enfoque de la IA";
$string['regarding'] = "Esta herramienta utiliza modelos de IA para detectar discurso de odio, como modelos de lenguaje como Moderación por OpenAI (";
$string['moderation'] = 'Moderación';
$string['guides'] = 'Guías - Visión general';
$string['regarding1'] = ") y abiertas. Está diseñado para ser lo más ético y responsable posible. Las herramientas que utilizan estos modelos se desarrollan con un fuerte énfasis en la privacidad y la protección de datos, y están diseñadas para garantizar que los datos de los usuarios se manejan con el máximo cuidado y respeto.";
$string['regarding2'] = "El equipo de desarrollo del complemento se compromete a mejorar continuamente los estándares éticos de su producto. Para lograrlo, están trabajando activamente en la aplicación de nuevas herramientas y directrices éticas a su proceso de desarrollo. Estas herramientas y directrices están diseñadas para ayudar al equipo a identificar y abordar las preocupaciones y consideraciones éticas a lo largo de todo el ciclo de vida del producto, desde su concepción hasta su implementación.";
$string['regarding3'] = "Los modelos de IA seleccionados para su uso suelen entrenarse en grandes conjuntos de datos que han sido cuidadosamente seleccionados para garantizar su representatividad y diversidad. Esto significa que los modelos no están sesgados hacia ningún grupo o ideología en particular, y que son capaces de identificar el discurso de odio en todas sus formas, independientemente de quién habla o qué dice. Más información aquí: ";
$string['regarding4'] = "Es importante tener en cuenta que las herramientas con funciones mejoradas proporcionadas por modelos de IA nunca son perfectas y deben utilizarse junto con moderación y supervisión humanas. Esto ayuda a garantizar que cualquier error o sesgo potencial sea detectado y corregido antes de que tenga la oportunidad de causar daño. El diseño general y la interfaz de usuario de esta herramienta están pensados para ayudar a los moderadores humanos de los foros, dejando las decisiones finales al criterio humano";

// Academy.
$string['academytitle'] = "Sobre Eurecat Academy";
$string['academy'] = "Eurecat es un centro de investigación y tecnología con sede en Barcelona, España, que proporciona servicios de tecnología avanzada, innovación y formación a más de 1.500 empresas y organizaciones. Eurecat está considerado uno de los principales centros europeos de investigación y tecnología, siendo la segunda organización privada sin ánimo de lucro del sur de Europa. Eurecat Academy colabora con organizaciones públicas y privadas en un espectro empresarial muy amplio y cuenta con un grupo de innovación especializado que se centra en la mejora de los procesos de transferencia y evaluación del conocimiento a través de analíticas de aprendizaje, interfaces TIC innovadoras, metodologías adaptativas y motivacionales, y entornos de formación personal. El grupo de innovación de Eurecat Academy también aporta entornos de aprendizaje profesional configurables, un laboratorio de cognición y percepción, y un grupo de analítica del aprendizaje. El equipo de Eurecat Academy combina conocimientos y experiencia tecnológica y pedagógica para crear herramientas y recursos formativos de alto rendimiento y desarrollar planes educativos e itinerarios formativos. Aparecerá como";
$string['userprivate'] = 'Política de privacidad:';
$string['userprivate1'] = 'FUNDACIÓ EURECAT considera que sus datos personales son muy importantes. Por ello, la tratamos de forma confidencial y segura. Nos comprometemos a garantizar la privacidad de los datos personales en todo momento y a no recopilar información innecesaria.';
$string['userprivate2'] = 'No es necesario que se registre previamente para acceder a nuestro sitio web. Si desea más información, puede ponerse en contacto con nosotros a través del formulario disponible en nuestra web, siempre que esté de acuerdo con nuestra política de privacidad, que deberá aceptar para dejar constancia de su consentimiento expreso al tratamiento de los datos para las finalidades indicadas.';
$string['userprivate3'] = 'En cumplimiento del Reglamento (UE) 2016/679, de 27 de abril de 2016, relativo a la protección de las personas físicas en lo que respecta al tratamiento de datos personales y a la libre circulación de estos datos y de la Ley 3/2018, de 5 de diciembre, de protección de datos personales y garantía de los derechos digitales, te informamos sobre el tratamiento de tus datos a través de esta Política de Privacidad.';
$string['information'] = 'Más información';
$string['adminprivate'] = "Aunque este plugin es una versión gratuita, nuestra empresa almacenará algunos datos para el correcto funcionamiento y mantenimiento del plugin. Estos datos serán nombre de usuario, email y url de la plataforma donde se desplegará el plugin.
La permanencia del plugin tiene una duración temporal, y al aceptar la configuración de privacidad estarás dando la oportunidad de que se te envíe información sobre la duración del plugin, así como de otros productos de la empresa.  En ningún caso la información será destinada a terceros o fines que no sean informativos sobre este plugin u otros plugins de la empresa.
Si tiene alguna pregunta, duda o sugerencia no dude en ponerse en contacto con nosotros.";

// Premium.
$string['premium'] = '* Actualizar a la versión Premium -  Análisis de Sentimiento';
$string['classroom_teams:viewmessages'] = 'Ver premium';
$string['getpremium'] = 'Obtener premium';
$string['premiumpage'] = 'Eurecat Academy Lab';
$string['keepquarentine'] = '* Añadir la posibilidad de crear nuevos filtros personalizados';
$string['removequarentine'] = '* Añadir la posibilidad de crear parejas incompatibles';
$string['nopubli'] = '* Sin publicidad';
$string['desblockpersonal'] = '* Desbloquear la pestaña "Filtro personal"';
$string['desblockhistory'] = '* Desbloquear la pestaña "Historial"';
$string['desblocktandem'] = '* Desbloqueo de la pestaña "Tándem incompatible"';
$string['exportdata'] = '* Exportar resultados';

// No active.
$string['noactive'] = 'Gracias por habernos elegido y usar nuestros productos. Usted ha superado el tiempo de la versión gratuita, si desea conseguir el producto en su versión premium póngase en contacto con nosotros.';

