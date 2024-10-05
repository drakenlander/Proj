<?php

namespace App\Observers;

use App\Events\RealTimeMessage;
use App\Models\Book;

class ObjectObserver
{
    /**
     * Handle the Book "created" event.
     */
    public function created(Book $book): void
    {
        event(new RealTimeMessage($book));
    }

    /**
     * Handle the Book "updated" event.
     */
    public function updated(Book $book): void
    {
        event(new RealTimeMessage($book));
    }

    /**
     * Handle the Book "deleted" event.
     */
    public function deleted(Book $book): void
    {
        event(new RealTimeMessage($book));
    }

    /**
     * Handle the Book "restored" event.
     */
    public function restored(Book $book): void
    {
        event(new RealTimeMessage($book));
    }

    /**
     * Handle the Book "force deleted" event.
     */
    public function forceDeleted(Book $book): void
    {
        //
    }
}
