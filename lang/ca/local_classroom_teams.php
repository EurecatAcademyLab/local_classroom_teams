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

$string['pluginname'] = 'Equips per clases';
$string['pluginnameextra'] = '(Versió gratuïta)';

// Main tab.
$string['select_course'] = 'Seleccioni un curs:';
$string['select_title'] = 'Seleccioni un títol:';
$string['select_group_cour'] = 'Seleccioni un grup del curs:';
$string['byStudents'] = "segons el nombre d'estudiants";
$string['byGroups'] = 'segons un nombre de grups';
$string['choose'] = 'Seleccioni... ';
$string['none'] = ' &nbsp;&nbsp; Cap filtre creat &nbsp;';
$string['manyStudent'] = 'Quants estudiants?';
$string['manyGroups'] = 'Quants grups?';
$string['groupsChoises'] = 'Com dividir els grups?:';
$string['title_indications'] = 'Seleccioni un curs i com dividir-lo';
$string['pupils'] = "Llista d'estudiant";
$string['create'] = 'Crear "Teams"';
$string['refresh'] = 'Refresca';
$string['try_again'] = 'torna-ho a provar';
$string['with_history'] = "Amb referència de l'historial dels grups passats";
$string['history'] = 'Historial';
$string['saveGroups'] = "Desa en l'historial";
$string['save'] = 'Desa';
$string['group_proposal'] = "Proposta d'estudiant Teams";
$string['heterogenic'] = 'Team heterogeni';
$string['homogenic'] = 'Team homogeni';
$string['threshold'] = 'insereixi un llindar';
$string['santi'] = 'És possible no repetir equips anteriors';
$string['f_screen'] = 'Pantalla completa ...';
$string['x'] = 'X';
$string['customisable'] = 'Filtre personalitzat';
$string['fullscreen'] = 'Pantalla completa';
$string['incompatible'] = 'Tàndem Incompatible';
$string['nostudent'] = 'Sense estudiants';
$string['more_filter'] = 'Més filtres ...';
$string['less_filter'] = 'Menys filtres ...';

// Personal filter tab.
$string['add_button'] = 'Afegir';
$string['remove_button'] = 'Remoure';
$string['name_filter'] = 'Nom del filtre:';
$string['value_filter'] = 'Introdueixi els valors:';
$string['values_print'] = 'Valors del filtre';
$string['filter_print'] = 'Nom del filtre';
$string['select_personal_filter'] = 'Seleccioni un filtre personalitzat';
$string['result'] = 'Resultat del filtre personalitzat';
$string['indications1'] = 'Premi ENTER després del nom';
$string['indications2'] = 'Premi ENTER després de cada valor';
$string['indications3'] = 'Triï un valor i els estudiants que tenen aquest valor, a continuació, premi "Afegir".';
$string['indications4'] = "Per a crear un tàndem a partir d'aquells alumnes que NO han de compartir el mateix grup";

// Incompatible tandem tab.
$string['tandem'] = 'Tàndem Incompatible';
$string['student_one'] = 'Primer estudiant';
$string['student_two'] = 'Segon estudiant';

// Historial Tab.
$string['export'] = 'Exportar a CSV';
$string['titletable'] = 'Historial del generador de "Teams"';
$string['id_user'] = 'Usuaris';
$string['id_course'] = 'Curs';
$string['id_group'] = 'Subgrups';
$string['toggle'] = 'Grups o estudiants';
$string['toggle_value'] = 'Dividir en';
$string['split_group'] = '"Teams"';
$string['timecreated'] = 'Moment de creació';
$string['record_course'] = 'No hi ha registres guardats';
$string['aftersave'] = 'Tasca afegida satisfactòriament';
$string['history'] = 'Historial';
$string['filter'] = 'Filtre';
$string['homogenic_table'] = 'Heterogeni';
$string['threshold_table'] = 'Llindar';
$string['tandem_value'] = 'Tàndem';
$string['no'] = '-';
$string['right'] = 'Si';
$string['reference'] = 'amb referència de grup anterior';

