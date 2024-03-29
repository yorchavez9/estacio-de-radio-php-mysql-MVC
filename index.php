<?php

/* CONTROLADORES */
require_once "controladores/Plantilla.controlador.php";
require_once "controladores/Usuario.controlador.php";
require_once "controladores/Banner.controlador.php";
require_once "controladores/Noticia.controlador.php";
require_once "controladores/Video.controlador.php";
require_once "controladores/Evento.controlador.php";
require_once "controladores/Galeria.controlador.php";
require_once "controladores/Conductor.controlador.php";
require_once "controladores/ProgramacionRadial.controlador.php";
require_once "controladores/ProgramacionTV.controlador.php";
require_once "controladores/RedesSociales.controladores.php";
require_once "controladores/DatosContacto.controlador.php";
require_once "controladores/MesajeContacto.controlador.php";
require_once "controladores/Boletin.controlador.php";
require_once "controladores/Anuncioa.controlador.php";
require_once "controladores/Anunciob.controlador.php";
require_once "controladores/SobreNosotros.controlador.php";
require_once "controladores/Patrocinador.controlador.php";
require_once "controladores/Ranking.controlador.php";

/* MODELOS */
require_once "modelos/Usuario.modelo.php";
require_once "modelos/Banner.modelo.php";
require_once "modelos/Noticia.modelo.php";
require_once "modelos/Video.modelo.php";
require_once "modelos/Evento.modelo.php";
require_once "modelos/Galeria.modelo.php";
require_once "modelos/Conductor.modelo.php";
require_once "modelos/ProgramacionRadial.modelo.php";
require_once "modelos/ProgramacionTV.modelo.php";
require_once "modelos/RedesSociales.modelo.php";
require_once "modelos/DatosContacto.modelo.php";
require_once "modelos/MensajeContacto.modelo.php";
require_once "modelos/Boletin.modelo.php";
require_once "modelos/Anuncioa.modelo.php";
require_once "modelos/Anunciob.modelo.php";
require_once "modelos/SobreNosotros.modelo.php";
require_once "modelos/Patrocinador.modelo.php";
require_once "modelos/Ranking.modelo.php";


/* INICIANDO PLANTILLA */
$plantilla = new ControladorPlantilla();

$plantilla->ctrPlantilla();