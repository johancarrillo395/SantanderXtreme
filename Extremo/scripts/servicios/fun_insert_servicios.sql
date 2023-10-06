 --SELECT fun_insert_usuarios(100,'jloca','Juana la Loca','juana123',1);
CREATE OR REPLACE FUNCTION fun_insert_servicios(wid_tpservicio servicios.id_tpservicio%TYPE,wnom_servicio servicios.nom_servicio%TYPE,wdispo_servicio servicios.dispo_servicio%TYPE,wdeta_servicio servicios.deta_servicio%TYPE,wprecio_servicio servicios.precio_servicio%TYPE) RETURNS BOOLEAN AS
                                               
$BODY$
    DECLARE wid_servicio servicios.id_servicio%TYPE; 
    BEGIN
        SELECT MAX(id_servicio) INTO wid_servicio FROM servicios;
        IF  wid_servicio IS NULL OR  wid_servicio=0 THEN
           wid_servicio = 1;
        ELSE
            wid_servicio =  wid_servicio + 1;
        END IF;
        INSERT INTO servicios  VALUES(wid_servicio,wid_tpservicio,wnom_servicio,wdispo_servicio,wdeta_servicio,wprecio_servicio);
        IF FOUND THEN
            RETURN TRUE;
        ELSE
            RETURN FALSE;
        END IF;
    END;
$BODY$
LANGUAGE PLPGSQL; 


 
                                               
 