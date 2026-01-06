# 3dpieces WordPress Theme - Implementation Plan

## Executive Summary

This plan provides a complete roadmap to build a custom WordPress theme for **3dpieces by Gargiulo Daniele** - a 3D printing and CAD design services company. The theme will feature a modern, professional design with a dark color scheme and electric blue accents, targeting businesses and professionals while maintaining a young, dynamic brand identity.

**Timeline**: 3-4 weeks full-time (6-8 weeks part-time)
**Estimated Pages**: 5 core pages (Home, Services, Portfolio, About, Contact)
**Key Features**: Custom portfolio system, mobile-responsive, contact forms, WhatsApp integration, SEO optimized

## Project Overview

**Company**: 3dpieces by Gargiulo Daniele
**Services**:
- Stampa 3D professionale (prototypes, technical parts, small series, custom gadgets)
- Progettazione CAD (SolidWorks modeling, optimization, reverse engineering)
- Soluzioni personalizzate (automotive, industrial, custom projects)

**Target Audience**: Businesses and professionals needing rapid prototyping and custom manufacturing solutions

**Brand Positioning**: Direct contact, rapid turnaround, technical expertise, no intermediaries

## Current State
- Project in early planning phase
- Only `todoList.md` exists with comprehensive 18-phase roadmap
- No WordPress files or directory structure created yet
- Ready to begin implementation from scratch

