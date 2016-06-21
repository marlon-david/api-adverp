<?php

namespace App\Entities;

class Veicondutor extends FirebirdModel
{

	protected $fillable = ['CODCONDUTOR'];

	protected $table = 'VEICONDUTOR';

	protected $primaryKey = 'CODVEITRANS';

}
