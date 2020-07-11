<?php

//inclusão de data, horário e dia na aplicação
$date = (new Datetime())->getTimestamp();
$today = strftime('%d de %B de %Y', $date);

loadTemplateView('day_records', ['today' => $today]);