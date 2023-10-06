CREATE OR REPLACE FUNCTION fun_delete_bancos(wid_banco bancos.id_banco%TYPE) RETURNS BOOLEAN AS
$BODY$
    BEGIN
        DELETE FROM bancos
        WHERE id_banco = wid_banco;
        IF FOUND THEN
            RETURN TRUE;
        ELSE
            RETURN FALSE;
        END IF;
    END;
$BODY$
LANGUAGE PLPGSQL;

