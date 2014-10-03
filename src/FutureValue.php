<?php
namespace GuzzleHttp\Ring;

/**
 * Represents a future value that responds to deref to retrieve a value, but
 * can also yield promise that are delivered the value when it is available.
 */
class FutureValue implements FutureInterface
{
    use BaseFutureTrait;
}
