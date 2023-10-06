--SELECT fun_update_usuario(91423627,'91423627','Carlos Perez','laura2021*','1','2021-10-17')
CREATE OR REPLACE FUNCTION fun_update_servicios(wid_servicio servicios.id_servicio%TYPE,
                                                wnom_servicio servicios.nom_servicio%TYPE,
                                                wdispo_servicio servicios.dispo_servicio%TYPE,
                                                wdeta_servicio servicios.deta_servicio%TYPE,
                                                wprecio_servicio servicios.precio_servicio%TYPE) RETURNS BOOLEAN AS

$BODY$
    BEGIN
        UPDATE servicios  SET  
                                nom_servicio    = wnom_servicio,
                                dispo_servicio  = wdispo_servicio,
                                deta_servicio   = wdeta_servicio,
                                precio_servicio = wprecio_servicio
        WHERE id_servicio = wid_servicio;
        IF FOUND THEN
            RETURN TRUE;
        ELSE
            RETURN FALSE;
        END IF;
    END;
$BODY$
LANGUAGE PLPGSQL
 
 
 
 