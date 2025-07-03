<?php

namespace Backstage\Mails\Enums;

enum EventType: string
{
    case ACCEPTED = 'accepted';
    case CLICKED = 'clicked';
    case COMPLAINED = 'complained';
    case DELIVERED = 'delivered';
    case SOFT_BOUNCED = 'soft_bounced';
    case HARD_BOUNCED = 'hard_bounced';

    case TRANSIENT_HARD_BOUNCED = 'transient_hard_bounced';
    case OPENED = 'opened';
    case UNSUBSCRIBED = 'unsubscribed';
}
