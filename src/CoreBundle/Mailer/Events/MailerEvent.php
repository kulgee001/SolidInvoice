<?php

declare(strict_types=1);

/*
 * This file is part of SolidInvoice project.
 *
 * (c) 2013-2017 Pierre du Plessis <info@customscripts.co.za>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace SolidInvoice\CoreBundle\Mailer\Events;

use Swift_Message;
use Symfony\Component\EventDispatcher\Event;

class MailerEvent extends Event
{
    /**
     * @var Swift_Message
     */
    protected $message;

    /**
     * @param Swift_Message $message
     */
    public function setMessage(Swift_Message $message)
    {
        $this->message = $message;
    }

    /**
     * @return Swift_Message
     */
    public function getMessage(): Swift_Message
    {
        return $this->message;
    }
}
