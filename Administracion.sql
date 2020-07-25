/*==============================================================*/
/* DBMS name:      MySQL 5.0                                    */
/* Created on:     13/3/2020 11:12:03                           */
/*==============================================================*/


drop table if exists CALIFICACIONES;

drop table if exists MATERIA;

drop table if exists PERSONA;

/*==============================================================*/
/* Table: CALIFICACIONES                                        */
/*==============================================================*/
create table CALIFICACIONES
(
   IDCALIFICACION       int(8) not null,
   IDMATERIA            int(4) not null,
   IDPERSONA            int(8) not null,
   CALIFICACION         numeric(2,2) not null,
   primary key (IDCALIFICACION, IDMATERIA, IDPERSONA)
);

/*==============================================================*/
/* Table: MATERIA                                               */
/*==============================================================*/
create table MATERIA
(
   IDMATERIA            int(4) not null auto_increment,
   NOMBREMATERIA        varchar(32) not null,
   primary key (IDMATERIA)
);

/*==============================================================*/
/* Table: PERSONA                                               */
/*==============================================================*/
create table PERSONA
(
   ID                   int(8) not null auto_increment,
   NOMBRE               varchar(30) not null,
   APELLIDOS            varchar(60) not null,
   EMAIL                varchar(60) not null,
   FECHANACIMIENTO      date not null,
   SALARIO              decimal(8,2) not null,
   primary key (ID)
);

alter table CALIFICACIONES add constraint FK_CALIFICACIONES foreign key (IDMATERIA)
      references MATERIA (IDMATERIA) on delete restrict on update restrict;

alter table CALIFICACIONES add constraint FK_CALIFICACIONES2 foreign key (IDPERSONA)
      references PERSONA (ID) on delete restrict on update restrict;

