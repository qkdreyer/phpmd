<?php

namespace PHPMDTest;

class test_namespaced_compact_function_rule_works_case_insensitive
{
    public function test_namespaced_compact_function_rule_works_case_insensitive()
    {
        $foo = 1; $bar = 2; $baz = 0;

        return Compact('foo', 'bar', 'baz');
    }
}
