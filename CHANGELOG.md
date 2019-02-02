commit 708f9e4fe27447e9f6bdf70bf8c0ee3d4b5c65d2  
Author: Eric Satterlee - KG6WXC <kg6wxc@gmail.com>  
Date:   Thu Sep 27 16:28:21 2018 -0700  

    bugfix: removed output from script when run in "silent" mode, fix sql
    statement typo

commit 8affc06764ea8b0fe2f5f12bd6f40baa9f74ae59  
Author: Eric Satterlee - KG6WXC <kg6wxc@gmail.com>  
Date:   Thu Sep 27 16:03:56 2018 -0700  

    update: changed current_stable_firmware_version to 3.18.9.0 in the
    default .ini file

commit 26f01b3c627b3ccd8cd4d67f01a3819e7c65bc48  
Author: Eric Satterlee - KG6WXC <kg6wxc@gmail.com>  
Date:   Sun Sep 23 12:21:53 2018 -0700  

    enhancement: cleanup some of the output in "test-mode"

commit 229a3e6bce82190a3eae4b73d2df0527235390ee  
Author: Eric Satterlee - KG6WXC <kg6wxc@gmail.com>  
Date:   Sun Sep 23 10:31:45 2018 -0700  

    bugfix: typo and missing single quotes in wxc_functions.
    
    wxc_checkOldNodes() function.

commit cf42ebdb5be53e7463b58b6172a12b71def10da1  
Author: Eric Satterlee - KG6WXC <kg6wxc@gmail.com>  
Date:   Wed Sep 19 19:13:32 2018 -0700  

    updated scripts for newer sysinfo.json file.
    
    coded checks for different versions fo the json file.
    also included new Mikrotik hap Lite devices.

commit fa265acdc668f02c27eade1c1894be61b1998acd  
Author: Eric Satterlee - KG6WXC <kg6wxc@gmail.com>  
Date:   Tue Jul 24 01:49:34 2018 -0700  

    Enhancement map_display.php
    
    Autorefresh is back!
    There is a new button at upper left on the map.
    (this button can be disabled if needed)
    Now you can toggle the autorefresh on and off now.
    It is set to refresh after 10 minutes.

commit bd572f6ce1fc68963bb697d01187ae04ed28ecb5  
Author: Eric Satterlee - KG6WXC <kg6wxc@gmail.com>  
Date:   Mon Jul 23 01:06:50 2018 -0700  

    Bugfixes/Changes
    
    Removed an errant "echo" that would cause output in "silent" mode.
    
    When the polling script parsed through the interfaces looking for the
    wlan MAC address and ip (and the LAN ip) it always had issues with the
    different versions of the json file on different firmwares.
    I think this has finally been solved.
    The polling script should pull the proper info from even a 3.15.1.0 node
    now and if those nodes have location info they should now appear on the
    map too.
    The admins of those devices should be strongly reminded to update!!
    
    I mistakenly removed the red and green dot from the status area of the
    admin page. They are restored now.
    
    Parallel node polling will work now, but it is not recommended on large
    networks, as there is still no control over how many scripts are
    spawned. Small networks of should be just fine.
    (this has been tested many times on a network of 20-30 (sometimes 100's)
    with no issues)
    Use at your own risk though.
    
    New warnings in "Test Mode" to alert when a nodes location has been
    "fixed" or not. It's very noticable now.
    
    Some general clean up/typo fixing and removal of things that were long
    due for removal.
    
    fixed some file attributes.
    
    Added some things to be used in the near future but are not done yet.
    
    73

commit 4bbb002408b02ebaad841453e587062d3bb61667  
Author: Eric Satterlee - KG6WXC <kg6wxc@gmail.com>  
Date:   Fri Jul 20 19:08:53 2018 -0700  

    BugFix: map_functions.php
    
    Ability to Hide Admin Button

commit 41275f121cce789347611c46f8f276a5df2c5e04  
Author: Eric Satterlee - KG6WXC <kg6wxc@gmail.com>  
Date:   Fri Jul 20 18:23:56 2018 -0700  

    Quick addition to the README file

commit 6e0fb623432da0e4c91391fa5346593c2a06e7b5  
Author: Eric Satterlee - KG6WXC <kg6wxc@gmail.com>  
Date:   Fri Jul 20 17:44:16 2018 -0700  

    BugFixs/Enhancements/Additions
    
    Can change the non mesh markers info without having to recreate now.
    
    The polling script can now find the info for some nodes that it could
    not before, such as firmware 3.15.1.0b4, this was a pleasant side effect
    of trying to remove some of the bunk entries i nthe database.
    
    The polling script will now also try to check and "fix" the database,
    this is due to changes in the newer AREDN firmwares (anything beyond
    3.17RC1)
    Some of those changes were made by me, just for the map. :)
    These DB "fixes" also include removing some columns that were no longer
    and were making the DB much larger than it needs to be, this will also
    help cut down on the memory footprint when loading the webpage.
    
    The numbers at the bottom of the map reflecting nodes and link, should
    be more accurate now (I hope).
    
    The Map legend has been change to use pure HTML5/CSS, the only images
    are the small circle icons, this may cause issues with very old
    browsers...
    
    Removed some files that were no longer needed or forgetten about.

