Introduction
------------
Topic based course format with the latest post in the news forum displayed at the top.

Installation Requirements
-------------------------
This version works with Moodle 2.3.2+ version 2012062502.06 (Build: 20121014) and above until the next release.

Please ensure that your hardware and software complies with 'Requirements' in 'Installing Moodle' on
'docs.moodle.org/23/en/Installing_Moodle'.

Installation
------------
1. Ensure you have the version of Moodle as stated above in 'Installation Requirements'.  This is essential as the
   format relies on underlying core code.
2. If upgrading from a previous version of the format for Moodle 1.9 or 2.0 you should remove the old 'nb' folder
   in '/course/format' and continue.
3. Put Moodle in 'Maintenance Mode' on 'docs.moodle.org/en/admin/setting/maintenancemode' so that there are no 
   users using it bar you as the administrator - if you have not already done so.
4. Copy 'noticebd' to '/course/format/'.
5. If using a Unix based system, chmod 755 on config.php - I have not tested this but have been told that it
   needs to be done.
6. Login as an administrator and follow standard the 'plugin' update notification.  If needed, go to
   'Site administration' -> 'Notifications' if this does not happen.
7. Put Moodle out of Maintenance Mode.

Uninstallation
--------------
1. Put Moodle in 'Maintenance Mode' so that there are no users using it bar you as the administrator.
2. It is recommended but not essential to change all of the courses that use the format to another.  If this is
   not done Moodle will pick the last format in your list of formats but display in 'Edit settings' of the
   course the first format in the list.  You can then set the desired format.
3. In '/course/format/' remove the folder 'noticebd'.
4. Put Moodle out of Maintenance Mode.

Usage
-----
1. When creating a new course, select the course format as 'Noticeboard format' from the list of available options.
2. To change an existing course, edit the course settings (http://docs.moodle.org/23/en/course/edit) and select the
   'Noticeboard format' from the list of available options.

Notes
-----
1. Only adiministrators can add, edit and remove activites and resources (whilst in the format) from the general
   section (section 0), as to prevent accidental deletion of the 'news' forum upon which the format relies.  If it is
   deleted, then a page refresh will recreate the forum but all previous posts will be lost.
2. Any title and summary that has been previously set for the general section will not be shown.

Version Information
-------------------

25th October 2012 - Version 2.3.0.1 - BETA
1. First rewrite version for Moodle 2.3.2 at 'Beta' for user acceptance testing.

1st November 2012 - Version 2.3.0.2 - BETA
1. Added styles in 'styles.css' to tidy up layout in different standard themes and IE8.

4th November 2012 - Version 2.3.1 - STABLE
1. Updated 'version.php' to indicate that the format is stable after testing.

License
-------
This file is part of Moodle - http://moodle.org/

Moodle is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

Moodle is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

Credits
-------
Credit goes to the original creator of the format 'Marty Jacobs' (moodle.org/user/view.php?id=95155) who originally
published the format on 'moodle.org/mod/data/view.php?d=13&rid=1717'.  I have rewritten and redistributed the format
under the terms of the GNU General Public License version 3 (www.gnu.org/licenses/) which applies to all code written
for Moodle.

Rewrite funding gratefully received from 'Schools of Isolated and Distance Education' (www.side.wa.edu.au).


G J Barnard MSc. BSc(Hons)(Sndw). MBCS. CEng. CITP. PGCE. - 4th November 2012.
Moodle profile: moodle.org/user/profile.php?id=442195.
Web profile   : about.me/gjbarnard
