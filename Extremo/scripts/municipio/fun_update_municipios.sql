--SELECT fun_update_usuario(91423627,'91423627','Carlos Perez','laura2021*','1','2021-10-17')
CREATE OR REPLACE FUNCTION fun_update_municipios(wid_municipio municipios.id_municipio%TYPE,
                                                wnom_municipio municipios.nom_municipio%TYPE,
                                                wcod_postal municipios.cod_postal%TYPE) RETURNS BOOLEAN AS
$BODY$
    BEGIN
        UPDATE municipios  SET  
                                nom_municipio  =  wnom_municipio,
                                cod_postal     =  wcod_postal
        WHERE id_municipio = wid_municipio;
        IF FOUND THEN
            RETURN TRUE;
        ELSE
            RETURN FALSE;
        END IF;
    END;    
$BODY$
LANGUAGE PLPGSQL