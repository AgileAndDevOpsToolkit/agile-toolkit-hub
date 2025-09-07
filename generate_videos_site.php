<?php
/**
 * Génère plusieurs pages statiques HTML à partir des IDs dans video_ids.php.
 * - index.html affiche la section "Cours sur l'Agilité à l'Échelle" (par défaut).
 * - Une page par section est générée uniquement si elle contient des vidéos.
 * - Les sous-sections vides sont masquées.
 *
 * Usage : php generate_videos.php
 */

require __DIR__ . '/video_ids.php';

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
function hasVideos(array $arr): bool { return count(normalizeVideos($arr)) > 0; }

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

function cssStyles(): string {
    return <<<'CSS'
    :root{
      --bg: #f7f8fb;
      --card: #ffffff;
      --muted: #5b6778;
      --text: #1a2433;
      --accent: #2e6cff;
      --border: #e6e9ef;
      --radius: 16px;
      --maxw: 1200px;
    }
    *{box-sizing:border-box}
    html,body{margin:0;padding:0;background:var(--bg);color:var(--text);font:16px/1.55 system-ui,-apple-system,Segoe UI,Roboto,Ubuntu,"Helvetica Neue",Arial,"Noto Sans"}
    a{color:var(--accent);text-decoration:none}
    a:hover{text-decoration:underline}

    .wrap{max-width:var(--maxw);margin-inline:auto;padding:24px}
    header{position:sticky;top:0;background:rgba(255,255,255,.92);backdrop-filter:saturate(140%) blur(8px);z-index:10;border-bottom:1px solid var(--border)}
    header .wrap{display:flex;gap:12px;align-items:center;justify-content:space-between;padding-block:12px}
    .title{font-weight:700;letter-spacing:.2px;white-space:nowrap}

    /* Nav visible mobile : scroll horizontal */
    nav{display:flex;flex-wrap:nowrap;gap:10px;overflow-x:auto;scrollbar-width:none;-webkit-overflow-scrolling:touch}
    nav::-webkit-scrollbar{display:none}
    nav a{
      flex:0 0 auto;
      padding:6px 12px;border-radius:999px;background:#f0f4ff;border:1px solid #c9d6ff;
      color:#214bbb;font-weight:500;white-space:nowrap
    }
    nav a[aria-current="page"]{
      background:var(--accent);border-color:var(--accent);color:#fff;font-weight:700;
      box-shadow:0 0 0 3px rgba(46,108,255,.18) inset;text-decoration:none
    }

    main{padding-top:8px}
    section{margin:28px auto;padding:20px;background:var(--card);border:1px solid var(--border);border-radius:var(--radius);box-shadow:0 1px 0 #fff inset, 0 8px 20px rgba(10,20,40,.05)}
    h2,h3{margin:0 0 6px}
    h2{font-size:1.35rem}
    h3{font-size:1.1rem;color:#2a3a55}
    .section-head{display:block}
    .section-body{margin-top:10px}
    .subsection{margin-top:18px;padding-top:12px;border-top:1px dashed var(--border)}
    .note{margin:8px 0 0;color:var(--muted)}
    .links{margin:6px 0 0 18px}

    /* Grille responsive : 3 cols desktop, 2 cols tablette, 1 col mobile */
    .grid{display:grid;gap:16px;grid-template-columns:repeat(auto-fill,minmax(340px,1fr));margin-top:12px}
    @media (max-width: 900px){
      .grid{grid-template-columns:repeat(auto-fill,minmax(300px,1fr))}
    }
    @media (max-width: 600px){
      .grid{grid-template-columns:1fr}
    }

    .tile{display:flex;flex-direction:column;gap:8px}
    .video{position:relative;border-radius:12px;overflow:hidden;border:1px solid var(--border);background:#f5f7fb;aspect-ratio:16/9}
    .video iframe{width:100%;height:100%;border:0;display:block;background:#000}
    .caption{font-size:.92rem;color:#2a3a55;background:#f9fbff;border:1px solid var(--border);border-radius:10px;padding:8px 10px}

    @supports not (aspect-ratio: 16/9){
      .video{padding-top:56.25%}
      .video iframe{position:absolute;inset:0}
    }

    footer{color:var(--muted);text-align:center;margin:32px 0 50px}

    /* --- Améliorations mobile --- */
    @media (max-width:900px){
      /* Titre sur sa propre ligne, menu en dessous */
      header .wrap{flex-direction:column;align-items:flex-start;gap:8px}
      .title{font-size:1.1rem}
      nav{width:100%}
    }
    @media (max-width:600px){
      /* Sous-sections plus visibles */
      .subsection h3{
        display:inline-block;
        font-size:1.2rem;
        font-weight:700;
        background:#eaf1ff;
        color:#153a8a;
        padding:8px 12px;
        border-radius:12px;
        border:1px solid #c9d6ff;
        margin:6px 0 4px;
      }
      .wrap{padding:16px}
    }
CSS;
}

function navHtml(array $navItems, string $currentSlug): string {
    $links = [];
    foreach ($navItems as $it) {
        $attr = ($it['slug'] === $currentSlug) ? ' aria-current="page"' : '';
        $links[] = '<a href="'.e($it['href']).'"'.$attr.'>'.e($it['label']).'</a>';
    }
    return implode("\n        ", $links);
}

function pageShell(string $currentSlug, string $pageTitle, string $mainHtml, array $navItems, string $generatedAt): string {
    $nav = navHtml($navItems, $currentSlug);
    $css = cssStyles();
    $docTitle = 'Agile Toolkit Hub — ' . $pageTitle; // <title>
    return '<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>'.e($docTitle).'</title>
  <meta name="description" content="Catalogue vidéo Agile Toolkit Hub (pages statiques par section)." />
  <style>'.$css.'</style>
</head>
<body>
  <header>
    <div class="wrap">
      <div class="title">🎬 Agile Toolkit Hub</div>
      <nav aria-label="Sections">
        '.$nav.'
      </nav>
    </div>
  </header>
  <main class="wrap">
    '.$mainHtml.'
    <footer>© Agile Toolkit — Pages statiques HTML/CSS générées par PHP · Généré le '.e($generatedAt).'</footer>
  </main>
</body>
</html>';
}

/* =======================
 * Données des sections
 * ======================= */

$sections = [
    'agile-scale' => [
        'label' => "Agilité à l'Échelle",
        'title' => "Cours sur l'Agilité à l'Échelle",
        'type'  => 'simple',
        'data'  => $agile_scale,
        'filename' => 'index.html', // page d'accueil
    ],
    'retrospectives' => [
        'label' => 'Rétrospectives',
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
    if ($slug === 'agile-scale' || $has) { $pagesToGenerate[$slug] = true; }
}

$navItems = [];
foreach ($sections as $slug => $cfg) {
    if (!isset($pagesToGenerate[$slug])) continue;
    $href = ($slug === 'agile-scale') ? 'index.html' : $cfg['filename'];
    $navItems[] = ['slug'=>$slug, 'label'=>$cfg['label'], 'href'=>$href];
}

/* =======================
 * Rendu des pages
 * ======================= */

function sectionBlockHtml(string $title, array $ids): string {
    $html  = '<section>';
    $html .= '<div class="section-head"><h2>'.e($title).'</h2></div>';
    $html .= '<div class="section-body">';
    $html .= "<!--\n  <p class=\"note\">Commentaire court sur \"".e($title)."\".</p>\n  <ul class=\"links\">\n    <li><a href=\"#\">Lien utile</a></li>\n  </ul>\n-->\n";
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
        $html .= gridHtml($ids) . '</div></div>';
    }
    return $html;
}
function aiPageBody(array $sub): string {
    $html  = '<section><div class="section-head"><h2>Agilité et IA</h2></div></section>';
    foreach ($sub as $label => $ids) {
        if (!hasVideos($ids)) continue;
        $html .= '<div class="subsection"><h3>'.e($label).'</h3><div class="section-body">';
        $html .= "<!--\n  <p class=\"note\">Commentaire court pour \"".e($label)."\".</p>\n  <ul class=\"links\">\n    <li><a href=\"#\">Lien</a></li>\n  </ul>\n-->\n";
        $html .= gridHtml($ids) . '</div></div>';
    }
    return $html;
}

/* Écriture des fichiers */
$written = [];
$generatedAt = date('d/m/Y H:i');

foreach ($sections as $slug => $cfg) {
    if (!isset($pagesToGenerate[$slug])) continue;

    $filename = ($slug === 'agile-scale') ? 'index.html' : $cfg['filename'];
    if ($cfg['type'] === 'simple') {
        $body = sectionBlockHtml($cfg['title'], $cfg['data']);
    } elseif ($cfg['type'] === 'glossaire') {
        $body = glossairePageBody($cfg['sub']);
    } else {
        $body = aiPageBody($cfg['sub']);
    }

    $html = pageShell($slug, $cfg['title'], $body, $navItems, $generatedAt);
    $path = __DIR__ . '/' . $filename;
    if (file_put_contents($path, $html) === false) {
        fwrite(STDERR, "Erreur: impossible d'écrire $filename\n"); exit(1);
    }
    $written[] = $filename;
}

echo "Généré : ".implode(', ', $written)." (".$generatedAt.")\n";
