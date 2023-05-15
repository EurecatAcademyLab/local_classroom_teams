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
 * Save iteams of Classroom Teams in Moodle.
 *
 * @package     local_classroom_teams
 * @author      2023 Aina Palacios, Laia Subirats, Magali Lescano, Alvaro Martin, JuanCarlo Castillo, Santi Fort
 * @copyright   2022 Eurecat.org <dev.academy@eurecat.org>
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

/**
 * Save in moodle groups.
 */
require_once(__DIR__.'/../../../../config.php');
require_once($CFG->dirroot.'/course/lib.php');
require_once($CFG->dirroot.'/lib/formslib.php');
require_login();

$idcourse = optional_param('idC', null, PARAM_INT);
$keys = optional_param('k', null, PARAM_TEXT);
$arraysplitgroups = optional_param('SplitG', null, PARAM_TEXT);

$arraysplitgroups = json_decode($arraysplitgroups);
$keys = json_decode($keys);
$count = count($arraysplitgroups);
$countk = count($keys);

global $DB;
$idkey = $DB->get_records_sql("SELECT id FROM {groups} ORDER BY id DESC LIMIT 1");
$idkey = intval(array_key_first($idkey));

$counter = 1;
for ($i = 0; $i < $count; $i++) {
    $record = new stdClass();
    $record->courseid = $idcourse;
    $record->name = $keys[$i];
    $record->timecreated = time();
    $DB->insert_record('groups', $record);

    $idkey = $idkey + $counter;
    $userid = $arraysplitgroups[$i];
    for ($j = 0; $j < count($userid); $j++) {

        $r = new stdClass();
        $r->groupid = $idkey;
        $r->userid = $userid[$j];
        $r->timeadded = time();
        $r->component = 'local_team_generator';
        $DB->insert_record('groups_members', $r);
    }
    $counter + $i;
}

\core\notification::add(get_string('successmoodle', 'local_classroom_teams'), \core\output\notification::NOTIFY_SUCCESS);

echo 'ok';

