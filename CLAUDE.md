# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

## Project Overview

This is a custom WordPress theme for **3dpieces by Gargiulo Daniele** - a 3D printing and CAD design services company. The theme is designed with a dark color scheme and electric blue (#00a8ff) accent, targeting businesses and professionals.

**Target Language**: Italian (all content, labels, and UI text)

## Theme Architecture

The theme follows WordPress best practices with a modular structure:

### Core Structure

```
3dpieces-theme/
├── assets/
│   ├── css/              # Modular CSS architecture
│   │   ├── variables.css # Design system (colors, fonts, spacing)
│   │   ├── base.css      # Typography, reset, base styles
│   │   ├── components.css # Reusable UI components
│   │   ├── layout.css    # Header, footer, grid systems
│   │   └── pages/        # Page-specific styles
│   ├── js/
│   │   ├── main.js       # Mobile menu, smooth scroll, core interactions
│   │   ├── animations.js # Scroll-based animations (Intersection Observer)
│   │   └── lightbox.js   # Portfolio image lightbox
│   └── images/           # Theme images and icons
├── inc/
│   ├── theme-setup.php        # WordPress theme support, menus, widgets
│   ├── enqueue-scripts.php    # CSS/JS asset loading
│   └── custom-post-types.php  # Portfolio CPT and taxonomy
├── template-parts/       # Reusable PHP components
│   ├── hero.php
│   ├── service-card.php
│   └── cta-section.php
├── Page Templates (Italian naming)
│   ├── front-page.php       # Homepage
│   ├── page-servizi.php     # Services page
│   ├── page-portfolio.php   # Portfolio grid with filtering
│   ├── page-chi-sei.php     # About page
│   └── page-contatti.php    # Contact page
├── single-portfolio.php  # Single portfolio item detail view
└── functions.php         # Main entry point (includes inc/ files)
```

### Design System

**Colors** (defined in [assets/css/variables.css](3dpieces-theme/assets/css/variables.css)):
- Dark theme: `--color-bg-primary` (#0a0a0a), `--color-bg-secondary` (#1a1a1a)
- Accent: `--color-accent` (#00a8ff - electric blue)
- Text: `--color-text-primary` (#ffffff), `--color-text-secondary` (#b0b0b0)

**Typography**:
- Body font: Inter (Google Fonts)
- Headings: Space Grotesk (Google Fonts)
- Loaded via enqueue in [inc/enqueue-scripts.php](3dpieces-theme/inc/enqueue-scripts.php):17

**Responsive Breakpoints**:
- Mobile: < 640px
- Tablet: 768px
- Desktop: 1024px
- Large: 1280px+

## Custom Post Type: Portfolio

The theme includes a custom "Portfolio" post type for showcasing projects.

**Registration**: [inc/custom-post-types.php](3dpieces-theme/inc/custom-post-types.php):15-51
**Taxonomy**: `portfolio_category` (hierarchical)
**Default Categories**:
- `stampa-3d` (Stampa 3D)
- `progettazione-cad` (Progettazione CAD)
- `automotive` (Automotive)
- `industriale` (Industriale)
- `altro` (Altro)

**Expected Custom Fields** (to be implemented with ACF or similar):
- Problem (Problema) - textarea
- Solution (Soluzione) - textarea
- Result (Risultato) - textarea
- Technologies Used (Tecnologie) - text
- Image Gallery - multiple images

**Image Sizes** (defined in [inc/theme-setup.php](3dpieces-theme/inc/theme-setup.php):42-44):
- `portfolio-thumb`: 600x400 (cropped)
- `portfolio-large`: 1200x800 (cropped)
- `portfolio-full`: 1920x1280 (cropped)

## WordPress Development Workflow

### Local Development

1. Install WordPress locally (recommended: Local by Flywheel, XAMPP, or MAMP)
2. Place `3dpieces-theme/` in `wp-content/themes/`
3. Activate theme in WordPress Admin → Appearance → Themes

### Creating Pages

WordPress pages use Italian slugs to match template files:
- Create page with slug `servizi` → auto-uses `page-servizi.php`
- Create page with slug `portfolio` → auto-uses `page-portfolio.php`
- Create page with slug `chi-sei` → auto-uses `page-chi-sei.php`
- Create page with slug `contatti` → auto-uses `page-contatti.php`
- Homepage → set as static front page in Settings → Reading

### Navigation Menus

Register menus in [inc/theme-setup.php](3dpieces-theme/inc/theme-setup.php):36-39:
- `primary` - Main navigation in header
- `footer` - Footer quick links

Create menus in: WordPress Admin → Appearance → Menus

### Widget Areas

Three footer widget areas registered ([inc/theme-setup.php](3dpieces-theme/inc/theme-setup.php):51-82):
- `footer-1` - About/description column
- `footer-2` - Quick links column
- `footer-3` - Contact information column

### Asset Loading

All CSS/JS files are enqueued via [inc/enqueue-scripts.php](3dpieces-theme/inc/enqueue-scripts.php).

**CSS Load Order** (dependency chain):
1. Google Fonts
2. variables.css
3. base.css (depends on variables)
4. components.css (depends on base)
5. layout.css (depends on base)
6. style.css (main stylesheet, loads last)

**JavaScript**:
- main.js - Loaded on all pages
- animations.js - Loaded on all pages
- lightbox.js - **Only** loaded on portfolio pages (conditional)

**To add new CSS/JS**: Edit [inc/enqueue-scripts.php](3dpieces-theme/inc/enqueue-scripts.php) and use `wp_enqueue_style()` or `wp_enqueue_script()`

## Key Features & Patterns

### Mobile Menu

Implemented in [assets/js/main.js](3dpieces-theme/assets/js/main.js)
- Hamburger toggle adds `.active` class to button and navigation
- Body gets `.menu-open` class to prevent scroll
- CSS transitions handled in [assets/css/layout.css](3dpieces-theme/assets/css/layout.css)

### Portfolio Filtering

Client-side filtering in [page-portfolio.php](3dpieces-theme/page-portfolio.php)
- Filter buttons use `data-filter` attribute
- Portfolio items use `data-category` attribute
- JavaScript shows/hides items based on category match
- Filtering logic in [assets/js/main.js](3dpieces-theme/assets/js/main.js) or inline

### Scroll Animations

Intersection Observer API used in [assets/js/animations.js](3dpieces-theme/assets/js/animations.js)
- Elements with `.fade-in-on-scroll` class animate when entering viewport
- Subtle, performant animations (no heavy libraries)

### Template Parts

Reusable components in `template-parts/`:
- Include with: `get_template_part('template-parts/hero');`
- Pass variables via `set_query_var()` before including

## Important WordPress Functions

**Theme Constants** (defined in [functions.php](3dpieces-theme/functions.php):14-17):
- `TDP_VERSION` - Theme version (1.0.0)
- `TDP_THEME_DIR` - Absolute path to theme directory
- `TDP_THEME_URI` - URL to theme directory

**Common WordPress Functions Used**:
- `get_template_directory_uri()` - Theme URL for assets
- `home_url()` - Site homepage URL
- `wp_nav_menu()` - Output navigation menu
- `the_permalink()`, `the_title()`, `the_content()` - Post data
- `have_posts()`, `the_post()` - WordPress loop

## Recommended Plugins

**Essential**:
- Contact Form 7 or WPForms Lite (for contact page)
- Advanced Custom Fields (ACF) - Portfolio custom fields
- Yoast SEO or RankMath - SEO optimization

**Recommended**:
- WP Super Cache or LiteSpeed Cache - Performance
- Wordfence Security - Security hardening
- UpdraftPlus - Automated backups

## Content Guidelines

**Tone of Voice**: Professional but human, direct and concrete, no corporate jargon
- Good: "Soluzioni pratiche, pensate per funzionare davvero"
- Bad: "Soluzioni innovative ad alto valore aggiunto"

**WhatsApp Integration**:
- Link format: `https://wa.me/39XXXXXXXXXX?text=Ciao,%20vorrei%20informazioni`
- Appears in footer and contact page only (not floating button)

## Modifying the Theme

### Adding a New Page Template

1. Create `page-{slug}.php` in theme root
2. Use existing templates as reference for structure
3. Include header: `<?php get_header(); ?>`
4. Include footer: `<?php get_footer(); ?>`
5. Create matching page in WordPress with same slug

### Adding New Styles

1. For global styles: Add to existing CSS files in `assets/css/`
2. For page-specific styles: Create `assets/css/pages/{page-name}.css`
3. Enqueue in [inc/enqueue-scripts.php](3dpieces-theme/inc/enqueue-scripts.php)
4. Use CSS custom properties from `variables.css` for consistency

### Working with Portfolio Items

1. Admin → Portfolio → Add New Project
2. Set featured image (required for grid display)
3. Assign to portfolio category
4. Add custom fields (requires ACF plugin)
5. Content appears on single portfolio page via [single-portfolio.php](3dpieces-theme/single-portfolio.php)

## File Reference Quick Links

- Main theme setup: [functions.php](3dpieces-theme/functions.php)
- WordPress config: [inc/theme-setup.php](3dpieces-theme/inc/theme-setup.php)
- Asset loading: [inc/enqueue-scripts.php](3dpieces-theme/inc/enqueue-scripts.php)
- Portfolio CPT: [inc/custom-post-types.php](3dpieces-theme/inc/custom-post-types.php)
- Design variables: [assets/css/variables.css](3dpieces-theme/assets/css/variables.css)
- Header template: [header.php](3dpieces-theme/header.php)
- Footer template: [footer.php](3dpieces-theme/footer.php)

## Project Context

Full implementation plan available in [full_claude_plan.md](full_claude_plan.md) - contains detailed specifications for all 18 implementation phases, design decisions, content structure, and launch checklist.
