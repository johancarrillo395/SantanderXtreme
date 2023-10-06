CREATE OR REPLACE FUNCTION fun_delete_servicio(wid_servicio servicios.id_servicio%TYPE,wid_tpservicio tipo_servicio.id_tpservicio%TYPE) RETURNS BOOLEAN AS
$BODY$
    BEGIN
        DELETE FROM servicios
        WHERE id_servicio = wid_servicio;
        IF FOUND THEN
            RETURN TRUE;
        ELSE
            RETURN FALSE;
        END IF;
    END;
$BODY$
LANGUAGE PLPGSQL;

 

