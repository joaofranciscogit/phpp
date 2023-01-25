<?php

	namespace Autoload\Lib\Date;

	class Date
	{
		public function dateMonthName(string $monthNumber): string
		{
			$dateMonthName =
		    [
		      '01' => 'Janeiro',
		      '02' => 'Fevereiro',
		      '03' => 'Março',
		      '04' => 'Abril',
		      '05' => 'Maio',
		      '06' => 'Junho',
		      '07' => 'Julho',
		      '08' => 'Agosto',
		      '09' => 'Setembro',
		      '10' => 'Outubro',
		      '11' => 'Novembro',
		      '12' => 'Dezembro'
		    ];

		    return $dateMonthName[$monthNumber];
		}

		public function dateDetail(string $date)
		{
			$dateExplode = explode('-', $date);

  			return	'Dia '.$dateExplode[2]. ' de '.self::dateMonthName($dateExplode[1]). ' de '. $dateExplode[0];
		}
	}