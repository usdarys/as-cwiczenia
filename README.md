# as-cwiczenia
Ćwiczenia z przedmiotu Aplikacje Sieciowe
## Zrealizowane ćwiczenia:
1. Lab 02 - Dorobienie kalkulatora kredytowego
2. Lab 03 - Ochrona dostępu do kalkulatora kredytowego
3. Lab 04 - Szablon Smarty
4. Lab 05 - Obiektowość + Kontroler główny
5. Lab 06 - Nowa struktura + Przestrzenie nazw
6. Lab 07 - Ochrona zasobów + routing
7. Lab 08 - Zapis wyników obliczeń do bazy + widok z historią obliczeń
## Instalacja projektu
### Wymagania:
1. [Apache](https://httpd.apache.org/)
2. [php 7](https://www.php.net/downloads)
3. [Composer](https://getcomposer.org/download/)
4. [Node.js + npm](https://nodejs.org/en/)
5. [Postgres](https://www.postgresql.org/)

### Instalacja (Bash / Powershell)

    git clone https://github.com/usdarys/as-cwiczenia.git
    cd as-cwiczenia
    composer install
    cd public
    npm install

### Konfiguracja
1. Utwórz nową bazę danych i wgraj skrypt z katalogu `./resource/sql/db.sql`
2. Skopiuj katalog `./resource/config` do katalogu głównego aplikacji i uzupełnij dane konfiguracyjne bazy w pliku `./config/config.php`