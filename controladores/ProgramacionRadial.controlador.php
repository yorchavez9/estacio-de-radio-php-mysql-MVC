<?php

class ControladorProgramacionRadial
{

    /* ==========================
    MOSTRAR PROGRAMACION RADIAL
    ========================== */

    static public function ctrMostrarProgramacionRadial($item, $valor)
    {
        $tabla = "eventos";

        $respuesta = ModeloProgramacionRadial::mdlMostrarProgramacionRadial($tabla, $item, $valor);

        return $respuesta;
    }

    /* =============================
    REGISTRO PROGRAMACION RADIAL
    ============================= */

    static public function ctrCrearProgramacionRadial()
    {

        if (isset($_POST["titulo"])) {

            /* ============================
                VALIDANDO IMAGEN
            ============================ */

            $ruta = "vistas/img/eventos/";

            if (isset($_FILES["imagen"]["tmp_name"])) {

                $extension = pathinfo($_FILES["imagen"]["name"], PATHINFO_EXTENSION);

                $tipos_permitidos = array("jpg", "jpeg", "png", "gif");

                if (in_array(strtolower($extension), $tipos_permitidos)) {

                    $nombre_imagen = date("YmdHis") . rand(1000, 9999);

                    $ruta_imagen = $ruta . $nombre_imagen . "." . $extension;

                    if (move_uploaded_file($_FILES["imagen"]["tmp_name"], $ruta_imagen)) {

                        echo "Imagen subida correctamente.";
                    } else {

                        echo "Error al subir la imagen.";
                    }
                } else {

                    echo "Solo se permiten archivos de imagen JPG, JPEG, PNG o GIF.";
                }
            }


            $tabla = "eventos";

            $datos = array(
                "titulo" => $_POST["titulo"],
                "imagen" => $ruta_imagen,
                "fecha" => $_POST["fecha"]            );

            $respuesta = ModeloProgramacionRadial::mdlIngresarProgramacionRadial($tabla, $datos);

            if ($respuesta == "ok") {
                echo '<script>

                            Swal.fire({
                                icon: "success",
                                title: "¡El evento fue guardado con éxito!",
                                showConfirmButton: true,
                                confirmButtonText: "Cerrar"
                            }).then(function(result){
                                if(result.value){
                                    window.location = "eventos";
                                }
                            });

                        </script>';
            }
        }
    }

    /* =============================
    EDITAR PROGRAMACION RADIAL
    ============================= */

    static public function ctrEditarProgramacionRadial()
    {

        if (isset($_POST["id_evento"])) {

            /* ============================
            VALIDANDO IMAGEN
            ============================ */

            $ruta = "vistas/img/eventos/";

            $ruta_imagen = $_POST["imagenActualE"];

            if (isset($_FILES["editImagen"]["tmp_name"]) && !empty($_FILES["editImagen"]["tmp_name"])) {

                if (file_exists($ruta_imagen)) {
                    unlink($ruta_imagen);
                }

                $extension = pathinfo($_FILES["editImagen"]["name"], PATHINFO_EXTENSION);

                $tipos_permitidos = array("jpg", "jpeg", "png", "gif");

                if (in_array(strtolower($extension), $tipos_permitidos)) {

                    $nombre_imagen = date("YmdHis") . rand(1000, 9999);

                    $ruta_imagen = $ruta . $nombre_imagen . "." . $extension;

                    if (move_uploaded_file($_FILES["editImagen"]["tmp_name"], $ruta_imagen)) {

                        echo "Imagen subida correctamente.";
                    } else {

                        echo "Error al subir la imagen.";
                    }
                } else {

                    echo "Solo se permiten archivos de imagen JPG, JPEG, PNG o GIF.";
                }
            }


            $tabla = "eventos";


            $datos = array(
                "id_evento" => $_POST["id_evento"],
                "titulo" => $_POST["editTitulo"],
                "imagen" => $ruta_imagen,
                "fecha" => $_POST["editFecha"]
            );

            $respuesta = ModeloProgramacionRadial::mdlEditarProgramacionRadial($tabla, $datos);

            if ($respuesta == "ok") {

                echo '<script>
    
                        Swal.fire({
                              icon: "success",
                              title: "¡La noticia fue actualizado con éxito!",
                              showConfirmButton: true,
                              confirmButtonText: "Cerrar"
                              }).then(function(result) {
                                        if (result.value) {
    
                                        window.location = "eventos";
    
                                        }
                                    })
    
                        </script>';
            }
        }
    }

    /* ==========================
    BORRAR PROGRAMACION RADIAL
    ========================== */

    static public function ctrBorrarProgramacionRadial(){

		if(isset($_GET["idEvento"])){

			$tabla ="eventos";
			$datos = $_GET["idEvento"];

			if($_GET["imagen"] != ""){

				unlink($_GET["imagen"]);
				rmdir($_GET["imagen"]);

			}

			$respuesta = ModeloProgramacionRadial::mdlBorrarProgramacionRadial($tabla, $datos);

			if($respuesta == "ok"){

				echo'<script>

				Swal.fire({
					  icon: "success",
					  title: "El evento ha sido borrado correctamente",
					  showConfirmButton: true,
					  confirmButtonText: "Cerrar",
					  closeOnConfirm: false
					  }).then(function(result) {
								if (result.value) {

								window.location = "eventos";

								}
							})

				</script>';

			}		

		}

	}
}
