<br>-- Martínez Contreras Adán Agustín.
<br>-- 21TE0143.
<br>
<br>create database encuentratucuarto;
<br>
<br>use encuentratucuarto;
<br>
<br>
<br>SELECT units.*, apartments.rooms, apartments.bathrooms, extraservices.name AS extra_service_name
<br>FROM units
<br>JOIN apartments ON units.apartment = apartments.id
<br>JOIN extraservices ON units.extra_services = extraservices.id;
<br>
<br>SELECT users.id, users.username, profiles.profile, profiles.description
<br>FROM users
<br>JOIN profiles ON users.profile = profiles.id;
<br>
<br>SELECT units.id, units.street, units.neighborhood, extraservices.name AS extra_service_name, extraservices.owner,
<br>extraservices.phone
<br>FROM units
<br>JOIN extraservices ON units.extra_services = extraservices.id;
<br>
<br>
<br>
<br>create table profiles(
<br>id tinyint not null auto_increment,
<br>profile varchar(20) not null unique,
<br>description varchar(100),
<br>status boolean default true,
<br>created_at datetime,
<br>updated_at datetime null,
<br>deleted_at datetime null,
<br>primary key(id)
<br>);
<br>
<br>
<br>create table users(
<br>id int not null auto_increment,
<br>username varchar(50) unique,
<br>password varchar(150),
<br>status boolean,
<br>profile tinyint not null,
<br>index(profile),
<br>created_at datetime,
<br>updated_at datetime null,
<br>deleted_at datetime null,
<br>foreign key(profile) references profiles(id),
<br>primary key(id)
<br>);
<br>
<br>
<br>create table userinfo(
<br>id int not null,
<br>name varchar(50),
<br>lastname varchar(80),
<br>birthday date null,
<br>account_number varchar(20) null,
<br>bank_name varchar(50) null,
<br>account_type varchar(20) null,
<br>account_holder varchar(50) null,
<br>cvv int(3) null,
<br>month_c int(2) null,
<br>year_c int(2) null,
<br>gender char,
<br>phone varchar(15) null,
<br>photo varchar(250) null,
<br>bio text null,
<br>RFC varchar(255) null,
<br>email varchar(255) null,
<br>status boolean default true,
<br>created_at datetime,
<br>updated_at datetime null,
<br>deleted_at datetime null,
<br>constraint id_usuario foreign key(id) references users(id),
<br>primary key(id)
<br>);
<br>
<br>
<br>create table apartments(
<br>id int not null auto_increment,
<br>rooms varchar(2) not null,
<br>bathrooms varchar(2) not null,
<br>floor_p varchar(2) not null,
<br>tenant int not null,
<br>image varchar(250) null,
<br>created_at datetime,
<br>updated_at datetime null,
<br>deleted_at datetime null,
<br>foreign key(tenant) references users(id),
<br>primary key(id)
<br>);
<br>
<br>
<br>create table services(
<br>id int not null auto_increment,
<br>category varchar(50) not null,
<br>description text null,
<br>created_at datetime,
<br>updated_at datetime null,
<br>deleted_at datetime null,
<br>status boolean default true,
<br>primary key(id)
<br>);
<br>
<br>
<br>create table extraservices(
<br>id int not null auto_increment,
<br>name varchar(100) not null,
<br>typese int not null,
<br>owner varchar(100) not null,
<br>phone varchar(15) not null,
<br>street varchar(100) not null,
<br>neighborhood varchar(100) not null,
<br>hours varchar(100) not null,
<br>price varchar(50) not null,
<br>created_at datetime,
<br>updated_at datetime null,
<br>deleted_at datetime null,
<br>foreign key(typese) references services(id),
<br>primary key(id)
<br>);
<br>
<br>
<br>create table units(
<br>id int not null auto_increment,
<br>street varchar(100) not null,
<br>neighborhood varchar(100) not null,
<br>extra_services int not null,
<br>apartment int not null,
<br>floors varchar(2) not null,
<br>locality varchar(100) not null,
<br>created_at datetime,
<br>updated_at datetime null,
<br>deleted_at datetime null,
<br>foreign key(apartment) references apartments(id),
<br>foreign key(extra_services) references extraservices(id),
<br>primary key(id)
<br>);
<br>
<br>
<br>create table areas(
<br>id int not null auto_increment,
<br>unit int not null,
<br>created_at datetime,
<br>updated_at datetime null,
<br>deleted_at datetime null,
<br>foreign key(unit) references units(id),
<br>primary key(id)
<br>);
<br>
<br>
<br>
<br>
<br>INSERT INTO profiles (profile, description, status, created_at)
<br>VALUES
<br>('admin', 'Perfil de administrador', true, '2023-05-15 10:00:00'),
<br>('arrendatario', 'Perfil de arrendatario', true, '2023-08-20 11:15:00');
<br>
<br>
<br>INSERT INTO users (username, password, status, profile, created_at)
<br>VALUES
<br>('Dora123', '12345', true, 1, '2023-04-15 09:30:00'),
<br>('Dominho333', 'Domi123', true, 2, '2023-07-22 14:15:00'),
<br>('Maytec1', 'Portillo', true, 1, '2023-02-10 11:45:00'),
<br>('Miguelinh0', 'Passw0rd', false, 2, '2023-09-30 17:20:00'),
<br>('Mani12221', '2023', true, 1, '2023-01-05 08:00:00');
<br>
<br>
<br>INSERT INTO userinfo (id, name, lastname, birthday, account_number, bank_name, account_type, account_holder, cvv,
<br>month_c, year_c, gender, phone, photo, bio, RFC, email, status, created_at)
<br>VALUES
<br>(1, 'Dora', 'Meldarejo', '1987-09-08', 'DORY1773882', 'BankB', 'Savings', 'Dora Meldarejo', 987, 07, 22, 'F', '226-553-8766',
<br>'maria.jpg', 'Me encanta viajar por todo el mundo', 'DORYY287812A', 'doramelga@gmail.com', true, '2023-04-15 09:30:00'),
<br>(2, 'Dominho', 'Ramón', '1999-28-04', '873732718', 'BancoA', 'Checking', 'Dominho Ramón', 876, 65, 56, 'M', '231-123-6754',
<br>'dominho.jpg', 'Amo los lugares pacíficos y relajantes', 'RAMONCHINGJW21', 'ramoncito@example.com', true, '2023-07-22 17:30:00'),
<br>(3, 'Mayte', 'Portilla', '2003-11-03', '9H1H2J01', 'BankC', 'Savings', 'Mayte Portilla', 877, 34, 22, 'F',
<br>'223-688-0926', 'mayte.jpg', 'Amante de la tecnología y tradiciones', 'MAYER829223', 'maymay@example.com', true, '2023-07-10
<br>11:45:00'),
<br>(4, 'Miguel', 'Juarez', '1992-01-25', 'MIKYFHI2992', 'BankD', 'Credit', 'Miguel Juarez', 223, 04, 28, 'M',
<br>'254-322-1453', 'carlos.jpg', 'Me fascinan los restaurantes', 'MISFH299231', 'maiky@example.com', false, '2023-09-30
<br>17:20:00'),
<br>(5, 'Manuela', 'Perdomo', '1978-06-15', '784772663', 'BankA', 'Checking', 'Manuela Perdomo', 777, 67, 22, 'F',
<br>'222-213-4554', 'manuela.jpg', 'Me encantan los lugares con naturaleza', 'MANI2938812', 'perdomomanue@example.com', true, '2023-04-07
<br>08:00:00');
<br>
<br>
<br>INSERT INTO apartments (rooms, bathrooms, floor_p, tenant, image, created_at)
<br>VALUES
<br>('2', '1', '3', 1, 'apartment1.jpg', '2023-04-15 09:30:00'),
<br>('3', '2', '2', 2, 'apartment2.jpg', '2023-07-22 14:15:00'),
<br>('1', '1', '1', 3, 'apartment3.jpg', '2023-02-10 11:45:00'),
<br>('2', '2', '4', 4, 'apartment4.jpg', '2023-09-30 17:20:00'),
<br>('4', '2', '6', 5, 'apartment5.jpg', '2023-01-05 08:00:00'),
<br>('1', '1', '5', 1, 'apartment6.jpg', '2023-03-10 15:45:00'),
<br>('3', '1', '2', 2, 'apartment7.jpg', '2023-05-20 12:30:00'),
<br>('2', '1', '8', 3, 'apartment8.jpg', '2023-08-25 10:15:00'),
<br>('4', '3', '1', 4, 'apartment9.jpg', '2023-02-16 17:45:00'),
<br>('2', '1', '7', 5, 'apartment10.jpg', '2023-06-10 08:30:00');
<br>
<br>
<br>INSERT INTO services (category, description, created_at)
<br>VALUES
<br>('Lavandería', 'Autoservicio para lavado y secado de su ropa sin ayuda profesional.', '2023-04-15 09:30:00'),
<br>('Supermercado', 'Establecimiento de venta de bienes de consumo personal.', '2023-07-22 14:15:00'),
<br>('Restaurante', 'Restaurante con platos deliciosos y variados.', '2023-02-10 11:45:00'),
<br>('Gimnasio', 'Establecimiento con una gran variedad de máquinas para ejercitar.', '2023-09-30 17:20:00'),
<br>('Farmacia', 'Establecimiento médico ideal para comprar sus bienes médicos.', '2023-01-05 08:00:00'),
<br>('Cafetería', 'Establecimientos de servicios con variedad de platillos y bebidas.', '2023-03-10 15:45:00'),
<br>('Tintorería', 'Establecimiento para cuidar y renovar el color de tu ropa.', '2023-05-20 12:30:00'),
<br>('Centro de Salud', 'Establecimiento de emergencias e incluso situaciones de emergencia.', '2023-08-25 10:15:00'),
<br>('Parque Recreativo', 'Centro de entretenimiento al aire libre para todas las edades.', '2023-02-16 17:45:00'),
<br>('Biblioteca', 'Sitio de relajación y lectura sin ruido alguno.', '2023-06-10 08:30:00');
<br>
<br>
<br>INSERT INTO extraservices (name, typese, owner, phone, street, neighborhood, hours, price, created_at)
<br>VALUES
<br>('Lavandería "La Burbuja"', 1, 'Fernanda Medina', '231-766-4567', 'Calle Cleaning #123', 'Colonia Defrusia', '9:00 AM -
<br>7:00 PM', '$7 por carga', '2023-04-15 09:30:00'),
<br>('Supermercado "Grupo Comercial Sequera"', 2, 'Emmanuel Castaneda', '226-213-2234', 'Avenida Zapata #456', 'Barrio Paraiso', '8:00
<br>AM - 9:00 PM', 'Varía por producto', '2023-07-22 14:15:00'),
<br>('Restaurante "Matambre"', 3, 'Romina Perez', '555-555-5555', 'Calle Yummy #789', 'Avenida Gastronómica', '11:00 AM
<br>- 10:00 PM', '$15 por plato', '2023-02-10 11:45:00'),
<br>('Gimnasio "Bulls Gym"', 4, 'Fernando Orozco', '555-654-0921', 'Avenida Exercise #321', 'Barrio Clown', '6:00 AM -
<br>9:00 PM', '$140 por mes', '2023-09-30 17:20:00'),
<br>('Farmacia "ISSSTE"', 5, 'Phineas Golwin', '312-224-6552', 'Calle Remedios #654', 'Colonia Salud', '8:00 AM -
<br>8:00 PM', 'Varía por producto', '2023-01-05 08:00:00'),
<br>('Cafetería "Café Aromático"', 6, 'Carlos Sánchez', '555-222-3333', 'Calle Café #987', 'Zona Cafeterías', '7:00 AM -
<br>6:00 PM', '$3 por café', '2023-03-10 15:45:00'),
<br>('Tintorería "Black Ink"', 7, 'Andrea Fernández', '233-134-6442', 'Avenida Limpia #111', 'Barrio Lavandero',
<br>'10:00 AM - 7:00 PM', '$12 por prenda', '2023-05-20 12:30:00'),
<br>('Centro de Salud "Vitalidad Médica"', 8, 'Daniel Ramírez', '555-444-5555', 'Calle de la Salud #444', 'Zona de Salud',
<br>'8:00 AM - 5:00 PM', 'Varía por consulta', '2023-08-25 10:15:00'),
<br>('Parque Recreativo "Diversión en el campo"', 9, 'Carmen González', '555-999-0000', 'Avenida Recreación #777',
<br>'Colonia Diversión', '7:00 AM - 8:00 PM', 'Gratis', '2023-02-16 17:45:00'),
<br>('Biblioteca "Búho Negro"', 10, 'Jorge Herrera', '255-123-0988', 'Calle del Búho #222', 'Zona de
<br>Lectura y Redacción', '9:00 AM - 6:00 PM', 'Gratis', '2023-06-10 08:30:00');
<br>
<br>
<br>INSERT INTO units (street, neighborhood, extra_services, apartment, floors, locality, created_at)
<br>VALUES
<br>('Calle San Miguel #123', 'Colonia Centro', 1, 1, '2', 'Ciudad Central', '2023-04-15 09:30:00'),
<br>('Avenida Independencia #456', 'Barrio Comercial', 2, 2, '3', 'Ciudad Compras', '2023-07-22 14:15:00'),
<br>('Calle de la Rosa #789', 'Zona Residencial', 3, 3, '1', 'Ciudad Residencia', '2023-02-10 11:45:00'),
<br>('Avenida de los Pájaros #321', 'Barrio Natural', 4, 4, '4', 'Ciudad Naturaleza', '2023-09-30 17:20:00'),
<br>('Calle del Sol #654', 'Colonia Solar', 5, 5, '2', 'Ciudad Solar', '2023-01-05 08:00:00'),
<br>('Calle Luna #987', 'Barrio Lunar', 1, 1, '5', 'Ciudad Lunar', '2023-03-10 15:45:00'),
<br>('Avenida de los Ángeles #111', 'Zona Celestial', 2, 2, '6', 'Ciudad Celestial', '2023-05-20 12:30:00'),
<br>('Calle de las Montañas #444', 'Colonia Montañosa', 3, 3, '1', 'Ciudad Montaña', '2023-08-25 10:15:00'),
<br>('Avenida del Mar #777', 'Barrio Marítimo', 4, 4, '3', 'Ciudad Mar', '2023-02-16 17:45:00'),
<br>('Calle del Bosque #333', 'Zona Boscosa', 5, 5, '2', 'Ciudad Bosque', '2023-06-10 08:30:00');
<br>
<br>
<br>INSERT INTO areas (unit, created_at)
<br>VALUES
<br>(1, '2023-04-15 09:30:00'),
<br>(3, '2023-07-22 14:15:00'),
<br>(7, '2023-02-10 12:30:00'),
<br>(2, '2023-09-30 18:45:00'),
<br>(9, '2023-01-05 08:15:00');
<br>
<br>
<br>
<br>-- View para la base de datos:
<br>
<br>#Visualización de departamentos
<br>CREATE VIEW apartments_view AS SELECT * FROM apartments;
<br>
<br>#Vista que muestra la información del usuario junto con los detalles de su perfil
<br>CREATE VIEW information_user_view
<br>AS SELECT u.id, u.username, ui.name, ui.lastname, p.profile, p.description
<br>FROM users u
<br>JOIN userinfo ui ON u.id = ui.id
<br>JOIN profiles p ON u.profile = p.id;
<br>
<br>#Vista de apartamentos con información de sus arrendatarios
<br>CREATE VIEW apartments_info_view
<br>AS SELECT a.id, a.rooms, a.bathrooms, a.floor_p, a.tenant, u.username
<br>FROM apartments a
<br>JOIN users u ON a.tenant = u.id;
<br>
<br>CREATE VIEW vw_available_extraservices AS
<br>SELECT extraservices.id, extraservices.name, extraservices.owner, extraservices.phone
<br>FROM extraservices
<br>WHERE extraservices.id NOT IN (SELECT DISTINCT(extra_services) FROM units WHERE extra_services IS NOT NULL);
<br>
<br>
<br>CREATE VIEW vw_total_units_areas AS
<br>SELECT units.id, units.street, units.neighborhood, COUNT(areas.id) AS total_areas
<br>FROM units
<br>LEFT JOIN areas ON units.id = areas.unit
<br>GROUP BY units.id, units.street, units.neighborhood;
<br>