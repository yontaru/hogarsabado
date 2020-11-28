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
			$mensaje="registro agregado con éxito";
			return redirect()->to(base_url("public/"))->with('mensaje', $mensaje);

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
		$mensaje="registro eliminado con éxito";
		return redirect()->to(base_url("public/animales/listado"))->with('eliminado', $mensaje);

		} catch (\Exception $error) {

		die($error->getMessage());
		
		};
	}

	public function editar($id)
	{
		//1. Recibir los datos desde la vista
		$nombre=$this->request->getPost("nombreEditar");
		$edad=$this->request->getPost("edadEditar");
		$tipoanimal=$this->request->getPost("tipoanimalEditar");
		$descripcion=$this->request->getPost("descripcionEditar");
		$comida=$this->request->getPost("comidaEditar");

		//2. Organizar los datos que llegan de las vistas en un arreglo asociativo (las claves deben ser iguales a los campos o atributos de la tabla en BD)

		$datosEnvio=array(
		"nombre"=>$nombre,
		"edad"=>$edad,
		"tipoanimal"=>$tipoanimal,
		"descripcion"=>$descripcion,
		"comida"=>$comida,
		);

		//3. Crear  un objeto del MODELO para poder realizar la transacción en BD

		$modeloAnimales = new Modeloanimales();

		//4. Ejecutar el método update en el modelo

		try {
			
			$modeloAnimales->update($id,$datosEnvio);
			$mensaje="registro editado con éxito";
			return redirect()->to(base_url("public/animales/listado"))->with('editado', $mensaje);

		} catch (\Exception $error) {
			die($error->getMessage());
		};

	}


	//--------------------------------------------------------------------

}
