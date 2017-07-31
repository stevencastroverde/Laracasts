<?php

 $app['database']->insertName('names', $_POST['name']);


 $names = $app['database']->selectAll('names');