commit 7723b47427a9703d7cf8eb4e187c0fd3c96c7059  
Author: Eric Satterlee - KG6WXC <kg6wxc@gmail.com>  
Date:   Wed Jun 20 17:49:25 2018 -0700  

    Bugfix: removed margin when map is embedded in iFrame.
    
    Whoops! Much better now.
    Also, changed the bottom attribution layer to better fit on small
    screens.

commit 2e3a499c238e614e442eba5fc6a0db987253881d  
Author: Eric Satterlee - KG6WXC <kg6wxc@gmail.com>  
Date:   Wed Jun 20 17:38:43 2018 -0700  

    Enhancement: Allow map to be embedded in iFrames
    
    This will be refined over time and available to all user if enabled,
    but for now a quick addition to allow the map to be shown on sbarc.org
    again.

commit e8947ee94fa707a97b22fb5f691dedb643fd8d0d  
Author: Eric Satterlee - KG6WXC <kg6wxc@gmail.com>  
Date:   Sat Jun 16 21:35:56 2018 -0700  

    BugFix get-map-info wxc_functions
    
    Fixed the "ignored nodes" check. Nodes and devices that get ignored due
    to 404/no route to host/connection refused errors, will now be properly,
    and temporarily skipped over by the polling script.

commit a7d10534a18cd0575cafa1edb7b82c746649c6c0  
Author: Eric Satterlee - KG6WXC <kg6wxc@gmail.com>  
Date:   Sun Jun 10 13:04:25 2018 -0700  

    BugFix: Mouse clicks no longer propagate through the layer control box
    
    Discovered how to remove an annoying behaviour of the "Grouped Layers"
    control.
    Also fixed a couple other small things so the HTML was proper.

commit a3dd4c4a102aa64479e32142fb3464cd1eb1a469  
Author: Eric Satterlee - KG6WXC <kg6wxc@gmail.com>  
Date:   Sun Jun 10 11:17:07 2018 -0700  

    BugFix: More 5GHz channels, 900MHz nodes now found by 'board_id'
    
    Added 'non-US' 5GHz channel numbers.
    
    Device band was determined by channel, 900MHz and 2.4GHz have some of
    the same channel number and the script had a hard time telling which was
    which.
    This has (hopefully) been fixed now. Since there are only 3 AREDN
    compatible 900MHz devices, it was easier to just find those certain
    board_id's. This also allowed channel #4 to be added back into the list
    for 2.4GHz. (yes it was a hack but mostly worked :) )
    
    Additionally, I've been trying to optimize the map_function.inc file.
    A couple of the functions in that file consume 90%+ of the time it takes
    to render the webpage. (load_LinkedTO() is a beast!)
    On the cloud server this can sometimes completely stall the script(s)
    and fail to load the page at all.

commit 51154ec3a5e7e215a6b85a396ccd0f71ea0f587e  
Author: Eric Satterlee - KG6WXC <kg6wxc@gmail.com>  
Date:   Fri Jun 8 21:30:54 2018 -0700  

    BugFix: wxc_functions.inc
    
    Added *all* the 5GHz channels.

commit 929e0f94c3076b31f74b85f5adbfce27f8877893  
Author: Eric Satterlee - KG6WXC <kg6wxc@gmail.com>  
Date:   Thu Jun 7 22:49:49 2018 -0700  

    BugFix: Added missing 173 channel to 5GHz band check
    
    I missed a channel on 5GHz for when the script tries to determine which
    icon to create for the node.

commit 45d534fd942ea4547e9edbc2ef68d637688cf732  
Author: Eric Satterlee - KG6WXC <kg6wxc@gmail.com>  
Date:   Mon Jun 4 20:31:29 2018 -0700  

    Typo: fixed #4 in the README file.
    
    just removed a / in a path to make it less confusing.

commit 1690d7a632b0481dd0d7c78c4055dfd9a6acd8eb  
Author: Eric Satterlee - KG6WXC <kg6wxc@gmail.com>  
Date:   Tue May 29 23:22:38 2018 -0700  

    BugFix/Enhancement export2csv admin-default.css
    
    Fixed export2csv to deal with the json data better.
    I still cannot get the exported CSV file to cleanly import back into
    SQL, but it's *way* better than it was before.
    Still working on this.
    
    admin-default.css has had the header are set to fixed height.
    Hopefully things will be visiable for all browsers/screens now.
    
    Also updates to the readme file from earlier.

