# Agile Toolkit Hub — Catalogue des vidéos de la chaîne YouTube Agile Toolkit

Site statique (HTML/CSS) qui regroupe les vidéos de la chaîne YouTube Agile Toolkit par sections et sous-sections.  
Les identifiants des vidéos sont maintenus dans un fichier PHP séparé, puis un script génère **une page par section** (avec une page d’accueil).

👉 Démo (GitHub Pages) : https://agileanddevopstoolkit.github.io/agile-toolkit-hub/

---

## ✨ Caractéristiques

- 100% **statique** (HTML/CSS), **responsive**, thème **clair**.
- **Une page par section** : l’accueil (`index.html`) affiche _Cours sur l’Agilité à l’Échelle_. Les autres pages sont générées seulement si la section contient des vidéos.
- **Grille d’iframes** YouTube : ≈ **3 colonnes** sur desktop, **2** sur tablette, **1** sur mobile (`loading="lazy"` activé).
- **Navigation mobile** défilable horizontalement, onglet **actif** très visible.
- **Sections / sous-sections masquées** si vides.
- **Texte optionnel** sous chaque vidéo (captions).
- **Date de génération** affichée en pied de page.
- Zéro JavaScript côté client. GitHub Pages **ne** fait **pas** tourner le PHP : on génère le HTML **en local**, puis on pousse.

---

## 🗂️ Structure du dépôt

```
.
├── generate_videos.php        # Générateur (écrit/écrase les pages HTML)
├── video_ids.php              # Données: listes d'IDs + texte optionnel par vidéo
├── index.html                 # Accueil (Agilité à l'Échelle)
├── retrospectives.html        # (créé si section non vide)
├── demos.html                 # (créé si section non vide)
├── questions-agiles.html      # (créé si section non vide)
├── devops.html                # (créé si section non vide)
├── glossaire.html             # (créé si au moins une sous-section non vide)
├── agilite-ia.html            # (créé si au moins une sous-section non vide)
└── README.md
```

> **Remarque :** seules les pages dont les sections contiennent des vidéos sont générées (sauf `index.html`, toujours créé).

---

## 🧩 Format des données (`video_ids.php`)

Chaque vidéo peut être déclarée selon **deux formats** :

**Format recommandé (avec texte sous la vidéo) :**
```php
['id' => 'YOUTUBE_ID', 'text' => 'Texte court sous la vidéo']
```

**Raccourci (sans texte) :**
```php
'YOUTUBE_ID'   // équivaut à ['id' => 'YOUTUBE_ID', 'text' => '']
```

- Si `text` est vide, **rien** ne s’affiche sous l’embed.
- Laisse un tableau `[]` si une section / sous-section n’a pas encore de vidéos : elle ne sera **pas** affichée.

---

## 🚀 Génération des pages

Prérequis : **PHP (CLI)** installé.

```bash
php generate_videos.php
```
Le script crée/écrase :

- `index.html` (toujours)
- et, si contenu présent, `retrospectives.html`, `demos.html`, `questions-agiles.html`, `devops.html`, `glossaire.html`, `agilite-ia.html`

Ensuite, ouvrir `index.html` localement pour prévisualiser, puis **commit/push** les fichiers HTML générés.

---

## 🎛️ Personnalisation rapide

- **Taille des vignettes / nb de colonnes** : dans le CSS généré, la grille se règle via :  
  ```css
  /* Desktop ~3 colonnes, tablette 2, mobile 1 */
  .grid { grid-template-columns: repeat(auto-fill, minmax(340px, 1fr)); }
  @media (max-width: 900px){ .grid { grid-template-columns: repeat(auto-fill, minmax(300px,1fr)); } }
  @media (max-width: 600px){ .grid { grid-template-columns: 1fr; } }
  ```

- **Notes & liens** sous titres/sous-titres : des gabarits en **commentaires HTML** sont inclus dans la sortie.  
  Pour les rendre visibles de façon durable, retire `<!-- ... -->` aux endroits voulus dans `generate_videos.php`.

---

## ✅ Bonnes pratiques

- Éditer uniquement `video_ids.php`, lancer `php generate_videos.php`, puis **commit/push** `index.html` **et** toutes les pages HTML générées.
- Vérifier que tes IDs sont bien les codes après `v=` ou `/embed/` (ex. `dQw4w9WgXcQ`).