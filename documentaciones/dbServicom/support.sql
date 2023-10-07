create or replace table clientes
(
    id_clients int auto_increment
        primary key,
    ci         int (20)  null,
    apel       varchar(50)  null,
    nom        varchar(50)  null,
    tel        int(20)  null,
    email      varchar(100) null,
    fec_nac    date         null,
    fec_reg    datetime     null,
    fec_modc   datetime     null,
    estado     int(20)      null
);


create or replace table raz_social
(
    id_raz_social int auto_increment
        primary key,
    det_rep       varchar(100) null
);

create or replace table repuestos
(
    id_rep  int auto_increment
        primary key,
    `desc`  varchar(100)   null,
    foto    varchar(100)   null,
    cant    int(5)         null,
    precio  decimal(10, 2) null,
    fec_ing datetime       null,
    estado  int(5)         null
);

create or replace table servicios
(
    id_serv     int auto_increment
        primary key,
    nomb_serv   varchar(50)    null,
    precio_serv decimal(10, 2) null
);

-- Crear la tabla marca
CREATE TABLE marcas
(
    id_marca     INT AUTO_INCREMENT PRIMARY KEY,
    marca VARCHAR(50)
);

create or replace table tipo_eq
(
    id_t_eq int auto_increment
        primary key,
    t_eq    varchar(50) null
);

create or replace table usuarios
(
    id_user   int auto_increment
        primary key,
    user      varchar(100) null,
    password  varchar(200) null,
    nom       varchar(100) null,
    apel      varchar(100) null,
    perfil    varchar(50)  null,
    foto      varchar(100) null,
    tel       varchar(8)   null,
    ult_login datetime     null,
    fec_reg   datetime     null,
    estado    int(20)      null
);

create or replace table ing_equipos
(
    id_ing         int auto_increment
        primary key,
    foto           varchar(100) null,
    `desc`         text         null,
    garantia       varchar(50)  null,
    mod_eq         varchar(50)  null,
    fec_ing        datetime     null,
    fec_sald       datetime     null,
    estado         varchar(20)  null,
    estado_eq      text         null,
    id_cliente     int          null,
    id_usuario     int          null,
    id_marca       int          null,
    id_tipo_equipo int          null,
        foreign key (id_cliente) references clientes (id_clients),
        foreign key (id_usuario) references usuarios (id_user),
        foreign key (id_marca) references marcas (id_marca),
        foreign key (id_tipo_equipo) references tipo_eq (id_t_eq)
);

create or replace index id_cliente
    on ing_equipos (id_cliente);

create or replace index id_marca
    on ing_equipos (id_marca);

create or replace index id_tipo_equipo
    on ing_equipos (id_tipo_equipo);

create or replace index id_usuario
    on ing_equipos (id_usuario);

create or replace table pago_rep
(
    id_p_rep   int auto_increment
        primary key,
    fec_vent   date           null,
    total_mont decimal(10, 2) null,
    id_razon   int            null,
    id_ingreso int            null,
        foreign key (id_razon) references raz_social (id_raz_social),
        foreign key (id_ingreso) references ing_equipos (id_cliente)
);

create or replace table det_pago_rep
(
    cant_rep         int  null,
    det_rep          text null,
    id_repuesto      int  not null,
    id_pago_repuesto int  not null,
        primary key (id_repuesto, id_pago_repuesto),
        foreign key (id_repuesto) references repuestos (id_rep),
        foreign key (id_pago_repuesto) references pago_rep (id_p_rep)
);

create or replace index id_pago_repuesto
    on det_pago_rep (id_pago_repuesto);

create or replace index id_ingreso
    on pago_rep (id_ingreso);

create or replace index id_razon
    on pago_rep (id_razon);

create or replace table pago_servicio
(
    id_pago_servicio int auto_increment
        primary key,
    fec_reg          datetime null,
    totalPago        int      null,
    id_ingreso       int      null,
    id_razon         int      null,
        foreign key (id_ingreso) references ing_equipos (id_ing),
        foreign key (id_razon) references raz_social (id_raz_social)
);

create or replace table det_pago_servi
(
    id_pag_serv      int            not null,
    id_serv          int            not null,
    costo_servicio   decimal(10, 2) null,
    detalle_servicio text           null,
        primary key (id_serv, id_pag_serv),
        foreign key (id_pag_serv) references pago_servicio (id_pago_servicio),
        foreign key (id_serv) references servicios (id_serv)
);

create or replace index id_pag_serv
    on det_pago_servi (id_pag_serv);

create or replace index id_ingreso
    on pago_servicio (id_ingreso);

create or replace index id_razon
    on pago_servicio (id_razon);

-- Insertar un nuevo usuario en la tabla "usuarios"
INSERT INTO usuarios (user, password, nom, apel, perfil, foto, tel, ult_login, fec_reg, estado)

