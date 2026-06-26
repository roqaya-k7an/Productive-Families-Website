# 🚀 Run the Website Live on Railway

This project is **PHP + MySQL**, so it needs a host that runs PHP and a database.
**[Railway](https://railway.app)** does exactly that (the same place your other live
project runs) and gives you a public link like `https://your-app.up.railway.app`.

Everything technical is already prepared in this repo (a `Dockerfile`, an
environment-aware `config.php`, and a one-click `setup_database.php`). You only need
to click through Railway.

---

## Step 1 — Create the project from GitHub
1. Go to **https://railway.app** and log in with your **GitHub** account.
2. Click **New Project → Deploy from GitHub repo**.
3. Choose **`roqaya-k7an/Productive-Families-Website`**.
4. Railway detects the `Dockerfile` and starts building automatically. ✅

## Step 2 — Add a MySQL database
1. Inside the project, click **New → Database → Add MySQL**.
2. Railway creates a MySQL service with all its connection details.

## Step 3 — Connect the website to the database
1. Click your **website service** → **Variables** tab → **New Variable → Add Reference**.
2. Add these four references from the MySQL service:
   `MYSQLHOST`, `MYSQLPORT`, `MYSQLUSER`, `MYSQLPASSWORD`, `MYSQLDATABASE`.
   *(Railway often offers “Add all” for the database — that's the easiest.)*
3. The site will redeploy automatically.

> `config.php` already reads these variables on its own — no editing needed.

## Step 4 — Get your public link
1. Click the **website service → Settings → Networking → Generate Domain**.
2. You now have a link like **`https://your-app.up.railway.app`**.

## Step 5 — Create the tables (one click)
1. Open this once in your browser:
   ```
   https://your-app.up.railway.app/setup_database.php
   ```
2. It will say **“✅ Done! Tables created and sample data inserted.”**

## Step 6 — Use your live website 🎉
Open:
```
https://your-app.up.railway.app/index.php
```
Sample logins from the imported data:

| Role | Username | Password |
| :--- | :--- | :--- |
| Admin | `admin` | `123456` |
| Productive Family | `manal` | `12345678` |
| Client | `khaled` | `123456` |
| Delivery Agent | `mohamed` | `123456` |

---

## 💻 Run it locally instead (XAMPP)
1. Install **[XAMPP](https://www.apachefriends.org/)**, start **Apache + MySQL**.
2. Copy this project into the XAMPP **`htdocs`** folder.
3. Open **http://localhost/phpmyadmin**, create a database **`profamily`**, and **Import** `profamily.sql`.
4. Open **http://localhost/Productive-Families-Website/index.php**.

---

### Notes
- Uploaded product images are stored on the server's disk. On Railway the disk resets on
  each redeploy, so newly uploaded images may disappear after a redeploy (the sample
  images in the repo always stay). Add a Railway **Volume** mounted at `/var/www/html/img`
  if you want uploads to persist.
- This is a student graduation project; passwords are stored in plain text for
  demonstration only.
