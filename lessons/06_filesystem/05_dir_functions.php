<?php

require 'helper.php';

// // Gets the current working directory
// echo getcwd(), LS;
// echo __DIR__, LS;

// // Change directory
// chdir('examples');
// echo getcwd(), LS;
// chdir('..');
// echo getcwd(), LS;


// // List files and directories inside the specified path
// echo "<pre>";
// echo print_r(scandir(__DIR__), true), LS;





// // Open directory handle
// // Read entry from directory handle
// // Close directory handle
// if ($handle = opendir(__DIR__)) {
//     echo "Directory handle: $handle", LS;
//     echo "Entries:", LS;

//     // This is the correct way to loop over the directory.
//     while (false !== ($entry = readdir($handle))) {
//         echo ">> $entry", LS;
//     }

//     /* This is the WRONG way to loop over the directory. */
//     while ($entry = readdir($handle)) {
//         echo "$entry", LS;
//     }

//     closedir($handle);
// }


// // Return an instance of the Directory class
// $d = dir(__DIR__);
// echo get_class($d), LS;
// echo "Handle: " . $d->handle . LS;
// echo "Path: " . $d->path . LS;
// while (false !== ($entry = $d->read())) {
//    echo $entry.LS;
// }
// $d->close();
