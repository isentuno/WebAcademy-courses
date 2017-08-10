<?php

// require
// require_once
// include
// include_once

require 'helper.php';

// // Returns a parent directory's path
// echo dirname("/etc/fstab"), LS;
// echo dirname("/usr/local/lib", 2), LS;
// echo dirname("/home/sergey/projects/personal/portal/index.php", 3), LS;


// // Returns trailing name component of path
// echo "1) ".basename("/etc/sudoers.d", ".d") . LS;
// echo "2) ".basename("/etc/sudoers.d") . LS;
// echo "3) ".basename("/etc/passwd") . LS;
// echo "4) ".basename("/etc/") . LS;
// echo "5) ".basename(".") . LS;
// echo "6) ".basename("/") . LS;
// echo "7) ".basename("/var/log/apache2/error.log") . LS;

// // Gives information about a file (http://php.net/manual/en/function.stat.php)
// echo "<pre>";
// echo print_r(stat(__FILE__), true), LS;





// // Tells whether the filename is a directory
// var_dump(is_dir('/home/sergey/projects/personal/portal/index.php')) . LS;
// var_dump(is_dir('/home/sergey/projects/personal/portal/')) . LS;
// var_dump(is_dir('/home/sergey/projects/')) . LS;

// // Tells whether the filename is a regular file
// var_dump(is_file('a_file.txt')) . LS;
// var_dump(is_file('helper.php')) . LS;
// var_dump(is_file('/usr/bin/')) . LS;


// // Tells whether a file exists and is readable
// if (is_readable(__FILE__)) {
//     echo 'The file is readable', LS;
// } else {
//     echo 'The file is not readable', LS;
// }

// // Tells whether the filename is writable
// if (is_writable(__FILE__)) {
//     echo 'The file is writable', LS;
// } else {
//     echo 'The file is not writable', LS;
// }

// // Tells whether the filename is executable
// $file = __FILE__;

// if (is_executable($file)) {
//     echo $file.' is executable', LS;
// } else {
//     echo $file.' is not executable', LS;
// }


// // Gets file size
// echo filesize(__FILE__), LS;

// // Gets file type
// echo filetype('/etc/passwd'), LS;   // file
// echo filetype('/etc/'), LS;         // dir





// // This is the touch time, we'll set it to one hour in the past.
// $time = time() - 36000;

// // Touch the file
// if (!touch('some_file.txt', $time)) {
//     echo 'Whoops, something went wrong...', LS;
// } else {
//     echo 'Touched file with success', LS;
// }

// // Deletes a file
// unlink('some_file.txt');

// $arr = ['bob'=> 1, 2, 3, 4];
// unset($arr['bob']);
// print_r($arr);






// // Makes directory
// $structure = './depth1/depth2/depth3/';
// if (!mkdir($structure, 0777, true)) {
//     die('Failed to create folders...');
// }

// // Removes directory
// rmdir($structure);

// /* Usage Example */
// if (!is_dir($structure)) {
//     mkdir($structure);
// }
// if (is_dir($structure)) {
//     rmdir($structure);
// }
// /* End Example */




// // Find pathnames matching a pattern
// foreach (glob("*.php") as $index => $filename) {
//     echo "[$index] $filename: size -- " . filesize($filename) . LS;
// }











