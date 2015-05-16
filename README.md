# [Calculate Flight Time](https://github.com/ozgrozer/calculateFlightTime)

It calculates real flight time between two different timezones.


## Usage


**Example 1**

```php
// Washington 2015-05-25T18:25:00
$departure = [ 1432567500, -5 ];

// Manchester 2015-05-26T06:55:00
$arrival = [ 1432612500, 0 ];

// Calculate total flight time
$flightTime = calculateFlightTime( $departure[0], $departure[1], $arrival[0], $arrival[1] );

// Echo result
echo $flightTime;

// It returns
// 7 hours 30 minutes
```


**Example 2**

```php
// Istanbul 2015-05-24T07:25:00
$departure = [ 1432441500, 2 ];

// New York 2015-05-24T11:20:00
$arrival = [ 1432455600, -5 ];

// Calculate total flight time
$flightTime = calculateFlightTime( $departure[0], $departure[1], $arrival[0], $arrival[1] );

// Echo result
echo $flightTime;

// It returns
// 10 hours 55 minutes
```
