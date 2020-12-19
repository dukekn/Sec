<?php

namespace Lane\Core\Classes;

class Terminal
{
    private array $pricelist;
    private  array $purchase = [];

    public function __construct(array $pricelist)
    {
        $this->pricelist = $pricelist;
    }

    public function scanItem(string $item)
    {
        $this->purchase[$item]  = (isset($this->purchase[$item])) ?  $this->purchase[$item] + 1 :  1;
    }

    public function getTotal()
    {
        $total = 0;
        foreach ($this->purchase  as $code => $qtty)
        {
            if(in_array($code , array_keys($this->pricelist)))
            {
                $item_prices = $this->pricelist[$code];
                $ppi = $item_prices['ppi'];
                $bulk = $item_prices['bulk']?? null;

                if(isset($bulk))
                {
                    $bulk_min = $bulk['min_qtty'];
                    $bulk_price = $bulk['price'];
                    $bulk_times = intval($qtty / $bulk_min);

                    if($bulk_times  >= 1)
                    {
                        $total += ($bulk_times * $bulk_price) + ($qtty - ($bulk_times * $bulk_min)) * $ppi ;
                    }else{
                        $total += $qtty  * $ppi;
                    }
                }else{
                    $total += $qtty  * $ppi;
                }
            }else{
                throw new \Exception('Unsupported Item!');
            }
        }
        print(round($total , 2));
    }

}