VALUES ('Mendez', '$2a$07$asxx54ahjppf45sd87a5au4k7YA3SOmjH2NLs0fMKyJa42RMttrJq', 'Alejandro', 'Mendez Mendez',
        'Tecnico', 'vistas/img/usuarios/Mendez/185.jpg', '71234567', '0000-00-00 00:00:00', '2023-04-26 07:13:24', 1),
       ('Cesar', '$2a$07$asxx54ahjppf45sd87a5auLFUPYTP1QEQyNDSpnG5wxh.AjfdCPPG', 'Cesar', 'Augusto', 'Encargado',
        'vistas/img/usuarios/Cesar/542.jpg', '72123456', '0000-00-00 00:00:00', '2023-04-26 07:13:24', 1),
       ('Carlos', '$2a$07$asxx54ahjppf45sd87a5auplkzz9Rfew1lxnyeP5taFjIwNpz8Q82', 'Carlos', 'Crispin', 'Tecnico',
        'vistas/img/usuarios/Carlos/249.jpg', '73234567', '0000-00-00 00:00:00', '2023-04-26 07:13:24', 1),
       ('Marco', '$2a$07$asxx54ahjppf45sd87a5auyltLpjDEozuI3iL8GCe55EDQW5OIhBG', 'Marco', 'Tulio', 'Limpiesa',
        'vistas/img/usuarios/Marco/360.jpg', '74345678', '0000-00-00 00:00:00', '2023-04-26 07:14:00', 1),
       ('Noriega', '$2a$07$asxx54ahjppf45sd87a5au7DnRqn4t8/SRG.UmQ5GyRNnvtjSN1IO', 'Noriega', 'Morales', 'Encargado',
        'vistas/img/usuarios/Noriega/541.jpg', '75456789', '0000-00-00 00:00:00', '2023-04-26 07:16:40', 0),
       ('Augusto', '$2a$07$asxx54ahjppf45sd87a5au9fh.UhrU2EmLaUDSL44D7WalAhNIpPq', 'César', 'Augusto', 'Tecnico',
        'vistas/img/usuarios/Octaviano/406.jpg', '76567890', '0000-00-00 00:00:00', '2023-04-26 07:19:40', 1),
       ('Octaviano', '$2a$07$asxx54ahjppf45sd87a5audGr6PxySH2lTszlun4YfPpNmIrDixVC', 'Octaviano', 'Camey Ramírez',
        'Tecnico', 'vistas/img/usuarios/Octaviano/406.jpg', '77678901', '0000-00-00 00:00:00', '2023-04-26 07:19:40',
        1),
       ('Osman', '$2a$07$asxx54ahjppf45sd87a5au1d9bJwiBeFaiH8DidFJzV.WTNZ0RmWK', 'Osman', 'Rosales Arias', 'Tecnico',
        'vistas/img/usuarios/Osman/117.jpg', '78789012', '0000-00-00 00:00:00', '2023-04-26 07:20:25', 1),
       ('Francisca', '$2a$07$asxx54ahjppf45sd87a5au6026.WHRapBeDeQD9EgtyoL3jL3dlO2', 'Ana', 'Francisca', 'Secretaria',
        'vistas/img/usuarios/Francisca/760.jpg', '65456789', '0000-00-00 00:00:00', '2023-04-26 07:20:58', 0),
       ('Ana', '$2a$07$asxx54ahjppf45sd87a5auDYEQn9FSFgFKqtulxg4A1kGWe2vSM0O', 'Lucia', 'Quiroga', 'Limpiesa',
        'vistas/img/usuarios/Ana/668.jpg', '66567890', '0000-00-00 00:00:00', '2023-04-26 07:22:20', 0),
       ('andres', '$2a$07$asxx54ahjppf45sd87a5auG6wzcvHQX0OYqZGMhIPic7EbdRk/KIC', 'ANDRES', 'MAMANI', 'Limpiesa',
        'vistas/img/usuarios/Ana/668.jpg', '67678901', '0000-00-00 00:00:00', '2023-04-26 07:22:20', 1),
       ('Leiva', '$2a$07$asxx54ahjppf45sd87a5auiQNEo6O6MC2N3yU6rP/p2915.sCkwey', 'Leiva', 'García', 'Secretaria',
        'vistas/img/usuarios/Leiva/244.jpg', '68789012', '0000-00-00 00:00:00', '2023-04-26 07:24:10', 0),
       ('Amanda', '$2a$07$asxx54ahjppf45sd87a5auxNjzjqyKbG/yae36Qr.VjxWxxSG0Hgm', 'Dora Amanda', 'Quispe', 'Limpiesa',
        'vistas/img/usuarios/Amanda/864.jpg', '69890123', '0000-00-00 00:00:00', '2023-04-26 07:24:58', 1);



