<?php 

namespace App\Controllers;

use App\Models\Modeloanimales;

class RegistroControlador extends BaseController
{
	public function index()
	{
		return view('vistaRegistro');
	}

	public function registrar(){
		
		//1. Recibir los datos desde la vistpa
		$nombre=$this->request->getPost("nombre");
		$edad=$this->request->getPost("edad");
		$tipoanimal=$this->request->getPost("tipoanimal");
		$descripcion=$this->request->getPost("descripcion");
		$comida=$this->request->getPost("comida");
		$foto=$this->request->getPost("foto");

		//2. Organizar los datos que llegan de las vistas en un arreglo asociativo (las claves deben ser iguales a los campos o atributos de la tabla en BD)

		$datosEnvio=array(
			"nombre"=>$nombre,
			"edad"=>$edad,
			"tipoanimal"=>$tipoanimal,
			"descripcion"=>$descripcion,
			"comida"=>$comida,
			"foto"=>$foto
		);

		//3. Crear  un objeto del MODELO para poder realizar la transacción en BD

		$modeloAnimales = new Modeloanimales();

		//4. Utilizar el modelo para insertar los datos

		try {

			$modeloAnimales->insert($datosEnvio);
			echo("Registro agregado");

		} catch (\Exception $error) {
			die($error->getMessage());
		};

	}

	public function buscar()
	{

		//1. Crear un objeto del Modelo
		$modeloAnimales=new Modeloanimales();

		//2. Ejecutar la búsqueda
		try {

			//2.1 Ejecutar findAll
			$datosConsultados=$modeloAnimales->findAll();

			//2.2 Preparar los datos  para la vista
			$datosParaVista=array("animales"=>$datosConsultados);

			//2.3 Llamar a la vista que va a mostrar los datos
			return view('vistaListado',$datosParaVista);

		} catch (\Exception $error) {
			die($error->getMessage());
		};
	}
	
	public function eliminar($id)
	{
		//1. Crear un objeto del modelo
		$modeloAnimales=new Modeloanimales();

		//2. Ejecutar la funcion del modelo identificando el  registro a eliminar

	try {

		$modeloAnimales->where('id',$id)->delete();
		echo("Usuario Eliminado con éxito");

	} catch (\Exception $error) {

		die($error->getMessage());
		
	};
	}


	//--------------------------------------------------------------------

}
