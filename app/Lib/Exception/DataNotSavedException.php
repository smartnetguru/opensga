<?php /**
 * Represents an HTTP 400 error.
 *
 * @package       Cake.Error
 */
class DataNotSavedException extends CakeException
{

    /**
     * Constructor
     *
     * @param string $message If no message is given 'Bad Request' will be the message
     * @param int $code Status code, defaults to 400
     */
    public function __construct($message = null, $code = 400)
    {
        if (empty($message)) {
            $message = 'Problemas ao Gravar Dados do Usuario';
        } else {
            $returnMessge = '';
            foreach ($message as $k => $value) {
                $returnMessge .= $k . ': ' . implode(', ', $value) . '<br />';
            }
            $message = $returnMessge;
        }
        parent::__construct($message, $code);
    }

}

?>