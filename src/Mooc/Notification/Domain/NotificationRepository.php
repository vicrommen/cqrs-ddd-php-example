<?php

declare(strict_types = 1);

namespace CodelyTv\Mooc\Notification\Domain;

interface NotificationRepository
{
    /** @return Notification|null */
    public function search(NotificationId $id);

    /** @return void */
    public function save(Notification $notification);
}
