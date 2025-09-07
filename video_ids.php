<?php
/**
 * Déclare les vidéos par section/sous-section.
 *
 * Format recommandé par vidéo :
 *   ['id' => 'dQw4w9WgXcQ', 'text' => 'Introduction : Histoire de l’agilité']
 *
 * Raccourci possible :
 *   'dQw4w9WgXcQ'   // équivaut à ['id'=>'dQw4w9WgXcQ','text'=>'']
 *
 * Laisse [] si vide : la section/sous-section ne s’affichera pas.
 */
 
/* Sections sans sous-titre */
$agile_scale = [
  ['id'=>'nEcQbNEdYTQ', 'text'=>'Histoire de l\'agilité'],
  ['id'=>'QoZb9bjj3SI', 'text'=>'Pourquoi l\'échelle ? De Scrum à SAFe'],
  ['id'=>'7OA3USnZ3TU',    'text'=>'SAFe - Introducion & niveaux'],
  ['id'=>'DE9Un87qRLY ', 'text'=>'SAFe - Itérations & PI'],
  ['id'=>'oeHS2HAHXl8',   'text'=>'SAFe - Les rôles du niveau Train'],
  ['id'=>'WHBSGK3s33c',   'text'=>'SAFe - Organisation des équipes (topologie) : Component Team et Feature Team'],
  ['id'=>'rdExBxwMUs8',  'text'=>'SAFe - User Stories, Features, Capabilities'],
  ['id'=>'sDQVOk9AcOo', 'text'=>'Types de Stories, DoR & DoD'],
];

$retrospectives   = [
	['id'=>'TzaGwyiHA0A ', 'text'=>'Tuto : la rétrospective agile la plus simple.'],
	['id'=>'MDRCbKRLNag ', 'text'=>'Tuto : La rétro \'Positif/Négatif\''],
	['id'=>'tAPmKfrH7oE ', 'text'=>'Tuto : Comment dessiner ses templates de rétrospective avec ChatGPT ?'],
	['id'=>'JaJYQ5kVpts ', 'text'=>'Tuto : La rétro Speedboat -un grand classique)'],
	['id'=>'25hmOK3tUe8 ', 'text'=>'Tuto : La rétro \'Les 3 Petits Cochons\' (un grand classique)'],
	['id'=>'QZfAt7Uk-eY ', 'text'=>'Tuto : je crée une rétro sur le thème du Foot'],
	['id'=>'sfN1yDJYebY ', 'text'=>'On fait générer une rétro sur le thème du foot par ChatGPT et Claude'],
	['id'=>'XJWfHcmCOh0 ', 'text'=>'Tuto : je crée une rétro sur le thème de Roland Garros (tennis)'],
	['id'=>'ruts-tnd7i8 ', 'text'=>'Tuto : je crée une rétro sur le thème de vendredi 13'],
	['id'=>'fP1bn7rmC6Y ', 'text'=>'Je présente un petit gadget \'La roue des prénoms\', que vous pouvez utiliser pour égayer vos rétros'],
	['id'=>'WdOWeF6w4w4 ', 'text'=>'Tuto : je crée une rétro sur le thème de la plage'],
	['id'=>'1pKth1Mk3Ss ', 'text'=>'L\'usine à rétros : je crée un Custom GPT qui génère des templates de rétrospectives à la demande'],
	['id'=>'FPvt2BDKIpw ', 'text'=>'Je présente le fonctionnement de l\'Usine à Rétros : un Custom GPT qui génère des remplates de rétrospectives agiles à la demande'],
	['id'=>'AjHxGwM5oYY ', 'text'=>'Tuto : je vous présente le format de rétro \'Carte Postale\''],
	['id'=>'Rb33e-szups ', 'text'=>'Tuto : je crée une rétro sur le thème de la rentrée des classes']
];
$demos            = [
	['id'=>'ZOLOwiOJA0k', 'text'=>'3 Conseils pour réussir toutes vos démos']
	];
$questions_agiles = [
	['id'=>'twcUbV_Wh2g', 'text'=>'Différence entre Risque et Dépendance'],
	['id'=>'8nkLlRbT-2A ', 'text'=>'3 Conseils pour gérér une équipe dont tous les membres sont à temps partiel car partagés avec d\'autres équipes']
	];
$devops           = [
	['id'=>'ugj44kHM8HI', 'text'=>'Comment héberfer un petit site web  directement sur Github ?'],
	['id'=>'', 'text'=>'']
];

/* Glossaire (sous-sections) */
$glossaire_a = [
	['id'=>'7OA3USnZ3TU', 'text'=>'Agilité'],
	['id'=>'sd6FzRFEHGY', 'text'=>'Agilité à l\'Échelle'],
	'L6QMqTG5j1I', 'FxkqMh5mM24', 'MM3X7MvXYuQ'];
$glossaire_b = ['5uNde1yFawk', '5TeeNfOffDc', '6jSZZ4XTcmg', 'WknLX4DEs1k'];

