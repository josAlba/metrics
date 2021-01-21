# METRICS
Biblioteca para realizar metricas de un script de PHP

### Instalar
#### Composer
```bash
$ composer require josalba/metrics
```

## Tiempo
Calcular el tiempo de ejecucion de un fragmento del script.

```
$t1 = metricas\tiempo::getSeconds();

sleep(10);

$t  = metricas\tiempo::getTiempo($t1,\jos\metrics\tiempo::getSeconds()); 

echo $t;

```

## Memoria
Calcula la memoria empleada por un script

```
$m1 = metricas\memoria::memoria();

sleep(10);

$m  = metricas\memoria::getMemoria($m1,\jos\metrics\memoria::memoria());

echo $m;

```