commit 74201e3419937d1a0fffeac182f3ae9fbd8a22c3  
Author: Eric Satterlee - KG6WXC <kg6wxc@gmail.com>  
Date:   Mon May 28 17:23:05 2018 -0700  

    Enhancement/BugFix - L.Control.SlideMenu.js README
    
    Fixed typo in README and added info about mysqlnd requirement
    (mysqlnd requirement may be eliminated in the future, but for now it is
    needed)
    
    Hacked L.Control.SlideMenu to show another "close" link at the bottom of
    the text instead of just at the top.

commit 09ec4214726285ddc9fcfb01e207fd95daa790eb  
Author: Eric Satterlee - KG6WXC <kg6wxc@gmail.com>  
Date:   Mon May 28 12:44:44 2018 -0700  

    Enhacement - admin.php css files map_display.php leaflet-hash.js
    
    Added a "Back to Map" link on the admin interface page(s)
    
    Moved the sizing for map div to the css file.
    
    Added rounding to the zoom level in the URL.

commit c8b27b46e0053c7c82b94e4b36eea6ff2b1103a1  
Author: Eric Satterlee - KG6WXC <kg6wxc@gmail.com>  
Date:   Sun May 27 20:59:42 2018 -0700  

    Bugfix - README.md
    
    Fixed an important typo in README.md and README.html

commit ad45ebfd7ada0d1615d3b9ac6b86e975f47382e2  
Author: Eric Satterlee - KG6WXC <kg6wxc@gmail.com>  
Date:   Thu May 24 08:26:41 2018 -0700  

    Bugfix - otherAdmin.php
    
    Removed a "/n" from a java pop up alert.
    Not sure why I thought that would work...
    
    fixed now

commit 47b93eea11134b0641e8c48dd44a8da00d6a9374  
Author: Eric Satterlee - KG6WXC <kg6wxc@gmail.com>  
Date:   Wed May 23 23:52:59 2018 -0700  

    Bugfix get-map-info.php
    
    (I knew I would miss something!!)
    
    Missed removing a deleted column from the sql query.
    
    Also changed some comments on a function in wxc_function file.

commit bfbf45709bb48ed1fbebd9bf6f18956b153e29f4  
Author: Eric Satterlee - KG6WXC <kg6wxc@gmail.com>  
Date:   Wed May 23 22:20:30 2018 -0700  

    Bugfix/Update/Enhancement Admin pages
    
    Finally finished a rough version of some admin pages that allow for
    maintenance of the DB, fixing node locations, removing nodes, etc...
    Username/Password is required to use the admin pages.
    You must create an intial user/password.
    When you first load the admin page it will ask you to create an initial
    user.
    This initial user is a "super user" and will be able to create other
    users.
    (more info is on the admin pages themselves)
    
    Fixed a stupid mistake in export2csv.php.
    
    Rearranged the columns in the node_info datebase which make the data
    more readable when exported as CSV file.
    
    Removed old DB columns that were now unused.
    
    Changed the *.css-default file(s) to *-default.css so that IE will use
    them without complaints.
    
    More than a few other little changes here and there...

commit 12b091b3b4bb34ec033470ccf4fe883e788f18a4  
Author: Eric Satterlee - KG6WXC <kg6wxc@gmail.com>  
Date:   Sun May 6 22:20:54 2018 -0700  

    Enhancement: map_display.php
    
    The check for internet access was using a POST variable to tell the page
    if the client had access to the internet or not (it just tries to get
    favicon.ico from google).
    The problem with POST was that every time you refreshed the page, the
    POST variable had to be resent, usually resulting in a dialog box from
    the browser ("Do you want to resend this info?")
    
    This drove me crazy, I could not stand that dialog box.
    
    The check for internet access has been changed to use a cookie.
    The cookie contains 1 item and expires after 30 minutes.
    So after 30 minutes, the page will recheck for internet access and act
    accordingly.
    
    There is also a small change to the check for user-settings.ini.
    
    The README.md/html files were slightly updated as well.

commit c32015e79e8665c840a67c69ee18e10faaafccdc  
Author: Eric Satterlee - KG6WXC <kg6wxc@gmail.com>  
Date:   Thu May 3 22:42:12 2018 -0700  

    Bug Fix: get-map-info.php, map-display.php
    
    Due to commit before this I also noticed non-nodes were being put into
    the database.
    There were over a 100 in my database alone.
    These are most likely non-node devices and will never be able to be
    mapped.
    Initially, I opted for a "save and recheck" style of polling, in the
    hopes that something was just missed and it would get picked up later.
    This is not the case and over time I think can see what is happening.
    
    added a check in get-map-info.php to try and skip these devices if we
    reach one, and due to that change, the numbers of shown and not show
    node and links at the bottom right of the map is more accuate now (I
    hope).
    
    73

