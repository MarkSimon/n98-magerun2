<?php

namespace N98\Util\Console\Helper\Table\Renderer;

use Symfony\Component\Console\Output\OutputInterface;

interface RendererInterface
{
    /**
     * @param OutputInterface $output
     * @param array $rows
     * @return void
     */
    public function render(OutputInterface $output, array $rows);
}
