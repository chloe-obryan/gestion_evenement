/*==============================================================*/
/* DBMS name:      MySQL 5.0                                    */
/* Created on:     08/05/2020 11:38:32                          */
/*==============================================================*/


drop table if exists evenement;

/*==============================================================*/
/* Table: evenement                                             */
/*==============================================================*/
create table evenement
(
   id                   int not null,
   nom                  varchar(254),
   types                 varchar(254),
   organisateur         varchar(254),
   dates                 datetime,
   heure                varchar(254),
   lieu                 varchar(254),
   descriptions          varchar(254),
   images                varchar(254),
   primary key (id)
);