commit 8837d7fddf7e8c6f1f529612896f63972f31c315  
Author: Eric Satterlee - KG6WXC <kg6wxc@gmail.com>  
Date:   Thu May 3 18:08:48 2018 -0700  

    Bug fix: get-map-info.php
    
    Some nodes returned a blank lat,lon and grid_square differently than
    others that were also blank.
    
    This was causing issues when writing to the SQL database.
    get-map-info would throw this error when it would happen:
    "Could not send to SQL. Incorrect double value: '' for column 'lat' at
    row 1"
    
    Fix:
    Any blank lat || lon now get converted to a single "0".
    Any blank grid_square now gets converted to a NULL.

commit 874f010410a46f60aa8058f21c2dcb11c0869be2  
Author: Eric Satterlee - KG6WXC <kg6wxc@gmail.com>  
Date:   Tue May 1 20:22:17 2018 -0700  

    Fixed some issues in the README file

commit f8d524bfb3010a65b16f043b12c8de007bc1b0e3  
Author: Eric Satterlee - KG6WXC <kg6wxc@gmail.com>  
Date:   Tue May 1 19:41:09 2018 -0700  

    fixed my stupid error in admin.php page.

commit e24346c2b8152871e9932e82c928719e9d1ecd5b  
Author: Eric Satterlee - KG6WXC <kg6wxc@gmail.com>  
Date:   Tue May 1 18:30:59 2018 -0700  

    changed default cronscript to use /bin/bash
    
    it used /bin/sh before and for some reason just recently developed a
    problem running get-map-info on my RPi.
    Using /bin/sh caused an SQL error, /bin/bash doesnt...
    Not sure why yet.

commit 58f8be72849d1c1a4d36db48de4a933c8c8a9589  
Author: Eric Satterlee - KG6WXC <kg6wxc@gmail.com>  
Date:   Tue May 1 18:20:40 2018 -0700  

    whoops missed a quote in the right spot...

commit 8fbe3dfe8db2da5546da033eaab613bef61ec357  
Author: Eric Satterlee - KG6WXC <kg6wxc@gmail.com>  
Date:   Tue May 1 18:16:19 2018 -0700  

    Changed to use default ini and other user editable files.
    
    There is no longer a user-files.tar.gz file!
    
    The user must remove the "-default" from the file extension, save the
    file and then make their own changes. I have seen many other programs
    use this and it seems to make sense.
    The README has been updated to reflect this change.
    Other ideas are appreciated still! :)
    
    With the exception of user-settings.ini, the code will check for the
    existance of the non "-default" files and use those instead of the
    default ones.
    Also if the user does not create a user-settings.ini file of their own
    an error will be thrown telling them such.
    
    Fixed the Popup for "total number of link" in the attributon bar.
    
    Some new values were added to the meshmap.css file in order to make it
    easier for the user to make customizations to the page if they want.
    More of these will probably be added in the future.

commit 011a7ef3f366a3be91d9d50e545f498b8e3b31e5  
Author: Eric Satterlee - KG6WXC <kg6wxc@gmail.com>  
Date:   Mon Apr 30 01:15:37 2018 -0700  

    Even more slight changes to the README stuff

commit a8e3eb3d033fa93c88646ec4b3fb8d3effde4c0d  
Author: Eric Satterlee - KG6WXC <kg6wxc@gmail.com>  
Date:   Mon Apr 30 00:43:19 2018 -0700  

    Broke it again... fixing...

commit 42b666bcd056bea07e6e979b4505d339b0a70c0e  
Author: Eric Satterlee - KG6WXC <kg6wxc@gmail.com>  
Date:   Mon Apr 30 00:35:47 2018 -0700  

    More slight changes to the README.md file
    
    "markdown" is a pain! I should have just written a webpage! :)

commit 61e3979c53efb9f76f7432235450a577054e516e  
Author: Eric Satterlee - KG6WXC <kg6wxc@gmail.com>  
Date:   Sun Apr 29 23:44:39 2018 -0700  

    fixing even more things... I am learning git better! :)

commit c3571d4f02ca671688fbcc5c661f10b5d4d0366c  
Author: Eric Satterlee - KG6WXC <kg6wxc@gmail.com>  
Date:   Sun Apr 29 23:14:21 2018 -0700  

    still fixing README.md

commit 59d61781d9d603117af111592b812c923a3538b2  
Author: Eric Satterlee - KG6WXC <kg6wxc@gmail.com>  
Date:   Sun Apr 29 23:09:55 2018 -0700  

    trying to fix the README.md file

commit 8d940cf14aca6b4b664324959ee98c72be4e8583  
Author: Eric Satterlee - KG6WXC <kg6wxc@gmail.com>  
Date:   Sun Apr 29 23:04:01 2018 -0700  

    fixing...

commit 8689c671e41eb0132fd0ae6934bfb31bb7eb5361  
Author: Eric Satterlee - KG6WXC <kg6wxc@gmail.com>  
Date:   Sun Apr 29 23:00:06 2018 -0700  

    fixed the README.md file. Yes yes, I broke it again. I know. :)

