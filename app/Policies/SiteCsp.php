<?php

namespace App\Policies;

use Spatie\Csp\Policy;
use Spatie\Csp\Directive;
use Spatie\Csp\Preset;
use Spatie\Csp\Keyword;

class SiteCsp implements Preset
{
    public function configure(Policy $policy): void
    {
        $this->alpineJs($policy);
        $this->google($policy);
    }

    protected function alpineJs(Policy $policy)
    {
        $policy->add(Directive::SCRIPT, Keyword::UNSAFE_EVAL);
    }

    protected function google(Policy $policy)
    {
        $policy->add(Directive::STYLE, "'sha256-ESwzs/pwk6xVxIZH3YCxHKVRV9YGR02+QzCza+PCibs='");
    }
}