<?php
	// -----------------------------------------------------------------------------------
	// In dem folgenden Block bitte die Variablen mit Werten 
	// entsprechend der Anmerkung vornehmen
	// -----------------------------------------------------------------------------------
	
	// Anzeigen von Fehlermeldungen
	error_reporting(E_ALL);
	ini_set ('display_errors', 'Off'); // für Testumgebung auf 'On' setzen - set to 'On' for test environment

	// Daten für Impressum 
	// Data for Disclaimer
	$hp_username = "Dein Name";
	$hp_email = "deine@email.adresse";

	// Zeitzonen Einstellungen  // Timezone Settings
	// Deine Zeitzone  // Enter your timezone
	date_default_timezone_set('Europe/Berlin');
	
	// Navbar - DAS DEAKTIVIEREN FÜHRT ZU FEHLERHAFTER DESIGN-DARSTELLUNG
	// Navbar - set to false, will result in design error
	$showNavbar = true; // true - wenn angezeigt werden soll, ansonten auf false setzen. Standard ist true

	// Konfiguration des Brand-Logos in der Navbar
	// Configure the brand logo in Navbar
	$brand_logo = "./assets/images/brand_logo.jpg"; //das kleine Logo oben links neben dem Namen in der Navbar
	$hp_nav_brand_link = "./index.php"; //wohin der Link auf dem Brand-Logo führen soll

	// Header Hintergrund
	// Header Background
	$header_backround_url = "./assets/images/header_background.jpg"; //Hier den Link zu deiner Header-Hintergrundgrafik einfuegen
?>
