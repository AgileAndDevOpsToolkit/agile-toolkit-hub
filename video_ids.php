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

$retrospectives   = [];
$demos            = ['ZOLOwiOJA0k'];
$questions_agiles = [];
$devops           = [];

/* Glossaire (sous-sections) */
$glossaire_a = [
	['id'=>'7OA3USnZ3TU', 'text'=>'Agilité'],
	['id'=>'sd6FzRFEHGY', 'text'=>'Agilité à l\'Échelle'],
	'L6QMqTG5j1I', 'FxkqMh5mM24', 'MM3X7MvXYuQ'];
$glossaire_b = ['5uNde1yFawk', '5TeeNfOffDc', '6jSZZ4XTcmg', 'WknLX4DEs1k'];

/* Agilité & IA (sous-sections) */
$ai_benchmark         = [];
$ai_reflexion         = [];
$ai_essentiels        = [];
$ai_retro_templates   = [];
$ai_synthese          = [];
$ai_presentation_docs = [];
$ai_locale            = [];
$ai_custom_gpts       = [];
$ai_vibe_coding       = [];
$ai_speech_to_text    = [];
$ai_apis_llm          = [];
