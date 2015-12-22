<?php
/**
 * Noticeboard course format.  Topic based course format with the latest
 * post in the news forum displayed at the top.
 *
 * @package    course/format
 * @subpackage noticebd
 * @version    See the value of '$plugin->version' in version.php.
 * @copyright  &copy; 2014-onwards G J Barnard in respect to modifications of standard topics format.
 * @author     G J Barnard - gjbarnard at gmail dot com, {@link http://about.me/gjbarnard} and
 *                           {@link http://moodle.org/user/profile.php?id=442195}
 * @license    http://www.gnu.org/copyleft/gpl.html GNU Public License
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.

 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.

 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

function xmldb_format_noticebd_upgrade($oldversion = 0) {

    // Automatic 'Purge all caches'....
    if ($oldversion < 2114052000) {
        purge_all_caches();
    }

    return true;
}