commit 58c7cac687f48351128c2187f39c83d51a9dfea5  
Author: Eric Satterlee - KG6WXC <kg6wxc@gmail.com>  
Date:   Sun Apr 29 22:57:06 2018 -0700  

    Updated to README.md file and made it much nicer. Logo updated in repo. favicon.ico added. Started the change to the -default files for the user editable files

commit ba78d85cbde56e741d5632a75306e20a7a304b8e  
Author: Eric Satterlee - KG6WXC <kg6wxc@gmail.com>  
Date:   Sun Apr 22 01:41:16 2018 -0700  

    lots of things updated, way more than I want to type about right now.
    
    please test and let me know.
    
    I will update (and create) and changelog file quite soon.
    
    Enjoy!

commit ce3fec8417a4d807b3458c35355a5af8cb0c6435  
Author: Eric Satterlee - KG6WXC <kg6wxc@gmail.com>  
Date:   Thu Apr 19 22:31:39 2018 -0700  

    Added GPL 3 license, also changed README (yet again)

commit 92b2ae7e3dfca6f3d44d9707cb70e36bfc9af018  
Author: Eric Satterlee - KG6WXC <kg6wxc@gmail.com>  
Date:   Thu Apr 19 21:07:23 2018 -0700  

    Of course that wasn't all... more changes to README

commit dbb226b99184b5c4bd969e2839ef57047fe703d5  
Author: Eric Satterlee - KG6WXC <kg6wxc@gmail.com>  
Date:   Thu Apr 19 20:59:31 2018 -0700  

    even more changes to the README file, hopefully this is it for that.

commit 5c1ac4ff67ee9746c992c4b4454c0ebde86722d8  
Author: Eric Satterlee - KG6WXC <kg6wxc@gmail.com>  
Date:   Thu Apr 19 20:26:45 2018 -0700  

    messing with the REAME file now
    
    trying to make it nicer with the auto-html generation...

commit dd6638e866b6399edf131438633a2f55d2df5123  
Author: Eric Satterlee - KG6WXC <kg6wxc@gmail.com>  
Date:   Thu Apr 19 20:16:08 2018 -0700  

    More updates to the README file

commit 397e7ebbf0f3223ef12408a6dd5620e54ff8ef9e  
Author: Eric Satterlee - KG6WXC <kg6wxc@gmail.com>  
Date:   Thu Apr 19 18:34:23 2018 -0700  

    more README changes

commit a35f425e48e5f7f78ff5eb5711227c6792817678  
Author: Eric Satterlee - KG6WXC <kg6wxc@gmail.com>  
Date:   Thu Apr 19 18:21:05 2018 -0700  

    changed README file to compensate for the auto-generated README.html.
    
    also removed the previously created README.html

commit bfda006d0dedc0caec715bad8f43b53df51e7342  
Author: Eric Satterlee - KG6WXC <kg6wxc@gmail.com>  
Date:   Thu Apr 19 17:59:03 2018 -0700  

    This may fix README.html

commit bb38993591a3916e8a0a3a6154676a032e3004e9  
Author: Eric Satterlee - KG6WXC <kg6wxc@gmail.com>  
Date:   Thu Apr 19 17:54:57 2018 -0700  

    manually adding README.html (hopefully this will fix the repo)

commit 7ebfcddd53ee0774ab3f16d9d90280263343b27f  
Author: Eric Satterlee - KG6WXC <kg6wxc@gmail.com>  
Date:   Thu Apr 19 17:49:15 2018 -0700  

    Made it so get-map-info and parallel_node_polling cannot be run inside a
    browser.
    
    (also testing README.html generation)

commit a0401c8059515033342775f79d221427b4b1cd37  
Author: Eric Satterlee - KG6WXC <kg6wxc@gmail.com>  
Date:   Wed Apr 18 23:12:17 2018 -0700  

    forgot to add a file

commit f55f3db53ab0aee9437aa2721f7108b064bb0824  
Author: Eric Satterlee - KG6WXC <kg6wxc@gmail.com>  
Date:   Wed Apr 18 23:09:39 2018 -0700  

    Trying to validate against HTML5 Validator and more clean up.

commit 8fdef47b5c6cd93dd7fd580a43d54950c9fb1b59  
Author: Eric Satterlee - KG6WXC <kg6wxc@gmail.com>  
Date:   Wed Apr 18 22:38:22 2018 -0700  

    Yet more cleaning...
    
    Don't run your code through an HTML5 validator if you can help it! :)

commit 66af1b951905302aea42e2c637a8f8b86d093d8c  
Author: Eric Satterlee - KG6WXC <kg6wxc@gmail.com>  
Date:   Wed Apr 18 22:13:11 2018 -0700  

    more cleaning (there might be a lot of this, sorry)

commit cee4998428ba97ee3188e9ce3ebfee9ea48c02ba  
Author: Eric Satterlee - KG6WXC <kg6wxc@gmail.com>  
Date:   Wed Apr 18 22:04:57 2018 -0700  

    leaflet-hash.js now always loaded from local resources.
    
    There is no reliable internet server that provides both HTTP and HTTPS
    access.

