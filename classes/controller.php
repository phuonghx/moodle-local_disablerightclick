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
 * Controller class.
 *
 * @package     local_disablerightclick
 * @copyright   2020 Yogesh Shirsath <yogshirsath@hotmail.com>
 * @license     http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 * @author      Yogesh Shirsath
 */

namespace local_disablerightclick;

use context;
use context_course;

/**
 * Controller class defines main function to control plugin working
 *
 * @copyright   2020 Yogesh Shirsath <yogshirsath@hotmail.com>
 * @license     http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class controller {

    /**
     * Check if current user is admin or manager of site.
     *
     * @param integer $contextid Context id of course
     *
     * @return boolean True if user is site admin/manager
     */
    public function is_allowed(int $contextid = 0): bool {
        global $USER, $DB, $COURSE;

        if ($contextid === 0 || !$DB->record_exists('context', ['id' => $contextid])) {

            $context = context_course::instance($COURSE->id);
        } else {
            $context = context::instance_by_id($contextid);
        }
        // Check switched role.
        if (!empty($USER->access['rsw'])) {
            $context = context_course::instance(SITEID);
            if (has_capability_in_accessdata('local/disablerightclick:allow', $context, $USER->access)) {
                return true;
            }

            return false;
        }
        if (has_capability('local/disablerightclick:allow', $context)) {
            return true;
        }

        return false;
    }

}
