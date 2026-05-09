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

<p align="center">
  Dibuat dengan ❤️ menggunakan Laravel + Tailwind CSS<br>
  <strong>De Xpedisyen — Logistik Cerdas untuk Indonesia</strong>
</p>
