<?php
/**
 * Index du projet GSB
 *
 * PHP Version 7
 *
 * @author    BERTON Damien
 */


/**
 * Front to the WordPress application. This file doesn't do anything, but loads
 * wp-blog-header.php which does and tells WordPress to load the theme.
 *
 * @package WordPress
 */

/**
 * Tells WordPress to load the WordPress theme and output it.
 *
 * @var bool
 */
define( 'WP_USE_THEMES', true );

require_once 'includes/fct.inc.php';//Besoin en préliminaire
require_once 'includes/class.pdogsb.inc.php';//idem
session_start(); // Variable Super Globale
$pdo = PdoGsb::getPdoGsb();
$estConnecte = estConnecte();
$estVisiteurConnecte= estVisiteurConnecte();
$estComptableConnecte= estComptableConnecte();
require 'vues/v_entete.php';//requis

$uc = filter_input(INPUT_GET, 'uc', FILTER_SANITIZE_STRING);//on verifie le contenu de uc
if ($uc && !$estConnecte) {
    $uc = 'connexion';
} else if (empty($uc)) {
    $uc = 'accueil';
}
switch ($uc) {
case 'connexion':
    include 'controleurs/c_connexion.php';
    break;
case 'accueil':
    include 'controleurs/c_accueil.php';
    break;
case 'gererFrais':
    include 'controleurs/c_gererFrais.php';
    break;
case 'etatFrais':
    include 'controleurs/c_etatFrais.php';
    break;
case 'deconnexion':
    include 'controleurs/c_deconnexion.php';
    break;
case 'validerFrais':
    include 'controleurs/c_validerFrais.php';
    break;
case 'suivreFrais':
    include 'controleurs/c_suivrePaiement.php';
    break;
}
require 'vues/v_pied.php';
