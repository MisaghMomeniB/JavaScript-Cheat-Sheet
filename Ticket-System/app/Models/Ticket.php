<?php
   namespace App\Models;

   use Spatie\MediaLibrary\HasMedia;
   use Spatie\MediaLibrary\InteractsWithMedia;
   use Coderflex\LaravelTicket\Models\Ticket as BaseTicket;

   class Ticket extends BaseTicket implements HasMedia
   {
       use InteractsWithMedia;
   }1