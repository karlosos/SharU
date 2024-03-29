### http://sharu.cba.pl/

SharU 2013
=====
Serwis udostępniania treści w języku PHP.

## Co to jest?
Jest to projekt tworzony na lekcjach wiaInternet. Upubliczniłem go z kilku powodów:
* łatwiej śledzi się zmiany dzięki rozproszonemu systemowi wersji
* łatwiej pomaga się innym, wystarczy odesłać ich tutaj
* ogólnie wszystko łatwiej, a po co sobie utrudniać

Teoretycznie kod zamieszczony tutaj powinien być wykorzystany na stronie [Sharu](http://sharu.cba.pl), ale w praktyce często bywa on przestarzały.

**Zezwalam na wszelkie kopiowanie, wzorowanie się i tym podobne, ale w przypadku jakichkolwiek kontrowersji (u nauczyciela) liczę na uczciwość. :-)**

![https://i.imgur.com/FkafhmP.png](https://i.imgur.com/FkafhmP.png)

### Jaka baza danych?
Plik /database/blog.sql importujcie do założonej bazy danych. Jeżeli nic nie zmienialiście, to powinna nazywac się blog.

### Loginy i hasła
Konto z prawami administratora:
* admin admin1
Konta z prawami użytkownika:
* user 123456
* karol 123456

### Jak to ściągnąć?
Gdzieś po prawej jest przycisk pobrania jako archiwum zip lub jeżeli korzystacie z gita to już powinniście umieć klonować repozytoria.

### Czy mogę pomóc?
Jasne, jestem otwarty na wszelkie propozycje, ale nie wszystkie zdołam wdrożyć.

### Docker in 2022

Zaktualizowałem repo tak że projekt może być odpalony z dockera. Odpalamy cały projekt komendą:

```
docker compose up
```

Aplikacja powinna być dostępna pod adresem [localhost:3000](localhost:3000), phpmyadmin powinien być dostępny pod adresem [localhost:3001](localhost:3001). Credentiale do bazy danych to user:password i są zdefiniowane w `.env`. 

Domyślnie baza danych powinna być wypełniona przez skrypt `./database/blog.sql`. Jeżeli tak się nie stało można zaimportować ten plik przez phpmyadmin.

Jest problem z linią 

> - "./database:/docker-entrypoint-initdb.d"

W `docker-compose.yml`. Gdy ta linia jest to nie są ustawiane domyślne hasła dla użytkowników z `.env`. Do sprawdzenia. Aktualny workaround to odpalenie najpierw `docker-compose up` z zakomentowaną linią z initial scriptem a później z odkomentowaną.

_Pozdr KarlososHD_
