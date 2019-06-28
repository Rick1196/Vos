load data
infile 'agenda_un_millon.csv'
into table clientes
fields terminated by ';' optionally enclosed by '"'
(ID,
NOMBRE,
APELLIDO ,
CORREO )