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
 * Connected before plugins.
 *
 * @package     local_classroom_teams
 * @author      2023 Aina Palacios, Laia Subirats, Magali Lescano, Alvaro Martin, JuanCarlo Castillo, Santi Fort
 * @copyright   2022 Eurecat.org <dev.academy@eurecat.org>
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$page = new moodle_page();
$page->requires->js('/local/classroom_teams/amd/woocomerceteams.min.js');

/**
 * This function get data from config settings and connect with js function.
 * @return Void.
 */
function call_woocomerce_teams() {

    $apikey = get_config('local_classroom_teams', 'apikey');
    $productid = get_config('local_classroom_teams', 'productid');
    $email = get_config('local_classroom_teams', 'email');

    $data = array("apikey" => $apikey, "productid" => $productid, 'email' => $email);
    global $PAGE;
    $PAGE->requires->js('/local/classroom_teams/amd/woocomerceteams.js');
    $PAGE->requires->js_init_call('woocommerce_api_active_teams', $data);
    call_woocomerce_status_teams();
    call_woocomerce_status_teams();
}

/**
 * This function get data from config settings and confirm the status.
 * @return Void.
 */
function call_woocomerce_status_teams() {

    $apikey = get_config('local_classroom_teams', 'apikey');
    $productid = get_config('local_classroom_teams', 'productid');
    $email = get_config('local_classroom_teams', 'email');

    $data = array("apikey" => $apikey, "productid" => $productid, 'email' => $email);
    global $PAGE;
    $PAGE->requires->js('/local/classroom_teams/amd/woocomerceteams.js');
    $PAGE->requires->js_init_call('woocommerce_api_status_teams', $data);
}

/**
 * This function get data the table config plugins and get some values
 * @return Array $data with most of the get config data.
 */
function get_headers_call_teams() {
    $data = [
        'apikey' => get_config('local_classroom_teams', 'apikey'),
        'productid' => get_config('local_classroom_teams', 'productid'),
        'email' => get_config('local_classroom_teams', 'email'),
        'name' => get_config('local_classroom_teams', 'name'),
        'url' => get_config('local_classroom_teams', 'url'),
        'instancia' => get_config('local_classroom_teams', 'instancia'),
    ];
    return $data;
}

