 --SELECT fun_insert_usuarios(100,'jloca','Juana la Loca','juana123',1);
CREATE OR REPLACE FUNCTION fun_insert_clientes(wid_cliente clientes.id_cliente%TYPE,wtp_documento clientes.tp_documento%TYPE,wnom_cliente clientes.nom_cliente%TYPE,wape_cliente clientes.ape_cliente%TYPE,wnac_cliente clientes.nac_cliente%TYPE,wmail_cliente clientes.mail_cliente%TYPE,
wpass_cliente clientes.pass_cliente%TYPE,wtel_cliente clientes.tel_cliente%TYPE,wcto_emerg clientes.cto_emerg%TYPE)RETURNS BOOLEAN AS
$BODY$
    BEGIN
 
        INSERT INTO clientes VALUES(wid_cliente,wtp_documento,wnom_cliente,wape_cliente,wnac_cliente,wmail_cliente,wpass_cliente,wtel_cliente,wcto_emerg ); 
        IF FOUND THEN
            RETURN TRUE;
        ELSE
            RETURN FALSE;
        END IF;
    END;
$BODY$
LANGUAGE PLPGSQL;  
 