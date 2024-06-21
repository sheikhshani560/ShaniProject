<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactsModel extends Model
{
  use HasFactory;
  protected $table="Contacts";
  protected $primaryKey = 'id';

  protected $fillable = [
      'firstname',
      'lastname',
      'email',
      'subject',
      'message',
  ];
}
