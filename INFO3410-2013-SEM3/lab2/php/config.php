<?php
/**
 * Author: Kyle E. DeFreitas
 * License: GNU GPLv3
 */
 
 //  We create a global object that will be used to store the configuration information for the different components of the system
 global $CFG; //Declaring a global variable called CFG (whih
 $CFG = new stdClass();
 
 //Database Properties (Customize these values based on local installation)
 $CFG->dbhost = "localhost";
 $CFG->username = "dev_user";
 $CFG->password = "d3vUser";
 $CFG->database = "dev_user";


