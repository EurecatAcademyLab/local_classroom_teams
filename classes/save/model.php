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
 * Call the API to generate teams.
 *
 * @package     local_classroom_teams
 * @author      2023 Aina Palacios, Laia Subirats, Magali Lescano, Alvaro Martin, JuanCarlo Castillo, Santi Fort
 * @copyright   2022 Eurecat.org <dev.academy@eurecat.org>
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

require_once(__DIR__.'/../../../../config.php');
require_once($CFG->dirroot.'/course/lib.php');
require_once($CFG->dirroot.'/lib/formslib.php');
require_login();

$idarrayusers = optional_param('idarray', null, PARAM_TEXT);
$forgroups = optional_param('forgroups', null, PARAM_INT);
$togglevalue = optional_param('togglevalue', null, PARAM_INT);

$history = optional_param('historySt', null, PARAM_TEXT);
$features = optional_param('features', null, PARAM_TEXT);
$incompatible = optional_param('tandemvalue', null, PARAM_TEXT);
$homogeny = optional_param('homogenic', null, PARAM_INT);


$input["group"] = array_map('intval', $idarrayusers);
$input["forGroups"] = $forgroups ? false : true;
$input['number'] = $togglevalue;

if (count ($history) != 0) {
    $input["history"] = $history;
}
if (count ($incompatible) != 0) {
    $input["incompatible"] = $incompatible;
}
if (count ($features) != 0) {
    $input['features'] = $features;
    $input["homogeny"] = $homogeny;
}

$makecall = callapi('POST', 'https://d75rw7c769oxjm63lab.online/group', json_encode($input, true));
echo htmlspecialchars($makecall, ENT_QUOTES, 'UTF-8');

/**
 * Call the API to generate teams.
 * @param String $method post.
 * @param String $url with the url server.
 * @param Mixed $data Object with the information from the form and a Bolean.
 * @return Object with the information back from server.
 */
function callapi($method, $url, $data) {
      $curl = curl_init();
    switch ($method){
        case "POST":
            curl_setopt($curl, CURLOPT_POST, 1);
            if ($data) {
                curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
                curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type: multipart/form-data'));
            }
         break;
        case "PUT":
            curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "PUT");
            if ($data) {
                curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
                curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type: multipart/form-data'));
            }
         break;
        default:
            if ($data) {
                $url = sprintf("%s?%s", $url, http_build_query($data));
            }
    }

      // OPTIONS.
      curl_setopt($curl, CURLOPT_URL, $url);
      curl_setopt($curl, CURLOPT_HTTPHEADER, array(
        'APIKEY: '.get_config('local_classroom_teams', 'apikey'),
        'Productid:' . get_config('local_classroom_teams', 'productid'),
        'instancia:' . get_config('local_classroom_teams', 'instancia'),
        'email:' . get_config('local_classroom_teams', 'email'),
        'name:' . get_config('local_classroom_teams', 'name'),
        'Content-Type: application/json',
      ));
      curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
      // EXECUTE.
      $result = curl_exec($curl);
    if (!$result) {
        die("Connection Failure");
    }
      curl_close($curl);
      return $result;
}


