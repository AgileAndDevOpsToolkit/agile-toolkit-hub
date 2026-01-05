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
 
// 🏠 Accueil (définir les vidéos de la page index)
$home = [
	'intro_html' => '',
	'videos' => [
		['id'=>'TPRjzFR78bQ', 'text'=>'Test : que vaut Google Nano Banana sur la génération de templates de rétrospective ?'],
		['id'=>'-ENxaTp2_0U', 'text'=>'L\'Agilité est-elle morte ?'],
		['id'=>'oZ0jPkYszbg', 'text'=>'Vibe coding d\'une mini appli de Burndown Chart (ChatGPT, Synthèse vocale)'],
		['id'=>'Z5ujxT3MZVc', 'text'=>'Tuto Rétrospective 4L'],
		['id'=>'TBvkV607Tic', 'text'=>'J\'explique les différents composants techniques d\'une IA générative'],
		['id'=>'ZdEr54DIefg', 'text'=>'Tuto Mood Retrospective'],

	],
];

// 📈 Agilité à l'Échelle (SAFe, stories, PI)
$agile_scale = [
	'intro_html' => '💡 Cette série de vidéo est un cours sur l\'agilité à l\'échelle. A regarder dans l\'ordre idéalement',
	'videos' => [
	['id'=>'nEcQbNEdYTQ', 'text'=>'Histoire de l\'agilité'],
	['id'=>'QoZb9bjj3SI', 'text'=>'Pourquoi l\'échelle ? De Scrum à SAFe'],
	['id'=>'oeHS2HAHXl8',    'text'=>'SAFe - Introducion & niveaux'],
	['id'=>'DE9Un87qRLY', 'text'=>'SAFe - Itérations & PI'],
	['id'=>'oeHS2HAHXl8',   'text'=>'SAFe - Les rôles du niveau Train'],
	['id'=>'WHBSGK3s33c',   'text'=>'SAFe - Organisation des équipes (topologie) : Component Team et Feature Team'],
	['id'=>'rdExBxwMUs8',  'text'=>'SAFe - User Stories, Features, Capabilities'],
	['id'=>'sDQVOk9AcOo', 'text'=>'Types de Stories, DoR & DoD'],
	],
];
// 💡 Templates et formats de rétrospectives
$retrospectives   = [
	'intro_html' => '💡 Retrouvez tous les templates de rétrospective sur mon site 👉 <a href="https://agileanddevopstoolkit.github.io/retro-templates/" target="_blank" rel="noopener">Retro Templates</a>.',
	'videos' => [
		['id'=>'wSJGMRr9vmw', 'text'=>'Je donne la méthode pour arriver générer des templates de rétrospective agile avec ChatGPT et Claude'],
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
		['id'=>'Rb33e-szups ', 'text'=>'Tuto : je crée une rétro sur le thème de la rentrée des classes'],
		['id'=>'U_o8g4ACgTk', 'text'=>'Tuto rétrospective Start/Stop/Continue'],
		['id'=>'9Uns3D6nOjE', 'text'=>'Je vous propose une rétrospective sur le thème d\'Halloween'],
		['id'=>'zofwz0iiaX8', 'text'=>'L\'IA génère des templates de rétrospectives sur le thème d\'Halloween'],
		['id'=>'TPRjzFR78bQ', 'text'=>'Test : que vaut Google Nano Banana sur la génération de templates de rétrospective ?'],
		['id'=>'Z5ujxT3MZVc', 'text'=>'Tuto Rétrospective 4L'],
		['id'=>'ZdEr54DIefg', 'text'=>'Tuto Mood Retrospective'],
	],
];
// 🎬 Démonstrations et conseils de démo
$demos            = [
	'intro_html' => '💡 Mon appli \'Bingo Démo\' pour évaluer une démo ou vous aider à préparer vos démos 👉 <a href="https://agileanddevopstoolkit.github.io/BingoDemo/" target="_blank" rel="noopener">Bingo Demo</a>.',
	'videos' => [
		['id'=>'ZOLOwiOJA0k', 'text'=>'3 Conseils pour réussir toutes vos démos'],
		['id'=>'K2VijLacVJQ', 'text'=>'Bingo Démo (pour réussir toutes vos démos)'],
	],
];
// ❓ Questions agiles courantes
$questions_agiles = [
	'intro_html' => '',
	'videos' => [
		['id'=>'twcUbV_Wh2g', 'text'=>'Différence entre Risque et Dépendance'],
		['id'=>'8nkLlRbT-2A ', 'text'=>'3 Conseils pour gérér une équipe dont tous les membres sont à temps partiel car partagés avec d\'autres équipes'],
		['id'=>'-ENxaTp2_0U', 'text'=>'L\'Agilité est-elle morte ?'],
	],
];
// 🛠️ DevOps et outils
$devops           = [
	'intro_html' => '',
	'videos' => [
		['id'=>'7MEj3jMiVic', 'text'=>'Je montre commen ChatGPT, Claude et Gemini peuvent générer des Release Notes à partir d\'un fichier gitlog'],
		['id'=>'ugj44kHM8HI', 'text'=>'Comment héberfer un petit site web  directement sur Github ?'],
		['id'=>'oM9IVh89dhg', 'text'=>'Générer des diagrammes de classes et les versionner dans GitHub automatiquement grâce à Mermaid et ChatGPT'],
		['id'=>'', 'text'=>'']
	],
];

