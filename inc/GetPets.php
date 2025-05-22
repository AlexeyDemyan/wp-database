<?php

class GetPets
{
    function __construct()
    {
        global $wpdb;
        $tablename = $wpdb->prefix . 'pets';
        // $_GET is used to pull values form the url
        $customQuery = $wpdb->prepare("SELECT * FROM $tablename WHERE species = %s LIMIT 100;", array($_GET['species']));
        $this->pets = $wpdb->get_results($customQuery);
    }
}
