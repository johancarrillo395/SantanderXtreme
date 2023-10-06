   
    DROP TABLE IF EXISTS DetalleReserva;
    DROP TABLE IF EXISTS Reservas;
    DROP TABLE IF EXISTS Recaudos;
    DROP TABLE IF EXISTS ProveedorServicio;
    DROP TABLE IF EXISTS Pagos;
    DROP TABLE IF EXISTS Proveedores;
    DROP TABLE IF EXISTS Bancos;
    DROP TABLE IF EXISTS Municipios;
    DROP TABLE IF EXISTS Servicios;
    DROP TABLE IF EXISTS TipoServicios;
    DROP TABLE IF EXISTS Clientes;
    DROP TABLE IF EXISTS Documento;
    DROP TABLE IF EXISTS Parametros;
 
CREATE TABLE Parametros
(
    nit_empresa      DECIMAL(9,0)    NOT NULL,                 --Identificador de empresa 
    nom_empresa      VARCHAR         NOT NULL,                 --Nombre empresa 
    ciu_empresa      VARCHAR         NOT NULL,                 --Ciudad empresa 
    porc_iva         DECIMAL(2,0)    NOT NULL     DEFAULT (19),-- Porcentaje del iva en %
    num_factura      DECIMAL(12,0)   NOT NULL,                 --Numero de factura. Se incrementa cada vez que se hace una factura
    PRIMARY KEY(nit_empresa)
);

CREATE TABLE Documento (

    id_documento DECIMAL(1,0) NOT NULL,
    tipo_documento VARCHAR     NOT NULL;
    PRIMARY KEY (id_documento)

),

CREATE TABLE Clientes
(
    id_cliente     DECIMAL(2,0)  NOT NULL,      --Identificacion de Cliente.
    tpid_cliente   DECIMAL(1,0)  NOT NULL,      --Tipo de documento de Cliente (1->CC / 2->CE / 3->Pasaporte) 
    nom_cliente    VARCHAR(30)   NOT NULL,      --Nombre Cliente.
    ape_cliente    VARCHAR(30)   NOT NULL,      --Apellidos Cliente.
    nac_cliente    DATE          NOT NULL,      --Fecha de nacimiento del Cliente.
    mail_cliente   VARCHAR(100)  NOT NULL,      --Email Cliente.
    pass_cliente   VARCHAR       NOT NULL,      --Clave. 
    tel_cliente    DECIMAL(10,0) NOT NULL,      --Telefono Cliente. 
    cto_emerg      DECIMAL(10,0) NOT NULL,      --Contacto de emergencia 
    ind_estado     DECIMAL(1,0)  NOT NULL,      --1->Activo / 2->Inactivo / 3->Bloqueado *******
    usr_insert     VARCHAR,
    fec_insert     TIMESTAMP     WITHOUT TIME ZONE,
    usr_update     VARCHAR,
    fec_update     TIMESTAMP     WITHOUT TIME ZONE,
    PRIMARY KEY (id_cliente),
    FOREIGN KEY (id_documento)  REFERENCES Documento(id_documento)   
);

CREATE TABLE TipoServicios
(
   idtp_servicio     DECIMAL(1,0)  NOT NULL,    --Identificador del tipo servicio
   nomtp_servicio    VARCHAR       NOT NULL,     --Nombre del tipo de servicio
   usr_insert        VARCHAR,  
   fec_insert        TIMESTAMP     WITHOUT TIME ZONE,
   usr_update        VARCHAR, 
   fec_update        TIMESTAMP     WITHOUT TIME ZONE,
   PRIMARY KEY(idtp_servicio)
);

 CREATE TABLE Servicios
(
    id_servicio       DECIMAL(2,0)  NOT NULL,     --Identificador de servicio
    nom_servicio      VARCHAR       NOT NULL,     --Nombre del servicio
    dispo_servicio    BOOLEAN       NOT NULL,     --Disponibilidad del servicio  True->Si Hay Disponibilidad / False->No Hay Disponibilidad. 
    deta_servicio     VARCHAR       NOT NULL,     --Detalle de servicio 
    precio_servicio   DECIMAL(10,0) NOT NULL,     --Precio de servicio
    idtp_servicio     DECIMAL(2,0)  NOT NULL,     --Identificador del tipo de servicio
    usr_insert        VARCHAR,        
    fec_insert        TIMESTAMP     WITHOUT TIME ZONE,  
    usr_update        VARCHAR,                       
    fec_update        TIMESTAMP     WITHOUT TIME ZONE,   
    PRIMARY KEY (id_servicio),
    FOREIGN KEY (idtp_servicio)  REFERENCES TipoServicios(idtp_servicio)     
);

CREATE TABLE Municipios
(
    id_municipio    DECIMAL(2,0)  NOT NULL,          --Identificador del municipio
    nom_municipio   VARCHAR       NOT NULL,          --Nombre de municipio
    cod_postal      DECIMAL(5,0)  NOT NULL,          --Codigo postal del municipio
    usr_insert      VARCHAR,
    fec_insert      TIMESTAMP     WITHOUT TIME ZONE,
    usr_update      VARCHAR,
    fec_update      TIMESTAMP     WITHOUT TIME ZONE,
    PRIMARY KEY(id_municipio)    
);

CREATE TABLE Bancos
(  
    id_banco            DECIMAL(2,0)  NOT NULL,         --Codigo de banco
    nom_banco           VARCHAR       NOT NULL,         --Nombre del Banco
    tipo_cuenta         DECIMAL(1,0)  NOT NULL,         --Tipo de Cuenta proveedor (1->Cuenta de ahorro / 2->Cuenta de corriente) 
    ctabanc_proveedor   VARCHAR(30)   NOT NULL,         --Cuenta bancaria de proveedor 
    usr_insert          VARCHAR,
    fec_insert          TIMESTAMP     WITHOUT TIME ZONE,
    usr_update          VARCHAR,
    fec_update          TIMESTAMP     WITHOUT TIME ZONE, 
    PRIMARY KEY(id_banco) 
    
);
  
