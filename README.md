# Laravel Task – Case Studies Module

## 📌 Overview
This Laravel project implements a **Case Studies CMS module** to demonstrate:
- Migration, Eloquent model, Controller, Policy
- Blade templates for listing and detail pages (with SEO fields)
- Feature flag toggle
- i18n/RTL-ready design (Arabic support prepared)
- Basic tests + CI pipeline (GitHub Actions)
- Deploy & rollback plan

---

## 🚀 Installation

### 1. Clone the repo
```bash
git clone https://github.com/vishalagasagi44/laravel_task.git
cd laravel_task
```

### 2. Install dependencies
```bash
composer install
cp .env.example .env
php artisan key:generate
```

### 3. Database setup
Update `.env` with your DB credentials, then run:
```bash
php artisan migrate
```

### 4. Start server
```bash
php artisan serve
```
Visit 👉 [http://localhost:8000/case-studies](http://localhost:8000/case-studies)

---

## 🌐 Feature Flag
Enable/disable the Case Studies module from `.env`:
```
FEATURE_CASE_STUDIES=true   # enabled
FEATURE_CASE_STUDIES=false  # disabled
```

---

## 🌍 i18n / RTL Support
- Language switch routes: `/lang/en` and `/lang/ar`
- RTL auto-applied for Arabic locale
- Example translation file: `resources/lang/ar/case-studies.php`

---

## 🧪 Testing
Run PHPUnit tests:
```bash
php artisan test
```

---

## ⚙️ CI/CD (GitHub Actions)
The repo includes `.github/workflows/laravel.yml` which:
- Installs dependencies
- Runs migrations in test DB
- Executes feature tests

---

## 📦 Deployment & Rollback

### Deploy
```bash
git pull origin main
composer install --no-dev --optimize-autoloader
php artisan migrate --force
php artisan config:cache && php artisan route:cache
php artisan queue:restart
```

### Rollback
```bash
php artisan migrate:rollback --step=1
# Or redeploy previous release if using symlink-based deploys
```

---

## 📸 Demo Data
Insert sample Case Studies using Tinker:
```php
php artisan tinker
use App\Models\CaseStudy;
CaseStudy::create([
    'title'=>'AI in Healthcare',
    'slug'=>'ai-healthcare',
    'summary'=>'Exploring AI use in hospitals.',
    'content'=>'Full article...',
]);
```

---

✅ This covers Laravel structure, testability, CI/CD rigor, rollback strategy, and i18n awareness.
