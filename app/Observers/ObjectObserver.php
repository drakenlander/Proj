<?php

namespace App\Observers;

use App\Events\RealTimeMessage;
use App\Models\Book;

class ObjectObserver
{
    public function created(Book $book): void
    {
        $message = 'Se ha añadido un objeto perdido: ';
        event(new RealTimeMessage($book, $message));
    }

    public function updated(Book $book): void
    {
        $message = 'Se ha actualizado un objeto perdido: ';
        event(new RealTimeMessage($book, $message));
    }

    public function deleted(Book $book): void
    {
        $message = 'Se ha eliminado un objeto perdido: ';
        event(new RealTimeMessage($book, $message));
    }
}
