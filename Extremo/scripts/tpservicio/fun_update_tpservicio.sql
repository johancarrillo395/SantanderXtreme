CREATE OR REPLACE FUNCTION fun_update_tpservicio(wid_tpservicio tipo_servicio.id_tpservicio%TYPE,wnom_tpservicio tipo_servicio.nom_tpservicio%TYPE) RETURNS BOOLEAN AS

$BODY$
    BEGIN
        UPDATE tipo_servicio  SET  
                                nom_tpservicio  = wnom_tpservicio
        WHERE id_tpservicio = wid_tpservicio;
        IF FOUND THEN
            RETURN TRUE;
        ELSE
            RETURN FALSE;
        END IF;
    END;
$BODY$
LANGUAGE PLPGSQL
 
 