<?php
namespace Geekwright\DemoXadr\App\Responders;

use Xmf\Xadr\XoopsResponder;

class TodoFlipStatusResponderError extends XoopsResponder
{
   /**
     * Execute the responder
     *
     * @return a Renderer instance.
     */
    public function execute()
    {

        $this->renderer()->setTemplate('module:demoxadr/demoxadr_index.tpl');
        $this->renderer()->attributes->set('title', 'Your request could not be completed.');

        $err_message = $this->request()->getErrorsAsHtml();
        if (!empty($err_message)) {
            $this->renderer()->attributes->set('err_message', $err_message);
        }

        $body='<br/><button onclick="window.history.go(-1)">Back</button>';
        $this->renderer()->attributes->set('body', $body);

        return $this->renderer();
    }
}
