<?php
/**
 * Génère un fichier index.html statique (écrasé si présent).
 * Usage: php generate_videos.php
 */

require __DIR__ . '/video_ids.php';

/* ---------- Utils ---------- */
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
function hasVideos(array $arr): bool {
    return count(normalizeVideos($arr)) > 0;
}

function gridHtml(array $ids): string {
    $videos = normalizeVideos($ids);
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

function sectionHtml(string $anchor, string $title, array $ids): string {
    if (!hasVideos($ids)) return '';
    $out  = '<section id="'.e($anchor).'">';
    $out .= '<div class="section-head"><h2>'.e($title).'</h2></div>';
    $out .= '<div class="section-body">';
    // modèle de commentaire (invisible)
    $out .= "<!--\n  <p class=\"note\">Commentaire court sur \"".e($title)."\".</p>\n  <ul class=\"links\">\n    <li><a href=\"#\">Lien utile</a></li>\n  </ul>\n-->\n";
    $out .= gridHtml($ids);
    $out .= '</div></section>';
    return $out;
}
function subsectionOpen(string $title): string {
    return '<div class="subsection"><h3>'.e($title).'</h3><div class="section-body">' .
           "<!--\n  <p class=\"note\">Commentaire court pour \"".e($title)."\".</p>\n  <ul class=\"links\">\n    <li><a href=\"#\">Lien</a></li>\n  </ul>\n-->\n";
}
function subsectionClose(): string { return '</div></div>'; }

/* ---------- Corps HTML ---------- */
$html = <<<HTML
<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Agile Toolkit Hub</title>
  <meta name="description" content="Page statique listant les vidéos de la chaîne YouTube Agile Toolkit, organisée par thèmes et sous-thèmes." />
  <style>
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
    header{position:sticky;top:0;background:rgba(255,255,255,.85);backdrop-filter:saturate(140%) blur(8px);z-index:10;border-bottom:1px solid var(--border)}
    header .wrap{display:flex;gap:16px;align-items:center;justify-content:space-between;padding-block:14px}
    .title{font-weight:700;letter-spacing:.2px}
    nav{display:flex;flex-wrap:wrap;gap:10px}
    nav a{padding:6px 10px;border-radius:999px;background:#f0f4ff;border:1px solid #c9d6ff}
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

    /* --- Grille 3 colonnes (embeds plus grands) --- */
    .grid{display:grid;gap:16px;grid-template-columns:repeat(auto-fill,minmax(340px,1fr));margin-top:12px}

    .tile{display:flex;flex-direction:column;gap:8px}
    .video{position:relative;border-radius:12px;overflow:hidden;border:1px solid var(--border);background:#f5f7fb;aspect-ratio:16/9}
    .video iframe{width:100%;height:100%;border:0;display:block;background:#000}
    .caption{font-size:.92rem;color:#2a3a55;background:#f9fbff;border:1px solid var(--border);border-radius:10px;padding:8px 10px}

    @supports not (aspect-ratio: 16/9){
      .video{padding-top:56.25%}
      .video iframe{position:absolute;inset:0}
    }
    footer{color:var(--muted);text-align:center;margin:32px 0 50px}
    @media (max-width:480px){
      .wrap{padding:18px}
      nav{display:none}
    }
  </style>
</head>
<body>
  <header>
    <div class="wrap">
      <div class="title">🎬 Agile Toolkit Hub</div>
      <nav aria-label="Sections">
        <a href="#agile-scale">Agilité à l'Échelle</a>
        <a href="#retrospectives">Rétrospectives</a>
        <a href="#demos">Démos</a>
        <a href="#questions-agiles">Questions Agiles</a>
        <a href="#glossaire">Glossaire</a>
        <a href="#devops">DevOps</a>
        <a href="#agilite-ia">Agilité & IA</a>
      </nav>
    </div>
  </header>
  <main class="wrap">
HTML;

/* ---------- Sections simples ---------- */
$html .= sectionHtml('agile-scale', "Cours sur l'Agilité à l'Échelle", $agile_scale);
$html .= sectionHtml('retrospectives', 'Rétrospectives', $retrospectives);
$html .= sectionHtml('demos', 'Démos', $demos);
$html .= sectionHtml('questions-agiles', 'Questions Agiles', $questions_agiles);
$html .= sectionHtml('devops', 'DevOps', $devops);

/* ---------- Glossaire (affiché seulement si non vide) ---------- */
if (hasVideos($glossaire_a) || hasVideos($glossaire_b)) {
    $html .= '<section id="glossaire"><div class="section-head"><h2>Glossaire de l\'agilité</h2></div>';
    if (hasVideos($glossaire_a)) {
        $html .= subsectionOpen('A') . gridHtml($glossaire_a) . subsectionClose();
    }
    if (hasVideos($glossaire_b)) {
        $html .= subsectionOpen('B') . gridHtml($glossaire_b) . subsectionClose();
    }
    $html .= '</section>';
}

/* ---------- Agilité & IA (affiché seulement si au moins une sous-section) ---------- */
$ai_sections = [
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
];
$any_ai = false;
foreach ($ai_sections as $arr) { if (hasVideos($arr)) { $any_ai = true; break; } }
if ($any_ai) {
    $html .= '<section id="agilite-ia"><div class="section-head"><h2>Agilité et IA</h2></div>';
    foreach ($ai_sections as $label => $arr) {
        if (!hasVideos($arr)) continue;
        $html .= subsectionOpen($label) . gridHtml($arr) . subsectionClose();
    }
    $html .= '</section>';
}

/* ---------- Fin ---------- */
$html .= <<<HTML
    <footer>© Agile Toolkit — Page statique HTML/CSS générée par PHP.</footer>
  </main>
</body>
</html>
HTML;

/* ---------- Écriture du fichier ---------- */
$file = __DIR__ . '/index.html';
if (file_put_contents($file, $html) === false) {
    fwrite(STDERR, "Erreur: impossible d'écrire $file\n");
    exit(1);
}
echo "Généré: $file\n";