$string['personal_filter'] = 'Filtre Personalitzat';
$string['general_filter'] = 'Filtre General';
$string['allstudent'] = 'Tots els estudiants';
$string['modal'] = 'Pantalla completa';
$string['savemoodle'] = 'Desa en Moodle';
$string['coursecompleted'] = 'Curs completat';
$string['meangrade'] = 'Nota mitjana';
$string['titleteam'] = 'Seleccioni un títol per a aquest projecte';
$string['filter_name'] = 'Nom del filtre';
$string['filter_value'] = 'Valors del filtre';
$string['filter_studentOn'] = 'Estudiants';
$string['form'] = 'nou formulari';
$string['titletable'] = 'Taula de resultats "Teams"';
$string['all_courses'] = 'tots els cursos';
$string['select'] = 'Seleccionar';
$string['select_title'] = 'Seleccioni un títol';
$string['all_courses'] = 'tots els cursos';
$string['saveinmoodle'] = 'Desa en moodle';
$string['typeeach'] = 'Escrigui cada valor i premi Intro';
$string['typename'] = 'Escriba el nombre del filtro';
$string['sti'] = 'Seleccioni un títol';
$string['title'] = 'Títol';
$string['titleteam'] = 'Títol del "Team"';
$string['avgcourse'] = 'Mitjana';
$string['success'] = "Procés satisfactori. Desat en l'historial";
$string['successmoodle'] = 'Procés satisfactori. Desat en moodle';
$string['norec'] = 'Cap registre desat';
$string['managedeletion'] = "* Per l'eliminació de grups, s'haurà de realitzar des de la plataforma de moodle.";

// Pics.
$string['pixtgcustom'] = "Una vista d'un filtre personalitzat";
$string['pixtgcustomtable'] = "Una vista d'un filtre personalitzat";
$string['premiumicon'] = 'Premium';

// Settings.
$string['email'] = 'Correu electrònic';
$string['email_des'] = 'Ingressi el seu correu';
$string['manage'] = 'gestionar el Moderador de fòrums';
$string['showinnavigation'] = 'Mostrar en el navegador';
$string['showinnavigation_desc'] = "Quan estigui activada, la navegació del lloc mostrarà un enllaç a l'Anàlisi de Sentiment";
$string['apikey'] = 'APIKey';
$string['apikey_des'] = 'Ingressi la seva APIKey';
$string['name'] = 'Nom';
$string['name_des'] = 'Ingressi el seu nom';
$string['time'] = 'Temps';
$string['time_des'] = 'Temps';
$string['url'] = 'Url';
$string['url_des'] = 'Url - Actual';
$string['productid'] = 'Identificador de producte';
$string['productid_des'] = 'El seu producte actual';
$string['privacy'] = 'Accepto termes i condicions';
$string['privacy_des'] = 'Acceptar condicions';
$string['privacy_policy'] = 'Política de privacitat';
$string['email_cannot_be_empty'] = 'El camp Email no pot estar buit';
$string['activate'] = 'Activar';
$string['error_empty_field'] = 'Aquest camp no pot estar buit';
$string['placeholder_text'] = '123456789';
$string['title'] = 'Una vegada instal·lat el plugin, trigarà uns minuts a llegir la base de dades i comprovar tots els missatges del fòrum disponibles en la plataforma';

