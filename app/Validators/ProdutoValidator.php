<?php

namespace App\Validators;

use \Prettus\Validator\Contracts\ValidatorInterface;

class ProdutoValidator extends AbstractValidator
{

	protected $rules = [
		ValidatorInterface::RULE_CREATE => [
			'CODGRU' => 'exists:firebird.GRUPOS,CODGRU',
			'CODSUBGRU' => 'exists:firebird.SUBGRUPOS,CODSUBGRU',
			'CODMAR' => 'exists:firebird.MARCAS,CODMAR',
			'CODCFOPPROD' => 'exists:firebird.NFCFOPPROD,CODCFOPPROD',
			'CODNCM' => 'exists:firebird.NCMS,CODNCM',
			'CODTIPOPRODUTO' => 'exists:firebird.TIPOPRODUTO,CODTIPOPRODUTO',
			'CODUN' => 'exists:firebird.UNIDADES,CODUN',
			'CODUNCONVERSAO' => 'exists:firebird.UNIDADES,CODUN',
			'CODPRODORIGEM' => 'exists:firebird.PRODORIGENS,CODPRODORIGEM',
			'DESCRICAO' => 'required'
		],
		ValidatorInterface::RULE_UPDATE => [
			'CODGRU' => 'exists:firebird.GRUPOS,CODGRU',
			'CODSUBGRU' => 'exists:firebird.SUBGRUPOS,CODSUBGRU',
			'CODMAR' => 'exists:firebird.MARCAS,CODMAR',
			'CODCFOPPROD' => 'exists:firebird.NFCFOPPROD,CODCFOPPROD',
			'CODNCM' => 'exists:firebird.NCMS,CODNCM',
			'CODTIPOPRODUTO' => 'exists:firebird.TIPOPRODUTO,CODTIPOPRODUTO',
			'CODUN' => 'exists:firebird.UNIDADES,CODUN',
			'CODUNCONVERSAO' => 'exists:firebird.UNIDADES,CODUN',
			'CODPRODORIGEM' => 'exists:firebird.PRODORIGENS,CODPRODORIGEM'
		]
	];

	protected $attributes = [
		'CODGRU' => 'Código do Grupo',
		'CODSUBGRU' => 'Código do Subgrupo',
		'CODMAR' => 'Código de Marca',
		'CODTIPOPRODUTO' => 'Código do Tipo do Produto',
		'CODUN' => 'Código de Unidade',
		'CODUNCONVERSAO' => 'Código de Unidade Conversão',
		'CODPRODORIGEM' => 'Código de Origem',
		'DESCRICAO' => 'Descrição'
	];

}