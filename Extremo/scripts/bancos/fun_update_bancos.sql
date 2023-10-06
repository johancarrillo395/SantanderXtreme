--SELECT fun_update_usuario(91423627,'91423627','Carlos Perez','laura2021*','1','2021-10-17')
CREATE OR REPLACE FUNCTION fun_update_bancos(wid_banco bancos.id_banco%TYPE,
                                             wnom_banco bancos.nom_banco%TYPE,
                                             wtipo_cuenta bancos.tipo_cuenta%TYPE,
                                             wctabanc_proveedor bancos.ctabanc_proveedor%TYPE) RETURNS BOOLEAN AS
                                             
$BODY$
    BEGIN
        UPDATE bancos  SET  
                                nom_banco         = wnom_banco,
                                tipo_cuenta       = wtipo_cuenta,
                                ctabanc_proveedor = wctabanc_proveedor
        WHERE id_banco = wid_banco;
        IF FOUND THEN
            RETURN TRUE;
        ELSE
            RETURN FALSE;
        END IF;
    END;
$BODY$
LANGUAGE PLPGSQL 
 