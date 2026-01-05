<?php
/**
 * Génère plusieurs pages statiques HTML à partir des IDs dans video_ids.php.
 * - index.html affiche la section "Cours sur l'Agilité à l'Échelle" (par défaut).
 * - Une page par section est générée uniquement si elle contient des vidéos.
 * - Les sous-sections vides sont masquées.
 *
 * Usage : php generate_videos.php
 * Sortie : ../ (racine du dépôt, servie par GitHub Pages configurée sur la racine)
 */

require __DIR__ . '/video_ids.php';

// Dossier de sortie : racine du dépôt (GitHub Pages configuré sur la racine)
$outputDir = realpath(__DIR__ . '/..') ?: (__DIR__ . '/..');

// Footer commun (chargé depuis includes/footer.html pour éviter la duplication)
$footerPath = realpath(__DIR__ . '/../includes/footer.html');
$footerHtml = ($footerPath && is_file($footerPath))
    ? file_get_contents($footerPath)
    : '<footer>© Agile Toolkit — Pages statiques HTML/CSS générées par PHP</footer>';

/* =======================
 * Utils
 * ======================= */

function e(string $s): string { return htmlspecialchars($s, ENT_QUOTES, 'UTF-8'); }

function normalizeVideos(array $arr): array {
    // Transforme chaque entrée en ['id'=>..., 'text'=>...]
    $out = [];
    foreach ($arr as $item) {
        if (is_array($item) && isset($item['id'])) {
            $id = trim((string)$item['id']);
            $text = isset($item['text']) ? (string)$item['text'] : '';
        } elseif (is_string($item)) {
            $id = trim($item);
            $text = '';
        } else {
            continue;
        }
        if ($id !== '') {
            $out[] = ['id' => $id, 'text' => $text];
        }
    }
    return $out;
}

function videosFromSection($data): array {
    // Accepte soit un tableau plat de vidéos, soit ['videos'=>[...]]
    $raw = (is_array($data) && array_key_exists('videos', $data)) ? $data['videos'] : $data;
    return is_array($raw) ? normalizeVideos($raw) : [];
}

function introFromSection($data): string {
    if (!is_array($data)) return '';
    if (isset($data['intro_html'])) return (string)$data['intro_html'];
    if (isset($data['intro'])) return (string)$data['intro'];
    return '';
}

function hasVideos($data): bool { return count(videosFromSection($data)) > 0; }

function gridHtml(array $ids): string {
    $videos = normalizeVideos($ids);
    if (empty($videos)) return '';
    $out = '<div class="grid">';
    foreach ($videos as $v) {
        $id   = e($v['id']);
        $text = trim($v['text']);
        $out .= '<div class="tile">';
        $out .= '  <div class="video"><iframe loading="lazy" src="https://www.youtube.com/embed/'.$id.'" title="YouTube video" allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe></div>';
        if ($text !== '') {
            $out .= '  <div class="caption">'.e($text).'</div>';
        }
        $out .= '</div>';
    }
    return $out . '</div>';
}

function navHtml(array $navItems, string $currentSlug): string {
    $links = [];
    foreach ($navItems as $it) {
        $attr = ($it['slug'] === $currentSlug) ? ' aria-current="page"' : '';
        $links[] = '<a href="'.e($it['href']).'"'.$attr.'>'.e($it['label']).'</a>';
    }
    return implode("\n        ", $links);
}

function pageShell(string $currentSlug, string $pageTitle, string $mainHtml, array $navItems, string $generatedAt, string $footerHtml): string {
    $nav = navHtml($navItems, $currentSlug);
    $docTitle = 'Agile Toolkit Hub — ' . $pageTitle; // <title>
    return '<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>'.e($docTitle).'</title>
  <meta name="description" content="Catalogue vidéo Agile Toolkit Hub (pages statiques par section)." />
    <link rel="stylesheet" href="includes/style.css" />
</head>
<body>
  <header>
    <div class="wrap">
        <a class="brand-btn" href="index.html"'.($currentSlug === 'home' ? ' aria-current="page"' : '').'><img src="assets/hub_icon.png" alt="Logo Agile Toolkit" loading="lazy" />Agile Toolkit Hub</a>
      <nav aria-label="Sections">
        '.$nav.'
      </nav>
    </div>
  </header>
  <main class="wrap">
        '.$mainHtml.'
        '.str_replace('{generated_at}', e($generatedAt), $footerHtml).'
  </main>
</body>
</html>';
}

/* =======================
 * Données des sections
 * ======================= */

