@if ($property->price_currency == 'Kenya Shillings')
    Ksh.
@elseif($property->price_currency == 'US Dollars')
    USD.
@endif
