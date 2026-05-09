# 🚚 De Xpedisyen

> **Logistik Cerdas untuk Indonesia** — Platform company profile modern untuk UMKM dan profesional urban yang dibangun dengan Laravel 11 + Tailwind CSS.

---

## ✨ Tampilan Website

| Section | Deskripsi |
|---|---|
| 🦸 Hero | Headline animasi + dashboard card visual |
| 🏷️ Trusted By | Bar logo ekspedisi partner |
| ⚡ Fitur Unggulan | 6 feature card dengan ikon |
| ❌✅ Problem/Solution | Dua kolom masalah vs solusi |
| 👥 Persona | Kartu UMKM vs Profesional Urban |
| 🔢 How It Works | 3 langkah mudah |
| 💬 Testimoni | 3 kartu review |
| 📬 Kontak | Form lengkap dengan validasi |

---

## 🛠️ Tech Stack

- **Framework**: Laravel 11 (PHP 8.2+)
- **CSS**: Tailwind CSS v3
- **Build Tool**: Vite
- **Database**: SQLite (default) / MySQL
- **Font**: Inter (Google Fonts)

---

## ⚙️ Cara Install di Lokal

### Prasyarat
Pastikan sudah terinstall:
- PHP 8.2+ → [Laravel Herd](https://herd.laravel.com) (Windows/Mac)
- Composer → otomatis ikut Herd
- Node.js 18+ → [nodejs.org](https://nodejs.org)

### Langkah-langkah

```bash
# 1. Clone repository
git clone https://github.com/username/de-xpedisyen.git
cd de-xpedisyen

# 2. Install PHP dependencies
composer install

# 3. Salin file environment
cp .env.example .env

# 4. Generate app key
php artisan key:generate

# 5. Buat database SQLite
touch database/database.sqlite   # Mac/Linux
# Windows PowerShell:
# New-Item -Path database/database.sqlite -ItemType File

# 6. Jalankan migrasi
php artisan migrate

# 7. Install Node dependencies
npm install

# 8. Build assets
npm run build

# 9. Jalankan server
php artisan serve
```

Buka browser → **http://localhost:8000** 🎉

---

## 📁 Struktur Folder Penting

```
de-xpedisyen/
├── app/Http/Controllers/
│   └── ContactController.php     ← logika form & routing
├── resources/
│   ├── css/app.css               ← custom styles Tailwind
│   ├── js/app.js                 ← navbar, animasi, smooth scroll
│   └── views/
│       ├── components/
│       │   ├── layouts/
│       │   │   └── app.blade.php ← layout utama
│       │   ├── navbar.blade.php
│       │   ├── footer.blade.php
│       │   └── button.blade.php
│       └── pages/
│           ├── home.blade.php            ← halaman utama ✏️
│           └── contact-success.blade.php ← halaman sukses
├── routes/web.php                ← semua URL/route
├── tailwind.config.js            ← warna brand (navy & orange)
└── .env                          ← konfigurasi app
```

---

## ✏️ Cara Edit Konten

| Mau ubah apa? | Edit file ini |
|---|---|
| Teks hero, fitur, testimoni | `resources/views/pages/home.blade.php` |
| Nomor telepon & email | `resources/views/components/footer.blade.php` |
| Menu navigasi | `resources/views/components/navbar.blade.php` |
| Warna brand | `tailwind.config.js` → `brand-navy` & `brand-orange` |
| Validasi form | `app/Http/Controllers/ContactController.php` |

---

## 🌐 Cara Deploy (Agar Orang Lain Bisa Lihat)

Ada 3 pilihan deploy:

---

### 🥇 Pilihan 1 — Railway (Gratis, Paling Mudah)

Railway adalah platform cloud yang mendukung Laravel langsung dari GitHub.

**Langkah:**

1. Push project ke GitHub:
```bash
git init
git add .
git commit -m "first commit"
git branch -M main
git remote add origin https://github.com/username/de-xpedisyen.git
git push -u origin main
```

2. Buka [railway.app](https://railway.app) → login dengan GitHub

3. Klik **New Project** → **Deploy from GitHub repo** → pilih repo `de-xpedisyen`

4. Railway auto-detect Laravel. Tambahkan **environment variables**:
```
APP_KEY=           ← generate dulu: php artisan key:generate --show
APP_ENV=production
APP_DEBUG=false
APP_URL=https://your-app.railway.app
DB_CONNECTION=sqlite
```

5. Klik **Deploy** → tunggu 2–3 menit → website live! 🚀

---

### 🥈 Pilihan 2 — Shared Hosting cPanel (Berbayar, ~Rp 50rb/bln)

Cocok untuk domain sendiri seperti `dexpedisyen.id`.

**Persiapan lokal:**
```bash
composer install --optimize-autoloader --no-dev
npm run build
```

**Upload ke server:**
1. Upload semua folder **kecuali** `node_modules/` dan `.git/`
2. Letakkan folder `public/` sebagai **document root** (public_html)
3. Sisanya letakkan **di luar public_html**

**Edit `public/index.php`** — sesuaikan path:
```php
require __DIR__.'/../de-xpedisyen/vendor/autoload.php';
$app = require_once __DIR__.'/../de-xpedisyen/bootstrap/app.php';
```

**Konfigurasi `.env` di server:**
```env
APP_ENV=production
APP_DEBUG=false
APP_URL=https://domainanda.com
APP_KEY=base64:xxxxx

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_DATABASE=nama_db
DB_USERNAME=user_db
DB_PASSWORD=password_db
```

**Jalankan via SSH:**
```bash
php artisan key:generate
php artisan migrate --force
php artisan config:cache
php artisan route:cache
php artisan view:cache
```

---

### 🥉 Pilihan 3 — VPS (Murah, Lebih Kontrol)

Cocok untuk yang sudah familiar dengan Linux. Provider: DigitalOcean, Vultr, Biznet Gio, IDCloudHost.

```bash
# Install stack di Ubuntu 22.04
sudo apt update
sudo apt install nginx php8.2-fpm php8.2-mbstring php8.2-xml \
  php8.2-curl php8.2-zip php8.2-sqlite3 composer nodejs npm -y

# Upload project ke /var/www/de-xpedisyen
# Set permission
sudo chown -R www-data:www-data /var/www/de-xpedisyen
sudo chmod -R 775 /var/www/de-xpedisyen/storage

# Setup
cd /var/www/de-xpedisyen
composer install --no-dev --optimize-autoloader
npm install && npm run build
cp .env.example .env
php artisan key:generate
php artisan migrate --force
php artisan storage:link
php artisan config:cache && php artisan route:cache

# Nginx config
sudo nano /etc/nginx/sites-available/de-xpedisyen
```

Isi Nginx config:
```nginx
server {
    listen 80;
    server_name domainanda.com www.domainanda.com;
    root /var/www/de-xpedisyen/public;
    index index.php;

    location / {
        try_files $uri $uri/ /index.php?$query_string;
    }

    location ~ \.php$ {
        fastcgi_pass unix:/var/run/php/php8.2-fpm.sock;
        include fastcgi_params;
        fastcgi_param SCRIPT_FILENAME $realpath_root$fastcgi_script_name;
    }
}
```

```bash
sudo ln -s /etc/nginx/sites-available/de-xpedisyen /etc/nginx/sites-enabled/
sudo nginx -t && sudo systemctl reload nginx
```

---

## 🐛 Troubleshooting

| Error | Solusi |
|---|---|
| `No application encryption key` | Jalankan `php artisan key:generate` |
| `Unable to locate component [layouts.app]` | Pastikan layout ada di `resources/views/components/layouts/app.blade.php` |
| CSS/JS tidak muncul | Jalankan `npm run build` |
| Error 500 di production | Set `APP_DEBUG=true` sementara, lihat error, lalu `false` lagi |
| Permission denied | `chmod -R 775 storage bootstrap/cache` |
| `vendor/autoload.php not found` | Jalankan `composer install` |

---

## 👨‍💻 Development Workflow

Buka **2 terminal** setiap kali mau development:

**Terminal 1** (CSS/JS hot reload):
```bash
npm run dev
```

**Terminal 2** (PHP server):
```bash
php artisan serve
```

Edit file blade → simpan → browser otomatis refresh ✨

---

## 📄 Lisensi

MIT License © 2025 De Xpedisyen

---

<p align="center">
  Dibuat dengan ❤️ menggunakan Laravel + Tailwind CSS<br>
  <strong>De Xpedisyen — Logistik Cerdas untuk Indonesia</strong>
</p>