/* Agilité & IA (sous-sections) */
$ai_benchmark         = [
	['id'=>'OChJUyU8dWk', 'text'=>'On teste ChatGPT, CLaude et Gemini sur 3 questions d\'agilité basiques'],
	['id'=>'dcxUaeH-z4Y ', 'text'=>'On teste ChatGPT, CLaude et Gemini sur 3 questions d\'agilité basiques'],
	['id'=>'0Fg0-ufPo_c ', 'text'=>'On essaye pour la première fois de faire générer des templates de rétrospectives agiles par ChatGPT, Claude et Gemini'],
	['id'=>'QimIFnkOCA4 ', 'text'=>'On teste ChatGPT, Claude et Gemini sur des questions relatives à la gestion de confits classiques agiles'],
	['id'=>'', 'text'=>''],
	['id'=>'', 'text'=>''],
	['id'=>'', 'text'=>''],
	['id'=>'', 'text'=>''],
	['id'=>'', 'text'=>'']
];
$ai_reflexion         = [
	['id'=>'', 'text'=>''],
	['id'=>'', 'text'=>''],
	['id'=>'', 'text'=>''],
	['id'=>'', 'text'=>''],
	['id'=>'', 'text'=>''],
	['id'=>'', 'text'=>''],
	['id'=>'', 'text'=>''],
	['id'=>'', 'text'=>''],
	['id'=>'', 'text'=>'']
];
$ai_essentiels        = [
	['id'=>'', 'text'=>''],
	['id'=>'', 'text'=>''],
	['id'=>'', 'text'=>''],
	['id'=>'', 'text'=>''],
	['id'=>'', 'text'=>''],
	['id'=>'', 'text'=>''],
	['id'=>'', 'text'=>''],
	['id'=>'', 'text'=>''],
	['id'=>'', 'text'=>'']
];
$ai_retro_templates   = [
	['id'=>'', 'text'=>''],
	['id'=>'', 'text'=>''],
	['id'=>'', 'text'=>''],
	['id'=>'', 'text'=>''],
	['id'=>'', 'text'=>''],
	['id'=>'', 'text'=>''],
	['id'=>'', 'text'=>''],
	['id'=>'', 'text'=>''],
	['id'=>'', 'text'=>'']
];
$ai_synthese          = [
	['id'=>'', 'text'=>''],
	['id'=>'', 'text'=>''],
	['id'=>'', 'text'=>''],
	['id'=>'', 'text'=>''],
	['id'=>'', 'text'=>''],
	['id'=>'', 'text'=>''],
	['id'=>'', 'text'=>''],
	['id'=>'', 'text'=>''],
	['id'=>'', 'text'=>'']
];
$ai_presentation_docs = [
	['id'=>'', 'text'=>''],
	['id'=>'', 'text'=>''],
	['id'=>'', 'text'=>''],
	['id'=>'', 'text'=>''],
	['id'=>'', 'text'=>''],
	['id'=>'', 'text'=>''],
	['id'=>'', 'text'=>''],
	['id'=>'', 'text'=>''],
	['id'=>'', 'text'=>'']
];
$ai_locale            = [
	['id'=>'', 'text'=>''],
	['id'=>'', 'text'=>''],
	['id'=>'', 'text'=>''],
	['id'=>'', 'text'=>''],
	['id'=>'', 'text'=>''],
	['id'=>'', 'text'=>''],
	['id'=>'', 'text'=>''],
	['id'=>'', 'text'=>''],
	['id'=>'', 'text'=>'']
];
$ai_custom_gpts       = [
	['id'=>'', 'text'=>''],
	['id'=>'', 'text'=>''],
	['id'=>'', 'text'=>''],
	['id'=>'', 'text'=>''],
	['id'=>'', 'text'=>''],
	['id'=>'', 'text'=>''],
	['id'=>'', 'text'=>''],
	['id'=>'', 'text'=>''],
	['id'=>'', 'text'=>'']
];
$ai_vibe_coding       = [
	['id'=>'', 'text'=>''],
	['id'=>'', 'text'=>''],
	['id'=>'', 'text'=>''],
	['id'=>'', 'text'=>''],
	['id'=>'', 'text'=>''],
	['id'=>'', 'text'=>''],
	['id'=>'', 'text'=>''],
	['id'=>'', 'text'=>''],
	['id'=>'', 'text'=>'']
];
$ai_speech_to_text    = [
	['id'=>'', 'text'=>''],
	['id'=>'', 'text'=>''],
	['id'=>'', 'text'=>''],
	['id'=>'', 'text'=>''],
	['id'=>'', 'text'=>''],
	['id'=>'', 'text'=>''],
	['id'=>'', 'text'=>''],
	['id'=>'', 'text'=>''],
	['id'=>'', 'text'=>'']
];
$ai_apis_llm          = [
	['id'=>'', 'text'=>''],
	['id'=>'', 'text'=>''],
	['id'=>'', 'text'=>''],
	['id'=>'', 'text'=>''],
	['id'=>'', 'text'=>''],
	['id'=>'', 'text'=>''],
	['id'=>'', 'text'=>''],
	['id'=>'', 'text'=>''],
	['id'=>'', 'text'=>'']
];
