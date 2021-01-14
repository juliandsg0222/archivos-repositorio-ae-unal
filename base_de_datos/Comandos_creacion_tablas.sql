-- ################# INICIO AUTENTICACIÓN #################

-- Tabla de usuarios
CREATE TABLE usuario
(
    idUsu VARCHAR(15) NOT NULL,
    nomUsu VARCHAR(80) NOT NULL,
    passUsu VARCHAR(30) NOT NULL,
    rolUsu INT NOT NULL,
    PRIMARY KEY (idUsu)
)

-- Tabla de roles
CREATE TABLE rol 
( 
    idRol INT NOT NULL, 
    nomRol VARCHAR(15) NOT NULL, 
    PRIMARY KEY (idRol) 
)

-- ################# FIN AUTENTICACIÓN #################


-- ################# INICIO ENTIDADES #################

-- Tabla de Categorías
CREATE TABLE categoria
(
    idCat INT NOT NULL AUTO_INCREMENT,
    nomCat VARCHAR(50) NOT NULL,
    desCat VARCHAR(400) NOT NULL,
    imaCat BLOB NOT NULL,
    PRIMARY KEY (idCat)
)

-- Tabla de Temas
CREATE TABLE tema
(
    idTem INT NOT NULL AUTO_INCREMENT,
    nomTem VARCHAR(50) NOT NULL,
    desTem VARCHAR(400) NOT NULL,
    imaTem BLOB NOT NULL,
    PRIMARY KEY (idTem)
)

-- Tabla Indicadores
CREATE TABLE indicador
(
    idInd VARCHAR(11) NOT NULL,
    nomInd VARCHAR(50) NOT NULL,
    PRIMARY KEY (idInd)
)

-- Tabla de Registros
CREATE TABLE registro
(
    idReg INT NOT NULL AUTO_INCREMENT,
    nomReg VARCHAR(50) NOT NULL,
    desReg VARCHAR(400) NOT NULL,
    linkReg BLOB NOT NULL,
    idInd VARCHAR(11) NOT NULL,
    idFue INT NOT NULL,
    PRIMARY KEY (idReg)
)

-- Tabla Períodos Académicos
CREATE TABLE periodo
(
    idPer INT NOT NULL AUTO_INCREMENT,
    nomPer VARCHAR(7) NOT NULL,
    PRIMARY KEY (idPer)
)

-- Tabla de Fuentes
CREATE TABLE fuente
(
    idFue INT NOT NULL AUTO_INCREMENT,
    nomFue VARCHAR(50) NOT NULL,
    PRIMARY KEY (idFue)
)

-- Tabla de Programas Académicos
CREATE TABLE programa
(
    idProg INT NOT NULL AUTO_INCREMENT,
    nomProg VARCHAR(50) NOT NULL,
    PRIMARY KEY (idProg)
)
-- ################# FIN ENTIDADES #################


-- ################# INICIO RELACIONES #################

-- Tabla de Categorías-Temas
CREATE TABLE cat_tema
(
    idCat INT NOT NULL,
    idTem INT NOT NULL,
    PRIMARY KEY (idCat, idTem)
)

-- Tabla de Temas-Indicadores
CREATE TABLE tema_ind
(
    idTem INT NOT NULL,
    idInd VARCHAR(11) NOT NULL,
    PRIMARY KEY (idTem, idInd)
)

-- Tabla de Registros-Períodos
CREATE TABLE reg_per
(
    idReg INT NOT NULL,
    idPer INT NOT NULL,
    PRIMARY KEY (idReg, idPer)
)

-- Tabla de Registros-Programas
CREATE TABLE reg_prog
(
    idReg INT NOT NULL,
    idProg INT NOT NULL,
    PRIMARY KEY (idReg, idProg)
)

-- ################# FIN RELACIONES #################


-- ################# INICIO LLAVES FORÁNEAS #################

-- Llaves de Registros
ALTER TABLE registro
ADD FOREIGN KEY (idInd) REFERENCES indicador(idInd);

ALTER TABLE registro
ADD FOREIGN KEY idFue REFERENCES fuente(idFue);

-- Llaves de Categorías-Temas
ALTER TABLE cat_tema
ADD FOREIGN KEY (idCat) REFERENCES categoria(idCat);

ALTER TABLE cat_tema
ADD FOREIGN KEY (idTem) REFERENCES tema(idTem);

-- Llaves de Temas-Indicadores
ALTER TABLE tema_ind
ADD FOREIGN KEY (idTem) REFERENCES tema(idTem);

ALTER TABLE tema_ind
ADD FOREIGN KEY (idInd) REFERENCES indicador(idInd);

-- Llaves de Registros-Períodos
ALTER TABLE reg_per
ADD FOREIGN KEY (idReg) REFERENCES registro(idReg);

ALTER TABLE reg_per
ADD FOREIGN KEY (idPer) REFERENCES periodo(idPer);

-- Llaves de Registros-Programas
ALTER TABLE reg_prog
ADD FOREIGN KEY (idReg) REFERENCES registro(idReg);

ALTER TABLE reg_prog
ADD FOREIGN KEY (idProg) REFERENCES programa(idProg);

-- Llave de Usuarios-Rol
ALTER TABLE usuario
ADD FOREIGN KEY (rolUsu) REFERENCES rol(idRol);

-- ################# FIN LLAVES FORÁNEAS #################