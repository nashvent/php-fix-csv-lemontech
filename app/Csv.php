<?php

namespace App;

class Csv
{
  private $csv = [];
  private $ratesIndex = 3;
  private $taxesIndex = 4;
  private $rates = 0;
  private $taxes = 0;
  private $total = 0;

  public function printTable(): void
  {
    include('../app/views/table.php');
  }

  public function setFile(array $file): void
  {
    $this->csv = array_map('str_getcsv', file($file['tmp_name']));
  }

  public function computeTotals(): void
  {
    # print_r($this->csv, re);


    foreach($this->csv as $row) {
      $this->taxes += (int) $row[4];
      $this->rates += (int) $row[3];
      $this->total += (int) $row[3] + (int) $row[4];
    }

    array_push($this->csv, ['', '', 'Subtotal', $this->rates, '']);
    array_push($this->csv, ['', '', 'Total', $this->total, '']);
  }
}