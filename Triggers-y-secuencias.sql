-- Secuencia para incremenar el campo id de la tabla medios de transportes (conveyances)
CREATE SEQUENCE seq_id_conveyance
  MAXVALUE 999999
  INCREMENT BY 1
  NOCYCLE ;

-- eliminar una secuencia
DROP SEQUENCE seq_id_conveyance;

-- Trigger (disparador) que identifica cuando un tranporte es agregado o eliminado de la tabla (conveyances)
CREATE OR REPLACE TRIGGER audit_transportes
    BEFORE INSERT OR DELETE ON conveyances
    FOR EACH ROW
    BEGIN
        IF INSERTING THEN
            INSERT INTO audit_transportes VALUES
            (seq_id_conveyance.nextval,:new.type||' :: Se ha producido una inserción en la tabla conveyances', SYSDATE);
        ELSIF DELETING THEN
            INSERT INTO audit_transportes VALUES
            (seq_id_conveyance.nextval,:old.type||' :: Se ha produccido un borrado en la tabla conveyances', SYSDATE);
        end if;
    END;

SELECT * FROM audit_transportes;

-- secuencia para id de credenciales
CREATE SEQUENCE seq_id_credentials
  MAXVALUE 999999
  INCREMENT BY 1
  NOCYCLE   ;

--eliminar una secuencia
DROP SEQUENCE seq_id_credentials;

CREATE OR REPLACE TRIGGER audit_crendentials
    BEFORE
        INSERT OR
        DELETE
    ON credentials
    FOR EACH ROW
    BEGIN
        IF INSERTING THEN
            INSERT INTO audit_credentials VALUES
            (seq_id_credentials.nextval,:new.type||' :: Se ha producido una inserción en la tabla --credentials',SYSDATE);
        ELSIF DELETING THEN
            INSERT INTO audit_credentials VALUES
            (seq_id_credentials.nextval,:old.type||' :: Se ha produccido un borrado en la tabla --credentials', SYSDATE);
        END IF;
    END;

select * from audit_credentials;

-- secuencia --
CREATE SEQUENCE seq_tipo_visitante
  MAXVALUE 999999
  INCREMENT BY 1
  NOCYCLE   ;

CREATE OR REPLACE TRIGGER audit_type_of_visitors
    BEFORE
        INSERT OR
        DELETE
    ON type_of_visitors
    FOR EACH ROW
    BEGIN
        IF INSERTING THEN
            INSERT INTO audit_tipo_visitantes VALUES
            (seq_tipo_visitante.nextval,:new.type||' :: Se ha producido una inserción en la tabla --type_of_visitors',SYSDATE);
        ELSIF DELETING THEN
            INSERT INTO audit_credentials VALUES
            (seq_tipo_visitante.nextval,:old.type||' :: Se ha produccido un borrado en la tabla --type_of_visitors', SYSDATE);
        END IF;
    END;

-- secuencia
CREATE SEQUENCE seq_visitante
  MAXVALUE 999999
  INCREMENT BY 1
  NOCYCLE   ;

CREATE OR REPLACE TRIGGER audit_visitante
    BEFORE
        INSERT OR
        DELETE
    ON visitors
    FOR EACH ROW
    BEGIN
        IF INSERTING THEN
            INSERT INTO audit_visitantes VALUES
            (seq_tipo_visitante.nextval,'('||:new.first_name||' '||:new.last_name||') :: Se ha producido una inserción en la tabla --visitors',SYSDATE);
        ELSIF DELETING THEN
            INSERT INTO audit_credentials VALUES
            (seq_tipo_visitante.nextval,'('||:new.first_name||' '||:new.last_name||') :: Se ha produccido un borrado en la tabla --visitors', SYSDATE);
        END IF;
    END;

SELECT * FROM audit_visitantes;

create procedure "INSERT_HOUSE"
  (condo in number, numero in number) as
 begin
     FOR nhouse IN 1..numero
    LOOP
       insert into JRPALACIO.HOUSES(estado, habitantes, id_condominio,CREATED_AT, UPDATED_AT) values(0,0,condo, sysdate, sysdate);
    END LOOP;
 end;
/





CREATE OR REPLACE TRIGGER house_after_insert
AFTER INSERT
   ON JRPALACIO.CONDOMINIA
   FOR EACH ROW

DECLARE

BEGIN

     INSERT_HOUSE(:NEW.ID,:new.NUM_RENTED_HOUSES);


END;/

ALTER TABLE JRPALACIO.ARRENDATED_HOUSES
ADD CONSTRAINT check_habs
  CHECK (HABITANTES < 6);
