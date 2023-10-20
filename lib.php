<?php
// This file is part of Moodle - http://moodle.org/
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
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Lib functions
 *
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 *
 * @package   moodle-local_disablerightclick
 * @copyright 13/09/2023 LdesignMedia.nl - Luuk Verhoeven
 * @author    Vincent Cornelis
 **/

/**
 * Execute before http headers
 *
 * @return void
 */
function local_disablerightclick_before_http_headers(): void {
    global $PAGE;

    $PAGE->requires->js_call_amd('local_disablerightclick/initializer');
}
