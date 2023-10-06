 --SELECT fun_insert_usuarios(100,'jloca','Juana la Loca','juana123',1);
CREATE OR REPLACE FUNCTION fun_insert_proveedor(wnit_proveedor clientes.nit_proveedor%TYPE,
                                                wtp_documento clientes.tp_documento%TYPE,
                                                wnom_cliente clientes.nom_cliente%TYPE,
                                                wape_cliente clientes.ape_cliente%TYPE,
                                                wnac_cliente clientes.nac_cliente%TYPE,
                                                wmail_cliente clientes.mail_cliente%TYPE,
                                                wpass_cliente clientes.pass_cliente%TYPE,
                                                wtel_cliente clientes.tel_cliente%TYPE,
                                                wcto_emerg clientes.cto_emerg%TYPE)RETURNS BOOLEAN AS
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


CREATE TABLE Proveedores 
(
    nit_proveedor       DECIMAL(2,0)  NOT NULL,     --Identificador de proveedor
    nom_proveedor       VARCHAR(30)   NOT NULL,     --Nombre del proveedor
    dir_proveedor       VARCHAR(55)   NOT NULL,     --Dirrecion de proveedor
    mail_proveedor      VARCHAR(100)  NOT NULL,     --Correo del proveedor
    tel_proveedor       DECIMAL(10,0) NOT NULL,     --Telefono de proveedor   
    cta_bancaria1       VARCHAR(30)   NOT NULL,     --Cuenta bancaria de proveedor
    cta_bancaria2       VARCHAR(30)   NOT NULL,     --Cuenta bancasria de proveedor 
    id_municipio        DECIMAL(2,0)  NOT NULL,     --Identificador del municipio
    id_banco            DECIMAL(2,0)  NOT NULL,     --Codigo de banco
    usr_insert          VARCHAR,
    fec_insert          TIMESTAMP     WITHOUT TIME ZONE,
    usr_update          VARCHAR,
    fec_update          TIMESTAMP     WITHOUT TIME ZONE,
    PRIMARY KEY (nit_proveedor),
    FOREIGN KEY (id_municipio)        REFERENCES Municipios(id_municipio),
    FOREIGN KEY (id_banco)            REFERENCES Bancos(id_banco)
);