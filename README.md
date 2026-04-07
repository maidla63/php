# PHP õpperepo

See repositoorium on mõeldud PHP harjutamiseks ja väikeste näidete/katsetuste jaoks.

## Sisukord
- [Eeldused](#eeldused)
- [Kloonimine](#kloonimine)
- [Käivitamine](#käivitamine)
- [Struktuur](#struktuur)
- [Näited](#näited)
- [Kasulikud käsud](#kasulikud-käsud)
- [Panustamine](#panustamine)
- [Litsents](#litsents)

## Eeldused
- PHP (soovituslikult **8.x**)
- (Valikuline) Composer, kui lisad tulevikus sõltuvusi
- (Valikuline) Local server (nt PHP built-in server), kui siin on veebinäiteid

## Kloonimine
```bash
git clone https://github.com/maidla63/php.git
cd php
```

## Käivitamine

### 1) Üksiku skripti käivitamine (CLI)
Kui repo sisaldab `.php` faile, saad neid jooksutada nii:

```bash
php path/to/script.php
```

Näide:
```bash
php index.php
```

### 2) Kui siin on veebinäited (PHP built-in server)
Kui sul on `public/` kaust või mingi “entrypoint” fail, saad käivitada kohaliku serveri:

```bash
php -S localhost:8000
```

Seejärel ava:
- `http://localhost:8000`

Kui sul on entrypoint näiteks `public/index.php`, siis:
```bash
php -S localhost:8000 -t public
```

## Struktuur
Repo struktuur võib ajas muutuda, aga tüüpiliselt:

- `index.php` – lihtne alguspunkt / testfail
- `src/` – harjutuste/klasside/ülesannete kood
- `public/` – veebikäivituse jaoks avalikud failid (kui kasutusel)
- `notes/` või `docs/` – märkmed (kui lisad)

Soovi korral lisa siia jaotusse täpselt oma kaustad.

## Näited
Lisa siia konkreetseid näiteid sellest, mida õppisid või katsetasid, nt:

- muutujad ja andmetüübid
- tingimuslaused ja tsüklid
- funktsioonid
- massiivid
- failide lugemine/kirjutamine
- OOP (klassid, pärilus, interfaced)
- vormide töötlemine (kui veebinäited)

## Kasulikud käsud

### PHP versioon
```bash
php -v
```

### Süntaksi kontroll
```bash
php -l path/to/file.php
```

## Panustamine
See on õpperepo, aga kui keegi tahab ideid/ülesandeid lisada:
1. Fork
2. Uus branch
3. Muudatused + commit
4. Pull Request
