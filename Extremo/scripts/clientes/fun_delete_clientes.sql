CREATE OR REPLACE FUNCTION fun_delete_clientes(wid_cliente clientes.id_cliente%TYPE) RETURNS BOOLEAN AS
$BODY$
    BEGIN
        DELETE FROM clientes
        WHERE id_cliente = wid_cliente;
        IF FOUND THEN
            RETURN TRUE;
        ELSE
            RETURN FALSE;
        END IF;
    END;
$BODY$
LANGUAGE PLPGSQL;

