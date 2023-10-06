
--SELECT fun_insert_usuarios(100,'jloca','Juana la Loca','juana123',1);
CREATE OR REPLACE FUNCTION fun_insert_municipios(wnom_municipio municipios.nom_municipio%TYPE,
                                                wcod_postal municipios.cod_postal%TYPE ) RETURNS BOOLEAN AS
$BODY$
    DECLARE wid_municipio municipios.id_municipio%TYPE;
    BEGIN
        SELECT MAX(id_municipio) INTO wid_municipio FROM municipios;
        IF wid_municipio IS NULL OR  wid_municipio =0 THEN
           wid_municipio = 1;
        ELSE
           wid_municipio = wid_municipio + 1;
        END IF;
        INSERT INTO municipios VALUES(wid_municipio,wnom_municipio,wcod_postal);
        IF FOUND THEN
            RETURN TRUE;
        ELSE
            RETURN FLASE;
        END IF;
    END;
$BODY$
LANGUAGE PLPGSQL
  
 
                                               
 
  


 
                                               
 
 
                                               
  


 
                                               
 