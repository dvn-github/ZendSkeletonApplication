<?
namespace Agenda\Model;
class Agenda{

    public cliente;
    public telefono;
    public email;

    public function exchangeArray($data)
    {
      	$this->cliente     = (!empty($data['cliente'])) ? $data['cliente'] : null;
        $this->telefono = (!empty($data['telefono'])) ? $data['telefono'] : null;
        $this->email  = (!empty($data['email'])) ? $data['email'] : null;
    }
    public function getArrayCopy()
    {
        return get_object_vars($this);
    }
}
