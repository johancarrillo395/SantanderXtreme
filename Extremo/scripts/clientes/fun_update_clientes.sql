--SELECT fun_update_usuario(91423627,'91423627','Carlos Perez','laura2021*','1','2021-10-17')
CREATE OR REPLACE FUNCTION fun_update_clientes(wid_cliente clientes.id_cliente%TYPE,
                                               wmail_cliente clientes.mail_cliente%TYPE,
                                               wpass_cliente clientes.pass_cliente%TYPE,
                                               wtel_cliente clientes.tel_cliente%TYPE,
                                               wcto_emerg clientes.cto_emerg%TYPE) RETURNS BOOLEAN AS
$BODY$
    BEGIN
        UPDATE clientes  SET  
                                mail_cliente  = wmail_cliente,
                                pass_cliente  = wpass_cliente,
                                tel_cliente   = wtel_cliente,
                                cto_emerg     = wcto_emerg
        WHERE id_cliente = wid_cliente;
        IF FOUND THEN
            RETURN TRUE;
        ELSE
            RETURN FALSE;
        END IF;
    END;
$BODY$
LANGUAGE PLPGSQL 

 