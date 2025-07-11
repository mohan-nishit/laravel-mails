<?php

use Illuminate\Support\Facades\Notification;
use Backstage\Mails\Models\Mail;
use Backstage\Mails\Notifications\BounceNotification;

beforeEach(fn () => config([
    'mails.events.bounce.notify' => [
        'mail',
    ],
    'mails.notifications.mail.to' => [
        'm@rkvaneijk.nl',
    ],
]));

it('will send notification on bounce', function () {
    Notification::fake();

    Mail::factory()
        ->hasEvents(1, [
            'type' => 'hard_bounced',
        ])
        ->create();

    Notification::assertSentTimes(
        BounceNotification::class, 1
    );
});
