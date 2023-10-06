CREATE OR REPLACE FUNCTION fun_delete_municipio(wid_municipio municipios.id_municipio%TYPE) RETURNS BOOLEAN AS
$BODY$
    BEGIN
        DELETE FROM municipios
        WHERE id_municipio = wid_municipio;
        IF FOUND THEN
            RETURN TRUE;
        ELSE
            RETURN FALSE;
        END IF;
    END;
$BODY$
LANGUAGE PLPGSQL;