$sections = [
    'home' => [
        'label' => 'Accueil',
        'title' => 'Les dernières vidéos ajoutées',
        'type'  => 'simple',
        'data'  => $home,
        'filename' => 'index.html', // page d'accueil
    ],
    'agile-scale' => [
        'label' => "Agilité à l'Échelle",
        'title' => "Cours sur l'Agilité à l'Échelle",
        'type'  => 'simple',
        'data'  => $agile_scale,
        'filename' => 'agile-a-lechelle.html',
    ],
    'retrospectives' => [
        'label' => 'Rétros',
        'title' => 'Rétrospectives',
        'type'  => 'simple',
        'data'  => $retrospectives,
        'filename' => 'retrospectives.html',
    ],
    'demos' => [
        'label' => 'Démos',
        'title' => 'Démos',
        'type'  => 'simple',
        'data'  => $demos,
        'filename' => 'demos.html',
    ],
    'questions-agiles' => [
        'label' => 'Questions Agiles',
        'title' => 'Questions Agiles',
        'type'  => 'simple',
        'data'  => $questions_agiles,
        'filename' => 'questions-agiles.html',
    ],
    'devops' => [
        'label' => 'DevOps',
        'title' => 'DevOps',
        'type'  => 'simple',
        'data'  => $devops,
        'filename' => 'devops.html',
    ],
    'glossaire' => [
        'label' => 'Glossaire',
        'title' => "Glossaire de l'agilité",
        'type'  => 'glossaire',
        'sub'   => [
            'A' => $glossaire_a,
            'B' => $glossaire_b,
        ],
        'filename' => 'glossaire.html',
    ],
    'agilite-ia' => [
        'label' => 'Agilité & IA',
        'title' => 'Agilité et IA',
        'type'  => 'ai',
        'sub'   => [
            'Benchmark IA'                              => $ai_benchmark,
            "Réflexion sur l'IA"                        => $ai_reflexion,
            'IA : les Essentiels'                       => $ai_essentiels,
            'Génération de templates de Rétrospectives Agiles' => $ai_retro_templates,
            'Synthèse de Documents et diagrammes'       => $ai_synthese,
            'Présentation de Documents'                 => $ai_presentation_docs,
            "Mise en place d'une IA locale"             => $ai_locale,
            'Custom GPTs'                               => $ai_custom_gpts,
            'Vibe Coding'                               => $ai_vibe_coding,
            'Speech to Text'                            => $ai_speech_to_text,
            'APIs de LLM'                               => $ai_apis_llm,
        ],
        'filename' => 'agilite-ia.html',
    ],
    'specials' => [
        'label' => 'Specials',
        'title' => 'Specials',
        'type'  => 'simple',
        'data'  => $specials,
        'filename' => 'specials.html',
    ],
];

/* =======================
 * Pages à générer + nav
 * ======================= */

$pagesToGenerate = [];
foreach ($sections as $slug => $cfg) {
    $type = $cfg['type'];
    $has  = false;
    if ($type === 'simple') {
        $has = hasVideos($cfg['data']);
    } else {
        foreach ($cfg['sub'] as $arr) { if (hasVideos($arr)) { $has = true; break; } }
    }
    if ($slug === 'home' || $slug === 'agile-scale' || $slug === 'specials' || $has) { $pagesToGenerate[$slug] = true; }
}

$navItems = [];
foreach ($sections as $slug => $cfg) {
    if (!isset($pagesToGenerate[$slug])) continue;
    if ($slug === 'home') continue; // bouton home géré par le logo
    $href = $cfg['filename'];
    $navItems[] = ['slug'=>$slug, 'label'=>$cfg['label'], 'href'=>$href];
}

/* =======================
 * Rendu des pages
 * ======================= */

function sectionBlockHtml(string $title, array $ids, string $introHtml = ''): string {
    $html  = '<section>';
    $html .= '<div class="section-head"><h2>'.e($title).'</h2></div>';
    $html .= '<div class="section-body">';
    if (trim($introHtml) !== '') {
        $html .= '<p class="note intro">'.$introHtml.'</p>';
    }
    $grid = gridHtml($ids);
    $html .= ($grid === '') ? '<p class="note">Aucune vidéo pour le moment.</p>' : $grid;
    $html .= '</div></section>';
    return $html;
}
function glossairePageBody(array $sub): string {
    $html  = '<section><div class="section-head"><h2>Glossaire de l\'agilité</h2></div></section>';
    foreach ($sub as $label => $ids) {
        if (!hasVideos($ids)) continue;
        $html .= '<div class="subsection"><h3>'.e($label).'</h3><div class="section-body">';
        $html .= "<!--\n  <p class=\"note\">Commentaire court pour \"".e($label)."\".</p>\n  <ul class=\"links\">\n    <li><a href=\"#\">Lien</a></li>\n  </ul>\n-->\n";
        $html .= gridHtml(videosFromSection($ids)) . '</div></div>';
    }
    return $html;
}
function aiPageBody(array $sub): string {
    $html  = '<section><div class="section-head"><h2>Agilité et IA</h2></div></section>';
    foreach ($sub as $label => $ids) {
        if (!hasVideos($ids)) continue;
        $html .= '<div class="subsection"><h3>'.e($label).'</h3><div class="section-body">';
        $intro = introFromSection($ids);
        if (trim($intro) !== '') {
            $html .= '<p class="note intro">'.$intro.'</p>';
        }
        $html .= gridHtml(videosFromSection($ids)) . '</div></div>';
    }
    return $html;
}

/* Écriture des fichiers */
$written = [];
$generatedAt = date('d/m/Y H:i');

foreach ($sections as $slug => $cfg) {
    if (!isset($pagesToGenerate[$slug])) continue;

    $filename = $cfg['filename'];
    if ($cfg['type'] === 'simple') {
        $body = sectionBlockHtml(
            $cfg['title'],
            videosFromSection($cfg['data']),
            introFromSection($cfg['data'])
        );
    } elseif ($cfg['type'] === 'glossaire') {
        $body = glossairePageBody($cfg['sub']);
    } else {
        $body = aiPageBody($cfg['sub']);
    }

    $html = pageShell($slug, $cfg['title'], $body, $navItems, $generatedAt, $footerHtml);
    $path = $outputDir . '/' . $filename;
    if (file_put_contents($path, $html) === false) {
        fwrite(STDERR, "Erreur: impossible d'écrire $filename\n"); exit(1);
    }
    $written[] = $filename;
}

echo "Généré : ".implode(', ', $written)." (".$generatedAt.")\n";
