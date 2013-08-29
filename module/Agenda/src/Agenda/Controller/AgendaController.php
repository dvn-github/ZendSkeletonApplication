<?
namespace Agenda\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

use Agenda\Model\Agenda;

class AgendaController extends AbstractActionController
{
    public function indexAction()
    {
        return new ViewModel(array(
            //'agenda' => $this->hola()->fetchAll()
        ));
    }
}
?>
