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
 * If the course has groups, get the users. To connect via ajax.
 *
 * @package     local_classroom_teams
 * @author      2023 Aina Palacios, Laia Subirats, Magali Lescano, Alvaro Martin, JuanCarlo Castillo, Santi Fort
 * @copyright   2022 Eurecat.org <dev.academy@eurecat.org>
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */


/**
 * Show students with group.
 */
require_once(__DIR__.'/../../../../config.php');
require_once($CFG->dirroot.'/course/lib.php');
require_once($CFG->dirroot.'/lib/formslib.php');
require_login();

$idgroup = optional_param('value', null, PARAM_TEXT);
$course = optional_param('course', null, PARAM_TEXT);

if ($idgroup == 0) {
    $sql = "SELECT u.id, concat(u.firstname, ' ', u.lastname) as name, c.fullname, c.id as curso FROM {role_assignments} ra
            JOIN {user} u ON u.id = ra.userid
            JOIN {role} r ON r.id = ra.roleid
            JOIN {context} cxt ON cxt.id = ra.contextid
            JOIN {course} c ON c.id = cxt.instanceid
            WHERE ra.userid = u.id
                AND ra.contextid = cxt.id
                AND cxt.contextlevel = 50
                AND cxt.instanceid = c.id
                AND r.id = 5
                AND c.id = :course";
} else {
    $sql = "SELECT u.id, concat(u.firstname,' ',u.lastname) as name
            FROM {course} c
            JOIN {enrol} e ON e.courseid = c.id
            JOIN {user_enrolments} ue ON ue.enrolid = e.id
            JOIN {user} u ON u.id = ue.userid
            LEFT JOIN {groups_members} gm ON gm.userid = u.id
            LEFT JOIN {groups} g ON g.id = gm.groupid AND g.courseid = c.id
            WHERE g.id = :idgroup
            ORDER BY u.firstname";
}

$result = $DB->get_records_sql($sql, ['course' => $course, 'idgroup' => $idgroup]);


if ($result) {
    echo json_encode($result);
}