// 📖 Glossaire A (entrées A)
$glossaire_a = [
	'intro_html' => '',
	'videos' => [
		['id'=>'7OA3USnZ3TU', 'text'=>'Agilité'],
		['id'=>'sd6FzRFEHGY', 'text'=>'Agilité à l\'Échelle'],
		'L6QMqTG5j1I', 'FxkqMh5mM24', 'MM3X7MvXYuQ'
	],
];
// 📖 Glossaire B (entrées B)
$glossaire_b = [
	'intro_html' => '',
	'videos' => ['5uNde1yFawk', '5TeeNfOffDc', '6jSZZ4XTcmg', 'WknLX4DEs1k'],
];

// 🧪 Benchmarks IA sur questions agiles
$ai_benchmark         = [
	'intro_html' => '',
	'videos' => [
		['id'=>'OChJUyU8dWk', 'text'=>'On teste ChatGPT, CLaude et Gemini sur 3 questions d\'agilité basiques'],
		['id'=>'dcxUaeH-z4Y ', 'text'=>'On teste ChatGPT, CLaude et Gemini sur 3 questions d\'agilité basiques'],
		['id'=>'0Fg0-ufPo_c ', 'text'=>'On essaye pour la première fois de faire générer des templates de rétrospectives agiles par ChatGPT, Claude et Gemini'],
		['id'=>'QimIFnkOCA4 ', 'text'=>'On teste ChatGPT, Claude et Gemini sur des questions relatives à la gestion de confits classiques agiles'],
		['id'=>'xX4FqB3eo1c', 'text'=>'On teste Perplexity pour la première fois, sur nos questions d\'agilité classiques'],
		['id'=>'e-WzAmTcbH0', 'text'=>'On teste ChatGPT, Claude, Gemini et Perplexity sur une question piège (comparer la performance de deux équipes agiles)'],
		['id'=>'8m3mw_AJC3g', 'text'=>'On teste ChatGPT, Claude, Gemini et Perplexity sur une question piège (une équipe qui a trop de PI objectives)'],
		['id'=>'Jg0Mlvs6oMY', 'text'=>'On teste DeepSeek pour la première fois, sur nos questions d\'agilité classiques'],
		['id'=>'OnPn_DEiu8A', 'text'=>'Résumé de tous les tests \'Agilité et IA\' déjà réalisés sur la chaîne et annonce des prochains tests'],
		['id'=>'WndMc3zyslU', 'text'=>'On teste Mistral (l\'IA made in France) pour la première fois, sur nos questions d\'agilité classiques'],
		['id'=>'KjQoTN35vx0', 'text'=>'On teste DeepSeek et Mistral sur les questions piège de l\'agilité'],
		['id'=>'VBl8HD9fmEU', 'text'=>'On teste Grok sur les questions d\agilité classiques'],
		['id'=>'2-N4yXsxI6k', 'text'=>'On teste Grok et Llama 3.2 en local sur les questions pièges de l\'agilité'],
		['id'=>'a7AkWmHmD3U', 'text'=>'On teste Llama 3.3 en local avec Ollama. Llama 3.3 est le plus gros LLM que je peux tester sur mon PC (70 milliards de paramètres)'],
		['id'=>'WSED-zz4AXY', 'text'=>'On fait un classement de toutes les IA qu\'on a testées sur la chaîne : ChatGPT, Claude, Gemini, Perplexity, DeepSeek, Mistral, Gamma, Ollama et Grok'],
		['id'=>'0wq97uCeKx4', 'text'=>'Je teste gpt-oss, le LLM libre d\'OpenAI (l\'éditeur de ChatGPT)'],
		['id'=>'msbehMVDFeA', 'text'=>'On teste la reconnaissance vocale (Speech to Text) de toutes les IA'],
	],
];
// 🤔 Réflexions sur l'IA et l'agilité
$ai_reflexion         = [
	'intro_html' => '',
	'videos' => [
		['id'=>'sCOcG4XvHiI', 'text'=>'L\'IA fait-elle gagner du temps ?'],
		['id'=>'RkGns4peGZo', 'text'=>'Pourquoi il faut s\'intéresser à l\'IA lorsque l\'on fait de la gestion de projet en général (et de l\'agilité en particulier) ?'],
		['id'=>'sYr-MnXurUY', 'text'=>'Description des Use Cases agiles pour lesquels l\'IA est efficace et rend service'],
		['id'=>'1pKth1Mk3Ss', 'text'=>'On crée un Custom GPT permettant de créer des templates de rétrospective à volonté et on se livre à une rélexion sur cette nouvelle pratique qu\'on peut assimiler à une nouvelle forme de développement informatique'],
		['id'=>'-sld7tBoCaQ', 'text'=>'J\'explique pourquoi ce que produit l\'IA n\'est jamais parfait et nécessite toujours des retouches'],
		['id'=>'MDLbvJp229I', 'text'=>'Je fais 6 prédictions sur les évolutions à 10 ans apportées par l\'IA'],
		['id'=>'3Nil-nXFUXc', 'text'=>'J\'explique pourquoi l\'IA ne progresse plus'],
		['id'=>'6G89qC8_jxQ', 'text'=>'3 façons dont l\'IA révolutionne la programmation'],
		['id'=>'5LoHfpywsD0', 'text'=>'Je vous explique en quoi l\'IA est un nouveau paradigme de programmation'],
		['id'=>'TBvkV607Tic', 'text'=>'J\'explique les différents composants techniques d\'une IA générative'],
		['id'=>'', 'text'=>''],
		['id'=>'', 'text'=>'']
	],
];
// ⭐ Les essentiels IA appliqués à l'agilité
$ai_essentiels        = [
	'intro_html' => '💡 Cette section est une sélection des vidéos essentielles de la chaîne sur l\'IA afin d\'en comprendre les enjeux et applications sans avoir à regarder toutes les vidéos IA de la chaîne.',
	'videos' => [
		['id'=>'OChJUyU8dWk', 'text'=>'On teste ChatGPT, CLaude et Gemini sur 3 questions d\'agilité basiques'],
		['id'=>'7MEj3jMiVic', 'text'=>'Je montre commen ChatGPT, Claude et Gemini peuvent générer des Release Notes à partir d\'un fichier gitlog'],
		['id'=>'sCOcG4XvHiI', 'text'=>'L\'IA fait-elle gagner du temps ?'],
		['id'=>'_WVWZ93FaSI', 'text'=>'ChatGPT présente les slides d\'une review à l\'oral (synthèse vocale, text to speech)'],
		['id'=>'OnPn_DEiu8A', 'text'=>'Résumé de tous les tests \'Agilité et IA\' déjà réalisés sur la chaîne et annonce des prochains tests'],
		['id'=>'RkGns4peGZo', 'text'=>'Pourquoi il faut s\'intéresser à l\'IA lorsque l\'on fait de la gestion de projet en général (et de l\'agilité en particulier) ?'],
		['id'=>'qhCH237rC9c', 'text'=>'On installe Ollama en local et on teste le modèle Llama 3.2 sur les questions d\'agilité classiques'],
		['id'=>'XaUYdbCj6UM', 'text'=>'On demande à l\'IA de générer les slides d\'une présentation. On teste ChatGPT et Gamma, une IA spécialisée dans la génération de présentations'],
		['id'=>'wSJGMRr9vmw', 'text'=>'Je donne la méthode pour arriver générer des templates de rétrospective agile avec ChatGPT et Claude'],
		['id'=>'yUjk4CKtBpw', 'text'=>'J\'explique et je fais une démo du concept de Custom GPT'],
		['id'=>'KoXADH7j7aA', 'text'=>'Vibe Coding : on code une application de quiz avec ChatGPT et en utilisant le Speech to Text (Synthèse vocale)'],
		['id'=>'sYr-MnXurUY', 'text'=>'Description des Use Cases agiles pour lesquels l\'IA est efficace et rend service'],
		['id'=>'YnaGphNTMio', 'text'=>'Vibe Coding : on fait programmer l\'IA afin de crééer une petit application "Roue des prénoms" afin de tirer au sort un participant dans une réunion'],
		['id'=>'a7AkWmHmD3U', 'text'=>'On teste Llama 3.3 en local avec Ollama. Llama 3.3 est le plus gros LLM que je peux tester sur mon PC (70 milliards de paramètres)'],
		['id'=>'KoXADH7j7aA', 'text'=>'Vibe Coding : on code une application de quiz avec ChatGPT et en utilisant le Speech to Text (Synthèse vocale)'],
		['id'=>'o4GNGGG7Op4', 'text'=>'Je génère le diagramme de classes Mermaid d\'une application à l\'aide de ChatGPT, à partir d\'un dump SQL de la structure de base de données, ou bien des fichiers Entity de l\'application'],
		['id'=>'1pKth1Mk3Ss', 'text'=>'L\'usine à rétros : je crée un Custom GPT qui génère des templates de rétrospectives à la demande'],
		['id'=>'MalpJyAwsiI', 'text'=>'J\'explique ce qu\'est une API et j\'explique la particularité des APIs de LLM. Je fait une petite démostration de call API à l\'API ChatGPT'],
		['id'=>'-sld7tBoCaQ', 'text'=>'J\'explique pourquoi ce que produit l\'IA n\'est jamais parfait et nécessite toujours des retouches'],
		['id'=>'MDLbvJp229I', 'text'=>'Je fais 6 prédictions sur les évolutions à 10 ans apportées par l\'IA'],
		['id'=>'3Nil-nXFUXc', 'text'=>'J\'explique pourquoi l\'IA ne progresse plus'],
		['id'=>'6G89qC8_jxQ', 'text'=>'3 façons dont l\'IA révolutionne la programmation'],
		['id'=>'5LoHfpywsD0', 'text'=>'Je vous explique en quoi l\'IA est un nouveau paradigme de programmation'],
		['id'=>'msbehMVDFeA', 'text'=>'On teste la reconnaissance vocale (Speech to Text) de toutes les IA'],
		['id'=>'TBvkV607Tic', 'text'=>'J\'explique les différents composants techniques d\'une IA générative'],
		['id'=>'', 'text'=>'']
	],
];
// 🎨 Templates de rétro générés par IA
$ai_retro_templates   = [
	'intro_html' => '',
	'videos' => [
		['id'=>'FI1OlBZ-HaE', 'text'=>'6 mois après notre premier test on refait un test de génération de templates de rétrospective avec ChatGPT, Claude et Gemini afin de voir si l\'IA a fait des progrès'],
		['id'=>'zofwz0iiaX8', 'text'=>'L\'IA génère des templates de rétrospectives sur le thème d\'Halloween'],
		['id'=>'TPRjzFR78bQ', 'text'=>'Test : que vaut Google Nano Banana sur la génération de templates de rétrospective ?'],
		['id'=>'', 'text'=>''],
		['id'=>'', 'text'=>''],
		['id'=>'', 'text'=>''],
		['id'=>'', 'text'=>''],
		['id'=>'', 'text'=>''],
		['id'=>'', 'text'=>''],
		['id'=>'', 'text'=>'']
	],
];
// 🗂️ Synthèse et génération de documents
$ai_synthese          = [
	'intro_html' => '',
	'videos' => [
		['id'=>'7MEj3jMiVic', 'text'=>'Je montre comment ChatGPT, Claude et Gemini peuvent générer des Release Notes à partir d\'un fichier gitlog'],
		['id'=>'XaUYdbCj6UM', 'text'=>'On demande à l\'IA de générer les slides d\'une présentation. On teste ChatGPT et Gamma, une IA spécialisée dans la génération de présentations'],
		['id'=>'Ea3jXVh72RA', 'text'=>'On fait générer le contenu de slides par ChatGPT et je montre comment poser la question et copier/coller rapidement le résultat dans Google Slides'],
		['id'=>'wSJGMRr9vmw', 'text'=>'Je donne la méthode pour arriver générer des templates de rétrospective agile avec ChatGPT et Claude'],
		['id'=>'tAPmKfrH7oE ', 'text'=>'Tuto : Comment dessiner ses templates de rétrospective avec ChatGPT ?'],
		['id'=>'TxtN4g0ZmPI', 'text'=>'Renaud, architecte logiciel nous montre comment on peut générer divers types de diagrammes avec ChatGPT et Mermaid'],
		['id'=>'o4GNGGG7Op4', 'text'=>'Je génère le diagramme de classes Mermaid d\'une application à l\'aide de ChatGPT, à partir d\'un dump SQL de la structure de base de données, ou bien des fichiers Entity de l\'application'],
		['id'=>'', 'text'=>''],
		['id'=>'', 'text'=>''],
		['id'=>'', 'text'=>'']
	],
];
// 🎥 Présentation de documents et slides
$ai_presentation_docs = [
	'intro_html' => '',
	'videos' => [
		['id'=>'_WVWZ93FaSI', 'text'=>'ChatGPT présente les slides d\'une review à l\'oral (synthèse vocale, text to speech)'],
		['id'=>'', 'text'=>''],
		['id'=>'', 'text'=>''],
		['id'=>'', 'text'=>''],
		['id'=>'', 'text'=>''],
		['id'=>'', 'text'=>''],
		['id'=>'', 'text'=>''],
		['id'=>'', 'text'=>''],
		['id'=>'', 'text'=>'']
	],
];
// 💻 IA locale et modèles on-prem
$ai_locale            = [
	'intro_html' => '',
	'videos' => [
		['id'=>'qhCH237rC9c', 'text'=>'On installe Ollama en local et on teste le modèle Llama 3.2 sur les questions d\'agilité classiques'],
		['id'=>'a7AkWmHmD3U', 'text'=>'On teste Llama 3.3 en local avec Ollama. Llama 3.3 est le plus gros LLM que je peux tester sur mon PC (70 milliards de paramètres)'],
		['id'=>'', 'text'=>''],
		['id'=>'', 'text'=>''],
		['id'=>'', 'text'=>''],
		['id'=>'', 'text'=>''],
		['id'=>'', 'text'=>''],
		['id'=>'', 'text'=>''],
		['id'=>'', 'text'=>'']
	],
];
// 🧩 Custom GPTs et agents dédiés
$ai_custom_gpts       = [
	'intro_html' => '',
	'videos' => [
		['id'=>'yUjk4CKtBpw', 'text'=>'J\'explique et je fais une démo du concept de Custom GPT'],
		['id'=>'1pKth1Mk3Ss', 'text'=>'On crée un Custom GPT permettant de créer des templates de rétrospective à volonté et on se livre à une rélexion sur cette nouvelle pratique qu\'on peut assimiler à une nouvelle forme de développement informatique'],
		['id'=>'', 'text'=>''],
		['id'=>'', 'text'=>''],
		['id'=>'', 'text'=>''],
		['id'=>'', 'text'=>''],
		['id'=>'', 'text'=>''],
		['id'=>'', 'text'=>''],
		['id'=>'', 'text'=>'']
	],
];
// 🎧 Vibe Coding et développement assisté
$ai_vibe_coding       = [
	'intro_html' => '',
	'videos' => [
		['id'=>'YnaGphNTMio', 'text'=>'Vibe Coding : on fait programmer l\'IA afin de crééer une petit application "Roue des prénoms" afin de tirer au sort un participant dans une réunion'],
		['id'=>'KoXADH7j7aA', 'text'=>'Vibe Coding : on code une application de quiz avec ChatGPT et en utilisant le Speech to Text (Synthèse vocale)'],
		['id'=>'Ii_JgY4HaTw', 'text'=>'Vibe Coding : On crée une petite application pour faire des estimations agiles avec la méthode Extreme Quotation. On utilise ChatGPT et la synthèse vocal (Speech to texte)'],
		['id'=>'R2gwP62BKCY', 'text'=>'Vibe Coding : on améliore l\'application pour les estimations agiles et en même temps on se livre à une petite réflexion sur cette nouvelle pratique de développement (le Vibe Coding)'],
		['id'=>'_J655DHocxk', 'text'=>'Vibe Coding : on améliore la roue des prénoms'],
		['id'=>'oZ0jPkYszbg', 'text'=>'Vibe coding d\'une mini appli de Burndown Chart (ChatGPT, Synthèse vocale)'],
		['id'=>'', 'text'=>''],
		['id'=>'', 'text'=>''],
		['id'=>'', 'text'=>'']
	],
];
// 🎙️ Speech to Text et voix
$ai_speech_to_text    = [
	'intro_html' => '',
	'videos' => [
		['id'=>'RFOYhx8D0jM', 'text'=>'Démonstration de la fonctionnalité de Speech to Text (reconaissance vocale) de ChatGPT'],
		['id'=>'KoXADH7j7aA', 'text'=>'Vibe Coding : on code une application de quiz avec ChatGPT et en utilisant le Speech to Text (Synthèse vocale)'],
		['id'=>'Ii_JgY4HaTw', 'text'=>'Vibe Coding : On crée une petite application pour faire des estimations agiles avec la méthode Extreme Quotation. On utilise ChatGPT et la synthèse vocal (Speech to texte)'],
		['id'=>'', 'text'=>''],
		['id'=>'', 'text'=>''],
		['id'=>'', 'text'=>''],
		['id'=>'', 'text'=>''],
		['id'=>'', 'text'=>''],
		['id'=>'', 'text'=>''],
		['id'=>'', 'text'=>''],
		['id'=>'', 'text'=>'']
	],
];
// 🔌 APIs de LLM et intégrations
$ai_apis_llm          = [
	'intro_html' => '',
	'videos' => [
		['id'=>'MalpJyAwsiI', 'text'=>'J\'explique ce qu\'est une API et j\'explique la particularité des APIs de LLM. Je fait une petite démostration de call API à l\'API ChatGPT'],
		['id'=>'qNG42lR2wMc', 'text'=>'Tuto pour faire des calls API ChatGPT'],
		['id'=>'', 'text'=>''],
		['id'=>'', 'text'=>''],
		['id'=>'', 'text'=>''],
		['id'=>'', 'text'=>''],
		['id'=>'', 'text'=>''],
		['id'=>'', 'text'=>''],
		['id'=>'', 'text'=>'']
	],
];

// 🌟 Specials (sélections spéciales)
$specials         = [
	'intro_html' => '',
	'videos' => [
		['id'=>'DOIwOiOvyv8', 'text'=>'Vidéo anniversaire 1 an de la chaîne'],
		['id'=>'7Gg44-PbNIQ', 'text'=>'Je présente ce site web Agile Toolkit Hub'],
		['id'=>'cHTKD-KoAko', 'text'=>'Mon retour d\'expérience sur la conférence Agile en Seine 2025'],
	],
];
