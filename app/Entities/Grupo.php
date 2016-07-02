<?php

namespace App\Entities;

class Grupo extends FirebirdModel
{

	protected $fillable = ['AUXGRUPOS', 'REVKM', 'REVQTDE', 'CODUSUALT', 'CODUSUCRIA', 'COMIESP', 'CUSTOMEDIO', 'DATAALT', 'DATACRIA', 'GRUPO', 'SITE', 'FOTONOME', 'FOTOCAMINHO', 'DESCAUX', 'CADINATIVO', 'CODIMPORT'];

	protected $table = 'GRUPOS';

	protected $primaryKey = 'CODGRU';

	public $selectable = ['CODGRU', 'GRUPO'];

}
