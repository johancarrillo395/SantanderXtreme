--SELECT fun_insert_usuarios(100,'jloca','Juana la Loca','juana123',1);
CREATE OR REPLACE FUNCTION fun_insert_tpservicio(wnom_tpservicio tipo_servicio.nom_tpservicio%TYPE) RETURNS BOOLEAN AS
                                               
$BODY$
    DECLARE wid_tpservicio tipo_servicio.id_tpservicio%TYPE; 
    BEGIN
        SELECT MAX(id_tpservicio) INTO wid_tpservicio FROM tipo_servicio ;
        IF wid_tpservicio IS NULL OR wid_tpservicio=0 THEN
          wid_tpservicio = 1;
        ELSE
           wid_tpservicio = wid_tpservicio + 1;
        END IF;
        INSERT INTO tipo_servicio  VALUES(wid_tpservicio,wnom_tpservicio);
        IF FOUND THEN
            RETURN TRUE;
        ELSE
            RETURN FALSE;
        END IF;
    END;
$BODY$
LANGUAGE PLPGSQL; 

 