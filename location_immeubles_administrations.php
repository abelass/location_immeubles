<?php
/**
 * Fichier gérant l'installation et désinstallation du plugin Location d&#039;immeubles
 *
 * @plugin     Location d&#039;immeubles
 * @copyright  2018
 * @author     Rainer Müller
 * @licence    GNU/GPL v3
 * @package    SPIP\Location_immeubles\Installation
 */

if (!defined('_ECRIRE_INC_VERSION')) {
	return;
}


/**
 * Fonction d'installation et de mise à jour du plugin Location d&#039;immeubles.
 *
 * Vous pouvez :
 *
 * - créer la structure SQL,
 * - insérer du pre-contenu,
 * - installer des valeurs de configuration,
 * - mettre à jour la structure SQL
 *
 * @param string $nom_meta_base_version
 *     Nom de la meta informant de la version du schéma de données du plugin installé dans SPIP
 * @param string $version_cible
 *     Version du schéma de données dans ce plugin (déclaré dans paquet.xml)
 * @return void
**/
function location_immeubles_upgrade($nom_meta_base_version, $version_cible) {
	$maj = array();
	# quelques exemples
	# (que vous pouvez supprimer !)
	#
	# $maj['create'] = array(array('creer_base'));
	#
	# include_spip('inc/config')
	# $maj['create'] = array(
	#	array('maj_tables', array('spip_xx', 'spip_xx_liens')),
	#	array('ecrire_config', 'location_immeubles', array('exemple' => "Texte de l'exemple"))
	#
	# $maj['1.1.0']  = array(array('sql_alter','TABLE spip_xx RENAME TO spip_yy'));
	# $maj['1.2.0']  = array(array('sql_alter','TABLE spip_xx DROP COLUMN id_auteur'));
	# $maj['1.3.0']  = array(
	#	array('sql_alter','TABLE spip_xx CHANGE numero numero int(11) default 0 NOT NULL'),
	#	array('sql_alter','TABLE spip_xx CHANGE texte petit_texte mediumtext NOT NULL default \'\''),
	# );

	include_spip('inc/config');
	spip_log($nom_meta_base_version, 'teste');

	// Définir les liaisons souhaités
	if ($nom_meta_base_version == 'location_immeubles_base_version') {
		$config_prix_objets = lire_config('prix_objets/objets_prix', array());
		$config_objets_espaces = lire_config('objets_espaces/objets', array());
		$config_objets_infos_extras = lire_config('objets_infos_extras/objets', array());
		$config_objets_services_extras = lire_config('objets_services_extras/objets', array());
		$config_objets_disponibilites = lire_config('objets_disponibilites/objets', array());

		$config_prix_objets = array_merge(
				$config_prix_objets, array('objets_service', 'espace')
			);
		$config_objets_espaces = array_merge(
				$config_objets_services_extras, array('spip_immeubles')
			);
		$config_objets_infos_extras = array_merge(
				$config_objets_infos_extras, array('spip_immeubles', 'spip_espaces')
			);
		$config_objets_services_extras = array_merge(
				$config_objets_services_extras, array('spip_immeubles', 'spip_espaces')
			);
		$config_objets_disponibilites = array_merge(
				$config_objets_disponibilites, array('spip_espaces')
			);
	}


	$maj['create'] = array(
		array('ecrire_config', 'prix_objets', array('objets_prix' => $config_prix_objets)),
		array('ecrire_config', 'objets_espaces', array('objets' => $config_objets_espaces)),
		array('ecrire_config', 'objets_infos_extras', array('objets' => $config_objets_infos_extras)),
		array('ecrire_config', 'objets_services_extras', array('objets' => $config_objets_services_extras)),
		array('ecrire_config', 'objets_disponibilites', array('objets' => $config_objets_disponibilites)),
	);

	include_spip('base/upgrade');
	maj_plugin($nom_meta_base_version, $version_cible, $maj);
}


/**
 * Fonction de désinstallation du plugin Location d&#039;immeubles.
 *
 * Vous devez :
 *
 * - nettoyer toutes les données ajoutées par le plugin et son utilisation
 * - supprimer les tables et les champs créés par le plugin.
 *
 * @param string $nom_meta_base_version
 *     Nom de la meta informant de la version du schéma de données du plugin installé dans SPIP
 * @return void
**/
function location_immeubles_vider_tables($nom_meta_base_version) {
	# quelques exemples
	# (que vous pouvez supprimer !)
	# sql_drop_table('spip_xx');
	# sql_drop_table('spip_xx_liens');


	effacer_meta($nom_meta_base_version);
}
