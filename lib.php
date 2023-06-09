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
 * Lib form.
 *
 * @package     local_classroom_teams
 * @author      2023 Aina Palacios, Laia Subirats, Magali Lescano, Alvaro Martin, JuanCarlo Castillo, Santi Fort
 * @copyright   2022 Eurecat.org <dev.academy@eurecat.org>
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */


/**
 * Insert a link to index.php on the site front page navigation menu.
 *
 * @param navigation_node $frontpage Node representing the front page in the navigation tree.
 */
function local_classroom_teams_extend_navigation_frontpage(navigation_node $frontpage) {
    if (is_siteadmin()) {
        if (isloggedin() && !isguestuser()) {
            $frontpage->add(
                get_string('pluginname', 'local_classroom_teams'),
                new moodle_url('/local/classroom_teams/index.php'),
            );
        }
    }
}

/**
 * Add link to index.php into navigation drawer.
 *
 * @param global_navigation $root Node representing the global navigation tree.
 */
function local_classroom_teams_extend_navigation(global_navigation $root) {
    if (is_siteadmin()) {
        if (isloggedin() && !isguestuser()) {
            $node = navigation_node::create(
                get_string('pluginname', 'local_classroom_teams'),
                new moodle_url('/local/classroom_teams/index.php'),
            );

            $node->showinflatnavigation = true;

            $root->add_node($node);
        }
    }
}

/**
 * Get an Object with id, name from user table.
 * @return Object key value users.
 */
function getusers() {
    global $DB;
    $userdata = [];
    $users = $DB->get_records_sql("SELECT u.id , concat(u.firstname,' ',u.lastname) AS officialname FROM {user} u");

    foreach ($users as $u) {
        $userdata[$u->id] = $u->officialname;
    }

    return $userdata;
}

/**
 * To add html_writer option in a input radio.
 * @return Array with html tag.
 */
function homogenic() {
    return array(
        html_writer::tag('label',  get_string('heterogenic', 'local_classroom_teams')),
        html_writer::tag('label',  get_string('homogenic', 'local_classroom_teams'))
    );
}
/**
 * To update rateit users table. Unused.
 * @return Void.
 */
function updatedb() {
    global $DB;
    $DB->execute_sql("UPDATE {local_classroom_teams}");
}

/**
 * Update Records. Unused.
 * @return Void.
 */
function updatetandemrecords() {
    global $DB;
    $table = "local_cg_tandem";
    $DB->update_record($table);

}

/**
 * Send notification message. Unused.
 * @return Void.
 */
function notificationmessage() {
    \core\notification::add(get_string('success', 'local_classroom_teams'), \core\output\notification::NOTIFY_WARNING);
}