commit c70ffa876c5baaa2d4b3e0ea7366794c6cd868df  
Author: Eric Satterlee - KG6WXC <kg6wxc@gmail.com>  
Date:   Wed Apr 18 22:01:51 2018 -0700  

    fixed leaflet-hash.js URL

commit 494fbb316587c02f7a8be6bd1e73a78590493e6d  
Author: Eric Satterlee - KG6WXC <kg6wxc@gmail.com>  
Date:   Wed Apr 18 21:58:38 2018 -0700  

    Cleaning some comments, more preparing for the "internet test" and other
    general cleanup.

commit 0e4149fd8eef7cc31c443dee6a2c081885c7a425  
Author: Eric Satterlee - KG6WXC <kg6wxc@gmail.com>  
Date:   Wed Apr 18 21:49:04 2018 -0700  

    changed where the "internet access checking" is at in the code.

commit 61781bd35cff9385367af9c879fc26529c220ade  
Author: Eric Satterlee - KG6WXC <kg6wxc@gmail.com>  
Date:   Wed Apr 18 21:42:11 2018 -0700  

    Setting up for the abilty to tell if the client has internet access or
    not.
    
    There is a way to have javascript give us some indication if the clients
    browser has access to the greater internet or not. This would allow the
    map webpage to either pull it's local resources or to use resources from
    the internet.
    For 1 you can get better Map layers if the client has internet access,
    and why pull data over the mesh if we do not have to?

commit 058c1f1928c6d82e45b0876df2361bff5debad76  
Author: Eric Satterlee - KG6WXC <kg6wxc@gmail.com>  
Date:   Sun Apr 15 18:45:06 2018 -0700  

    get-map-info, map_display and map_functions updated.
    
    Added "ini_set('memory_limit', '128M') to get-map-info and map_display.
    If you have a large network, you may need to increase the amount of
    memory needed. 128M should be more than enough in most cases, unless you
    have a "Mega Mesh" like N2MH does. :)
    
    Added "last_seen" info to the station popups (map_functions.inc)
    
    Also added (hopefully) a catch in get-map-info to find a "stalled" node
    polling run.
    Sometimes the node polling portion of the script never completes and it
    never gets a chance to unset the "currently_running" bit in the
    database.
    There is now a check so that if the "currently_running" bit is 1 and the
    time the script last polled the node is greater than 3 * the
    "node_polling_interval" (from the ini file), then the script will just
    go out and poll the nodes as normal.
    If it completes, it will unset the "currently_running" bit and will
    update the timestamp.
    
    These changes have all been suggested by N2MH. Thanks Mark! I finally
    got to it!

commit 293388268646f8f240cc7506b3d61a0471d681a5  
Author: Eric Satterlee - KG6WXC <kg6wxc@gmail.com>  
Date:   Sat Apr 14 16:45:06 2018 -0700  

    Changes to README file

commit 5174fbcc098bc5213b3e23f9e7792812e3cc3516  
Author: Eric Satterlee - KG6WXC <kg6wxc@gmail.com>  
Date:   Sat Apr 14 16:37:31 2018 -0700  

    Changes to README file

commit 44218c680627372f71d41f28f1df31cee69aaf11  
Author: Eric Satterlee - KG6WXC <kg6wxc@gmail.com>  
Date:   Sat Apr 14 16:21:23 2018 -0700  

    Changes to README file

commit 5c8257bfb0c4bdb58dca211b34351f25ebcf5f1d  
Author: Eric Satterlee - KG6WXC <kg6wxc@gmail.com>  
Date:   Sat Apr 14 16:12:37 2018 -0700  

    Changes to README file

commit c2986ccade6be0970b4f16eb45f21acaa67d495f  
Author: Eric Satterlee - KG6WXC <kg6wxc@gmail.com>  
Date:   Sat Apr 14 12:30:21 2018 -0700  

    Added .gitignore file

commit 15b0f0662a31803d3388b7c36e3607cf934916b5  
Author: Eric Satterlee - KG6WXC <kg6wxc@gmail.com>  
Date:   Sat Apr 14 11:45:57 2018 -0700  

    fixing issue with get-map-info --help (I  hope)

commit f2b982fb034476c8a7a16c40490d1f10300ab2e7  
Author: Eric Satterlee - KG6WXC <kg6wxc@gmail.com>  
Date:   Sat Apr 14 11:05:24 2018 -0700  

    Remove usage of the "wxc_custom.inc" file.
    
    There is now a new file: "custom.inc" that can allow the user to make
    site specific overrides, keep sql passwords out of the main ini file,
    etc...
    This is completely optional and not required. The file may even be
    safely deleted if wanted.
    
    Also some typo fixing in the README file.

