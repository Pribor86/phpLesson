CREATE TABLE students(
                        last_name VARCHAR(30) NOT NULL,
                        first_name VARCHAR(30) NOT NULL,
                        isikukood VARCHAR(11) NOT NULL PRIMARY KEY,
                        grade INT NOT NULL,
                        email VARCHAR(20) NOT NULL UNIQUE,
                        message VARCHAR(250)
                    );

-- INSERT INTO students (last_name, first_name, isikukood, grade, email, message) VALUES
--     ('Kallio', 'Kirsi', '38010111111', 3, 'asd@gmail.com', 'Kirsi Kallio'),
--     ('Robert', 'Kursk', '38709242222', 2, 'kursk@gmail.com', 'I`m Kursk Robert'),
--     ('Kulio', 'Pirsi', '38212121212', 4, 'kulio@mail.com', 'Kulio Pirsi'),
--     ('Soren', 'Dennis', '48111112321', 3, 'soren@yandex.ru', 'Hi Soren'),
--     ('Atkinson', 'Memphis ', '38001212112', 2, 'memphis@yahoo.com', 'Im Memphis'),
--     ('Durham', 'Danna', '49501052223', 1, 'danna@gmail.com', 'IM Danna, how are you?'),
--     ('Meyer', 'Jayleen', '49604023732', 4, 'jayleen@mail.ru', 'Dont send me the spam please'),
--     ('Chang', 'Caylee', '36609121121', 3, 'caylee@gmail.com', 'Im busy'),
--     ('Pruitt', 'Ulises', '49906072323', 1, 'ulises@eek.ee', 'Im able to help you'),
--     ('Hernandez', 'Kaitlin', '37901212112', 2, 'kaitlin@gmail.com', 'I`m Kaitlin'),
--     ('Henry', 'June', '48904042524', 2, 'june@gmail.com', 'I`m June');

