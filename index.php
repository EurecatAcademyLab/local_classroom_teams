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
 * Index.
 *
 * @package     local_classroom_teams
 * @author      2023 Aina Palacios, Laia Subirats, Magali Lescano, Alvaro Martin, JuanCarlo Castillo, Santi Fort
 * @copyright   2022 Eurecat.org <dev.academy@eurecat.org>
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

require_once('../../config.php');
require_once($CFG->dirroot. '/local/classroom_teams/form/localteamform.php');
require_once($CFG->dirroot. '/local/classroom_teams/classes/form/aboutteams.php');
require_once($CFG->dirroot. '/local/classroom_teams/classes/form/noactiveteams.php');
require_once($CFG->dirroot. '/local/classroom_teams/classes/connected/query.php');
require_once($CFG->dirroot. '/local/classroom_teams/classes/form/teamspremiumform.php');
require_once($CFG->dirroot. '/local/classroom_teams/classes/print/teamsnavbar.php');
require_once($CFG->dirroot. '/local/classroom_teams/classes/print/teamsbodyprint.php');

$context = context_system::instance();

$PAGE->set_context($context);
$PAGE->set_url(new moodle_url('/local/classroom_teams/index.php'));
$PAGE->set_pagelayout('admin');
$PAGE->set_title($SITE->fullname);
$title = get_string('pluginname', 'local_classroom_teams'). " " .get_string('pluginnameextra', 'local_classroom_teams');
$PAGE->set_heading($title);

$PAGE->requires->js('/local/classroom_teams/amd/creategroup.min.js');
$PAGE->requires->js('/local/classroom_teams/amd/helpButton.js');
$PAGE->requires->jquery();

$PAGE->requires->css( new moodle_url($CFG->wwwroot . '/local/classroom_teams/css/stylegroup.css') );

require_login();

if (isguestuser()) {
    throw new moodle_exception('noguest');
}


$privacyteams = $DB->get_record('config_plugins', array('plugin' => 'local_classroom_teams', 'name' => 'privacy'));
$apikeycheckteams = $DB->get_record('config_plugins', array('plugin' => 'local_classroom_teams', 'name' => 'apikey'));
$emailteams = $DB->get_record('config_plugins', array('plugin' => 'local_classroom_teams', 'name' => 'email'));
$productteams = $DB->get_record('config_plugins', array('plugin' => 'local_classroom_teams', 'name' => 'productid'));

call_woocomerce_status_teams();
$statusteams = get_config('local_classroom_teams', 'status');
$noactiveteams = new  noactiveteams_form();

if (empty($emailteams) || strlen($emailteams->value) == 0 ||
$emailteams->value == '' || $emailteams->value == null || !$emailteams) {
    redirect (new moodle_url('/admin/settings.php?section=localclassroomteams'));
}
if (!$productteams || $productteams->value != 138 ) {
    redirect (new moodle_url('/admin/settings.php?section=localclassroomteams'));
}
if (!$privacyteams || $privacyteams->value == false) {
    redirect (new moodle_url('/admin/settings.php?section=localclassroomteams'));
}
if ( !$apikeycheckteams || $apikeycheckteams->value != '8ea2cb17c35eab88a955443fa2e4f33c384725da') {
    redirect (new moodle_url('/admin/settings.php?section=localclassroomteams'));
}

echo $OUTPUT->header();

if (!$statusteams || $statusteams == 1 ) {
    print_navbar();
    print_body();
} else {
    $output .= html_writer::start_tag('div');
    $output .= $noactiveteams->definition();
    $output .= html_writer::end_tag('div');
    echo $output;
}

echo $OUTPUT->footer();

