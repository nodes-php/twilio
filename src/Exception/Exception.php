<?php
namespace Nodes\Service\Twilio\Exception;

use Nodes\Exception\Exception as NodesException;

/**
 * Class Exception
 *
 * @package Nodes\Service\Twilio\Exception
 */
class Exception extends NodesException
{
    /**
     * Exception constructor
     *
     * @author Morten Rugaard <moru@nodes.dk>
     *
     * @access public
     * @param  object $data
     */
    public function __construct($data)
    {
        // Error message
        $message = sprintf('Error #%d. Reason: %s', $data->code, $data->message);

        // Add "more info" if available
        if (!empty($data->more_info)) {
            $message .= sprintf(' More info: %s', $data->more_info);
        }

        parent::__construct($message, $data->status, null, false);
    }
}