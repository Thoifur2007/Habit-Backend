# Panduan Proyek

## 📦 Langkah Install Project

1. Clone repository ini:
   ```bash
   git clone https://github.com/username/nama-project.git
   cd nama-project
2. Install dependency backend dan frontend:
    # Untuk backend
        cd backend
        npm install

    # Untuk frontend
        cd ../frontend
        npm install
Siapkan file konfigurasi (jika ada), seperti .env.

🚀 Cara Menjalankan Backend dan Frontend
Jalankan Backend
Masuk ke folder backend:
    
    cd backend
Jalankan server:

    php artisan serve

Jalankan Frontend
Masuk ke folder Frontend:
    
    cd frontend
Jalankan server:

    npm start
    
🔗 Penjelasan Singkat Endpoint API

| Method | Endpoint         | Deskripsi               |
| ------ | ---------------- | ----------------------- |
| GET    | `/api/users`     | Mendapatkan daftar user |
| POST   | `/api/users`     | Menambahkan user baru   |
| GET    | `/api/users/:id` | Mendapatkan detail user |
| PUT    | `/api/users/:id` | Memperbarui data user   |
| DELETE | `/api/users/:id` | Menghapus user          |

📸 Screenshot Hasil Testing Postman & Frontend App :


