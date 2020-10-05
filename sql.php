CREATE TABLE sites (id
INT AUTO_INCREMENT PRIMARY KEY,
email
CHAR(128),
password CHAR(64)
);


CREATE TABLE sites (id
INT AUTO_INCREMENT PRIMARY KEY,
sites CHAR(64)
);


/ rename collumn
ALTER TABLE `users` CHANGE `sity` `sity_id` VARCHAR(120);

Запись данных
Для добавления новых записей в таблицы используются
запросы типа INSERT
INSERT INTO <название таблицы>
    SET <имя столбца1> = <значение2>, <имя столбца2> = <значение2>
                    Пример
                    INSERT INTO users
                    SET email = 'vasya@mail.ru', password = 'secret';


                    Сортировка записей
                    По умолчанию результаты выдаются без сортировки.
                    Чтобы отсортировать список записей существует выражение ORDER BY
                    Два вида сортировки:
                    • ASC – от меньшего к большему
                    • DESC – от большего к меньшему
                    SELECT * FROM categories ORDER BY name ASC


                    Чтение с условием
                    Когда требуется вернуть не все записи, а выполнить поиск по
                    определенному условию используется оператор WHERE
                    SELECT <перечисление полей> FROM <таблица>
                            WHERE <имя поля> <оператор> <значение>
                                        Пример
                                        SELECT id, email, password FROM users
                                        WHERE email = 'vasya@mail.ru';


                                        Обновление записей
                                        Для изменения информации в существующих записях используется
                                        оператор UPDATE с условием поиска
                                        UPDATE <таблица> SET <имя столбца1> = <значение2>
                                                    WHERE <имя столбца> = <значение>


                                                            Удаление записей
                                                            Для удаления записей из таблицы используется оператор DELETE
                                                            совместно с условием удаления
                                                            DELETE FROM <таблица> WHERE <имя столбца> = <значение>
                                                                        DELETE FROM users WHERE email = 'vasya@mail.ru';



                                                                        Оператор объединения
                                                                        Для «связывания» двух таблиц вместе в одном запросе
                                                                        используется оператор объединения JOIN
                                                                        SELECT <перечисление полей> FROM <таблица1>
                                                                                JOIN <таблица2> ON <условие объединения>
                                                                                        Пример
                                                                                        SELECT c.id, email, content FROM comments c
                                                                                        JOIN users u
                                                                                        ON c.user_id = u.id;