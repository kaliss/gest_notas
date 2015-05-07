CREATE DATABASE seminariointerdiocesano;
USE seminariointerdiocesano;

/* Creacion de tablas */

CREATE TABLE `asignaturas`
(
	id_asig INTEGER NOT NULL AUTO_INCREMENT,
	cod_asig VARCHAR(8) NOT NULL,
	UNIQUE (cod_asig),
	nombre_asig VARCHAR(80) NOT NULL,
	UNIQUE (nombre_asig),
	total_horas_asig INTEGER NULL,
	creditos_asig INTEGER NOT NULL,
	especificacion_asig VARCHAR(50) NULL,
	CONSTRAINT Semi_Asig_PK PRIMARY KEY (id_asig)
);
CREATE TABLE `diocesis`
(
	id_diocesis INTEGER NOT NULL AUTO_INCREMENT,
	nombre_diocesis VARCHAR(50) NOT NULL,
	UNIQUE (nombre_diocesis),
	CONSTRAINT Semi_Dioce_PK PRIMARY KEY (id_diocesis)
);
CREATE TABLE `estudiantes`
(
	id_est INTEGER NOT NULL AUTO_INCREMENT,
	num_carnet_est VARCHAR(50) NOT NULL, 
	UNIQUE (num_carnet_est),
	nombres_est VARCHAR(50) NOT NULL,
	apellidos_est VARCHAR(50) NOT NULL,
	fecha_nac_est DATETIME NOT NULL,
	lugar_nac_est VARCHAR(50) NOT NULL,
	telefono_est VARCHAR(50) NOT NULL,
	direccion_dom_est VARCHAR(100) NOT NULL,
	cedula_est VARCHAR(50) NULL,
	UNIQUE (cedula_est),
	CONSTRAINT Semi_Est_PK PRIMARY KEY (id_est)
);
CREATE TABLE `docentes`
(
	id_doc INTEGER NOT NULL AUTO_INCREMENT,
	num_carnet_doc VARCHAR(50) NOT NULL,
	nombres_doc VARCHAR(50) NOT NULL,
	apellidos_doc VARCHAR(50) NOT NULL,
	cedula_doc VARCHAR(50) NOT NULL,
	UNIQUE (cedula_doc),
	telefono_doc VARCHAR(50) NULL,
	email_doc VARCHAR(50) NULL,
	CONSTRAINT Semi_Doce_PK PRIMARY KEY (id_doc)
);
CREATE TABLE `parentesco`
(
	id_parentesco INTEGER NOT NULL AUTO_INCREMENT,
	nombre_parentesco VARCHAR(50) NOT NULL,
	CONSTRAINT Semi_Paren_PK PRIMARY KEY (id_parentesco)
);
CREATE TABLE `facultades`
(
	id_facultad INTEGER NOT NULL AUTO_INCREMENT,
	nombre_facultad VARCHAR(50) NOT NULL,
	UNIQUE (nombre_facultad),
	CONSTRAINT Semi_Fac_PK PRIMARY KEY (id_facultad)
);
CREATE TABLE `tipos_de_grupo`
(
	id_tipo_grupo INTEGER NOT NULL AUTO_INCREMENT,
	nombre_tipo_grupo VARCHAR(50) NOT NULL,
	UNIQUE (nombre_tipo_grupo),
	CONSTRAINT Semi_Tipogru_PK PRIMARY KEY (id_tipo_grupo)
);
CREATE TABLE `profesiones`
(
	id_profesion INTEGER NOT NULL AUTO_INCREMENT,
	nombre_profesion VARCHAR(50) NOT NULL,
	UNIQUE (nombre_profesion),
	CONSTRAINT Semi_Prof_PK PRIMARY KEY (id_profesion)
);
CREATE TABLE `tipos_de_estudio`
(
	id_tipo_estudio INTEGER NOT NULL AUTO_INCREMENT,
	nombre_tipo_estudio VARCHAR(50) NOT NULL,
	CONSTRAINT Semi_Estud_PK PRIMARY KEY (id_tipo_estudio)
);
CREATE TABLE `parroquias`
(
	id_parroquia INTEGER NOT NULL AUTO_INCREMENT,
	id_diocesis INTEGER NOT NULL,
	nombre_parroquia VARCHAR(50) NOT NULL,
	UNIQUE (nombre_parroquia),
	CONSTRAINT Semi_Parr_PK PRIMARY KEY (id_parroquia),
    CONSTRAINT Semi_Parr_FK_IdDio FOREIGN KEY (id_diocesis) REFERENCES diocesis(id_diocesis)
);
CREATE TABLE `formacion_academica`
(
	id_estudio INTEGER NOT NULL AUTO_INCREMENT,
	id_est INTEGER NOT NULL,
	lugar_estudio VARCHAR(50) NOT NULL,
	id_tipo_estudio INTEGER NOT NULL,
	CONSTRAINT Semi_Academ_PK PRIMARY KEY(id_estudio),
    CONSTRAINT Semi_Academ_FK_IdEst FOREIGN KEY (id_est) REFERENCES estudiantes(id_est),
    CONSTRAINT Semi_Academ_FK_IdTipEst FOREIGN KEY (id_tipo_estudio) REFERENCES	tipos_de_estudio(id_tipo_estudio)
);
CREATE TABLE `informacion_familiar`
(
	id_info_fami INTEGER NOT NULL AUTO_INCREMENT,
	id_est INTEGER NOT NULL,
	UNIQUE (id_est),
	cant_hermanas_est INTEGER NULL,
	cant_hermanos_est INTEGER NOT NULL,
	CONSTRAINT Semi_Fam_PK PRIMARY KEY (id_info_fami),
    CONSTRAINT Semi_Fam_FK_IdEst FOREIGN KEY (id_est) REFERENCES estudiantes(id_est)
);
CREATE TABLE `informacion_seminarista`
(
	id_info_semi INTEGER NOT NULL AUTO_INCREMENT,
	id_est INTEGER NOT NULL,
	UNIQUE (id_est),
	id_parroquia INTEGER NOT NULL,
	fecha_ingreso_est DATETIME NOT NULL,
	observaciones VARCHAR(100) NULL,
	CONSTRAINT Semi_Sem_PK PRIMARY KEY (id_info_semi),
    CONSTRAINT Semi_Sem_FK_IdEst FOREIGN KEY (id_est) REFERENCES estudiantes(id_est),
    CONSTRAINT Semi_Sem_FK_IdPar FOREIGN KEY (id_parroquia) REFERENCES parroquias(id_parroquia)
);
CREATE TABLE `parientes`
(	
	id_pariente INTEGER NOT NULL AUTO_INCREMENT,
	id_est INTEGER NOT NULL,
	nombre_pariente VARCHAR(50) NOT NULL,
	id_parentesco INTEGER NOT NULL,
	id_profesion INTEGER NOT NULL,
	CONSTRAINT Semi_Parien_PK PRIMARY KEY (id_pariente),
    CONSTRAINT Semi_Parien_FK_IdEst FOREIGN KEY (id_est) REFERENCES estudiantes(id_est),
    CONSTRAINT Semi_Parien_FK_IdParen FOREIGN KEY (id_parentesco) REFERENCES parentesco(id_parentesco),
    CONSTRAINT Semi_Parien_FK_IdProf FOREIGN KEY (id_profesion) REFERENCES	profesiones(id_profesion)
);
CREATE TABLE `plan_de_estudio`
(
	id_plan INTEGER NOT NULL AUTO_INCREMENT,
	id_asig INTEGER NOT NULL,
	UNIQUE (id_asig),
	id_facultad INTEGER NOT NULL,
	curso INTEGER NOT NULL,
	semestre INTEGER NOT NULL,
	CONSTRAINT Semi_Plan_PK PRIMARY KEY (id_plan),
    CONSTRAINT Semi_Plan_FK_IdFac FOREIGN KEY (id_facultad) REFERENCES facultades(id_facultad),
    CONSTRAINT Semi_Plan_FK_IdAsig FOREIGN KEY (id_asig) REFERENCES asignaturas(id_asig)
);
CREATE TABLE `prerrequisitos`
(
	id_prerrequisito INTEGER NOT NULL AUTO_INCREMENT,
	prerrequisito INTEGER NOT NULL,
	id_asig INTEGER NOT NULL,
	tipo_prerrequisito BIT NULL,
	CONSTRAINT Semi_Prerr_PK PRIMARY KEY (id_prerrequisito),
	CONSTRAINT Semi_Prerr_FK_Prerr FOREIGN KEY (prerrequisito) REFERENCES asignaturas(id_asig),
    CONSTRAINT Semi_Prerr_FK_IdAsig FOREIGN KEY (id_asig) REFERENCES asignaturas(id_asig)
);
CREATE TABLE `grupos`
(
	id_grupo INTEGER NOT NULL AUTO_INCREMENT,
	cod_grupo VARCHAR(50) NOT NULL,
	UNIQUE (cod_grupo),
	id_tipo_grupo INTEGER NOT NULL,
	id_doc INTEGER NOT NULL,
	id_asig INTEGER NOT NULL,
	activo Bit NULL,
	CONSTRAINT Semi_Gru_PK PRIMARY KEY (id_grupo),
    CONSTRAINT Semi_Gru_FK_IdTipoGru FOREIGN KEY (id_tipo_grupo) REFERENCES tipos_de_grupo(id_tipo_grupo),
    CONSTRAINT Semi_Gru_FK_IdDoc FOREIGN KEY (id_doc) REFERENCES docentes(id_doc),
    CONSTRAINT Semi_Gru_FK_IdAsig FOREIGN KEY (id_asig) REFERENCES asignaturas(id_asig)
);
CREATE TABLE `horarios`
(
	id_horario INTEGER NOT NULL AUTO_INCREMENT,
	id_grupo INTEGER NOT NULL,
	hora_inicio DATETIME NOT NULL,
	hora_fin DATETIME NOT NULL,
	aula VARCHAR(50) NOT NULL,
	CONSTRAINT Semi_Hor_PK PRIMARY KEY (id_horario),
    CONSTRAINT Semi_Hor_FK_Hor FOREIGN KEY (id_grupo) REFERENCES grupos(id_grupo)
);
CREATE TABLE `matriculas`
(
	id_matricula INTEGER NOT NULL AUTO_INCREMENT,
	cod_matricula VARCHAR(50) NOT NULL,
	UNIQUE (cod_matricula),
	id_facultad INTEGER NOT NULL,
	curso INTEGER NOT NULL,
	semestre INTEGER NOT NULL,
	CONSTRAINT Semi_Matri_PK PRIMARY KEY (id_matricula),
    CONSTRAINT Semi_Matri_FK_IdFac FOREIGN KEY (id_facultad) REFERENCES facultades(id_facultad)
);
CREATE TABLE `calificaciones`
(
	id_matricula INTEGER NOT NULL,
	id_est INTEGER NOT NULL,
	id_grupo INTEGER NOT NULL,
	nota_final INTEGER NOT NULL,
	CONSTRAINT Semi_Avan_PK PRIMARY KEY (id_matricula, id_est, id_grupo),
    CONSTRAINT Semi_Avan_FK_Matri FOREIGN KEY (id_matricula) REFERENCES matriculas(id_matricula),
    CONSTRAINT Semi_Avan_FK_Est FOREIGN KEY (id_est) REFERENCES estudiantes(id_est),
    CONSTRAINT Semi_Avan_FK_Gru FOREIGN KEY (id_grupo) REFERENCES grupos(id_grupo)
);

/* Registros USUARIO*/
CREATE TABLE `tipos_de_usuario`
(
	id_tipo_usuario INTEGER NOT NULL AUTO_INCREMENT,
	nombre_tipo_usuario VARCHAR(25) NOT NULL,
	UNIQUE (nombre_tipo_usuario),
	CONSTRAINT Semi_TipUsu_PK PRIMARY KEY (id_tipo_usuario)
);
CREATE TABLE `usuarios`
(
	id_usuario INTEGER NOT NULL AUTO_INCREMENT,
	id_tipo_usuario INTEGER NOT NULL,
	nombre_usuario VARCHAR(25) NOT NULL,
	UNIQUE (nombre_usuario),
	email_usuario VARCHAR(50) NOT NULL,
	contrasena_usuario VARCHAR(25) NOT NULL,
	CONSTRAINT Semi_Usu_PK PRIMARY KEY (id_usuario),
    CONSTRAINT Semi_Usu_FK_IdTipUsu FOREIGN KEY (id_tipo_usuario) REFERENCES tipos_de_usuario(id_tipo_usuario)
);