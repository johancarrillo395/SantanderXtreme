CREATE OR REPLACE FUNCTION fun_delete_proveedor(wnit_proveedor proveedores.nit_proveedor%TYPE) RETURNS BOOLEAN AS
$BODY$
    BEGIN
        DELETE FROM proveedores
        WHERE nit_proveedor = wnit_proveedor;
        IF FOUND THEN
            RETURN TRUE;
        ELSE
            RETURN FALSE;
        END IF;
    END;
$BODY$
LANGUAGE PLPGSQL;

