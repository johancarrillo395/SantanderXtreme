CREATE OR REPLACE FUNCTION fun_insert_bancos(wnom_banco bancos.nom_banco%TYPE,
                                             wtipo_cuenta bancos.tipo_cuenta%TYPE,
                                             wctabanc_proveedor bancos.ctabanc_proveedor%TYPE) RETURNS BOOLEAN AS                                              
$BODY$
    DECLARE wid_banco bancos.id_banco%TYPE;
    BEGIN
        SELECT MAX(id_banco) INTO wid_banco FROM bancos;
        IF wid_banco IS NULL OR wid_banco=0 THEN
           wid_banco = 1;
        ELSE
           wid_banco = wid_banco + 1;
        END IF;
        INSERT INTO bancos VALUES(wid_banco,wnom_banco,wtipo_cuenta,wctabanc_proveedor);
        IF FOUND THEN
            RETURN TRUE;
        ELSE
            RETURN FALSE;
        END IF; 
    END;
$BODY$
LANGUAGE PLPGSQL 






 
 
                                               
 
  


 
                                               
 
 
                                               
  


 
                                               
 


   

 