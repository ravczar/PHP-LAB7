
CREATE TABLE ksiega
(
Id INTEGER PRIMARY KEY AUTO_INCREMENT,
Imie VARCHAR(25),
Nazwisko VARCHAR(35),
Email VARCHAR(255),
Miasto VARCHAR(35),
Komentarz VARCHAR(300),
Data DATETIME 

);

ALTER TABLE ksiega DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci; 

INSERT INTO ksiega(Imie, Nazwisko, Email, Miasto, Komentarz, Data)VALUES ('Jan', 'Kowalski', 'majorka@wp.pl', 'Warszawa', 'Nie wiem po co tu jestem, zale zostawie wam jakis komentarz od tak! Kórwa maćka nie zjadła żółci', NOW());
INSERT INTO ksiega(Imie, Nazwisko, Email, Miasto, Komentarz, Data)VALUES ('Adam', 'Nowak', 'klawo@o2.pl', 'Szczecin', 'Bla bla bla. Po co komu ksiega', NOW());
INSERT INTO ksiega(Imie, Nazwisko, Email, Miasto, Komentarz, Data)VALUES ('Andrzej', 'Kowalski', 'eloelo320@interia.pl', 'Nidzica', 'Szukałem wlasnie czegos takiego!', NOW());
INSERT INTO ksiega(Imie, Nazwisko, Email, Miasto, Komentarz, Data)VALUES ('Maria', 'Misiak', 'szczurycatriona@gmail.com', 'Olsztyn', 'Co ja robie tu?', NOW());
INSERT INTO ksiega(Imie, Nazwisko, Email, Miasto, Komentarz, Data)VALUES ('Karol', 'Oskroba', 'akademiapanakleksa@wp.pl', 'Sopot', 'Strasznie nudno uzupelnia sie rekordy w skrypcie', NOW());
INSERT INTO ksiega(Imie, Nazwisko, Email, Miasto, Komentarz, Data)VALUES ('Krzysztof', 'Nowicki', 'nudzesiewmysql@int.pl', 'Radom', 'Plebejska strona to i plebejska ksiega gosci', NOW());
INSERT INTO ksiega(Imie, Nazwisko, Email, Miasto, Komentarz, Data)VALUES ('Anna', 'Szczepanik', 'makabra@wp.pl', 'Bytom', 'Po co nam ksiega gosci', NOW());
INSERT INTO ksiega(Imie, Nazwisko, Email, Miasto, Komentarz, Data)VALUES ('Kacper', 'Adamczyk', 'pszemek.pszybylski@gmail.com', 'Tychy', 'Co za bzdura z ta ksiega gosci, po co to kumu na serio', NOW());
INSERT INTO ksiega(Imie, Nazwisko, Email, Miasto, Komentarz, Data)VALUES ('Kamil', 'Bobrowski', 'wariat@zadupie.pl', 'Kielce', 'Nigdy nie rozumialem potrzeb zostawiania wpisow na takich stronkach, kto to czyta???', NOW());
INSERT INTO ksiega(Imie, Nazwisko, Email, Miasto, Komentarz, Data)VALUES ('Dariusz', 'Malinowski', 'astronauta@wp.pl', 'Bydgoszcz', 'Było super, ale nie wiem czy jeszcze kiedys tu wróce', NOW());
INSERT INTO ksiega(Imie, Nazwisko, Email, Miasto, Komentarz, Data)VALUES ('Marek', 'Smarek', 'ekwinos@anal.pl', 'Bytom', 'Zółty Żegański łabądź żegota urwał mu nać.', NOW());
INSERT INTO ksiega(Imie, Nazwisko, Email, Miasto, Komentarz, Data)VALUES ('Anna', 'Dymna', 'kozanostra@gmail.com', 'Ameryka', 'Nie wiem czemu ale miałem ogromne problemy by dodać polskie znaki do tej bazy danych. Na szczęście już ich nie mam', NOW());
INSERT INTO ksiega(Imie, Nazwisko, Email, Miasto, Komentarz, Data)VALUES ('Rafał', 'Czarnecki', 'ravczar@go2.pl', 'Gdańsk', 'Wszystko powinno być już gotowe, a w pisy powinny lądować w odpowiednim miejscu.', NOW());
INSERT INTO ksiega(Imie, Nazwisko, Email, Miasto, Komentarz, Data)VALUES ('Piotr', 'Sulikowski', 'lubieplacki@trojmiasto.pl', 'Gdynia', 'Bardzo podoba mi się ten portal i ta beznadziejna księga gości też!', NOW());

