CREATE OR REPLACE FUNCTION fun_delete_tpservicio(wid_tpservicio tipo_servicio.id_tpservicio%TYPE) RETURNS BOOLEAN AS
$BODY$
    BEGIN
        DELETE FROM tipo_servicio 
        WHERE id_tpservicio = wid_tpservicio;
        IF FOUND THEN
            RETURN TRUE;
        ELSE
            RETURN FALSE;
        END IF;
    END;
$BODY$
LANGUAGE PLPGSQL;