// Explain.
$string['explain_course'] = 'Seleccioni un curs per a començar. A continuació apareixeran diferents opcions';
$string['explain_course_help'] = 'Seleccioni un curs per a començar. A continuació apareixeran diferents opcions';
$string['explain_groupcour'] = 'En cas que el curs tingui grups, es mostraran en aquesta secció. Seleccioni un grup per a aquest curs per a continuar.';
$string['explain_groupcour_help'] = 'En cas que el curs tingui grups, es mostraran en aquesta secció. Seleccioni un grup per a aquest curs per a continuar.';
$string['explain_formatsplit'] = "Decidir com es dividiran els grups, tenint l'opció de dividir-se per alumnes o per grups.";
$string['explain_formatsplit_help'] = "Decidir com es dividiran els grups, tenint l'opció de dividir-se per alumnes o per grups.";
$string['explain_bystudent_help'] = "Escriure un nombre determinat d'alumnes per a cada grup. Només permet valors numèrics";
$string['explain_bystudent'] = "Escriure un nombre determinat d'alumnes per a cada grup. Només permet valors numèrics";
$string['explain_bygroup_help'] = 'Per a escriure un nombre determinat de grups a dividir. Només admet valors numèrics';
$string['explain_bygroup'] = 'Per a escriure un nombre determinat de grups a dividir. Només admet valors numèrics';
$string['explainhisto'] = 'En fer clic en aquesta casella, el programa utilitzarà com a referència els grups generats anteriorment.';
$string['explainhisto_help'] = 'En fer clic en aquesta casella, el programa utilitzarà com a referència els grups generats anteriorment.';
$string['explain_tandem'] = 'En fer clic en aquesta casella, el programa es referirà a les parelles creades com a tàndems incompatibles. Si desitja modificar les parelles creades, vagi a aquesta pestanya.';
$string['explain_tandem_help'] = 'En fer clic en aquesta casella, el programa es referirà a les parelles creades com a tàndems incompatibles. Si desitja modificar les parelles creades, vagi a aquesta pestanya.';
$string['explain_personalfilter'] = "Si el curs té un filtre personal, es mostrarà en aquesta secció. També té la possibilitat de crear un filtre personal en la pestanya indicada. A més, s'inclouen els valors per defecte de nota mitjana i curs complet.";
$string['explain_personalfilter_help'] = "Si el curs té un filtre personal, es mostrarà en aquesta secció. També té la possibilitat de crear un filtre personal en la pestanya indicada. A més, s'inclouen els valors per defecte de nota mitjana i curs complet.";
$string['explain_homogenic'] = 'Aquesta opció permet triar els grups entre heterogenis (diferents) o homogenis (iguals), en relació amb el filtre triat.';
$string['explain_homogenic_help'] = 'Aquesta opció permet triar els grups entre heterogenis (diferents) o homogenis (iguals), en relació amb el filtre triat.';
$string['explain_heterogen'] = 'Aquesta opció permet triar els grups entre heterogenis (diferents) o homogenis (iguals), en relació amb el filtre triat.';
$string['explain_threshold'] = "El llindar ens permet dividir el grup d'una forma més flexible. canviant aquest valor generem meitats no exactes.";
$string['explain_threshold_help'] = "El llindar ens permet dividir el grup d'una forma més flexible. canviant aquest valor generem meitats no exactes.";
$string['explain_title'] = 'Escrigui un títol per a tot el projecte';
$string['explain_titleteam'] = "Ha d'escriure un títol per a mostrar-lo com a resultat";
$string['explain_titleteam_help'] = "Ha d'escriure un títol per a mostrar-lo com a resultat";
$string['homogenic_explain'] = 'Com crear un "team"';
$string['explain_title'] = 'Quan escribes un títol aquí, els grups es guardaran en moodle group amb aquest títol';

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
$string['about'] = 'Sobre nosaltres';
$string['developed'] = 'Desenvolupador per:';
$string['eurecat'] = 'Eurecat Academy';
$string['eurecatorg'] = 'Eurecat.org';
$string['aboutus'] = "En Eurecat Academy, reunim un equip multidisciplinari d'experts apassionats per millorar les competències de les persones. L'experiència del nostre equip abasta des del disseny instruccional fins al desenvolupament tècnic per a oferir solucions que optimitzin les activitats formatives dels nostres socis. Eurecat Academy és el departament de formació de Eurecat Technology Centre";
$string['aboutus1'] = "Eurecat és un centre de recerca i tecnologia amb seu a Barcelona, Espanya, que proporciona serveis de tecnologia avançada, innovació i formació a més de 1.500 empreses i organitzacions. Eurecat és considerat com un dels principals centres europeus de recerca i tecnologia, sent la segona organització privada sense ànim de lucre més gran del sud d'Europa.";
$string['aboutus2'] = "Eurecat Academy col·labora amb organitzacions laborals i de formació públiques i privades en un espectre empresarial molt ampli com a proveïdor integral de serveis de formació, creació de continguts i consultoria educativa. Eurecat Academy compta amb un grup d'innovació especialitzat que se centra en la millora dels processos de transferència i avaluació del coneixement a través d'interfícies TIC innovadores, metodologies adaptatives i motivacionals, analítica de l'aprenentatge i entorns personals de formació. Combinem coneixements tecnològics i pedagògics i experiència professional per a crear activitats, eines i recursos formatius d'alt rendiment, i per a desenvolupar plans educatius i itineraris formatius.";
$string['aboutus3'] = "El nostre propòsit general és oferir solucions amb capacitat per a generar un impacte positiu en persones i entitats, proporcionant-los eines eficaces per a optimitzar les seves activitats formatives. Aspirem al fet que cada persona alliberi el seu màxim potencial i contribueixi al seu progrés personal i professional, per al seu propi benestar i la seva contribució al desenvolupament social.";