commit 9ef9ddb69fef5319cb6eef447eac00e402551972  
Author: Eric Satterlee - KG6WXC <kg6wxc@gmail.com>  
Date:   Sat Apr 14 03:14:15 2018 -0700  

    more edits to the --help section of get-map-info.php

commit 0988d3575770ec6797fb25835ddb75815202e4c2  
Author: Eric Satterlee - KG6WXC <kg6wxc@gmail.com>  
Date:   Sat Apr 14 03:10:01 2018 -0700  

    ha! fixed a stupid typo and added more info to get-map-info.php --help

commit 85570074a2bb599527d092b93c6273112c1fdc29  
Author: Eric Satterlee - KG6WXC <kg6wxc@gmail.com>  
Date:   Sat Apr 14 03:03:45 2018 -0700  

    more little changes
    
    just changed the output of get-map-info --help a little bit.

commit ebadc3dece9b089ea344fdb0078b8860e97e9488  
Author: Eric Satterlee - KG6WXC <kg6wxc@gmail.com>  
Date:   Sat Apr 14 02:56:17 2018 -0700  

    added --help ability to get-map-info.php
    
    you can actually use --help, --h, -help, -h, /?, or ? to get the usage
    info now.

commit 72192d293967437fa3a4af76623f086dafa4ada4  
Author: Eric Satterlee - KG6WXC <kg6wxc@gmail.com>  
Date:   Sat Apr 14 01:42:50 2018 -0700  

    more changes to README file

commit 769f4571a2f953b6355542169f3d8abb8d1061c7  
Author: Eric Satterlee - KG6WXC <kg6wxc@gmail.com>  
Date:   Sat Apr 14 00:50:24 2018 -0700  

    Fixed some errors in the README file

commit 8f0dd53ca539e3ca40915d07b602dfeeb5c3065e  
Author: Eric Satterlee - KG6WXC <kg6wxc@gmail.com>  
Date:   Fri Apr 13 23:45:56 2018 -0700  

    Many changes.
    
    Removed user-edited files so they do not get overwritten when updating
    the scripts.
    The user-edited files are now contained in the user-file.tar.gz archive.
    Once decompressed they will not be effected by future "git pull"
    operations.
    
    Made changes to how the scripts find the included files, the whole thing
    can now just live in one directory, allowing for easier future updates.
    
    Added http-meshmap.conf file to plug in to apache configs. This allows
    the <WEBROOT>/meshmap directory to live virtually anywhere on the
    filesystem.
    
    Updated README file to reflect these new instructions.

commit 5ac5c496a56c312c4ad327923a246a6b276bb6c6  
Author: Eric Satterlee - KG6WXC <kg6wxc@gmail.com>  
Date:   Tue Apr 10 14:55:31 2018 -0700  

    finxed warning from map_functions about undefined index in array
    creation

commit 6bee870324befc2d1a0e27b446bdebdc93bbfad8  
Author: Eric Satterlee - KG6WXC <kg6wxc@gmail.com>  
Date:   Sat Apr 7 22:51:11 2018 -0700  

    Fixed issues with the station Pop-Ups.
    
    The array that was fixed for PHP 7.2.3 was not fixed right.
    This resulted in missing/inaccurate info in the station pop-ups.
    
    Part of the array was reinitializing when it should not have, since it
    was already created at that point.
    
    a pretty simple if (is_array()) { ... }else { ... } fixes it.

commit 8abe7a89efe3eec06102ccd601c2f67d98e8a26d  
Author: Eric Satterlee - KG6WXC <kg6wxc@gmail.com>  
Date:   Sat Apr 7 13:51:02 2018 -0700  

    removed what git added in get-map-info.php (still learning this git
    stuff :) )

commit 29ec34c37a9e477f1dfd597c4a98fac83bccca53  
Author: Eric Satterlee - KG6WXC <kg6wxc@gmail.com>  
Date:   Sat Apr 7 13:47:17 2018 -0700  

    added node_map.sql file for importing into mysql/mariaDB

commit 7ad4061366da3915fe34f9b8cd566bddb1a3fcba  
Author: Eric Satterlee - KG6WXC <kg6wxc@gmail.com>  
Date:   Wed Apr 4 23:47:08 2018 -0700  

    just changed some comments in get-map-info (and testing git from laptop)

commit 7fa8aca7d785281adadb8bc2c9a7fcbcc09e0e95  
Author: ride <ride@nomad>  
Date:   Thu Mar 29 00:08:09 2018 -0700  

    testing from windows...

commit 50375acaa37738e2cc78e80765e0e953a8476f94  
Author: Eric Satterlee - KG6WXC <kg6wxc@gmail.com>  
Date:   Wed Mar 28 22:58:10 2018 -0700  

    really testing new domain name, added some new comments in map_display

commit 94f81ac25d57d617697a4fc855493d0460c8e13c  
Author: Eric Satterlee - KG6WXC <kg6wxc@gmail.com>  
Date:   Wed Mar 28 17:18:07 2018 -0700  

    updated the apache conf file to block access to the ini and inc files
    also block access to the scripts directory.
    
    working on making the install simpler, clone the directory and go
    (almost) :)

