<?php

/**
 * Compute Value added tax
 * 
 * @access public
 * @param float $amount, float $tax_rate
 * @return float $tax_amount
 */

 function compute_tax($amount, $tax_rate) {
   $tax_amount = 0;

   $tax_amount = $amount * ($tax_rate / 100);

  //  echo $tax_amount;
  return $tax_amount;
 }


//  echo compute_tax(23, 5)
compute_tax(23, 5);
?>