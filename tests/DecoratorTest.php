<?php

namespace Test;

use PHPUnit\Framework\TestCase;
use DifferDev\Web\Input;
use DifferDev\Web\Output;
use DifferDev\Web\Interfaces\IOText;

class DecoratorTest extends TestCase
{
    protected IOText $input;

    protected IOText $output;

    public function setUp(): void
    {
        $this->input = new Input();

        $this->output = new Output();
    }

    public function testCheckGetTextValueForInput()
    {
        $this->input->setText('{ "json": "entrada" }');
        $this->assertEquals(
            '{ "json": "entrada" }',
            $this->input->getText()
        );
    }

    public function testCheckGetTextValueForOutPut()
    {
        $this->output->setText('{ "json": "saída" }');
        $this->assertEquals(
            '{ "json": "saída" }',
            $this->output->getText()
        );
    }

    public function testInputRemoveSpacesAndTagsDecorator()
    {
        $this->input->setText('    { "json": "<h1>entrada</h1>" }      ');

        $this->assertEquals(
            '{ "json": "entrada" }',
            $this->input->getText()
        );
    }

    public function testOutputRemoveSpacesAndTagsDecorator()
    {
        $this->output->setText('    { "json": "<h1>saída</h1>" }      ');

        $this->assertEquals(
            '{ "json": "saída" }',
            $this->output->getText()
        );
    }

    public function testOutputRemoveQuoteDecorator()
    {
        $this->output->setText('    { "json": "<h1>\'saída\'</h1>" }      ');

        $this->assertEquals(
            '{ "json": "\'saída\'" }',
            $this->output->getText()
        );
    }

    public function testInputRemoveQuoteDecorator()
    {
        $this->input->setText('    { "json": "<h1>\'entrada\'</h1>" }      ');

        $this->assertEquals(
            '{ "json": "entrada" }',
            $this->input->getText()
        );
    }
}