// Description.
$string['Describ'] = "Sobre aquest plugin";
$string['Describtion'] = "Classroom Teams facilita enormement la creació de grups d'alumnes en entorns d'aula, a pesar que pot utilitzar-se en qualsevol altra situació, tant homogenis com heterogenis, i tenint en compte característiques que cada creador, normalment un professor o coordinador acadèmic, pot personalitzar. Serveix perquè els grups siguin equilibrats, concordes amb l'objectiu de la tasca i actualitzats. A més, millora la relació entre les persones del 'Equip' i del col·lectiu en general, augmentant la confiança en l'entorn i fomentant la cohesió de la classe";

$string['more'] = "Com funciona";
$string['moreinfo'] = "L'eina Equips de classe podria crear i gestionar grups d'ensenyament, que poden utilitzar-se per a facilitar el treball en grup, el debat i la col·laboració entre els estudiants. Actualment existeixen algunes eines relacionades amb els grups, que permeten fer agrupacions aleatòries dividint una classe en grups o nombre de persones per grup";
$string['moreinfo1'] = "L'eina de creació automàtica de grups de *Eurecat *Academy ofereix algunes característiques úniques: ";
$string['moreinfo2'] = "* Creació d'equips per diverses característiques, incloent-hi la grandària dels equips, el tipus d'estudiant, les qualificacions o la finalització del curs, etc.";
$string['moreinfo3'] = "* Creació d'equips homogenis (grups que contenen persones amb les mateixes característiques) o heterogenis (grups amb característiques diferents).";
$string['moreinfo4'] = "* Creació de nous grups aleatoris tenint en compte agrupacions anteriors";
$string['moreinfo5'] = "* Creació de grups considerant incompatibilitats entre els membres";
$string['moreinfo6'] = "L'eina ofereix al professor la possibilitat de mostrar el grup creat en pantalla completa per a ser utilitzat en les activitats de classe. Els grups creats poden ser guardats *ad *Moodle *group per a ser utilitzats en posteriors col·laboracions dels equips";
$string['moreinfo7'] = "L'eina permet agrupar els alumnes en funció de diversos factors, com les seves capacitats d'aprenentatge, interessos o objectius específics d'aprenentatge, per a facilitar estratègies eficaces d'ensenyament i aprenentatge, promoure la col·laboració entre els alumnes i atendre les necessitats individuals";

