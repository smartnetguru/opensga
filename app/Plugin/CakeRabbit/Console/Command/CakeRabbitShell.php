<?php
App::uses('ShellDispatcher', 'Console');

/**
 * CakeResque Shell File
 *
 * Use to manage the workers via CLI
 *
 * PHP version 5
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @author        Wan Qi Chen <kami@kamisama.me>
 * @copyright     Copyright 2012, Wan Qi Chen <kami@kamisama.me>
 * @link          http://cakeresque.kamisama.me
 * @package       CakeResque
 * @subpackage      CakeResque.Console.Command
 * @since         0.5
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
class CakeRabbitShell extends Shell
{

    /**
     * Plugin version.
     */
    const VERSION = '4.0.2';
    /**
     * CakeResque class, proxying the Resque library.
     *
     * Actually needed for testing purposes.
     *
     * @var string
     */
    public static $cakeResque = 'CakeResque';
    /**
     * Pause time before rechecking if a worker is started in microseconds.
     *
     * Actually needed for testing purposes.
     *
     * @var integer
     */
    public static $checkStartedWorkerBufferTime = 100000;
    public $uses = array();
    /**
     * Absolute path to the php-resque library.
     *
     * @var string
     */
    protected $_resqueLibrary = null;
    /**
     * Runtime arguments (from command line).
     *
     * @var array
     */
    protected $_runtime = array();

    /**
     * Startup callback.
     *
     * Initializes defaults.
     */
    public function startup()
    {
    }


    public function startmq()
    {

        App::import('Vendor', 'AMQPConnection', array('file' => 'PhpAmqpLib/Connection/AMQPConnection.php'));

        $exchange = 'router';
        $queue = 'default';
        $consumer_tag = 'consumer';

        $conn = new PhpAmqpLib\Connection\AMQPConnection(RABBITMQ_HOST, RABBITMQ_PORT, RABBITMQ_USER, RABBITMQ_PASS,
            RABBITMQ_VHOST);
        $ch = $conn->channel();

        /*
            The following code is the same both in the consumer and the producer.
            In this way we are sure we always have a queue to consume from and an
                exchange where to publish messages.
        */

        /*
            name: $queue
            passive: false
            durable: true // the queue will survive server restarts
            exclusive: false // the queue can be accessed in other channels
            auto_delete: false //the queue won't be deleted once the channel is closed.
        */
        $ch->queue_declare($queue, false, true, false, false);

        /*
            name: $exchange
            type: direct
            passive: false
            durable: true // the exchange will survive server restarts
            auto_delete: false //the exchange won't be deleted once the channel is closed.
        */

        $ch->exchange_declare($exchange, 'direct', false, true, false);

        $ch->queue_bind($queue, $exchange);

        function process_message($msg)
        {


            $args = explode(' ', $msg->body);
            $dispatcher = new ShellDispatcher($args, false);
            $dispatcher->dispatch();
            //$shell->dispatchShell($msg->body);


            $msg->delivery_info['channel']->
            basic_ack($msg->delivery_info['delivery_tag']);

            // Send a message with the string "quit" to cancel the consumer.
            if ($msg->body === 'quit') {
                $msg->delivery_info['channel']->
                basic_cancel($msg->delivery_info['consumer_tag']);
            }
        }

        /*
            queue: Queue from where to get the messages
            consumer_tag: Consumer identifier
            no_local: Don't receive messages published by this consumer.
            no_ack: Tells the server if the consumer will acknowledge the messages.
            exclusive: Request exclusive consumer access, meaning only this consumer can access the queue
            nowait:
            callback: A PHP Callback
        */
        $ch->basic_qos(null, 1, null);
        $ch->basic_consume($queue, $consumer_tag, false, false, false, false, 'process_message');

        function shutdown($ch, $conn)
        {
            $ch->close();
            $conn->close();
        }

        register_shutdown_function('shutdown', $ch, $conn);

// Loop as long as the channel has callbacks registered
        while (count($ch->callbacks)) {
            $ch->wait();
        };
    }


    /**
     * Execute a shell command.
     *
     * @since 3.3.6
     * @codeCoverageIgnore
     * @param string $cmd Command to execute.
     * @return void
     */
    protected function _exec($cmd)
    {
        passthru($cmd);
    }

    /**
     * Get the username of the current process owner.
     *
     * @since 4.0.0
     * @codeCoverageIgnore
     * @return string Username of the current process owner if found, false otherwise.
     */
    private function __getProcessOwner()
    {
        if (function_exists('posix_getpwuid')) {
            $a = posix_getpwuid(posix_getuid());
            return $a['name'];
        } else {
            $user = trim(exec('whoami', $o, $code));
            if ($code === 0) {
                return $user;
            }
            return false;
        }

        return false;
    }
}