**Design Choices Finalized**:
- ✅ Accent Color: Electric Blue (#00a8ff)
- ✅ Fonts: Inter (body) + Space Grotesk (headings)
- ✅ Hero Style: Dark gradient with 3D geometric shapes
- ✅ WhatsApp: Footer and contact page only

## Design Requirements

### Visual Identity
- **Style**: Clean, minimal, modern
- **Color Scheme**: Dark/neutral base (black, gray, anthracite) + vibrant accent (orange, electric blue, or lime green)
- **Typography**: Modern sans-serif fonts (Google Fonts)
- **Aesthetic**: Tech laboratory, not old-school print shop
- **Animation**: Subtle, fluid animations (not excessive)

### Tone of Voice
- Professional but human
- Direct and concrete
- Clear, no corporate jargon
- Example: "Soluzioni pratiche, pensate per funzionare davvero" not "Soluzioni innovative ad alto valore aggiunto"

### Key Differentiators to Communicate
1. Direct contact, no intermediaries
2. Speed and flexibility
3. Total customization
4. Technical expertise (not improvised)
5. Focus on local businesses and real projects

## Implementation Phases

### PHASE 1: Project Setup & Foundation (Priority: 🔴 Critical)

**1.1 Directory Structure Creation**
```
sito_gargiulo/
├── 3dpieces-theme/              # Main theme folder
│   ├── assets/
│   │   ├── css/
│   │   │   ├── variables.css    # CSS custom properties (colors, fonts, spacing)
│   │   │   ├── base.css         # Reset, typography, base styles
│   │   │   ├── components.css   # Buttons, cards, forms
│   │   │   ├── layout.css       # Header, footer, grid systems
│   │   │   └── pages/           # Page-specific styles
│   │   ├── js/
│   │   │   ├── main.js          # Mobile menu, smooth scroll
│   │   │   ├── animations.js    # Scroll animations
│   │   │   └── lightbox.js      # Portfolio image lightbox
│   │   └── images/
│   │       ├── logo/
│   │       ├── icons/
│   │       └── placeholder/
│   ├── inc/                     # PHP includes
│   │   ├── theme-setup.php      # Theme support, menus, widgets
│   │   ├── enqueue-scripts.php  # Asset loading
│   │   └── custom-post-types.php # Portfolio CPT
│   ├── template-parts/          # Reusable components
│   │   ├── hero.php
│   │   ├── service-card.php
│   │   └── cta-section.php
│   ├── style.css                # Theme header + main styles
│   ├── functions.php            # Main functions file
│   ├── index.php                # Fallback template
│   ├── header.php               # Site header
│   ├── footer.php               # Site footer
│   ├── front-page.php           # Homepage
│   ├── page-servizi.php         # Services page
│   ├── page-portfolio.php       # Portfolio page
│   ├── page-chi-sei.php         # About page
│   ├── page-contatti.php        # Contact page
│   ├── single-portfolio.php     # Single portfolio item
│   ├── 404.php                  # Error page
│   └── screenshot.png           # Theme screenshot
└── design-assets/               # Design resources (not in theme)
    ├── wireframes/
    ├── mockups/
    └── branding/
```

**1.2 Git Repository Setup**
- Initialize Git repository
- Create `.gitignore` for WordPress (node_modules, wp-config.php, uploads, etc.)
- Initial commit with structure

**1.3 Core Theme Files**
- `style.css` with proper WordPress theme header:
  ```css
  /*
  Theme Name: 3dpieces
  Theme URI: https://3dpieces.it
  Author: Gargiulo Daniele
  Author URI: https://3dpieces.it
  Description: Custom WordPress theme for 3dpieces - 3D printing and CAD design services
  Version: 1.0.0
  License: GNU General Public License v2 or later
  License URI: http://www.gnu.org/licenses/gpl-2.0.html
  Text Domain: 3dpieces
  */
  ```
- `functions.php` with basic includes structure
- `index.php` as minimal fallback template

---

### PHASE 2: Design System & Visual Foundation (Priority: 🔴 Critical)

**2.1 CSS Variables Setup (`assets/css/variables.css`)**
```css
:root {
  /* Colors - Dark theme with electric blue accent */
  --color-bg-primary: #0a0a0a;        /* Deep black */
  --color-bg-secondary: #1a1a1a;      /* Dark gray */
  --color-bg-tertiary: #2a2a2a;       /* Medium gray */
  --color-text-primary: #ffffff;      /* White */
  --color-text-secondary: #b0b0b0;    /* Light gray */
  --color-accent: #00a8ff;            /* Electric blue - tech, professional */
  --color-accent-hover: #33b8ff;      /* Lighter blue for hover */
  --color-accent-dark: #0088cc;       /* Darker blue variant */

  /* Typography */
  --font-primary: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
  --font-headings: 'Space Grotesk', 'Inter', sans-serif;

  /* Spacing */
  --spacing-xs: 0.5rem;
  --spacing-sm: 1rem;
  --spacing-md: 2rem;
  --spacing-lg: 4rem;
  --spacing-xl: 6rem;

  /* Layout */
  --max-width: 1200px;
  --border-radius: 8px;
  --transition: all 0.3s ease;
}
```

**2.2 Typography System**
- Import Google Fonts: Inter (400, 500, 600, 700) + Space Grotesk (600, 700)
- Base typography styles with proper hierarchy
- Responsive font sizes using clamp() for fluid scaling
- Line heights optimized for readability (1.6 for body, 1.2 for headings)

**2.3 Component Library**
- Button styles (primary with electric blue, secondary outline, ghost)
- Card components (service cards with hover lift effect, portfolio items)
- Form inputs styling (dark theme with blue focus states)
- Icon system (inline SVG icons for performance)

**2.4 Electric Blue Theme Implementation**
- Primary CTAs: Electric blue background (#00a8ff)
- Hover states: Lighter blue (#33b8ff)
- Accent elements: Links, icons, borders
- Create subtle blue glow effects for interactive elements

---

### PHASE 3: Header & Navigation (Priority: 🔴 Critical)

**3.1 Header Structure (`header.php`)**
```php
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header class="site-header">
    <div class="container">
        <div class="header-inner">
            <!-- Logo -->
            <div class="site-branding">
                <a href="<?php echo home_url(); ?>">
                    <img src="logo.svg" alt="3dpieces">
                </a>
            </div>

            <!-- Desktop Navigation -->
            <nav class="main-navigation">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'primary',
                    'menu_class' => 'nav-menu'
                ));
                ?>
            </nav>

            <!-- Mobile Menu Toggle -->
            <button class="mobile-menu-toggle" aria-label="Menu">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </div>
    </div>
</header>
```

**3.2 Features**
- Sticky header on scroll with subtle background
- Smooth transitions
- Mobile hamburger menu with slide-in animation
- Active page highlighting
- Logo SVG (needs to be created/provided)

**3.3 Menu Structure**
- Home (Homepage)
- Servizi (Services)
- Portfolio
- Chi Sei (About)
- Contatti (Contact)

---

### PHASE 4: Footer (Priority: 🔴 Critical)

**4.1 Footer Structure (`footer.php`)**
- Three column layout (mobile stacks):
  1. **About snippet** - Brief tagline about 3dpieces
  2. **Quick Links** - Navigation menu duplicate
  3. **Contact Info** - Email, WhatsApp, social links

**4.2 Content**
```
Column 1: Chi Siamo
"3dpieces trasforma idee in oggetti reali attraverso stampa 3D e progettazione CAD professionale."

Column 2: Link Rapidi
- Servizi
- Portfolio
- Chi Sei
- Contatti

Column 3: Contatti
- Email: info@3dpieces.it
- WhatsApp: [numero]
- Social: LinkedIn, Instagram (if applicable)
```

**4.3 Copyright Bar**
- "© 2026 3dpieces by Gargiulo Daniele. Tutti i diritti riservati."

---

### PHASE 5: Homepage (`front-page.php`) (Priority: 🔴 Critical)

**5.1 Hero Section**
```
Structure:
- Full-width section with dark gradient background
- Large heading: "Diamo forma alle tue idee con la stampa 3D"
- Subheading: "Progettazione e stampa 3D per aziende e professionisti. Prototipi, componenti tecnici e soluzioni su misura."
- Primary CTA button: "Richiedi un preventivo" (links to contact page)
- Subtle scroll animation on load
- Background: Could use abstract 3D geometric shapes or dark tech pattern
```

**5.2 Services Preview (3 Cards)**
```
Card 1: Stampa 3D
Icon: 3D printer icon
Text: "Prototipi, ricambi e produzioni in piccola serie con tecnologie di stampa 3D professionale."
Link: "Scopri di più →" (to services page)

Card 2: Progettazione CAD
Icon: CAD/technical drawing icon
Text: "Modellazione 3D professionale con SolidWorks. Dalla progettazione all'ottimizzazione produttiva."
Link: "Scopri di più →"

Card 3: Soluzioni Personalizzate
Icon: Custom/gear icon
Text: "Progetti su misura per automotive, industria e applicazioni specifiche."
Link: "Scopri di più →"
```

**Design Notes:**
- Cards with hover effect (subtle lift + accent color border)
- Grid layout: 3 columns desktop, 1 column mobile
- Icons in accent color
- Clean spacing

**5.3 Portfolio Highlight**
- Section title: "Progetti Recenti" or "Il nostro lavoro"
- Display 2-3 featured portfolio items
- Each with:
  - High-quality image
  - Project title
  - Brief one-sentence description
  - "Vedi progetto →" link
- Grid layout with lightbox functionality

**5.4 CTA Section (Final Push)**
```
Background: Accent color or dark with accent accent
Heading: "Hai un'idea? Parliamone."
Subtext: "Trasformiamo le tue esigenze in soluzioni concrete. Contatto diretto, preventivi rapidi, risultati professionali."
Buttons:
- "Contattaci" (primary)
- "WhatsApp" (secondary with WhatsApp icon)
```

---

### PHASE 6: Services Page (`page-servizi.php`) (Priority: 🔴 Critical)

**6.1 Page Hero**
- Page title: "I Nostri Servizi"
- Subtitle: "Soluzioni pratiche per la tua produzione, dalla progettazione alla realizzazione"

**6.2 Service Sections (3 Main Services)**

**Section 1: Stampa 3D**
```
Heading: "Stampa 3D Professionale"
Description: "Tecnologie di stampa 3D all'avanguardia per trasformare i tuoi progetti in oggetti reali, funzionali e personalizzati."

Subsections:
- Prototipi funzionali
  "Valida le tue idee con prototipi fisici rapidi e accurati"

- Parti tecniche e ricambi
  "Produciamo componenti tecnici e ricambi anche per pezzi non più disponibili"

- Piccole serie
  "Produzioni in quantità limitate senza costi di attrezzaggio"

- Gadget personalizzati
  "Oggetti promozionali e gadget aziendali unici"
```

**Section 2: Progettazione CAD**
```
Heading: "Progettazione 3D CAD"
Description: "Modellazione professionale con SolidWorks per progetti tecnici, industriali e personalizzati."

Subsections:
- Modellazione da zero
  "Trasformiamo le tue specifiche in modelli 3D pronti per la produzione"

- Ottimizzazione
  "Miglioriamo pezzi esistenti per prestazioni, costi o producibilità"

- Reverse Engineering
  "Ricreiamo modelli CAD da oggetti fisici esistenti"
```

**Section 3: Soluzioni Personalizzate**
```
Heading: "Progetti Su Misura"
Description: "Supporto completo per progetti specifici in ambito automotive, industriale e oltre."

Areas:
- Automotive: "Componenti e soluzioni per il settore automotive"
- Industria: "Attrezzature, maschere e supporti produttivi"
- Custom: "Qualsiasi progetto particolare che richiede competenza tecnica"
```

**6.3 Why Choose 3dpieces Section**
- Bullet points:
  - ✓ Contatto diretto, senza intermediari
  - ✓ Tempi rapidi e flessibilità
  - ✓ Personalizzazione totale
  - ✓ Competenza tecnica certificata (SolidWorks, ecc.)
  - ✓ Focus su aziende locali e progetti reali

**6.4 CTA at Bottom**
- "Vuoi discutere il tuo progetto?"
- Contact button

---

### PHASE 7: Portfolio Page (`page-portfolio.php`) (Priority: 🔴 Critical)

**7.1 Portfolio Grid**
- Masonry or grid layout
- Filter buttons by category:
  - Tutti
  - Stampa 3D
  - Progettazione CAD
  - Automotive
  - Industriale

**7.2 Portfolio Items (Custom Post Type)**
- Each portfolio card shows:
  - Featured image
  - Project title
  - Category badge
  - Click to open detail view

**7.3 Single Portfolio Template (`single-portfolio.php`)**
```
Structure:
- Project title
- Category/tags
- Main image gallery (2-4 images)
- Project details:
  - Problema: "What was the challenge?"
  - Soluzione: "How we solved it"
  - Risultato: "Outcome and benefits"
  - Tecnologie: "SolidWorks, FDM printing, PLA material" etc.
```

**7.4 Lightbox for Images**
- Click image to view full size
- Gallery navigation
- Use GLightbox or similar modern library

---

### PHASE 8: About Page (`page-chi-sei.php`) (Priority: 🔴 Critical)

**8.1 Personal Story Section**
```
Heading: "Chi Sono"
Content:
"Sono Gargiulo Daniele, fondatore di 3dpieces. Mi occupo di stampa 3D e progettazione CAD con l'obiettivo di rendere la prototipazione rapida e la produzione personalizzata accessibili ad aziende e professionisti.

Con competenze in SolidWorks e tecnologie di stampa 3D, aiuto le aziende a trasformare idee in oggetti reali, rapidamente e senza intermediari."

[Professional photo - needs to be provided]
```

**8.2 Mission/Vision**
```
"Credo nella produzione flessibile, veloce e accessibile. 3dpieces offre un contatto diretto, tempi rapidi e soluzioni tecniche concrete - senza complicazioni."
```

**8.3 Why Choose 3dpieces**
- Icon blocks with benefits:
  - Rapidità: "Da progetto a oggetto fisico in tempi brevi"
  - Competenza: "Esperienza con SolidWorks e tecnologie di stampa professionale"
  - Flessibilità: "Progetti personalizzati, piccole serie, prototipi unici"
  - Supporto diretto: "Parli direttamente con chi realizza il lavoro"

**8.4 Tools & Technologies**
- Visual list/badges:
  - SolidWorks
  - Stampa 3D FDM/SLA (specify technologies)
  - Materiali utilizzati (PLA, ABS, PETG, resina, etc.)

---

### PHASE 9: Contact Page (`page-contatti.php`) (Priority: 🔴 Critical)

**9.1 Contact Form**
- Use Contact Form 7 plugin
- Fields:
  - Nome *
  - Email *
  - Telefono (optional)
  - Tipo di progetto (dropdown): Stampa 3D, Progettazione CAD, Consulenza, Altro
  - Messaggio *
- Custom styling to match theme
- Form validation
- Success message: "Grazie! Ti risponderò al più presto."

**9.2 Direct Contact Info**
```
Column layout (2 columns on desktop):

Email
info@3dpieces.it (or actual email)

WhatsApp
[Large WhatsApp button with direct link]
"Scrivimi direttamente per una risposta rapida"

Orari (if applicable)
Lun-Ven: 9:00 - 18:00
Risposta entro 24h
```

**9.3 Location/Service Area**
- "Servizio su [città/regione]"
- Optional: Google Maps embed if physical location

---

### PHASE 10: Custom Post Type - Portfolio (Priority: 🟡 Important)

**10.1 Register Portfolio CPT (`inc/custom-post-types.php`)**
```php
function tdp_register_portfolio_cpt() {
    $args = array(
        'labels' => array(
            'name' => 'Portfolio',
            'singular_name' => 'Progetto',
            'add_new' => 'Aggiungi Progetto',
            'add_new_item' => 'Aggiungi Nuovo Progetto'
        ),
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-portfolio',
        'supports' => array('title', 'editor', 'thumbnail', 'excerpt'),
        'rewrite' => array('slug' => 'portfolio')
    );
    register_post_type('portfolio', $args);
}
add_action('init', 'tdp_register_portfolio_cpt');
```

**10.2 Custom Fields (ACF or Metabox.io)**
- Portfolio Category (taxonomy: stampa-3d, progettazione-cad, automotive, industriale)
- Problem (Problema) - textarea
- Solution (Soluzione) - textarea
- Result (Risultato) - textarea
- Technologies Used (Tecnologie) - text
- Image Gallery - multiple images

**10.3 Portfolio Category Taxonomy**
- stampa-3d
- progettazione-cad
- automotive
- industriale
- altro

---

### PHASE 11: JavaScript Functionality (Priority: 🔴 Critical)

**11.1 Mobile Menu (`assets/js/main.js`)**
```javascript
// Mobile menu toggle
const mobileMenuToggle = document.querySelector('.mobile-menu-toggle');
const mainNavigation = document.querySelector('.main-navigation');

mobileMenuToggle.addEventListener('click', () => {
    mobileMenuToggle.classList.toggle('active');
    mainNavigation.classList.toggle('active');
    document.body.classList.toggle('menu-open');
});
```

**11.2 Smooth Scroll**
```javascript
// Smooth scroll for anchor links
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function(e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
            target.scrollIntoView({ behavior: 'smooth' });
        }
    });
});
```

**11.3 Scroll Animations**
- Use Intersection Observer API or AOS library
- Fade-in on scroll for service cards, portfolio items
- Keep animations subtle and performant

**11.4 Portfolio Filtering**
```javascript
// Portfolio filter buttons
const filterButtons = document.querySelectorAll('.filter-btn');
const portfolioItems = document.querySelectorAll('.portfolio-item');

filterButtons.forEach(btn => {
    btn.addEventListener('click', () => {
        const filter = btn.dataset.filter;

        portfolioItems.forEach(item => {
            if (filter === 'all' || item.dataset.category === filter) {
                item.style.display = 'block';
            } else {
                item.style.display = 'none';
            }
        });
    });
});
```

---

### PHASE 12: WordPress Integration (Priority: 🔴 Critical)

**12.1 Theme Setup (`inc/theme-setup.php`)**
```php
function tdp_theme_setup() {
    // Add theme support
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', array('search-form', 'comment-form', 'gallery'));
    add_theme_support('custom-logo');

    // Register navigation menus
    register_nav_menus(array(
        'primary' => __('Primary Menu', '3dpieces'),
        'footer' => __('Footer Menu', '3dpieces')
    ));

    // Add image sizes
    add_image_size('portfolio-thumb', 600, 400, true);
    add_image_size('portfolio-large', 1200, 800, true);
}
add_action('after_setup_theme', 'tdp_theme_setup');
```

**12.2 Widget Areas**
```php
function tdp_widgets_init() {
    register_sidebar(array(
        'name' => 'Footer Column 1',
        'id' => 'footer-1',
        'before_widget' => '<div class="footer-widget">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>'
    ));
    // Repeat for footer-2, footer-3
}
add_action('widgets_init', 'tdp_widgets_init');
```

**12.3 Enqueue Scripts (`inc/enqueue-scripts.php`)**
```php
function tdp_enqueue_assets() {
    // Google Fonts
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Space+Grotesk:wght@600;700&display=swap');

    // Theme styles
    wp_enqueue_style('variables', get_template_directory_uri() . '/assets/css/variables.css');
    wp_enqueue_style('base', get_template_directory_uri() . '/assets/css/base.css');
    wp_enqueue_style('components', get_template_directory_uri() . '/assets/css/components.css');
    wp_enqueue_style('layout', get_template_directory_uri() . '/assets/css/layout.css');
    wp_enqueue_style('main-style', get_stylesheet_uri());

    // JavaScript
    wp_enqueue_script('main-js', get_template_directory_uri() . '/assets/js/main.js', array(), '1.0.0', true);
    wp_enqueue_script('animations', get_template_directory_uri() . '/assets/js/animations.js', array(), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'tdp_enqueue_assets');
```

---

### PHASE 13: Responsive Design (Priority: 🔴 Critical)

**13.1 Breakpoints**
```css
/* Mobile first approach */
:root {
  --breakpoint-sm: 640px;   /* Mobile landscape */
  --breakpoint-md: 768px;   /* Tablet */
  --breakpoint-lg: 1024px;  /* Desktop */
  --breakpoint-xl: 1280px;  /* Large desktop */
}
```

**13.2 Key Responsive Elements**
- Navigation: Hamburger menu < 768px
- Service cards: 1 column mobile, 3 columns desktop
- Portfolio grid: 1 column mobile, 2 columns tablet, 3 columns desktop
- Typography: Fluid sizing using clamp()
- Hero section: Adjust padding, font sizes
- Footer: Stack columns on mobile

**13.3 Testing Checklist**
- iPhone SE (375px)
- iPhone 12/13 (390px)
- iPad (768px)
- Desktop (1024px+)
- Large desktop (1440px+)

---

### PHASE 14: Content & Assets Preparation (Priority: 🔴 Critical)

**14.1 Required Assets**
```
Design Assets Needed:
□ Logo (SVG + PNG formats)
  - Full logo
  - Icon/mark only (for mobile)
  - White version for dark backgrounds

□ Favicon (multiple sizes)
  - 16x16, 32x32, 180x180 (Apple touch icon)

□ Hero Section
  - Background image or pattern
  - Option: Abstract 3D shapes, geometric patterns

□ Service Icons (SVG)
  - 3D printer icon
  - CAD/technical drawing icon
  - Custom/gear icon

□ Portfolio Images
  - Minimum 6 high-quality project images
  - Before/after photos where applicable
  - Multiple angles for each project
  - Minimum resolution: 1200px wide

□ About Page
  - Professional photo of Daniele
  - Optional: Workshop/equipment photos
```

**14.2 Content Writing**
```
Text Content Needed:
□ Services descriptions (expand on wireframe text)
□ Portfolio project details (6-10 projects)
  - Problem, Solution, Result for each
□ About page biography (200-300 words)
□ Contact information
  - Email address
  - WhatsApp number
  - Service area/location
  - Business hours (if applicable)
□ Social media links (LinkedIn, Instagram if active)
```

**14.3 Placeholder Content**
- Use Lorem Picsum for placeholder images during development
- Create dummy portfolio items for testing
- Sample form submissions testing

---

### PHASE 15: Plugins & Third-Party Integration (Priority: 🟡 Important)

**15.1 Essential Plugins**
```
Required:
- Contact Form 7 (or WPForms Lite)
- Advanced Custom Fields (ACF) - for portfolio custom fields
- Yoast SEO or RankMath
- WP Super Cache or LiteSpeed Cache

Recommended:
- Wordfence Security
- UpdraftPlus (backups)
- Enable Media Replace (for updating images)
- Regenerate Thumbnails
```

**15.2 WhatsApp Integration**
- WhatsApp direct link: `https://wa.me/39XXXXXXXXXX?text=Ciao,%20vorrei%20informazioni`
- WhatsApp button in:
  - Homepage CTA section
  - Contact page
  - Footer (optional)
  - Floating button (optional - could be intrusive)

**15.3 Optional Libraries**
```
Consider:
- GLightbox (modern lightbox, ~25KB) - for portfolio
- AOS (Animate On Scroll, ~10KB) - for scroll animations
- Swiper.js (if adding testimonial slider later)
```

---

### PHASE 16: Performance Optimization (Priority: 🟡 Important)

**16.1 Image Optimization**
- Convert to WebP format with fallbacks
- Lazy loading: `loading="lazy"` attribute
- Responsive images: use `srcset` and `sizes`
- Compress all images (TinyPNG, Squoosh)
- Target: < 200KB per image

**16.2 CSS/JS Optimization**
- Minify CSS and JavaScript for production
- Remove unused CSS (PurgeCSS)
- Combine CSS files where possible
- Defer non-critical JavaScript
- Inline critical CSS

**16.3 Caching Strategy**
- Browser caching headers
- Install WP Super Cache or W3 Total Cache
- Set cache expiry for static assets (images, CSS, JS)

**16.4 Performance Targets**
- Google PageSpeed score: > 90 (mobile and desktop)
- Largest Contentful Paint (LCP): < 2.5s
- First Input Delay (FID): < 100ms
- Cumulative Layout Shift (CLS): < 0.1
- Total page size: < 1MB (homepage)

---

### PHASE 17: SEO Setup (Priority: 🟡 Important)

**17.1 On-Page SEO**
```
Each Page Needs:
- Title tag (50-60 characters)
- Meta description (150-160 characters)
- H1 heading (one per page)
- Proper heading hierarchy (H2, H3)
- Alt text for all images
- Internal linking between pages
```

**17.2 Technical SEO**
- Install Yoast SEO or RankMath
- Generate XML sitemap
- Create robots.txt
- Schema markup:
  - LocalBusiness schema for homepage
  - Service schema for services page
  - Portfolio/CreativeWork schema for projects
- Open Graph meta tags for social sharing
- Canonical URLs

**17.3 Content SEO Keywords**
```
Target Keywords:
- stampa 3d [città]
- progettazione cad
- prototipazione rapida
- stampa 3d automotive
- ricambi stampa 3d
- modellazione solidworks
```

---

### PHASE 18: Testing & Quality Assurance (Priority: 🔴 Critical)

**18.1 Browser Testing**
- Chrome (latest)
- Firefox (latest)
- Safari (macOS and iOS)
- Edge (latest)
- Mobile browsers (Chrome Android, Safari iOS)

**18.2 Device Testing**
- Mobile: iPhone SE, iPhone 12/13, Samsung Galaxy
- Tablet: iPad, Android tablets
- Desktop: 1366px, 1920px, 2560px widths

**18.3 Functionality Testing**
```
□ Navigation menu (desktop and mobile)
□ All internal links work correctly
□ Contact form submissions
  - Validation works
  - Emails are received
  - Success/error messages display
□ Portfolio filtering
□ Image lightbox
□ WhatsApp links open correctly
□ Smooth scroll behavior
□ Mobile menu toggle
□ Sticky header
□ Form validation
□ 404 page displays correctly
```

**18.4 Content Review**
- Proofread all Italian text for grammar/spelling
- Verify contact information accuracy
- Check image quality and loading
- Ensure consistent tone of voice
- Verify all CTAs are clear and functional

**18.5 Accessibility Testing**
```
□ Keyboard navigation works (Tab, Enter, Esc)
□ ARIA labels for interactive elements
□ Color contrast meets WCAG AA standards
  - Text: minimum 4.5:1 ratio
  - Large text: minimum 3:1 ratio
□ Skip-to-content link
□ Images have descriptive alt text
□ Form labels properly associated
□ Focus indicators visible
```

**18.6 Performance Testing**
- Test with Google PageSpeed Insights
- Check GTmetrix scores
- Verify all images are optimized
- Ensure no render-blocking resources
- Test loading speed on 3G connection

---

### PHASE 19: Security & Backup (Priority: 🟡 Important)

**19.1 Security Measures**
```
□ Install Wordfence or Sucuri Security plugin
□ Use strong admin password
□ Change default "admin" username
□ Enable SSL certificate (HTTPS)
□ Hide WordPress version (remove from header)
□ Limit login attempts
□ Disable file editing in wp-config.php
□ Keep all plugins and theme updated
□ Regular security scans
```

**19.2 Backup Setup**
```
□ Install UpdraftPlus or BackupBuddy
□ Configure automatic daily backups
□ Store backups remotely (Google Drive, Dropbox)
□ Test backup restoration process
□ Backup database and files separately
□ Keep at least 7 days of backups
```

---

### PHASE 20: Launch Preparation (Priority: 🔴 Critical)

**20.1 Pre-Launch Checklist**
```
□ Test on staging environment
□ Get client (Daniele) feedback and approval
□ Final content review and corrections
□ Complete backup of entire site
□ Verify domain and hosting ready
□ SSL certificate installed and working
□ Email sending configured (SMTP)
□ Google Analytics tracking code installed
□ Set up Google Search Console
□ Submit XML sitemap to search engines
□ Test all forms one final time
□ Verify all contact information correct
□ Check mobile responsiveness final time
□ Run final performance tests
```

**20.2 Go Live**
```
□ Point domain DNS to hosting server
□ Update WordPress site URL settings
□ Flush all caches (plugin, server, CDN)
□ Test live site thoroughly
□ Monitor for 404 errors
□ Check analytics tracking working
□ Verify form submissions working
□ Test contact email delivery
```

**20.3 Post-Launch**
```
□ Announce on social media (if applicable)
□ Submit to Google for indexing
□ Monitor site performance first week
□ Check search console for errors
□ Review analytics data
□ Collect initial user feedback
```

---

## Critical Files to Create (Priority Order)

### Week 1: Foundation
1. `style.css` - Theme header and core styles
2. `functions.php` - Main functions file with includes
3. `header.php` - Site header with navigation
4. `footer.php` - Site footer
5. `inc/theme-setup.php` - WordPress theme setup
6. `inc/enqueue-scripts.php` - Asset loading
7. `assets/css/variables.css` - Design system variables
8. `assets/css/base.css` - Base typography and reset
9. `assets/css/components.css` - Buttons, cards, forms
10. `assets/css/layout.css` - Header, footer, grid

### Week 2: Pages & Templates
11. `front-page.php` - Homepage
12. `page-servizi.php` - Services page
13. `page-portfolio.php` - Portfolio grid page
14. `page-chi-sei.php` - About page
15. `page-contatti.php` - Contact page
16. `single-portfolio.php` - Single portfolio item
17. `404.php` - Error page
18. `inc/custom-post-types.php` - Portfolio CPT

### Week 3: JavaScript & Polish
19. `assets/js/main.js` - Core functionality
20. `assets/js/animations.js` - Scroll animations
21. `assets/js/lightbox.js` - Portfolio lightbox
22. Template parts for reusable components
23. Page-specific CSS files

### Week 4: Optimization & Launch
24. Performance optimization
25. SEO setup
26. Testing and bug fixes
27. Content population
28. Launch preparation

---

## Design Decisions (FINALIZED)

**🎨 Color Accent: Electric Blue (#00a8ff)**
- Communicates tech expertise, professionalism, and trust
- Pairs perfectly with dark theme
- Creates strong visual contrast for CTAs

**🔤 Font Pairing: Inter + Space Grotesk**
- Inter for body text (excellent readability, modern)
- Space Grotesk for headings (geometric, tech-forward)
- Google Fonts import: `'Inter:wght@400;500;600;700&family=Space+Grotesk:wght@600;700'`

**📸 Hero Background: Dark Gradient + 3D Geometric Shapes**
- Dark gradient base (black to dark gray)
- Subtle 3D geometric shapes (cubes, pyramids, wireframes)
- On-brand representation of 3D printing
- CSS or SVG implementation for performance

**📱 WhatsApp Button: Footer & Contact Page Only**
- Present in footer (visible on all pages)
- Prominent button on contact page
- Less intrusive approach - professional without being pushy

---

## Timeline Estimate (Full-Time Work)

- **Week 1**: Setup, design system, header/footer, homepage
- **Week 2**: All page templates, portfolio CPT, content structure
- **Week 3**: JavaScript, responsive refinement, content population
- **Week 4**: Testing, optimization, SEO, launch

**Total: 3-4 weeks full-time** or **6-8 weeks part-time**

---

## Next Steps

1. **Clarify design decisions** (accent color, fonts, hero background)
2. **Gather/create initial assets** (logo, placeholder images)
3. **Set up local WordPress environment** (Local by Flywheel recommended)
4. **Create theme directory structure**
5. **Begin Phase 1 implementation**

This plan provides a complete roadmap from empty project to launched WordPress theme, specifically tailored for 3dpieces' brand identity and business needs.
