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
 * Settings.
 *
 * @package     local_classroom_teams
 * @author      2023 Aina Palacios, Laia Subirats, Magali Lescano, Alvaro Martin, JuanCarlo Castillo, Santi Fort
 * @copyright   2022 Eurecat.org <dev.academy@eurecat.org>
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();
require_once($CFG->dirroot. '/local/classroom_teams/classes/connected/query.php');
require_login();

$hassiteconfig = true;

if (isset($hassiteconfig) && $hassiteconfig) {
    $ADMIN->add(
        'localplugins',
        new admin_category(
            'local_classroom_teams_settings',
            new lang_string('pluginname', 'local_classroom_teams')
        )
    );
    $settingspage = new admin_settingpage(
        'managelocalclassroomteams',
        new lang_string('manage', 'local_classroom_teams')
    );

    if ($ADMIN->fulltree) {

        // Show in navigation.
        $settingspage->add(new admin_setting_configcheckbox(
            'local_classroom_teams/showinnavigation',
            new lang_string('showinnavigation', 'local_classroom_teams'),
            new lang_string('showinnavigation_desc', 'local_classroom_teams'),
            1
        ));

        // User name.
        $namesettingteams = new admin_setting_configtext(
            'local_classroom_teams/name',
            new lang_string('name', 'local_classroom_teams'),
            new lang_string('name_des', 'local_classroom_teams'),
            null,
            PARAM_TEXT,
            null,
            [
                'pattern' => '/^\w([\w\.%+-]*@[\w.-]+\.[a-zA-Z]{2,}$)/',
                'required' => true
            ]
        );

        if (!$namesettingteams->get_setting()) {
            // Show error on settings page.
            $PAGE->navbar->add(get_string('manage', 'local_classroom_teams'));
        }
        $settingspage->add($namesettingteams);


        // Email.
        $emailsettingsteams = new admin_setting_configtext(
            'local_classroom_teams/email',
            new lang_string('email', 'local_classroom_teams'),
            new lang_string('email_des', 'local_classroom_teams'),
            null,
            PARAM_EMAIL,
            null,
            [
                'pattern' => '/^\w([\w\.%+-]*@[\w.-]+\.[a-zA-Z]{2,}$)/',
                'required' => true
            ],
            new lang_string('placeholder_text', 'local_classroom_teams')
        );
        $settingspage->add($emailsettingsteams);

        // Apikey Teams.
        $apikeysettingteams = new admin_setting_configtext(
            'local_classroom_teams/apikey',
            new lang_string('apikey', 'local_classroom_teams'),
            new lang_string('apikey_des', 'local_classroom_teams'),
            'd564dde308ff319571349c617a9185dec25893d1',
            PARAM_TEXT,
            50,
            'maxlength="50"readonly'
        );

        $apikeysettingteams->set_updatedcallback(call_woocomerce_teams());
        $settingspage->add($apikeysettingteams);

        // Product id.
        $productidsettingteams = new admin_setting_configtext(
            'local_classroom_teams/productid',
            new lang_string('productid', 'local_classroom_teams'),
            new lang_string('productid_des', 'local_classroom_teams'),
            39,
            PARAM_INT);

        $settingspage->add($productidsettingteams);

        $privacyurl = new moodle_url('https://lab.eurecatacademy.org/sample-page');
        $privacylink = \html_writer::link($privacyurl, get_string('privacy_policy', 'local_classroom_teams'));

        $privacycheckbox = new admin_setting_configcheckbox(
            'local_classroom_teams/privacy',
            new lang_string('privacy', 'local_classroom_teams'),
            new lang_string('privacy_des', 'local_classroom_teams') . ' ' . $privacylink,
            1
        );

        if (!$privacycheckbox->get_setting()) {
            // Show error on settings page.
            $PAGE->navbar->add(get_string('manage', 'local_classroom_teams'));
        }
        $settingspage->add($privacycheckbox);

    }

    $ADMIN->add('localplugins', $settingspage);
}