commit b03aea08a764e6232e38cc68c09df5b5ee7d2a1f  
Author: Eric Satterlee - KG6WXC <kg6wxc@gmail.com>  
Date:   Wed Mar 28 15:35:43 2018 -0700  

    fixed log warning about empty needle on line 181 of map_display

commit 725ab302ad55d1f8e5e1c05d4754b13d6df14b8c  
Author: Eric Satterlee - KG6WXC <kg6wxc@gmail.com>  
Date:   Sun Mar 25 22:30:16 2018 -0700  

    working on load_LinkedTO function.
    
    load_LinkerTO blows up in php7 due to the array not being created
    correctly.
    php5 just happily fixed it for us and did not complain.
    The issue is somewhat dealt with, Eric is still working on it.
    
    This commit is also a test of the git system.
    cheers!

commit 2fac9a6c089940d3f6c678dae2ee5f5df30064e4  
Author: Eric Satterlee - KG6WXC <kg6wxc@gmail.com>  
Date:   Sun Mar 25 12:02:47 2018 -0700  

    Initial commit!

Historical Notes

March 2018
-----------
wow, it's been that long huh?  
now using git repo at https://mapping.kg6wxc.net/git/meshmap  
fixed issues with running the webpage on PHP 7.2.3, it should be good now.  
tested on PHP 5.6.30 7.0.27-0+deb9u1 and 7.2.3  
had to create an array properly and not let PHP fix my mistakes for me. :)  

June 2017
-----------------
Added CSS values  
First pass at Optimization for Node and Topology array handling  
Moved several control values to user-setting.ini  
   Including: Server Settings, Messages, Starting Coordinates and Zoom  
GSE: Moved map specific details to meshmap-settings.ini  
GSE: Optimized link building  
GSE: Cloned map.php to map_display.php for additional ( non-mesh ) features  
GSE: Moved Icon and Colour definitions to meshmap-settings.ini  
GSE: Moved all map building infrastruures to individual routines.  
GSE: Added ( Additional Markers ) - These are additional filtered non-mesh markers.  
GSE: Added Services to the mesh node pop up  
GSE: Added Popup to Link lines.  
GSE: Added another popup for those nodes with an non-standard firmware version. ( Visiable when layer is active )  

late march 2017
----------------
Many, many updates and changes.  
Almost a complete rewrite.  
No longer requires "olsr-topology-view", or wxc's original get-topology.sh or build_topology.php.  
Also no longer requires jsontomysql.php or get_nodes.sh.  
The temporary files called mesh_hosts and topology.new are no longer needed as well.  
You can safely delete all of those files if you had them.  

This one script should do it all.  
It will run different parts at different times.   

Now using "netcat" to get the olsr info, this was Mark's (N2MH) idea.  
Turns out there are "pure" PHP ways to do that, do not even have to make a call to "nc" any longer.  
Mark also caught a bug and now there is a better way to find the wifi mac address that should work for all devices.  

Moved many things into the wxc_functions file.  
Alternate IP to host name solution, since PHP's own function would sometimes fail.  
Moved wxc's totally site-specific stuff into an alternate file that is not required.  

early march 2017
-----------------
sorted "Linked to:" popup list by distance and cost this was easiest by putting the distance info into the database. (<em>see the scripts for more info</em>)  
Can now tell the difference between "real" DTD links and those that are linked in some other way (mostly)  
Additionally, This page is becoming more and more modified to do things based on which "host" it is running on.  
At SBARC we currently have 3 different "versions" of this page, plus my system I use for testing.  
I was starting to lose track of what was where so it has all become one now.  
if you are running on a different host then things will default to "normal".  

early feb 2017
-----------------
changed to use only free (as in beer) maps  
OSM, openTopo, Stamen maps, etc.  

early jan 2017
-----------------
migrated to use mysqli  
also added the mapbox "topographic" maps (which suck)  

mid dec 2016
-----------------
yet another update (due to request)  
added distance and bearing info to the linked node listing in the station popup  

more updates dec 2016
-----------------
added lat, lon to the popup info  
added channel and bandwidth info to the station popups  
out of date (and maybe beta) firmware now shows up as red text in the station popups  
changed the bottom "attributions" section a bit, formatted it differently and added in the number of stations and links shown. :)  

v.03 early December 2016
-----------------
added fullscreen control.(mid november 2016).  
the basemap layers are now able to be switched.  
there is differentiation between the different bands.  
now more info in the stations popup.  
you can now filter out different bands and different types of links on the map.  
the node's name now shows up if you hover over the marker.  
I think I'm now able to pick out the tunnels vs. any other type of link... maybe  

v.02 early Nov 2016
-----------------
new "radio" icons  
"two way" link lines  
legend overlay  

v.01 inital map Oct 2016
-----------------