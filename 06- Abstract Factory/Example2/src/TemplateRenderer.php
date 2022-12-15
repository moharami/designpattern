<?php

namespace Amir\Abstract2;

interface TemplateRenderer
{
    public function render(string $templateString, array $arguments = []): string;
}
