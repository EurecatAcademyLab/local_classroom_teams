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
 * Privacy provider.
 *
 * @package     local_classroom_teams
 * @author      2023 Aina Palacios, Laia Subirats, Magali Lescano, Alvaro Martin, JuanCarlo Castillo, Santi Fort
 * @copyright   2022 Eurecat.org <dev.academy@eurecat.org>
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

namespace core_completion\privacy;

defined('MOODLE_INTERNAL') || die();

use core_privacy\local\metadata\collection;
use core_privacy\local\request\approved_userlist;
use core_privacy\local\request\contextlist;
use core_privacy\local\request\transform;
use core_privacy\local\request\userlist;
use context;
use context_module;
use core_privacy\local\request\approved_contextlist;
use core_privacy\local\request\writer;

require_once($CFG->dirroot . '/comment/lib.php');

/**
 * Privacy class for requesting user data.
 *
 */
class provider implements
        \core_privacy\local\metadata\provider,
        \core_privacy\local\request\subsystem\plugin_provider,
        \core_privacy\local\request\shared_userlist_provider {

    /**
     * Returns meta data about this system.
     *
     * @param   collection $collection The initialised collection to add items to.
     * @return  collection A listing of user data stored through this system.
     */
    public static function get_metadata(collection $collection) : collection {
        $collection->add_database_table('local_classroom_teams', [
                'id_user' => 'privacy:metadata:iduser',
                'id_course' => 'privacy:metadata:idcourse',
                'id_group' => 'privacy:metadata:idgroup',
                'titleteam' => 'privacy:metadata:titleteam',
                'splitgroup' => 'privacy:metadata:splitgroup',
                'history' => 'privacy:metadata:history',
                'tandem' => 'privacy:metadata:tandem',
                'timecreated' => 'privacy:metadata:timecreated'
            ], 'privacy:metadata:localclassroomteams');
        $collection->add_database_table('local_cg_filter_name', [
                'userid' => 'privacy:metadata:student_on_filter',
                'course' => 'privacy:metadata:idcourse',
                'filter_name' => 'privacy:metadata:filtername',
                'filter_value' => 'privacy:metadata:filtervalue',
                'timecreated' => 'privacy:metadata:timecreated'
            ], 'privacy:metadata:localcgfiltername');
        $collection->add_database_table('local_cg_tandem', [
                'userid' => 'privacy:metadata:student_tandem',
                'course' => 'privacy:metadata:idcourse',
                'timecreated' => 'privacy:metadata:timecreated'
            ], 'privacy:metadata:localcgtandem');
        return $collection;
    }


    /**
     * Get the list of contexts that contain user information for the specified user.
     *
     * @param   int $userid   The user to search.
     * @return  contextlist   $contextlist  The contextlist containing the list of contexts used in this plugin.
     */
    public static function get_contexts_for_userid(int $userid) : \core_privacy\local\request\contextlist {
        $contextlist = new \core_privacy\local\request\contextlist();

        $contextlist = new contextlist();

        // Course completed.
        $sql = "SELECT ctx.id
        FROM  {context} ctx
        JOIN {course} c ON c.id = ctx.instanceid AND ctx.contextlevel = :contextlevel
        JOIN {role_assignments} ra ON ctx.id = ra.contextid
        JOIN {user} u ON u.id = ra.userid
        WHERE c.id  = :idcourse AND u.id = :iduser";
        $params = [
            'contextlevel' => CONTEXT_COURSE,
            'idcourse' => $idcourse,
            'iduser' => $iduser,
        ];

        $contextlist->add_from_sql($sql, $params);
        return $contextlist;
    }

    /**
     * Returns activity completion information about a user.
     *
     * @param  \stdClass $user The user to return information about.
     * @param  \stdClass $course The course the user is in.
     * @param  \stdClass $cm Course module information.
     * @return \stdClass Activity completion information.
     */
    public static function get_activity_completion_info(\stdClass $user, \stdClass $course, $cm) : \stdClass {
        $completioninfo = new \completion_info($course);
        $completion = $completioninfo->is_enabled($cm);
        return ($completion != COMPLETION_TRACKING_NONE) ? $completioninfo->get_data($cm, true, $user->id) : new \stdClass();
    }

    /**
     * Get the list of users who have data within a context.
     *
     * @param   userlist  $userlist The userlist containing the list of users who have data in this context/plugin combination.
     */
    public static function get_users_in_context(userlist $userlist) {
        $context = $userlist->get_context();

        if ($context->contextlevel != CONTEXT_SYSTEM) {
            return;
        }

        $params = [
            'instanceid' => $context->instanceid,
        ];

        $sql = "SELECT gg.id_user
            FROM local_classroom_teams gg
            JOIN {context} c
            WHERE c.id = :instanceid";

        $userlist->add_from_sql('userid', $sql, $params);

    }

    /**
     * Delete completion information for users.
     *
     * @param \stdClass $iduser The user. If provided will delete completion information for just this user. Else all users.
     */
    public static function delete_completion_classroom_teams(\stdClass $iduser = null) {
        global $DB;

            $params = ['userid' => $iduser];
            $DB->delete_records('local_classroom_teams', $params);
            return;
    }

    /**
     * Delete completion information for users.
     *
     * @param \stdClass $iduser The user. If provided will delete completion information for just this user. Else all users.
     */
    public static function delete_completion_filter(\stdClass $iduser = null) {
        global $DB;

            $params = ['userid' => $iduser];
            $DB->delete_records('local_cg_filter_name', $params);
            return;
    }

    /**
     * Delete completion information for users.
     *
     * @param \stdClass $iduser The user. If provided will delete completion information for just this user. Else all users.
     */
    public static function delete_completion_tandem(\stdClass $iduser = null) {
        global $DB;

            $params = ['userid' => $iduser];
            $DB->delete_records('local_cg_tandem', $params);
            return;
    }
}

