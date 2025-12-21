# Emporion Pharm – Online apoteka sa dostavom

Laravel 11 aplikacija za naručivanje lekova i suplemenata na kućnu adresu.

## Funkcionalnosti
- Pregled kataloga proizvoda
- Dodavanje proizvoda u korpu (sesijska korpa)
- Izračun ukupne cene u realnom vremenu
- Izbor besplatnog poklon paketa za porudžbine preko 7000 RSD
- Forma za unos podataka o dostavi
- Kreiranje narudžbine i zahvalnica
- Režim za zaposlene – pregled svih narudžbina

## Tehnologije
- Laravel 11
- Laravel Blueprint (generisanje modela i migracija)
- SQLite baza
- Tailwind CSS (preko CDN-a)
- Laravel Pint (code style)
- GitHub Actions (CI)

## Struktura baze (4 modela / 4 tabele)
- `products` – lekovi i suplementi
- `orders` – narudžbine kupaca
- `order_items` – stavke narudžbine (pivot tabela)
- `gift_packs` – dostupni poklon paketi

## Instalacija (lokalno)
```bash
git clone https://github.com/Milan-Klinko/emporion-pharm.git
cd emporion-pharm
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate:fresh --seed
php artisan serve

Javne rute:

/ → Katalog proizvoda
/cart → Pregled korpe
/gift → Izbor poklona
/checkout → Forma za dostavu
/order (POST) → Kreiranje narudžbine
/employee → Pregled narudžbina za zaposlene

Autor: Milan Klinko – studentski projekat

Aplikacija dostupna lokalno na http://127.0.0.1:8000