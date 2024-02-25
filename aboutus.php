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
 * Form for editing about us  instances.
 *
 * @package     local_aboutus
 * @author      paktaleem
 * @copyright   2024  {@link http://paktaleem.com}
 * @license     http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

// FILE ADDED.
require_once(__DIR__ . '/../../config.php');

// PAGE.
$PAGE->set_url(new moodle_url('/local/aboutus/aboutus.php'));
$PAGE->set_context(context_system::instance());
$PAGE->set_pagelayout('standard');
$PAGE->requires->js(new moodle_url('js/main.js'));

echo $OUTPUT->header();

// For display html page from templates.
echo $OUTPUT->render_from_template('local_aboutus/aboutus', []);

echo $OUTPUT->footer();              //show the moodle footer.
