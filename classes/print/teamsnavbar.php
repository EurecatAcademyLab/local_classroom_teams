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
 * To display the navigation inside the plugin.
 *
 * @package     local_classroom_teams
 * @author      2023 Aina Palacios, Laia Subirats, Magali Lescano, Alvaro Martin, JuanCarlo Castillo, Santi Fort
 * @copyright   2022 Eurecat.org <dev.academy@eurecat.org>
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */


defined('MOODLE_INTERNAL') || die();

require_once($CFG->dirroot.'/lib/formslib.php');
require_once("$CFG->dirroot/enrol/locallib.php");

/**
 * To display the navbar inside the plugin.
 * @return String to print.
 */
function print_navbar() {

    $output = "";

    $output .= html_writer::start_tag('div', ['id' => 'statusformteams', 'class' => 'mb-3']);
    $output .= html_writer::end_tag('div');

    $output .= html_writer::start_tag('div' , ['class' => 'nav_tabs_group ml-4 mb-4']);
    $output .= html_writer::start_tag('ul', ["class" => 'nav nav-tabs ', 'role' => "tablist"]);

        $output .= html_writer::start_tag('li', ['class' => 'nav-item waves-effect waves-light']);
            $output .= html_writer::tag('a', get_string('pluginname', 'local_classroom_teams'),
            ['class' => 'nav-link text-primary nav_group',
            'data-toggle' => "tab",
            'href' => "#classroom_teams"]);
        $output .= html_writer::end_tag('li');

        $output .= html_writer::start_tag('li', ['class' => 'nav-item waves-effect waves-light']);
            $output .= html_writer::tag('a', get_string('customisable', 'local_classroom_teams'),
            ['class' => 'nav-link text-primary nav_group',
            'data-toggle' => "tab",
            'href' => "#customisable"]);
        $output .= html_writer::end_tag('li');

        $output .= html_writer::start_tag('li', ['class' => 'nav-item waves-effect waves-light']);
            $output .= html_writer::tag('a', get_string('incompatible', 'local_classroom_teams'),
            ['class' => 'nav-link text-primary nav_group',
            'data-toggle' => "tab",
            'href' => "#incompatible"]);
        $output .= html_writer::end_tag('li');

        $output .= html_writer::start_tag('li', ['class' => 'nav-item waves-effect waves-light']);
            $output .= html_writer::tag('a', get_string('history', 'local_classroom_teams'),
            ['class' => 'nav-link text-primary nav_group',
            'data-toggle' => "tab",
            'href' => "#history",
            "id" => "to_history"]);
        $output .= html_writer::end_tag('li');

        $output .= html_writer::start_tag('li', ['class' => 'nav-item waves-effect waves-light']);
            $output .= html_writer::tag('a', get_string('about', 'local_classroom_teams'),
            ['class' => 'nav-link text-primary nav_group',
            'data-toggle' => "tab",
            'href' => "#about",
            "id" => "to_history"]);
        $output .= html_writer::end_tag('li');

    $output .= html_writer::end_tag('ul');
    $output .= html_writer::end_tag('div');
    echo $output;
}

