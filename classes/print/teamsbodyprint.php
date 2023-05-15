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
 * To display the Body - main.
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
 * To display the html tag body, with form and table instances.
 * @return String to print.
 */
function print_body() {
    global $CFG;

    $context = context_system::instance();
    $canmanage = require_capability('local/classroom_teams:viewmessages', $context);

    $selectform = new group_form();
    $premium = new premium_form();
    $about = new about_form();

    $output = "";
        $output .= html_writer::start_tag('div', ['class' => 'tab-content']);
            $output .= html_writer::start_tag('div', ['class' => 'tab-pane fade show active', 'id' => 'classroom_teams']);
                $output .= html_writer::start_tag('div', ['class' => 'p-1']);
                $output .= $selectform->definition();
                $output .= html_writer::end_tag('div');
                $output .= html_writer::end_tag('div');

                $output .= html_writer::start_tag('div', ['class' => 'tab-pane fade', 'id' => 'customisable']);
        $output .= $premium->definition();
        $output .= html_writer::start_tag('div', ['class' => 'd-flex justify-content-center flex-column mt-4 mx-5']);
        $output .= html_writer::tag('img', '', array(
            'alt' => get_string('pixtgcustom', 'local_classroom_teams'), 'src' => "pix/tgcustomfilter.png"));
        $output .= html_writer::tag('img', '', array(
            'alt' => get_string('pixtgcustomtable', 'local_classroom_teams'), 'src' => "pix/tgcustomtable.png"));
        $output .= html_writer::end_tag('div');
                $output .= html_writer::end_tag('div');

                $output .= html_writer::start_tag('div', ['class' => 'tab-pane fade', 'id' => 'incompatible']);
        $output .= $premium->definition();
        $output .= html_writer::start_tag('div', ['class' => 'd-flex justify-content-center flex-column mt-4 mx-5']);
        $output .= html_writer::tag('img', '', array(
            'alt' => get_string('pixtgcustom', 'local_classroom_teams'), 'src' => "pix/tgtandem.png"));
        $output .= html_writer::tag('img', '', array(
            'alt' => get_string('pixtgcustomtable', 'local_classroom_teams'), 'src' => "pix/tgtandemtable.png"));
        $output .= html_writer::end_tag('div');
                $output .= html_writer::end_tag('div');

                $output .= html_writer::start_tag('div', ['class' => 'tab-pane fade', 'id' => 'history']);
        $output .= $premium->definition();
            $output .= html_writer::end_tag('div');

        $output .= html_writer::start_tag('div', ['class' => 'tab-pane fade', 'id' => 'about']);
            $output .= $about->definition();
        $output .= html_writer::end_tag('div');

        $output .= html_writer::end_tag('div');
    echo $output;
}