CREATE TABLE Proveedores 
(
    nit_proveedor       DECIMAL(2,0)  NOT NULL,     --Identificador de proveedor
    nom_proveedor       VARCHAR(30)   NOT NULL,     --Nombre del proveedor
    dir_proveedor       VARCHAR(55)   NOT NULL,     --Dirrecion de proveedor
    mail_proveedor      VARCHAR(100)  NOT NULL,     --Correo del proveedor
    tel_proveedor       DECIMAL(10,0) NOT NULL,     --Telefono de proveedor   
    cta_bancaria1       VARCHAR(30)   NOT NULL,     --Cuenta bancaria de proveedor
    cta_bancaria2       VARCHAR(30)   NOT NULL,     --Cuenta bancaria de proveedor 
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

CREATE TABLE Pagos
(   id_pago                     DECIMAL(10,0) NOT NULL,              --Identificador de pago
    fech_pago                   TIMESTAMP     NOT NULL,              --Fecha del pago
    estado_pago                 DECIMAL(1,0)  NOT NULL,              --1->Pagado, 2->Pendiente.
    val_iva                     DECIMAL(2,0)  NOT NULL    DEFAULT 0, --Valor del iva
    val_neto                    DECIMAL(10,0) NOT NULL,              --Valor neto del pago
    val_total                   DECIMAL(10,0) NOT NULL,              --Valor total incluye el IVA
    ct_pago                     VARCHAR(20)   NOT NULL,              --Cuenta a la que se realizo el pago.
    nit_proveedor               DECIMAL(2,0)  NOT NULL,              --Identificador de proveedor  
    id_banco                    DECIMAL(2,0)  NOT NULL,              --Codigo de banco 
    PRIMARY KEY (id_pago),
    FOREIGN KEY (nit_proveedor)      REFERENCES Proveedores(nit_proveedor),
    FOREIGN KEY (id_banco)           REFERENCES Bancos(id_banco)
);
 

CREATE TABLE  ProveedorServicio                                     
(
    nit_proveedor    DECIMAL(2,0)  NOT NULL,                       --Identificador de proveedor  
    id_servicio      DECIMAL(2,0)  NOT NULL,                       --Identificador de servicio
    usr_insert       VARCHAR,
    fec_insert       TIMESTAMP     WITHOUT TIME ZONE,
    usr_update       VARCHAR,
    fec_update       TIMESTAMP     WITHOUT TIME ZONE,
    PRIMARY KEY(nit_proveedor,id_servicio),
    FOREIGN KEY(nit_proveedor)  REFERENCES Proveedores(nit_proveedor),
    FOREIGN KEY(id_servicio)    REFERENCES Servicios(id_servicio)
);


CREATE TABLE Recaudos
(
    id_recaudo      DECIMAL(2,0)    NOT NULL,          --Identificador de Recaudo
    fech_recaudo    TIMESTAMP       NOT NULL,          --Registro de fecha y hora especifica del recaudo
    monto_recaudo   DECIMAL(10,0)   NOT NULL,          --Total recaudado 
    id_cliente      DECIMAL(2,0)    NOT NULL,          --Identificacion de Cliente.
    id_banco        DECIMAL(2,0)    NOT NULL,          --Codigo de banco 
    usr_insert      VARCHAR,
    fec_insert      TIMESTAMP       WITHOUT TIME ZONE,
    PRIMARY KEY (id_recaudo),
    FOREIGN KEY (id_cliente)  REFERENCES Clientes(id_cliente),
    FOREIGN KEY (id_banco)    REFERENCES Bancos(id_banco)
 
);

   
CREATE TABLE Reservas
(
    id_reserva         DECIMAL(2,0)  NOT NULL,         --Identificador de reserva      
    fecha_reserva      DATE          NOT NULL,         --Fecha de reserva  
    durac_reserva      DECIMAL(2,0)  NOT NULL,         --Duracion de reserva 
    valor_reserva      DECIMAL(10,0) NOT NULL,         --Valor de la reserva
    est_reserva        DECIMAL(1,0)  NOT NULL,         --1->Pendiente / 2->Confirmada / 3->Cancelada / 4->Vencida (Estado de reserva)
    id_cliente         DECIMAL(2,0)  NOT NULL,         --Identificacion de Cliente 
    usr_insert         VARCHAR,
    fec_insert         TIMESTAMP     WITHOUT TIME ZONE,
    usr_update         VARCHAR,
    fec_update         TIMESTAMP     WITHOUT TIME ZONE,
    PRIMARY KEY (id_reserva),                      
    FOREIGN KEY (id_cliente)   REFERENCES  Clientes(id_cliente)   
);

CREATE TABLE DetalleReserva 
(
    id_reserva      DECIMAL(2,0)    NOT NULL,         --Identificador de Recaudo
    id_servicio     DECIMAL(2,0)    NOT NULL,         --Identificador de servicio
    cant_servicio   DECIMAL(1,0)    NOT NULL,         --Cantidad de servicios
    valor_total     DECIMAL(10,0)   NOT NULL,         --Valor Total  
    deta_reversa    VARCHAR         NOT NULL,         --Detalle de reserva    
    usr_insert      VARCHAR,
    fec_insert      TIMESTAMP       WITHOUT TIME ZONE,
    PRIMARY KEY (id_reserva,id_servicio),
    FOREIGN KEY (id_reserva)  REFERENCES Reservas(id_reserva),
    FOREIGN KEY (id_servicio) REFERENCES Servicios(id_servicio)    
);