// Classroom.
$string['classroom'] = "Els grups de classe poden adoptar diferents formes, depenent dels objectius educatius i de l'enfocament didàctic emprat per l'instructor. Alguns tipus comuns de grups d'aula inclouen:";
$string['classroom1'] = "1.- Grups basats en habilitats: Els alumnes s'agrupen en funció de les seves capacitats acadèmiques o nivells de destresa. Això permet als professors diferenciar la instrucció i proporcionar materials i activitats apropiats per a estudiants amb diferents nivells de competència";
$string['classroom2'] = "2.- Grups heterogenis: Els alumnes amb diverses capacitats, procedències i estils d'aprenentatge es barregen en grups. Aquest enfocament fomenta la cooperació, l'aprenentatge entre iguals i la interacció social entre alumnes amb diversos punts forts i febles.";
$string['classroom3'] = "3.- Grups homogenis: Els alumnes amb capacitats o característiques similars s'agrupen junts. Aquesta agrupació pot ser beneficiosa per a centrar-se en necessitats educatives específiques o per a abordar reptes comuns als quals s'enfronta un grup concret d'estudiants.";
$string['classroom4'] = "4.- Grups d'aprenentatge cooperatiu: Els alumnes s'organitzen en petits grups per a treballar en col·laboració en tasques o projectes acadèmics. Aquest enfocament fomenta el treball en equip, les habilitats de comunicació i la responsabilitat compartida entre els estudiants.";
$string['classroom5'] = "5.- Grups basats en interessos: Els alumnes s'agrupen en funció dels seus interessos o passions individuals. Aquest enfocament té com a objectiu millorar el compromís i la motivació en permetre als estudiants explorar temes que s'alineen amb els seus interessos personals.";
$string['classroom6'] = "El propòsit dels grups de classe és crear un entorn d'aprenentatge inclusiu i de suport que maximitzi els resultats d'aprenentatge dels alumnes. En adaptar la instrucció i promoure la col·laboració dins d'aquests grups, els educadors poden atendre les diverses necessitats dels alumnes i facilitar el seu desenvolupament acadèmic i social en general";

// Regarding.
$string['regard'] = "Respecte a l'enfocament de la IA";
$string['regarding'] = "Aquesta eina utilitza models de IA per a detectar discurs d'odi, com a models de llenguatge com Moderació per OpenAI (";
$string['moderation'] = 'Moderació';
$string['guides'] = 'Guies - Visió general';
$string['regarding1'] = ") i obertes. Està dissenyat per a ser el més ètic i responsable possible. Les eines que utilitzen aquests models es desenvolupen amb un fort èmfasi en la privacitat i la protecció de dades, i estan dissenyades per a garantir que les dades dels usuaris es manegen amb la màxima cura i respecte.";
$string['regarding2'] = "L'equip de desenvolupament del complement es compromet a millorar contínuament els estàndards ètics del seu producte. Per a aconseguir-ho, estan treballant activament en l'aplicació de noves eines i directrius ètiques al seu procés de desenvolupament. Aquestes eines i directrius estan dissenyades per a ajudar l'equip a identificar i abordar les preocupacions i consideracions ètiques al llarg de tot el cicle de vida del producte, des de la seva concepció fins a la seva implementació.";
$string['regarding3'] = "Els models de IA seleccionats per al seu ús solen entrenar-se en grans conjunts de dades que han estat acuradament seleccionats per a garantir la seva representativitat i diversitat. Això significa que els models no estan esbiaixats cap a cap grup o ideologia en particular, i que són capaces d'identificar el discurs d'odi en totes les seves formes, independentment de qui parla o què diu. Més informació aquí:";
$string['regarding4'] = "És important tenir en compte que les eines amb funcions millorades proporcionades per models de IA mai són perfectes i han d'utilitzar-se juntament amb moderació i supervisió humanes. Això ajuda a garantir que qualsevol error o biaix potencial sigui detectat i corregit abans que tingui l'oportunitat de causar mal. El disseny general i la interfície d'usuari d'aquesta eina estan pensats per a ajudar als moderadors humans dels fòrums, deixant les decisions finals al criteri humà";

