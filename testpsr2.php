<?php

class ExampleClass
{
    const  CONST_VALUE  =   'value';

    public function exampleMethod($arg1, $arg2)
    {
        if($arg1> $arg2) {
            echo 'arg1 is greater';
        } else {
            echo 'arg2 is greater';
        }
    }
}

function example_function()
{
    echo "example function";
}