// Academy.
$string['academytitle'] = "Sobre Eurecat Academy";
$string['academy'] = "Eurecat és un centre de recerca i tecnologia amb seu a Barcelona, Espanya, que proporciona serveis de tecnologia avançada, innovació i formació a més de 1.500 empreses i organitzacions. Eurecat és considerat un dels principals centres europeus de recerca i tecnologia, sent la segona organització privada sense ànim de lucre del sud d'Europa. Eurecat Academy col·labora amb organitzacions públiques i privades en un espectre empresarial molt ampli i compta amb un grup d'innovació especialitzat que se centra en la millora dels processos de transferència i avaluació del coneixement a través d'analítiques d'aprenentatge, interfícies TIC innovadores, metodologies adaptatives i motivacionals, i entorns de formació personal. El grup d'innovació de Eurecat Academy també aporta entorns d'aprenentatge professional configurables, un laboratori de cognició i percepció, i un grup d'analítica de l'aprenentatge. L'equip de Eurecat Academy combina coneixements i experiència tecnològica i pedagògica per a crear eines i recursos formatius d'alt rendiment i desenvolupar plans educatius i itineraris formatius. Apareixerà com";
$string['userprivate'] = 'Política de privacitat:';
$string['userprivate1'] = 'FUNDACIÓ EURECAT considera que les seves dades personals són molt importants. Per això, la tractem de manera confidencial i segura. Ens comprometem a garantir la privacitat de les dades personals en tot moment i a no recopilar informació innecessària.';
$string['userprivate2'] = "No és necessari que es registri prèviament per a accedir al nostre lloc web. Si desitja més informació, pot posar-se en contacte amb nosaltres a través del formulari disponible en la nostra web, sempre que estigui d'acord amb la nostra política de privacitat, que haurà d'acceptar per a deixar constància del seu consentiment exprés al tractament de les dades per a les finalitats indicades.";
$string['userprivate3'] = "En compliment del Reglament (UE) 2016/679, de 27 d'abril de 2016, relatiu a la protecció de les persones físiques pel que fa al tractament de dades personals i a la lliure circulació d'aquestes dades i de la Llei 3/2018, de 5 de desembre, de protecció de dades personals i garantia dels drets digitals, t'informem sobre el tractament de les teves dades a través d'aquesta Política de Privacitat.";
$string['information'] = 'Más información';
$string['adminprivate'] = "Encara que aquest plugin és una versió gratuïta, la nostra empresa emmagatzemarà algunes dades per al correcte funcionament i manteniment del plugin. Aquestes dades seran nom d'usuari, email i url de la plataforma on es desplegarà el plugin.
La permanència del plugin té una durada temporal, i en acceptar la configuració de privacitat estaràs donant l'oportunitat que se t'enviï informació sobre la durada del plugin, així com d'altres productes de l'empresa. En cap cas la informació serà destinada a tercers o fins que no siguin informatius sobre aquest plugin o altres plugins de l'empresa.
Si té alguna pregunta, dubte o suggeriment no dubti a posar-se en contacte amb nosaltres.";

// Premium.
$string['premium'] = '* Actualitzar a la versió Premium - Anàlisi de Sentiment';
$string['classroom_teams:viewmessages'] = 'Veure premium';
$string['getpremium'] = 'Obtenir premium';
$string['premiumpage'] = 'Eurecat Academy Lab';
$string['keepquarentine'] = '* Afegir la possibilitat de crear nous filtres personalitzats';
$string['removequarentine'] = '* Afegir la possibilitat de crear parelles incompatibles';
$string['nopubli'] = '* Sense publicitat';
$string['desblockpersonal'] = '* Desbloquejar la pestanya "Filtre personal"';
$string['desblockhistory'] = '* Desbloquejar la pestanya "Historial"';
$string['desblocktandem'] = '* Desbloqueig de la pestanya "Tàndem incompatible"';
$string['exportdata'] = '* Exportar resultats';

// No active.
$string['noactive'] = 'Gràcies per haver-nos triats i usar els nostres productes. Vostè ha superat el temps de la versió gratuïta, si desitja aconseguir el producte en la seva versió premium poseu-vos en contacte amb nosaltres.';

